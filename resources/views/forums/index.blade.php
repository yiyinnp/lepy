@extends('layouts.main')
@section('container')
<div class="py-24 px-24">
    <h1 class="text-4xl font-extrabold text-center">{{ $title }}</h1>
    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded-lg relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessAddForum">
            <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
        </button>
    </div>
    @endif
    <div class="flex items-center justify-center mt-5 mb-3">
        <form action="{{ route('forums.index') }}" method="get" class="flex">
            <input type="text" name="search" class="border border-gray-300 rounded-l-lg px-4 py-2 w-full md:w-72 focus:outline-none focus:ring-1 focus:border-[#395886]" placeholder="Cari...">
            <button class="bg-blue-500 hover:bg-[#395886] text-white px-4 py-2 rounded-r-lg md:ml-0"><i class="bi bi-search"></i></button>
        </form>
    </div>
    
    <div class="flex justify-center items-center w-full">
        <div class="w-80 lg:w-10/12 px-5 pb-4 shadow-md bg-[#d9d9d9] rounded-lg">
            <ul>
                @if ($forums->count())
                    @foreach ($forums as $forum)
                        <li class="border-b border-gray-400">
                            <h2 class="mt-4 font-semibold text-2xl underline hover:text-[#638ECB]"><a href="{{ route('forums.show', ['forum'=>$forum->id]) }}">{{ $forum->title }}</a></h2>
                            <p class="pb-2 text-xs text-gray-500">Dibuat Oleh: {{ $forum->user->name }}</p>
                            <p class="text-base">{{ $forum->content }}</p>
                        </li>
                    @endforeach
                @else
                <h1 class="text-center text-2xl font-semibold my-5">Forum Tidak Ditemukan</h1>
                @endif
            </ul>
        </div>
    </div> 

    <div class="flex justify-end items-center my-8 mx-2 lg:mx-20">
        <div class="flex-shrink-0">
            {{ $forums->links() }}
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeButtonSuccessAddForum = document.querySelector('[aria-label="CloseSuccessAddForum"]');
        const alertBoxSuccessAddForum = closeButtonSuccessAddForum ? closeButtonSuccessAddForum.closest('.bg-green-100') : null;

        if (closeButtonSuccessAddForum) {
            closeButtonSuccessAddForum.addEventListener('click', function() {
                alertBoxSuccessAddForum.remove();
            });
        }
    });
</script>
@endsection