<?php 

include 'model.php';

$model = new Model();
$rows = $model->fetchall();


 ?>

 <div class="container">
 	<table class="table">
 	<thead>
 		<tr>
 			<th>Nos</th>
 			<th>First Name</th>
 			<th>Last Name</th>
 			<th>Phone Number</th>
 			<th>Actions</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php 
 		$i = 1;
 			if (!empty($rows)) {
 				foreach ($rows as $row) { ?>
 		<tr>
 			<td><?= $i++; ?></td>
 			<td><?= $row['first_name']; ?></td>
 			<td><?= $row['last_name']; ?></td>
 			<td><?= $row['phone_number']; ?></td>
 			<td>
 				<a href="#!" class="btn btn-success btn-sm  mt-1" id="read"  value="<?= $row['user_id']; ?>"  data-bs-toggle="modal" data-bs-target="#exampleModal">read</a>
 				<a href="#!" class="btn btn-primary btn-sm  mt-1" id="edit"  value="<?= $row['user_id']; ?>" data-bs-toggle="modal" data-bs-target="#exampleModal2" >edit</a>
 				<a href="#!" class="btn btn-danger btn-sm  mt-1" id="del"  value="<?= $row['user_id']; ?>" >delete</a>
 			</td>
 		</tr>
 					
 		<?php } }else{ ?>
 			<div class="col-md-5 mx-auto mt-5">
 				<div class="alert alert-danger d-flex align-items-center" role="alert">
			  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
			  <div>
			   No data
			  </div>
			</div>
 			</div>
 		<?php }
 		?>
 			
 	</tbody>
 </table>
 </div>