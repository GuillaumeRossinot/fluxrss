<?php $title = "Login" ; ?>

<?php
require dirname(__FILE__).'/../controllers/logincontrollers.php';
?>

    <h2>Login</h2>

<div class="login">

    <form action="<?php dirname(__FILE__).'/?p=login' ?>" method="post">
        <label for="email">Login:</label>
        <input type="text" name="login" id="login"/><br />
        <label for="mdp">Mdp:</label>
        <input type="password" name="mdp" id="mdp"><br />
        <input type="submit" name="submit"/><br>
        <a href="?p=register"> Pas encore inscrit ?</a><br>
        <a href="?p=passoublier"> Mot de passe oublié?</a>
    </form>

    <label>Se souvenir de moi ?</label><input type="checkbox" name="souvenir" /><br />

</div>
