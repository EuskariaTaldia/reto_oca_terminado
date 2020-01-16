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
    Route::get('/home', 'HomeController@getIndex')->name('home');

    // Rutas para logearte
    Route::get('/login', 'Auth\LoginController@loginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

    // Rutas para el registro
    Route::get('/register', 'Auth\LoginController@loginForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@create');


    // Rutas para imprimir cartas
    Route::get('/imprimirGaleria', 'ImprimirController@getGaleria');
    Route::get('/imprimirInformacion/{codMujer}', 'ImprimirController@getInformacion');
    Route::get('/imprimirPreguntas', 'ImprimirController@getPreguntas');
    Route::post('/imprimirTablero', 'ImprimirController@getTablero');


    // SOLAMENTE PARA LAS PRUEBAS
    Route::get('/crearPeticion', 'PeticionController@getFormulario')->name('crearPeticion');
    Route::post('/crearPeticion', 'PeticionController@guardar');

    Route::get('/tablaPeticiones', 'PeticionController@getTabla');


    // Solo cuando estas identificado tiene que aparecer estas rutas
    Route::group(['middleware ' => 'auth'], function () {   

        // Route::GET('/crearPeticion', function(){
        //     // Comprobamos si el usuario esta logeado
        //     if(Auth::check()){
        //         return redirect()->to('login');
        //         // return redirect()->action('PeticionController@getFormulario');
        //         // Route::get('/crearPeticion', 'PeticionController@getFormulario');

        //     } else {
        //         return view('myLogin');
        //     }
        // });

        // Route::GET('/tablaPeticiones', function(){
        //     // Comprobamos si el usuario esta logeado como ADMIN
        //     if(Auth::check()){
        //         return redirect()->route('login');
                
        //     } else {
        //         return view('myLogin');
        //     }
        // });


    });

?>
