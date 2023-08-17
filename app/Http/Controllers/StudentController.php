<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->simplePaginate(10));
        return view ('students.index', $data);
    // $data = Students::all(); //get all data from database
    //return view('students.index', ['students' => $data]);
    
    }

    public function show($id){
         $data = Students::findOrFail($id);
         return view('students.edit',['student' => $data]);
    }

    public function create(){

        return view ('students.create')->with('title','Add New Data');
        // $data = Students::findOrFail($id);
        // return view('students.index',['students' => $data]);
    }
    public function store(Request $request){
        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "age" => ['required'],
            "gender" => ['required', 'min:4'],
            "email" =>['required','email', Rule::unique('students', 'email')] ,
            
        ]);
     
        Students::create($validated);
        return redirect('/')->with('message', 'New Student Added');
         
    }

    public function update(Request $request, Students $student){
       // dd($request); 
        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "age" => ['required'],
            "gender" => ['required', 'min:4'],
            "email" =>['required','email'] ,
            
        ]);
        $student->update($validated);
        return back()->with('message', 'Data updated');

    }
}
