<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
        Socio {{ $response->success}} creado !
    </div>
    @endif
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mt-5">Natillera</h2>
                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Aporte</th>
                            <th scope="col">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socios as $socio)
                        <tr>
                            <th scope="row">{{$socio->id}}</th>
                            <td>{{$socio->nombre}}</td>
                            <td>{{$socio->celular}}</td>
                            <td>{{$socio->email}}</td>
                            <td>${{$socio->aporte}}</td>
                            <td><a href="/socios/{{$socio->id}}">Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>