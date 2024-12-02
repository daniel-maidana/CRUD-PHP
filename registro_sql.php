<?php

    // Archivo de conexion
    include('inc/conexion.php');

    // Recupero los valores del formulario.
    $nombre = filter_var($_POST ['id_usuario'],FILTER_SANITIZE_STRING);
    $nombre = filter_var($_POST ['nombre'],FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'],FILTER_SANITIZE_STRING);
    $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST ['email'],FILTER_SANITIZE_STRING);
    $contraseña =$_POST ['contraseña'];
    $direccion = filter_var($_POST['direccion'],FILTER_SANITIZE_STRING);
    $ciudad =filter_var($_POST['ciudad'],FILTER_SANITIZE_STRING);
    $provincia = filter_var($_POST['provincia'],FILTER_SANITIZE_STRING);

    #$clave2 = password_hash($contraseña,PASSWORD_DEFAULT);

    // Verifico cuantas veces esta cargado el usuario en la BDD
    $consulta1 = "select count(distinct usuario) as nuevo from usuario where usuario = '$usuario' ";
    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decision
    if($existe==1){
        header("Location:registro.php?mensaje=uno");
    }else{
        $alta = "insert into usuario values ('$id_usuario','$nombre','$apellido','$usuario','$email','$contraseña','$direccion','$ciudad','$provincia')";
        $resultado_alta = mysqli_query($conexion,$alta);

        header("Location: bienvenido.php");
                               
    }
?>