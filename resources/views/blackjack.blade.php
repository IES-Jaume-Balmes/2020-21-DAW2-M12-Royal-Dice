<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
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
</head>
<body>
    @include('layouts/header')
    <div class="juego" id="juego">
        <!-- JUEGO -->
    </div>
</body>
<script src="{{ asset('js/blackjack.js') }}"></script> 
</html>