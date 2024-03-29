<?php
        session_start();
        require_once('../model/model.php');

        $bookBDD = connectDB();
        if(isset($_POST['selectedGenre'])) {
            if($_POST['selectedGenre']=='tous') {
                $bookList = getAllBooks($bookBDD);
            }else{
                $bookList = getBooksByGenre($bookBDD,$_POST['selectedGenre']);
            }
        }else{
            $bookList = getAllBooks($bookBDD);
            var_dump($bookBDD);
        }

        $genreList = getAllGenres($bookBDD);

        

        if(!isset($_SESSION['nom'])){
            header('location: ../controller/home.php');
        }
        
        $pageTitle = "Silence on lit";
        $pageSubTitle = "Une heure de lecture est le souverain remède contre les dégoûts de la vie.";

        $buttonList = [
            ["label" => "acceuil", "url"=> "../controller/home.php"],
            ["label" => "bibliotèque", "url" => "../controller/book.php"]
        ];
        if(isset($_SESSION['nom'])) {
            $buttonList[]=["label" => "Deconnexion", "url" => "../controller/logout.php"];
        }
        require_once('../view/booksView.php')
?>
