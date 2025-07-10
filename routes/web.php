<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/barang',
    [ App\Http\Controllers\BarangController::class, 'list' ]
    );

Route::get(
        '/sewa',
        [ App\Http\Controllers\SewaController::class, 'list' ]
        );

Route::get(
    '/barang/{id}',
    [ App\Http\Controllers\SewaController::class, 'list_barang' ]
    );

Route::get(
    '/sewa/{id}',
    [ App\Http\Controllers\SewaController::class, 'detail' ]
    );
