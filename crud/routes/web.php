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

Route::get('/lista_alumnos', 'crud_alumno_controller@alumno_index')->name('ListaAlumnos');
Route::get('/lista_alumnos/InsertaAlumno', 'crud_alumno_controller@alumno_CrearView')->name('InsertaAlumno');
Route::post('/lista_alumnos/GuardaAlumno', 'crud_alumno_controller@alumno_guardar')->name('GuardaAlumno');

Route::get('/lista_alumnos/EditaAlumno/{id}', 'crud_alumno_controller@alumno_EditarView')->name('EditarAlumno');
Route::put('/lista_grupos/ActualizarAlumno/{id}', 'crud_alumno_controller@alumno_Actualizar')->name('ActualizarAlumno');

Route::get('/lista_alumnos/EliminaAlumno/{id}', 'crud_alumno_controller@alumno_Eliminar')->name('EliminaAlumno');

Route::get('/lista_grupos', 'crud_grupo_controller@grupo_index')->name('ListaGrupos');
Route::get('/lista_grupos/InsertaGrupo', 'crud_grupo_controller@grupo_CrearView')->name('InsertaGrupo');
Route::post('/lista_grupos/GuardaGrupo', 'crud_grupo_controller@grupo_guardar')->name('GuardaGrupo');

Route::get('/lista_grupos/EditaGrupo/{id}', 'crud_grupo_controller@grupo_EditarView')->name('EditaGrupo');
Route::put('/lista_grupos/ActualizarGrupo/{id}', 'crud_grupo_controller@grupo_Actualizar')->name('ActualizarGrupo');

Route::get('/lista_grupos/EliminaGrupo/{id}', 'crud_grupo_controller@grupo_Eliminar')->name('EliminaGrupo');

Route::get('/', function () {
    return view('welcome');
});
