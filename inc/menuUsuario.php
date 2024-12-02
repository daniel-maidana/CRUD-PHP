<?php
    function menu(){  ?>

        <div class="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class=" container navbar-brand"><img src="img/t.png"></a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

         <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="searchrch">
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <form class="d-flex">
                  
                </form>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="tienda.php" >Tienda</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="tienda.php">Tienda</a></li>
          </ul>
        </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Inicio</a>
                </li>
                
                <li>
                    <a class="nav-link" href="formulario.php">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="modificacion_usuario.php">Mis Datos</a>
                </li>  
               
                 <li class="nav-item dropdown"></li>
          
            </ul>

        </div>
            
        </div>
        </nav>
        <br><br> 

        <?php
         }
?>