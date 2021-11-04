<?php
  include "auth/connection.php";
  session_start();
  $m="";
  $conn = connect();
  include ('navbar.php');
  $id= $_SESSION['userid'];
  $sq= "SELECT * FROM users WHERE id='$id'";
  $thisUser= mysqli_fetch_assoc($conn->query($sq));
  
  $sql = "SELECT * FROM post ORDER BY id DESC";
  $post=$conn->query($sql);
  if(isset($_POST['submit'])){
    $title= $_POST['title'];
    $body= $_POST['body'];
    $author= $_POST['author'];
    $sql= "INSERT INTO post(title, body, author) VALUES ('$title', '$body', '$author')";
          if($conn->query($sql)===true){
            header('Location:home.php');
              $m= "Posted";
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
  <body style="background-color:green">
  <div style="padding:40px;" class="container">
<h3><?php echo $m;?></h3>
<h5>Post Your Wastage Amount</h5>
<form method="POST" action="home.php" style="padding:55px" class="row g-3">
<div class="col-md-6">
  <label for="exampleFormControlInput1" class="form-label">Wastage Item</label>
  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" require>
</div>
<div class="col-md-6">
  <label for="exampleFormControlInput1" class="form-label">Approximate Weight</label>
  <input type="number" name="title" class="form-control" id="exampleFormControlInput1" require>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Wastage Details</label>
  <textarea type="text" name="body" class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea>
</div>
<div class="mb-3">
  <input type="hidden" name="author" value="<?php echo $thisUser['name'];?>" class="form-control" id="exampleFormControlTextarea1" required></input>
</div>
<div class="col-12">
<button type="submit" value="submit" class="btn btn-success" name="submit">Post</button>
</div>
</div>
</form>
  <?php
   if(mysqli_num_rows($post)>0){
     while($row= mysqli_fetch_assoc($post)){
      echo "<div class='container'>";
      echo "<h4>";
      echo $row['title'];
      echo "</h4>";
      echo "<h6>";
      echo $row['body'];
      echo "</h6>";
      echo "<p>Posted By ".$row['author']."</p>";
      if($row['author']===$thisUser['name']){
        echo "<a href='editPost.php?id=".$row['id']."'><button style='margin: 0px 50px;' class='btn btn-primary'>Edit</button></a>";
        echo "<a href='deletePost.php?id=".$row['id']."'><button style='margin: 0px 50px;' class='btn btn-danger'>Delete</button></a>";
       }
      echo "</div>";  
    }
    }
  ?>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>