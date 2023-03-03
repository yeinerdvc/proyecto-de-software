<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="libreria/bostrap/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/perf.css">
   <link rel="stylesheet" href="https://cdnjs.
cloudflare.com/ajax/libs/font-awesome/5.15.3/css/
all.min.css">
   <title>EDITAR PERFIL</title>
</head>
<body>
<header>

    
<div class="encabezado">
    
      
    <div class="encabezado">


    <input type="checkbox" id="menu-bar">
                <label id="menbar" for="menu-bar" class="fa fa-bars"></label>
                <nav class="navbar">
                    <a type="button" onclick="location.href ='index.php'">Salir</a>
                </nav>

            </div>
            

    <img id="imgvol" src="imgs/volver.png" height="30" width="30" class="volv" onclick="location.href ='menu.php'">

</div>
</header>

  <a id="aper">PERFIL</a>
 
<br>
  <div class="perfil"></br>
  

          <div id="divconsulta2">
          <?php
       
              include('funciones.php');
              session_start();
              $miconexion=conectar_bd('', 'gestion_bd');
              $resultado=consulta($miconexion,"select * from usuarios where nom_usu='{$_SESSION['usuario']}' ");
              if($resultado->num_rows>0)
              {
                  $fila = $resultado->fetch_object();
                  $_SESSION['ide1']=$fila->ID;
                  ?>
                <form id="formulario2" role="form" method="post">
                    <div class="col-md-12">
                       
                       <label class="lgris">Id:</label>
                       <input class="form-control" type="text" name="ide1" disabled="disabled" value="<?php echo $fila->ID?>"/>

                       <label class="lgris">Nombres:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="nombres" required value="<?php echo $fila->Nombre ?>"/>

                       <label class="lgris">Apellidos:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="apellidos" value="<?php echo $fila->Apellido?>" required/>

                       <label class="lgris">Correo:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="correo" value="<?php echo $fila->Correo ?>" required/>

                       <label class="lgris">Nombre de usuario:</label>
                       <input class="form-control" style="text-transform:uppercase;"  type="text" name="nom_usu" type="text"  value="<?php echo $fila->nom_usu ?>" required/>
                       
                       <label class="lgris">tipo de usuario:</label>
                       <input class="form-control" style="text-transform:uppercase;" type="text" name="tipo_usu" type="text"  value="<?php echo $fila->tipo_usu ?>" />
                       <br>
                       <input class="btn btn-primary" type="submit" value="Actualizar">
                       <br>
                    </div>
                </form>
                <?php
              
              }
            
          ?>

          </div>
        



            
           
        </div>
  </div>
  </div>
   
</body>
</html>
   











