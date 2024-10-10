<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function editSiswa()
    {
        $user = auth()->user();
        $userPoint = 0;
        $leaderboardRank = '-'; // Gunakan '-' untuk menampilkan bahwa peringkat tidak tersedia

        $leaderboardData = DB::table('leaderboards')->where('user_id', $user->id)->first();
        if ($leaderboardData) {
            $userPoint = $leaderboardData->score;

            $leaderboardRank = Leaderboard::where('score', '>', $userPoint)->count();
            // Tambahkan 1 jika ingin mendapatkan peringkat berdasarkan peringkat terbaik (peringkat 1 adalah yang tertinggi)
            // Jika ingin mendapatkan peringkat berdasarkan peringkat terendah (peringkat 1 adalah yang terendah), tinggalkan +1
            $leaderboardRank = $leaderboardRank + 1;
        }

        return view('profil.siswa', [
            "active" => "Profil Siswa",
            "title" => "Profil Siswa",
            "userPoint" => $userPoint,
            "leaderboardRank" => $leaderboardRank
        ], compact('user'));
    }

    public function editDashboard()
    {
        // Mendapatkan data profil dari database
        $user = auth()->user();
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
            'password' => 'nullable|string|min:5|confirmed',
            'kelas' => 'nullable|string'
        ]);
        // Simpan pembaruan profil ke database
        $user = auth()->user(); // Misalnya, jika menggunakan auth
        $userData = [
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'kelas' => $request->input('kelas')
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
            'password' => 'nullable|string|min:5|confirmed',
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
