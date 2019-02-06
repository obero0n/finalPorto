<?php

function getAdmin($post)
{
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM User WHERE First_name = :First_name AND Password = :Password");
  $query->execute([
    "First_name" => $post["First_name"],
    "Password" => $post["Password"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $user;
}

  function admin() {

    require "view/adminView.php";
  }
    function adminUpdateBio() {
      if (isset($_POST) && !empty($_POST)) {
        if(updateBio($_POST)) {
          redirectTo("ship");
          exit;
        }
  }

  require "view/adminUpdateBioView.php";
  }
  function adminListProject() {
      $projects = getProject();
  require "view/adminListProjectView.php";
  }
  function adminUpdateProject() {
  require "view/adminUpdateProjectView.php";
  }

  // add project don't work cause lastId recup 0 everytime////////////////////
  function adminAddProject() {

if (!empty($_POST)) {
    $src = "public/img/" . $_FILES["Project_image"]["name"];
    addImage($src,$_FILES["Project_image"]["name"]);
    $lastID = lastID();
    addProject($_POST ,$lastID);
    move_uploaded_file($_FILES["Project_image"]['tmp_name'],  $src);
  }
  require "view/adminAddProjectView.php";
  }
////////////////////////////////////////////////////////////////////////




 ?>
