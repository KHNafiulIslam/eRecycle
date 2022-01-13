<?php
$user= $_SESSION['user'];
$userid= $_SESSION['userid'];

if(!$_SESSION['userid'])
    {
      header("Location:login.php");
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
  <body>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">eRecycle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="profile.php">My Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Current Price of Materials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Agent on different Location</a>
        </li>
      </ul>
      <li class="d-flex">
      <li  class="nav-link text-muted">
      <b>  <?php echo $user;?> </b>
      </li>
        <a href="logout.php">
        <button class="btn btn-danger" type="submit">LogOut</button></a>
      </li>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>