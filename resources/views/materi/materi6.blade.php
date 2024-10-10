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
                    Percabangan adalah suatu keadaan dimana kita dihadapkan pada suatu pilihan dan harus membuat suatu
                    keputusan yang dapat mempengaruhi langkah selanjutnya.
                    Setiap percabangan memiliki suatu <b>kondisi</b> atau syarat (<i>conditional statement</i>) dan
                    <b>aksi</b>. Setiap kondisi memiliki dua kemungkinan; <b>benar</b> atau <b>salah</b>.
                    Karena ada percabangan ini, ada beberapa aksi yang tidak dijalakan karena percabangan tersebut tidak
                    dipilih.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Kondisi atau syarat dalam percabangan harus menggunakan <b>ekspresi <i>boolean</i></b>. Ekspresi
                    <i>boolean</i> adalah sebuah ekspresi yang hasilnya benar atau salah.
                    Operasi perbandingan termasuk ekspresi <i>boolean</i>, karena hasil dari operasi ini adalah nilai benar
                    atau salah.
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Dalam pemrograman Python memiliki struktur percabangan, yaitu <b>if</b>, <b>if..else</b> dan
                    <b>elif</b>.
                    <ul class="list-decimal lg:pl-10 pl-5">
                        <li><b>Percabangan If</b></li>
                        Percabangan if hanya memiliki satu kondisi yang harus dipilih. Struktur percabangan If memiliki
                        sintaks sebagai berikut:
                        <div class="py-2">
                            <div class="lg:pl-10 pl-3">
                                <div class="w-52 p-3 bg-[#D9D9D9] rounded-md" style="font-family: 'Source Code Pro';">
                                    <div class="">
                                        <h3 class="lg:text-xl text-lg font-semibold text-purple-800">if <span
                                                class="text-yellow-500">(<span
                                                    class="text-green-500">ekspresi</span>)</span>:</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        Percabangan if digunakan untuk mengeksekusi suatu perintah jika kondisi bernilai benar atau
                        <i>True</i>. Sebaliknya jika kondisi bernilai salah atau <i>False</i>, maka perintah tidak akan di
                        eksekusi.
                        Contoh dari percabangan if seperti berikut:
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-[28rem] p-3 bg-slate-700 rounded-lg"
                                    style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Mendefinisikan variabel nilai
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">nilai = <span
                                            class="text-rose-500">70</span></h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Percabangan if</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">if</span> nilai >= <span class="text-rose-500">70</span>:
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Selamat,
                                            Anda lulus ujian!"</span>)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center py-5">
                            <iframe width="640" height="360"
                                src="https://www.youtube.com/embed/vaSsfqdB_JA?si=oYr2Q5yQ8bj8gWk6" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <br>
                        <li><b>Percabangan If..else</b></li>
                        Pada perkembangannya, percabangan if dapat dilengkapi dengan kondisi dimana memiliki dua cabang
                        hasil pemrosesan. Jadi pengambilan keputusan tidak hanya digunakna untuk menentukan tindakan apa
                        yang akan diambil sesuai dengan kondisi,
                        tetapi juga digunakan untuk menentukan tindakan apa yang akan diambil apa yang akan diambil apabila
                        tidak sesuai dengan kondisi yang syaratkan. Untuk mengantisipasi keperluan tersebut, sintaks
                        percabangan if dapat dikembangkan menjadi:
                        <div class="py-2">
                            <div class="lg:pl-10 pl-3">
                                <div class="w-52 p-3 bg-[#D9D9D9] rounded-md" style="font-family: 'Source Code Pro';">
                                    <div class="">
                                        <h3 class="lg:text-xl text-lg font-semibold text-purple-500">if <span
                                                class="text-yellow-500">(<span
                                                    class="text-green-500">ekspresi</span>)</span>:</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold text-purple-500">else:</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        Percabangan if..else digunakan untuk mengeksekusi suatu perintah jika kondisi bernilai benar atau
                        <i>true</i>. Perbedaannya dengan percabangan if adalah, jika kondisi bernilai salah atau
                        <i>false</i>, maka akan mengeksekusi pernyataan di dalam kondisi <b>else</b>.
                        Contoh dari percabangan if..else seperti berikut:
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-[40rem] p-3 bg-slate-700 rounded-lg"
                                    style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Mendefinisikan variabel nilai
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">nilai = <span
                                            class="text-rose-500">65</span></h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Percabangan if..else</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">if</span> nilai >= <span class="text-rose-500">70</span>:
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Selamat,
                                            Anda lulus ujian!"</span>)</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">else</span>:</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Maaf,
                                            Anda belum lulus. Silakan coba lagi."</span>)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center py-5">
                            <iframe width="640" height="360"
                                src="https://www.youtube.com/embed/KrtWcii_q0I?si=90G59tc5UoBcX5KT" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                        <br>
                        <li><b>Percabangan Elif</b></li>
                        Pada percabangan elif terdapat lebih dari satu kondisi untuk menuju satu keputusan yang akan
                        diambil.
                        <div class="py-2">
                            <div class="lg:pl-10 pl-3">
                                <div class="w-52 p-3 bg-[#D9D9D9] rounded-md" style="font-family: 'Source Code Pro';">
                                    <div class="pl-4">
                                        <h3 class="lg:text-xl text-lg font-semibold text-purple-500">if <span
                                                class="text-yellow-500">(<span
                                                    class="text-green-500">ekspresi1</span>)</span>:</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan1</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold text-purple-500">elif <span
                                                class="text-yellow-500">(<span
                                                    class="text-green-500">ekspresi2</span>)</span>:</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan2</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold text-purple-500">elif <span
                                                class="text-yellow-500">(<span
                                                    class="text-green-500">ekspresi3</span>)</span>:</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan3</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold text-purple-500">else:</h3>
                                        <h3 class="lg:text-xl text-lg font-semibold ml-5 text-gray-700">pernyataan4</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        Tidak ada batasan jumlah pernyataan elif pada percabangan elif. Masing-masing kondisi akan diperiksa
                        secara berurutan. Jika kondisi pertama bernilai salah atau <i>false</i>,
                        maka kondisi berikutnya yang diperiksa, dan seterusnya. Jika ada kondisi yang bernilai benar atau
                        <i>true</i>, maka pernyataan pada blok tersebut dijalankan, dan kondisi berikutnya
                        <b>tidak akan diperiksa lagi</b>, meskipun mungkin hasil pada pemeriksaan kondisi berikutnya juga
                        benar.
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-96 p-3 bg-slate-700 rounded-lg"
                                    style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Mendefinisikan variabel angka
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">angka = <span
                                            class="text-rose-500">1</span></h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Percabangan elif</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">if</span> angka > <span class="text-rose-500">0</span>:
                                    </h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(<span
                                            class="text-green-500">"Bilangan Positif"</span>)</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">elif</span> angka < <span class="text-rose-500">
                                            0</span>:</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(<span
                                            class="text-green-500">"Bilangan Negatif"</span>)</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span
                                            class="text-blue-500">else</span>:</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"> <span
                                            class="text-yellow-500 pl-4">print</span>(<span
                                            class="text-green-500">"Bilangan 0"</span>)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center pt-5">
                            <iframe width="640" height="360"
                                src="https://www.youtube.com/embed/_i7vTzRqWrA?si=APk3tIx-o5BOw36X" frameborder="0"
                                allowfullscreen></iframe>
                        </div>
                    </ul>
                </h4>
            </div>
            <div class="pb-20 flex justify-center">
                <a href="{{ route('compile.branching.1') }}"><button
                        class="border-4 border-[#395886] bg-[#638ECB] text-white py-2 w-64 rounded-md hover:scale-105 duration-300 font-medium">Ayo
                        Latihan Live Coding</button></a>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="bg-[#dadce1] fixed py-2 px-10 bottom-0 w-full rounded-t-lg">
        <div class="flex justify-between items-center hidden sm:flex">
            <a href="{{ route('material.sequential') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-left-fill"></i>Materi Sebelumnya</button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i> Kembali ke Menu Materi</button></a>
            <a href="{{ route('material.looping') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300">Materi
                    Selanjutnya<i class="bi bi-caret-right-fill"></i></button></a>
        </div>
        <div class="flex justify-between items-center md:hidden">
            <a href="{{ route('material.sequential') }}"><button type="button"
                    class="bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-left-fill"></i></button></a>
            <a href="{{ route('material') }}"><button type="button"
                    class="ml-2 bg-amber-300 text-gray-900 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-book-half"></i></button></a>
            <a href="{{ route('material.looping') }}"><button type="button"
                    class="ml-2 bg-[#8AAEED] text-gray-700 px-3 py-2 mt-1 rounded hover:scale-105 duration-300"><i
                        class="bi bi-caret-right-fill"></i></button></a>
        </div>
    </div>
@endsection
