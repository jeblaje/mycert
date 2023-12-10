<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('dashboard.users.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "name" => ['required'],
            "email" => ['required'],
            "phone" => ['required'],
            "address" => ['required'],
            "type_dni" => ['required'],
            "dni" => ['required']
        ]);

        Student::create($request->all());
        return back()->with('success', 'El estudiante ha sido creado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('dashboard.users.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {


        $request->validate([
            "name" => ['required'],
            "email" => ['required'],
            "phone" => ['required'],
            "address" => ['required'],
            "type_dni" => ['required'],
            "dni" => ['required']
        ]);

        
        $student->update($request->all());

        return back()->with('success', 'El estudiante ha sido editado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', "El estudiante fue eliminado correctamente");
    }
}
