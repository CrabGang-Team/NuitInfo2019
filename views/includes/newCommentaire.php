<?php 

session_start();

require __DIR__ . '/db_connection.php';

$idPost = $_GET["id"];
$idUser = $_SESSION["id"];

$commentaire = htmlentities($_POST["commentaire"]);

$date = date("Y-m-d"); 

$stmt = $db->prepare("INSERT INTO commentaire (content, date, id_Post, id_User) VALUES (?, ?, ?, ?)");
$stmt->bindParam(1, $commentaire);
$stmt->bindParam(2, $date);
$stmt->bindParam(3, $idPost);
$stmt->bindParam(4, $idUser);
$stmt->execute();

header("Location: ../post.php?id=".$idPost);
