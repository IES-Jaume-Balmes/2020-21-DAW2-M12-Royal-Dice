<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
</head>
<body>
    @include('layouts/header')
    <div class="juego">
        <div class="row" style="color: white">
            <div class="col-4">
                <h4>Historial Blackjack</h4>
            {{-- Aquí van los datos de la DDBB --}}
            <ul>
            @foreach ($registros[0] as $blackjack)
            <li><span> Apuesta: {{ $blackjack->apuesta }}  </span> <span> Resultado: {{ $blackjack->beneficioperdida }}  </span> </li>
            @endforeach
            </ul>
            </div>
            <div class="col-4">
                <h4>Historial Carta Más Alta</h4>
            {{-- Aquí van los datos de la DDBB --}}
            <ul>
                @foreach ($registros[1] as $cartamasalta)
                <li><span> Apuesta: {{ $cartamasalta->apuesta }}  </span> <span> Resultado: {{ $cartamasalta->beneficioperdida }}  </span> </li>
                @endforeach
                </ul>
            </div>
            <div class="col-4">
                <h4>Historial Tragaperras</h4>
            {{-- Aquí van los datos de la DDBB --}}
            <ul>
                @foreach ($registros[2] as $tragaperras)
                <li><span> Apuesta: {{ $tragaperras->apuesta }}  </span> <span> Resultado: {{ $tragaperras->beneficioperdida }}  </span> </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
</html>