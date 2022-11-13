<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriaClienteController;
use App\Http\Controllers\InvolucradoClienteController;
use App\Http\Controllers\ProyectoClienteController;
use App\Http\Controllers\InvolucradoproyectoClienteController;
use App\Http\Controllers\ArticuloClienteController;
use App\Http\Controllers\LibroRevistaClienteController;
use App\Http\Controllers\TesisClienteController;
use App\Http\Controllers\RepositorioClienteController;

//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProvinciaController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
 //pdf
Route::get('temas/pdf', [App\Http\Controllers\TemaController::class, 'pdf'])->name('temas.pdf');
Route::get('proyectos/pdf', [App\Http\Controllers\ProyectoController::class, 'pdf'])->name('proyectos.pdf');
Route::get('usuarios/pdf', [App\Http\Controllers\UsuarioController::class, 'pdf'])->name('usuarios.pdf');
Route::get('involucrados/pdf', [App\Http\Controllers\InvolucradoController::class, 'pdf'])->name('involucrados.pdf');
Route::get('articulos/pdf', [App\Http\Controllers\ArticuloController::class, 'pdf'])->name('articulos.pdf');
Route::get('tesis/pdf', [App\Http\Controllers\TesiController::class, 'pdf'])->name('tesis.pdf');
Route::get('libro-revistas/pdf', [App\Http\Controllers\LibroRevistaController::class, 'pdf'])->name('libro-revistas.pdf');
Route::get('canton-organizacions/pdf', [App\Http\Controllers\CantonOrganizacionController::class, 'pdf'])->name('canton-organizacions.pdf');


//excel
Route::get('temas/excel', [App\Http\Controllers\TemaController::class, 'excel'])->name('temas.excel');
Route::get('usuarios/excel', [App\Http\Controllers\UsuarioController::class, 'excel'])->name('usuarios.excel');
Route::get('proyectos/excel', [App\Http\Controllers\ProyectoController::class, 'excel'])->name('proyectos.excel');
Route::get('involucrados/excel', [App\Http\Controllers\InvolucradoController::class, 'excel'])->name('involucrados.excel');
Route::get('articulos/excel', [App\Http\Controllers\ArticuloController::class, 'excel'])->name('articulos.excel');
Route::get('tesis/excel', [App\Http\Controllers\TesiController::class, 'excel'])->name('tesis.excel');
Route::get('libro-revistas/excel', [App\Http\Controllers\LibroRevistaController::class, 'excel'])->name('libro-revistas.excel');
Route::get('canton-organizacions/excel', [App\Http\Controllers\CantonOrganizacionController::class, 'excel'])->name('canton-organizacions.excel');


Route::resource('/cligaleria', GaleriaClienteController::class);
Route::resource('/cliinvolucrado', InvolucradoClienteController::class);
Route::resource('/cliproyecto', ProyectoClienteController::class);
Route::resource('/InvPro', InvolucradoproyectoClienteController::class);
Route::resource('/cliarticulo', ArticuloClienteController::class);
Route::resource('/clilibrorevis', LibroRevistaClienteController::class);
Route::resource('/clitesi', TesisClienteController::class);
Route::resource('/clirepo', RepositorioClienteController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('provincias', ProvinciaController::class);
    Route::resource('/temas', App\Http\Controllers\TemaController::class);
    Route::resource('/galerias', App\Http\Controllers\GaleriaController::class);
    Route::resource('/categorias', App\Http\Controllers\CategoriaController::class);
    Route::resource('/proyectos', App\Http\Controllers\ProyectoController::class);
    Route::resource('/cantons', App\Http\Controllers\CantonController::class);
    Route::resource('/involucrado-proyectos', App\Http\Controllers\InvolucradoProyectoController::class);
    Route::resource('/tipo-organizacions', App\Http\Controllers\TipoOrganizacionController::class);
    Route::resource('/personas', App\Http\Controllers\PersonaController::class);
    Route::resource('/implicacions', App\Http\Controllers\ImplicacionController::class);
    Route::resource('/canton-organizacions', App\Http\Controllers\CantonOrganizacionController::class);
    Route::resource('/organizacions', App\Http\Controllers\OrganizacionController::class);
    Route::resource('/involucrados', App\Http\Controllers\InvolucradoController::class);

    Route::resource('/autors', App\Http\Controllers\AutorController::class);
    Route::resource('/etiquetas', App\Http\Controllers\EtiquetaController::class);
    Route::resource('/articulos', App\Http\Controllers\ArticuloController::class);
    Route::resource('/indicadors', App\Http\Controllers\IndicadorController::class);
    Route::resource('/variables', App\Http\Controllers\VariableController::class);
    Route::resource('/dimensions', App\Http\Controllers\DimensionController::class);
    Route::resource('/tesis', App\Http\Controllers\TesiController::class);
    Route::resource('/carreras', App\Http\Controllers\CarreraController::class);
    Route::resource('/tipo-tesis', App\Http\Controllers\TipoTesiController::class);
    Route::resource('/tipo-articulos', App\Http\Controllers\TipoArticuloController::class);
    Route::resource('/editorials', App\Http\Controllers\EditorialController::class);
    Route::resource('/tipo-libros', App\Http\Controllers\TipoLibroController::class);
    Route::resource('/libro-revistas', App\Http\Controllers\LibroRevistaController::class);


});
