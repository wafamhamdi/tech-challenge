<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\challengeComment;
use Illuminate\Http\Request;
use App\Challenge;
use Redirect;

class ChallengeCommentController extends Controller
{ 
    public $idChallenge;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['challengeComment'] = challengeComment::orderBy('id','desc')->paginate(10);
   
        return view('comment.List',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.List');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    error_log("helooooooooooooooooooo");
   
    //     $request->validate([
    //     'content' => 'required',
    //     'participant_id' => 'required',
    //     'challenge_id'=> 'required'     
    // ]);

    // challengeComment::create($request->all());
    return view('comment.List',$this->idChallenge);
   
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
    public function getAllChallengecomment($idChallenge)
    {
        $this->$idChallenge=$idChallenge;
    //  $where = ('challenge_id' => $idChallenge);
        $data['challengeComment'] = challengeComment::where('challenge_id',$idChallenge);
        $challenge = Challenge::find($idChallenge);
        return view('comment.List')->With('challengeComment',$data)->With('challenge', $challenge);
    }
    
}
 