<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\User;
use App\Student;
use Auth;

class ClubController extends Controller
{
    public function index ()
	{
        //$users=User::all();
        $clubs=Club::where('user_id', Auth::user()->id)->get();
        
        return view('club', ['clubs'=>$clubs]);
    	
	}
		 
    //   public function getClubs($id){
    //     $user=User::find($id);
    //     $club=Club::all();

    // return view('club/{$id}', ['user'=>$user, 'club'=>$club]);
    // }
}


