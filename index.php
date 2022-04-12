<?php require_once ('model.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Practicing Crud oop with ajax.</title>
  </head>
  <body>
    <section>
      <div class="container mt-5">
        <h3 class="text-center text-success">All users</h3>
         <hr style="height: 2px; color: red; background-color: red;">
      </div>

      <div  class="row  ">
        <div class="col-md-5 mx-auto">
          <form method="post" class="form-form" id="form">
            <div id="result"></div>
            <div class="form-group mt-2">
              <label>First Name:</label>
              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group mt-2">
              <label>Last Name:</label>
              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group mt-2">
              <label>Phone Number:</label>
              <input type="text" name="first_name"  id="phone_number" class="form-control" placeholder="Phone Number">
            </div>

            <div class="form-group mt-3">
             
              <button type="submit" id="submit" class="btn btn-primary">Add details</button>
            </div>
          </form>
        </div>
        <div class="row">
          <div class="col-md-12 mt-2 container">
            <div class="col-md-5 mx-auto"><div id="show"></div></div>
            <div id="fetch" class="table-responsive"></div>
          </div>
        </div>
      </div>

      <!-- Button trigger modal -->


<!-- read Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div id="read_data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- read Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div id="edit_data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update">Update Information</button>
      </div>
    </div>
  </div>
</div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <script src="main.js">
      
    </script>

    <style type="text/css">
      @media (max-width: 768px){
        .form-form{
          padding: 20px;
        }
        .btn{
          font-size: 10px;
        }
      }
    </style>
  </body>
</html>

