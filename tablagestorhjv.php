<?php
include("funciones.php");
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contraseña'] = $_POST['clave'];
}

$conexion = conectar_bd('', 'gestion_bd');

$resultado=consulta($conexion,"SELECT * from hoja_vida");
?>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:100%" id="tabla_docshjv">
                <thead>
                    <tr>
                        <td  style="text-align:center">ID</td>
                        <td  style="text-align:center">Cedula</td>
                        <td  style="text-align:center">Nombre</td>
                        <td  style="text-align:center">Apellido</td>
                        <td  style="text-align:center">Visualizar</td>
                        <td  style="text-align:center">Descargar</td>

                    </tr>
                </thead>
            
                <tbody>
                <?php
                 while ($mostrar = $resultado->fetch_object()) {
                   
                    $rutadescarga="documento/".$mostrar->hoja_vida;
                    $nombrearchivo= $mostrar->hoja_vida;
                 
                ?>
                <tr>
                       <td><?php echo $mostrar->id_hojav; ?></td>
                       <td><?php echo $mostrar->cedula; ?></td>
                       <td><?php echo $mostrar->nombre; ?></td>
                       <td><?php echo $mostrar->apellido; ?></td>
                       <td style="text-align:center">
                        <a href="<?php echo $rutadescarga; ?>" target='_blank' class="btn btn-success">
                        <i class="fas fa-eye" ></i>
                        </a> 
                    </td>
                    <td style="text-align:center">
                    <a href="<?php echo $rutadescarga; ?>"
                    download="<?php echo $nombrearchivo; ?> " class="btn btn-success btn-sm"> 
                       <i class="fas fa-download"></i>
                       </a>
                    </td>
                 </tr>
                 <?php
                }
                    ?>
                </tbody>
             
            </table>                                                  
        </div>
    </div>

</div>
<script type="text/javascript">
   $(document).ready(function(){
        $('#tabla_docshjv').DataTable();
    });
</script> 
