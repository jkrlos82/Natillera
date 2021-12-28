<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prestamos</title>

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
                <h2 class="text-center mt-5">Prestamos</h2>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Socio</th>
                            <th scope="col">Responsable</th>
                            <th scope="col">Porcentaje</th>
                            <th scope="col">Valor Prestamo</th>
                            <th scope="col">Fecha Prestamo</th>
                            <th scope="col">Saldo</th>
                            <th scope="col">Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prestamos as $prestamo)
                        <tr>
                            <th scope="row">{{$prestamo->id}}</th>
                            <td>{{$prestamo->socio->nombre}}</td>
                            <td>{{$prestamo->responsable}}</td>
                            <td>{{$prestamo->porcentaje}}</td>
                            <td>${{$prestamo->valor_prestamo}}</td>
                            <td>${{$prestamo->fecha_inicio}}</td>
                            <td>${{$prestamo->saldo}}</td>
                            <td><a href="/prestamos/{{$prestamo->id}}">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>