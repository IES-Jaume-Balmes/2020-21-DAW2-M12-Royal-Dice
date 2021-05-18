<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
</head>
<body>
    @include('layouts/header')
    <div style="text-align: center" class="juego" id="juego">
        <h1 style="color: white">Slot Machine !</h1>
        <h3 style="color: white">Pulsa para jugar</h3>
        <img src="{{ asset('img/tragaperras/tragagif.gif') }}" alt="">
        <img src="{{ asset('img/tragaperras/tragagif.gif') }}" alt="">
        <img src="{{ asset('img/tragaperras/tragagif.gif') }}" alt="">
    </div>
</body>
<script src="{{ asset('js/tragaperras.js') }}"></script>
</html>