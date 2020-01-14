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
    Route::get('/',  'HomeController@getWelcome');

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

    // Solo cuando estas identificado tiene que aparecer estas rutas
    Route::group(['middleware ' => 'auth'], function () {

        Route::GET('/crearPeticion', function(){
            // Comprobamos si el usuario esta logeado
            if(Auth::check()){
                return redirect()->route('login');
                
            } else {
                return view('myLogin');
            }
        });

        Route::GET('/tablaPeticiones', function(){
            // Comprobamos si el usuario esta logeado como ADMIN
            if(Auth::check()){
                return redirect()->route('login');
                
            } else {
                return view('myLogin');
            }
        });

        Route::get('/tablaPeticiones', 'PeticionController@getFormulario');
        Route::get('/tablaPeticiones', 'PeticionController@getTabla');

    });

?>