<?php
    include "auth/connection.php";
    session_start();
    $conn = connect();
    include ('navbar.php');

    $id= $_SESSION['userid'];
    $sq= "SELECT * FROM users WHERE id='$id'";
    $thisUser= mysqli_fetch_assoc($conn->query($sq));

    if(isset($_POST['submit'])){
        $_POST['pass'] = md5($_POST['pass']);
        if($thisUser['password']==$_POST['pass']){
            $sq= "UPDATE users SET ";
            if(isset($_POST['name'])){
                $name= $_POST['name'];
                if($name!= $thisUser['name']){
                    $sq .= "name = '$name',";
                }
            }
            if(isset($_POST['email'])){
                $email= $_POST['email'];
                if($name!= $thisUser['email']){
                    $sq .= "email = '$email',";
                }
            }
            if(isset($_POST['location'])){
              $location= $_POST['location'];
              if($name!= $thisUser['location']){
                  $sq .= "location = '$location',";
              }
              if(isset($_POST['postal'])){
                $postal= $_POST['postal'];
                if($name!= $thisUser['postal']){
                    $sq .= "postal = '$postal',";
                }
          }
        }
          $_POST['npass']=md5($_POST['npass']);
          $_POST['cpass']=md5($_POST['cpass']);
            if(isset($_POST['npass'])&& $_POST['npass']!=''&& isset($_POST['cpass'])&& $_POST['cpass']!=''){
                if($_POST['npass']==$_POST['cpass']){
                    $pass= $_POST['npass'];
                    if($pass!=$thisUser['password']){
                        $sq .="password= '$pass',";
                    }
                }
            }
            $sq= substr($sq, 0,-1);
            $sq .=" WHERE id='$id'";
            $conn->query($sq);
            header("Location: profile.php");
        } else{
            $m= "Credentials mismatch!";
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/home.css" rel="stylesheet">
    <title>eRecycle</title>
  </head>
  <div class="container">
  <form method="POST" action="editProfile.php" enctype="multipart/form-data">
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="uname" class="form-label"> Name</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="name" type="text" class="form-control" placeholder="Name" id="name" value="<?php echo $thisUser['name']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="email" class="form-label"> Email </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="email" type="text" class="form-control" placeholder="Email Address" value="<?php echo $thisUser['email']; ?>" id="buy" required>
                                            </div>
                                        </div>   
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="location" class="form-label"> Location </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="location" type="text" class="form-control" placeholder="Location" value="<?php echo $thisUser['location']; ?>" id="buy" required>
                                            </div>
                                        </div>
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="postal" class="form-label"> Postal Code </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="postal" type="number" class="form-control" placeholder="Postal Code" value="<?php echo $thisUser['postal']; ?>" id="buy" required>
                                            </div>
                                        </div>
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="pass" class="form-label"> Password</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="pass" class="form-control" type="password" id="pass" required>
                                            </div>
                                        </div>
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="npass" class="form-label">New Password</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="npass" class="form-control" type="password" id="npass" >
                                            </div>
                                        </div>
                                        <div class="form-group pt-20">
                                            <div class="col-sm-4">
                                                <label for="cpass" class="form-label">Confirm New Password</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input name="cpass" class="form-control" type="password" id="cpass" >
                                            </div>
                                        </div>
                                        <button style="margin: 10px 0px;" type="submit" value="submit" name="submit" class="btn btn-primary">Change</button>
      
  </form>
  </div>
  <body style="background-color:green">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>