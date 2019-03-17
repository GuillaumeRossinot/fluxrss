<?php
require dirname(__FILE__).'/../model/accountmodel.php';

if(monCompte()){
    $reponse = monCompte();
    $id_u = $reponse['id_u'];
    $nom = $reponse['nom'];
    $prenom = $reponse['prenom'];
    $email = $reponse['email'];
    $login = $reponse['login'];
    $password = $reponse['password'];
    $lvl = $reponse['lvl'];

}
