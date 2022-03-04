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
    return view('index');
})->name('index');

Route::get('conceptos_sistemas', function () {
    return view('conceptos_sistemas');
})->name('conceptos_sistemas');

Route::get('arquitectura_cs', function () {
    return view('arquitectura_cliente_servidor');
})->name('arquitectura_cs');

Route::get('clasificacion_si', function () {
    return view('clasificacion_sistemas_informacion');
})->name('clasificacion_si');

Route::get('componentes_cs', function () {
    return view('componentes_cliente_servidor');
})->name('componentes_cs');

Route::get('concepto_cs', function () {
    return view('concepto_cliente_servidor');
})->name('concepto_cs');

Route::get('concepto_pm', function () {
    return view('concepto_programa_maestro');
})->name('concepto_pm');

Route::get('conexion_redes', function () {
    return view('conexion_libre_redes');
})->name('conexion_redes');

Route::get('evolucion_sistemas', function () {
    return view('evolucion_sistemas');
})->name('evolucion_sistemas');

Route::get('proceso_diagrama', function () {
    return view('proceso_diagramacion');
})->name('proceso_diagrama');

Route::get('proceso_diagrama', function () {
    return view('procesos_tareas_program_maestro');
})->name('proceso_diagrama');

Route::get('protocolos_red', function () {
    return view('protocolos_red');
})->name('protocolos_red');

Route::get('sistemas_sd', function () {
    return view('sistemas_centrales_dedicadas');
})->name('sistemas_sd');

Route::get('componentes_cs', function () {
    return view('componentes_cliente_servidor');
})->name('componentes_cs');

Route::get('programa_maestro', function () {
    return view('concepto_programa_maestro');
})->name('programa_maestro');

Route::get('caracteristicas_cs', function () {
    return view('caracteristicas_cs');
})->name('caracteristicas_cs');

Route::get('vd_cliente_servidor', function () {
    return view('vd_cliente_servidor');
})->name('vd_cliente_servidor');

Route::get('conceptos_infraestructure', function () {
    return view('conceptos_infraestruture');
})->name('conceptos_infraestructure');

Route::get('cs_modelos', function () {
    return view('cs_modelos');
})->name('cs_modelos');

Route::get('reparto_complejidad', function () {
    return view('reparto_complejidad');
})->name('reparto_complejidad');

Route::get('modelos_multinivel', function () {
    return view('modelos_multinivel');
})->name('modelos_multinivel');

Route::get('mvc', function () {
    return view('mvc');
})->name('mvc');

Route::get('sockets', function () {
    return view('sockets');
})->name('sockets');


