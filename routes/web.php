<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

// Login Session 
Route::get('/', [sessionController::class, 'index'])->name('login-index');
Route::get('/login', [sessionController::class, 'index'])->name('login-index');
Route::post('/loginProcess', [sessionController::class, 'loginProcess'])->name('loginProcess');

Route::get('/logout', [sessionController::class, 'logout'])->name('logout');


// Admin Route
Route::group(['middleware' => 'admin'], function () {
    // Rute-rute admin di sini
    Route::get('/admin', [adminController::class, 'index'])->name('adminIndex');

    // Teachers Data
    Route::get('/admin/teacher', [adminController::class, 'teacherData'])->name('teacherData');
    Route::get('/admin/teacherInput', [adminController::class, 'teacherInput'])->name('teacherInput');
    Route::post('/admin/teacherCreate', [adminController::class, 'teacherCreate'])->name('teacherCreate');
    Route::get('/admin/teacherDelete', [adminController::class, 'teacherDelete'])->name('teacherDelete');
    
    Route::get('/admin/teacherDelete/{id}', [adminController::class, 'teacherDelete'])->name('teacherDelete');
    
    
    // Students Data
    Route::get('/admin/student', [adminController::class, 'studentData'])->name('studentData');
    Route::get('/admin/studentInput', [adminController::class, 'studentInput'])->name('studentInput');
    Route::post('/admin/studentCreate', [adminController::class, 'studentCreate'])->name('studentCreate');

    Route::get('/admin/studentDelete/{id}', [adminController::class, 'studentDelete'])->name('studentDelete');
    
    
    // Violation / pelanggaran
    Route::get('/admin/laporanPelanggaran', [adminController::class, 'laporanPelanggaran'])->name('laporanPelanggaran');
    Route::get('/admin/laporanInput', [adminController::class, 'laporanInput'])->name('laporanInput');
    Route::get('/admin/deleteLaporan/{id}', [adminController::class, 'deleteLaporan'])->name('deleteLaporan');
    Route::get('/admin/detailLaporan/{id}', [adminController::class, 'detailLaporan'])->name('detailLaporan');
    Route::get('/admin/changeStatus/{id}/{status}', [adminController::class, 'changeStatus'])->name('changeStatus');
    Route::get('/admin/historyLaporan', [adminController::class, 'historyLaporan'])->name('historyLaporan');
    

    Route::post('/admin/createlaporan', [adminController::class, 'createlaporan'])->name('createlaporan');

    Route::get('/admin/kategoriPelanggaran', [adminController::class, 'kategoriPelanggaran'])->name('kategoriPelanggaran');
    Route::get('/admin/kategoriInput', [adminController::class, 'kategoriInput'])->name('kategoriInput');
    Route::post('/admin/categoryPost', [adminController::class, 'categoryPost'])->name('categoryPost');
    Route::get('/admin/deleteCategory', [adminController::class, 'deleteCategory'])->name('deleteCategory');


    Route::get('/admin/setPoint', [adminController::class, 'setPoint'])->name('setPoint');
    Route::post('/admin/updateSetPoint', [adminController::class, 'updateSetPoint'])->name('updateSetPoint');
    
    
    // Teacher admin
    Route::get('/admin/teacherAdmin', [adminController::class, 'teacherAdmin'])->name('teacherAdmin');
    Route::get('/admin/addAccessTeacherAdmin/{id}', [adminController::class, 'addAccessTeacherAdmin'])->name('addAccessTeacherAdmin');
    Route::get('/admin/removeAccessTeacherAdmin/{id}', [adminController::class, 'removeAccessTeacherAdmin'])->name('removeAccessTeacherAdmin');

});



// Teacher Route
Route::group(['middleware' => 'teacher'], function () {
    // Rute-rute untuk teacher di sini
    Route::get('/teacher/teacherDashboard', [TeacherController::class, 'teacherIndex'])->name('teacherIndex');
    Route::get('/teacher/form-registration', [TeacherController::class, 'formRegistration'])->name('formRegistrationTeacher');
    Route::post('/teacher/registrationPost', [TeacherController::class, 'registrationPost'])->name('registrationPostTeacher');
    

    Route::get('/teacher/profile', [TeacherController::class, 'teacherProfile'])->name('teacherProfile');
    Route::get('/teacher/dataSantri', [TeacherController::class, 'dataSantri'])->name('dataSantri');
    Route::get('/teacher/laporanSantri', [TeacherController::class, 'laporanSantri'])->name('laporanSantri');
    
    
    Route::get('/teacher/buatLaporan/{id}', [TeacherController::class, 'buatLaporan'])->name('buatLaporan');
    Route::post('/teacher/storeViolationReport', [TeacherController::class, 'storeViolationReport'])->name('storeViolationReport');
    Route::get('/teacher/deleteLaporan/{id}', [TeacherController::class, 'deletelaporan'])->name('deletelaporan');
    
    // teacher Admin
    Route::get('/teacher/verifikasiLaporan', [TeacherController::class, 'verifikasiLaporan'])->name('verifikasiLaporan');
    Route::get('/teacher/detailLaporan/{id}', [TeacherController::class, 'detailLaporan'])->name('detailLaporan.teacher');
    Route::get('/teacher/change-status/{id}/{status}', [TeacherController::class, 'changeStatus'])->name('changeStatus.teacher');
    
    
    
});


// Student Route
Route::group(['middleware' => 'student'], function () {
    // Rute-rute untuk student di sini
    Route::get('/student/dashboard', [StudentController::class, 'studentIndex'])->name('studentIndex');
    
    Route::get('/student/form-registration', [StudentController::class, 'formRegistration'])->name('formRegistration');
    Route::post('/student/registrationPost', [StudentController::class, 'registrationPost'])->name('registrationPost');
    
    
    
    Route::get('/student/SantriData', [StudentController::class, 'SantriData'])->name('SantriData');
    Route::get('/student/profile', [StudentController::class, 'studentProfile'])->name('studentProfile');
    Route::get('/student/editProfile', [StudentController::class, 'editProfile'])->name('editProfile');



    Route::get('/student/SantriDataDetail/{id}', [StudentController::class, 'SantriDataDetail'])->name('SantriDataDetail');
    Route::post('/student/editProfilePost', [StudentController::class, 'editProfilePost'])->name('editProfilePost');
    // ...
});
