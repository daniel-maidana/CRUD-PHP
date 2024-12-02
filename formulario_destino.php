<?php

    /*
    $a = $_POST['nombre'];
    $b = filter_var($_POST['clave2'],FILTER_SANITIZE_STRING);

    //conectar a base de datos
    $conexion = mysqli_connect("localhost", "root", "", "tienda");
    
    $consulta = "SELECT * FROM  usuario WHERE usuario  = '$a' and contraseña  ='$b'";
    $resultado = mysqli_query($conexion, $consulta);

    $_SESSION['nombre'] = $a;

    $filas=mysqli_num_rows($resultado);
    if ($filas > 0){    
        header("location:bdd.php");
    
    } else {

        header("location:index.php");
    }

?>*/

    // Sanitizar los datos recibidos
    $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    $contraseña =$_POST['contraseña'];

    $conexion = mysqli_connect("localhost", "root", "", "tienda");

    // Consultar la base de datos para obtener el hash de la contraseña
    $consulta = "SELECT * FROM  usuario WHERE usuario  = '$usuario' and contraseña  ='$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

   # $_SESSION['nombre'] = $a;

    $filas=mysqli_num_rows($resultado);
    if ($filas > 0){    
        header("location:bdd.php");
    
    } else {

        header("location:index.php");
    }
?>