<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prueba;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Psr7\Message;
use Symfony\Component\HttpFoundation\Response;

class PruebaController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de la colección (sin modelo)
        $registros = DB::connection('mongodb')->collection('Mangas')->get();

        // Devolver los registros en formato JSON
        return response()->json($registros);
    }

    public function sensores()
    {
        // Obtener todos los registros de la colección, pero solo los datos de 'sensores'
        $sensores = DB::connection('mongodb')
            ->collection('Mangas')
            ->pluck('sensores'); // pluck extrae solo el campo especificado

        // Retornar los datos de los sensores en formato JSON
        return response()->json($sensores);
    }

    

}


