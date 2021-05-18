<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
</head>
<body>
    @include('layouts/header')
    <div style="text-align: center" class="juego" id="juego">
        <h1 style="color: white">Slot Machine !</h1>
        <button>Pulsa para jugar</button><br>
        <img src="{{ asset('img/tragaperras/tragagif0.gif') }}" alt="">
        <img src="{{ asset('img/tragaperras/tragagif1.gif') }}" alt="">
        <img src="{{ asset('img/tragaperras/tragagif2.gif') }}" alt="">
        <p>El resultado es: </p>
    </div>
</body>
<script src="{{ asset('js/tragaperras.js') }}"></script>
</html>