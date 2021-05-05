<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>

<body>
    <img src="{{ asset('img/logo.png')}}" id="logo">

    <form class="box" action="index.html" method="post">
        <h3>Login</h3>
        <input type="text" name="usuario" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="enviar" value="Login">
        <p>¿Eres nuevo? </p><a href="../register">Registrate</a>
    </form>




</body>

</html>