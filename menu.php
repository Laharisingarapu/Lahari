<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Menu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        
        <nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <a href="logout.php"><input type="submit" name="" value="Logout" ></a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Restaurant Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Non-Veg Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ocean Treasures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Veg Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Noodle Mania</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Manchurian Delights</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Roti & Naan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Salads</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Desserts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Beverages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ice Creams</a>
          </li>
          
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<header>
<h1>Helloo welcome to menu page</h1>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

<?php 
   include("connection.php");
   error_reporting(0);

   $userprofile=$_SESSION['email'];
        if($userprofile == true)
        {
            
        }
        else{
          header('location:login.php');

        }


   

?>