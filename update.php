<?php
include "model.php";

$update_id = $_POST['edit_id'];

$model = new Model();

$update = $model->update($_POST['update'], $update_id);


?>