<!doctype html>
<html lang="es">
<head>
  <style>

  </style>
<meta charset="utf-8">
<link rel="stylesheet" href="css/styles.css ">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>REGISTRARSE</title>
  <link rel="stylesheet" href="css/styles.css ">
  <link rel="icon" href="img/icono.png"  type="image/x-icon">
  <?php  
      include('inc/conexion.php');
    ?>
     <?php
    // Mensaje
    $mensaje = 'Ingrese los datos del nuevo usuario';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base de datos';}
    }
    ?>
</head>
<body>

  <h1><a href="index.php"><<-Volver</a></h1>
</div>
	 <script src="js/bootstrap.bundle.min.js"></script>
	 <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        	
    <form class="row g-3" action="registro_sql.php" method="POST">
    <div class="col-12">
    <label for="id_usuario" class="form-label"></label>
    <input type="hidden" class="form-control" id="id_usuario" name="id_usuario">
  </div>
    <div class="col-12">
    <label for="inputAddress" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
  </div>
  <div class="col-12">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido">
  </div>
    <div class="col-12">
    <label for="usuario" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese un nombre de usuario">
  </div>
  <div class="col-md-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email"placeholder="Ingrese un Email valido" >
  </div>
  <div class="col-md-12">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="contraseña"placeholder="Ingrese una contraseña" >
  </div>
  <div class="col-12">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
  </div>
  <div class="col-md-12">
    <label for="ciudad" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese su ciudad">
  </div>
  <div class="col-md-12">
    <label for="provincia" class="form-label">Provincia</label>
    <select id="provincia" class="form-select" name="provincia">
      <option selected>Seleccionar</option>
      <option>Buenos Aires</option>
      <option>Ciudad Autónoma de Buenos Aires</option>
      <option>Catamarca</option>
      <option>Chaco</option>
      <option>Chubut</option>
      <option>Cordoba</option>
      <option>Corrientes</option>
      <option>Entre Ríos</option>
      <option>Formosa</option>
      <option>Jujuy</option>
      <option>La Pampa</option>
      <option>La Rioja</option>
      <option>Mendoza</option>
      <option>Misiones</option>
      <option>Neuquén</option>
      <option>Río Negro</option>
      <option>Salta</option>
      <option>San Juan</option>
      <option>San Luis</option>
      <option>Santa Cruz</option>
      <option>Santa Fe</option>
      <option>Santiago del Estero</option>
      <option>Tierra del Fuego</option>
      <option>Tucumán</option>
    </select>
  </div>
  

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a class="btn btn-primary" href="index.php" role="button">Atras</a>
  </div>
</form>
        </div>
        <div class="col-3"></div>
     </div>
<br><br><br>


<div class="row">	
	<div class="col-3"></div>
	<div class="col-6">
		
	</div>
	<div class="col-3"></div>
</div>
		<br><br>	
	



<footer>  
  <p style="text-align: center;">CRUD PHP - Daniel-Maidana</p>
</footer>
</body>
</html>
