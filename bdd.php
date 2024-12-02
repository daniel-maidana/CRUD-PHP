<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <title>ABM usuarios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/icono.png" type="image/x-icon">

    <style>
      
    body{
     background-color: #0A5EB0;
    }
    </style>
    <!-- Archivos a incluir -->
    <?php 
      include('inc/menu2.php');  
      include('inc/conexion.php');
    ?>

    <!-- Trabajo con BDD -->
    <?php
    
    $consulta = "select distinct * from usuario";
    $resultado = mysqli_query($conexion,$consulta) or die ('No se ha podido ejecutar la consulta');
    mysqli_close($conexion);
    ?>


    <title>Mis Datos</title>
  </head>
  <body class="container-fluid">   

    <!-- Menu de navegacion -->
    <?php menu(); ?>
 
    <br><br><br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">

        <div class="table-responsive">
        <table class="table table-bordered table-sm table-hover table-dark" >
            <thead>
                <tr class="text-center">
                    <td>Nombre</td><td>Apellido</td><td>Usuario</td><td>Email</td><td>Contraseña</td><td>Direccion</td><td>Ciudad</td><td>Provincia</td><td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($columna =mysqli_fetch_array($resultado)){
                        echo "<tr>";
                            echo "<td>".$columna['nombre']."</td>";
                            echo "<td>".$columna['apellido']."</td>";
                            echo "<td>".$columna['usuario']."</td>";
                            echo "<td>".$columna['email']."</td>";
                            echo "<td>".$columna['contraseña']."</td>";
                            echo "<td>".$columna['direccion']."</td>";
                            echo "<td>".$columna['ciudad']."</td>";
                            echo "<td>".$columna['provincia']."</td>";
                            echo "<td>
                                    <a href='modificacion_usuario.php?nombre=".$columna['nombre']."
                                    &apellido=".$columna['apellido']."
                                    &usuario=".$columna['usuario']."
                                    &email=".$columna['email']."
                                    &contraseña=".$columna['contraseña']."
                                    &direccion=".$columna['direccion']."
                                    &ciudad=".$columna['ciudad']."
                                    &provincia=".$columna['provincia']."'>Editar</a>
                                    <a href='baja_usuario.php?nombre=".$columna['nombre']."
                                    &apellido=".$columna['apellido']."
                                    &usuario=".$columna['usuario']."
                                    &email=".$columna['email']."
                                    &contraseña=".$columna['contraseña']."
                                    &direccion=".$columna['direccion']."
                                    &ciudad=".$columna['ciudad']."
                                    &provincia=".$columna['provincia']."'>Eliminar</a>
                                  </td>";
                        echo "</tr>";       
                    }
                ?>
            </tbody>
        </table>
    </div>

        </div>
        <div class="col-2"></div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>