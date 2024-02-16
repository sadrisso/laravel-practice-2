<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerDetails;

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

Route::get('/', function () 
{
    return view('welcome');
});

Route::group(['prefix' => 'customer'], function()
{
    Route::get('register', [CustomerDetails::class, 'index'])->name('customer.register');
    Route::post('register', [CustomerDetails::class, 'store'])->name('customer.register');
    Route::get('view', [CustomerDetails::class, 'view'])->name('customer.view');
    Route::get('delete/{id}', [CustomerDetails::class, 'delete'])->name('customer.delete');
    Route::get('edit/{id}', [CustomerDetails::class, 'edit'])->name('customer.edit');
    Route::post('update/{id}', [CustomerDetails::class, 'update'])->name('customer.update');
});

