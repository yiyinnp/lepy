@extends('layouts.main')
@section('container')
@php
    $questions = \App\Models\Question::where('id', 17)->value('content');
    $correctAnswer = \App\Models\Answer::where('id', 17)->value('content');
    $correctAnswer = str_replace("\n", "", $correctAnswer);
@endphp
<div class="flex justify-center items-center pt-28 pb-10 px-8">
    <div class="flex justify-center items-center w-full">
        <div class="w-full p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <h1 class="text-3xl block text-center font-semibold">Code Compiler</h1>
            <p class="text-semibold">{!! nl2br(e( $questions)) !!}</p>
        </div>
    </div>
</div>
<div class="flex px-8 pb-10">
    <div class="flex-none w-8/12 h-96 pr-10">
        <form id="compilerForm" class="mx-auto bg-[#395886] p-5 rounded-lg shadow-md">
            <div class="mb-2">
                <label for="code" class="block text-white text-sm font-bold mb-2">Ketikan Kode Program Anda:</label>
                <textarea name="code" rows="10" cols="50" class="w-full px-3 py-2 bg-slate-50 border rounded-lg focus:outline-none focus:ring focus:border-slate-300"></textarea><br>
            </div>
            <div class="flex justify-between">
                <div>
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:ring focus:border-green-300"><i class="bi bi-play-fill"></i> Jalankan</button>
                    <button type="button" id="refreshBtn" class="ml-2 bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 focus:outline-none focus:ring focus:border-gray-500"><i class="bi bi-arrow-clockwise"></i> Refresh</button>
                    <a href="{{ route('material.looping') }}"><button type="button" class="ml-2 bg-yellow-300 text-gray-700 px-4 py-2 rounded hover:bg-yellow-400 focus:outline-none focus:ring focus:border-yello-500"><i class="bi bi-arrow-left"></i> Back</button></a>
                </div>
                <div>
                    <a href="{{ route('compile.looping.1') }}"><button type="button" class="ml-2 bg-blue-300 text-gray-700 px-4 py-2 rounded hover:bg-blue-400 focus:outline-none focus:ring focus:border-blue-500"><i class="bi bi-caret-left-fill"></i></button></a>
                    <a href="{{ route('compile.looping.3') }}"><button type="button" id="compileBtn12" class="ml-2 bg-blue-300 text-gray-700 px-4 py-2 rounded hover:bg-blue-400 focus:outline-none focus:ring focus:border-blue-500" disabled><i class="bi bi-caret-right-fill"></i></button></a>
                </div>
            </div>
        </form>
    </div>
    <div class="flex flex-col w-4/12 h-96">
        <div class="mx-auto bg-[#395886] p-6 rounded-lg shadow-md">
            <label for="user_input" class="block text-white text-sm font-bold mb-2">Input:</label>
            <textarea name="user_input" rows="4" cols="50" class="w-full px-3 py-2 bg-slate-50 border rounded-lg focus:outline-none focus:ring focus:border-blue-300"></textarea><br>
        </div>
        <div class="w-full h-full mx-auto bg-[#395886] p-6 rounded-lg shadow-md mt-4">
            <div id="error" class="text-red-600 bg-white rounded-md text-center font-semibold"></div>
            <div id="correct" class="text-green-600 bg-white rounded-md text-center font-semibold"></div>
            <label for="output" class="block text-white text-sm font-bold mb-2">Output:</label>
            <pre id="output" class="w-full px-3 py-2 bg-slate-200 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" readonly></pre>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let correctAnswer = {!! json_encode(trim(preg_replace('/\s+/', ' ', $correctAnswer))) !!};
        let compileBtn12 = document.querySelector('#compileBtn12');

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
                document.getElementById('error').innerText = '';
                

                let userCode = code.trim().replace(/\s+/g, ' ');

                if (userCode === correctAnswer) {
                    document.getElementById('correct').innerText = "Jawaban benar!";
                    document.getElementById('error').innerText = '';
                    compileBtn12.removeAttribute('disabled');

                    alert("Selamat, Anda berhasil mendapatkan 20 poin!");

                    // Panggil fungsi updateLeaderboard dengan ID pengguna dan skor
                    fetch('/update-leaderboard', {
                        method: 'POST', // Metode permintaan POST
                        headers: {
                            'Content-Type': 'application/json', // Header tipe konten JSON
                            'X-CSRF-TOKEN': csrfToken // Token CSRF
                        },
                        body: JSON.stringify({ userId: userId, score: 0 }) // Data yang dikirimkan sebagai JSON
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
                    document.getElementById('error').innerText = "Masih terdapat kesalahan dalam kode program Anda";
                    compileBtn12.setAttribute('disabled', 'disabled');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('correct').innerText = '';
                document.getElementById('output').innerText = '';
                document.getElementById('error').innerText = "Python tidak dapat mengeksekusi perintah yang Anda masukkan"; // Display error message
                compileBtn12.setAttribute('disabled', 'disabled');
            });
        });
        document.getElementById('refreshBtn').addEventListener('click', function() {
            document.querySelector('textarea[name="code"]').value = '';
            document.querySelector('textarea[name="user_input"]').value = '';
            document.getElementById('output').innerText = '';
            document.getElementById('error').innerText = '';
            document.getElementById('correct').innerText = '';
            compileBtn12.setAttribute('disabled', 'disabled');
        });
    });
</script>
@endsection