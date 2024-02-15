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

Route::get('customer/register', [CustomerDetails::class, 'index'])->name('customer.register');
Route::post('customer/register', [CustomerDetails::class, 'store'])->name('customer.register');
Route::get('customer/view', [CustomerDetails::class, 'view'])->name('customer.view');