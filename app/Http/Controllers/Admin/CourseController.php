<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'DESC')->paginate(9);
        return view('dashboard.courses.index', compact('courses'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "name" => ['required'],
            "value" => ['required'],
            "hours" => ['required'],
            "description" => ['required'],
        ]);

        Course::create($request->all());
        return back()->with('success', 'El curso ha sido creado!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {


        $request->validate([
            "name" => ['required'],
            "value" => ['required'],
            "hours" => ['required'],
            "description" => ['required'],
        ]);

        
        $course->update($request->all());

        return back()->with('success', 'El Curso ha sido editado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {   
        $course->delete();
        return redirect()->route('courses.index')->with('success', "El curso fue eliminado correctamente");
    }
}
