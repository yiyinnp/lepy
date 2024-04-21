@extends('layouts.main2')
@section('container')
<div class="flex justify-center items-center pt-24">
    <h1 class="text-5xl font-extrabold w-9/12 text-center">{{ $title }}</h1>
</div>
<div class="flex justify-center items-center pt-10">
    <div class="w-9/12 ">
        <div class="pb-2">
            <h4 class="text-lg text-justify pb-4">
                Struktur berurutan adalah struktur yang paling dasar dalam sebuah pemrograman. Struktur ini memproses sebuah program secara berurutan atau satu per satu,
                mulai dari perintah pertama hingga perintah terakhir atau dengan urutan input-proses-output. Contoh algoritma dari struktur berurutan pada bahasa pemrograman Python 
                adalah program menghitung luas persegi dan luas lingkaran.
            </h4>
            <img src="/assets/1.png" alt="" srcset="" class="pb-4 mx-auto">
            <h4 class="text-lg text-justify pb-4">
                Perhatikan bagan di atas. Input merupakan interface untuk memasukkan data yang akan diolah. Proses merupakan langkah-langkah yang diperlukan untuk melakukan mengubah data hasil inputan menjadi output.
                Output merupakann hasli akhir dari proses pengolahan data input.
            </h4>
            <h4 class="text-lg text-justify pb-4">
                Sebagai contoh, berikut akan dibahas program sederhana untuk mengitung luas sebuah persegipanjang bisa dilakukan dengan script sebagai berikut.
                <div class="py-2">
                    <div class="px-10">
                        <div class="w-full p-3 bg-slate-700 rounded-lg">
                            <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Mendefinisikan variabel panjang dan lebar</h3>
                            <h3 class="text-lg font-md font-[Montserrat] text-white">panjang = <span class="text-rose-500">10</span></h3>
                            <h3 class="text-lg font-md font-[Montserrat] text-white">lebar = <span class="text-rose-500">5</span></h3>
                            <br>
                            <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Menghitung luas persegi panjang</h3>
                            <h3 class="text-lg font-md font-[Montserrat] text-white">luas = panjang * lebar</h3>
                            <br>
                            <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Menampilkan hasil</h3>
                            <h3 class="text-lg font-md font-[Montserrat] text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Luas persegi panjang adalah:"</span>, luas)</h3>
                        </div>
                    </div>
                </div>
            </h4>
        </div>
        <div class="flex justify-center pb-5">
            <video width="640" height="360" controls>
                <source src="assets/STRUKTUR BERURUTAN.mp4" type="video/mp4">
            </video>
        </div>
        <div class="pb-20 flex justify-center">
            <a href="{{ route('compile.sequential.1') }}"><button class="border-4 border-[#395886] bg-[#638ECB] text-white py-2 w-72 rounded-md hover:bg-[#395886] font-medium">Ayo Latihan Live Coding</button></a>
        </div>
    </div>
</div>
@endsection

@section('footer')
<div class="bg-[#395886] fixed py-3 px-10 bottom-0 w-full">
    <div class="flex justify-between items-center">
        <a href="{{ route('material.operatorexpresion') }}" class="text-white text-sm underline underline-offset-2"><i class="bi bi-chevron-double-left"></i> Operator dan Ekspresi Pemrograman Python</a>
        <a href="{{ route('material.branching') }}" class="text-white text-sm underline underline-offset-2">Struktur Percabangan Pemrograman Python <i class="bi bi-chevron-double-right"></i></a>
    </div>
</div>
@endsection