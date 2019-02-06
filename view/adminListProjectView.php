<?php
include "view/template/headerAdmin.php";
?>

<div class="d-flex justify-content-around flex-wrap">
<?php foreach ($projects as $key => $project): ?>
  <div class="card m-2" style="width: 18rem;">
    <img class="card-img-top" src=<?php echo $project["image_src"]; ?> alt="Card image cap">
    <div class="card-body">
      <h3 class="display-8 text-center"><?php echo $project["Project_name"]; ?></h3>
      <p class="card-text"><?php echo $project["Project_description"]; ?></p>
    </div>
  </div>
<?php endforeach; ?>
</div>


<?php
include "view/template/footerAdmin.php"
?>
