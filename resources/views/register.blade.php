<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>

<body>
    <img src="{{ asset('img/logo.png')}}" id="logo">
    
    <form class="box registro" method="post" action="{{ route('register.store') }}">
        @csrf
        <h3>Registro</h3>
        <input type="text" name="user" placeholder="Usuario" value="{{ old('user') }}">
        @error('user')
            
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <input type="password" name="password" placeholder="Contraseña">
        @error('password')
            
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <input type="submit" name="enviar">
        <p>¿Ya tienes cuenta?</p><a href="./login">Inicia sesión</a>
    </form>




</body>

</html>