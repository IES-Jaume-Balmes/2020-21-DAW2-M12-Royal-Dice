<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: #171717;
            color: white;
            text-align: center;
        }
        
        input {
            color: #917839;
        }
        
         ::placeholder {
            color: #917839;
            opacity: 0.5;
        }
        
        a {
            text-decoration: none;
            color: white;
            background-color: #917839;
        }
        
        section {
            background-color: #917839;
            width: 20%;
            padding-bottom: 20px;
            margin: auto;
            border-radius: 20px;
        }
        .logo {
            width: auto;
            align-items: center
        }
    </style>
</head>

<body>
    <div class="logo">
        <h1>Royal <img src="{{ asset('img/logo.png')}}"> Dice</h1>
    </div>
    
    <section>
        <h3>Iniciar sesión</h3>
        <input type="text" placeholder="Usuario">
        <br><br>
        <input type="password" name="" id="" placeholder="Constraseña">
        <!-- <hr width="10px"> O <hr width="10px">      -->
    </section>
    <br><br>
    <a href="">Registrarse</a>
</body>

</html>