<?php
include ('../../libs/adodb5/adodb-pager.inc.php');
include ('../../libs/adodb5/adodb.inc.php');
include ('../../models/Conexion.php');
include ('../../models/Modelo.php');
include ('../../models/Status.php');
include ('../../controllers/StatusController.php');
include ('../../libs/Er.php');
include ('../layouts/header.php');
//atrapar los datos
if (isset($_POST['status'])) {

    $statusC = new StatusController();
    $statusC->insertaStatus($_POST);
}
?>
<br>
<br>
<br>
<h1>Status</h1>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form role="form" method="POST">

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" name="status" placeholder="status">
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