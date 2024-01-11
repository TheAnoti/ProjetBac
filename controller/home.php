<?php
        session_start();
        
        if(isset($_POST['nom'])) {
            $_SESSION['nom']=$_POST['nom'];
        }

        $pageTitle = "Silence on lit";
        $pageSubTitle = "Lisons dans le calme tous ensemble, ça ne peut que faire du bien.";
        
        $buttonList = [
            //["label" => "acceuil", "url"=> "../controller/home.php"],
            //["label" => "bibliotèque", "url" => "../controller/book.php"]
        ];
        if(isset($_SESSION['nom'])) {
            $buttonList[]=["label" => "bibliothèque", "url" => "../controller/book.php"];
            $buttonList[]=["label" => "Deconnexion", "url" => "../controller/logout.php"];
        }
        require_once('../view/homeView.php');
?>
