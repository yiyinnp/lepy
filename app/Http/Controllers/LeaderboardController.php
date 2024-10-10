<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Leaderboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaderboardController extends Controller
{
    
    public function index()
    {
        $leaderboard = Leaderboard::orderByDesc('score')->paginate(10);

        // Filter data leaderboard berdasarkan level pengguna
        $leaderboard = $leaderboard->filter(function ($item) {
            return $item->user->level === 'siswa';
        });

        return view('leaderboard.index', [
            "active" => "Leaderboard",
            "title" => "Leaderboard"
        ], compact('leaderboard'));
    }
    
    public function index1()
    {
        $leaderboard = Leaderboard::orderByDesc('score');

        // Filter data leaderboard berdasarkan level pengguna
        $leaderboard ->whereHas('user', function ($query) {
            $query->where('level', 'siswa');
        });

        // Lakukan pagination setelah filter
        $leaderboardPaginated = $leaderboard->paginate(10);

        return view('leaderboard.index1', [
            "active" => "Leaderboard",
            "title" => "Leaderboard",
            "leaderboard" => $leaderboardPaginated 
        ]);
    }

    public function updateLeaderboard(Request $request)
    {
        $user = $request->user();
        
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $score = $request->input('score', 0);

        $leaderboard = Leaderboard::where('user_id', $user->id)->first();

        if ($leaderboard) {
            // Tambahkan 20 poin ke skor saat ini
            $leaderboard->update(['score' => $leaderboard->score + 20]);
        } else {
            Leaderboard::create(['user_id' => $user->id, 'score' => $score]);
        }

        return response()->json(['message' => 'Leaderboard updated successfully']);
    }
}
