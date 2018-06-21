<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Club;
use App\User;





class ClubController extends Controller
{
	public function index ()
	{
       
		$clubs = Club::where('deleted', 0)->get();
        
        return view('admin.club', ['clubs' => $clubs]);
    	
	}

    public function create()
    {
        return view('admin.newClub', ['users'=>User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Club $club, User $user)
    {
        
        $club = new Club();
        $club->year=$request->year;
        $club->quarter=$request->quarter;
        $club->name=$request->name;
        $club->address=$request->address;
        $club->type=$request->type;
        $club->user_id=$request->user_id;
        $club->save();

        
        return redirect()->route('clubs.index');
        
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    public function destroy(Club $club, $id){
        Club::where('id', $id)
            ->update(['deleted' => 1]);
    	
    	return redirect()->back()->with('message', 'Klubas ištrintas');
    }

    public function edit (Club $club){
    	return view('admin.edit', ['club'=>$club, 'users'=>User::all()]);
    }

    public function update(Request $request, Club $club, User $user)
    {
    	$club->year=$request->year;
    	$club->quarter=$request->quarter;
    	$club->name=$request->name;
    	$club->address=$request->address;
    	$club->type=$request->type;
        $club->user_id=$request->user_id;
    	$club->save();
    	return redirect()->route('clubs.index');

    }
}
