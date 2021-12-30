<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Http\Services\PagoPrestamosService;

class PagosPrestamosController extends Controller
{
    public function show($id)
    {
        $prestamo = Prestamo::find($id);
        return view('prestamos.pagosprestamo', compact('prestamo'));
    }

    public function store(Request $request)
    {
        $prestamo = Prestamo::find($request->input('prestamo_id'));
        $pago = new PagoPrestamosService();
        $response = $pago->createPagoPrestamo($request);


        return view('prestamos.pagosprestamo', compact('response', 'prestamo'));
    }
}
