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

    <link rel="stylesheet" type="text/css" href="css/guarcontr.css">
    <link rel="stylesheet" type="text/css" href="libreria/bostrap/bootstrap.min.css">
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
            <form action="subircontr.php" method="POST" enctype="multipart/form-data">
            <label for="file">Subir Contrato</label><br>
            <input type="file" id="file" name="file"class="btn btn-primary" ><br><br>

            <label for="numcontr">Numero de Contrato</label><br>
            <input type="number" id="numc" name="numc"><br>
            
            <br>
            <label for="cedula">Cedula</label><br>
            <input type="number" id="id" name="id">

            <br><br>
            <label for="Contraista">Nombre de Contratista</label><br>
            <input type="text" id="nom" name="nom">

            <br><br>
            <label for="apellido">Apellido de Contratista</label><br>
            <input type="text" id="apell" name="apell">
            
            <br><br> 
            <label for="fecha">Fecha de inicio de contrato</label><br>
            <input type="date" id="fechaini" name="fechaini">

            <br><br> 
            <label for="fecha">Fecha finalizacion del contrato</label><br>
            <input type="date" id="fechafin" name="fechafin">

            <br><br>
            

        

            <input type="submit" value="Guardar" class="btn btn-primary">

        



            </form>
           
        </div>

    </div>

<br><br>
</body>

</html>