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
	<link rel="stylesheet" href="../src/style_forum.css">

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
				<a href="#" class="link">Forum</a>
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
			<a href="./chat.php" class="link">Chat</a>
			<a href="#" class="link">Connexion</a>
			<a href="#" class="link">Inscription</a>
		</div>
	</div>
	

	<main>


		<h1 id="title_content">Tous les postes</h1>

		<div class="container-fluid pt-4 mb-5">
			<div class="row justify-content-center">


			<?php

			require __DIR__ . "/includes/db_connection.php";

		    $req = $db->query("SELECT * FROM post");

		   

		    while($row = $req->fetch(PDO::FETCH_ASSOC)){

				$categories = $db->prepare("SELECT c.titre from categorie as c INNER JOIN post_categorie as pc ON c.id = pc.id WHERE pc.id_Post = ?");
				$categories->bindValue(1, $row["id"], PDO::PARAM_INT);
				$categories->execute();
				?>

				<div class="col-lg-8 col-xl-5 col-md-8 col-11 card mb-5 mx-md-5">
					<div class="card-content">
						<div class="decoration"></div>
						<div class="content">
							<span class="date"><?= $row["date"]; ?></span>
							<h6 class="title pt-1"><?= $row["titre"]; ?></h6>
							<?php while($label = $categories->fetch(PDO::FETCH_ASSOC)){ ?>
								<span class="label_article"><?= $label["titre"]; ?></span>
							<?php } ?>
							<div class="resume mt-2"><?= $row["content"]; ?></div>
							<br>
							<a href="./post.php?id=<?= $row['id']; ?>" class="read-more px-4 py-2">Read More</a>
						</div>
					</div>
				</div>
			<?php } ?>
				
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