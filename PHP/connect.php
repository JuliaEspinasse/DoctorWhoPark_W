<?php 
include "bdd/sql.php";

//  Récupération de l'utilisateur et de son pass hashé
$email = $_POST['email'];
$req = $bdd->prepare('SELECT id, mdp, name, firstname, role FROM user WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

if (!$resultat)
{
    echo '<script> alert("Mauvais identifiant ou mot de passe !") </script>';
    echo '<meta http-equiv="refresh" content="0.01; URL=\'../html/connection.php\'">';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $resultat['role'];
        $_SESSION['name'] = $resultat['name'];
        $_SESSION['firstname'] = $resultat['firstname'];
        echo '<script> alert("'.$_SESSION['firstname'].' '.$_SESSION['name'].' '.', vous êtes connecté !") </script>';
        echo '<meta http-equiv="refresh" content="0.01; URL=\'../index.php\'">';
    }
    else {
        echo '<script> alert("Mauvais identifiant ou mot de passe !") </script>';
        echo '<meta http-equiv="refresh" content="0.01; URL=\'../html/connection.php\'">';
    }
}