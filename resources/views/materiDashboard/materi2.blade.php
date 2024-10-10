@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[220px] transition-all duration-300 ease-in-out py-28">
    <div class="flex justify-center items-center">
        <div class="w-9/12">
            <h1 class="lg:text-4xl text-3xl font-extrabold w-auto text-center">{{ $title }}</h1>
        </div>
    </div>
    <div class="flex justify-center items-center pt-10">
        <div class="w-9/12 ">
            <div class="pb-2">
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    Variabel atau peubah adalah suatu wadah untuk menampung suatu nilai di mana nilai yang ditampung pada wadah tersebut bisa diubah atau berganti-ganti.
                    Nilai adalah besaran yang terdefinisi atau terukur. Dalam bahasa pemrograman Python, untuk memberikan nilai terhadap suatu variabel bisa dilakukan dengan dua cara, yakni:
                    <ul class="list-disc pl-10">
                        <li>Pembacaan dari piranti masukan, seperti <i>keyboard</i></li>
                        <p>Dalam bahasa pemrograman Python, hal ini dilakukan menggunakan perintah <span class="font-bold text-lg text-green-500" style="font-family: 'Source Code Pro';">input()</span> dengan aturan sebagai berikut.</p>
                        <div class="py-2">
                            <div class="lg:px-10 px-2 overflow-x-auto" style="font-family: 'Source Code Pro';">
                                <div class="lg:w-full w-[40rem] p-3 bg-slate-700 rounded-lg" style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Meminta pengguna untuk memasukkan nama lengkap</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">nama = <span class="text-yellow-500">input</span>(<span class="text-green-500">"Masukkan nama lengkap Anda: "</span>)</h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Menampilkan nama lengkap yang dimasukkan pengguna</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Nama lengkap Anda adalah:"</span>, <span class="text-white">nama</span>)</h3>
                                </div>
                            </div>
                        </div>
                        <li>Pengisian nilai langsung yang dikenal dengan istilah <i>assignment</i></li>
                        <p>Dalam bahasa pemrogramaan Python, <i>assignment</i> digunakan untuk membuat dan memberikan nilai untuk suatu variabel. Caranya sangat sederhana:</p>
                        <div class="py-2">
                             <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-[47rem] p-3 bg-slate-700 rounded-lg" style="font-family: 'Source Code Pro';">
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Contoh assignment pada variabel</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">nama = <span class="text-green-500">"John Doe"</span> <span class="text-gray-400"># variabel 'nama' diisi dengan nilai "John Doe"</span></h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">usia = <span class="text-rose-500">25</span> <span class="text-gray-400"># variabel 'usia' diisi dengan nilai 25</span></h3>
                                    <h3 class="lg:text-lg text-base font-md text-white">nilai = <span class="text-rose-500">85.5</span> <span class="text-gray-400"># variabel 'nilai' diisi dengan nilai 85.5</span></h3>
                                    <br>
                                    <h3 class="lg:text-lg text-base font-md text-gray-400"># Menampilkan nilai variabel</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Nama:"</span>, nama)</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Usia:"</span>, usia)</h3>
                                    <h3 class="lg:text-lg text-base font-md text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Nilai:"</span>, nilai)</h3>
                                </div>
                            </div>
                        </div>
                    </ul>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    <p>Dalam pemrograman, ada aturan untuk penamaan variabel. Variabel diberi nama agar dapat dikenal, dapat dipanggil, dan dapat dibedakan dari objek lainnya.
                    Tidak boleh ada variabel yang memiliki nama yang sama dengan lingkup yang sama karena akan membingungkan saat dipanggil.</p>
                    <p>Aturan penamaan variabel dalam bahasa pemrograman Python:</p>
                    <ul class="list-disc pl-10">
                        <li>Variabel harus diawali dengan huruf (A-Z atau a-z) atau <i>underscore</i> (_).</li>
                        <li>Karakter lainnya bisa berupa kombinasi antara huruf, angka, atau <i>underscore</i>.</li>
                        <li>Tidak boleh menggunakan spasi jika nama terdiri dari dua kata. Contoh: my variabel <b><i class="bi bi-arrow-right"></i> salah</b>, silakan tulisakan myvariabel, myVariabel, atau my_variabel.</li>
                        <li>Pemberian nama bersifat <i>case sensitive</i>. A tidak sama dengan a, myvariabel tidak sama dengan myVariabel.</li>
                        <li>Tidak boleh menggunakan kata-kata yang sudah digunakan sebagai nama <i>keywords</i>, nama fungsi, nama atribut, atau nama <i>method</i> dalam bahasa pemrograman Python. 
                            Kata di bawah ini merupakan contoh kata yang tidak dapat dijadikan nama variabel.</li>
                    </ul>
                    <div class="py-2 flex justify-center">
                        <img src="assets/fungsi python.png" alt="" class="w-96 rounded-lg">
                    </div>
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    <p><b>Melakukan Manipulasi terhadap Variabel</b></p>
                    Seperti yang sudah disebutkan, variabel adalah wadah yang menampung suatu nilai. Sebagai suatu wadah, isi dari wadah tersebut bisa diubah-ubah.
                    <div class="py-2">
                         <div class="lg:px-10 px-2 overflow-x-auto">
                                <div class="lg:w-full w-[35rem] p-3 bg-slate-700 rounded-lg" style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Mendefinisikan variabel</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">angka = <span class="text-rose-500">10</span></h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Menampilkan nilai variabel</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Nilai awal variabel angka:"</span>, angka)</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Manipulasi nilai variabel</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">angka += <span class="text-rose-500">5</span><span class="text-gray-400"># Menambahkan 5 ke nilai variabel</span></h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Nilai awal variabel angka:"</span>, angka)</h3>
                            </div>
                        </div>
                    </div>
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-6">
                    <p><b>Mengonversi Variabel</b></p>
                    Selain melakukan manipulasi variabel, kita juga bisa mengonversi tipe data dari variabel menggunakan fungsi berikut.
                    <p><span class="font-bold lg:text-lg text-base text-green-500" style="font-family: 'Source Code Pro';">str(variabel)</span> <i class="bi bi-arrow-right"></i> Mengubah tipe data suatu nilai yang ditampung pada suatu variabel menjadi <i>string</i>.</p>
                    <p><span class="font-bold lg:text-lg text-base text-green-500" style="font-family: 'Source Code Pro';">int(variabel)</span> <i class="bi bi-arrow-right"></i> Mengubah tipe data suatu nilai yang ditampung pada suatu variabel menjadi integer.</p>
                    <p><span class="font-bold lg:text-lg text-base text-green-500" style="font-family: 'Source Code Pro';">float(variabel)</span> <i class="bi bi-arrow-right"></i> Mengubah tipe data suatu nilai yang ditampung pada suatu variabel menjadi <i>float</i>.</p>
                    <div class="py-2">
                         <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[30rem] p-3 bg-slate-700 rounded-lg" style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Cara pertama konversi variabel</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">angka = <span class="text-rose-500">"10"</span></h3>
                                <h3 class="lg:text-lg text-base font-md text-white">angka = <span class="text-yellow-500">int</span>(angka)</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Cara kedua konversi variabel</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">angka = <span class="text-yellow-500">input</span>(<span class="text-green-500">"Masukkan angka: "</span>)</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">angka = <span class="text-yellow-500">int</span>(angka)</h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Cara ketiga konversi variabel</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">angka = <span class="text-yellow-500">int</span>(<span class="text-yellow-500">input</span>(<span class="text-green-500">"Masukkan angka: "</span>))</h3>
                                </div>
                        </div>
                    </div>
                </h4>
                <h4 class="lg:text-lg text-base text-justify pb-4">
                    <p><b>Menggabungkan Variabel</b></p>
                    Manipulasi dan konversi variabel dapat digabungkan menjadi satu pernyataan, seperti contoh di bawah ini:
                    <div class="py-2">
                         <div class="lg:px-10 px-2 overflow-x-auto">
                            <div class="lg:w-full w-[50rem] p-3 bg-slate-700 rounded-lg" style="font-family: 'Source Code Pro';">
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Deklarasi variabel dengan nilai string</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">nilai_string = <span class="text-green-500">"10"</span></h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Mengkonversi nilai_string menjadi tipe data integer dan melakukan penambahan</h3>
                                <h3 class="lg:text-lg text-base font-md text-white">hasil = <span class="text-yellow-500">int</span>(nilai_string) + <span class="text-rose-500">5</span></h3>
                                <br>
                                <h3 class="lg:text-lg text-base font-md text-gray-400"># Menampilkan hasil manipulasi dan konversi variabel</h3>
                                <h3 class="lg:text-lg text-base font-md text-white"><span class="text-yellow-500">print</span>(<span class="text-green-500">"Hasil penambahan setelah konversi dan manipulasi:"</span>, hasil)</h3>
                            </div>
                        </div>
                    </div>
                </h4>
            </div>
            <div class="flex justify-center pb-3">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/Up09USEqqSM?si=KTQ-YoV0XiEQICzj" frameborder="0"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endsection