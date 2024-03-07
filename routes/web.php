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

// Route::get('/events', function () {
//     return view('Front.events');
// })->name('events');

Route::get('/events', [EventController::class, 'events'])->name('events');
Route::get('/events_single/{id}', [EventController::class, 'events_single'])->name('events_single');

Route::get('/Reste_Passwored', [Forgotten_passwordController::class, 'Reste_Passwored'])->name('Reste_Passwored');
Route::post('/subment_Reste_Passwored', [Forgotten_passwordController::class, 'subment_Reste_Passwored'])->name('subment_Reste_Passwored');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('/List_Users', [AdminController::class, 'List_Users'])->name('List_Users');
    Route::get('/Dashboard/admin', [AdminController::class, 'Dashboard'])->name('Dashboard_admin');
    Route::get('/List_evenements', [AdminController::class, 'List_evenements'])->name('List_evenements');
    Route::get('/approved_event/{id}', [AdminController::class, 'approved_event'])->name('approved_event');
    Route::get('/rejected_event/{id}', [AdminController::class, 'rejected_event'])->name('rejected_event');


    Route::get('/form_Add_Category', [CategorieController::class, 'form_Add_Category'])->name('form_Add_Category');
    Route::post('/add_Category', [CategorieController::class, 'add_Category'])->name('add_Category');
    Route::post('/delete_categorie/{id}', [CategorieController::class, 'delete_categorie'])->name('delete_categorie');
    Route::get('/form_update_categorie/{id}', [CategorieController::class, 'form_update_categorie'])->name('form_update_categorie');
    Route::post('/update_Category/{id}', [CategorieController::class, 'update_Category'])->name('update_Category');
    

    
    
    Route::get('/Dashboard/Organisateur', [EventController::class, 'Dashboard'])->name('Dashboard_Organisateur');
    Route::get('/form_Add_Events', [EventController::class, 'form_Add_Events'])->name('form_Add_Events');
    Route::post('/add_event', [EventController::class, 'add_event'])->name('add_event');
    Route::post('/delete_event/{id}', [EventController::class, 'delete_event'])->name('delete_event');
    Route::get('/form_update_event/{id}', [EventController::class, 'form_update_event'])->name('form_update_event');
    Route::post('/Update_event/{id}', [EventController::class, 'Update_event'])->name('Update_event');
    
    
    
    Route::get('/List_reservations', [ReservationController::class, 'List_reservations'])->name('List_reservations');
    Route::post('/add_reservation/{id}', [ReservationController::class, 'add_reservation'])->name('add_reservation');
    Route::get('/accept_reserv/{id}', [ReservationController::class, 'accept_reserv'])->name('accept_reserv');
    Route::get('/refuser_reserv/{id}', [ReservationController::class, 'refuser_reserv'])->name('refuser_reserv');
    Route::post('/change_Switch', [ReservationController::class, 'change_Switch'])->name('change_Switch');



    // Route::get('/Dashboard/Organisateur', [EventController::class, 'Dashboard'])->name('Dashboard_Organisateur');

});

require __DIR__.'/auth.php';
