<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Description">
	<meta name="keywords" content="HTML, CSS, JAVASCRIPT">
	<meta name="author" content="Robin Bidanchon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Clarity CSS -->
	<link rel="stylesheet" href="https://unpkg.com/@clr/ui/clr-ui.min.css" />

  <!--CLARITY ICONS STYLE-->
<link rel="stylesheet" href="https://unpkg.com/clarity-icons/clarity-icons.min.css">

<!--CLARITY ICONS DEPENDENCY: CUSTOM ELEMENTS POLYFILL-->
<script src="https://unpkg.com/@webcomponents/custom-elements/custom-elements.min.js"></script>

<!--CLARITY ICONS API & ALL ICON SETS-->
<script src="https://unpkg.com/clarity-icons/clarity-icons.min.js"></script>
	<!-- Personal -->
	<link rel="stylesheet" href="style.css">

	<title>Precarite.io</title>

</head>
<body>

	<div class="container-fluid main">
		<div class="form-part">
			<div class="form">
				<h1>Inscription</h1>
				<form clrForm clrLayout="Horizontal">
			    <div>
			      <clr-input-container>
			        <label><clr-icon shape="user"></clr-icon></label>
			        <div class="clr-control-container">
			          <div class="clr-input-wrapper">
			            <input clrinput="" placeholder="Nom" class="clr-input ng-pristine ng-valid ng-touched" id="clr-form-control-1">
			          </div>
			        </div>
			      </clr-input-container>
			    </div>
			    <div>
			      <clr-input-container>
			        <label><clr-icon shape="user" class="is-solid"></clr-icon></label>
			        <div class="clr-control-container">
			          <div class="clr-input-wrapper">
			            <input clrinput="" placeholder="Prenom" class="clr-input ng-pristine ng-valid ng-touched" id="clr-form-control-191">
			          </div>
			        </div>
			      </clr-input-container>
			    </div>
			    <div>
			      <clr-input-container>
			        <label><clr-icon shape="envelope"></clr-icon></label>
			        <div class="clr-control-container">
			          <div class="clr-input-wrapper">
			            <input clrinput="" placeholder="Email" class="clr-input ng-pristine ng-valid ng-touched" id="clr-form-control-191">
			          </div>
			        </div>
			      </clr-input-container>
			    </div>
			    <div>
			      <clr-input-container>
			        <label><clr-icon shape="home"></clr-icon></label>
			        <div class="clr-control-container">
			          <div class="clr-input-wrapper">
			            <input clrinput="" placeholder="Code postal" class="clr-input ng-pristine ng-valid ng-touched" id="clr-form-control-191">
			          </div>
			        </div>
			      </clr-input-container>
			    </div>
			    <div>
			      <clr-input-container>
			        <label><clr-icon shape="lock"></clr-icon></label>
			        <div class="clr-control-container">
			          <div class="clr-input-wrapper">
			            <input clrpassword="" placeholder="mot de passe" type="password" aria-describedby="clr-form-control-194-helper" class="clr-input ng-valid ng-touched ng-dirty" id="clr-form-control-194">
			          </div>
			        </div>
			      </clr-input-container>
			    </div>
			    <div>
			      <clr-input-container>
			        <label><clr-icon shape="lock" class="is-solid"></clr-icon></label>
			        <div class="clr-control-container">
			          <div class="clr-input-wrapper">
			            <input clrpassword="" placeholder="Confirmer mot de passe" type="password" aria-describedby="clr-form-control-194-helper" class="clr-input ng-valid ng-touched ng-dirty" id="clr-form-control-194">
			          </div>
			        </div>
			      </clr-input-container>
			    </div>
					<button class="btn btn-outline" type="submit">Regular</button>

			</form>

			</div>
		</div>

		<div class="image">
			<img src="background.jpg" alt="image d'illustration">
			<span class="company">Precarite.io</span>
			<span class="center"></span>
			<div class="indicators">
				<span class="indicator indicator-active"></span>
				<span class="indicator"></span>
				<span class="indicator"></span>
			</div>
		</div>

	</div>


	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- Fontawesome JS -->
	<script src="https://kit.fontawesome.com/7796a3bf49.js"></script>

	<!-- Personal -->
	<script src="script.js"></script>

</body>
</html>
