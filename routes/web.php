<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GreenController;
use App\Http\Livewire\Annonces;
use App\Http\Livewire\ContactAdmin;
use App\Http\Livewire\Contacts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('admin', function () {
//     return view('admin.layouts.master');
// });

//admin route
// Route::get('admin',[AdminController::class, 'adminHome'])->name("admin");

Route::get('/',[GreenController::class, 'home'])->name("home");
Route::get('apropos-de-nous',[GreenController::class, 'about'])->name("about");
Route::get('services',[GreenController::class, 'services'])->name("services");
Route::get('projet-realise',[GreenController::class, 'projets'])->name("projets");
Route::get('contact',[GreenController::class, 'contact'])->name("contact");

Route::get('/annonce/{id}',[GreenController::class, 'detailAnnonce'])->name('annonce.detail');

Auth::routes();

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');


Route::group([
    "middleware" => ["auth", "auth.admin"],
    "as" => "admin."
],function () {
    Route::get('/admin',[AdminController::class, 'adminHome'])->name("home");
    Route::get('/admin-message',ContactAdmin::class)->name("message");
    Route::get('/admin-annonce',Annonces::class)->name("annonces");
});
