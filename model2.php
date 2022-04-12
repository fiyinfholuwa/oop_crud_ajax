<?php


Class Model{
private $server = "sql103.epizy.com";
private $username = "epiz_31508461";
private $password = "fiyin@gmail123";
private $db = "epiz_31508461_crud";
private $conn;

public function __construct(){
	try{
		$this->conn = new PDO ("mysql:host=$this->server; dbname=$this->db", $this->username, $this->password);
	} 
}

public function insert(){
	if (isset($_POST['submit'])) {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone_number = $_POST['phone_number'];

		if ($first_name == "" || $last_name =="" || $phone_number=="") {
			echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
			  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
			  <div>
			   Fill in the blank space
			  </div>
			</div>';
		}else{

			$query = "INSERT INTO  users (first_name, last_name, phone_number) VALUES ('$first_name', '$last_name', '$phone_number')";
			
			if ($sql = $this->conn->query($query)) {
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Welldone !</strong> You have successfuly added the user
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
			} else {
				echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Holy guacamole!</strong> failed
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
			}
			
		}
	}
	}

	public function fetchall(){
		$data = NULL;
		$query = "SELECT * FROM users";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
	}

	public function delete($del_id){
		$query = "DELETE FROM users WHERE user_id = '$del_id' ";
		$run_query = $this->conn->exec($query);
		if ($run_query) {
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Welldone !</strong> You have successfuly deleted the user
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
		} else {
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Holy guacamole!</strong> failed
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
		}
		
	}

	public function read($read_id){
		$data = null;
		$query = "SELECT * FROM users WHERE user_id = '$read_id' ";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;

	}

	public function edit($edit_id){
		$data = null;
		$query = "SELECT * FROM users WHERE user_id = '$edit_id' ";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$data = $stmt->fetch();
		return $data;

	}

	public function update($data){
	
			$query = "UPDATE  users SET first_name = '$data[first_name]' ,  last_name ='$data[last_name]' , phone_number ='$data[phone_number] ' WHERE user_id = '$data[id] ' ";
			
			if ($sql = $this->conn->query($query)) {
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Welldone !</strong> You have successfuly updated the user
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
					<script>$("#exampleModal2").modal("hide")</script>
				';
			} else {
				echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <strong>Error!</strong> failed
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>';
			}
			
	}
}
?>

