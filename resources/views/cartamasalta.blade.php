<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        #juego{
            text-align: center;
        }
        #apuesta,button{
            background-color: #B19D60;
            /* height: 30px;
            margin-left: 10px;
            margin-top: 10px; */
            border-radius: 12px;
            border: 1.5px solid rgba(0, 0, 0, 0.801);
        }
        button:active {
            background-color: #B19D60;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
        #result{
            font-weight: bold;
            color: white;
        }
        ::placeholder {
            color: black;
            opacity: 1;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/paginaprincipal') }}">
</head>
<body>
    @include('layouts/header')
    
    <div class="juego" id="juego"> 
        <h1 style="color: white">Carta Más Alta </h1>   
    </div>
    <div class="instrucciones accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Instrucciones ❓
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                El crupier lanza una carta de la parte superior de la baraja. El jugador debe adivinar si la siguiente carta que se voltea va a ser más alta o más baja. Adivina correctamente y dobla tu apuesta.
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/carta_mas_alta.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>