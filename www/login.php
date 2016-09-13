<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DEBRIEFON</title>
	<link rel="stylesheet" href="ressources/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="ressources/css/dgrid.css">
	<link rel="stylesheet" href="ressources/css/global.css">
	<link rel="stylesheet" href="ressources/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
</head>
<body>
	<header class="header clearfix">
		<div class="close-menu">
			<p>Fermer</p>
		</div>
		<div class="logo">			
			<a href="#"><img src="ressources/images/logo.png" alt="Logo DEBRIEFON"></a>
		</div>
		<div class="search">
			<form action="#" method="#" class="form search-form">
				<div class="sfield">
					<label for="searchField" class="label">Rechercher...</label>
					<input type="text" class="input" id="searchField" placeholder="Rechercher...">
					<button><i class="fa fa-search" aria-hidden="true"></i><span>Rechercher</span></button>
				</div>
			</form>				
		</div>
		<div class="navigation">
			<ul class="nav">
				<li><a href="#">Accueil</a></li>
				<li><a href="#">A propos</a></li>
				<li><a href="#">Actualités</a></li>
				<li><a href="#">Premium</a></li>
				<li><a href="#">Emploi</a></li>
			</ul>
		</div>
		<div class="log-sign clearfix">
			<a href="#" class="login-button">Connexion</a>
			<a href="#" class="signin-button">Inscription</a>
		</div>
	</header>
	<header class="header-band">
		<div class="logo">			
			<a href="#"><img src="ressources/images/logo.png" alt="Logo DEBRIEFON"></a>
		</div>
		<div class="search">
			<form action="#" method="#" class="form search-form">
				<div class="sfield">
					<label for="searchField" class="label">Rechercher...</label>
					<input type="text" class="input" id="searchField" placeholder="Rechercher...">
					<button><i class="fa fa-search" aria-hidden="true"></i><span>Rechercher</span></button>
				</div>
			</form>				
		</div>
		<div class="menu-button">
			<div class="hamb-button">
				<div class="hamb-stroke hs-top"></div>
				<div class="hamb-stroke hs-mid"></div>
				<div class="hamb-stroke hs-bot"></div>
			</div>
			<p>Menu</p>
		</div>
	</header>
	<section class="section parallax-section section-home">
		<div class="login-form">
				<form action="#" method="#" class="form log-form">
					<div class="alert error">
						<p><i class="fa fa-exclamation-circle" aria-hidden="true"></i>alert : error </p>
					</div>
					<div class="alert success">
						<p><i class="fa fa-check-circle" aria-hidden="true"></i>alert : success </p>
					</div>
					<div class="alert info">
						<p><i class="fa fa-info-circle" aria-hidden="true"></i>alert : info </p>
					</div>
					<h3>Connexion</h3>
					<div class="field">
						<label for="email">Nom d'utilisateur ou adresse Email</label>
						<input type="email" id="email" placeholder="Nom d'utilisateur ou adresse Email">
					</div>
					<div class="field">
						<label for="password">Mot de passe</label>
						<input type="password" id="password" placeholder="Mot de passe">
					</div>
					<button class="button button-green">Connexion</button>
					<div class="clear"></div>
					<div class="forgot">
						<p><a href="#">Mot de passe oublié ?</a></p>
						<p>Pas encore inscrit ? <a href="#">Créez un compte gratuit</a></p>
					</div>
				</form>
				<div class="link-from">
					<h3>Se connecter avec :</h3>
					<p><a href="#" class="network-log-button google"><i class="fa fa-google" aria-hidden="true"></i>Compte google</a></p>
					<p><a href="#" class="network-log-button facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i>facebook</a></p>
					<p><a href="#" class="network-log-button twitter"><i class="fa fa-twitter" aria-hidden="true"></i>twitter</a></p>
					<p><a href="#" class="network-log-button linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i>linkedin</a></p>
					<p><a href="#" class="network-log-button github"><i class="fa fa-github" aria-hidden="true"></i>github</a></p>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="dcontainer">
			<div class="d-row">
				<div class="d-col d-col-4">
					<ul>
						<p>Liens utiles</p>
						<li><a href="#">Support</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Mentions légales</a></li>
						<li><a href="#">Conditions générales de vente</a></li>
						<li><a href="#">Conditions générales d'utilisation</a></li>
					</ul>
				</div>
				<div class="d-col d-col-4">
					<ul>
						<p>Produits et services</p>
						<li><a href="#">Cloud Computiong</a></li>
						<li><a href="#">Gestion de projets</a></li>
						<li><a href="#">Emailing</a></li>
						<li><a href="#">Archivage automatique d'emails</a></li>
						<li><a href="#">Transferts de fichiers lourds</a></li>
						<li><a href="#">Gestion d'entreprises</a></li>
					</ul>
				</div>
				<div class="d-col d-col-4">
					<ul class="follow-us">
						<p class="fu-title">Suivez nous sur :</p>
						<li><a href="#" class="fu-facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span>facebook</span></a></li>
						<li><a href="#" class="fu-twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span>twitter</span></a></li>
						<li><a href="#" class="fu-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i><span>linkedin</span></a></li>
					</ul>
					<ul class="find-us">
						<p>DEBRIEFON</p>
						<li>4 rue de Pâques - 67000 Strasbourg - France</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="ressources/js/parallax/parallax.js"></script>
	<script src="ressources/js/front.js"></script>
</body>
</html>