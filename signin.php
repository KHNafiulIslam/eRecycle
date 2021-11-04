<?php
  include "auth/connection.php";
  $conn = connect();
  $m="";
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email']?$_POST['email']:'';
    $location = $_POST['location'];
    $postal_code = $_POST['postal'];
    $job = $_POST['job'];
    $password = $_POST['password'];
    $password = md5($password);
    $sq="INSERT INTO users (name,email,location,postal,job,password) 
    VALUES('$name','$email','$location','$postal_code','$job','$password')";
    if($conn->query($sq)===true){
      header('Location: login.php');
    }else{
      $m = 'Connection not Established';
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>eRecycle</title>
  </head>
  <body style="background-color:green">
<nav class="navbar navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      eRecycle
    </a>
  </div>
</nav>
<div class="container" style="padding:55px">
<h1 style="text-align: center;"><?php echo $m;?></h1>
<form method="POST" action="signin.php" class="row g-3">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Location</label>
    <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="col-md-6">
    <label for="exampleInputEmail1" class="form-label">Postal Code</label>
    <input type="number" name="postal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Job</label>
    <input type="text" name="job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" require>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="col-12">
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<p>Already have account? <a href="login.php">Log In</a></p>
<p style="color:blue">Check Your Postal Code: <a href="https://postal-codes.net/Bangladesh_postcodes/Dhaka_Postal_codes.html?fbclid=IwAR12eevmRAE76hq7bIAvZ10nmhyTvCF6XQH-foSyQfK_enRiMrqchpW5o80">Postal Code</a></p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>