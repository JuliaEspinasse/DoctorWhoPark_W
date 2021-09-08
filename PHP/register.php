<?php
include "bdd/sql.php";

// Vérification de la validité des informations
$reponse = $bdd->query('SELECT email FROM user WHERE email="'.$_POST['email'].'"');
$donnees = $reponse->fetch();
if($donnees)
{
    echo '<script> alert("Cette adresse est déjà utilisée") </script>';
    echo '<meta http-equiv="refresh" content="0.0001; URL=\'../html/connection.php\'">';
} 
else if ($_POST['mdp'] != $_POST['mdp1']){
    echo '<script> alert("mots de passes pas identiques") </script>';
    echo '<meta http-equiv="refresh" content="0.0001; URL=\'../html/connection.php\'">';
} 
else {
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    // Insertion
    $req = $bdd->prepare('INSERT INTO user(name, firstname, mdp, email, date_inscription, role) VALUES(:name, :firstname, :mdp, :email, CURDATE(), "user")');
    $req->execute(array(
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname'],
        'mdp' => $pass_hache,
        'email' => $_POST['email']));

    echo '<script> alert("Félicitation! Votre compte à bien été créé") </script>';
    echo '<meta http-equiv="refresh" content="0.0001; URL=\'../html/connection.php\'">';
}   
