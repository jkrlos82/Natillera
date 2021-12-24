<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Socio;
use App\Models\Polla;

class SociosService
{

    public function createSocio(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $socio = Socio::create([
                    'nombre' => $request->get('nombre'),
                    'cedula' => $request->get('cedula'),
                    'direccion' => $request->get('direccion'),
                    'celular' => $request->get('celular'),
                    'email' => $request->get('email'),
                    'aporte' => $request->get('aporte')
                ]);

                Polla::create([
                    'socio_id' => $socio->id,
                    'numero' => $request->get('numero')
                ]);
            });

            return json_encode(["succed" => $request->get('nombre')], 200);
        } catch (\Exception $e) {
            return json_encode(["error" => $e->getMessage()], 400);
        }
    }
}
