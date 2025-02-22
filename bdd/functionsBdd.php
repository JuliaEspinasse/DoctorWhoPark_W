<?php
function allUsers($bdd) {
    //creation requete sql
    $sql = "SELECT * from user";

    //prépare ma requête pour éviter d'eventuel failles
    $req =  $bdd->prepare($sql);
    //execute ma requête pour éviter d'eventuel failles
    $result = $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

function allTarifs($bdd) {
    //creation requete sql
    $sql = "SELECT * from tarif";

    //prépare ma requête pour éviter d'eventuel failles
    $req =  $bdd->prepare($sql);
    //execute ma requête pour éviter d'eventuel failles
    $result = $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

function allAttraction($bdd)
{
    // JE stock ma requête
    $sql = "SELECT * FROM attraction";

    // J'envoi la requête et stock la reponse
    $req = $bdd->query($sql);
    // Je traite la reponse et stock les données
    // fetchAll crée un tableau avec toutes les reponses, si vous utilisez fetch, cela renvoi le premier résultat et il faut boucler pour avoir la suite
    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;
}

function selectUser($bdd, $email=null)
{

    $sql = "SELECT DISTINCT * from user WHERE email=:email";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        ":email"=>$email
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

function selectAttraction($attraction, $bdd)
{
    $sql = "SELECT * from attraction WHERE name = :name";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        ":name" => $attraction
    ]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

// Supprimer
function deleteAttraction($attraction,$bdd){
    $sql = "DELETE FROM attraction WHERE name = :name";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        ":name"=>$attraction
    ]);
    return $result;
}

function deleteUser($id_User ,$bdd){
    $sql = "DELETE FROM user WHERE id_User  = :id_User ";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        "id_User "=>$id_User 
    ]);
    return $result;
}

// Ajouter
function addAttraction($attractionNom,$attractionDesc,$attractionImg,$bdd){
    $sql = "insert into attraction (attraction_nom,attraction_description,animal_image) VALUES (:nom, :description, :image)";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        ":nom" => ucfirst($attractionNom),
        ":description" => ucfirst($attractionDesc),
        "image" => $attractionImg
    ]);
    return $result;
}

// Modifier
function modifUser($id_User , $id_role, $bdd){
    $sql = "UPDATE user SET id_role=:id_role WHERE id_User=:id_User";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        ":id_role" => $id_role,
        ":id_User" => $id_User
    ]);
    return $result;
}
