<?php
//connection Bdd
function connectDB() {
    $bdd = new PDO('mysql:host=127.0.0.1:3306;dbname=silence_on_lit;charset=utf8','sol_admin','ZLq16]_X!pb4X-KA');

    return $bdd;

}
//Accès lecture aux livres
function getAllBooks($bdd){
    $sqlQuery = "SELECT * FROM `livres_vw` ORDER BY `Année` DESC";
    $logStatment = $bdd->prepare($sqlQuery);
    $logStatment->execute();
    $req = $logStatment->fetchAll();
    $logStatment->closeCursor();


    return $req;
}

function getBooksByGenre($bdd, $genre){
    $sqlQuery = "SELECT * FROM `livres_vw` WHERE nom = :genre ORDER BY `Année` DESC";
    $logStatment = $bdd->prepare($sqlQuery);
    $logStatment->execute([
        'genre' => $genre
    ]);
    $req = $logStatment->fetchAll();
    $logStatment->closeCursor();


    return $req;
}

function getBookById($bdd, $id){
    $sqlQuery = "SELECT * FROM livres WHERE id = :id";
    $logStatment = $bdd->prepare($sqlQuery);
    $logStatment->execute([
        'id' => $id
    ]);
    $req = $logStatment->fetch();
    $logStatment->closeCursor();


    return $req;
}

//Accès en lecture au genre
function getAllGenres($bdd){
    $sqlQuery = "SELECT nom FROM genre ORDER BY id ASC";
    $logStatment = $bdd->prepare($sqlQuery);
    $logStatment->execute();
    $req = $logStatment->fetchAll();
    $logStatment->closeCursor();


    return $req;
}