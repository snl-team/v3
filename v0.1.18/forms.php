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
			<h2>Formulaires</h2>
		</div>
		<div class="d-container admin-container">
			<div class="d-row">
				<div class="d-col d-col-12">
					<div class="admin-content">
						<div class="admin-content-content">
							<div class="d-row">
								<div class="d-col d-col-12">
									<h2>Créer un administrateur</h2>
								</div>
							</div>	
							<div class="d-row">
								<div class="d-col d-col-5">
									<form action="#" method="POST" class="form">
										<div class="field">
											<p class="field-title">
												Type text
											</p>
											<label for="" class="dn">Type text</label>
											<input type="text" class="full-border" id="" placeholder="Type texte">
										</div>
										<div class="field">
											<p class="field-title">
												Type email
											</p>
											<label for="" class="dn">Type email</label>
											<input type="email" class="full-border" id="" placeholder="Type email">
										</div>
										<div class="field">
											<p class="field-title">
												Type select
											</p>
											<label for="" class="dn">Select</label>
											<select name="" id="">
												<option value="none">Sélectionner une valeur...</option>
												<option value="option 1">option 1</option>
												<option value="option 2">option 2</option>
												<option value="option 3">option 3</option>
												<option value="option 4">option 4</option>
												<option value="option 5">option 5</option>
											</select>
										</div>
										<div class="field">
											<p class="field-title">
												Type checkbox
											</p>
											<label for="checkbox" class="checkbox-label">Checkbox</label>
											<input type="checkbox" id="checkbox" class="checkbox dn">
										</div>
										<div class="field">
											<p class="field-title">
												Type checkbox full
											</p>
											<label for="checkbox-full" class="checkbox-label full">Checkbox full</label>
											<input type="checkbox" id="checkbox-full" class="checkbox dn">
										</div>
										<div class="field">
											<p class="field-title">
												Type radio
											</p>
											<fieldset>
												<ul>
													<li>
														<label for="radio-1" class="checkbox-label radio-label">Radio 1</label>
														<input type="radio" name="radio-1" id="radio-1" class="checkbox dn">
													</li>
													<li>
														<label for="radio-2" class="checkbox-label radio-label">Radio 2</label>
														<input type="radio" name="radio-1" id="radio-2" class="checkbox dn">
													</li>
													<li>
														<label for="radio-3" class="checkbox-label radio-label">Radio 3</label>
														<input type="radio" name="radio-1" id="radio-3" class="checkbox dn">
													</li>
												</ul>				
											</fieldset>
										</div>
										<div class="field">
											<p class="field-title">
												Type radio full
											</p>
											<fieldset>
												<ul>
													<li>
														<label for="radio-1" class="checkbox-label radio-label full">Radio 1 full</label>
														<input type="radio" id="radio-1" class="checkbox dn">
													</li>
													<li>
														<label for="radio-2" class="checkbox-label radio-label full">Radio 2 full</label>
														<input type="radio" id="radio-2" class="checkbox dn">
													</li>
													<li>
														<label for="radio-3" class="checkbox-label radio-label full">Radio 3 full</label>
														<input type="radio" id="radio-3" class="checkbox dn">
													</li>
												</ul>				
											</fieldset>
										</div>
										<div class="field">
											<p class="field-title">
												Type textarea
											</p>
											<label for="textarea" class="dn">Type textarea</label>
											<textarea name="" id="textarea" class="textarea-medium" placeholder="Type textarea"></textarea>
										</div>
										<div class="field">
											<p class="field-title">
												Type date
											</p>
											<label for="textarea" id="type-date" class="dn">Type date</label>
											<input type="date" name="type-date" class="full-border" id="type-date" placeholder="Type date">
										</div>
										
										<div class="field">
											<input type="submit" value="Valider" class="button button-green submit button-medium ">
										</div>
									</form>
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