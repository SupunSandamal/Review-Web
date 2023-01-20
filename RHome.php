<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/Review .css">
  <link rel="stylesheet" href="CSS/phone.css">
  <title>Navbar</title>

</head>

<body>
  <?php
  include "html/navbar.html";
  ?>

  <div class="main">
    <div class="card bg-dark">
      <img src="Image/home.jpg" class="card-img ima" alt="...">
      <div class="card-img-overlay">
        <p class="card-text texhed">"Read reviews. Write reviews. Find products you can trust."</p>
        <p class="card-text sutex">We look at how we can bring trust between companies and consumers</p>

      </div>
    </div>

    <div class="container">
      <form action="./PHP/search.php" method="post" class=" position-absolute top-50 start-50 translate-middle bar">
        <i class=" fas fa-search success"></i>
        <input type="text" class="" placeholder="Enter key" name="key">
        <button type="submit" class="btn btn-outline-success" style="padding: 10px 30px; border-radius: 50px;" name="search">Search</button>
      </form>
    </div>
  </div>

  <div id="category" class="container cahead cahead">
    <h1 class="cecate">Category</h1>
    <div class="d-flex flex-row">
      <div class="btn-bg bg-1">
        <div class="btn btn-1">
          <button class="btn btn-1" href="#"><a href="HTML/phone.php" class="text-decoration-none">Phone </a></button>
        </div>
      </div>

      <div class="btn-bg bg-1">
        <div class="btn btn-1">
          <button href="HTML/desktop.php"><a href="HTML/dekstop.php" class="text-decoration-none">Desktop </a></button>
        </div>
      </div>

      <div class="btn-bg bg-1">
        <div class="btn btn-1">
          <button href="HTML/desktop.php">Laptop</button>
        </div>
      </div>
    </div>
  </div>
  <!-- </div> -->

  <div class=" abcolor">
    <h1 id="about" class="about">About Us</h1>
    <div class="pabox container">

      <div class="card abcar flex-row">
        <img src="image/about.jpg" class="card-img catimg" alt="...">
      </div>

      <div class="card abcar flex-row">

        <div class="textabou texta">Infogiver is a review plat form open to everyone. Share your experiences to help others make better <br><br>
          <p>"Read reviews. Write reviews. Find products you can trust"</p>
        </div>

      </div>
    </div>
  </div>

  <?php
  include "html/footer.html";
  ?>
</body>

</html>