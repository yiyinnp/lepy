@extends('layouts.main')
@section('container')
<div class="pt-24 px-24 pb-10">
    
    <h1 class="text-5xl font-extrabold text-center pb-5">{{ $title }}</h1>
    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded-lg relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessAddForum">
            <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
        </button>
    </div>
    @endif
    <div class="flex justify-center items-center pt-2">
        <div class="flex justify-center items-center w-full">
            <div class="w-10/12 p-5 shadow-lg bg-[#D9D9D9] rounded-md">
                <ul>
                    @foreach ($forums as $forum)
                        <li class="py-3 border-b border-gray-400">
                            <h2 class="font-semibold text-2xl"><a href="{{ route('forums.show', ['forum'=>$forum->id]) }}">{{ $forum->title }}</a></h2>
                            <p class="pb-2 text-xs text-gray-500">Dibuat Oleh: {{ $forum->user->name }}</p>
                            <p class="text-base">{{ $forum->content }}</p>
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