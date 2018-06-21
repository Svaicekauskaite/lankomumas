<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Club;
use App\Student;

class StudentController extends Controller
{
    public function index(){


    }

    public function create()
    {
        return view('newStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Student $student, Club $club)
    {
        
        $student = new Student();
        $student->name=$request->name;
        $student->surname=$request->surname;
        $student->class=$request->class;
        $student->school=$request->school;
        $student->save();

         // $club=Club::find($request->club_id);
         // $club->students()->syncWithoutDetaching($request->student_id);
       

        return redirect()->route('club');
    }


    public function show(Student $student)
    {
        //
    }

    public function destroy(Student $student, $id){
        Student::where('id', $id)
            ->delete();
        
        return redirect()->back();
    }


    public function edit (){
        
    }

    public function update()
    {

    }

    public function prideti(Request $request){
        $club=Club::find($request->club_id);
        $club->students()->syncWithoutDetaching($request->student_id);

        return redirect()->back();

    }

    public function pasalinti(Request $request){
        $club=Club::find($request->club_id);
        $club->students()->detach($request->student_id);

        return redirect()->back();

    }
}

