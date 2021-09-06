<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=dwpark;charset=utf8", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}

function allTarifs($bdd){

    //creation requete sql
    $sql = "SELECT * FROM tarif";

    //prépare ma requête pour éviter d'eventuel failles
    $req =  $bdd->prepare($sql);
    //execute ma requête pour éviter d'eventuel failles
    $result = $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;

}

function addUser($name, $firstname, $mdp, $email, $bdd){
    $sql = "insert into user (name, firstname, mdp, email, date_inscription) VALUES (:name, :firstname, :mdp, :email, CURDATE())";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        ":name" => $name,
        ":firstname" => $firstname,
        ":mdp" => $mdp,
        "email" => $email,

    ]);
    return $result;
}

function selectUser($email, $bdd)
{

    $sql = "SELECT DISTINCT * from user WHERE email = :email";
    $req =  $bdd->prepare($sql);
    $result = $req->execute([
        ":email"=> $email
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

