<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GudangBarangController;
use App\Models\GudangBarang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/', function () {
    return view('welcome');
});

route::get('gudang_barang', [GudangBarangController::class, 'index']);
