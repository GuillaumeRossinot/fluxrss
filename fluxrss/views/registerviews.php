<?php $title = "Register" ; ?>

<h1>Inscription</h1>

<?php
require dirname(__FILE__).'/../controllers/registercontrollers.php';
?>

<div class="register">

<form method="post" action="<?php dirname(__FILE__).'/?p=register' ?>">

    Votre login : <input type="text" name="Login" value="<?php
        if(isFilledField($Login))
            echo $Login;?>"><br>

    Votre nom : <input type="text" name="Nom" value="<?php
    if(isFilledField($Nom))
        echo $Nom;?>"><br>

    Votre prénom : <input type="text" name="Prenom" value="<?php
      if(isFilledField($Prenom))
        echo $Prenom;?>"> <br>

    Votre E-Mail : <input type="text" name="Email" value="<?php
      if(isFilledField($Email))
        echo $Email;?>"> <br>

    Votre mot de passe : <input type="password" name="Mdp"> <br>


    <input type="submit" name="submit">
  </form>
</div>