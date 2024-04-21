@extends('layouts.main')
@section('container')
<div class="flex justify-center items-center pt-44">

    @if (session()->has('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-96 rounded-lg relative" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseChangeError">
            <svg class="h-6 w-6 text-red-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
        </button>
    </div>
    @endif

</div>
<div class="flex justify-center items-center pt-2">
    <div class="w-96 p-6 shadow-lg bg-[#D9D9D9] rounded-md">
        <h1 class="text-3xl block text-center font-semibold">{{ $title }}</h1>
        <form action="/lupa-password" method="POST"> 
            @csrf
                <div class="mt-3">
                    <label for="email" class="block text-base mb-2">Username</label>
                    <input type="email" id="email" name="email" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('email') border-red-500 @enderror required" value="{{ old('email') }}" placeholder="Ketikkan Email..." />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="block text-base mb-2">Password</label>
                    <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none rounded-sm focus:ring-0 focus:border-gray-400 
                    @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Ketikkan Password..." />      
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mt-5">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:bg-[#395886] hover:border-[#395886] font-semibold"><i class="bi bi-floppy"></i> Simpan</button>
                </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const closeButtonChangeError = document.querySelector('[aria-label="CloseChangeError"]');
        const alertBoxChangeError = closeButtonChangeError ? closeButtonChangeError.closest('.bg-red-100') : null;

        if (closeButtonChangeError) {
            closeButtonChangeError.addEventListener('click', function() {
                alertBoxChangeError.remove();
            });
        }
    });
</script>
@endsection