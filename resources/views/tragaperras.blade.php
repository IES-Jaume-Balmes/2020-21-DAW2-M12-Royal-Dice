<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts/head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    <link rel="stylesheet" href="{{ asset('css/paginaprincipal.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
       h4 {
            text-align: center;
            font-weight: bold;
            color: white;
        }
    </style>
</head>

<body>
    @include('layouts/header')
    <div style="text-align: center" class="juego" id="juego">

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
                    <h4> 🎰 TRAGAPERRAS 🎰</h4>
                    <hr>
                    <p>
                        El funcionamiento de la <b>tragaperras</b> es simple, apuestas la cantidad que deseas apostar por giro, dependiendo de la <b>imagen</b> ganaras distintos multiplicadores. Los multiplicadores son <b>acumulativos</b>, es decir el
                        "slot" 1 se acumula con el 2 y el 3.
                    </p>
                    <br>
                    <h4>✖ MULTIPLICADORES ✖</h4>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/caquita.png') }}" alt=""> = X (6%) {Pierdes la apuesta}</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/limon.png') }}" alt=""> x0 (58%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/platano.png') }}" alt=""> x0.5 (16%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/naranja.png') }}" alt=""> x1 (9%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/sandia.png') }}" alt=""> x1.5 (7%)</p> 
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/siete.png') }}" alt=""> x3 (3%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/diamante.png') }}" alt=""> x10 (1%)</p>   
                </div>
            </div>
        </div>
</body>
<script src="{{ asset('js/tragaperras.js') }}"></script>
<script src="{{ asset('js/refresh.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>