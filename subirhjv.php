<?php

include 'funciones.php';
$cedula = $_POST['id'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$nombre = $_POST['nom'];
$apellido = $_POST['apell'];


$route = "documento/".$file_name;


move_uploaded_file($file_tmp,$route);

$miconexion=conectar_bd('', 'gestion_bd');
  $resultado= consulta($miconexion,"insert into hoja_vida (cedula,nombre,apellido,hoja_vida) values ('{$cedula}','{$nombre}','{$apellido}','{$file_name}')");


if ($resultado)
{
  header("location: guarhjv.php");
}


?>
