<?php

use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\StudentController;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Student;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $courses = Course::all();
    return view('welcome', compact('courses'));
})->name('landing');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/certf', function () {
    return view('cert');
})->name('certf');

Route::get('gen-pdf/{file}', [PdfController::class, 'gen'])->name('generate');

Route::post('/searchFile', function (Request $request) {

    $student = Student::where('dni', $request->dni)->get()->first();
    return view('cert', compact('student'));
})->name('searchFile');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->to('students');
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/users', function () {
    //     return view('dashboard.users.index');
    // })->name('users');

    Route::resource('students', StudentController::class)->names('students');
    Route::resource('courses', CourseController::class)->names('courses');
    Route::resource('certificates', CertificateController::class)->names('certificates');


    Route::post('/documents', function (Request $request) {
        
        $request->validate([
            'dni' => 'required',
            'course_id' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required'
        ]);

        Certificate::create([
            // 'path' => $url,
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'dni' => $request->dni,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year
        ]);
    
        return back()->with('success', 'El certificado ha sido subido con exito!');
    })->name('documents.store');

});

