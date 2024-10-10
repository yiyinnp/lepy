@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-28">
    <h1 class="text-4xl font-extrabold text-center pb-5">{{ $title }}</h1>

    <div class="fflex justify-center items-center">
        @if (session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-10/12 rounded-lg relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessAddForum">
                <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
            </button>
        </div>
        @endif
    </div>
    <div class="flex justify-between py-2 space-x-4 mx-2 lg:px-[100px]">
        <a href="{{ route('forumsdashboard.create') }}">
            <button class="border-2 border-green-400 bg-green-400 text-white py-2 w-48 rounded-full 
            hover:scale-105 font-medium">
            <i class="bi bi-plus-circle"></i> Buat Forum Baru</button>
        </a>

        <form action="{{ route('forumsdashboard.index') }}" method="get" class="flex">
            <input type="text" name="search" class="border border-gray-300 rounded-l-lg px-4 py-2 w-full md:w-72 focus:outline-none focus:border-[#395886]" placeholder="Cari...">
            <button class="bg-blue-500 hover:bg-[#395886] text-white px-4 py-2 rounded-r-lg md:ml-0"><i class="bi bi-search"></i></button>
        </form>
    </div>
    <div class="flex justify-center items-center">
        <div class="flex justify-center items-center w-full">
            <div class="w-10/12 p-5 shadow-md bg-white rounded-md">
                <ul>
                    @if ($forums->count())
                        @foreach ($forums as $forum)
                            <li>
                                <h2 class="font-semibold text-2xl underline hover:text-[#638ECB]"><a href="{{ route('forumsdashboard.show', $forum->id) }}">{{ $forum->title }}</a></h2>
                                <p class="pb-2 text-xs text-gray-500">Dibuat Oleh: {{ $forum->user->name }}</p>
                                <p class="text-base">{{ $forum->content }}</p>
                                <div class="py-3 border-b border-gray-400 mb-4">
                                    <div class="inline-flex space-x-3">
                                        <a href="{{ route('forumsdashboard.edit', $forum->id) }}">
                                            <button class="w-10 border-2 border-yellow-300 bg-yellow-300 
                                            hover:scale-105 rounded-md">
                                            <i class="bi bi-pencil-fill"></i></button>
                                        </a>
                                        <form action="{{ route('forumsdashboard.destroy', $forum->id) }}" method="POST" id="deleteForumForm-{{ $forum->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-10 border-2 border-rose-400 bg-rose-400 
                                            hover:scale-105 rounded-md delete-btn" data-forum-id="{{ $forum->id }}"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @else
                    <h1 class="text-center text-2xl font-semibold">Forum Tidak Ditemukan</h1>
                    @endif
                </ul>
            </div>
        </div>
    </div>  

    <div class="flex justify-end items-center my-8 mx-1 lg:mx-20">
        <div class="flex-shrink-0">
            {{ $forums->links() }}
        </div>
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

        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const forumId = this.dataset.forumId;
                const confirmation = confirm('Apakah Anda yakin ingin menghapus forum diskusi?');
                if (confirmation) {
                    const form = document.getElementById(`deleteForumForm-${forumId}`);
                    if (form) {
                        form.submit();
                    }
                } else {
                    alert('Hapus forum diskusi dibatalkan.');
                }
            });
        });
    });
</script>
@endsection