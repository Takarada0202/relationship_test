<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\RelationshipController;

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
    return view('index') ;
}) ->name('index');
Route::get('/company',[RelationshipController::class,'company']) ->name('company');
Route::get('/division',[RelationshipController::class,'division']) ->name('division');
Route::get('/accountingUnit',[RelationshipController::class,'accountingUnit']) ->name('accountingUnit');

Route::post('/createCompany',[RelationshipController::class,'createCompany']) ->name('createCompany');
Route::post('/createDivision',[RelationshipController::class,'createDivision']) ->name('createDivision');
Route::post('/createAccountingUnit',[RelationshipController::class,'createAccountingUnit']) ->name('createAccountingUnit');
