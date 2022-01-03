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
    <div class="container mt-5">
        <h3 class="text-center">Nuevo Prestamo</h3>
        <div class="card">
            <div class="card-body d-flex justify-content-center">

                <form id="formprestamos" method="post" action="/prestamos/new">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <span class="form-label mt-5">Socio</span>
                                <select name="idsocio">
                                    @foreach($socios as $socio)
                                    <option value="{{$socio->id}}">{{$socio->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            @error('idsocio')
                            <p><strong>{{$message}}</strong></p>
                            @enderror
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <span class="form-label mt-5">Responsable</span>
                                <input class="form-control" type="text" id="responsable" name="responsable" placeholder="Responsable">
                            </div>
                            <br>
                            @error('responsable')
                            <p><strong>{{$message}}</strong></p>
                            @enderror
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <span class="form-label mt-5">Tarifa prestamo</span>
                                <select name="tarifa">
                                    <option value="5">5%</option>
                                    <option value="8">8%</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <span class="form-label mt-5">Valor Prestamo</span>
                                <input class="form-control" type="valor" id="valor" name="valor" placeholder="$0">
                            </div>
                            <br>
                            @error('valor')
                            <p><strong>{{$message}}</strong></p>
                            @enderror
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-grid mt-5">
                            <button class="btn btn-primary btn-sm" id="submitButton" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
</body>

</html>