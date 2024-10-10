@extends('layouts.main2')
@section('container')
    <div class="flex justify-center items-center pt-24">
        <div class="w-9/12">
            <h1 class="lg:text-4xl text-3xl font-extrabold w-auto text-center">{{ $title }}</h1>
        </div>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-9/12">
            <div class="pb-2">
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Bahasa pemrograman Python pertama kali diperkenalkan pada tahun 1991 oleh Guido van Rossum di Scitching
                    Mathematisch Centrum Belanda.
                    Tujuan utama pembuatan bahasa pemrograman python untuk membuat bahasa pemrograman yang mudah dibaca,
                    tapi juga kuat.
                    Python terinspirasi dari bahasa pemrograman ABC dan mengutamakan kejelasan serta kode yang ringkas.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Penamaan bahasa pemrogramaan python terinspirasi dari nama grup komedi bernama Monty Python yang disukai
                    oleh Guido.
                    Pengembangan bahasa pemrograman Python bersifat <i>open source</i>, sehingga Python bermigrasi dari lab
                    ke lab yang lain, satu perusahan ke perusahaan yang lain.
                    Saat ini pengembangan bahasa pemrogramaan ini telah sampai pada versi 3.11.0 yang dirilis pada 24
                    Oktober 2022.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Masing-masing versi Python memiliki ciri khas, seperti pada versi Python 2 memiliki fitur Python
                    <i>Enhancement</i> Proposal (PEP) yang memberikan tuntunan informasi bagi para pengguna.
                    Selain itu, Python 2 memiliki fitur-fitur <i>programmatical</i> diantaranya berfungsi untuk manajemen
                    memori.
                    Pada Python 3 berfokus pada merapikan <i>codebase</i> dan menghilangkan <i>redundancy</i>.
                    Perubahan terbesar dalam Python 3 adalah membuat <i>statement print</i> dalam fungsi yang
                    <i>built-in</i>.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Python merupakan bahasa pemrograman yang muncul setelah bahasa pemrograman-pemrograman yang lain.
                    Namun perkembangannya cukup pesat dikarenakan memiliki keunggulan-keunggulan sebagai berikut:
                    <ul class="list-decimal pl-10">
                        <li>Keterbacaan atau <i>Readablity</i></li>
                        <li>Efisien</li>
                        <li>Multifungsi</li>
                        <li>Interoperabilitas</li>
                    </ul>
                </h4>
                <div class="flex justify-center pb-28 lg:pb-16">
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/vIvyZGVQnb0?si=GTWQ7UFZTbgOD2pW" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('footer')
    <div class="bg-[#dadce1] fixed py-2 px-10 bottom-0 w-full rounded-t-lg">
        <div class="flex justify-between items-center hidden sm:flex">
            <a href="" class="pointer-events-none"><button type="button"
                    class="bg-[#dadce1] text-[#dadce1] px-3 py-2 mt-1 rounded">Materi Selanjutnya<i
                        class="bi bi-caret-right-fill"></i></button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i> Kembali ke Menu Materi</button></a>
            <a href="{{ route('material.variable') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300">Materi
                    Selanjutnya<i class="bi bi-caret-right-fill"></i></button></a>
        </div>
        <div class="flex justify-between items-center md:hidden">
            <a href="" class="pointer-events-none"><button type="button"
                    class="bg-[#dadce1] text-[#dadce1] px-3 py-2 mt-1 rounded"><i
                        class="bi bi-caret-right-fill"></i></button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i></button></a>
            <a href="{{ route('material.variable') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-right-fill"></i></button></a>
        </div>
    </div>
@endsection
