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
    return view('index');
})->name('index');
Route::get('/company', [RelationshipController::class, 'company'])->name('company');
Route::get('/division', [RelationshipController::class, 'division'])->name('division');
Route::get('/accountingUnit', [RelationshipController::class, 'accountingUnit'])->name('accountingUnit');
Route::get('/product', [RelationshipController::class, 'product'])->name('product');
Route::get('/productModelSuffix', [RelationshipController::class, 'productModelSuffix'])->name('productModelSuffix');
Route::get('/logicbuilder', [RelationshipController::class, 'logicBuilder'])->name('logicBuilder');
Route::get('/parsingBuilder', [RelationshipController::class, 'parsingBuilder'])->name('parsingBuilder');
Route::get('/diagnosis', [RelationshipController::class, 'diagnosis'])->name('diagnosis');
Route::get('/logData', [RelationshipController::class, 'logData'])->name('logData');
Route::get('/jig', [RelationshipController::class, 'jig'])->name('jig');
Route::get('/productModel', [RelationshipController::class, 'productModel'])->name('productModel');

Route::post('/createCompany', [RelationshipController::class, 'createCompany'])->name('createCompany');
Route::post('/createDivision', [RelationshipController::class, 'createDivision'])->name('createDivision');
Route::post('/createAccountingUnit', [RelationshipController::class, 'createAccountingUnit'])->name('createAccountingUnit');
Route::post('/createProduct', [RelationshipController::class, 'createProduct'])->name('createProduct');
Route::post('/createProductModelSuffix', [RelationshipController::class, 'createProductModelSuffix'])->name('createProductModelSuffix');
Route::post('/createLogicBuilder', [RelationshipController::class, 'createLogicBuilder'])->name('createLogicBuilder');
Route::post('/createParsingBuilder', [RelationshipController::class, 'createParsingBuilder'])->name('createParsingBuilder');
Route::post('/createDiagnosis', [RelationshipController::class, 'createDiagnosis'])->name('createDiagnosis');
Route::post('/createLogData', [RelationshipController::class, 'createLogData'])->name('createLogData');
Route::post('/createJig', [RelationshipController::class, 'createJig'])->name('createJig');
Route::post('/createProductModel', [RelationshipController::class, 'createProductModel'])->name('createProductModel');

