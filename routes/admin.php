<?php


use App\Http\Controllers\Admin\FamilyController;
use App\Http\Controllers\Admin\CivilianController;
use App\Http\Controllers\Admin\RTController;
use App\Http\Controllers\Admin\BirthPlaceController;
use App\Http\Controllers\Admin\ProfessionController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function() {
    Route::resource('keluarga', FamilyController::class);
    Route::resource('rt', RTController::class);
    Route::resource('warga', CivilianController::class);
    Route::get('keluarga/import-data-warga', [FamilyController::class, 'import'])->name('keluarga.import');
    Route::get('civilian-search', [CivilianController::class, 'searchCivilian']);
    Route::get('birthplace-search', [BirthPlaceController::class, 'search']);
    Route::get('profession-search', [ProfessionController::class, 'search']);
    Route::post('keluarga/file-import', [FamilyController::class, 'fileImport'])->name('file-import');
});


Route::get('/', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
