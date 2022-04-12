<?php
include "model.php";

$edit_id = $_POST['edit_id'];

$model = new Model();

$row= $model->edit($edit_id);

if (!empty($row)) { ?>
	<form method="post" id="form_update">
            <div id="result"></div>
            <div class="form-group">
            	<input type="hidden" id="edit_id" name="" value="<?= $row['user_id']; ?>">
              <label>First Name:</label>
              <input type="text"  id="edit_first_name" class="form-control" placeholder="First Name" value="<?= $row['first_name']; ?>">
            </div>
            <div class="form-group">
              <label>Last Name:</label>
              <input type="text"  id="edit_last_name" class="form-control" placeholder="Last Name" value="<?= $row['last_name']; ?>">
            </div>
            <div class="form-group">
              <label>Phone Number:</label>
              <input type="text"  id="edit_phone_number" class="form-control" placeholder="Phone Number" value="<?= $row['phone_number']; ?>">
            </div>

            
          </form>
<?php }
?>