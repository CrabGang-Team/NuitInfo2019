<?php 

session_start();

require __DIR__ . '/db_connection.php';

$idPost = $_GET["id"];
$idUser = $_SESSION["id"];

