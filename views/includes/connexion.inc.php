<?php
require __DIR__ . "/db_connection.php";
if (isset($_SESSION['id'])) {
            //envoi d'un message
            $typeAlert="warning";
            $messageAlert="Vous êtes déjà connecté";
            header("Location: ../main.php");
            exit();
        } else if (isset($_POST['email'])) {
          $email = $_POST['email'];
          $password = $_POST['password'];


          $hash = $db->prepare('SELECT password FROM user WHERE email = ?' );
          $hash->bindValue(1,$email);
          $hash->execute();
          $result = $hash->fetch(PDO::FETCH_ASSOC)["password"];
          echo $result;
          if (password_verify($password,$result)) {
            $id = $db->prepare('SELECT id FROM user WHERE email = ?' );
            $id->bindValue(1,$email);
            $id->execute();
            $_SESSION['id'] = $id;
            header("Location: ../main.php");
          } else {
            echo 'Identifiants incorrects';
          }
        }

 ?>
