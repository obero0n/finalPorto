<?php
function getGraphic() {
  $db = getDataBase();
  $query = $db->prepare("SELECT * FROM Graphic INNER JOIN Img ON Graphic.image_idG = Img.img_id");
  $query->execute([]);
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $result;
}


 ?>
