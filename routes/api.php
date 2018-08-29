<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dps/kelurahan/{kode_kecamatan}','DpsController@kelurahan');
Route::get('dps/kelurahan/detail/{kode_kelurahan}','DpsController@detailKelurahan');
Route::get('dps/kecamatan/detail/{kode_kecamatan}','DpsController@detailKecamatan');
Route::get('dps/administration/{kode_kelurahan}','DpsController@adminRole');
Route::get('dps/mutasi-kelurahan/dpshp/{kode_kelurahan}','DpsController@mutasiKelurahanDpshp');
Route::get('dps/mutasi-kelurahan/dpshpa/{kode_kelurahan}','DpsController@mutasiKelurahanDpshpa');
Route::get('dps/mutasi-kecamatan/dpshp/{kode_kecamatan}','DpsController@mutasiKecamatanDpshp');
Route::get('dps/mutasi-kecamatan/dpshpa/{kode_kecamatan}','DpsController@mutasiKecamatanDpshpa');
Route::get('dps/by-name/{kode_kelurahan}/{tps}','DpsController@byNameDps');
Route::get('dps/view-tps1/{kode_kelurahan}','DpsController@viewTps1');
Route::get('dps/view-tps2/{kode_kelurahan}','DpsController@viewTps2');
Route::get('dps/view-tps3/{kode_kelurahan}','DpsController@viewTps3');
Route::get('dps/by-name/bintang/{kode_kelurahan}/{tps}','DpsController@byNameDpsBintang');
Route::get('dps/by-name/non-bintang/{kode_kelurahan}/{tps}','DpsController@byNameDpsNonBintang');