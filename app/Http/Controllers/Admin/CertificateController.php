<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    //

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'dni' => 'required',
            'course_id' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required'
        ]);
    
        Certificate::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'dni' => $request->dni,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year
        ]);

        return back()->with('success', 'El Certificado ha sido creado!');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {


        $request->validate([
            'dni' => 'required',
            'course_id' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required'
        ]);

        
        $certificate->update($request->all());

        return back()->with('success', 'El Curso ha sido editado!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {   
        $id = $certificate->student->id;
        $certificate->delete();
        return redirect()->route('students.show', $id)->with('success', "El Certificado fue eliminado correctamente");
    }


    
}
