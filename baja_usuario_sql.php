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
    header("Location: bdd.php");
}else{
    $baja = "delete from usuario where usuario = '$usuario' ";

    $resultado_baja = mysqli_query($conexion,$baja);
    header("Location: bdd.php");
}
?>