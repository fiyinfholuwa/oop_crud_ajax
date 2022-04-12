<?php
include "model.php";

$del_id = $_POST['del_id'];

$model = new Model();

$del_id = $model->delete($del_id);
?>