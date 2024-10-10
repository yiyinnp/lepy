<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardCommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Forum $forum)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $user_id = Auth::id(); // Mendapatkan id user yang sedang login

        $comment = new Comment([
            'content' => $request->content,
            'user_id' => $user_id, // Menyertakan user id dalam pembuatan komentar
        ]);

        $forum->comments()->save($comment);

        if(auth()->user()->level=="siswa") {
            return redirect()->route('forums.show', $forum)->with('success', 'Komentar telah berhasil ditambahkan');
        } else{
            return redirect()->route('forumsdashboard.show', $forum)->with('success', 'Komentar telah berhasil ditambahkan');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum, Comment $comment)
    {
        if(auth()->user()->level=="siswa") {
            return view('comments.edit', [
                "active" => "Forum Diskusi",
                "title" => "Forum Diskusi"
            ], compact('forum', 'comment'));
        } else{
            return view('commentsdashboard.edit', [
                "active" => "Forum Diskusi",
                "title" => "Forum Diskusi"
            ], compact('forum', 'comment'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum, Comment $comment)
    {
        $request->validate([
            'content' => 'required',
        ]);
    
        // Ambil ID pengguna yang sedang masuk (user yang melakukan aksi update komentar)
        $userId = auth()->user()->id;
    
        // Update komentar dengan menambahkan user ID
        $comment->update([
            'content' => $request->content,
            'user_id' => $userId,
        ]);
        
        if(auth()->user()->level=="siswa") {
            return redirect()->route('forums.show', $forum)->with('success', 'Komentar Berhasil Diedit');
        } else{
            return redirect()->route('forumsdashboard.show', $forum)->with('success', 'Komentar Berhasil Diedit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum, Comment $comment)
    {
        $comment->delete();

        if(auth()->user()->level=="siswa") {
            return redirect()->route('forums.show', $forum)->with('success', 'Komentar telah berhasil dihapus');
        } else{
            return redirect()->route('forumsdashboard.show', $forum)->with('success', 'Komentar telah berhasil dihapus');
        }
    }
}