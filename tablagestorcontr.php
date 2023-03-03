<?php
include("funciones.php");
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contraseña'] = $_POST['clave'];
}

$conexion = conectar_bd('', 'gestion_bd');

$resultado=consulta($conexion,"SELECT * from contratos");
?>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:100%" id="tabla_contratos">
                <thead>
                    <tr>
                        <td  style="text-align:center">ID Contrato</td>
                        <td  style="text-align:center">Nombre</td>
                        <td  style="text-align:center">Apellido</td>
                        <td  style="text-align:center">Cedula</td>
                        <td  style="text-align:center">Fecha de inicio del contrato</td>
                        <td  style="text-align:center">Fecha de finalizacion del contrato</td>
                        <td  style="text-align:center">Visualizar</td>
                        <td  style="text-align:center">Descargar</td>

                    </tr>
                </thead>
            
                <tbody>
                <?php
                 while ($mostrar = $resultado->fetch_object()) {
                   
                    $rutadescarga="documento/".$mostrar->Contrato;
                    $nombrearchivo= $mostrar->Contrato;
                 
                ?>
                <tr>
                       <td><?php echo $mostrar->num_contrato; ?></td>
                       <td><?php echo $mostrar->Nombre; ?></td>
                       <td><?php echo $mostrar->apellido; ?></td>
                       <td><?php echo $mostrar->cedula; ?></td>
                       <td><?php echo $mostrar->fecha_inicio; ?></td>
                       <td><?php echo $mostrar->fecha_final; ?></td>
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
        $('#tabla_contratos').DataTable();
    });
</script> 