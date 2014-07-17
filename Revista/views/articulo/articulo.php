<?php
include ('../../libs/adodb5/adodb-pager.inc.php');
include ('../../libs/adodb5/adodb.inc.php');
include ('../../models/Conexion.php');
include ('../../models/Modelo.php');
include ('../../models/Articulo.php');
include ('../../controllers/ArticuloController.php');
include ('../../libs/Er.php');
include ('../layouts/header.php');
//atrapar los datos
if (isset($_POST['nombre'])) {

    $articuloC = new articuloController();
    $articuloC->insertaArticulo($_POST);
}
?>
<br>
<br>
<br>
<h1>Registro de articulo</h1>
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
                    <label for="resumen">Resumen</label>
                    <input type="text" class="form-control" name="resumen" placeholder="resumen">
                </div>

                <div class="form-group">
                    <label for="abstract">Abstract</label>
                    <input type="text" class="form-control" name="abstract" placeholder="abstract">
                </div>

                <div class="form-group">
                    <label for="introduccion">Introduccion</label>
                    <input type="text" class="form-control" name="introduccion" placeholder="introduccion">
                </div>

                <div class="form-group">
                    <label for="metodologia">Metodologia</label>
                    <input type="text" class="form-control" name="metodologia" placeholder="metodologia">
                </div>

                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <input type="text" class="form-control" name="contenido" placeholder="contenido">
                </div>

                <div class="form-group">
                    <label for="fecha_creacion">Fecha de creaci&oacute;n</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name="fecha_creacion">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="archivo_pdf">Archivo_PDF</label>
                    <input type="file" name="archivo_pdf">
                    <p class="help-block">Seleccione el archivo</p>
                </div>

                <div class="form-group">
                    <label for="id_status">Status</label>
                    <select class="form-control" name="id_status">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select> 
                </div>

                <div class="form-group">
                    <label for="conclusiones">Concluciones</label>
                    <input type="text" class="form-control" name="conclusiones" placeholder="conclusiones">
                </div>

                <div class="form-group">
                    <label for="agradecimientos">Agradecimientos</label>
                    <input type="text" class="form-control" name="agradecimientos" placeholder="agradecimientos">
                </div>

                <div class="form-group">
                    <label for="referencias">Referencias</label>
                    <input type="text" class="form-control" name="referencias" placeholder="referencias">
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