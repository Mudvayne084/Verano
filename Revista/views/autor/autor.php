<?php
include ('../../libs/adodb5/adodb-pager.inc.php');
include ('../../libs/adodb5/adodb.inc.php');
include ('../../models/Conexion.php');
include ('../../models/Modelo.php');
include ('../../models/Autor.php');
include ('../../controllers/AutorController.php');
include ('../../libs/Er.php');
include ('../layouts/header.php');
//atrapar los datos
if (isset($_POST['nombre'])) {

    $autorC = new AutorController();
    $autorC->insertaAutor($_POST);
}
?>
<br>
<br>
<br>
<h1>Registro de autor</h1>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form role="form" method="POST">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="nombre">
                </div>
                
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" placeholder="apellidos">
                </div>
                
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email" placeholder="email">
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Guardar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<?php include ('../layouts/footer.php'); ?>