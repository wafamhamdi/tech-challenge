<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Challenge;

use Redirect;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['challenges'] = Challenge::orderBy('id','Asc')->paginate(10);
   
        return view('challenge.List',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('challenge.Create');
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
            'title' => 'required',
            'status' => 'required',
            'description' => 'required',
            'startDate'=> 'required',
            'endDate'=> 'required'
        ]);
   
        Challenge::create($request->all());
    
        return Redirect::to('challenges')
       ->with('success','Greate! Challenge created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['challenge_info'] = Challenge::where($where)->first();
 
        return view('challenge.Edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'startDate'=> 'required',
            'endDate'=> 'required'
        ]);
        
       $update = ['title' => $request->title, 'description' => $request->description, 'startDate' => $request->startDate, 'endDate' => $request->endDate];
       Challenge::where('id',$id)->update($update);
  
       return Redirect::to('challenges')
      ->with('success','Great! User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Challenge::where('id',$id)->delete();
   
        return Redirect::to('challenges')->with('success','Challenge deleted successfully');
    }
  

}
