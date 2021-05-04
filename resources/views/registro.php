<?php
define('DB_SERVER','localhost');
define('DB_NAME','royaldice'); 
define('DB_USER','root'); 
define('DB_PASS','');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS); 
mysql_select_db(DB_NAME,$con); 

if(isset($_POST['enviar'])) { 
    if($_POST['usuario'] == '' or $_POST['password'] == '') { 
        echo 'Por favor llene todos los campos.'; 
    } else { 
        $sql = 'SELECT * FROM usuarios'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0; 
        while($result = mysql_fetch_object($rec)) { 
            if($result->usuario == $_POST['usuario']) { 
                $verificar_usuario = 1; 
            } 
        } 
        if($verificar_usuario) { 
             
                $usuario = $_POST['usuario']; 
                $password = $_POST['password']; 
                $sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')"; 
                mysql_query($sql); 
                echo 'Usted se ha registrado correctamente.'; 
			
        } else {
            echo 'Este usuario ya ha sido registrado anteriormente.'; 
        } 
    } 
}

?>