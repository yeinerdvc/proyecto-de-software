<?php

include 'funciones.php';

$file_id = $_POST['id'];
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$fecha = $_POST['fecha'];
$dimension = $_POST['dimension'];
$route = "documento/".$file_name;
$Nombre = $_POST["Nombre"];

$explode= explode('.',$file_name);
$tipoArchivo=array_pop($explode);



move_uploaded_file($file_tmp,$route);

$miconexion=conectar_bd('', 'gestion_bd');
  $resultado= consulta($miconexion,"insert into documentos (id_doc,Nombre,Archivo,fecha_doc,acronimo_dimension,tipo) values ('{$file_id}','{$Nombre}','{$file_name}','{$fecha}','{$dimension}','{$tipoArchivo}')");


if ($resultado)
{
  header("location: guardocs.php");
}
?>

