<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=dwpark;charset=utf8", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}

