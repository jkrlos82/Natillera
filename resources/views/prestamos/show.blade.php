<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detalle Prestamos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    @include('layouts.navbar')
    @if( isset( $response ))
    @if (isset($response->error))
    <div class="alert alert-danger" role="alert">
        {{ $response->error }}
    </div>
    @else
    <div class="alert alert-success" role="success">
        Prestamos {{ $response->success}} creado !
    </div>
    @endif
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mt-5">Detalle Prestamos {{$prestamo->responsable}}</h2>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Socio</th>
                            <th scope="col"># prestamo</th>
                            <th scope="col">Pago Interes</th>
                            <th scope="col">Abono Capital</th>
                            <th scope="col">Fecha Pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prestamo->pagosPrestamos as $pago)
                        <tr>
                            <td>{{$prestamo->socio->nombre}}</td>
                            <td>{{$pago->id}}</td>
                            <td>{{$pago->pago_interes}}</td>
                            <td>{{$pago->abono_capital}}</td>
                            <td>{{$pago->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>