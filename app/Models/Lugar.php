<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

class Lugar
{
    // Función para obtener todos los lugares del catálogo
    public static function all()
    {
        // Buscar el archivo JSON en la ruta storage/app/json/lugares.json
        $path = storage_path('app/json/lugares.json');
        
        // Si el archivo no existe por algún motivo, devuelve una lista vacía
        if (!File::exists($path)) {
            return [];
        }
        
        // Lee el archivo y lo transformamos en una lista de PHP
        return json_decode(File::get($path), true);
    }

    // Función para buscar un lugar turístico específico usando su ID
    public static function find($id)
    {
        $lugares = self::all();
        
        foreach ($lugares as $lugar) {
            if ($lugar['id'] == $id) {
                return $lugar;
            }
        }
        
        return null;
    }
}
