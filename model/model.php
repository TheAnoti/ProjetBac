<?php

function connectDB() {
    $bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=silence_on_lit;charset=utf8','sol_admin','ZLq16]_X!pb4X-KA');

    return $bdd;

}

function getAllBooks($bdd){
    $sqlQuery = "SELECT * FROM `livres_vw` ORDER BY `Année` DESC";
    $logStatment = $bdd->prepare($sqlQuery);
    $logStatment->execute();
    $req = $logStatment->fetchAll();
    $logStatment->closeCursor();


    return $req;
}