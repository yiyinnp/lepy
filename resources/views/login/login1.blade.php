@extends('layouts.main')
@section('container')
<div class="flex justify-center items-center pt-44">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg text-green-500"></i></button>
        </div>
    @endif
    @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x-lg text-red-500"></i></button>
        </div>
    @endif
</div>
<div class="flex justify-center items-center pt-2">
    <div class="w-auto p-6 shadow-lg bg-[#D9D9D9] rounded-md">
        <h1 class="text-3xl block text-center font-semibold">{{ $title }}</h1>
        <form action="/login-email" method="POST"> 
            @csrf
                <div class="mt-3">
                    <label for="email" class="block text-base mb-2">Email</label>
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
                <div class="mt-3 flex justify-between items-center gap-8">
                    <div>
                        <p class="text-xs">Belum punya akun? <a href="/register" class="text-indigo-800 text-xs font-normal">Registrasi sekarang</a></p>
                    </div>
                    <div>
                        <a href="/lupa-password" class="text-indigo-800 text-xs font-normal">Lupa Password?</a>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-xs"><a href="/login" class="text-indigo-800 text-xs font-normal">Login dengan Username</a></p>
                    </div>
                </div>
                <div class="mt-5">
                    <button type="submit" class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-full rounded-md hover:bg-[#395886] hover:border-[#395886] font-semibold"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                </div>
        </form>
    </div>
</div>
@endsection