<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    // 1. Muestra el catálogo con todos los lugares turísticos
    public function index()
    {
        $lugares = Lugar::all(); // Le pide al modelo todos los datos del JSON
        return view('lugares.index', compact('lugares')); // Envía los datos a la vista "index"
    }

    // 2. Muestra el detalle específico de un solo lugar turístico
    public function show($id)
    {
        $lugar = Lugar::find($id); // Le pide al modelo buscar el lugar por su ID
        
        // Si el usuario inventa un ID que no existe en el JSON, muestra un error 404
        if (!$lugar) {
            abort(404, 'El lugar turístico no fue encontrado.');
        }
        
        return view('lugares.show', compact('lugar')); // Envía el destino a la vista "show"
    }
}
