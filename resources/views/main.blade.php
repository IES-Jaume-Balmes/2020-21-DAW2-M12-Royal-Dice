<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Royal Dice</title>
    <link rel="stylesheet" href="{{ asset('css/paginaprincipal.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/icono.png') }}" />
</head>

<body>
    <!-- MENÚ -->
    <div class="altura">
        <img class="longlogo" src="{{ asset('img/longlogo.png') }}" alt="longlogo">
        <nav class="menu">
            <input id="menu__toggle" type="checkbox" class='menu__toggle' />
            <label for="menu__toggle" class="menu__toggle-label">
          <svg preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
            <path d='M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z' />
          </svg>
          <svg class="cerrar" preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
            <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
          </svg>
        </label>
            <ol class='menu__content'>
                <li class="menu-item"><a href="#0">Perfil</a></li>
                <li class="menu-item"><a href="#0">Consigue Monedas</a></li>
                <li class="menu-item">
                    <a href="#0">Juegos</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="#0">Ruleta</a></li>
                        <li class="menu-item"><a href="#0">BlackJack</a></li>
                        <li class="menu-item"><a href="#0">Dados</a></li>
                    </ol>
                </li>
                <li class="menu-item">
                    <a href="#0">Pruebas</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="#0">En Prueba1</a></li>
                        <li class="menu-item"><a href="#0">En prueba2</a></li>
                        <br>
                    </ol>
                </li>
                <li class="menu-item"><a href="{{ route('logout') }}">Cerrar Sesión</a></li>
            </ol>
        </nav>
    </div>
    <div class="info-perfil">

        <!--FOTO PERFIL // MONEDAS // USERNAME-->

    </div>
    <div class="juego" id="juego">

        <!-- JUEGO -->

    </div>




</body>
<script src="{{ asset('js/blackjack.js') }}"></script>

</html>