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
	<link rel="stylesheet" href="../src/style.css">

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	
	<!-- Personal -->
	<script src="../src/script.js"></script>

	<!-- Icone -->
	<link rel="icon" href="#" />
	
	<title>Nuit de l'info 2019</title>

</head>
<body>

	<header>
		<div id="content_header" class="">
			<div id="logo" class="">
				<span><a href="#">Precarite.io</a></span>
			</div>
			
			<a class="btn btn-primary" id="toggle-navbar" data-toggle="collapse" href="#navbar" role="button" aria-expanded="false" aria-controls="navbar">
				<i class="fas fa-bars"></i>
			</a>
			<div id="links" class="">
				<a href="#" class="link">Forum</a>
				<a href="#" class="link">Chat</a>
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
			<a href="#" class="link">Forum</a>
			<a href="#" class="link">Chat</a>
			<a href="#" class="link">Connexion</a>
			<a href="#" class="link">Inscription</a>
		</div>
	</div>
	

	<main>

		<div id="help">?</div>

		<div id="image_header">
			<img src="../assets/image.jpg" alt="main image header">
			<div id="caption_image">
				<h1>Precarite.io</h1>
				<p>Vous êtes en état de précarité ?<br>Venez chercher de l'aide parmis nos conseillés</p>
				<div id="buttons_image">
					<a href="#">► Aller au forum</a>
					<a href="#">Foire aux questions</a>
				</div>
			</div>
		</div>



		<h1 id="title_content">Nos derniers postes</h1>

		<div class="container-fluid pt-4 mb-5">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-xl-5 col-md-8 col-11 card mb-5 mx-md-5">
					<div class="card-content">
						<div class="decoration"></div>
						<div class="content">
							<span class="date">28 August 2019</span>
							<h6 class="title pt-1">Lorem Ipsum Dolor</h6>
							<div class="resume">Dolore veniam sit sunt culpa commodo officia dolor adipisicing dolore esse sint exercitation velit ut veniam in ad quis ut sunt sit elit eiusmod in eu laboris.</div>
							<br>
							<a href="#" class="read-more px-4 py-2">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-5 col-md-8 col-11 card mb-5 mx-md-5">
					<div class="card-content">
						<div class="decoration"></div>
						<div class="content">
							<span class="date">28 August 2019</span>
							<h6 class="title pt-1">Lorem Ipsum Dolor</h6>
							<div class="resume">Dolore veniam sit sunt culpa commodo officia dolor adipisicing dolore esse sint exercitation velit ut veniam in ad quis ut sunt sit elit eiusmod in eu laboris.</div>
							<br>
							<a href="#" class="read-more px-4 py-2">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-xl-5 col-md-8 col-11 card mb-5 mx-md-5">
					<div class="card-content">
						<div class="decoration"></div>
						<div class="content">
							<span class="date">28 August 2019</span>
							<h6 class="title pt-1">Lorem Ipsum Dolor</h6>
							<div class="resume">Dolore veniam sit sunt culpa commodo officia dolor adipisicing dolore esse sint exercitation velit ut veniam in ad quis ut sunt sit elit eiusmod in eu laboris.</div>
							<br>
							<a href="#" class="read-more px-4 py-2">Read More</a>
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
				<h1>Poser vos questions et un conseillez vous repondra.</h1>
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