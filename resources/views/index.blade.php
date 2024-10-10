@extends('layouts.master')
@section('container')
<div class="py-20 w-screen" id="beranda">
    <div>
        <img src="{{ asset('/assets/homi1.png') }}" alt="" class=" py-20 mx-14 max-h-screen float-right">
    </div>

    <div class="lg:pt-44 pt-36 pb-2 lg:pl-10 ml-10 flex items-start">
        <img src="/assets/lepi.jpeg" alt="Learning Python Logo" class="w-20 h-20 mb-2 rounded-xl mr-4">
        <h1 class="text-4xl font-extrabold my-2">LEARNING PYTHON (LePy)</h1>
    </div>
    <div class="ml-10 lg:ml-20">
        <h3 class="text-[26px] font-extrabold">Platform Pembelajaran <i>Online</i></h3>
        <h3 class="text-[26px] font-extrabold">Berbasis Gamifikasi dan <i>Live Coding</i></h3>
        <p class="text-md text-justify mt-2"> 
            Platform LePy Anda akan belajar dasar-dasar dari bahasa pemrograman Python. 
            Platform LePy menyediakan materi berupa text dan video, serta latihan untuk
            keterampilan berupa fitur live coding.</p>
    </div>
    <div class="ml-10 lg:ml-20 mt-10">
        <a href="/login"><button class="bg-[#638ECB] w-28 py-2 font-semibold text-white rounded-lg hover:scale-105 hover:underline-rounded duration-300">Mulai</button></a>
    </div>
</div>

<div class="py-20" id="infopembaca">
    <div class="hidden md:block">
        <img src="{{ asset('/assets/homi2.png') }}" alt="" class=" py-20 pl-10 mx-10 max-h-screen w-2/5 float-left">
    </div>

    <div class="w-full lg:w-2/4 h-[420px] flex justify-center">
        <embed src="{{ asset('/assets/GUIDE BOOK.pdf') }}" type="application/pdf" class="w-full h-full block md:hidden" />
        <embed src="{{ asset('/assets/GUIDE BOOK.pdf') }}" type="application/pdf" class="hidden md:block w-full h-full" />
    </div>
</div>

<div class="py-52 h-screen" id="infopengembang">
    <div class="w-96 lg:w-8/12 p-10 shadow-md bg-[#d9d9d9] rounded-lg mx-auto">
        <div>
            <h3 class="text-2xl font-extrabold pb-3">INFO PENGEMBANG</h3>
        </div>
        <div>
            <img src="{{ asset('assets/yiyin.png') }}" alt="" class="mr-6 max-h-44 float-left hover:scale-105">
        
            <div>
                <h3 class="text-xl font-extrabold">YIYIN NORIYAH PUTRI</h3>
            </div>
            <div class="pb-2">
                <h4 class="text-md font-semibold">200631100038</h4>
                <h4 class="text-md font-semibold">Pendidikan Informatika</h4>
            </div>
            <div class="pb-2">
                <h4 class="text-md font-semibold text-justify">Dosen Pembimbing: Etistika Yuni Wijaya, S.Pd., M.Pd.</h4>
            </div>
            <div class="pb-2">
                <h4 class="text-md text-justify">Judul Skripsi: Pengembangan <i>Web Based Learning</i> Menggunakan <i>User Centered Design</i> pada Mata Pelajaran Pemrograman Dasar di SMK Negeri 2 Bangkalan</h4>
            </div>
        </div>
    </div>
</div>   
@endsection