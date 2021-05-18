<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts/head')
    <style>
        #juego{
            text-align: center;
        }
        #apuesta,button{
            background-color: #B19D60;
            height: 30px;
            margin-left: 10px;
            margin-top: 10px;
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
</head>
<body>
    @include('layouts/header')
    
    <div class="juego" id="juego"> 
        <h1 style="color: white">Carta Más Alta </h1>   
    </div>
</body>
<script src="{{ asset('js/carta_mas_alta.js') }}"></script>
</html>