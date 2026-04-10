<?php
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\view\view;
use App\Http\Controllers\userAuthentication;
Route::middleware('auth')->group(function () {
    Route::get('/students/create_student', function () {
        return view('components.create_student', ['title' => 'Create Student']);
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', function () {
    return view('students', ['students' => Student::all()]);
});

Route::get('/students/{id}', function (int $id) {
    return view('learner', ['student' => Student::find($id)]);
});

Route::post('/students', function (Request $request) {
    Student::create($request->all());
    return redirect('/');
});

Route::post('/students/{id}', function (Request $request, int $id) {
    Student::find($id)->update($request->all());
    return redirect('/');
});

Route::delete('/students/{id}', function (int $id) {
    Student::find($id)->delete();
    return redirect('/');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login',function (){

});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register',function () {
 
});



Route::get('/login', function () {
    return view('auth.login');
})->name('login');



Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    // TODO: Add registration logic here.
    return redirect('/dashboard');
});
Route::post('/register',[userAuthentication::class,'signupUser']);


Route::post('/login', function (Request $request) {
    return redirect('/dashboard');
});