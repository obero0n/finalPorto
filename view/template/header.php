<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet"  <?php setHref("public/css/main.css") ?>>
    <link rel="stylesheet" <?php setHref("public/css/normalize.css") ?>>
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <title></title>
  </head>
  <body class="full">
  <header>
    <?php include "navBar.php"; ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container p-0">
    <!-- <h1 class="display-4 text-center">Simon</h1> -->
    <div id="simonTitre">
    <h1 class="display-1 text-center m-0 pt-5"><span class="spancolor">S</span>im<span><img id="simon" src="public/img/onglet.png" alt=""></span>n</h1>
    </div>


    <h2 class="display-5 text-center text-light m-5">Developpeur Jr</h2>
    <div class="container row p-0 m-0 align-items-center justify-content-center">
      <img src="public/img/portfolioPhoto.jpg" class="rounded-circle img-fluid" width="280" alt="">
    </div>
  </div>
  <div class="container mt-5 p-0 text-center">
    <p class="h5 text-white"><?php echo $biography["Biography_text"];?></p>
  </div>
</div>
</header>
<main>
