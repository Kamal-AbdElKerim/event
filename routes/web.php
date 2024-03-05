<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Forgotten_passwordController;
use App\Http\Controllers\ReservationController;
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
    return view('Front.index');
})->name('home');



Route::get('/Reste_Passwored', [Forgotten_passwordController::class, 'Reste_Passwored'])->name('Reste_Passwored');
Route::post('/subment_Reste_Passwored', [Forgotten_passwordController::class, 'subment_Reste_Passwored'])->name('subment_Reste_Passwored');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('/List_Users', [AdminController::class, 'List_Users'])->name('List_Users');
    Route::get('/List_evenements', [AdminController::class, 'List_evenements'])->name('List_evenements');
    Route::get('/Dashboard/admin', [AdminController::class, 'Dashboard'])->name('Dashboard_admin');


    Route::get('/form_Add_Category', [CategorieController::class, 'form_Add_Category'])->name('form_Add_Category');
    Route::post('/add_Category', [CategorieController::class, 'add_Category'])->name('add_Category');
    Route::post('/delete_categorie/{id}', [CategorieController::class, 'delete_categorie'])->name('delete_categorie');
    Route::get('/form_update_categorie/{id}', [CategorieController::class, 'form_update_categorie'])->name('form_update_categorie');
    Route::post('/update_Category/{id}', [CategorieController::class, 'update_Category'])->name('update_Category');
    

    Route::get('/List_reservations', [ReservationController::class, 'List_reservations'])->name('List_reservations');


    Route::get('/Dashboard/Organisateur', [EventController::class, 'Dashboard'])->name('Dashboard_Organisateur');
    Route::get('/form_Add_Events', [EventController::class, 'form_Add_Events'])->name('form_Add_Events');


    // Route::get('/Dashboard/Organisateur', [EventController::class, 'Dashboard'])->name('Dashboard_Organisateur');

});

require __DIR__.'/auth.php';
