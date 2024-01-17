<?php 
session_start();

if(!isset($_SESSION['nom'])){
    header('location: ../controller/home.php');
}

require_once('../model/model.php');

$bookBDD = connectDB();
$bookInfo = getBookById($bookBDD, $_POST['bookId']);

$pageTitle = $bookInfo['titre'];
        $pageSubTitle = $bookInfo['auteur'];
        
        $buttonList = [
            ["label" => "acceuil", "url"=> "../controller/home.php"],
            ["label" => "bibliotèque", "url" => "../controller/book.php"]
        ];
        if(isset($_SESSION['nom'])) {
            $buttonList[]=["label" => "Deconnexion", "url" => "../controller/logout.php"];
        }
require_once('../view/bookDetailView.php');