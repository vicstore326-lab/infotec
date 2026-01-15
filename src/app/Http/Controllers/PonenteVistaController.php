<?php

namespace App\Http\Controllers;

use App\Models\Ponente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required',
            'biografia' => 'nullable',
            'especialidad' => 'nullable',
        ]);
        if ($validator->fails()) {
            return redirect()->route('ponentes.vista')->with('error', 'Faltan datos obligatorios');
        }
    Ponente::create($request->all());
    return redirect()->route('ponentes.vista')->with('success', 'Ponente agregado correctamente');
}

public function destroy($id){
        $ponente=Ponente::find($id);
        if($ponente){
            $ponente->delete();
            return redirect()->route('ponentes.vista')->with('success','Ponente eliminado correctamente');
        }
            return redirect()->route('ponentes.vista')->with('error','Ponente no encontrado');
        }
    }