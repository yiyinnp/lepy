@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-28">
    <div class="flex justify-center items-center">
        <div class="w-9/12">
            <h1 class="lg:text-4xl text-3xl font-extrabold w-auto text-center">{{ $title }}</h1>
        </div>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-9/12">
            <div class="pb-2">
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Bahasa pemrograman Python pertama kali diperkenalkan pada tahun 1991 oleh Guido van Rossum di Scitching Mathematisch Centrum Belanda.
                    Tujuan utama pembuatan bahasa pemrograman python untuk membuat bahasa pemrograman yang mudah dibaca, tapi juga kuat.
                    Python terinspirasi dari bahasa pemrograman ABC dan mengutamakan kejelasan serta kode yang ringkas.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">    
                    Penamaan bahasa pemrogramaan python terinspirasi dari nama grup komedi bernama Monty Python yang disukai oleh Guido. 
                    Pengembangan bahasa pemrograman Python bersifat <i>open source</i>, sehingga Python bermigrasi dari lab ke lab yang lain, satu perusahan ke perusahaan yang lain. 
                    Saat ini pengembangan bahasa pemrogramaan ini telah sampai pada versi 3.11.0 yang dirilis pada 24 Oktober 2022.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Masing-masing versi Python memiliki ciri khas, seperti pada versi Python 2 memiliki fitur Python <i>Enhancement</i> Proposal (PEP)  yang memberikan tuntunan informasi bagi para pengguna. 
                    Selain itu, Python 2 memiliki fitur-fitur <i>programmatical</i> diantaranya berfungsi untuk manajemen memori. 
                    Pada Python 3 berfokus pada merapikan <i>codebase</i> dan menghilangkan <i>redundancy</i>. 
                    Perubahan terbesar dalam Python 3 adalah membuat <i>statement print</i> dalam fungsi yang <i>built-in</i>.
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