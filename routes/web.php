<?php

use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\PdfController;
use App\Http\Controllers\Admin\StudentController;
use App\Mail\ContactMailable;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Email;
use App\Models\Student;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
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

Route::get('/asd', function () {
    $dataReq = [
        0,1,2,3
    ];
    return view('emails.contact', compact('dataReq'));
})->name('asd');

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

Route::post('/email', function (Request $request) {
    
    // return $request->all();
    $req = Email::create($request->all());
    Mail::to('jeblaje@gmail.com')->send(new ContactMailable($req));

    return back()->with('success', 'El email Fue enviado con exito!. Nos pondremos en contacto por medio de correo electronico');
        return redirect()->route('songs.index')->with('success', "La canción fue eliminada correctamente");
        return 'Correo enviado';
})->name('email');

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


// public function storeRequest(HttpRequest $request) {


//     $request->validate([
//         'email' => ['required'],
//         'message' => ['required'],
//         'question_id' => ['required']
//     ]);

//     $req = Request::create($request->all());

//     $correo = new  ContactMailable($req);
//     Mail::to($req->question->client->email)->send($correo);

//     return back()->with('success', 'Respuesta enviada al correo exitosamente!');


//     //     // return Client::where('email', $request->email)->get();


//     //     // if (condition) {
//     //     //     # code...
//     //     // } else {
//     //     //     # code...
//     //     // }
        


//     // }

// }

