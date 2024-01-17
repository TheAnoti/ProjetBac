<header>
        <h1>
            <?php echo $pageTitle ?>
            
        </h1>
        <h3>
            <?php echo $pageSubTitle ?>
        </h3>

</header>
<?php if(isset($_SESSION['nom'])){
    ?>
    <h2>Bonjour <?php echo $_SESSION['nom'] ?></h2>
    <?php
}else{
    ?>

<form method="post" action="../controller/home.php">
    <input name="nom" type= "text">
    <input type="submit" value="votre nom">
</form>
<?php
}
?>