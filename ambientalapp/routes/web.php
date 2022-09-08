<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {
    return view('home');
})->name('main');

Route::get('/user', function () {
    return view('userDash');
})->middleware('auth');

//Registro
Route::get('/register',[RegisterController::class,'create'])->middleware('guest')->name('register.index');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');


Route::post('/registerAlumno',[RegisterController::class,'storeAlumno'])->middleware('guest')->name('registerAlumno.store');

Route::post('/registerProfesor',[RegisterController::class,'storeProfesor'])->middleware('guest')->name('registerProfesor.store');

//Login
Route::get('/login',[SessionsController::class,'create'])->middleware('guest')->name('login.index');
Route::post('/login',[SessionsController::class,'store'])->name('login.store');

//Login Google
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
})->middleware('guest')->name('loginGoogle.index');
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $userExists = User::where('external_id',$user->id)->where('external_auth','google')->first();

    if($userExists){
        
    }
    
})->middleware('guest');

// Route::get('/google-callback', )->middleware('guest');

//Logout
Route::get('/logout',[SessionsController::class,'destroy'])->middleware('auth')->name('login.destroy');

//Rutas admin
Route::get('/admin',[AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
//Alumnos
Route::get('/admin/alumnos',[AdminController::class, 'indexAlumnos'])->middleware('auth.admin')->name('admin.indexAlumnos');
Route::get('/admin/alumnoNuevo',[AdminController::class,'createAlumno'])->middleware('auth.admin')->name('admin.createAlumno');
Route::post('/admin/alumnoNuevo',[AdminController::class,'storeAlumno'])->middleware('auth.admin')->name('admin.storeAlumno');
Route::get('/admin/alumnos/edit/{id}',[AdminController::class,'editAlumno'])->middleware('auth.admin')->name('admin.editAlumno');
Route::post('/admin/alumnos/edit/{id}',[AdminController::class,'updateAlumno'])->middleware('auth.admin')->name('admin.updateAlumno');
Route::post('/admin/alumnos/delete{id}',[AdminController::class,'deleteAlumno'])->middleware('auth.admin')->name('admin.deleteAlumno');
//Profesores
Route::get('/admin/profesores',[AdminController::class, 'indexProfesores'])->middleware('auth.admin')->name('admin.indexProfesores');
Route::get('/admin/profesorNuevo',[AdminController::class,'createProfesor'])->middleware('auth.admin')->name('admin.createProfesor');
Route::post('/admin/profesorNuevo',[AdminController::class,'storeProfesor'])->middleware('auth.admin')->name('admin.storeProfesor');
Route::get('/admin/profesores/edit/{id}',[AdminController::class,'editProfesor'])->middleware('auth.admin')->name('admin.editProfesor');
Route::post('/admin/profesores/edit/{id}',[AdminController::class,'updateProfesor'])->middleware('auth.admin')->name('admin.updateProfesor');
Route::post('/admin/profesores/delete{id}',[AdminController::class,'deleteProfesor'])->middleware('auth.admin')->name('admin.deleteProfesor');
//Escuelas
Route::get('/admin/escuelas',[AdminController::class, 'indexEscuelas'])->middleware('auth.admin')->name('admin.indexEscuelas');
Route::get('/admin/escuelaNuevo',[AdminController::class,'createEscuela'])->middleware('auth.admin')->name('admin.createEscuela');
Route::post('/admin/escuelaNuevo',[AdminController::class,'storeEscuela'])->middleware('auth.admin')->name('admin.storeEscuela');
Route::get('/admin/escuelas/edit/{id}',[AdminController::class,'editEscuela'])->middleware('auth.admin')->name('admin.editEscuela');
Route::post('/admin/escuelas/edit/{id}',[AdminController::class,'updateEscuela'])->middleware('auth.admin')->name('admin.updateEscuela');
Route::post('/admin/escuelas/delete{id}',[AdminController::class,'deleteEscuela'])->middleware('auth.admin')->name('admin.deleteEscuela');
Route::post('/admin/escuelasNuevoExcel',[AdminController::class,'importEscuelaExcel'])->middleware('auth.admin')->name('admin.importEscuelas');

//Ciudadanos
Route::get('/admin/ciudadanos',[AdminController::class, 'indexCiudadanos'])->middleware('auth.admin')->name('admin.indexCiudadanos');
Route::get('/admin/ciudadanoNuevo',[AdminController::class,'createCiudadano'])->middleware('auth.admin')->name('admin.createCiudadano');
Route::post('/admin/ciudadanoNuevo',[AdminController::class,'storeCiudadano'])->middleware('auth.admin')->name('admin.storeCiudadano');
Route::get('/admin/ciudadanos/edit/{id}',[AdminController::class,'editCiudadano'])->middleware('auth.admin')->name('admin.editCiudadano');
Route::post('/admin/ciudadanos/edit/{id}',[AdminController::class,'updateCiudadano'])->middleware('auth.admin')->name('admin.updateCiudadano');
Route::post('/admin/ciudadanos/delete{id}',[AdminController::class,'deleteCiudadano'])->middleware('auth.admin')->name('admin.deleteCiudadano');
//Contenido
Route::get('/admin/contenido',[AdminController::class, 'indexContenido'])->middleware('auth.admin')->name('admin.indexContenido');
Route::get('/admin/contenidoNuevo',[AdminController::class,'createContenido'])->middleware('auth.admin')->name('admin.createContenido');
Route::post('/admin/contenidoNuevo',[AdminController::class,'storeContenido'])->middleware('auth.admin')->name('admin.storeContenido');
Route::get('/admin/contenido/edit/{id}',[AdminController::class,'editContenido'])->middleware('auth.admin')->name('admin.editContenido');
Route::post('/admin/contenido/edit/{id}',[AdminController::class,'updateContenido'])->middleware('auth.admin')->name('admin.updateContenido');
Route::post('/admin/contenido/delete{id}',[AdminController::class,'deleteContenido'])->middleware('auth.admin')->name('admin.deleteContenido');


//Rutas alumno
Route::get('/alumno',[AlumnoController::class, 'index'])->middleware('auth.alumno')->name('alumno.index');

//Rutas profesor
Route::get('/profesor',[ProfesorController::class, 'index'])->middleware('auth.profesor')->name('profesor.index');