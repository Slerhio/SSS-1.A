<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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


Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contacts.create');

Route::get('/contacts/{id}', [ContactsController::class, 'show'])->name('contacts.show');
