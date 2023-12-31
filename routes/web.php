<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/login', [SampleController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/', [SampleController::class,'welcome']);

Route::get('/registration', [SampleController::class,'registration']) ->middleware('alreadyLoggedIn');
Route::post('/register-user', [SampleController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [SampleController::class,'loginUser'])->name('login-user');
Route::get('/home', [SampleController::class, 'home'])->middleware('isLoggedIn');
Route::get('/logout', [SampleController::class, 'logout']);

Route::get('/auth{provider}/redirect', [ProviderController::class, 'redirect']);

Route::get('/auth{provider}/callback', [ProviderController::class, 'callback']);
   
 



require __DIR__.'/auth.php';