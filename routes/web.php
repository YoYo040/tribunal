<?php

use App\Exports\MineurExport;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\MarriageRController;
use App\Http\Controllers\MineurController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Middleware\UserValid;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
    return view('pages.home');
})->name('home.index');

Route::get('/admin', [CustomAuthController::class,'accessHome'])->name('admin');

Route::post('user.login', [UserController::class,'login'])->name('user.login');


Route::resource('mineurs',MineurController::class)->middleware('uservalid');
Route::get('mineur/exportexcel', function () {
    $file_name = 'zwaj 9asir'.date('Y-m-d-H-i-s').'.xlsx';
    return Excel::download(new MineurExport,  $file_name);
})->name('mineur.exportexcel');
Route::get('/statistic', [StatisticController::class,'affich'])->name('mineurs.statistic')->middleware('uservalid');
Route::post('/statistic', [StatisticController::class,'affichParDate'])->name('mineurs.statistic')->middleware('uservalid');
Route::get('/statisticm', [StatisticController::class,'affichMar'])->name('marriagers.statistic')->middleware('uservalid');
Route::post('/statisticm', [StatisticController::class,'affichParDateMar'])->name('marriagers.statistic')->middleware('uservalid');

Route::resource('marriages', MarriageController::class)->middleware('uservalid');
Route::resource('marriagesr',MarriageRController::class)->middleware('uservalid');
Route::get('marriagesr/costmcreate/{marriagesr}',[MarriageController::class,'costmcreate'])->name('marriagesr.costmcreate')->middleware('uservalid');

Route::get('/login', function () {

    return view('admin.auth.login');
});
Route::get('/sinup', function () {

    return view('admin.auth.registration');

})->name('sinup')->middleware('uservalid');
Route::post('custom-registration', [CustomAuthController::class,'customRegistration'])->name('register.custom');
Route::post('custom-login', [CustomAuthController::class,'customLogin'])->name('login.custom');
Route::get('profile', [CustomAuthController::class,'profile'])->name('profile');
Route::get('userProfile', [CustomAuthController::class,'profile'])->name('userProfile');
Route::get('/logout', [CustomAuthController::class,'logout']);

Route::resource('employer',EmployerController::class)->middleware('uservalid');
Route::get('employer/makeUser/{employer}',[EmployerController::class,'makeUser'])->name('employer.makeUser')->middleware('uservalid');
Route::get('changeStatus', [EmployerController::class,'changeStatus'])->name('employer.changeStatus');
