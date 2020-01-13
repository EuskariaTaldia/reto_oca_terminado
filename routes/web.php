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
    Auth::routes();

    // Ruta del inicio
    Route::get('/', function () {
        return view('welcome');        
    });

    // Ruta de la pagina inicial
    Route::get('/home', 'HomeController@getIndex');

    Route::post('/myLogin', function () {
        return view('myLogin');
    });

    // Rutas para imprimir cartas
    Route::get('/imprimirGaleria', 'ImprimirController@getGaleria');
    Route::get('/imprimirInformacion/{codMujer}', 'ImprimirController@getInformacion');
    Route::get('/imprimirPreguntas', 'ImprimirController@getPreguntas');
    Route::post('/imprimirTablero', 'ImprimirController@getTablero');


    // Rutas de las peticiones
    Route::get('/crearPeticion', 'PeticionController@getFormulario');
    Route::get('/tablaPeticiones', 'PeticionController@getTabla');





?>