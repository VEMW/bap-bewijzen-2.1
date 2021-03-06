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
;

Route::get('/registratie', 'FormController@showForm')
    ->name('registratie.form');

Route::post('/registratie',	'FormController@handleForm')
    ->name('registration.form.handle');

Route::get('/bring-me-the-horizon', function () {
    return view('bringme');
});

//Functie om naar homepagina te gaan

Route::get('/homepage', 'FormController@homepage');

Route::get('/photo-gallery', 'PhotoGalleryController@listPhotos')->name('gallery.index');
Route::get('/photo-gallery/add-photo', 'PhotoGalleryController@showPhotoForm')->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo', 'PhotoGalleryController@savePhotoForm')->name('gallery.save_photo');

