<?php 
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json");
include_once "../bdd/functionsBdd.php";
include_once "../bdd/sql.php";

if(!empty($_GET['user'])){
    deleteUser($_GET['user'],$bdd);
    header("location:../view/admin.php #listUsers");
}else{
    throw new Error("profil inexistant");
}



