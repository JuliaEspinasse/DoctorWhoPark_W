<?php
include "../bdd/sql.php";

// Vérification de la validité des informations
$reponse = $bdd->prepare('SELECT email FROM user WHERE email = :email');
$reponse ->execute(array(
    'email' => $_POST['email']));
$donnees = $reponse->fetch();
if($donnees)
{
    echo '<script> alert("Cette adresse est déjà utilisée") </script>';
    header( "refresh:0.01; url=../view/connection.php" );
} 
else if ($_POST['mdp'] != $_POST['mdp1']){
    echo '<script> alert("Les mots de passes ne sont pas identiques")  </script>';
    header( "refresh:0.01; url=../view/connection.php" );
} 
else {
    // Hachage du mot de passe
    $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    // Insertion
    $req = $bdd->prepare('INSERT INTO user(name, firstname, mdp, email, date_inscription, id_role) VALUES(:name, :firstname, :mdp, :email, CURDATE(), "2")');
    $req->execute(array(
        'name' => $_POST['name'],
        'firstname' => $_POST['firstname'],
        'mdp' => $pass_hache,
        'email' => $_POST['email']));

    echo '<script> alert("Félicitation! Votre compte à bien été créé") </script>';
    header( "refresh:0.01; url=../view/connection.php" );
}   

