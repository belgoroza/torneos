<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

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

Route::get('/', function () {return view('welcome');});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function ()
{
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    Route::namespace("App\\Http\\Controllers\\Torneos")->group(function ()
    {

        // Desde navigation.blade.php
        Route::get('my-torneo/{id}/{codigo}', 'TorneosController@torneoIndex');
        Route::get('my-organizacion/{id}/{codigo}', 'OrganizacionesController@organizacionIndex');
        Route::get('my-equipo/{id}/{codigo}', 'EquiposController@equipoIndex');

        // PERSONAS
        Route::get('/personas', 'PersonasController@index')->name('index-persona');
        Route::get('/search-persona', 'PersonasController@searchPersona')->name('search-persona');
        Route::get('agregar-persona', function () {return view('xhimigo.personas.agregar-persona');})->name('add-persona');
        Route::match(['get','post'],'add-edit-persona','PersonasController@addEditPersona')->name('add-edit-persona');

        // TORNEOS
        route::get('torneo-modal','TorneosController@torneoModal')->name('torneo-modal');
        Route::match(['get','post'],'torneo-add-edit/{id?}','TorneosController@torneoAddEdit')->name('torneo-add-edit');
        route::get('torneo-detalle/{id}','TorneosController@torneoDetalle')->name('torneo-detalle');

        Route::get('torneo-buscar', 'TorneosController@misTorneos')->name('torneo-buscar');
        Route::get('torneos-activos', function () {return view('xhimigo.torneos.torneos-activos');})->name('torneos-activos');

        // Route::get('torneo', function () {return view('xhimigo.torneos.index');})->name('index-torneo');
        // route::get('torneo-modal','TorneosController@torneosModal')->name('torneo-modal');
        // Route::match(['get','post'],'torneo-add-edit/{id?}','TorneosController@torneoAddEdit')->name('torneo-add-edit');
        // route::get('torneo-modal-listado-equipo','TorneosController@torneoModalListadoEquipo')->name('torneo-modal-listado-equipo');

        // Route::get('torneos-activos', function () {return view('xhimigo.torneos.torneos-activos');})->name('torneos-activos');
        // Route::get('mis-torneos', 'TorneosController@misTorneos')->name('mis-torneos');



        // Route::get('agregar-torneo', function () {return view('xhimigo.torneos.agregar-torneo');})->name('add-torneo');
        // Route::get('/search-torneo', 'TorneosController@searchTorneo')->name('search-torneo');
        //
        // Route::get('mis-torneos', 'TorneosController@misTorneos')->name('mis-torneos');
        // Route::get('mis-torneos-detalle', 'TorneosController@misTorneosDetalle')->name('mis-torneos-detalle');
        // Route::get('mi-torneo-detalle', 'TorneosController@miTorneoDetalle')->name('mi-torneo-detalle');

        // ORGANIZACIONES
        route::get('organizacion-modal','OrganizacionesController@organizacionModal')->name('organizacion-modal');
        Route::match(['get','post'],'organizacion-add-edit/{id?}','OrganizacionesController@organizacionAddEdit')->name('organizacion-add-edit');
        route::get('organizacion-detalle/{id}','OrganizacionesController@OrganizacionDetalle')->name('organizacion-detalle');

        // EQUIPOS
        Route::get('equipo-modal','EquiposController@equipoModal')->name('equipo-modal');
        Route::get('equipo-lista-modal','EquiposController@equipoListaModal')->name('equipo-lista-modal');
        Route::get('equipo-torneo-lista-modal','EquiposController@equipoTorneoListaModal')->name('equipo-torneo-lista-modal');
        Route::match(['get','post'],'equipo-add-edit/{id?}','EquiposController@equipoAddEdit')->name('equipo-add-edit');
        route::get('equipo-detalle/{id}','EquiposController@equipoDetalle')->name('equipo-detalle');
        Route::get('/equipo-buscar-modal/{id}', 'EquiposController@equipoBuscarModal')->name('equipo-buscar-modal');
        Route::get('/equipo-buscar-ajax/{id}', 'EquiposController@equipoBuscarAjax')->name('equipo-buscar-ajax');
        Route::get('equipo-agregar-torneo-ajax', 'EquiposController@equipoAgregarTorneoAjax')->name('equipo-agregar-torneo-ajax');

        Route::get('partidos', 'EquiposController@partidos')->name('partidos');
        Route::get('posiciones', 'EquiposController@posiciones')->name('posiciones');




    });

    Route::namespace("App\\Http\\Controllers")->group(function ()
    {
        // Route::get('/', 'AgendaController@agenda')->name('agenda');
        Route::get('/{ruta}/{page}', 'AgendaController@agenda')->name('agenda');
        Route::get('/{ruta}/{page}/{id}', 'AgendaController@editarAgenda')->name('editar-agenda');
        Route::get('/ver', 'AgendaController@verAgenda')->name('ver-agenda');
        Route::get('/modificar', 'AgendaController@addEditAgenda')->name('add-edit-agenda');
        Route::get('/buscar', 'AgendaController@buscarAgenda')->name('buscar-agenda');
        Route::get('/cerrar', 'AgendaController@cerrarAgenda')->name('cerrar-agenda');
    });

});



// Route::get('torneo-nuevo', function () {return view('xhimigo.torneos.torneo-nuevo');})->name('torneo-nuevo');
// Route::match(['get','post'],'torneo-add-edit/{id?}','TorneosController@torneoAddEdit')->name('torneo-nuevo');