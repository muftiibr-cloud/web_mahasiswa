<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

// =============================================
// Route Utama
// =============================================
Route::get('/', function () {
    return view('welcome');
});



// =============================================
// Route Mahasiswa - MODUL 8 (DB Facade Raw SQL)
// =============================================
Route::get('/insert-sql',      [MahasiswaController::class, 'insertSql']);
Route::get('/insert-prepared', [MahasiswaController::class, 'insertPrepared']);
Route::get('/insert-binding',  [MahasiswaController::class, 'insertBinding']);
Route::get('/update',          [MahasiswaController::class, 'update']);
Route::get('/delete',          [MahasiswaController::class, 'delete']);
Route::get('/select',          [MahasiswaController::class, 'select']);
Route::get('/select-tampil',   [MahasiswaController::class, 'selectTampil']);
Route::get('/select-view',     [MahasiswaController::class, 'selectView']);
Route::get('/select-where',    [MahasiswaController::class, 'selectWhere']);
Route::get('/statement',       [MahasiswaController::class, 'statement']);

// =============================================
// Route Mahasiswa - MODUL 10 (Eloquent ORM)
// =============================================
Route::get('/cek-objek',      [MahasiswaController::class, 'cekObjek']);
Route::get('/insert',         [MahasiswaController::class, 'insert']);
Route::get('/mass-assignment',[MahasiswaController::class, 'massAssignment']);
Route::get('/update-eloquent',[MahasiswaController::class, 'updateEloquent']);
Route::get('/update-where',   [MahasiswaController::class, 'updateWhere']);
Route::get('/mass-update',    [MahasiswaController::class, 'massUpdate']);
Route::get('/delete-eloquent',[MahasiswaController::class, 'deleteEloquent']);
Route::get('/destroy',        [MahasiswaController::class, 'destroy']);
Route::get('/mass-delete',    [MahasiswaController::class, 'massDelete']);
Route::get('/all',            [MahasiswaController::class, 'all']);
Route::get('/all-view',       [MahasiswaController::class, 'allView']);
Route::get('/get-where',      [MahasiswaController::class, 'getWhere']);
Route::get('/test-where',     [MahasiswaController::class, 'testWhere']);
Route::get('/first',          [MahasiswaController::class, 'first']);
Route::get('/find',           [MahasiswaController::class, 'find']);
Route::get('/latest',         [MahasiswaController::class, 'latest']);
Route::get('/limit',          [MahasiswaController::class, 'limit']);
Route::get('/skip-take',      [MahasiswaController::class, 'skipTake']);
Route::get('/soft-delete',    [MahasiswaController::class, 'softDelete']);
Route::get('/with-trashed',   [MahasiswaController::class, 'withTrashed']);
Route::get('/restore',        [MahasiswaController::class, 'restore']);
Route::get('/force-delete',   [MahasiswaController::class, 'forceDelete']);

// =============================================
// Route Dosen - MODUL 9 (Query Builder)
// =============================================
Route::get('/dosen',               [DosenController::class, 'index']);
Route::get('/insert-dosen',        [DosenController::class, 'insertDosen']);
Route::get('/insert-banyak-dosen', [DosenController::class, 'insertBanyakDosen']);
Route::get('/update-dosen',        [DosenController::class, 'updateDosen']);
Route::get('/update-where-dosen',  [DosenController::class, 'updateWhereDosen']);
Route::get('/update-or-insert',    [DosenController::class, 'updateOrInsert']);
Route::get('/delete-dosen',        [DosenController::class, 'deleteDosen']);
Route::get('/get',                 [DosenController::class, 'get']);
Route::get('/get-tampil',          [DosenController::class, 'getTampil']);
Route::get('/get-view',            [DosenController::class, 'getView']);
Route::get('/get-where',           [DosenController::class, 'getWhere']);
Route::get('/select-dosen',        [DosenController::class, 'selectDosen']);
Route::get('/take',                [DosenController::class, 'take']);
Route::get('/first-dosen',         [DosenController::class, 'first']);
Route::get('/find-dosen',          [DosenController::class, 'find']);
Route::get('/raw',                 [DosenController::class, 'raw']);

Route::get('/prodi', function () {
    return view('akademik/prodi');
});

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
