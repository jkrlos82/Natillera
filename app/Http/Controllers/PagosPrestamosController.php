<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Http\Services\PagoPrestamosService;
use App\Http\Requests\PagosprestamoRequest;

class PagosPrestamosController extends Controller
{
    public function show($id)
    {
        $prestamo = Prestamo::find($id);
        return view('prestamos.pagosprestamo', compact('prestamo'));
    }

    public function store(PagosprestamoRequest $request)
    {
        $prestamo = Prestamo::find($request->input('prestamo_id'));
        $pago = new PagoPrestamosService();
        $response = json_decode($pago->createPagoPrestamo($request));

        return view('prestamos.pagosprestamo', compact('response', 'prestamo'));
    }
}
