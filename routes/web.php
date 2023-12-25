<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\FormController;
use App\Http\Controllers\Auth\CheckController;

use App\Http\Controllers\Auth\FormControllergetValidationFactory;


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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [WelcomeController::class, 'index']);


Route::post('/submit-form', [FormController::class, 'store'])->name('submit-form');


//Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submit-form');

// Registration route should use GET method
// Route::get('/register', [FormController::class, 'showRegistrationForm'])->name('register');
Route::get('/register', [FormController::class, 'register'])->name('register');

//Route::get('/check', [CheckController::class, 'check'])->name('check.auth');
//Route::post('/check', 'CheckController@check');

// web.php

Route::get('/check', [CheckController::class, 'showCheckForm'])->name('check.auth');
Route::post('/check', [CheckController::class, 'check']);


Route::get('/verifikasi-referral', [CheckController::class, 'verifikasiReferral'])->name('verifikasi-referral');

Route::match(['get', 'post'], '/verifikasi-referral', [CheckController::class, 'verifikasiReferral'])->name('verifikasi-referral');

//baru
//Route::get('/get-popup-data/{kodeReferral}', [CheckController::class, 'getPopupData']);
Route::get('/get-popup-data/{referralCode}', [CheckController::class, 'getPopupData']);


// routes/web.php bru bgt

Route::get('/get-popup-data/{referralCode}', 'CheckController@getPopupData')->name('get-popup-data');
Route::get('/check/{referral_code}', 'CheckController@show');

Route::get('/check', 'CheckController@showCheckView')->name('check.auth');
Route::get('/check', [CheckController::class, 'showCheckView'])->name('check.auth');





//$data = DB::table('form_data')->where('kode_referral', $kodeReferral)->first();







