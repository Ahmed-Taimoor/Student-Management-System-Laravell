<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageStudentController;
use App\Http\Controllers\ManageTeacherController;
use App\Http\Controllers\ManageCoursesController;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/portal', [App\Http\Controllers\PortalController::class, 'portalRoute'])->name('portal');
});
//Manage Student
Route::middleware(['auth', 'role:admin|teacher'])->group(function () {

    Route::get('/addstudent', [ManageStudentController::class, 'addstudent'])->name('addstudent');

    Route::get('/viewstudent', [ManageStudentController::class, 'viewstudent'])->name('viewstudent');

    Route::get('/updatestudent/{id}', [ManageStudentController::class, 'updatestudent'])->name('updatestudent');

    Route::get('/deletestudent/{id}', [ManageStudentController::class, 'deletestudent'])->name('deletestudent');

    Route::post('/submitstudent', [ManageStudentController::class, 'submitstudent'])->name('submitstudent');

    Route::post('/updatestudentreq/{id}', [ManageStudentController::class, 'updatestudentreq'])->name('updatestudentreq');

    Route::post('/uploadstudent', [ManageStudentController::class, 'upload'])->name('students.upload');

});
//Manage teachers
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/viewteacher', [ManageTeacherController::class, 'viewteacher'])->name('viewteacher');

    Route::get('/addteacher', [ManageTeacherController::class, 'addteacher'])->name('addteacher');


    Route::post('/submitteacher', [ManageteacherController::class, 'submitteacher'])->name('submitteacher');

    Route::get('/updateteacher/{id}', [ManageTeacherController::class, 'updateteacher'])->name('updateteacher');

    Route::get('/deleteteacher/{id}', [ManageteacherController::class, 'deleteteacher'])->name('deleteteacher');

    Route::post('/updateteacherreq/{id}', [ManageteacherController::class, 'updateteacherreq'])->name('updateteacherreq');

    Route::get('/users', [UsersController::class, 'users'])->name('users');
    Route::get('/print/{userId}', [PdfController::class, 'download'])->name('print.user');
});

//Manage cources
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/viewcourse', [ManageCoursesController::class, 'viewcourse'])->name('viewcourse');

    Route::get('/addcourse', [ManageCoursesController::class, 'addcourse'])->name('addcourse');


    Route::post('/submitcourse', [ManageCoursesController::class, 'submitcourse'])->name('submitcourse');

    // Route::get('/viewcourse', [ManageCoursesController::class, 'viewcourse'])->name('viewcourse');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
