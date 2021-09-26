<?php 
include "../bdd/sql.php";

//  Récupération de l'utilisateur et de son pass hashé
$email = $_POST['email'];
$req = $bdd->prepare('SELECT id_User, mdp, name, firstname, id_role FROM user WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);

if (!$resultat)
{
    echo '<script> alert("Mauvais identifiant ou mot de passe !") </script>';
    header( "refresh:0.01; url=../view/connection.php" );
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id_User'] = $resultat['id_User'];
        $_SESSION['email'] = $email;
        $_SESSION['id_role'] = $resultat['id_role'];
        $_SESSION['name'] = $resultat['name'];
        $_SESSION['firstname'] = $resultat['firstname'];
        
        echo '<script> alert("Bonjour '.$_SESSION['firstname'].' '.$_SESSION['name'].' '.' !") </script>';
        header( "refresh:0.01; url=../index.php" );
    }
    else {
        echo '<script> alert("Mauvais identifiant ou mot de passe !") </script>';
        header( "refresh:0.01; url=../view/connection.php" );
    }
}