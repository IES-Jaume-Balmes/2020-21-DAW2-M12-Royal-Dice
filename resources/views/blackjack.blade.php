<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        #juego{
            text-align: center;
            margin-top: 70px;
            height: 430px;
        }
        #apuesta,button{
            background-color: #B19D60;
            height: 30px;
            margin-left: 10px;
            margin-top: 10px;
            border-radius: 12px;
            border: 1.5px solid rgba(0, 0, 0, 0.801);
        }
        #inicio:active {
            background-color: #B19D60;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #result{
            font-weight: bold;
            color: white;
        }
        #div1{
            text-align: center;
            margin-top: -30px;
            margin-left: 50px;
        }
        button{
            padding-left: 10px;
        }
        #suma_user,#suma_croupier{
            font-weight: bold;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/paginaprincipal.css') }}">
</head>
<body>
    @include('layouts/header')
    <div class="juego" id="juego">
        <!-- JUEGO -->
    </div>
    <div class="instrucciones accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="
            margin-top: 0px; margin-left: 0px;">

                        Instrucciones ❓

            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                 <p>El objetivo es simple: ganarle al Croupier obteniendo el puntaje más cercano a 21.</p> <p>Las figuras (el Valet, la Reina y el Rey) valen 10, el As vale 11 o 1 y todas las otras cartas conservan su valor.</p>
                  El Black Jack se produce cuando las dos (2) primeras cartas son un diez o cualquier figura más un As.
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/blackjack.js') }}"></script>
<script src="{{ asset('js/refresh.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>