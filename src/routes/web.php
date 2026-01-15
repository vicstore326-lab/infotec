<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PonenteVistaController;

Route::get('/ponentes-vista',[PonenteVistaController::class,'index'])->
name('ponentes.vista');
Route::post('/ponentes-vista',[PonenteVistaController::class,'store'])->name('ponentes.store');
Route::delete('/ponentes-vista/{id}', [PonenteVistaController::class,
'destroy'])->name('ponentes.destroy');

