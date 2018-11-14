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
    return view('homepage');
});

Route::get('/opleidingen', function () {
    return view('opleidingen');
});

Route::get('test-123', function () {
    return 'Test 123';
});

Route::get('/data', function(){
    $data = array('John', 'Maria', 'Henk');
    return $data;
});

Route::get('/artikel-op-nummer/nummer-{nummer}', 'ArticleController@showArticle')
    ->where('nummer', '\d+')
    ->name('artikel.opnummer')
;

Route::get('/artikel/{naam}{leeftijd}', function ($naam, $leeftijd) {
    return "ARTIKEL NAAM = " . $naam . " LEEFTIJD = " . $leeftijd;
})
    ->where('naam', '[a-zA-Z\-]+')
    ->where('leeftijd', '\d+')
    ->where('artikel.opnaam')
;

Route::get('/registratie', 'FormController@showForm')
    ->name('registratie.form');

Route::post('/registratie',	'FormController@handleForm')
    ->name('registration.form.handle');