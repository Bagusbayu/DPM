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

//Route::get('/', function () {
//    return view('welcome');
//});
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

Route::resource('vaktivitasdpm','CAktivitas');
Route::get('/inputaktivitas','CAktivitas@create');

Route::resource('vphukum','Cphukum');
Route::get('/inputphukum','Cphukum@create');

Route::resource('vormawa','Cormawa');
Route::get('/inputormawa','Cormawa@create');

Route::resource('aspirasi_dpm','Caspirasi1');
Route::resource('vaspirasi','Caspirasi');

Route::resource('index','Cindex');

Route::resource('vm_poltekes','Cvmpoltekkes1');

Route::resource('vm_dm','Cvmdpm1');

Route::resource('struktur_dpm','Canggota1');
//Route::get('/', function () {
//    return view('index','Cindex');
//});

//Route::get('/vm_poltekkes', function () {
//    return view('vm_poltekes');
//});

//Route::get('/vm_dpm', function () {
//    return view('vm_dm');
//});


//Route::get('/struktur', function () {
//    return view('struktur_dpm');
//});

Route::get('/ukm', function () {
    return view('ukm');
});

Route::get('/produk_hukum', function () {
    return view('produk_hukum');
});

//Route::get('/aktivitas', function () {
//    return view('aktivitas_dpm');
//});

//Route::get('/aspirasi', function () {
//    return view('aspirasi_dpm');
//});

Route::get('/pemira', function () {
    return view('pemira_dpm');
});
Route::get('/advonews', function () {
    return view('advonews_dpm');
});