<?php
//require("model/model.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./views/CSS/css.css">
    <link rel="stylesheet" href="./views/CSS/design.js">
    <link href="https://fonts.googleapis.com/css?family=Risque|Yeseva+One" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<META HTTP-EQUIV="Refresh" CONTENT="3600; URL=index.php"> 
</head>
<header>
<title><?php echo $title;?></title>

<P class="title">SPORT LORRAIN</p>
 <!--Header-->
 			<!-- Banniere -->

 <!-- <img src="./Images/banniere.png" > -->

  <!-- Ecrire tout le header içi-->
  <nav  id="nav-header">
          <ul>
            <li>
              <a href="?p=accueil">Accueil</a>
            </li>

            <li>
              <a href="?p=lastalsacenews">Les dernières nouvelles d'Alsace</a>
            </li>

            <li>
              <a href="?p=republicainlorrain">Republicain Lorrain</a>
            </li>

            <li>
              <a href="?p=estrepublicain">Est Republicain</a>
            </li>

            <li>
              <a href="?p=vosgesmatin">Vosges Matin</a>
            </li>

            <li>
              <a href="?p=alsace">L'alsace</a>
            </li>

            <?php

              if(isset ($_SESSION ['connecte']))
              {
              //print_r($_SESSION['lvl']);
              $id_u = $_SESSION['id_u'];
              $lvl = $_SESSION['lvl'];
              if($lvl >= 0){
              //print_r($lvl);
			      ?>
              <!-- si l'utilisateur est connecter affiche les pages -->
                  <li>
                    <a href="?p=logout">Déconnection</a>
                  </li>
                  <li>
                    <a href="?p=account">Mon Compte</a>
                  </li>
                <?php
                if($lvl == 3){
                ?>
                  <li>
                  <a href="?p=admin">Panneau administrateur</a>
                </li>
            <?php
                  }
                }
              }
            else //ou si pas connecter connexion / inscription
            {
            ?>

            <li>
              <a href="?p=login">Connection</a>
            </li>

            <li>
              <a href="?p=register">Inscription</a>
            </li>
            <?php
                }
              ?>

          </ul>
    </nav>
 </header>


  <body>
   <!--ne pas modifier cette partie-->
	<?= $content ?>
  </body>

<footer>
  			<!-- footer -->
<h3> footer </h3>
	<h4>Pages du site</h4>
    <ul id="menufooter">
      <li>
        <a href="?p=accueil">Accueil</a>
      </li>

      <li>
        <a href="?p=lastalsacenews">Les dernières nouvelles d'Alsace</a>
      </li>

      <li>
       <a href="?p=republicainlorrain">Republicain Lorrain</a>
      </li>

      <li>
        <a href="?p=estrepublicain">Est Republicain</a>
       </li>

      <li>
        <a href="?p=vosgesmatin">Vosges Matin</a>
      </li>
    </ul>
	  <!-- Ecrire tout le footer içi-->
	  Copyrigth "Webmaster".
  </footer>
</html>
