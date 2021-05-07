<!DOCTYPE html>
<html lang="en" dir="ltr">

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
        <input type="text" name="name" placeholder="Usuario">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="submit" name="enviar">
        <p>¿Eres nuevo? </p><a href="../public/register">Registrate</a>
    </form>




</body>

</html>