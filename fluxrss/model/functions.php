
<?php

require 'model.php';

 // RĂ©cuperation du flux rss
function getFeed($feed_url) {

	global $bdd;

	$arrContextOptions=array(
		  "ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			),
		"http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        ),
		);
    //$content = file_get_contents($feed_url);
	$content = file_get_contents($feed_url, false, stream_context_create($arrContextOptions));
    $x = new SimpleXmlElement($content);
	

          // tri et affichage des flux rss par titre, description, lien, date et categorie.
    echo "<ul>";

    foreach($x->channel->item as $entry ) {
			
			$titre = $entry->title;
			$url = $entry->link;
			$datepub = $entry->pubDate;
			$desc = $entry->description;
			$category = $entry->category;
			$image = $entry->image;
			$auteur = $entry->auteur;
			$date = date("d-m-Y");

        echo "<fieldset class='fieldset'><br>

                  <div class='ss-titre-1'> <li> <b> Titre : </b> </li> </div>
      									<div class='ss-titre-2' >
                            <div class='contenu'>
      											      <a href='$entry->link' title='$entry->title' class='liens'>" . $entry->title . "</a>
      									     </div>
                        </div>

                  <div class='ss-titre-1'> <b> Description : </b> </div>
                  <div class='contenu'>" . $entry->description . "</div><br>

      						<div class='ss-titre-1'> <b> Lien : </b> </div>
                  <div class='ss-titre-2'>
                  <div class='contenu'>
      									<a href='$entry->link' link='$entry->link' class='liens'>" . $entry->link . "</a>
      						</div>
									</div><br>";
									
						 $requete = $bdd->prepare("INSERT INTO articles (daterecuperation,titrearticle,urlarticle,datepublication,description,categorie) 
						 				VALUES (:date,:titre,:url,:datepub,:desc,:category)");
						 $requete->bindParam('date', $date, PDO::PARAM_STR);
						 $requete->bindParam('titre', $titre, PDO::PARAM_STR);
						 $requete->bindParam('url', $url, PDO::PARAM_STR);
						 $requete->bindParam('datepub', $datepub, PDO::PARAM_STR);
						 $requete->bindParam('desc', $desc, PDO::PARAM_STR);
						 $requete->bindParam('category', $category, PDO::PARAM_STR);
						 $reponse = $requete->execute();

					 //echo "INSERT INTO articles (daterecuperation,titrearticle,urlarticle,datepublication,description,categorie) VALUES ('$date','$titre','$url','$datepub','$desc','$category')<br>";
				 
					 echo"</fieldset>";
    }
		echo "</ul>";
		
		echo"<ul class='pagination'>
				<li class='page-item'>
					<a class='page-link' href='#' aria-label='Previous'>
						<span aria-hidden='true'>&laquo;</span>
						<span class='sr-only'>Previous</span>
					</a>
				</li>
				<li class='page-item'><a class='page-link' href='#'>1</a></li>
				<li class='page-item'><a class='page-link' href='#'>2</a></li>
				<li class='page-item'><a class='page-link' href='#'>3</a></li>
				<li class='page-item'>
					<a class='page-link' href='#' aria-label='Next'>
						<span aria-hidden='true'>&raquo;</span>
						<span class='sr-only'>Next</span>
					</a>
				</li>
			</ul>";

}
?>


</body>
</html>
