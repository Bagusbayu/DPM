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
    return view('welcome');
});
//Route::get('/loginadmins', 'CAdminSuper@index');
//Route::post('/loginPost', 'CAdminSuper@loginPost');
//Route::get('/logout', 'CAdminSuper@logout');

Route::get('/loginadmindpm', 'CAdminDPM@login');
Route::post('/loginPost', 'CAdminDPM@loginPost');
Route::get('/logout', 'CAdminDPM@logout');	


Route::resource('vadminsuper','CAdminS');
Route::get('/inputadminsuper','CAdminS@create');

Route::resource('vadmindpm','CAdminDPM');
Route::get('/inputadmindpm','CAdminDPM@create');

Route::resource('visimisipoltekkes','Cvmpoltekkes');
Route::get('/inputvmpoltekkes','Cvmpoltekkes@create');

Route::resource('vmdpm','Cvmdpm');
Route::get('/inputvmdpm','Cvmdpm@create');

Route::resource('vanggota','Canggota');
Route::get('/inputanggota','Canggota@create');