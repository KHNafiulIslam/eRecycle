<?php
  include "auth/connection.php";
  session_start();
  $m="";
  $conn = connect();
  include ('a-navbar.php');
  $id= $_SESSION['userid'];
  $sq= "SELECT * FROM users WHERE id='$id'";
  $thisUser= mysqli_fetch_assoc($conn->query($sq));
  
  $sql = "SELECT * FROM post ORDER BY id DESC";
  $post=$conn->query($sql);
  
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



body{
    margin-top:20px;
    background:#fff;
}

.avatar {
    position: relative;
    display: inline-block;
    width: 40px;
    white-space: nowrap;
    border-radius: 1000px;
    vertical-align: bottom
    
}

.avatar i {
    position: absolute;
    right: 0;
    bottom: 0;
    width: 10px;
    height: 10px;
    border: 2px solid #fff;
    border-radius: 100%
}

.avatar img {
    width: 100%;
    max-width: 100%;
    height: auto;
    border: 0 none;
    border-radius: 1000px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.avatar-online i {
    background-color: #4caf50
}

.avatar-off i {
    background-color: #616161
}

.avatar-busy i {
    background-color: #ff9800
}

.avatar-away i {
    background-color: #f44336
}

.avatar-100 {
    width: 100px
}

.avatar-100 i {
    height: 20px;
    width: 20px
}

.avatar-lg {
    width: 50px
}

.avatar-lg i {
    height: 12px;
    width: 12px
}

.avatar-sm {
    width: 30px
}

.avatar-sm i {
    height: 8px;
    width: 8px
}

.avatar-xs {
    width: 20px
}

.avatar-xs i {
    height: 7px;
    width: 7px
}

.list-group-item {
    position: relative;
    display: block;
    padding: 10px 15px;
    margin-bottom: -1px;
    background-color: #fff;
   /* border: 1px solid transparent; */
}


</style>

</head>

<body>
<br>
<br>
<br>
<div class="container">
<div class="row">
    <div class="col-md-6 col-xs-12 col-md-offset-3">
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Posts</h3>
        </div>
        <div class="panel-body">
          <ul class="list-group list-group-dividered list-group-full">
            <li class="list-group-item">
              <div class="media">
                <?php
   if(mysqli_num_rows($post)>0){
     while($row= mysqli_fetch_assoc($post)){
      echo "<div class='media-left'>";
      echo  " <a class='avatar avatar-online' href='javascript:void(0)'>";
      echo  " <img src='https://bootdey.com/img/Content/avatar/avatar1.png'>";
      echo  "<i></i>";
      echo  "</a>";
      echo  "</div>" ;
      echo "<div class='media-body'>";
      echo "<h4 class='media-heading'>".$row['author']."</h4>";
      echo "<hr class='margin-bottom-10'>";
      echo "<div class='container'>";
      echo "<h4>";
      echo $row['item'];
      echo "</h4>";
      echo "<h6>";
      echo "Approximate Weight: ";
      echo $row['weight'];
      echo "</h6>";
      echo "<p>";
      echo $row['details'];
      echo "</p>";
      echo "<h6>";
      echo $row['contact'];
      echo "</h6>";
      echo "</div>";
      echo "<hr class='margin-bottom-10'>";  
    }
    }
  ?>
                </div>
              </div>
            </li>
            
          </ul>
          
        </div>
      </div>
    </div>
</div>

</div>


</body>

</html>