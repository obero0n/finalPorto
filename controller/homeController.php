<?php
require "model/projectManager.php";
require "model/graphicManager.php";


  function welcome() {
    $projects = getProject();
    $biography = getBio();
    $graphics = getGraphic();

    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     // Code PHP pour traiter l'envoi de l'email

     $nombreErreur = 0; // Variable qui compte le nombre d'erreur

     // Définit toutes les erreurs possibles
     if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
       $nombreErreur++; // On incrémente la variable qui compte les erreurs
       $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
     } else { // Sinon, cela signifie que la variable existe (c'est normal)
       if (empty($_POST['email'])) { // Si la variable est vide
         $nombreErreur++; // On incrémente la variable qui compte les erreurs
         $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
       } else {
         if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
           $nombreErreur++; // On incrémente la variable qui compte les erreurs
           $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
         }
       }
     }

     if (!isset($_POST['subject'])) {
       $nombreErreur++;
       $erreur4 = '<p>Il y a un problème avec la variable "sujet".</p>';
     } else {
       if (empty($_POST['subject'])) {
         $nombreErreur++;
         $erreur5 = '<p>Vous avez oublié de donner un sujet.</p>';
       }
     }

     if (!isset($_POST['message'])) {
       $nombreErreur++;
       $erreur6 = '<p>Il y a un problème avec la variable "message".</p>';
     } else {
       if (empty($_POST['message'])) {
         $nombreErreur++;
         $erreur7 = '<p>Vous avez oublié de donner un message.</p>';
       }
     }

     if ($nombreErreur==0) { // S'il n'y a pas d'erreur
       // Récupération des variables et sécurisation des données
       $nom = htmlentities($_POST['name']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
       $email = htmlentities($_POST['email']);
       $subject = htmlentities($_POST['subject']);
       $message = htmlentities($_POST['message']);

       // Variables concernant l'email
       $destinataire = 'simon.dubuis.design@gmail.com'; // Adresse email du webmaster
       $sujet = ''.$subject.''; // Titre de l'email
       $contenu = '<html><head><title>Titre du message</title></head><body>';
       $contenu .= '<p>Bonjour, vous avez re&ccedil;u un message &agrave; partir de votre site web.</p>';
       $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
       $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
       $contenu .= '<p><strong>Sujet</strong>: '.$subject.'</p>';
       $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
       $contenu .= '</body></html>'; // Contenu du message de l'email

       // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
       $headers = 'MIME-Version: 1.0'."\r\n";
       $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

       @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email

       echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
     } else { // S'il y a un moins une erreur
       echo '<div style="border:1px solid #ff0000; padding:5px;">';
       echo '<p style="color:red;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
       if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
       if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
       if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
       if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
       if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
        if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
       if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
       echo '</div>';
     }
    }
      require "view/homeView.php";
  }





 ?>
