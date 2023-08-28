<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LowonganController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterUserController;
use App\Http\Controllers\MasterCompanyController;
use App\Http\Controllers\MasterVacancyController;
use App\Http\Controllers\MasterSiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\JurusanController;

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
    return view('dashboard');
});

Route::get('/login', [HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('/profile', ProfileController::class);
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    
    
});

  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('/admin/masteruser', MasterUserController::class);
    Route::get('/admin/masteruser', [MasterUserController::class,'index'])->name('masteruser.index');
    Route::resource('/admin/mastercompany', MasterCompanyController::class);
    Route::get('/admin/mastercompany', [MasterCompanyController::class,'index'])->name('mastercompany.index');
    Route::resource('/admin/mastervacancy', MasterVacancyController::class);
    Route::get('/admin/mastervacancy', [MasterVacancyController::class,'index'])->name('mastervacancy.index');
    Route::resource('/admin/mastersiswa', MasterSiswaController::class);
    Route::get('/admin/mastersiswa', [MasterSiswaController::class,'index'])->name('mastersiswa.index');
    Route::resource('/admin/skills', SkillsController::class);
    Route::get('/admin/skills', [SkillsController::class,'index'])->name('skills.index');
    Route::resource('/admin/jurusan', JurusanController::class);
    Route::get('/admin/jurusan', [JurusanController::class,'index'])->name('jurusan.index');

});
  

Route::get('/lowongan/index', [LowonganController::class, 'index'])->name('lowongan.index');
Route::get('/lowongan/show', [LowonganController::class, 'show'])->name('lowongan.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


Auth::routes();