<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>eRecycle</title>
  </head>
  <body style="background-color:green">
  <nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">eRecycle</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login As User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login As Agent</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Current Price of Materials</a></li>
            <li><a class="dropdown-item" href="#">Agent on different Location</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Waste Collection History</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- end navbar -->
<div class="card text-white bg-success mb-3" style="max-width: 840px; max-height: 280px; margin: 0 auto;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img/img.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">eRecycle</h5>
        <p class="card-text">Despite the fact that recycling is the most cost-effective and environmentally benign way
to reduce the country’s massive plastic waste, recycling programs in Bangladesh are still in
their infancy. More often than not, people simply leave the plastic garbage in open areas,
along the roadside, in rivers, or on the seashore, rather than properly disposing of it so that
it can be recycled.</p>
      </div>
    </div>
  </div>
<div class="d-grid gap-2 d-md-block">
<div class="float-end" style="padding:15px">
<a href="signin.php">
  <button class="btn btn-info" type="button">User Sing In</button></a>
<a href="">  
   <button class="btn btn-dark" type="button">Agent Sign In</button></a>
</div>
</div>
</div>
<!-- end card -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>