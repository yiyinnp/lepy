@extends('layouts.main')
@section('container')
<div class="px-24 pt-28">
    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded-lg relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessUpdate">
            <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
        </button>
    </div>
    @endif
    <div class="flex flex-row pt-2">
        <div class="w-full p-6 shadow-md bg-[#D9D9D9] rounded-md">
            <div class="pt-3 pb-2">
                <h3 class="text-5xl font-extrabold text-center">PROFIL</h3>
            </div>
            <form action="/profil/update" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mt-3">
                    <label for="name" class="block text-base mb-2">Nama Pengguna</label>
                    <input type="text" id="name" name="name" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400
                    @error('name') border-red-500 @enderror required" value="{{ old('name', $user->name) }}"/>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="username" class="block text-base mb-2">Username</label>
                    <input type="text" id="username" name="username" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('username') border-red-500 @enderror required" value="{{ old('username', $user->username) }}" />
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="email" class="block text-base mb-2">Surel</label>
                    <input type="email" id="email" name="email" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('email') border-red-500 @enderror required" value="{{ old('email', $user->email) }}"/>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="block text-base mb-2">Password</label>
                    <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 
                    focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Abaikan/Kosongi, jika tidak ada perubahan"/>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-5">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:bg-transparent hover:text-[#638ECB] font-semibold"><i class="bi bi-floppy"></i>&nbsp;&nbsp;Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeButtonCloseSuccessUpdate = document.querySelector('[aria-label="CloseSuccessUpdate"]');
        const alertBoxCloseSuccessUpdate = closeButtonCloseSuccessUpdate ? closeButtonCloseSuccessUpdate.closest('.bg-green-100') : null;

        if (closeButtonCloseSuccessUpdate) {
            closeButtonCloseSuccessUpdate.addEventListener('click', function() {
                alertBoxCloseSuccessUpdate.remove();
            });
        }
    });
</script>
@endsection