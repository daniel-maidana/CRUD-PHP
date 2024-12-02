<?php

// Incluyo el archivo de conexion
include('inc/conexion.php');

// Recibo los valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$boton = $_POST['boton'];

// Verifico que quiere hacer el usuario
if($boton==0){
    header("Location: index.php");
}else{
    $modifica = "update usuario set usuario = '$usuario', nombre= '$nombre', apellido= '$apellido', usuario= '$usuario', email= '$email', contraseña= '$contraseña', direccion= '$direccion', ciudad= '$ciudad', provincia= 'provincia' where usuario = '$usuario'";

    $resultado_modifica = mysqli_query($conexion,$modifica);
    header("Location: bdd.php");
}
?>