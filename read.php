<?php
include "model.php";

$read_id = $_POST['read_id'];

$model = new Model();

$row = $model->read($read_id);

if (!empty($row)) { ?>
	<p>First Name : <?= $row['first_name']; ?></p>
	<p>Last Name : <?= $row['last_name']; ?></p>
	<p>Phone Number : <?= $row['phone_number']; ?></p>
<?php }
?>