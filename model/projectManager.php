<?php

function getMessages($userId) {
  $db = getDataBase();
  $query = $db->prepare("SELECT m.*, u.pseudo FROM message AS m INNER JOIN users AS u ON m.sender = u.id WHERE getter = ?");
  $query->execute([$userId]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function addMessage($message, $sender) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO message(content, date, sender, getter, object) VALUES (:content, NOW(), :sender, :getter, :object)");
  $result = $query->execute([
    "content" => $message["content"],
    "sender" => $sender,
    "getter" => $message["pseudo"],
    "object" => $message["object"]
  ]);
  $query->closeCursor();
  return $result;
}
// project ###################################################################
function addProject($Project ,$lastID) {
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO Project (Project_name, Project_description, image_id) VALUES(?, ?, ? )");
  $result = $query->execute([$Project["Project_name"],$Project["Project_description"],$lastID["id_image"]]);
    return $result;
}

function getProject() {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM Project INNER JOIN Image ON Project.image_id = Image.id_image");
  $query->execute([]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}

function lastID(){
  $db = getDataBase();
  $query = $db->query("SELECT id_image FROM Image ORDER BY id_image DESC");
  $stuff = $query->fetch(PDO::FETCH_ASSOC);
  return $stuff;
}





// image###################################################################
function updateImage($src,$name,$db){
  $query = $db->prepare("UPDATE Image (image_name,image_src) VALUES (? , ?)");
  $query->execute([$name,$src]);
}
function addImage($src,$name){
  $db = getDataBase();
  $query = $db->prepare("INSERT INTO Image (image_name,image_src) VALUES (? , ?)");
  $result = $query->execute([$name,$src]);

  return $result;
}
// end image###################################################################
// Bio ###################################################################
function getBio() {
    $db = getDataBase();
  $query = $db->query("SELECT * FROM Biography");
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}
function updateBio($bio) {
  $db = getDataBase();
  $query = $db->prepare("UPDATE Biography SET Biography_text = :Biography_text");
  $result = $query->execute([
    "Biography_text" => $bio["Biography_text"]
  ]);
  return $result;
}
// end Bio ###################################################################


 ?>
