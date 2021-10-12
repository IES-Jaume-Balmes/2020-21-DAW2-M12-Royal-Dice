<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>

<body>
    <img src="{{ asset('img/logo.png')}}" id="logo">

    <form class="box" method="post" action="{{ route('login.main') }} ">
        @csrf
        <h3>Login</h3>
        <input type="text" name="name" required placeholder="Usuario" value="{{ old('user') }}">
        @error('name')
            
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <input type="password" required name="password" placeholder="Contraseña">
        @error('password')
            
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <input type="submit" name="enviar">
        <p>¿Eres nuevo? </p><a href="{{ route('register') }}">Regístrate</a>
    </form>




</body>

</html>