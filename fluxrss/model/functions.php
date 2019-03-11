

<?php

 // Récuperation du flux rss
function getFeed($feed_url) {

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

    foreach($x->channel->item as $entry) {
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
                  </div><br>


      						<div class='ss-titre-1'> <b> Date de publication : </b> </div>
                  <div class='contenu'> " . $entry->pubDate . "</div><br>

      						<div class='ss-titre-1'> <b> Category : </b> </div>
                  <div class='contenu'> " . $entry->category . "</div>

						 </fieldset>";
						 
    }
    echo "</ul>";
	
/* 	foreach($x->channel->item as $entry){
		$titre = $x->channel->item->title;
		$url = $x->channel->item->link;
		$datepub = $x->channel->item->pubDate;
		$desc = $x->channel->item->description;
		$category = $x->channel->item->category;
		$image = $x->channel->item->image;
		$auteur = $x->channel->item->auteur;
		//$requete = $bdd->query("INSERT INTO articles (daterecuperation,titrearticle,urlarticle,datepublication,description,categorie,imagedescription,auteur) 
								//VALUES ('CURRENT_TIMESTAMP(),$titre,$url,$datepub,$desc,$category,$image,$auteur'));
		//$reponse = $requete->fecth();
		echo"INSERT INTO articles (daterecuperation,titrearticle,urlarticle,datepublication,description,categorie) VALUES ('CURRENT_TIMESTAMP(),$titre,$url,$datepub,$desc,$category')<br>";
	} */


}
?>


</body>
</html>
