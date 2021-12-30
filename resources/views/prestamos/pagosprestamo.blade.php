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
        <h2 class="text-center mt-5">Abonos Prestamo ${{$prestamo->valor_prestamo}}</h2>
        <div class="card">
            <div class="card-body justify-content-center">
                <form method="post" action="/prestamos/abono/">
                    @csrf
                    <div class="form-group row mb-2">
                        <label for="total_prestamo" class="col-sm-2 col-form-label">Total Prestamo:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="total_prestamo" name="total_prestamo" disabled value="{{$prestamo->responsable}}">
                            <input type="text" class="form-control" id="prestamo_id" name="prestamo_id" hidden value="{{$prestamo->id}}">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="saldo_prestamo" class="col-sm-2 col-form-label">Saldo Prestamo:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="saldo_prestamo" disabled value="${{$prestamo->saldo}}">
                        </div>
                    </div>
                    <div class=" form-group row mb-2">
                        <label for="fecha_abono" class="col-sm-2 col-form-label">Fecha Abono:</label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="fecha_abono" name="fecha_abono">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="valor_abono" class="col-sm-2 col-form-label">Abono Capital:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="abono_capital" name="abono_capital" placeholder="$0">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="interes" class="col-sm-2 col-form-label">Pago Interes:</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="interes" name="interes" placeholder="$0">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Abonar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>