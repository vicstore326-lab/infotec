<?php

namespace App\Http\Controllers;

use App\Models\Ponente;
use Illuminate\Http\Request;


class PonenteVistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ponentes = Ponente::all();
        return view('ponentes.vista', compact('ponentes'));
    }
}