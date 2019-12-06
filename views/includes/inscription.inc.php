<?php
require __DIR__ . "/db_connection.php";
if (isset($_SESSION['id'])) {
  $typeAlert="warning";
  $messageAlert="Vous êtes déjà connecté";
  header("Location: ../../");
  exit();
} else if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $email = $_POST['email'];
  $code_postal = $_POST['code_postal'];
  $password = password_hash($_POST['password'], PASSWORD_ARGON2I);


  $response = $db->prepare('INSERT INTO user (nom, prenom, password, email, code_postal, rank) VALUES(:nom, :prenom, :password, :email, :code_postal,:rank);');
  $response->bindValue(':nom', $nom);
  $response->bindValue(':prenom', $prenom);
  $response->bindValue(':password', $password);
  $response->bindValue(':email', $email);
  $response->bindValue(':code_postal', $code_postal);
  $response->bindValue(':rank', 1);

  $response->execute();
  $id = $db->query('SELECT id FROM user order by id desc limit 1');
  session_start();
  $_SESSION['id'] = $id->fetch(PDO::FETCH_ASSOC)["id"];
  header("Location: ../../");
  exit();
}

?>
