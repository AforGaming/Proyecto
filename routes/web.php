<?php

use App\Http\Controllers\PersonaController;



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
    return view('inicio');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::get('/alta', function () {
    return view('alta');
})->middleware('autenticacion');

Route::get('/insumosalta', function () {
    return view('insumosalta');
});

Route::get('/clientesalta', function () {
    return view('clientesalta');
});

Route::get('/comprasaltaa', 'ComprasController@listarCategoriasClientes');

Route::get('/comprasalta', function () {
    return view('comprasalta');
});

Route::get('/proveedoresalta', function () {
    return view('proveedoresalta');
});

Route::get('/categoriasalta', function () {
    return view('categoriasalta');
});

Route::get('/ventasaltaa', 'VentasController@listarInsumos');

Route::get('/ventasalta', function () {
    return view('ventasalta');
});

Route::get('/modificacion/{id}', 'PersonaController@listarPersonaParaModificar') ;
Route::get('/baja/{id}', 'PersonaController@listarPersonaParaEliminar') ;
Route::get('/listado/{id}', 'PersonaController@listarUnaPersona');
Route::get('/listado', 'PersonaController@listarTodasLasPersonas');
Route::post('/alta', 'PersonaController@agregarPersona');
Route::post('/baja', 'PersonaController@eliminarPersona');
Route::post('/modificacion', 'PersonaController@modificarPersona') ;
Route::post('/login','PersonaController@autenticarPersona');


Route::post('/insumosalta', 'InsumosController@agregarInsumo');
Route::get('/listadoInsumos', 'InsumosController@listarTodosLosInsumos');


Route::post('/clientesalta', 'ClientesController@agregarCliente');
Route::get('/listadoClientes', 'ClientesController@listarTodosLosClientes');

Route::post('/comprasAltaArticulo', 'ComprasController@agregarCompra');
Route::get('/listadoCompras', 'ComprasController@listarTodasLasCompras');

Route::post('/proveedoresalta', 'ProveedorController@agregarProveedor');
Route::get('/listadoProveedores', 'ProveedorController@listarTodosLosProveedores');


Route::post('/categoriasalta', 'CategoriaController@agregarCategoria');
Route::get('/listadoCategorias', 'CategoriaController@listarTodasLasCategorias');

Route::post('/ventasalta', 'VentasController@agregarVenta');
Route::get('/listadoVentas', 'VentasController@listarTodasLasVentas');


