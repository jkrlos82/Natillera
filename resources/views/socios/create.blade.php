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
        <h3 class="text-center">Nuevo Socio</h3>
        <div class="card">
            <div class="card-body d-flex justify-content-center">
                @include('socios.form')
            </div>
        </div>
    </div>
</body>

</html>