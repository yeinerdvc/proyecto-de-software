<?php
include("funciones.php");
session_start();


$conexion = conectar_bd('', 'gestion_bd');

$resultado=consulta($conexion,"SELECT * from documentos");

?>



<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" style="width:100%" id="tabla_docs">
                <thead>
                    <tr>
                        <td  style="text-align:center">ID</td>
                        <td  style="text-align:center">Nombre</td>
                        <td  style="text-align:center">Fecha</td>
                        <td  style="text-align:center">Dimension</td>
                        <td  style="text-align:center">Visualizar</td>
                        <td  style="text-align:center">Descargar</td>
                    </tr>
                </thead>
           
                <tbody>
                <?php
                 while ($mostrar = $resultado->fetch_object()) {
                   
                    $rutadescarga="documento/".$mostrar->Archivo;
                    $nombrearchivo= $mostrar->Archivo;
                 
                ?>
                <tr>
                       <td><?php echo $mostrar->id_doc; ?></td>
                       <td><?php echo $mostrar->Nombre; ?></td>
                       <td><?php echo $mostrar->fecha_doc; ?></td>
                       <td><?php echo $mostrar->acronimo_dimension; ?></td>
                       <td style="text-align:center">
                        <a href="<?php echo $rutadescarga; ?>" target='_blank' class="btn btn-success">
                        <i class="fas fa-eye" ></i>
                        </a> 
                    </td>
                    <td style="text-align:center">
                    <a href="<?php echo $rutadescarga; ?>"
                    download="<?php echo $nombrearchivo; ?> " class="btn btn-primary btn-sm"> 
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
        $('#tabla_docs').DataTable();
    });
</script> 



