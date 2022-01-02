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
      header('Location: log-in.php');
    }else{
      $m = 'Connection not Established';
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>


    <!-- Bootstrap core CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->

<link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">

<meta name="theme-color" content="#7952b3">


    <style>
      

.main {
    background-color: #fff
}

.mycol {
    
}

.xcol {
    padding-left: 60px;
    padding-right: 30px
}

.title {
    font-weight: ;
    
}
.btn-primary,.btn-primary:hover,.btn-primary:active,.btn-primary:visited,.btn-primary:focus {
    background-color: #00d49f !important;
    border-color: #00d49f;
.btn {
    background-color: #00d49f !important;
    border-color: #00d49f;
    width: 100%;
    height: 50px;
    
    
}



a {
    text-decoration: underline;
    color: #00d49f !important
    
}

/*.form-control {
    border: none;
    box-shadow: 0px 0.1px 0px 0px #dae0e5;
    border-radius: 0
} */


.form-contro input [type="text"],
.form-control input [type="email"],
.form-control input [type="password"] {
    color: black
}

.form-control:focus {
    outline: 0;
    box-shadow: 0px 0.5px 0px 0px #dae0e5 !important
}

.form-control-placeholder, {
    position: absolute;
    top: 0;
    padding: 7px 0 0 0;
    transition: all 300ms;
    opacity: 0.5
}

.form-control:focus+.form-control-placeholder,
.form-control:valid+.form-control-placeholder {
    font-size: 80% !important;
    transform: translate3d(0, -100%, 0) !important;
    opacity: 1 !important
}


    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/home.css" rel="stylesheet">
  </head>
  <body>
    
<main>
  

<div class="container justify-content-center my-5">
    <div class="row ">
        <!--left-column-->
        <div class="col-md-4 col-12 mycol">
            <!--image--> <img src="img/img1.jpg" width="110%" height="100%" > </div>
        <!--right-column-->
        <div class="col-md-8 col-12 xcol">
        <h1 style="text-align: center;"><?php echo $m;?></h1>
            <h2 class="title pt-4" >Sign Up</h2>
            <form method="POST" action="sign-in.php" class="row g-3">
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
        </div>
    </div>
<p>Already have account? <a href="log-in.php">Log In</a></p>
<p style="color:blue">Check Your Postal Code: <a href="https://postal-codes.net/Bangladesh_postcodes/Dhaka_Postal_codes.html?fbclid=IwAR12eevmRAE76hq7bIAvZ10nmhyTvCF6XQH-foSyQfK_enRiMrqchpW5o80">Postal Code</a></p>

</div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>
