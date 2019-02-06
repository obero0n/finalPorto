<div class="container">
  <form class="" action="homeTreatment.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="formGroupExampleInput">Titre du projet</label>
      <input type="text" class="form-control" id="Project_name" name="Project_name">
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Rajouter une image/fichier</label>
      <input type="file" class="form-control-file" name="Project_image">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1"  id="Project_description">Description</label>
      <textarea class="form-control" name="Project_description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </form>

</div>
