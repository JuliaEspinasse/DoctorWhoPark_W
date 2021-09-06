<?php 
session_start();
include "sql.php";

if(!empty($_POST['email'])&& !empty($_POST['mdp'])){
    $user = selectUser($_POST['email'],$bdd);
    if(!$user){
        $error = "dontExist";
        header("Location: ../HTML/connection.php?error=".$error);
    }
    else{
        if(password_verify($_POST['mdp'],$user->password)){
            echo 'passOK';
            $_SESSION['id']= $user->id_user;
            $_SESSION['email']= $user->email;
            if(!empty($_POST['remember'])){
                setcookie('id',$user->id_user,time()+31556926,null,null,true,true);
                setcookie('email',$user->mail,time()+31556926,null,null,true,true);
            }
            header("Location: ../index.php?connexion=ok");
        }else{
            $error = "password";
            header("Location: ../HTML/connection.php?error=".$error);
        }
    }
}else{
    $error = "allField";
    header("Location: ../HTML/connection.php?error=".$error);
}