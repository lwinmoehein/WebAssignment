<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::with('courses')->get();

        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *wi
     * @return \Illuminate\Http\Responses
     */
    public function create()
    {
        //
        $courses = Course::all();

        return view('student.register',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudent $request)
    {
        //
        DB::transaction(function () use($request){
            $name = $request->name;
            $email = $request->email;
            $nrc = $request->nrc;
            $dob = $request->dob;
            $courses = $request->courses;

            DB::insert('insert into students (name, email,nrc,dob) values (?,?,?,?)', [$name,$email,$nrc,$dob]);

            $insertedStudent =  DB::table("students")
                    ->where(DB::raw("email"),$email)
                    ->where(DB::raw("nrc"),$nrc)
                    ->get()
                    ->first();

            if($insertedStudent){
                foreach($courses as $course){
                    DB::insert('insert into course_student (course_id,student_id) values (?,?)', [$course,$insertedStudent->id]);
                }
            }
        });

        return redirect()->route('students.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
