<?php 
session_start();

//Alerte pour indiquer à l'utilisateur qu'il est bien déconnecté
echo '<script> alert("'. $_SESSION['firstname'] .' ' . $_SESSION['name'] . ', vous êtes déconnecté !") </script>';
//Laisser 0.01sec à la page avant la redirection 
header( "refresh:0.01; url=../index.php" );

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');

// echo '<script> alert("Vous êtes déconnecté !") </script>';
// echo '<meta http-equiv="refresh" content="0.01; URL=\'../index.php\'">';

// var_dump($_SESSION);