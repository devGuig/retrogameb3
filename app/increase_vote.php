<?php
/* CONNECT TO DATABASE */
$bdd = new PDO('mysql:host=localhost;dbname=game_vote', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
/* PREPARE REQUEST */
$sth = $bdd->prepare('UPDATE votes SET nb_votes = nb_votes+1 WHERE slug_game = :slug_game');
/* BIND PARAMS */
$sth->bindParam(':slug_game', $_GET['slug_game']);
/* EXECUTE REQUEST */
$sth->execute();
/* REDIRECTION TO INDEX.PHP */
header('Location: http://localhost:8888/retrogame/app/index.php');