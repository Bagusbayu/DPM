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

Route::get('/loginadmindpm', 'CAdminS@login');
Route::post('/loginPost', 'CAdminS@loginPost');
Route::get('/logout', 'CAdminS@logout');	


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
//Route::post('/inputanggota/fetch','Canggota@fetch')->name('inputanggota.fetch');

Route::resource('vaktivitasdpm','CAktivitas');
Route::get('/inputaktivitas','CAktivitas@create');

Route::resource('vphukum','Cphukum');
Route::get('/inputphukum','Cphukum@create');

Route::resource('vormawa','Cormawa');
Route::get('/inputormawa','Cormawa@create');

Route::resource('vadvonews','Cadvonews');
Route::get('/inputadvo','Cadvonews@create');

Route::resource('vpemira','Cpemira');
Route::get('/inputpemira','Cpemira@create');


Route::resource('aspirasi_dpm','Caspirasi1');
Route::resource('vaspirasi','Caspirasi');

Route::resource('','Cindex');
Route::resource('index','Cindex');
//Route::get('foot','Cindex@create');

Route::resource('vm_poltekes','Cvmpoltekkes1');
Route::get('/vcontact','Cvmpoltekkes1@create');
Route::post('/create/proses', 'Cvmpoltekkes1@store');
Route::get('/create/hapus/{id}', 'Cvmpoltekkes1@destroy');
Route::get('/visit','Cvmpoltekkes1@show');
Route::post('/show/proses', 'Cvmpoltekkes1@edit');
Route::get('/show/hapus/{id}', 'Cvmpoltekkes1@update');

Route::resource('vm_dm','Cvmdpm1');
Route::post('/upload/proses', 'Cvmdpm1@store');
Route::get('/photovmdpm','Cvmdpm1@upload');
Route::get('/upload/hapus/{id}', 'Cvmdpm1@destroy');

Route::resource('struktur_dpm','Canggota1');
Route::get('struktur_dpm_komisi_I','Canggota1@create');
Route::get('struktur_dpm_komisi_II','Canggota1@store');
Route::get('struktur_dpm_komisi_III','Canggota1@show');
Route::get('struktur_dpm_komisi_IV','Canggota1@edit');
Route::get('struktur_dpm_keperawatan','Canggota1@update');
Route::get('struktur_dpm_kebidanan','Canggota1@destroy');
Route::get('struktur_dpm_trr','Canggota1@destro');
Route::get('struktur_dpm_rnik','Canggota1@destr');
Route::get('struktur_dpm_keperawatan_gigi','Canggota1@dest');
Route::get('struktur_dpm_analis_kesehatan','Canggota1@des');
Route::get('struktur_dpm_gizi','Canggota1@de');
Route::get('struktur_dpm_kesehatan_lingkungan','Canggota1@d');

//Route::resource('ormawa','Cormawa1');
Route::resource('kbm','Cormawa1');

Route::resource('produk_hukum','Cphukum1');

Route::resource('advonews_dpm','Cadvonews1');

Route::resource('pemira_dpm','Cpemira1');

Route::resource('aktivitas_dpm','Caktivitas1');

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

//Route::get('/ukm', function () {
//    return view('ukm');
//});

//Route::get('/produk_hukum', function () {
//    return view('produk_hukum');
//});

//Route::get('/aktivitas', function () {
//    return view('aktivitas_dpm');
//});

//Route::get('/aspirasi', function () {
//    return view('aspirasi_dpm');
//});

//Route::get('/pemira', function () {
//    return view('pemira_dpm');
//});
//Route::get('/advonews', function () {
//    return view('advonews_dpm');
//});