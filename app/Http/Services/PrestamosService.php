<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Prestamo;


class PrestamosService
{

    public function createPrestamo(Request $request)
    {
        try {
            $date = new \DateTime();
            $socio = Prestamo::create([
                'socio_id' => $request->get('idsocio'),
                'responsable' => $request->get('responsable'),
                'porcentaje' => $request->get('tarifa'),
                'valor_prestamo' => $request->get('valor'),
                'saldo' => $request->get('valor'),
                'fecha_inicio' => $date->format('Y-m-d H:i:s'),
                'fecha_final' => $date->format('Y-m-d H:i:s')
            ]);


            return json_encode(["success" => $request->get('responsable')], 200);
        } catch (\Exception $e) {
            return json_encode(["error" => $e->getMessage()], 400);
        }
    }
}
