<?php $title = "Mon Compte"; 

require dirname(__FILE__).'/../controllers/accountcontrollers.php';
?>

<h1> Mon Compte </h1>

<?php


echo"
<div id='accountblock'>
  <h2>Bienvenue sur la page de gestion de votre compte !</h2>
    <p>
      Votre nom : $nom <br/>
      Votre prenom : $prenom <br/>
      Votre login : $login <br/>
      votre email : $email <br/>
      <br/>
      Pour modifier vos information personnelle rendez-vous sur le lien suivant : <a href = '?p=modifaccount'>modification information</a>.<br/>
    </p>
    </div>";
?>