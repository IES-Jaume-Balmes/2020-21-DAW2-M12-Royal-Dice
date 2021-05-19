<!DOCTYPE html>
<html lang="es">

<head>
    @include('layouts/head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/paginaprincipal.css') }}">
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
                    <p>Caquita = X (3%) {Pierdes la apuesta}</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/limon.png') }}" alt=""> = 0 (58%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/platano.png') }}" alt=""> = 0.5 (16%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/naranja.png') }}" alt=""> = 1 (9%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/sandia.png') }}" alt=""> = 1.5 (7%)</p> 
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/siete.png') }}" alt=""> = 2 (5%)</p>
                    <p><img style="width: 50px" src="{{ asset('img/tragaperras/diamante.png') }}" alt=""> = 5 (2%)</p>   
                </div>
            </div>
        </div>
</body>
<script src="{{ asset('js/tragaperras.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>