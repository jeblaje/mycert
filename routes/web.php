<?php

use App\Http\Controllers\Admin\StudentController;
use App\Models\Certificate;
use App\Models\Student;
use Illuminate\Http\Request;
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
    return view('welcome');
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
        return view('dashboard');
    })->name('dashboard');

    // Route::get('/users', function () {
    //     return view('dashboard.users.index');
    // })->name('users');

    Route::resource('students', StudentController::class)->names('students');


    Route::post('/documents', function (Request $request) {
        
        $request->validate([
            'dni' => 'required',
            'file' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required'
        ]);

        // return $request->all();
        // return        $file = $request->file('file')->getClientOriginalName();
        $file = $request->file('file')->store("public/documents/$request->dni");
        $url = Storage::url($file);
        $name = $request->dni . '_' . strtr($request->title, " ", "_"). '.' . $request->file('file')->guessExtension();

        // return [
        //     'path' => $file,
        //     'url' => $url,
        //     'name' => $name
        // ];


        Certificate::create([
            'path' => $url,
            'student_id' => $request->student_id,
            'title' => $request->title,
            'dni' => $request->dni,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year
        ]);
    
        return back()->with('success', 'El certificado ha sido subido con exito!');
    })->name('documents.store');

});
