<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    public function editSiswa()
    {
        // Mendapatkan data profil dari database
        $user = auth()->user(); // Misalnya, jika menggunakan auth
        return view('profil.siswa', [
            "active" => "Profil Siswa",
            "title" => "Profil Siswa"
        ], compact('user'));
    }

    public function editDashboard()
    {
        // Mendapatkan data profil dari database
        $user = auth()->user(); // Misalnya, jika menggunakan auth
        return view('profil.dashboard', [
            "active" => "Profil",
            "title" => "Profil"
        ], compact('user'));
    }

    public function update(Request $request)
    {
        // Validasi input form pengeditan profil di sini
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        // Simpan pembaruan profil ke database
        $user = auth()->user(); // Misalnya, jika menggunakan auth
        $userData = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
        ];

        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }

        User::where('id', $user->id)->update($userData);

        return redirect('/profil')->with('success', 'Profil Anda telah diperbarui.');
    }

    public function updateDashboard(Request $request)
    {
        // Validasi input form pengeditan profil di sini
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);
        // Simpan pembaruan profil ke database
        $user = auth()->user(); // Misalnya, jika menggunakan auth
        $userData = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
        ];

        if ($request->filled('password')) {
            $userData['password'] = Hash::make($request->input('password'));
        }

        User::where('id', $user->id)->update($userData);

        return redirect('/dashboard-profil')->with('success', 'Profil Anda telah diperbarui.');
    }
}
