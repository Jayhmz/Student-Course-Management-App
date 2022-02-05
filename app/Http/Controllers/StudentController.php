<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course as CourseModel;
use App\Models\CourseList;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $students = Student::all();
        return view('students.index', [
          'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $courses = CourseList::all();
        return view('students.create')->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $courses = CourseList::find($request->subjects);
      
      $student = Student::create([
        'name'=>$request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
      ]);

    foreach ($courses as $course) {
      $c = CourseModel::create([
        'student_id' => $student->id,
        'course_title' => $course->course_title,
        'course_code' => $course->course_code,
      ]);
    }

        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = Student::find($id)->first();

      return view('students.show', [
        'user' => $user,
        'courses' => $user->course
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
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
        $student = Student::where('id', $id)->update([
          'name'=>$request->name,
          'email' => $request->email,
          'phone' => $request->phone,
          'address' => $request->address,
        ]);
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
      $student->delete();

      return redirect('/student');
       
    }
}
