<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Perfil - Royal Dice</title>
    <link rel="stylesheet" href="{{ asset('/css/perfil.css')}}">
    <link rel="icon" type="image/png" href="{{ asset('img/icono.png') }}" /> 
    
</head>

<body>
    <img src="{{ asset('img/logo.png')}}" id="logo">
    {{-- <img src="logo.png" id="logo"> --}}

    <form class="box" method="post" action="{{ route('perfil.store') }} ">
        @csrf 
        <div class="user">
        <h3 style="text-align: left;padding-right: 30px;">USUARIO</h3>
        <h3 style="text-align: right;padding-left: 108px;">MONEDAS</h3>
        </div>
        <div class="user">
            <input type="text" disabled name="name" style="margin-right: 15px;"placeholder="Usuario" value="{{ Auth::user()->name }}"> 
            @error('name')
            
                <small>*{{ $message }}</small>
            @enderror 
            <input type="text" disabled name="fichas" value="{{ Auth::user()->fichas }}">
        </div>
        
        
        <br>
        <br>
        <h4>Cambiar Contraseña</h4>
        <br>
        <div class="repetir">
            <input type="password" name="newpassword" placeholder="Nueva Contraseña">
        </div>
        <br>
         @error('password')
            
            <small>*{{ $message }}</small>
            <br>
        @enderror 
        <input type="submit" name="enviar">
        

    </form>
    <a href="{{ route('main') }}"><button>Volver</button></a>




</body>

</html>