<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paises = Pais::select('pais')->distinct()->get();
        
        $data = [
            'status' => 200,
            'data' => $paises
        ];

        return response()->json($data, 200);
    }


    public function findCiudad(string $pais)
    {
        $ciudades = Pais::where('pais', $pais)->select('ciudad')->get();
        
        $data = [
            'status' => 200,
            'data' => $ciudades
        ];

        return response()->json($data, 200);
        
    }

    public function findCurrency(string $pais)
    {
        $moneda = Pais::where('pais', $pais)->select('moneda')->first();
        
        $data = [
            'status' => 200,
            'data' => $moneda
        ];

        return response()->json($data, 200);
        
    }

}
