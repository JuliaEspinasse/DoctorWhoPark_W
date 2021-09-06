<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
    <link href="FONT/stylesheet.css" rel="stylesheet"/>
    <link href="CSS/style.css" rel="stylesheet"/>
</head>
<body>
    
</body>
</html>

<?php
include "sql.php";

// Vérification de la validité des informations
$reponse = $bdd->query('SELECT email FROM user WHERE email="'.$_POST['email'].'"');
$donnees = $reponse->fetch();
if($donnees)
{
    echo '<script> alert("Cette adresse est déjà utilisée") </script>';
    echo '<meta http-equiv="refresh" content="0.0001; URL=\'../HTML/connection.php\'">';
} 
else if ($_POST['mdp'] != $_POST['mdp1']){
    echo '<script> alert("mots de passes pas identiques") </script>';
    echo '<meta http-equiv="refresh" content="0.0001; URL=\'../HTML/connection.php\'">';
} 
else {
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    // Insertion
    $req = $bdd->prepare('INSERT INTO user(name, firstname, mdp, email, date_inscription) VALUES(:name, :firstname, :mdp, :email, CURDATE())');
    $req->execute(array(
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname'],
        'mdp' => $pass_hache,
        'email' => $_POST['email']));

    echo '<script> alert("Félicitation! Votre compte à bien été créé") </script>';
    echo '<meta http-equiv="refresh" content="0.0001; URL=\'../HTML/connection.php\'">';
}   
