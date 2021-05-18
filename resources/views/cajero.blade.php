<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cajero - Royal Dice</title>
    <link rel="stylesheet" href="{{ asset('css/cajero.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/icono.png') }}" /> 
    <style>
    button {
        border: 0;
        background: none;
        display: block;
        margin: 10px auto;
        margin-top: 20px;
        text-align: center;
        border: 2px solid white;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
        font-weight: 500;
    }

    button:hover {
        background: rgb(255, 255, 255);
        color: #c49d3c;
        opacity: 0.6;
    }
    </style>
</head>

<body>
    <img src="{{ asset('img/cajero.png')}}" id="cajero">

    <form class="box" method="post" action="{{ route('cajero.store') }}">
        @csrf    
        <h3>introduce la cantidad de fichas que deseas comprar</h3>
        <p>Tienes {{ $fichas }} fichas</p>
        <input type="text" name="ficha" id="fichas">
        <div class="informacion">
            <h4>1 FICHA = 1 €</h4>
        </div>
        <br>
        <h3>titular de la tarjeta</h3>
        <input type="text">
        <br><br>
        <h3>Nº Tarjeta de credito</h3>
        <input type="text">
        <div class="tarjeta">
            <div style="padding-right: 52px;">
                <h4>Fecha caducidad</h4>
                <div>
                    <select>
                        <option selected>- MES -</option>
                        <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
                        
                    </select>
                    <select>
                        <option selected>- AÑO -</option>
                        <option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option><option>2020</option><option>2021</option><option>2022</option><option>2023</option><option>2024</option><option>2025</option><option>2026</option><option>2027</option><option>2028</option><option>2029</option><option>2030</option>
                    </select>
                </div>  
            </div>
            <div class="codigo">
                <h4 id="textcod" style="margin-top:26px;margin-bottom:7px">cvv</h4>
                <input type="text" id="codigo">
            </div>
        </div>
        <input type="submit" name="enviar" value="Comprar">
    </form>
    <a href="{{ route('main') }}"><button>Volver</button></a>



</body>

</html>