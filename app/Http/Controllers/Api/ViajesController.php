<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Viajes;
use Validator;

class ViajesController extends Controller
{
    public function index() {
        $viajes = Viajes::orderBy('id', 'desc')->limit(5)->get();;
        
        $data = [
            'status' => 200,
            'data' => $viajes
        ];

        return response()->json($data, 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'pais' => 'required',
            'ciudad' => 'required',
            'presupuesto' => 'required|integer',
            'fecha' => 'required',
        ]);
        
        if($validator->fails()) {
            $data = [
                'message' => 'error de validaciones',
                'error' => $validator->errors(),
                'status' => 400
            ];

            return response()->json($data, 400);
        }

        $viaje = Viajes::create([
            'pais' => $request->pais,
            'ciudad' => $request->ciudad,
            'presupuesto' => $request->presupuesto,
            'fecha' => $request->fecha,
        ]);

        if(!$viaje) {
            $data = [
                'status' => 500,
                'message' => 'error al crear el viaje'
            ];

            return response()->json($data, 500);
        }

        $data = [
            'status' => 201,
            'data' => $viaje
        ];
        return response()->json($data, 201);
    }
}

