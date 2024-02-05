<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\connexionController;

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
Route::get('/connexion', [connexionController::class,'connexionPage']);
Route::post('/loginadmin', [connexionController::class,'loginadmin'])->name("loginadmin");
Route::get('/liste-choix-filiere',[connexionController::class, 'etudiantfiliere'])->name("liste_choix_filiere");
// Route::middleware(['auth'])->group(function () {
//     Route::get('/liste', [connexionController::class, 'liste'])->name('liste_choix_filiere');
// });
// Route::get('/liste_choix_filiere', [connexionController::class, 'showEtudiantFiliere'])->name('liste_choix_filiere');
// Route::get('etudiant-filiere','Relation\connexionController@getetudiantfiliere')->name("liste_choix_filiere ");
// Route::get('/filiere',[connexionController::class, 'filiere'])->name("liste_choix_filiere");