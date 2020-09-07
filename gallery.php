<?php
require 'view/header.php';
require 'identifier.php';
require 'autoloadclass.php';
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50" src="" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<?php
require 'view/footer.php';
?>