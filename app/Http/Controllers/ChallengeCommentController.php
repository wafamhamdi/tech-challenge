<?php

namespace App\Http\Controllers;

use App\challengeComment;
use Illuminate\Http\Request;

class ChallengeCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['challenges'] = challengeComment::orderBy('createDate','desc')->paginate(10);
   
        return view('comment.List',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\challengeComment  $challengeComment
     * @return \Illuminate\Http\Response
     */
    public function show(challengeComment $challengeComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\challengeComment  $challengeComment
     * @return \Illuminate\Http\Response
     */
    public function edit(challengeComment $challengeComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\challengeComment  $challengeComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, challengeComment $challengeComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\challengeComment  $challengeComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(challengeComment $challengeComment)
    {
        //
    }
}
