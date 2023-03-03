<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.
cloudflare.com/ajax/libs/font-awesome/5.15.3/css/
all.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver documentos</title>
    <script src="https://kit.fontawesome.com/d998ddc180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="libreria/datatables/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="libreria/datatables/DataTables-1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="libreria/bostrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/docs.css">
    

</head>
<body>
   <header>

    
<div class="encabezado">
    
      
    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fa fa-bars"></label>
    <nav class="navbar">  
     <a  type="button" onclick="location.href ='index.php'" >Salir</a>
     <a type="button" onclick="location.href ='perfil.php'">Perfil</a>
    </nav>

    <img id="imgvol" src="imgs/volver.png" height="30" width="30" class="volv" onclick="location.href ='menu.php'">
</div>
</header>
<br><br><br><br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hojas De Vida</h1>
    <div id="tablagestorarchivoshjv"></div>
  </div>
</div>


<?php include "footer.php"; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tablagestorarchivoshjv').load("tablagestorhjv.php");
    });
    </script>
    
</body>
</html>
