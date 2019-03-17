<?php $title = "Republicain Lorrain" ; ?>

<?php require_once "./model/functions.php"; ?>

<div id="wrap" class="wrap">
 <!-- Affichage des flux rss trier par la fonction sur une page php -->
    <div id="mainContent">
      
    		<li>
            <div class="#" id="content_1">
              <a href="#content_1" class="selected">Republicain Lorrain</a>
            </div>
        </li>
        
            <div id="content_1">
                <?php getFeed("https://www.republicain-lorrain.fr/sports/sport-lorrain/rss"); ?>
            </div><!--end content 1-->
    </div><!--end main content -->

</div><!--end wrap-->