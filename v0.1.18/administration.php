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
		<div class="logged-icon">
		<div class="l-icon notifications-icon" data-icon="notifications">
			<div class="li-icon"><span class="notif-count">5</span><i class="fa fa-bell" aria-hidden="true"></i></div>
		</div>
		<div class="l-icon messages-icon" data-icon="messages">
			<div class="li-icon"><span class="notif-count">7</span><i class="fa fa-comments" aria-hidden="true"></i></div>
		</div>
		<div class="l-icon options-icon" data-icon="options">
			<div class="li-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
		</div>
		<div class="clear"></div>
	</div>	
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
	<div class="sub-panel sub-panel-notifications hide" data-panel='notifications'>			
		<div class="title-band">
			<h4><i class="fa fa-bell" aria-hidden="true"></i>Notifications</h4>
		</div>				
		<div class="panel-content">
			<ul>										
				<li class="notif">
					<a href="#">
						<div class="notif-header">
							<div class="notif-img">
								<img src="ressources/images/user-1.jpg" alt="">
							</div>
							<div class="notif-title">
							<p><span>Geroges Legrand</span> vous a envoyé une demande de relation</p>
							</div>
						</div>
						<span class="clear"></span>
					</a>
					<div class="infoconnect infoconnect-header">
						<a href="#" class="linking accept">
							<i class="fa fa-check-circle-o" aria-hidden="true"></i>
							<span>Se connecter</span>
						</a>
						<a href="#" class="linking decline">
							<i class="fa fa-times-circle" aria-hidden="true"></i>
							<span>Décliner</span>
						</a>
					</div>
				</li>
			</ul>
			<a href="#" class="button button-green all-messages">Afficher toutes les notifications</a>
		</div>
	</div>
	<div class="sub-panel sub-panel-messages hide" data-panel='messages'>
		<div class="title-band">
			<h4><i class="fa fa-comments" aria-hidden="true"></i>Messages</h4>
		</div>
		<div class="panel-content">
			<ul>
				<li class="message">
					<a href="#">
						<div class="message-img">
							<img src="ressources/images/user-1.jpg" alt="">
						</div>
						<div class="message-content">
							<div class="message-author"><p>Geroges Legrand</p></div>
							<div class="last-message"><p><span class="last-time">08:36 </span>Très bien, pas de problèmes, à très bientôt !</p></div>
						</div>
						<div class="clear"></div>
					</a>
				</li>
			</ul>
			<a href="#" class="button button-green all-messages">Afficher tous les messages</a>
		</div>				
	</div>
	<div class="sub-panel sub-panel-options hide" data-panel='options'>
		<div class="title-band">
			<h4><i class="fa fa-cog" aria-hidden="true"></i>Options</h4>
		</div>
		<div class="panel-content">
			<ul class="options">
				<li class="option"><a href="#">Paramètres du compte <span>@tamount</span></a></li>
				<li class="option"><a href="#">Paramètres du profil</a></li>
				<li class="option"><a href="#">Paramètres du profil</a></li>
				<li class="option"><a href="#">Administration</a></li>
				<li class="option"><a href="#">Déconnexion</a></li>
			</ul>
		</div>
	</div>
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
					<li class="has-child">
						<a href="#" class="has-child-link">
							<i class="fa fa-angle-down arrow-submenu" aria-hidden="true"></i>
							<i class="fa fa-users" aria-hidden="true"></i>
							<span>Utilisateurs</span>
						</a>
						<ul class="admin-menu-child">
							<li><a href="#">Sous menu 1</a></li>
							<li><a href="#">Sous menu 2</a></li>
							<li><a href="#">Sous menu 3</a></li>
						</ul>
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