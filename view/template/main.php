<?php include "view/template/bubble.php"; ?>

<!-- ############################# Cards Start ############################# -->


<h2 class="text-center display-4" id="develeppement">Développement web</h2>
<div class="d-flex justify-content-around flex-wrap">
<?php foreach ($projects as $key => $project): ?>
  <div class="card m-2 bgdiver text-light" style="width: 25rem;">
    <img class="card-img-top" src=<?php echo $project["image_src"]; ?> alt="Card image cap">
    <div class="card-body">
      <h3 class="display-8 text-center"><?php echo $project["Project_name"]; ?></h3>
      <p class="card-text"><?php echo $project["Project_description"]; ?></p>
    </div>
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-end">
      <div class="m-4">
        <a href=<?php echo $project["github"]; ?> class="text-light"><i class="fab fa-github fa-3x"></i>github</a>
      </div>
    </div>

  </div>
<?php endforeach; ?>
</div>




              <!-- ############################# Cards End ############################# -->
<?php include "view/template/bubble.php"; ?>

        <!-- ############################# Carrousel Start ############################# -->
<h2 class="display-4 text-center" id="graphisme">Graphisme</h2>

<div class="container">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img class="d-block w-100" src="public/img/wallsign.png" alt="First slide" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/cartedevisiterecto.png" alt="Second slide" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/cartedevisiteverso.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/Projets_Perso-1.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/Projets_Perso-2.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/Projets_Perso-7.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/Projets_Perso-8.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/VECTO-6.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/VECTO-9.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/VECTO-10.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/VECTO-12.png" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="public/img/VECTO-13.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
        <!-- ############################# Carrousel End ############################# -->
  <?php include "view/template/bubble.php"; ?>

    <!-- ############################# CV Start ############################# -->
    <h2 class="display-4 text-center" id="cv">CV</h2>
    <div class="container">
<img src="public/img/Cv_simonPorto.png" class="img-fluid" alt="Responsive image">
    </div>

      <?php include "view/template/bubble.php"; ?>
    <!-- ############################# CV End ############################# -->
    <!-- ############################# Contact Start ############################# -->
    <h2 class="display-4 text-center" id="contact">Contacter</h2>
    <div class="container col-6 mb-5 opak">
        <?php include "view/form/contactform.php"; ?>
    </div>

    <!-- ############################# Contact End ############################# -->
