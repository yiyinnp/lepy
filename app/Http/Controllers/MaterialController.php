<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(){
        return view('materi.materiutama', [
            "active" => "Materi",
            "title" => "Materi"
        ]);
    }

    public function materi1(){
        return view('materi.materi1', [
            "active" => "Materi",
            "title" => "Pengenalan Bahasa Pemrograman Python"
        ]);
    }

    public function materi2(){
        return view('materi.materi2', [
            "active" => "Materi",
            "title" => "Pendeklarasian Variabel Bahasa Pemrograman Python"
        ]);
    }

    public function materi3(){
        return view('materi.materi3', [
            "active" => "Materi",
            "title" => "Pengenalan Tipe Data Bahasa Pemrograman Python"
        ]);
    }

    public function materi4(){
        return view('materi.materi4', [
            "active" => "Materi",
            "title" => "Operator dan Ekspresi Bahasa Pemrograman Python"
        ]);
    }
    
    public function materi5(){
        return view('materi.materi5', [
            "active" => "Materi",
            "title" => "Struktur Berurutan pada Pemrograman Python"
        ]);
    }

    public function materi6(){
        return view('materi.materi6', [
            "active" => "Materi",
            "title" => "Struktur Percabangan pada Pemrograman Python"
        ]);
    }

    public function materi7(){
        return view('materi.materi7', [
            "active" => "Materi",
            "title" => "Struktur Perulangan pada Pemrograman Python"
        ]);
    }

    public function materi8(){
        return view('materi.materi8', [
            "active" => "Materi",
            "title" => "Struktur Array pada Pemrograman Python"
        ]);
    }

    //untuk sidebar ye kawan
    public function index1(){
        return view('materiDashboard.materiutama', [
            "active" => "Materi",
            "title" => "Menu Utama Materi"
        ]);
    }

    public function materi11(){
        return view('materiDashboard.materi1', [
            "active" => "Materi",
            "title" => "Pengenalan Bahasa Pemrograman Python"
        ]);
    }

    public function materi12(){
        return view('materiDashboard.materi2', [
            "active" => "Materi",
            "title" => "Pendeklarasian Variabel Bahasa Pemrograman Python"
        ]);
    }

    public function materi13(){
        return view('materiDashboard.materi3', [
            "active" => "Materi",
            "title" => "Pengenalan Tipe Data Bahasa Pemrograman Python"
        ]);
    }

    public function materi14(){
        return view('materiDashboard.materi4', [
            "active" => "Materi",
            "title" => "Operator dan Ekspresi Bahasa Pemrograman Python"
        ]);
    }

    public function materi15(){
        return view('materiDashboard.materi5', [
            "active" => "Materi",
            "title" => "Struktur Berurutan pada Pemrograman Python"
        ]);
    }

    public function materi16(){
        return view('materiDashboard.materi6', [
            "active" => "Materi",
            "title" => "Struktur Percabangan pada Pemrograman Python"
        ]);
    }

    public function materi17(){
        return view('materiDashboard.materi7', [
            "active" => "Materi",
            "title" => "Struktur Perulangan pada Pemrograman Python"
        ]);
    }

    public function materi18(){
        return view('materiDashboard.materi8', [
            "active" => "Materi",
            "title" => "Array pada Pemrograman Python"
        ]);
    }
}
