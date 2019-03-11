<?php
//require("model/model.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" href="views/CSS/css.css" media="all"/>
<link rel="stylesheet" type="text/css" href="views/CSS/design.js" media="all"/>
</head>
<header>
<title><?php echo $title;?></title>
 <!--Header-->
 			<!-- Banniere -->

 <!-- <img src="./Images/banniere.png" > -->

  <!-- Ecrire tout le header içi-->

          <ul id="menuheader">
            <li>
              <a class="nav-link" href="?p=accueil">Accueil</a>
            </li>
          </ul>

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
          <a class="nav-link" href="?p=accueil">Accueil</a>
        </li>
    </ul>
	  <!-- Ecrire tout le footer içi-->
	  Copyrigth "Webmaster".
  </footer>
</html>
