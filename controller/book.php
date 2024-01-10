<?php
        session_start();
        
        $pageTitle = "Silence on lit";
        $pageSubTitle = "Une heure de lecture est le souverain remède contre les dégoûts de la vie.";

        $buttonList = [
            ["label" => "acceuil", "url"=> "../controller/home.php"],
            ["label" => "bibliotèque", "url" => "../controller/book.php"]
        ];
        require_once('../view/booksView.php')
?>
