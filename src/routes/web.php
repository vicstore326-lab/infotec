<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PonenteVistaController;

Route::get('/ponentes-vista',[PonenteVistaController::class,'index'])->
name('ponentes.vista');
