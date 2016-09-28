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
						<a href="#">
							<i class="fa fa-tachometer" aria-hidden="true"></i>
							<span>Tableau de bord</span>
						</a>
					</li>
					<li>
						<a href="admin-profils.php"  class="active">
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
			<h2>Profils</h2>
			<div class="main-header-icons">
				<a href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-ban" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="d-container admin-container">
		<div class="admin-valid">
			<div class="admin-valid-box">
				<i class="fa fa-times" aria-hidden="true"></i>
				<h3>Etes vous sur de vouloir <span class="action-name"></span> l'utilisateur <span class="user-target"></span></h3>
				<div class="box-valid">
					<a href="#">Oui</a><span>Non</span>
				</div>
			</div>
		</div>
			<div class="d-row">
				<div class="d-col d-col-12">
					<div class="admin-content">
						<div class="admin-content-content">
							<div class="table-menu">
								<div class="d-row">
									<div class="d-col d-col-7 table-title">
										<h2>Tableau récapitulatif des <em>profils</em></h2>
										<p class="page-current-number">Page <em>1</em></p><p class="search-results"> | <strong>0</strong> <em class="plur">Résultats</em> pour la recherche : <em class="search-token"></em></p>
									</div>
									<div class="d-col d-col-1 content-table-search">
										<form action="#" class="form">
											<div class="field">
												<label for="table-show" class="dn">Elémets par pages</label>
												<select name="" id="table-show" class="table-show">
													<option value="10">10</option>
													<option value="20">20</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
											</div>
										</form>
									</div>
									<div class="d-col d-col-4 content-table-search">
										<form action="#" class="form">
											<div class="field">
												<label for="" class="dn">Rechercher dans le tableau</label>
												<input type="text" class="table-search" placeholder="Rechercher dans le tableau">
											</div>
										</form>
									</div>
									<div class="clear"></div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="content-table">
								<div class="content-table-row content-table-header">
									<div class="content-cell" id="username">Nom complet <i class="fa fa-sort" aria-hidden="true"></i></div>
									<div class="content-cell" id="user-content">Nom d'utilisateur <i class="fa fa-sort" aria-hidden="true"></i></div>
									<div class="content-cell small" id="user-date">Date <i class="fa fa-sort" aria-hidden="true"></i></div>
									<div class="content-cell small" id="user-statut">Statut <i class="fa fa-sort" aria-hidden="true"></i></div>
									<div class="content-cell" id="user-actions">Actions</div>
								</div>
								<div class="content-sort-table">
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Romain Darwin</span></div>
										<div class="content-cell user-content"><span>@rdarwin</span></div>
										<div class="content-cell user-date small"><span>24/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="bloquer.php"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="nommer.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Romain Darwin</span></div>
										<div class="content-cell user-content"><span>@rdarwin</span></div>
										<div class="content-cell user-date small"><span>24/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Romain Darwin</span></div>
										<div class="content-cell user-content"><span>@rdarwin</span></div>
										<div class="content-cell user-date small"><span>24/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Michel Michel</span></div>
										<div class="content-cell user-content"><span>@michmich</span></div>
										<div class="content-cell user-date small"><span>24/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Romain Darwin</span></div>
										<div class="content-cell user-content"><span>@rdarwin</span></div>
										<div class="content-cell user-date small"><span>24/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Romain Darwin</span></div>
										<div class="content-cell user-content"><span>@rdarwin</span></div>
										<div class="content-cell user-date small"><span>24/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Owen Wilkinson</span></div>
										<div class="content-cell user-content"><span>@owi</span></div>
										<div class="content-cell user-date small"><span>24/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Bloqué</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Julius Caius Caesar</span></div>
										<div class="content-cell user-content"><span>@imperator</span></div>
										<div class="content-cell user-date small"><span>01/01/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Alexandre Legrand</span></div>
										<div class="content-cell user-content"><span>@alegrand</span></div>
										<div class="content-cell user-date small"><span>26/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Nicolas Tesla</span></div>
										<div class="content-cell user-content"><span>@ntesla</span></div>
										<div class="content-cell user-date small"><span>28/09/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
									<div class="content-table-row content-sort">
										<div class="content-cell username"><span>Zhon Snow</span></div>
										<div class="content-cell user-content"><span>@youknownothing</span></div>
										<div class="content-cell user-date small"><span>06/12/2016</span></div>
										<div class="content-cell user-statut small"><span>Normal</span></div>
										<div class="content-cell user-actions">
											<ul>
												<li><a href="#"><i class="fa fa-ban" aria-hidden="true"></i> <em>Bloquer</em></a></li>
												<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><em>Nommer</em></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="ressources/js/parallax/parallax.js"></script>
	<script src="ressources/js/front.js"></script>
	<script src="ressources/js/app.js"></script>
</body>
</html>