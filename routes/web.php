<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/me', function () {
    return ['NIS' => '3103118086',
            'Nama' => 'Marvino Russel Athallah',
            'Gender' => 'Laki-Laki',
            'Phone' => '081226045510',
            'Class' => 'XII RPL 3'];
});

Route::get('auth', 'AuthContoller@me');