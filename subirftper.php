<?php
include 'funciones.php';           



$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];


$route = "imageperfil/".$file_name;


move_uploaded_file($file_tmp,$route);

$miconexion=conectar_bd('', 'gestion_bd');
  $resultado= consulta($miconexion,"insert into usuarios (foto) values ('{$file_name}') where nom_usu='{$_SESSION['usuario']}'");


if ($resultado)
{
   header("location: perfil.php");
}


?>
