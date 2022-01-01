<?php
  include "auth/connection.php";
  session_start();
  $conn = connect();
  $_SESSION['user']='';
  $_SESSION['userid']='';
    $m='';
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $log = $conn->query($sql);

        if(mysqli_num_rows($log)===1){
          $user=mysqli_fetch_assoc($log);
          $_SESSION['user']=$user['name'];
          $_SESSION['userid']=$user['id'];
            header('Location: home.php');
        }else{
            $m='UserName or Password Mismatched!';
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
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .btn-primary,.btn-primary:hover,.btn-primary:active,.btn-primary:visited,.btn-primary:focus {
    background-color: #00d49f !important;
    border-color: #00d49f;

}
.btn-info, .btn-info:hover, .btn-info:active, .btn-info:visited, .btn-info:focus{
    color: white !important;
}

    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/heroes.css" rel="stylesheet">
  </head>
  <body>
    
<main>
  

  <div class="container col-xl-10 col-xxl-8 ">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1" style="margin-left: .5rem">eRecycle</h1>
        <p style="margin-left: .5rem" class="col-lg-10 fs-4">Recycle your waste, save energy, conserve resources and preserve the nature of the world. Recycle, It's Your Future.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
      <h1 style="text-align: center;"><?php echo $m;?></h1>
      <form method="POST" action="log-in.php" style="padding:55px">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" require>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Log in</button>
</form>
      </div>
    </div>
    <p>Lets Create account? <a href="sign-in.php" style="color: #00d49f ">Sign Up</a></p>

  </div>

</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>
