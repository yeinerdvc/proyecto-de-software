
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.
cloudflare.com/ajax/libs/font-awesome/5.15.3/css/
all.min.css">

<script src="https://kit.fontawesome.com/d998ddc180.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>menu</title>

    <link rel="stylesheet" type="text/css" href="css/guardardocs.css">
    <link rel="stylesheet" type="text/css" href="libreria/bostrap/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

    <header>


        <br>

            <div class="encabezado">
             
            <img id="imgvol" src="imgs/volver.png" height="30" width="30" class="volv" onclick="location.href ='montardocs.php'">


                <input type="checkbox" id="menu-bar">
                
                <label id="menbar" for="menu-bar" class="fa fa-bars"></label>
                <nav class="navbar">
                    <a type="button" onclick="location.href ='index.php'">Salir</a>
                    <a href="#perfil" onclick="location.href ='perfil.php'">Perfil</a>
                </nav>

            </div>
            
    </header>
    <br><br><br><br><br><br>
    <div id="div1" class="container">
        
        <div class="bmenu">
            <form action="subir.php" method="POST" enctype="multipart/form-data">
            <label for="file">Guardar Documento</label><br>
            <input class="btn btn-primary" type="file" id="file" name="file"><br><br>

            
            <label for="Nombre">Nombre</label><br>
            <input type="text" id="Nombre" name="Nombre">
           
            <br><br>
            <label for="id">id de documento</label><br>
            <input type="text" id="id" name="id">

            <br><br>
            <label for="fecha">Fecha de guardado</label><br>
            <input type="date" id="fecha" name="fecha">

            <br><br>
            <label for="Dimension">dimension</label><br>
            <div  class="form-group col-xs-2" id="dimension" name="dimension">
            <?php 
                                include('funciones.php');
                                $miconexion=conectar_bd('','gestion_bd');
                                $consulta = "SELECT * FROM dimensiones";
                                $resultado = mysqli_query ($miconexion, $consulta) or die (mysqli_error($miconexion));
                                
                                ?>
                                <select class="form-control" name="dimension">
                    <option value="" selected></option>
                    <?php while ($opcion = $resultado -> fetch_object()) { ?>
                    <option value="<?php echo $opcion->acronimo_dimension;?>"><?php echo $opcion->acronimo_dimension;?></option>
                                    <?php } ?>
                  </select>
               <br>

            </div>
            
            
            

        

            <input class="btn btn-primary" type="submit" value="Guardar">

        



            </form>
           
        </div>

    </div>

<br><br>
</body>

</html>
