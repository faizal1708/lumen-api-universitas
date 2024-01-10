<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //dosen
    $router->get('/dosen', 'dosenController@index');
    $router->get('/dosen/{id}', 'dosenController@show');
    $router->post('/dosen', 'dosenController@store');
    $router->put('/dosen/{id}', 'dosenController@update');
    $router->delete('/dosen/{id}', 'dosenController@destroy');
    //kelas
    $router->get('/kelas', 'kelasController@index');
    $router->get('/kelas/{id}', 'kelasController@show');
    $router->post('/kelas', 'kelasController@store');
    $router->put('/kelas/{id}', 'kelasController@update');
    $router->delete('/kelas/{id}', 'kelasController@destroy');
    //mahasiswa
    $router->get('/mahasiswa', 'mahasiswaController@index');
    $router->get('/mahasiswa/{id}', 'mahasiswaController@show');
    $router->post('/mahasiswa', 'mahasiswaController@store');
    $router->put('/mahasiswa/{id}', 'mahasiswaController@update');
    $router->delete('/mahasiswa/{id}', 'mahasiswaController@destroy');
    //matakuliah
    $router->get('/matakuliah', 'matakuliahController@index');
    $router->get('/matakuliah/{id}', 'matakuliahController@show');
    $router->post('/matakuliah', 'matakuliahController@store');
    $router->put('/matakuliah/{id}', 'matakuliahController@update');
    $router->delete('/matakuliah/{id}', 'matakuliahController@destroy');
    //pendaftaran
    $router->get('/pendaftaran', 'pendaftaranController@index');
    $router->get('/pendaftaran/{id}', 'pendaftaranController@show');
    $router->post('/pendaftaran', 'pendaftaranController@store');
    $router->put('/pendaftaran/{id}', 'pendaftaranController@update');
    $router->delete('/pendaftaran/{id}', 'pendaftaranController@destroy');


});