<?php
include "model.php";

if (isset($_POST['update'])) {
		
		if (isset($_POST['edit_first_name']) && isset($_POST['edit_last_name']) && isset($_POST['edit_phone_number']) && 
			isset($_POST['edit_id'])) {
			if (!empty($_POST['edit_last_name']) && !empty($_POST['edit_first_name']) && !empty($_POST['edit_phone_number']) && !empty($_POST['edit_id'])) {

				
				$data['id'] = 	$_POST['edit_id'];
				$data['first_name'] = $_POST['edit_first_name'];
				$data['last_name'] = $_POST['edit_last_name'];
				$data['phone_number'] = $_POST['edit_phone_number'];
				$model = new Model();
				$update = $model->update($data);
			}else{
				echo "<script>alert('Fill in the blank space')</script>";
			}
		}
			
		
	}

?>

