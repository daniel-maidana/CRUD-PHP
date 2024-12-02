<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css ">
    
    <?php include('inc/menu.php');  ?>

    <title>LOGIN</title>
    <link rel="icon" href="img/icono.png" type="image/x-icon">
  </head>
  <body class="container-fluid">
    <!-- Menu de navegacion -->
    <?php menu(); ?>

    <br><br><br>  

    <!-- Fila 1 -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

        <form action="formulario_destino.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Escriba su usuario">
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Escriba su contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
          
        </form>  <br>      
     
        </div>
        <div class="col-3"></div>
    </div>

    <br><br><br>



    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>

    <script>
        window.onload = function(){
          var contenedor = document.getElementsById('contenedor_carga');
        }
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';

    </script>





     <div class="row"> 
   <div class="col-3"></div>
    <div class="col-6">
      <!--
<div class="spinner-border text-secondary" role="status">
  <span class="visually-hidden">Loading...</span>
 </div>-->

    </div>
     <div class="col-3"></div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>
  <footer>
     <br><br><br>    
      <p style="text-align: center;">CRUD PHP - Daniel-Maidana</p>
  </footer>


  </body>   
</html>