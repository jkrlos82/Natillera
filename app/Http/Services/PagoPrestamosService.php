<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Prestamo;
use App\Models\PagosPrestamo;



class PagoPrestamosService
{

    public function createPagoPrestamo(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $prestamo = Prestamo::find($request->input('prestamo_id'));
                if ($request->input('abono_capital') != null) {
                    $prestamo->saldo = $prestamo->saldo - $request->input('abono_capital');
                    $prestamo->save();
                }

                $pago = PagosPrestamo::create([
                    'prestamo_id' => $request->input('prestamo_id'),
                    'pago_interes' => $request->input('pago_interes') != null ? $request->input('pago_interes') : 0,
                    'abono_capital' => $request->input('abono_capital') != null ? $request->input('abono_capital') : 0,
                ]);
            });



            return json_encode(["success" => "Abono Creado"], 200);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return json_encode(["error" => $e->getMessage()], 400);
        }
    }
}
