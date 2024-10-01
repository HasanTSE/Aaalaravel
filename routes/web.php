<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankInformationController;
use App\Http\Controllers\BankAccountsController;
use App\Http\Controllers\PartyController;

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
    return view('welcome');
});

Route::get('/bankInfo_Create', [BankInformationController::class, 'create']);
Route::post('/bankInfo_Create/store', [BankInformationController::class, 'store'])->name('bankInfo_Create.store');
Route::get('/bankInfo_View', [BankInformationController::class, 'index']);
Route::get('/bankInfo_Edit/{id}', [BankInformationController::class, 'edit'])->name('bankInfo_Edit.edit');
Route::put('/bankInfo_Update/{id}', [BankInformationController::class, 'update'])->name('bankInfo_Update.update');
Route::delete('/bankInfo_Delete/{id}', [BankInformationController::class, 'destroy'])->name('bankInfo_Delete.delete');

Route::get('/bankAcnt_Create', [BankAccountsController::class, 'create']);
Route::post('/bankAcnt_Create/store', [BankAccountsController::class, 'store'])->name('bankAcnt.store');
Route::get('/bankAcnt_View', [BankAccountsController::class, 'index'])->name('bankAcnt.index');
Route::get('/bankAcnt_Edit/{id}', [BankAccountsController::class, 'edit'])->name('bankAcnt_Edit.edit');
Route::put('/bankAcnt_Update/{id}', [BankAccountsController::class, 'update'])->name('bankAcnt.update');
Route::delete('/bankAcnt_Delete/{id}', [BankAccountsController::class, 'destroy'])->name('bankAcnt.delete');

Route::get('/partyInfo_Create', [PartyController::class, 'create']);
Route::post('/partyInfo_Create/store', [PartyController::class, 'store'])->name('partyInfo.store');
