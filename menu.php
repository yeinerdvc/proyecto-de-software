<?php
include("funciones.php");
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contraseña'] = $_POST['clave'];
}

$conexion = conectar_bd('', 'gestion_bd');
$resultado = consulta($conexion, "SELECT * from usuarios where nom_usu='{$_SESSION['usuario']}' and usua_contra='{$_SESSION['contraseña']}'");
?>
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

    <link rel="stylesheet" type="text/css" href="css/estilomen.css">
</head>

<body>
    <header>


        <br>
        <?php
        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_object();
            $_SESSION['Tipo_usuario'] = $fila->tipo_usu;
        ?>
            <label class="bienv">Bienvenido <?php echo $_SESSION['usuario'] ?></label><br>
          
            <div class="encabezado">
             
                <input type="checkbox" id="menu-bar">
                <label id="menbar" for="menu-bar" class="fa fa-bars"></label>
                <nav class="navbar">
                    <a type="button" onclick="location.href ='index.php'">Salir</a>
                    <a href="#perfil" onclick="location.href ='perfil.php'">Perfil</a>
                </nav>

            </div>
            
    </header>
    <img src="imgs/dox.png" class="dox" width="650" height="620">
    <div id="div1" class="container">
        <div class="bmenu">
        <div id="mySidenav" class="sidenav">
        <a type="button" onclick="location.href ='montardocs.php'" id="addoc">ingresar documento</a>
  <a type="button" onclick="location.href ='verdocs.php'" id="verdoc">ver documentos</a>
  <a type="button" onclick="location.href ='verhjv.php'" id="hjv">Hojas de vida</a>
  <a type="button" onclick="location.href ='vercontrato.php'" id="contr">Contratos</a>


</div>
 </header>

        </div>

    </div>
<?php
        } else {
            echo "Usuario o clave invalido";
        }
        $conexion->close();
?>
<br><br>



</body>

</html>