@extends('layouts.main3')
@section('container')
<div class="flex justify-center items-center h-screen">
    <div class="w-80 lg:w-2/5 p-6 shadow-md bg-[#D9D9D9] bg-opacity-40 rounded-md">
        <div class="flex justify-between items-center">
            <a href="/"><img class="w-32 hover:scale-105 duration-300" src="/assets/logo-web-terbaruu.png" alt="" srcset=""></a>
            <a href="/"><img class="w-16 h-16 rounded-xl hover:scale-105 duration-300" src="/assets/lepi.jpeg" alt="" srcset=""></a>
        </div>
        <h1 class="text-3xl block text-center font-semibold">{{ $title }}</h1>
        <form action="/lupa-password" method="POST"> 
            @csrf
                <div class="mt-3">
                    <label for="email" class="block text-sm">Email</label>
                    <input type="email" id="email" name="email" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 
                    @error('email') border-red-500 @enderror required" value="{{ old('email') }}" placeholder="Ketikkan Alamat Email..." />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password" class="block text-sm">Password</label>
                    <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 
                    @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Ketikkan Password..." />      
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="password_confirmation" class="block text-sm">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="border w-full text-base px-2 py-1 focus:outline-none rounded-md focus:ring-1 focus:border-gray-400 required" placeholder="Ketikkan Konfirmasi Password..." />
                    <label for="showPassword" class="ml-2 text-xs cursor-pointer"><input type="checkbox" class="text-xs" id="showPassword" /> Tampilkan Password</label>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mt-4">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:scale-105 duration-300 font-semibold"><i class="bi bi-floppy"></i> Simpan</button>
                </div>
        </form>
        <div class="mt-1">
            <a href="/login">
                <button type="submit" class="border-2 border-rose-400 bg-rose-400 text-white py-1 w-full rounded-md hover:scale-105 duration-300 font-semibold"><i class="bi bi-x-lg"></i> Batal</button>
            </a>
        </div>
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
        
        const showPasswordCheckbox = document.getElementById('showPassword');
        const passwordInput = document.getElementById('password');
        const password_confirmationInput = document.getElementById('password_confirmation');

        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.type = 'text';
                password_confirmationInput.type = 'text';
            } else {
                passwordInput.type = 'password';
                password_confirmationInput.type = 'password';
            }
        });
    });
</script>
@endsection