<!DOCTYPE html>
<html>
    <head>
        <title> Restaurant</title>
        <link rel="stylesheet" href="index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Add your custom styles here */
    .carousel-inner .carousel-item img{
        
        margin: 0 auto;
        transition: transform 1s ease, opacity .3s ease-out
    }
  </style>

    </head>
    <body>
        <header>
        <div class="container">
            <h1 class="logo"> Restaurant</h1>
            <nav>
                
                <ul class="nav-list">
                    <li><a href="#" >Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="#">My orders</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">SignUp</a></li>
                </ul>
                <div class="menu-toggle">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.querySelector('.menu-toggle');
            const navList = document.querySelector('.nav-list');
    
            menuToggle.addEventListener('click', () => {
                navList.classList.toggle('active');
            });
        });
    </script>
    <section class="hero">  
          
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/main1.jpg" class="d-block w-100" width="800" height="600" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 place-items="center"><b>Welcome</b></h1>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/chef.jpg" class="d-block w-100"  width="800" height="600" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/table.jpg" class="d-block w-100" width="800" height="600" alt="...">
    </div>
  </div>
</div>
    </section>

    <section class="recipes">
        <h1> Featured Menu</h1>
        <div class="recipe-section">
            <div class="recipe-card">
                <img src="images/non-veg.jpeg" alt="">
                <h2>Non-Veg Items</h2>
                <p>Savor the rich flavors of our expertly prepared meat dishes. 
                </p>
                <a href="login.php"> view items</a>

            </div>
            <div class="recipe-card">
                <img src="images/seafood.jpg" alt="">
                <h2>Ocean Treasures</h2>
                <p>Dive into our seafood dishes, from shrimp to flavorful fish. 
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/veg.jpeg" alt="">
                <h2>Veg Items</h2>
                <p>Discover delicious and vibrant vegetarian creations, bursting with flavor.
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/noodles.jpg" alt="">
                <h2>Noodle Mania</h2>
                <p>Indulge in our flavorful noodle dishes, from classic stir-fries to conforting bowls. 
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/manchuria.jpg" alt="">
                <h2>Manchurian Delights</h2>
                <p>Experience the indo-chinese fusion of our flavorful dishes both veg and non-veg.
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/roti-naan.jpg" alt="">
                <h2>Roti & Naan</h2>
                <p>Enjoy a selection of freshly baked Indian breads, from fluffy Naan to Roti.
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/salad.jpeg" alt="">
                <h2>Salads</h2>
                <p>Enjoy our vibrant salads, made with the fresh ingredients and light dressings.
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/dessert.jpeg" alt="">
                <h2>Desserts</h2>
                <p>Delicious Desserts 
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/beverages.jpeg" alt="">
                <h2>Beverages</h2>
                <p>Cool Beverages  
                </p>
                <a href="login.php"> view items</a>

            </div>

            <div class="recipe-card">
                <img src="images/icecream.jpeg" alt="">
                <h2>Ice Creams</h2>
                <p>Tasty Ice creams 
                </p>
                <a href="login.php"> view items</a>

            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>