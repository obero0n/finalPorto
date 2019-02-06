<?php
require "model/adminManager.php";

restrictToUser();
function loginAdmin()
{
  if(!empty($_POST))
  {
    // We looking for the user in the db
    $user = getAdmin($_POST);
    $name = $_POST["First_name"];
$password = $_POST["Password"];
    //On nettoie les entrées du formulaire
    $_POST = clearForm($_POST);
    if ($name === $user["First_name"] && $password === $user["Password"]) {
        redirectTo("ship");
    }
    else {
      redirectTo("adminConnection");
    }

}
  require "view/adminloginView.php";
}




 ?>
