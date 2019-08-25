<?php

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
    return view('LogginViews.loggin');
});


Route::get('/home', 'HomeController@index')->name('home');

/**
 * Rutas Administrador Usuario
 */
Route::get('Usabilidad-Web/ListaUsuarios','UserController@listaUsuario')->name('usuario.lista');

Route::get('Usabilidad-Web/AgregarUsuario','UserController@agregaUsuario')->name('usuario.agrega');

Route::get('Usabilidad-Web/EditarUsuario{user}','UserController@editaUsuario')->name('usuario.edita');

Route::post('Usabilidad-Web/InsertarUsuario','UserController@insertarUsuario')->name('usuario.insertar');

/**
 * Rutas Administrador Plataforma
 */

Route::get('Usabilidad-Web/AgregarPlataforma','PlataformaController@agregaPlataforma')->name('plataforma.agrega');

Route::get('Usabilidad-Web/EditarPlataforma','PlataformaController@editaPlataforma')->name('plataforma.edita');

Route::get('Usabilidad-Web/ListaPlataforma','PlataformaController@listaPlataforma')->name('plataforma.lista');

Route::get('Usabilidad-Web/Cuestionario','PlataformaController@listaCuestionario')->name('plataforma.cuestionario.ver');

Route::get('Usabilidad-Web/EditarCuestionario','PlataformaController@editaCuestionario')->name('plataforma.cuestionario.edita');

Route::get('Usabilidad-Web/AsignarEvaluador','PlataformaController@asignarEvaluador')->name('plataforma.asignarEvaluador');

Route::get('Usabilidad-Web/Observaciones','PlataformaController@listaObservacion')->name('plataforma.observacion');

Route::get('Usabilidad-Web/ReportePlataforma','PlataformaController@reportePlataforma')->name('plataforma.reporte.plataforma');

Route::get('Usabilidad-Web/ReporteUsuario','PlataformaController@reporteUsuario')->name('plataforma.reporte.usuario');

Route::get('Usabilidad-Web/EditarInicio','PlataformaController@editarInicio')->name('plataforma.editar.inicio');

Route::post('Usabilidad-Web/InsertarPlataforma','UserController@insertarPlataforma')->name('plataforma.insertar');


/**
 * Rutas Usuario
 */
Route::get('Usabilidad-Web/configuracionCuenta','UserController@configuracionCuenta')->name('usuario.configuracionCuenta');


Route::get('/Inicio', 'InicioController@inicio');

/**
 * Rutas de Evaluador
 */

/**
 * Rutas de Estudiante
 */
/**
 * Rutas del Loggin de Laravel: vendor/laravel/framework/src/Illuminate/Routing/Router.php
 * public function auth
 *  Authentication Routes...
 */

//Auth::routes();

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');
