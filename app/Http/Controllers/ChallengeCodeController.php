<?php

namespace App\Http\Controllers;

use App\ChallengeCode;
use Illuminate\Http\Request;

class ChallengeCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        return view('Challengecode.List',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.List');
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
            'participant_id' => 'required',
            'challenge_id' => 'required',
            'code' => 'required'
        ]);
   
        Challenge::create($request->all());
    
        return Redirect::to('comments')
       ->with('success','Greate! challenge code created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChallengeCode  $challengeCode
     * @return \Illuminate\Http\Response
     */
    public function show(ChallengeCode $challengeCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChallengeCode  $challengeCode
     * @return \Illuminate\Http\Response
     */
    public function edit(ChallengeCode $challengeCode)
    {
        $where = array('id' => $id);
        $data['challengeCode_info'] = ChallengeCode::where($where)->first();
 
        return view('challengeCode.Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChallengeCode  $challengeCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChallengeCode $challengeCode)
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
        ]);
         
        $update = ['title' => $request->title,  'description' => $request->description ];
        Challenge::where('id',$id)->update($update);
   
        return Redirect::to('challenges')
       ->with('success','Great! Challenge updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChallengeCode  $challengeCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChallengeCode $challengeCode)
    {
        //
    }
}
