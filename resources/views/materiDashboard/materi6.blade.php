@extends('layouts.main1')
@section('container')
<div class="flex justify-center items-center pt-24 pl-24">
    <h1 class="text-5xl font-extrabold w-9/12 text-center">{{ $title }}</h1>
</div>
<div class="flex justify-center items-center pt-10 pl-24">
    <div class="w-9/12 ">
        <div class="pb-2">
            <h4 class="text-lg text-justify pb-4">
                Percabangan adalah suatu keadaan dimana kita dihadapkan pada suatu pilihan dan harus membuat suatu keputusan yang dapat mempengaruhi langkah selanjutnya.
                Setiap percabangan memiliki suatu <b>kondisi</b> atau syarat (<i>conditional statement</i>) dan <b>aksi</b>. Setiap kondiis memiliki dua kemungkinan; <b>benar</b> atau <b>salah</b>.
                Karena ada percabangan ini, ada beberapa aksi yang tidak dijalakan karena percabangan tersebut tidak dipilih.
            </h4>
            <h4 class="text-lg text-justify pb-4">
                Kondisi atau syarat dalam percabangan harus menggunakan <b>ekspresi <i>boolean</i></b>. Ekspresi <i>boolean</i> adalah sebuah ekspresi yang hasilnya benar atau salah. 
                Operasi perbandingan termasuk ekspresi <i>boolean</i>, karena hasil dari operasi ini adalah nilai benar atau salah.
            </h4>
            <h4 class="text-lg text-justify pb-4">
                Dalam pemrograman Python memiliki struktur percabangan, yaitu <b>If</b>, <b>If..else</b> dan <b>Elif</b>.
                <ul class="list-decimal pl-10">
                    <li><b>Percabangan If</b></li>
                    Percabangan If hanya memiliki satu kondisi yang harus dipilih. Struktur percabangan If memiliki sintaks sebagai berikut:
                    <div class="py-2">
                        <div class="pl-10">
                            <div class="w-48 p-3 bg-[#D9D9D9] rounded-md">
                                <div class="pl-4">
                                    <h3 class="text-xl font-semibold font-[Montserrat] text-purple-800">if <span class="text-yellow-500">(<span class="text-green-500">ekspresi</span>)</span>:</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] mx-5 text-gray-700">pernyataan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    Percabangan if digunakan untuk mengeksekusi suatu perintah jika kondisi bernilai benar atau <i>True</i>. Sebaliknya jika kondisi bernilai salah atau <i>False</i>, maka perintah tidak akan di eksekusi. 
                    Contoh dari percabangan if seperti berikut:
                    <div class="py-2">
                        <div class="px-10">
                            <div class="w-full p-3 bg-slate-700 rounded-lg">
                                <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Mendefinisikan variabel nilai</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white">nilai = <span class="text-rose-500">70</span></h3>
                                <br>
                                <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Percabangan if</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"><span class="text-blue-500">if</span> nilai >= <span class="text-rose-500">70</span>:</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"> <span class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Selamat, Anda lulus ujian!"</span>)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-5">
                        <video width="640" height="360" controls>
                            <source src="assets/IF STATEMENT.mp4" type="video/mp4">
                        </video>
                    </div>
                    <br>
                    <li><b>Percabangan If..else</b></li>
                    Pada perkembangannya, percabangan if dapat dilengkapi dengan kondisi dimana memiliki dua cabang hasil pemrosesan. Jadi pengambilan keputusan tidak hanya digunakna untuk menentukan tindakan apa yang akan diambil sesuai dengan kondisi, 
                    tetapi juga digunakan untuk menentukan tindakan apa yang akan diambil apa yang akan diambil apabila tidak sesuai dengan kondisi yang syaratkan. Untuk mengantisipasi keperluan tersebut, syntax percabangan if dapat dikembangkan menjadi:
                    <div class="py-2">
                        <div class="pl-10">
                            <div class="w-48 p-3 bg-[#D9D9D9] rounded-md">
                                <div class="pl-4">
                                    <h3 class="text-xl font-semibold font-[Montserrat] text-purple-500">if <span class="text-yellow-500">(<span class="text-green-500">ekspresi</span>)</span>:</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] mx-5 text-gray-700">pernyataan</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] text-purple-500">else:</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] mx-5 text-gray-700">pernyataan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    Percabangan If..else digunakan untuk mengeksekusi suatu perintah jika kondisi bernilai benar atau <i>True</i>. Perbedaannya dengan percabangan If adalah, jika kondisi bernilai salah atau <i>false</i>, maka akan mengeksekusi pernyataan di dalam kondisi <b>else</b>.
                    Contoh dari percabangan if..else seperti berikut:
                    <div class="py-2">
                        <div class="px-10">
                            <div class="w-full p-3 bg-slate-700 rounded-lg">
                                <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Mendefinisikan variabel nilai</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white">nilai = <span class="text-rose-500">65</span></h3>
                                <br>
                                <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Percabangan if..else</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"><span class="text-blue-500">if</span> nilai >= <span class="text-rose-500">70</span>:</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"> <span class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Selamat, Anda lulus ujian!"</span>)</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"><span class="text-blue-500">else</span>:</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"> <span class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Maaf, Anda belum lulus. Silakan coba lagi."</span>)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-5">
                        <video width="640" height="360" controls>
                            <source src="assets/IF..ELSE STATEMENT.mp4" type="video/mp4">
                        </video>
                    </div>
                    <br>
                    <li><b>Percabangan Elif</b></li>
                    Pada percabangan Elif terdapat lebih dari satu kondisi untuk menuju satu keputusan yang akan diambil. 
                    <div class="py-2">
                        <div class="pl-10">
                            <div class="w-52 p-3 bg-[#D9D9D9] rounded-md">
                                <div class="pl-4">
                                    <h3 class="text-xl font-semibold font-[Montserrat] text-purple-500">if <span class="text-yellow-500">(<span class="text-green-500">ekspresi1</span>)</span>:</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] mx-5 text-gray-700">pernyataan1</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] text-purple-500">elif <span class="text-yellow-500">(<span class="text-green-500">ekspresi2</span>)</span>:</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] mx-5 text-gray-700">pernyataan2</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] text-purple-500">elif <span class="text-yellow-500">(<span class="text-green-500">ekspresi3</span>)</span>:</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] mx-5 text-gray-700">pernyataan3</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] text-purple-500">else:</h3>
                                    <h3 class="text-xl font-semibold font-[Montserrat] mx-5 text-gray-700">pernyataan4</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    Tidak ada batasan jumlah pernyataan elif pada percabangan elif. Masing-masing kondisi akan diperiksa secara berurutan. Jika kondisi pertama bernilai salah atau <i>false</i>,
                    maka kondisi berikutnya yang diperiksa, dan seterusnya. Jika ada kondisi yang bernilai benar atau <i>true</i>, maka pernyataan pada blok tersebut dijalankan, dan kondisi berikutnya
                    <b>tidak akan diperiksa lagi</b>, meskipun mungkin hasil pada pemeriksaan kondisi berikutnya juga benar.
                    <div class="py-2">
                        <div class="px-10">
                            <div class="w-full p-3 bg-slate-700 rounded-lg">
                                <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Mendefinisikan variabel angka</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white">angka = <span class="text-rose-500">1</span></h3>
                                <br>
                                <h3 class="text-lg font-md font-[Montserrat] text-gray-400"># Percabangan elif</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"><span class="text-blue-500">if</span> angka > <span class="text-rose-500">0</span>:</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"> <span class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Bilangan Positif"</span>)</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"><span class="text-blue-500">elif</span> angka < <span class="text-rose-500">0</span>:</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"> <span class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Bilangan Negatif"</span>)</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"><span class="text-blue-500">else</span>:</h3>
                                <h3 class="text-lg font-md font-[Montserrat] text-white"> <span class="text-yellow-500 pl-4">print</span>(<span class="text-green-500">"Bilangan 0"</span>)</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center py-5">
                        <video width="640" height="360" controls>
                            <source src="assets/ELIF STATEMENT.mp4" type="video/mp4">
                        </video>
                    </div>
                </ul>
            </h4>
        </div>
    </div>
</div>
@endsection