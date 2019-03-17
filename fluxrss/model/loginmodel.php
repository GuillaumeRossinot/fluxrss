<?php

require ("model.php");

function getUserIFExists()
{
    global $bdd;
    if(isset($_POST['submit'])) // Verifie si le compte utilisateur existe
    {
            $login = $_POST['login'];
            $mdp = sha1($_POST['mdp']);

            //echo "SELECT id_u, email FROM user WHERE login = '".$login."' AND password = '".$mdp."'";
            //var_dump($bdd);

            $requete = $bdd->query("SELECT * FROM user WHERE login = '$login' AND password = '$mdp'");

            if($reponse = $requete->fetch())
            {
                $_SESSION['connecte'] = true;
                echo "authent ok";
                header("Location:?p=accueil");
                return $reponse;
            }

            else
            {

                 echo "Mauvais Identifiants. <br>";

            }


    }

    if (isset($_POST['souvenir'])) // ajout d'un cookie de connexion si l'utilisateur coche se souvenir

    {

    $expire = time() + 365*24*3600;

    setcookie('email', $_SESSION['email'], $expire);

    }
}
