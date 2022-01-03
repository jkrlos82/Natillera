<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Socio;
use App\Http\Services\PrestamosService;
use App\Http\Requests\PrestamosRequest;


class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestamos = Prestamo::all();
        return view('prestamos.list', compact('prestamos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socios = Socio::all();
        return view('prestamos.create', compact('socios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PrestamosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrestamosRequest $request)
    {
        //
        $prestamo = new PrestamosService;
        $response = json_decode($prestamo->createPrestamo($request));
        $prestamos = Prestamo::all();
        return view('prestamos.list', compact('prestamos', 'response'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo = Prestamo::find($id);
        return view('prestamos.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
