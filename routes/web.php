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

//pengajuan appointment dari user
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);
Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

//appointment milik dokter
Route::middleware(['auth'])->group(function () {
    Route::get('/showappointment', [AdminController::class, 'showappointment'])->middleware('dokter')->name('appointmentdokter');
    Route::get('/approved/{id}', [AdminController::class, 'approved'])->name('appointment.approved')->middleware('dokter');
    Route::get('/canceled/{id}', [AdminController::class, 'canceled'])->name('canceled.appointment')->middleware('dokter');
});

//crud dokkter untuk admin
Route::get('/showdoctor', [AdminController::class, 'showdoctor'])->name('showdoctor');
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);
Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);

// Medical Device milik admin
Route::get('/medicaldevice', [AdminController::class, 'medical_device'])->name('admin.medical_device');
Route::get('/medicaldevice_add', [AdminController::class, 'medical_device_add']);
Route::post('/medicaldevice/add', [AdminController::class, 'store_medical_device']);
Route::get('/medicaldevice/edit/{id}', [AdminController::class, 'medical_device_edit']);
Route::put('/medicaldevice/update/{id}', [AdminController::class, 'update_medical_device']);
Route::delete('/medicaldevice/delete/{id}', [AdminController::class, 'destroy_device']);

// Medicine milik admin
Route::get('/medicine', [AdminController::class, 'medicine'])->name('admin.medicine');
Route::get('/medicine/add', [AdminController::class, 'add_medicine']);
Route::post('/medicine/add', [AdminController::class, 'store_medicine']);
Route::get('/medicine/edit/{id}', [AdminController::class, 'medicine_edit'])->name('admin.medicine.edit');
Route::put('/medicine/update/{id}', [AdminController::class, 'update_medicine'])->name('admin.medicine.update');
Route::delete('/medicine/delete/{id}', [AdminController::class, 'destroy_medicine']);

//////////////////////////////