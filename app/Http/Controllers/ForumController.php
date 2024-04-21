<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::latest()->paginate(10);
        return view('forums.index', [
            "active" => "Forum Diskusi",
            "title" => "Forum Diskusi"
        ], compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forums.create', [
            "active" => "Forum Diskusi",
            "title" => "Forum Diskusi"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $userId = Auth::id();

        // Membuat forum baru dengan user_id yang sudah ditentukan
        $forum = new Forum();
        $forum->title = $request->title;
        $forum->content = $request->content;
        $forum->user_id = $userId; // Set user_id dengan id user yang sedang masuk
        $forum->save();


        return redirect()->route('forums.index')->with('success', 'Forum Diskusi Baru telah Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show(Forum $forum)
    {
        return view('forums.show', [
            "active" => "Forum Diskusi",
            "title" => "Forum Diskusi"
        ], compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit(Forum $forum)
    {
        return view('forums.edit', [
            "active" => "Forum Diskusi",
            "title" => "Forum Diskusi"
        ], compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $forum->update([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $forum->user_id, // Pertahankan user_id yang sudah ada
        ]);

        return redirect()->route('forums.index')->with('success', 'Data Forum Diskusi telah Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->route('forums.index')->with('success', 'Forum Diskusi Berhasil Dihapus');
    }
}
