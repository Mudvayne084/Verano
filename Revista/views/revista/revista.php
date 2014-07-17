<?php
include ('../../libs/adodb5/adodb-pager.inc.php');
include ('../../libs/adodb5/adodb.inc.php');
include ('../../models/Conexion.php');
include ('../../models/Modelo.php');
include ('../../models/Revista.php');
include ('../../controllers/RevistaController.php');
include ('../../libs/Er.php');
include ('../layouts/header.php');
//atrapar los datos
if (isset($_POST['nombre'])) {

    $revistaC = new RevistaController();
    $revistaC->insertaRevista($_POST);
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
                    <label for="portada">Portada</label>
                    <input type="file" name="portada">
                    <p class="help-block">Seleccione la portada</p>
                </div>
                
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" name="fecha">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="volumen">Volumen</label>
                    <input type="text" class="form-control" name="volumen" placeholder="volumen">
                </div>
                
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input type="text" class="form-control" name="titulo" placeholder="titulo">
                </div>
                
                <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" class="form-control" name="subtitulo" placeholder="subtitulo">
                </div>
                
                <div class="form-group">
                    <label for="numero">Numero</label>
                    <input type="text" class="form-control" name="numero" placeholder="numero">
                </div>
                
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" class="form-control" name="clave" placeholder="clave">
                </div>
                
                <div class="form-group">
                    <label for="directorio">Directorio</label>
                    <input type="text" class="form-control" name="directorio" placeholder="directorio">
                </div>
                
                <div class="form-group">
                    <label for="editorial">Editorial</label>
                    <input type="text" class="form-control" name="editorial" placeholder="editorial">
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
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Guardar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


<?php include ('../layouts/footer.php'); ?>