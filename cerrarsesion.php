<?php
session_start();
$varsesion = $_SESSION['nombre'];

if($varsesion == null || $varsesion = ''){
    header("location:index.php");}
 

session_unset();

header("location:index.php");

?>