@extends('layouts.main2')
@section('container')
    <div class="flex justify-center items-center pt-24">
        <div class="w-9/12">
            <h1 class="lg:text-4xl text-3xl font-extrabold w-auto text-center">{{ $title }}</h1>
        </div>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-9/12 ">
            <div class="pb-2">
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Dalam pemrograman, perulangan digunakan untuk suatu aksi yang dilakukan berkali-kali dan memiliki pola
                    yang sama. Pada perulangan akan dihadapkan pada suatu <b>kondisi pilihan</b> atau <b>syarat</b>.
                    Setiap kondisi memiliki dua kemungkinan; <b>benar (<i>true</i>)</b> atau <b>salah (<i>false</i>)</b>.
                    Kondisi atau syarat dalam perulangan harus menggunakan <b>ekspresi <i>boolean</i></b>.
                    Jika hasil dari ekspresi ini adalah benar, pernyataan yang ada dalam pengulangan akan terus dijalankan.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Perbedaan utama antara percabangan dan perulangan adalah berapa kali pernyataan dijalankan. Percabangan
                    hanya akan menjalankan pernyataan yang ada di dalam kondisi bernilai benar <b><i>compound
                            statement</i></b>
                    ataupun kondisi bernilai salah <b>(<i>alternative execution</i>)</b> sebanyak satu kali. Perulangan akan
                    menjalankan pernyataan berkali-kali selama ekspresi pada bagian syarat bernilai benar atau <i>true</i>.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Dalam pemrograman Python memiliki struktur perulangan, yaitu <b>while</b>, <b>for</b> dan <b>nested
                        loop</b>.
                    <ul class="list-decimal lg:pl-10 pl-5">
                        <li><b>Perulangan While</b></li>
                        Perulangan dengan perintah <b>while</b> digunakan untuk melakukan perulangan selama ekspresi
                        bernilai benar atau <i>true</i>.
                        Perulangan while bisa digunakan baik untuk kasus dimana jumlah perulangan atau nilai rentang
                        diketahui maupun untuk kasus dimana jumlah perulangan tidak diketahui.
                        Struktur perulangan while sebagai berikut:
                        <div class="lg:pl-10 pl-3">
                            <div class="w-60 p-3 bg-[#D9D9D9] rounded-md" style="font-family: 'Source Code Pro';">
                                <div class="">
                                    <h3 class="lg:text-xl text-lg font-semibold text-purple-800">while <span
                                            class="text-yellow-500">(<span class="text-green-500">ekspresi</span>)</span>:
                                    </h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan1</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan2</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan3</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">... dst</h3>
                                </div>
                            </div>
                        </div>
                        Contoh kode program struktur perulangan while:
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg"
                                    style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Inisialisasi variabel
                                        penghitung</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">penghitung = <span
                                            class="text-rose-500">0</span></h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Perulangan while dengan kondisi
                                        penghitung kurang dari 5</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">while</span> penghitung < <span class="text-rose-500">
                                            5</span>:</h3>
                                    <h3 class="lg:text-lg text-baseg font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Nilai
                                            penghitung saat ini:"</span>, penghitung)</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white pl-4">penghitung += <span
                                            class="text-rose-500">1</span>:</h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500">print</span>(<span class="text-green-500">"Perulangan
                                            selesai"</span>)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center py-5">
                            <iframe width="640" height="360"
                                src="https://www.youtube.com/embed/-4uKnlOKuTE?si=bBo5UqCDdJxa72zF" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <br>
                        <li><b>Perulangan For</b></li>
                        Perulangan for digunakna untuk melakukan perulangan dengan jumlah yang telah ditentukan sebelumnya
                        atau rentang nilai yang diperbolehkan sebelum membuat algoritmanya.
                        Misalnya, harus melakukan pengulangan sebanyak 2 kali atau dilakukan selama nilai di antara 1 dan
                        10. Bentuk umum struktur perulangan for sebagai berikut:
                        <div class="lg:pl-10 pl-3 overflow-x-auto">
                            <div class="w-80 p-3 bg-[#D9D9D9] rounded-md" style="font-family: 'Source Code Pro';">
                                <div class="">
                                    <h3 class="lg:text-xl text-lg font-semibold text-purple-500">for <span
                                            class="text-yellow-500">
                                            <<span class="text-green-500">target
                                        </span>></span> in <span class="text-yellow-500">
                                            <<span class="text-green-500">objek
                                        </span>></span>:</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan</h3>
                                </div>
                            </div>
                        </div>
                        Dalam bentuk umum di atas, perulangan for memiliki 2 data, yaitu target dan objek.
                        <ul class="list-disc pl-10">
                            <li><b>Target</b>, adalah variabel yang akan menampung setiap perulangan dari objek.</li>
                            <li><b>Objek</b>, berisikan list sebagai kondisi yang menentukan perulangan.</li>
                        </ul>
                        Sebagai contoh, jika <b>objek</b> berisi <i>list</i> bilangan dari 1 sampai 5, maka <b>target</b>
                        akan menampung nilai isi dari <i>list</i> tersebut satu per satu.
                        Contoh kode program bentuk umum struktur perulangan for:
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-96 p-3 bg-slate-700 rounded-lg"
                                    style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Definisikan sebuah list</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">angka_list = [<span
                                            class="text-rose-500">1</span>, <span class="text-rose-500">2</span>,
                                        <span class="text-rose-500">3</span>, <span class="text-rose-500">4</span>, <span
                                            class="text-rose-500">5</span>]
                                    </h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Perulangan untuk mengakses
                                        setiap elemen dalam list</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">for</span> angka <span class="text-blue-500">in
                                        </span>angka_list:</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(angka)</h3>
                                </div>
                            </div>
                        </div>
                        Perulangan for juga bisa diisi dengan objek menggunakan <i>range</i> dengan struktur sebagai
                        berikut.
                        <div class="lg:pl-10 pl-3 overflow-x-auto">
                            <div class="lg:w-8/12 w-[38rem] p-3 bg-[#D9D9D9] rounded-md"
                                style="font-family: 'Source Code Pro';">
                                <div class="">
                                    <h3 class="lg:text-xl text-lg font-semibold text-purple-500">for <span
                                            class="text-yellow-500">
                                            <<span class="text-green-500">target
                                        </span>></span>
                                        in range<span class="text-yellow-500">(<span class="text-green-500">nilai awal,
                                                nilai akhir</span>)</span>:</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan</h3>
                                </div>
                            </div>
                        </div>
                        Atau
                        <div class="lg:pl-10 pl-3 overflow-x-auto">
                            <div class="lg:w-9/12 w-[43rem] p-3 bg-[#D9D9D9] rounded-md"
                                style="font-family: 'Source Code Pro';">
                                <div class="pl-2">
                                    <h3 class="lg:text-xl text-lg font-semibold text-purple-500">for <span
                                            class="text-yellow-500">
                                            <<span class="text-green-500">target
                                        </span>></span>
                                        in range<span class="text-yellow-500">(<span class="text-green-500">nilai awal,
                                                nilai akhir, beda</span>)</span>:</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan</h3>
                                </div>
                            </div>
                        </div>
                        Contoh kode programnya sebagai berikut:
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-96 p-3 bg-slate-700 rounded-lg"
                                    style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Perulangan untuk mengakses
                                        rentang angka dari 1 hingga 5</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">for</span> angka <span class="text-blue-500">in </span>
                                        <span class="text-yellow-500">range</span>(<span class="text-rose-500">1</span>,
                                        <span class="text-rose-500">6</span>):
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(angka)</h3>
                                </div>
                            </div>
                        </div>
                        Atau
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-96 p-3 bg-slate-700 rounded-lg"
                                    style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Perulangan untuk mengakses
                                        angka dengan langkah 2 dari 1 hingga 10</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">for</span> angka <span class="text-blue-500">in </span>
                                        <span class="text-yellow-500">range</span>(<span class="text-rose-500">1</span>,
                                        <span class="text-rose-500">11</span>, <span class="text-rose-500">2</span>):
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(angka)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center py-5">
                            <iframe width="640" height="360"
                                src="https://www.youtube.com/embed/QNKET9pj5Zc?si=zn8P3nmBsyWT_zh7" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <br>
                        <li><b>Perulangan Nested Loop</b></li>
                        Perulangan nested loop adalah perulangan di dalam perulangan. Berikut adalah bentuk umum dari
                        perulangan nested loop.
                        <div class="lg:pl-10 px-3 overflow-x-auto">
                            <div class="lg:w-5/12 w-96 p-3 bg-[#D9D9D9] rounded-md"
                                style="font-family: 'Source Code Pro';">
                                <div class="pl-3">
                                    <h3 class="lg:text-xl text-lg font-semibold text-purple-500">for <span
                                            class="text-yellow-500">
                                            <<span class="text-green-500">target
                                        </span>></span> in <span class="text-yellow-500">
                                            <<span class="text-green-500">obyek
                                        </span>></span>:</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold text-purple-500 ml-5">for <span
                                            class="text-yellow-500">
                                            <<span class="text-green-500">target
                                        </span>></span> in <span class="text-yellow-500">
                                            <<span class="text-green-500">obyek
                                        </span>></span>:</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-10 text-gray-700">pernyataan</h3>
                                    <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan</h3>
                                </div>
                            </div>
                        </div>
                        Contoh kode program nested loop
                        <div class="py-2">
                            <div class="lg:px-10 px-2">
                                <div class="w-full p-3 bg-slate-700 rounded-lg">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Nested Loop untuk Mencetak
                                        Pola Bintang</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">for</span> i <span class="text-blue-500">in </span>
                                        <span class="text-yellow-500">range</span>(<span
                                            class="text-rose-500">5</span></span>):
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white pl-4"><span
                                            class="text-blue-500">for</span> j <span class="text-blue-500">in </span>
                                        <span class="text-yellow-500">range</span>(i + <span
                                            class="text-rose-500">1</span>):
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-8">print</span>(<span
                                            class="text-green-500">'*'</span>
                                        , end=<span class="text-green-500">' '</span>)</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>()</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center pt-5">
                            <iframe width="640" height="360"
                                src="https://www.youtube.com/embed/JBt49_06syE?si=EcfIIJgE0_ByCRQ7" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </ul>
                </h4>
            </div>
            <div class="pb-20 flex justify-center">
                <a href="{{ route('compile.looping.1') }}"><button
                        class="border-4 border-[#395886] bg-[#638ECB] text-white py-2 w-72 rounded-md hover:scale-105 duration-300 font-medium">Ayo
                        Latihan Live Coding</button></a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="bg-[#dadce1] fixed py-2 px-10 bottom-0 w-full rounded-t-lg">
        <div class="flex justify-between items-center hidden sm:flex">
            <a href="{{ route('material.branching') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-left-fill"></i>Materi Sebelumnya</button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i> Kembali ke Menu Materi</button></a>
            <a href="{{ route('material.array') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300">Materi
                    Selanjutnya<i class="bi bi-caret-right-fill"></i></button></a>
        </div>
        <div class="flex justify-between items-center md:hidden">
            <a href="{{ route('material.branching') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-left-fill"></i></button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i></button></a>
            <a href="{{ route('material.array') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-right-fill"></i></button></a>
        </div>
    </div>
@endsection
