<?php
    // Paso 1: Datos de conexion
    $usuario = 'root';
    $clave = '';
    $servidor = 'localhost';
    $basededatos = 'tienda';
    
    // Paso 2: Creo la conexion
    $conexion = mysqli_connect($servidor,$usuario,$clave) 
    or die ('No se ha podido conectar al servidor');

    // Paso 3: Me conecto a la base de datos.
    $db = mysqli_select_db($conexion,$basededatos) 
    or die ('No se pudo conectar a la base de datos');
?>