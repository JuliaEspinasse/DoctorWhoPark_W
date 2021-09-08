<?php 
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json");
include_once "bdd/functionsBdd.php";
include_once "bdd/sql.php";

if(!empty($_GET['user'])){
    $info = ["valeur"=>htmlspecialchars($_GET['user'])];
    deleteUser($_GET['user'],$bdd);
    echo json_encode($info);
}else{
    throw new Error("profil inexistant");
}



