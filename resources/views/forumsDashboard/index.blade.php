@extends('layouts.main1')
@section('container')
<div class="pl-16 pt-28 pb-10">
    <h1 class="text-5xl font-extrabold text-center pb-3">{{ $title }}</h1>

    <div class="flex justify-center">
        @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-8/12 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessAddForum">
                <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
            </button>
        </div>
        @endif
    </div>
    <div class="relative flex justify-center py-2">
        <a href="{{ route('forumsdashboard.create') }}">
            <button class="border-2 border-green-400 bg-green-400 text-white py-2 w-48 rounded-full 
            hover:bg-green-600 hover:border-green-600 font-medium">
            <i class="bi bi-plus-circle"></i> Buat Forum Baru</button>
        </a>
    </div>
    <div class="flex justify-center items-center pt-3">
        <div class="flex justify-center items-center w-full">
            <div class="w-8/12 p-5 shadow-md bg-[#D9D9D9] rounded-md">
                <ul>
                    @foreach ($forums as $forum)
                        <li>
                            <h2 class="font-semibold text-2xl"><a href="{{ route('forumsdashboard.show', $forum->id) }}">{{ $forum->title }}</a></h2>
                            <p class="pb-2 text-xs text-gray-500">Dibuat Oleh: {{ $forum->user->name }}</p>
                            <p class="text-base">{{ $forum->content }}</p>
                            <div class="py-3 border-b border-gray-400 ">
                                <div class="inline-flex space-x-3">
                                    <a href="{{ route('forumsdashboard.edit', $forum->id) }}">
                                        <button class="w-10 border-2 border-yellow-300 bg-yellow-300 
                                        hover:bg-yellow-500 hover:border-yellow-500 rounded-md">
                                        <i class="bi bi-pencil-fill"></i></button>
                                    </a>
                                    <form action="{{ route('forumsdashboard.destroy', $forum->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-10 border-2 border-rose-400 bg-rose-400 
                                        hover:bg-rose-600 hover:border-rose-600 rounded-md"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>  

    {{ $forums->links() }}
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