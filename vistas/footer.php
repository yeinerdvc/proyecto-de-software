    <script src="../libreria/bostrap/bootstrap.min.js"></script>
    <script src="../libreria/jquery-3.6.1.min.js"></script>
    <script src="../libreria/bostrap/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="libreria/bostrap/bootstrap.min.css">



</body>
</html>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Gestor de archivos</h1>
    <br><br><br>
    <div id="tablaareas"></div>
    <script type="text/javascript">
 $(document).ready(function(){
    $('tablaareas').load("vistas/gestor/tablagestor.php")
 })
    </script>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Hojas De Vida</h1>
    <br><br><br>
    <div id="tablaareashjv"></div>
    <script type="text/javascript">
 $(document).ready(function(){
    $('tablaareashjv').load("vistas/gestor/tablagestorhjv.php")
 })
    </script>
    

<!-- Modal -->
<div class="modal fade" id="visualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>