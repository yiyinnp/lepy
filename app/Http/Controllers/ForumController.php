<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Forum::latest()->filter(request(['search']))->paginate(10);
        return view('forums.index', [
            "active" => "Forum Diskusi",
            "title" => "Forum Diskusi",
            "forums" => $forums
        ], compact('forums'));
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
}
