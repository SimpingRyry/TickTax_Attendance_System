<<<<<<< HEAD
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\listController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ScheduleGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::post('/import', [ImportController::class, 'import'])->name('import');

Route::get('registration', [ImportController::class, 'show']);
Route::get('try', [ImportController::class, 'show']);
Route::get('/events', function () {
    return view('events'); 

});

Route::get('/login', function () {
    return view('login'); 


});
Route::get('/profile_page', function () {
    return view('profile_page'); 


});

Route::get('/logs', function () {
    return view('logs'); 


});

Route::get('/template', function () {
    return view('memo.template'); 


});


Route::get('/index', [IndexController::class, 'index']);

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [HomeController::class, 'showlogin'])->name('login');


Route::get('/generate-memo', [ScheduleGenerator::class, 'showForm'])->name('memo.form');
Route::post('/generate-memo', [ScheduleGenerator::class, 'generatePDF'])->name('generate.memo.pdf');


