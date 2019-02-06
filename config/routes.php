<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "role" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "home",
      "welcome"
    ],
    "adminConnection" => [
    "admin",
    "loginAdmin"
    ],
    "ship" => [
      "admin",
      "admin"
    ],
    "allProjects" => [
      "admin",
      "adminListProject"
    ],
    "updateProject" => [
      "admin",
      "adminUpdateProject"
    ],
    "addProject" => [
      "admin",
      "adminAddProject"
    ],
    "updateBio" => [
      "admin",
      "adminUpdateBio"
    ]

  ];
}

 ?>
