<?php

use App\Http\Controllers\stockControleur;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [stockControleur::class, 'product']);
Route::get('/stock', [stockControleur::class, 'stock_vendeur']);
Route::get('/stock_patissier', [stockControleur::class, 'stock_patissier']);
Route::get('/stock_patissier/view/{id}', [stockControleur::class, 'viewproduct'])->name('viewproduct');
Route::post('/stock_patissier/update/{id}', [stockControleur::class, 'updateproduct'])->name('updateproduct');
Route::get('/stock_patissier/delete/{id}', [stockControleur::class, 'deletedproduct'])->name('deletedproduct');

Route::get('/del/{$id}', [stockControleur::class, 'delstock']);
Route::get('/users', [stockControleur::class, 'profil']);
Route::get('/users/view/{id}', [UserController::class, 'viewuser'])->name('viewuser');
Route::post('/users/delete/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');
Route::post('/users/update/{id}', [UserController::class, 'updateuser'])->name('updateuser');
Route::post('/add_product', [stockControleur::class, 'addproduct'])->name('addproduct');
Route::get('/commande_client', [stockControleur::class, 'viewfiche'])->name('viewfiche');
Route::post('/commande', [stockControleur::class, 'addcommande'])->name('addcommande'); 