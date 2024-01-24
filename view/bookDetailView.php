<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="#">
</head>
<body>
    <?php
    require_once('../view/modules/header.php');
    require_once('../view/modules/nav.php');
    ?>
    <main>
        <div class="infoContainer">
            <div class="bookImage">
                <?php
                $imagePath = "../asset/images/bookCover/";
                if($bookInfo['photo'] == NULL) {
                    $imagePath = $imagePath. 'default.jpg';
                } else {
                    $imagePath = $imagePath.$bookInfo['photo'];
                }?>
                <img src="<?php echo $imagePath ?>" alt="couverture">
            </div>
            <div class="bookInfo">
                <div class="bookAuteur"></div>
                <div class="bookGenre"></div>
                <div class="bookAnnee"></div>
                <div class="bookSynopsis"></div>
            </div>

        </div>
    </main>
</body>
</html>