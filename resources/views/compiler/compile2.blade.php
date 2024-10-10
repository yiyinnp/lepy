@extends('layouts.main')
@section('container')
@php
    $questions = \App\Models\Question::where('id', 2)->value('content');
    $correctAnswer = \App\Models\Answer::where('id', 2)->value('content');
    $correctAnswer = str_replace("\n", "", $correctAnswer);
@endphp
<div class="flex justify-center items-center pt-28 pb-10 px-8">
    <div class="flex justify-center items-center w-full">
        <div class="w-full p-6 shadow-md bg-slate-50 rounded-md">
            <h1 class="text-3xl block text-center font-semibold">Soal {{ $title }}</h1>
            <p class="text-semibold">{!! nl2br(e( $questions)) !!}</p>
        </div>
    </div>
</div>
<div class="flex flex-col lg:flex-row px-8 pb-10">
    <div class="flex-none lg:w-8/12 w-full h-96 lg:pr-5 pr-0 lg:mb-0 mb-5">
        <form id="compilerForm" class="mx-auto bg-[#395886] px-4 pb-4 lg:mb-0 mb-5 pt-2 rounded-lg shadow-md" action="/compile" method="POST">
            @csrf
            <div>
                <div class="flex justify-between items-center">
                    <label for="code" class="block text-white text-sm font-bold mb-2">Ketikan Kode Program Anda:</label>
                    <label id="timer" data-time="0" class="border-[3px] border-lime-300 text-white text-center py-1 w-16 mb-2 rounded">10:00</label>
                </div>
                <textarea name="code" rows="10" cols="50" class="w-full px-3 py-2 bg-slate-50 border rounded-lg focus:outline-none focus:ring focus:border-slate-300"></textarea><br>
            </div>
            <div class="flex justify-between items-center hidden sm:flex">
                <div>
                    <button type="submit" class="bg-green-500 text-white px-3 py-2 mt-1 rounded hover:bg-green-600"><i class="bi bi-play-fill"></i> Run</button>
                    <button type="button" id="refreshBtn" class="ml-2 bg-gray-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-gray-400"><i class="bi bi-arrow-clockwise"></i> Refresh</button>
                    <a href="{{ route('material.variable') }}"><button type="button" class="ml-2 bg-yellow-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-yellow-400"><i class="bi bi-arrow-left"></i> Back</button></a>
                </div>
                <div>
                    <a href="{{ route('compile.variable.1') }}"><button type="button" class="ml-2 bg-blue-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-blue-400"><i class="bi bi-caret-left-fill"></i></button></a>
                    <label for="" class="text-center ml-2 mt-1 font-medium text-white">2/5</label>
                    <a href="{{ route('compile.variable.3') }}"><button type="button" class="ml-2 bg-blue-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-blue-400"><i class="bi bi-caret-right-fill"></i></button></a>
                </div>
            </div>
            <div class="flex justify-between items-center md:hidden">
                <div>
                    <button type="submit" class="bg-green-500 text-white px-3 py-2 mt-1 rounded hover:bg-green-600"><i class="bi bi-play-fill"></i></button>
                    <button type="button" id="refreshBtn" class="ml-2 bg-gray-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-gray-400"><i class="bi bi-arrow-clockwise"></i></button>
                    <a href="{{ route('material.variable') }}"><button type="button" class="ml-2 bg-yellow-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-yellow-400"><i class="bi bi-arrow-left"></i></button></a>
                </div>
                <div>
                    <a href="{{ route('compile.variable.1') }}"><button type="button" class="ml-2 bg-blue-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-blue-400"><i class="bi bi-caret-left-fill"></i></button></a>
                    <label for="" class="text-center ml-2 mt-1 font-medium text-white">2/5</label>
                    <a href="{{ route('compile.variable.3') }}"><button type="button" class="ml-2 bg-blue-300 text-gray-700 px-3 py-2 mt-1 rounded hover:bg-blue-400"><i class="bi bi-caret-right-fill"></i></button></a>
                </div>
            </div>
        </form>
    </div>
    <div class="flex flex-col lg:w-4/12 w-full h-96">
        <div class="mx-auto w-full bg-[#395886] p-6 rounded-lg shadow-md">
            <label for="user_input" class="block text-white text-sm font-bold mb-2">Input:</label>
            <textarea name="user_input" rows="4" cols="50" class="w-full px-3 py-2 bg-slate-50 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"></textarea><br>
        </div>
        <div class="w-full h-full mx-auto bg-[#395886] p-6 rounded-lg shadow-md mt-4">
            <div id="error" class="text-red-600 bg-white rounded-md text-center font-semibold"></div>
            <div id="warning" class="text-yellow-500 bg-white rounded-md text-center font-semibold"></div>
            <div id="correct" class="text-green-600 bg-white rounded-md text-center font-semibold"></div>
            <label for="output" class="block text-white text-sm font-bold mb-2">Output:</label>
            <pre id="output" class="w-full overflow-auto px-3 py-2 bg-slate-200 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" readonly></pre>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let correctAnswer = {!! json_encode(trim(preg_replace('/\s+/', ' ', $correctAnswer))) !!};

        document.getElementById('compilerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            let userId = {{ optional(auth()->user())->id ?? 0 }};

            let code = document.querySelector('textarea[name="code"]').value;
            let userInput = document.querySelector('textarea[name="user_input"]').value;
            let csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
            fetch('/compile', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({ code: code, user_input: userInput })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                document.getElementById('output').innerText = data.output;
                document.getElementById('warning').innerText = '';
                document.getElementById('error').innerText = '';
                

                let userCode = code.trim().replace(/\s+/g, ' ');

                if (userCode === correctAnswer) {
                    document.getElementById('correct').innerText = "Jawaban benar!";
                    document.getElementById('warning').innerText = '';
                    document.getElementById('error').innerText = '';
                    compileBtn3.removeAttribute('disabled');

                    alert("Selamat, Anda berhasil mendapatkan 20 poin!");

                    // Panggil fungsi updateLeaderboard dengan ID pengguna dan skor
                    fetch('/update-leaderboard', {
                        method: 'POST', // Metode permintaan POST
                        headers: {
                            'Content-Type': 'application/json', // Header tipe konten JSON
                            'X-CSRF-TOKEN': csrfToken // Token CSRF
                        },
                        body: JSON.stringify({ userId: userId, score: 20 })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Leaderboard updated:', data);
                    })
                    .catch(error => {
                        console.error('Error updating leaderboard:', error);
                    });

                } else {
                    document.getElementById('correct').innerText = '';
                    document.getElementById('error').innerText = '';
                    document.getElementById('warning').innerText = "Penulisan kode program tidak sesuai dengan petunjuk pengerjaan";
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('correct').innerText = '';
                document.getElementById('output').innerText = '';
                document.getElementById('warning').innerText = '';
                document.getElementById('error').innerText = "Python tidak dapat mengeksekusi perintah yang Anda masukkan"; // Display error message
            });
        });
        document.getElementById('refreshBtn').addEventListener('click', function() {
            document.querySelector('textarea[name="code"]').value = '';
            document.querySelector('textarea[name="user_input"]').value = '';
            document.getElementById('warning').innerText = '';
            document.getElementById('output').innerText = '';
            document.getElementById('error').innerText = '';
            document.getElementById('correct').innerText = '';
        });
        
        let timeRemaining = 600; 
        let timerDisplay = document.getElementById('timer');
        
        function formatTime(seconds) {
            let minutes = Math.floor((seconds % 3600) / 60);
            let secs = seconds % 60;
            return (
                (minutes < 10 ? '0' : '') +
                minutes +
                ':' +
                (secs < 10 ? '0' : '') +
                secs
            );
        }

        function updateTimer() {
            timerDisplay.textContent = formatTime(timeRemaining);
            timeRemaining--;

            if (timeRemaining < 0) {
                clearInterval(timer);
                timerDisplay.textContent = "00:00";
                alert("Waktu Habis");
                window.location.reload();
            }
        }

        let timer = setInterval(updateTimer, 1000);
    });
</script>
@endsection