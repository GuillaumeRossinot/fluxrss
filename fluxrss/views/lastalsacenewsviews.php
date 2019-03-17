<?php $title = "Les dernières nouvelles d'Alsace" ; ?>

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
    </div><!--end main content -->

</div><!--end wrap-->