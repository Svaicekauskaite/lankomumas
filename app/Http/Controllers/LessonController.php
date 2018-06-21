<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Club;
use App\Student;
use App\Lesson;

class LessonController extends Controller
{

	public function index($id){

		$club=Club::find($id);
		$students=Student::all();
        return view('lesson', ['club'=>$club, 'students'=>$students]);

	}


    public function store(Request $request, Lesson $lesson)
    {
        
        $lesson = new Lesson();
        $lesson->date=$request->date;
        $lesson->club_id=$request->club_id;        
        $lesson->save();


        $club=Club::find($request->club_id);
        $lesson=Lesson::find($lesson->id);
        $lesson->students()->attach($club->students);
        return redirect()->back();
    }


    public function attendance($id, $ids)
    {
    	$club=Club::find($id);
    	$lesson=Lesson::find($ids);
    	
		//$students=Student::all();
		//$students=Student::where('student_id', '=', 'club_id')->get();

        return view('attendance', ['club'=>$club, 'lesson'=>$lesson]);
    }

    public function dalyvavo(Request $request, $id){
    	$lesson=Lesson::find($id);
    	$ids=$lesson->students()->allRelatedIds();
    	

    	foreach ($ids as $id){
    		$lesson->students()->updateExistingPivot($id, ['attended'=>$request->attended[$id]]);
    	}
    	return redirect()->back();

    }
}
