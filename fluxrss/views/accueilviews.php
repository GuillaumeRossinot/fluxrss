<?php $title = "Accueil" ; ?>

<h1>Accueil</h1>

<div id='accueilmessage'>
  
<?php

if(isset ($_SESSION ['connecte']))
{
//print_r($_SESSION['lvl']);
$id_u = $_SESSION['id_u'];
$lvl = $_SESSION['lvl'];
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];

echo "
<div id='accueilblock'>
    <h2>Bienvenue $nom, $prenom !</h2>

    <p><br/>
    Merci de visiter notre site internet qui regroupe les flux RSS des sites suivant:<br/>
    <br/>
      - <a href = '?p=lastalsacenews'>Les dernières nouvelles d'Alsace</a><br/>
      - <a href = '?p=republicainlorrain'>Republicain Lorrain</a><br/>
      - <a href = '?p=estrepublicain'>Est Republicain</a><br/>
      - <a href = '?p=vosgesmatin'>Vosges Matin</a><br/>
      - <a href = '?p=alsace'>L'alsace</a><br/>
      <br/>
      Vous pouvez acceder a votre compte en suivant le lien suivant : <a href = '?p=account'>mon compte</a>.<br/>
      <br/>
      Nous vous souhaitons une agreable visite.<br/>
      <br/>
    </p>";
  
    }
    else {
      echo "
    <h2>Bienvenue !</h2>

    <p><br/>
    Merci de visiter notre site internet qui regroupe les flux RSS des sites suivant:<br/>
    <br/>
    - <a href = '?p=lastalsacenews'>Les dernières nouvelles d'Alsace</a><br/>
    - <a href = '?p=republicainlorrain'>Republicain Lorrain</a><br/>
    - <a href = '?p=estrepublicain'>Est Republicain</a><br/>
    - <a href = '?p=vosgesmatin'>Vosges Matin</a><br/>
    - <a href = '?p=alsace'>L'alsace</a><br/>
      <br/>
      Nous vous souhaitons une agreable visite.<br/>
      <br/>
    </p>
  </div>";
  }
?>
</div>
