<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estados;
use App\Models\Municipios;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function estados()
    {
        $estados = Estados::query()
            ->orderBy('nombre', 'ASC')
            ->get();

        return response()->json($estados);
    }

    public function municipios_por_estado($id_estado)
    {
        $municipios = Municipios::query()
            ->where('id_estado', $id_estado)
            ->orderBy('nombre', 'ASC')
            ->get();

        return response()->json($municipios);
    }
}
