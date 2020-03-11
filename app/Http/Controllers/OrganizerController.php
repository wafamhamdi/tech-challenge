<?php

namespace App\Http\Controllers;

use App\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['organizers'] = Organizer::orderBy('id','asc')->paginate(10);
   
        return view('organizer.List',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
   
        Organizer::create($request->all());
    
        return Redirect::to('organizers')
       ->with('success','Greate! Organizer created successfully.');
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
        $data['organizer_info'] = Admin::where($where)->first();
 
        return view('organizer.Edit', $data);
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
           
        ]);
         
        $update = ['name' => $request->name, 'type' => $request->type];
        Admin::where('id',$id)->update($update);
   
        return Redirect::to('admins')
       ->with('success','Great! Organizer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { Organizer::where('id',$id)->delete();
   
        return Redirect::to('organizers')->with('success','Organizer deleted successfully');
    }
}
