<?php $title = "Accueil" ; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/views/CSS/css.css">
    <link rel="stylesheet" href="/views/CSS/design.js">
    <link href="https://fonts.googleapis.com/css?family=Risque|Yeseva+One" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<META HTTP-EQUIV="Refresh" CONTENT="3600; URL=index.php"> 
</head>
<body>


<P class="title">SPORT LORRAIN</p>

<!--  -->
<a href="#content_1" class="rubriques">Les dernières nouvelles d'Alsace</a>
<a href="#content_2" class="rubriques">Republicain Lorrain</a>
<a href="#content_3" class="rubriques">Est Republicain</a>
<a href="#content_4" class="rubriques">Vosges Matin</a>
<a href="#content_5" class="rubriques">L'alsace</a>


<?php require_once "./model/functions.php"; ?>
<div id="wrap" class="wrap">
 <!-- Affichage des flux rss trier par la fonction sur une page php -->
    <div id="mainContent">
      
    		<li>
            <div class="#" id="content_1">
              <a href="#content_1" class="selected">Les dernières nouvelles d'Alsace</a>
            </div>
        </li>
            <div id="content_1">
                <?php getFeed("https://www.dna.fr/une-sports/rss"); ?>
            </div><!--end content 1-->

    		<li>
          <div class="#" id="content_2">
            <a href="#content_2" class="RL">Republicain Lorrain</a>
          </div>
        </li>
    		<div id="content_2">
                <?php getFeed("https://www.republicain-lorrain.fr/sports/sport-lorrain/rss"); ?>
        </div><!--end content 2-->

    		<li>
          <div class="#" id="content_3">
            <a href="#content_3" class="ER">Est Republicain</a>
          </div>
        </li>
        <div id="content_3">
            <?php getFeed("https://www.estrepublicain.fr/sport-lorrain/rss"); ?>
        </div><!--end content 3-->

    		<li>
          <div class="#" id="content_4">
            <a href="#content_4" class="VM">Vosges Matin</a>
          </div>
        </li>
        <div id="content_4">
            <?php getFeed("https://www.vosgesmatin.fr/sport/sport-lorrain/rss"); ?>
        </div><!--end content 4-->

    		<li>
          <div class="#" id="content_5">
            <a href="#content_5" class="A">L'alsace</a>
          </div>
        </li>
        <div id="content_5">
            <?php getFeed("https://www.lalsace.fr/sport/rss"); ?>
        </div><!--end content 5-->

    </div><!--end main content -->

</div><!--end wrap-->
</body>
</html>
