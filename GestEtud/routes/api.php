<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\EmploiTempsController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PFEController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;



Route::get('posts', [PostsController::class, 'index'])->middleware('auth:sanctum');
Route::post('login', [LoginController::class, 'login']);
Route::delete('logout', [LoginController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("list_admina/" , [AdminController::class , 'store']);
Route::patch("update_admin/{admin}" , [AdminController::class , 'update']);
Route::delete("delete_admin/{admin}" , [AdminController::class , 'destroy']);

Route::post("list_etudiant/" , [EtudiantController::class , 'store']);
Route::patch("update_etudiant/{etudiant}" , [EtudiantController::class , 'update']);
Route::delete("delete_etudiant/{etudiant}" , [EtudiantController::class , 'destroy']);

Route::post("list_profs/" , [ProfesseurController::class , 'store']);
Route::patch("update_list_prof/{Professeur}" , [ProfesseurController::class , 'update']);
Route::delete("delete_list_prof/{Professeur}" , [ProfesseurController::class , 'destroy']);

Route::post("list_emploi_tempss/" , [EmploiTempsController::class , 'store']);
Route::patch("update_emploi_temps/{emploi_temps}" , [EmploiTempsController::class , 'update']);
Route::delete("delete_emploi_temps/{emploi_temps}" , [EmploiTempsController::class , 'destroy']);

Route::post("list_modules/" , [ModuleController::class , 'store']);
Route::patch("update_module/{module}" , [ModuleController::class , 'update']);
Route::delete("delete_module/{module}" , [ModuleController::class , 'destroy']);

Route::post("list_notes/" , [NoteController::class , 'store']);
Route::patch("update_note/{note}" , [NoteController::class , 'update']);
Route::delete("delete_note/{note}" , [NoteController::class , 'destroy']);

Route::post('posts' , [PostsController::class , 'index']);
Route::get('login' , [LoginController::class , 'login']);
Route::get('/posts' , function(){
    return Post::all();
});


// Route::get('/etudiants', class::EtudiantController);
// Route::get('/etudiants/{id}', 'EtudiantController@show');
// Route::post('/etudiants', 'EtudiantController@store');
// Route::post('/etudiants/{id}/answers', 'EtudiantController@answer');
// Route::delete('/etudiants/{id}', 'EtudiantController@delete');
// Route::delete('/etudiants/{id}/answers', 'EtudiantController@resetAnswers');


Route::get("list_prof/{id?}" , [ProfesseurController::class , 'list_prof']);

Route::get("list_etudiants/{id?}" , [EtudiantController::class , 'list_etudiant']);

Route::get("list_admin/{id?}" , [AdminController::class , 'list_admin']);

Route::get("list_salle/{id?}" , [SalleController::class , 'list_salle']);

Route::get("list_emploi_temps/{id?}" , [EmploiTempsController::class , 'list_emploi_temps']);

Route::get("list_module/{id?}" , [ModuleController::class , 'list_module']);

Route::get("list_note/{id?}" , [NoteController::class , 'list_note']);


Route::get("list_pfe/{id?}" , [PFEController::class , 'list_pfe']);
