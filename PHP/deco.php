<?php 
include "BDD/sql.php";
include "BDD/functionsBdd.php";

session_start();

echo '<script> alert("  Vous êtes déconnecté !") </script>';
echo '<meta http-equiv="refresh" content="0.01; URL=\'../index.php\'">';

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

// Suppression des cookies de connexion automatique
setcookie('login', '');
setcookie('pass_hache', '');

// echo '<script> alert("Vous êtes déconnecté !") </script>';
// echo '<meta http-equiv="refresh" content="0.01; URL=\'../index.php\'">';

// var_dump($_SESSION);