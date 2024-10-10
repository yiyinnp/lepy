@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-28">
    <h1 class="text-4xl font-extrabold text-center">{{ $title }}</h1>
    <div class="flex justify-center items-center pt-5">
        <div class="w-8/12">
            @if (session()->has('success'))
            <div class="pb-3">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded-lg relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessEditQuestion">
                        <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
                    </button>
                </div>
            </div>
            @endif
            <table class="table-auto border-collapse w-full rounded-md">
                <thead class="text-white">
                    <tr class="bg-gray-500 text-center">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Subbab Latihan</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $question)
                    <tr class="bg-white divide-y divide-gray-400">
                        <td class="text-center py-1">{{ $loop->iteration }}</td>
                        <td class="py-1">{{ $question->title }}</td>
                        <td class="text-center py-1"> 
                            <form action="{{ route('questions.edit', ['question' => $question->id]) }}" method="GET">
                                @csrf
                                <button class="w-16 h-6 border-2 border-amber-300 bg-amber-300 hover:scale-105 rounded-md">
                                <i class="bi bi-pencil"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeButtonSuccessEditQuestion = document.querySelector('[aria-label="CloseSuccessEditQuestion"]');
        const alertBoxSuccessEditQuestion = closeButtonSuccessEditQuestion ? closeButtonSuccessEditQuestion.closest('.bg-green-100') : null;

        if (closeButtonSuccessEditQuestion) {
            closeButtonSuccessEditQuestion.addEventListener('click', function() {
                alertBoxSuccessEditQuestion.remove();
            });
        }
    });
</script>
@endsection