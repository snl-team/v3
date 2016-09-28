<?php 

	//TODO Partie "Notre adminstration"

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DEBRIEFON</title>
	<link rel="stylesheet" href="ressources/css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="ressources/css/dgrid.css">
	<link rel="stylesheet" href="ressources/css/global.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="icon" href="ressources/images/favicon.png" />

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
					<button class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span>Rechercher</span></button>
				</div>
			</form>				
		</div>
		<div class="navigation">
			<ul class="nav" id="top-menu">
				<li><a href="#" class="active"><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
				<li><a href="#" class=""><i class="fa fa-user" aria-hidden="true"></i>Profil</a></li>
				<li><a href="#" class=""><i class="fa fa-cogs" aria-hidden="true"></i>Gestion de projet</a></li>
				<li class="has-submenu">
					<a href="#" class=""><i class="fa fa-th" aria-hidden="true"></i>Applications</a>
					<div class="submenu">
						<div class="submenu-img">
							<a href="#" class="Dcloud">
								<img src="ressources/icons/dcloud.png" alt="">
								<p>Dcloud</p>
							</a>
						</div>
						<div class="submenu-img">
							<a href="#" class="Emails">
								<img src="ressources/icons/emails.png" alt="">
								<p>Emails</p>
							</a>
						</div>
						<div class="submenu-img">
							<a href="#" class="Fichiers-lourds">
								<img src="ressources/icons/heavy-transfert.png" alt="">
								<p>Fichiers lourds</p>
							</a>
						</div>
						<div class="submenu-img">
							<a href="#" class="Newsletters">
								<img src="ressources/icons/newsletter.png" alt="">
								<p>Newsletters</p>
							</a>
						</div>
						<div class="submenu-img">
							<a href="#" class="Kanboards">
								<img src="ressources/icons/kanboards.png" alt="">
								<p>Kanboards</p>
							</a>
						</div>
						<div class="submenu-img">
							<a href="#" class="Agenda">
								<img src="ressources/icons/agenda.png" alt="">
								<p>Agenda</p>
							</a>
						</div>
						<div class="clear"></div>
					</div>
				</li>
			</ul>
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
					<button class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span>Rechercher</span></button>
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
	<div class="admin-menu">
		<div class="admin-menu-title">
			<h2>Menu d'administration <i class="fa fa-angle-down" aria-hidden="true"></i></h2>
		</div>
		<div class="admin-menu-content d-scrollbar">
			<ul>
				<li>
						<a href="#" class="active">
							<i class="fa fa-tachometer" aria-hidden="true"></i>
							<span>Tableau de bord</span>
						</a>
					</li>
					<li>
						<a href="admin-profils.php">
							<i class="fa fa-user" aria-hidden="true"></i>
							<span>Profils</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<span>Adminstrateurs</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-users" aria-hidden="true"></i>
							<span>Utilisateurs</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-building" aria-hidden="true"></i>
							<span>Sociétés</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-area-chart" aria-hidden="true"></i>
							<span>Mouchards</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-file-text" aria-hidden="true"></i>
							<span>Contenus</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-database" aria-hidden="true"></i>
							<span>Données de référence</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-pie-chart" aria-hidden="true"></i>
							<span>Etats</span>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-newspaper-o" aria-hidden="true"></i>
							<span>Blog</span>
						</a>
					</li>
			</ul>
		</div>
	</div>
	<div class="main toggle admin-main">
		<div class="main-header">
			<h2>Tableau de bord</h2>
		</div>
		<div class="d-container admin-container">
			<div class="d-row">
				<div class="d-col d-col-3">
					<a href="admin-profils.php" class="admin-content padded-content">
						<h4><i class="fa fa-user" aria-hidden="true"></i><span>Profils</span></h4>
					</a>
				</div>
				<div class="d-col d-col-3">
					<a href="#" class="admin-content padded-content">
						<h4><i class="fa fa-lock" aria-hidden="true"></i><span>Adminstrateurs</span></h4>
					</a>
				</div>
				<div class="d-col d-col-3">
					<a href="#" class="admin-content padded-content">
						<h4><i class="fa fa-users" aria-hidden="true"></i><span>Utilisateurs</span></h4>
					</a>
				</div>
				<div class="d-col d-col-3">
					<a href="#" class="admin-content padded-content">
						<h4><i class="fa fa-building" aria-hidden="true"></i><span>Sociétés</span></h4>
					</a>
				</div>
			</div>
			<div class="d-row">
				<div class="d-col d-col-3">
					<a href="#" class="admin-content padded-content">
						<h4><i class="fa fa-area-chart" aria-hidden="true"></i><span>Mouchards</span></h4>
					</a>
				</div>
				<div class="d-col d-col-3">
					<a href="#" class="admin-content padded-content">
						<h4><i class="fa fa-file-text" aria-hidden="true"></i><span>Contenus</span></h4>
					</a>
				</div>
				<div class="d-col d-col-3">
					<a href="#" class="admin-content padded-content">
						<h4><i class="fa fa-database" aria-hidden="true"></i><span>Données de référence</span></h4>
					</a>
				</div>
				<div class="d-col d-col-3">
					<a href="#" class="admin-content padded-content">
						<h4><i class="fa fa-pie-chart" aria-hidden="true"></i><span>Etats</span></h4>
					</a>
				</div>
			</div>
		</div>
		<div class="d-container admin-container">
			<div class="d-row">
				<div class="d-col d-col-6">
					<div class="admin-content padded-content">
						<div class="admin-content-content bloc-count auto-height">
							<h4><i class="fa fa-area-chart" aria-hidden="true"></i> Statistiques</h4>
							<div class="d-row">
								<div class="d-col d-col-6 marged-b-25">
									<h5 class="user-number">125</h5>
									<p>Utilisateurs inscrits</p>
								</div>
								<div class="d-col d-col-6 marged-b-25">
									<h5 class="user-number">50</h5>
									<p>Utilisateurs actifs</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<a href="#" class="a-ta-r">Accéder aux mouchards</a>	
					</div>	
				</div>	
				<div class="d-col d-col-6">
					<div class="admin-content padded-content">
						<div class="admin-content-content bloc-count auto-height">
							<h4><i class="fa fa-newspaper-o" aria-hidden="true"></i> Blog</h4>
							<div class="d-row">
								<div class="d-col d-col-6 marged-b-25">
									<h5 class="user-number">55</h5>
									<p>Articles publiés</p>
								</div>
								<div class="d-col d-col-6 marged-b-25">
									<h5 class="user-number">32</h5>
									<p>Nouveaux commentaires</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>	
						<a href="#" class="a-ta-r">Accéder au blog</a>
					</div>	
				</div>	
			</div>	
		</div>
		<div class="d-container admin-container">
			<div class="d-row">
				<div class="d-col d-col-6">
					<div class="admin-content padded-content">
						<div class="admin-content-content">
							<h4><i class="fa fa-users" aria-hidden="true"></i> Dernier utilisateurs inscrits</h4>
							<div class="content-table">
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
							</div>
						</div>					
						<a href="#" class="a-ta-r">Accéder aux utilisateurs</a>	
					</div>
				</div>
				<div class="d-col d-col-6">
					<div class="admin-content padded-content">
						<div class="admin-content-content">
							<h4><i class="fa fa-building" aria-hidden="true"></i> Dernières entreprises enregistrées</h4>			
							<div class="content-table">
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
								<div class="content-table-row admin-home-table-row">
									<div class="content-cell username">Romain Darwin</div>
									<div class="content-cell user-content">@rdarwin</div>
									<div class="content-cell user-date">24/09/2016</div>
								</div>
							</div>			
						</div>
						<a href="#" class="a-ta-r">Accéder aux entreprises</a>	
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="ressources/js/parallax/parallax.js"></script>
	<script src="ressources/js/front.js"></script>
	<script src="ressources/js/app.js"></script>
</body>
</html>