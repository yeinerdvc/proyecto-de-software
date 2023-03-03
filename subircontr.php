<?php

include 'funciones.php';
$numcontr = $_POST['numc'];
$cedula = $_POST['id'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$fechaini = $_POST['fechaini'];
$fechafin = $_POST['fechafin'];
$nombre = $_POST['nom'];
$apellido = $_POST['apell'];



$route = "documento/".$file_name;


move_uploaded_file($file_tmp,$route);

$miconexion=conectar_bd('', 'gestion_bd');
  $resultado= consulta($miconexion,"insert into contratos (num_contrato,cedula,fecha_inicio,fecha_final,Nombre,apellido,Contrato) values ('{$numcontr}','{$cedula}','{$fechaini}','{$fechafin}','{$nombre}','{$apellido}','{$file_name}')");


if ($resultado)
{
    header("location: guarcontratos.php");
}


?>
