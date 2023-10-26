<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//doctor user
Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);

//appointment user
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

//appointment admin
Route::get('/showappointment', [AdminController::class, 'showappointment']);
Route::get('/approved/{id}', [AdminController::class, 'approved'])->name('appointment.approved');
Route::get('/canceled/{id}', [AdminController::class, 'canceled'])->name('canceled.appointment');

//doctor admin
Route::get('/showdoctor', [AdminController::class, 'showdoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);

// Medical Device
Route::get('/medicaldevice', [AdminController::class, 'medical_device'])->name('admin.medical_device');
Route::get('/medicaldevice_add', [AdminController::class, 'medical_device_add']);
Route::post('/medicaldevice/add', [AdminController::class, 'store_medical_device']);
Route::get('/medicaldevice/edit/{id}', [AdminController::class, 'medical_device_edit']);
Route::put('/medicaldevice/update/{id}', [AdminController::class, 'update_medical_device']);
Route::delete('/medicaldevice/delete/{id}', [AdminController::class, 'destroy_device']);

// Medicine
Route::get('/medicine', [AdminController::class, 'medicine']);
Route::get('/medicine/add', [AdminController::class, 'add_medicine']);
Route::post('/medicine/add', [AdminController::class, 'store_medicine']);

// Medicine
// Route::get('/doctor_schedule', [AdminController::class, 'doctor_schedule']);