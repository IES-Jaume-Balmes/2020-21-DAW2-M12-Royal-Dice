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
          <svg class="menusvg" preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
            <path d='M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z' />
          </svg>
          <svg class="menusvg" class="cerrar" preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
            <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
          </svg>
        </label>
            <ol class='menu__content'>
                <li class="menu-item"><a href="{{ route('perfil') }}">Perfil</a></li>
                <li class="menu-item"><a href="{{ route('cajero') }}">Consigue Monedas</a></li>
                <li class="menu-item">
                    <a href="#0">Juegos</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="{{ route('cartamasalta') }}">Carta Más Alta</a></li>
                        <li class="menu-item"><a href="{{ route('blackjack') }}">BlackJack</a></li>
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
    <div class="info-perfil"><!--FOTO PERFIL // MONEDAS // USERNAME-->

            <a href="{{ route('perfil') }}"><svg class="perfil" enable-background="new 0 0 48 48" height="48px" id="Layer_1" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path clip-rule="evenodd" d="M24,45C12.402,45,3,35.598,3,24S12.402,3,24,3s21,9.402,21,21S35.598,45,24,45z   M35.633,39c-0.157-0.231-0.355-0.518-0.514-0.742c-0.277-0.394-0.554-0.788-0.802-1.178C34.305,37.062,32.935,35.224,28,35  c-1.717,0-2.965-1.288-2.968-3.066L25,31c0-0.135-0.016,0.148,0,0v-1l1-1c0.731-0.339,1.66-0.909,2.395-1.464l0.135-0.093  C29.111,27.074,29.923,26.297,30,26l0.036-0.381C30.409,23.696,31,20.198,31,19c0-4.71-2.29-7-7-7c-4.775,0-7,2.224-7,7  c0,1.23,0.591,4.711,0.963,6.616l0.035,0.352c0.063,0.313,0.799,1.054,1.449,1.462l0.098,0.062C20.333,28.043,21.275,28.657,22,29  l1,1v1c0.014,0.138,0-0.146,0,0l-0.033,0.934c0,1.775-1.246,3.064-2.883,3.064c-0.001,0-0.002,0-0.003,0  c-4.956,0.201-6.393,2.077-6.395,2.077c-0.252,0.396-0.528,0.789-0.807,1.184c-0.157,0.224-0.355,0.51-0.513,0.741  c3.217,2.498,7.245,4,11.633,4S32.416,41.498,35.633,39z M24,5C13.507,5,5,13.507,5,24c0,5.386,2.25,10.237,5.85,13.694  C11.232,37.129,11.64,36.565,12,36c0,0,1.67-2.743,8-3c0.645,0,0.967-0.422,0.967-1.066h0.001C20.967,31.413,20.967,31,20.967,31  c0-0.13-0.021-0.247-0.027-0.373c-0.724-0.342-1.564-0.814-2.539-1.494c0,0-2.4-1.476-2.4-3.133c0,0-1-5.116-1-7  c0-4.644,1.986-9,9-9c6.92,0,9,4.356,9,9c0,1.838-1,7-1,7c0,1.611-2.4,3.133-2.4,3.133c-0.955,0.721-1.801,1.202-2.543,1.546  c-0.005,0.109-0.023,0.209-0.023,0.321c0,0-0.001,0.413-0.001,0.934h0.001C27.033,32.578,27.355,33,28,33c6.424,0.288,8,3,8,3  c0.36,0.565,0.767,1.129,1.149,1.694C40.749,34.237,43,29.386,43,24C43,13.507,34.493,5,24,5z" fill-rule="evenodd"/></svg></a>

            <a href="{{ route('perfil') }}"><div style="text-transform: uppercase" class="contenedor">{{ Auth::user()->name }}</div></a>
            <a href="{{ route('perfil') }}"><div href="{{ route('perfil') }}" class="monedas">{{ Auth::user()->fichas }} FICHAS</div></a>
            <a href="{{ asset('logout') }}"><img class="exit" src="{{ asset('img/exit.png') }}" alt="Cerrar Sesión"></a>

    </div>
    <div class="juego" id="juego">
    </div>

</body>
<script src="{{ asset('js/tragaperras.js') }}"></script>

</html>