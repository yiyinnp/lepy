@extends('layouts.master')

@section('container')
    <div class="w-screen">
        <img src="{{ asset('assets/homi1.png') }}" alt="" class="max-h-screen float-right">
    </div>

    <div class="pt-36 pb-10 ml-10">
        <h3 class="text-[68px] font-extrabold">Selamat Datang,</h3>
    </div>

    <div class="mx-10">
        <h4 class="text-xl text-justify">Di platform belajar bahasa pemrograman Python, Learning Python (LePy). 
            Di Platform ini Anda dapat belajar dasar-dasar dari bahasa pemrograman Python. 
            Platform ini menyediakan materi berupa text dan video, serta latihan untuk
            keterampilan berupa fitur live coding.</h4>
    </div>

    <div class="py-16 ml-10">
        <a href="/login"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:bg-[#395886] hover:border-[#395886] font-semibold">Login</button></a>
        <a href="/register"><button class="border-2 border-[#638ECB] bg-[#638ECB] text-white py-1 w-48 rounded-full hover:bg-[#395886] hover:border-[#395886] font-semibold">Registrasi</button></a>
    </div>    
@endsection