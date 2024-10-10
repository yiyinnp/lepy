@extends('layouts.main3')
@section('container')
<div class="flex justify-center items-center pt-32">
    @if (session()->has('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-96 rounded-lg relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessRegis">
            <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
        </button>
    </div>
    @endif

    @if (session()->has('loginError'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 w-96 rounded-lg relative" role="alert">
        <span class="block sm:inline">{{ session('loginError') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseLoginError">
            <svg class="h-6 w-6 text-red-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
        </button>
    </div>
    @endif
</div>
<div class="flex justify-center items-center pt-2 pb-32">
    <div class="w-80 lg:w-auto p-6 shadow-md bg-[#D9D9D9] bg-opacity-40 rounded-md">
        <div class="flex justify-between items-center">
          <a href="/"><img class="w-32 hover:scale-105 duration-300" src="/assets/logo-web-terbaruu.png" alt="" srcset=""></a>
          <a href="/"><img class="w-16 h-16 rounded-xl hover:scale-105 duration-300" src="/assets/lepi.jpeg" alt="" srcset=""></a>
        </div>
        <form action="/login-email" method="POST"> 
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
                    @error('password') border-red-500 @enderror required" value="{{ old('password') }}" placeholder="Ketikkan Password...">
                    <label for="showPassword" class="ml-2 text-xs cursor-pointer"><input type="checkbox" class="text-xs mt-1" id="showPassword" /> Tampilkan Password</label>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-3 flex justify-between items-center gap-8">
                    <div>
                        <p class="text-xs">Belum punya akun? <a href="/register" class="text-indigo-800 text-xs font-normal">Registrasi sekarang</a></p>
                    </div>
                    <div>
                        <a href="/lupa-password" class="text-indigo-800 text-xs font-normal">Lupa Password?</a>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-2">
                    <p class="text-xs"><a href="/login" class="text-indigo-800 text-xs font-normal">Login dengan Username</a></p>
                </div>
                <div class="mt-4">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:scale-105 duration-300 font-semibold"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                </div>
        </form>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeButtonSuccessRegis = document.querySelector('[aria-label="CloseSuccessRegis"]');
        const alertBoxSuccessRegis = closeButtonSuccessRegis ? closeButtonSuccessRegis.closest('.bg-green-100') : null;

        if (closeButtonSuccessRegis) {
            closeButtonSuccessRegis.addEventListener('click', function() {
                alertBoxSuccessRegis.remove();
            });
        }

        const closeButtonLoginError = document.querySelector('[aria-label="CloseLoginError"]');
        const alertBoxLoginError = closeButtonLoginError ? closeButtonLoginError.closest('.bg-red-100') : null;

        if (closeButtonLoginError) {
            closeButtonLoginError.addEventListener('click', function() {
                alertBoxLoginError.remove();
            });
        }
        
        const showPasswordCheckbox = document.getElementById('showPassword');
        const passwordInput = document.getElementById('password');

        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    });
</script>