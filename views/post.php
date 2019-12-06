<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Site de l'équipe Crab'Gang++ à la nuit de l'info 2019">
	<meta name="keywords" content="HTML, CSS, JAVASCRIPT, NUIT INFO, 2019">
	<meta name="author" content="Crab'Gang++">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!-- Clarity -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/@clr/ui/clr-ui.min.css" /> -->

	<!-- Font awesome -->
	<script src="https://kit.fontawesome.com/7796a3bf49.js" crossorigin="anonymous"></script>

	<!-- Personal -->
	<link rel="stylesheet" href="../src/post.css">

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Icone -->
	<link rel="icon" href="../assets/logo.ico"/>
	
	<title>Forum - Precarite.io</title>

</head>
<body>

	<header>
		<div id="content_header" class="">
			<div id="logo" class="">
				<span><a href="../index.php">Precarite.io</a></span>
			</div>
			
			<a class="btn btn-primary" id="toggle-navbar" data-toggle="collapse" href="#navbar" role="button" aria-expanded="false" aria-controls="navbar">
				<i class="fas fa-bars"></i>
			</a>
			<div id="links" class="">
				<a href="./forum.php" class="link">Forum</a>
				<a href="./chat.php" class="link">Chat</a>
				<div id="dl_app">
					<a href="#" class="mr-2">Connexion</a>
					<div id="separator"></div>
					<a href="#" class="ml-2">Inscription</a>
				</div>
			</div>
		</div>

	</header>

	<div class="collapse" id="navbar">
		<div class="card card-body">
			<a href="#" class="link">Chat</a>
			<a href="#" class="link">Connexion</a>
			<a href="#" class="link">Inscription</a>
		</div>
	</div>
	

	<main>


		<div class="container-fluid mt-3 mb-3">
		    <div class="row justify-content-center">
		        <div class="col-xs-12 col-lg-10"> <!-- div qui correspond a l'article + les suggestions a coté -->
		            <div class="row justify-content-center">

		                <?php
		                require "./includes/db_connection.php";
		                $query = $db->prepare("SELECT * FROM post WHERE id = ?");
		                $query->bindValue(1, $_GET['id'], PDO::PARAM_INT);
		                $query->execute();
		                $row = $query->fetch(PDO::FETCH_ASSOC);
		                $db = null;
		                ?>

		                <div class="col-xs-12 col-lg-8 justify-content-center">  <!-- div qui correspond a l'article-->



		                    <div class="article rounded">
		                        
		                        <div class="ArticleContenu mt-3 pb-1 pt-3">

		                            <i><h3><?php echo mb_strtoupper($row['titre'], 'UTF-8'); ?></h3></i>
		                            <small>publié le <?php echo $row['date'];?></small>

		                            <p class="mt-4 mb-4 text-justify"><?php echo $row['content']; ?></p>

		                        </div>
		                    </div>

							<?php if(isset($_SESSION["id"])){ ?>
		                    <div class="article rounded mt-3 pt-3">
		                        <h4 class="text-secondary text-center">Poster un commentaire</h4>
		                        <hr class="separatorCommentaire ml-5 mr-5" >
		                        <form action="./includes/newCommentaire.php?id=<?php echo $_GET['id']; ?>" method="post"> <!-- pour l'id, il faut remettre celui de l'article -->
		                            <div class="form-group row justify-content-center">
		                                <div class="col-10">
		                                    <textarea class="form-control" name="commentaire" style="width:100%;min-height:150px;" placeholder="Commentaire ..." required></textarea>
		                                </div>
		                            </div>
		                            <div class="form-group row justify-content-center">
		                                <button type="submit" name="submit" class="btn-card mb-4">Poster</button>
		                            </div>
		                        </form>
		                    </div>
		                    <?php } ?>

		                    <div class="article rounded mt-3 mb-3 p-3">
		                        <h4 class="text-secondary text-center">Commentaires</h4>
		                        <hr class="separatorCommentaire ml-5 mr-5" >

		                        <?php
		                        require __DIR__ . "./includes/db_connection.php";
		                        $query = $db->prepare("SELECT content, date FROM commentaire WHERE id_Post = ? ORDER BY id DESC");
		                        $query->bindValue(1, $_GET['id'], PDO::PARAM_INT);
		                        $query->execute();
		                        if ($query->rowCount() == 0) {
		                            echo '<div class="alert alert-danger text-center">
		                            Aucun commentaire
		                            </div>';
		                        }
		                        else{
		                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
		                                echo '<div class="article rounded mt-3 p-3">';
		                                echo '<h5></h5>
		                                <small>posté le '.$row['date'].'</small>
		                                <div class="text-dark mt-3 text-justify">
		                                <i>'.$row['content'].'</i>
		                                </div>
		                                </div>';
		                            }
		                        }
		                        $query = null;
		                        $db = null;
		                        ?>

		                    </div>

		                    



		                </div>

		                <!-- suggestion -->
		                <!-- on peut ajouter la class "article" pour ajouter une couleur de fond et l'ombre à la partie suggestions -->
		                <div class="col-xs-12 col-lg-3 rounded ml-3 mr-3 mb-4 suggestions"> <!-- div qui correspond aux suggesitions -->

		                    <h4 class="text-secondary text-center mt-3">Voir aussi</h4>
		                    <hr class="separatorCommentaire">

		                    <div class="row justify-content-center pl-3 pr-3">
		                        <div class="col-xs-12"> <!-- div qui correspond a un article de la suggestion -->

		                            <?php
		                            include "./includes/db_connection.php";
		                            $req = $db->prepare('SELECT * FROM post WHERE id != ? ORDER BY id DESC LIMIT 3');
		                            $req->bindValue(1, $_GET['id'], PDO::PARAM_INT);
		                            $req->execute();
		                            while($result = $req->fetch(PDO::FETCH_ASSOC)){
		                                echo '<div class="card-content mb-3 rounded">
		                                <div class="card-desc">
		                                <h5>'.$result['titre'].'</h5>
		                                <div>'.$result['content'].'</div>
		                                <a href="./post.php?id='.$result['id'].'" class="btn-card">Lire</a>
		                                </div>
		                                </div>';
		                            }
		                            $req = null;
		                            $db = null;
		                            ?>


		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		

	</main>

	<hr>

	<footer>
		<div id="footer_color">
			<div id="text_footer">
				<h1>Poser vos questions et un conseiller vous repondra.</h1>
				<div id="buttons_footer" class="mt-4">
					<a href="#">► Aller au forum</a>
					<a href="#">Foire aux questions</a>
				</div>
			</div>
		</div>

		<div id="footer">
			<div class="footer_flex">
				<a href="#">Precarite.io</a>
			</div>
			<div class="footer_flex text-right">
				<a href="#">Privacy</a>
			</div>
		</div>
		
	</footer>

</body>
</html>	