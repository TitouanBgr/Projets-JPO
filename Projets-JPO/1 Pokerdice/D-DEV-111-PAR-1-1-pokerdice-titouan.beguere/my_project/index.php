<?php
session_start();
include 'yah.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Yahtzee</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="img/icone.png" />

    </head>
    <body class="entrance">
  <h2>Welcome to VaporWave Poker Dice !</h2>
    <form method="post">
        <input class="commencer" type="text"  name="nom" placeholder=" Username"/> </br>
        <input class="commencer" type="submit" name="submit" value=" Start "/>

    </form>
    <?php

    $connexion = mysqli_connect("127.0.0.1", "root", "", "yah");
    if (isset($_POST['submit']) && !empty($_POST['nom'])) {
        $pseudo = $_POST['nom'];
        mysqli_query($connexion, "INSERT INTO yahtzee VALUES ('$pseudo','','','','','','','','','','','','','','','','')");
        $_SESSION['pseudo'] = $pseudo;
        header("Location: game.php");
        mysqli_close($connexion);
    }
    ?>
    </body>
</html>