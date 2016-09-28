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
	<div class="close-panel">
		<span>fermer</span>
	</div>
	<div class="masker"></div>
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
	<div class="action-button"><i class="fa fa-plus" aria-hidden="true"></i></div>
	<div class="floating-menu">
			<div class="floating-button floating-button-todo" data-floating="todo">
				<p>TODO List</p><div class="round reded"><i class="fa fa-list-ul" aria-hidden="true"></i></div>
			</div>
		<div class="clear"></div>
	</div>
	<div class="close-sidebar">
		<p>Fermer</p>
	</div>
	<div class="post-header user-header">
		<div class="user-header-container user" style="background-image: url(ressources/images/cover-entreprise.jpg);">
			<div class="post-img">
				<a href="#"><img src="ressources/images/entreprise-tmp.jpg" alt=""></a>
			</div>
			<div class="post-user">
				<div class="user-name"><a href="#"><p>Entreprise 1 <span>@entreprise1</span></p></a></div>
			</div>
			<div class="clear"></div>
			<div class="user-info-container">
				<div class="user-info">
					<p>Posts</p>
					<span>128</span>
				</div>
				<div class="user-info">
					<p>Abonnements</p>
					<span>80</span>
				</div>
				<div class="user-info">
					<p>Abonnés</p>
					<span>10</span>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<!--<div class="sidebar toolbar toggle">
		<div class="sidebar-header">
			<div class="sidebar-icon active" id="hashtag"><i class="fa fa-hashtag" aria-hidden="true"></i></div>
			<div class="sidebar-icon" id="briefcase"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
			<div class="sidebar-icon" id="comments"><i class="fa fa-comments" aria-hidden="true"></i></div>
			<div class="sidebar-icon" id="users"><i class="fa fa-users" aria-hidden="true"></i></div>
			<div class="clear"></div>
		</div>
		<div class="sidebar-content d-scrollbar hashtag open">
			<div class="sidebar-content-header">
				<h4><i class="fa fa-hashtag" aria-hidden="true"></i> Channels</h4>
			</div>
			<div class="sidebar-content-content">
				<div class="add-more">
					<form action="#" method="POST" class="form">
						<div class="field">
							<label for="add-channel">Ajouter un channel</label>
							<input type="text" class="add-more-input np" value="Ajouter un channel" id="add-channel">
							<button class="add-more-plus" title="Ajouter un channel"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
						</div>
					</form>
				</div>
				<ul>
					<li><a href="channel1.php">#Channel 1 <span class="channel-new">5</span></a></li>
					<li><a href="#">#Channel 2</a></li>
					<li><a href="#">#Channel 3</a></li>
					<li><a href="#">#Channel 4</a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-content d-scrollbar briefcase">
			<div class="sidebar-content-header">
				<h4><i class="fa fa-briefcase" aria-hidden="true"></i> Projets</h4>
			</div>
			<div class="sidebar-content-content">
				<ul>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 2</a></li>
					<li><a href="#">Item 3</a></li>
					<li><a href="#">Item 4</a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-content d-scrollbar comments">
			<div class="sidebar-content-header">
				<h4><i class="fa fa-comments" aria-hidden="true"></i> Messages</h4>
			</div>
			<div class="sidebar-content-content">
				<ul>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a>
					<a href="#" class="last-sidebar-message">
						<span><em>08:36</em> Bonjour !</span>
					</a></li>
					<li><div class="contact-img offline"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a>
					<a href="#" class="last-sidebar-message">
						<span><em>08:36</em> Bonjour !</span>
					</a></li>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a>
					<a href="#" class="last-sidebar-message">
						<span><em>08:36</em> Bonjour !</span>
					</a></li>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a>
					<a href="#" class="last-sidebar-message">
						<span><em>08:36</em> Bonjour !</span>
					</a></li>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a>
					<a href="#" class="last-sidebar-message">
						<span><em>08:36</em> Bonjour !</span>
					</a></li>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a>
					<a href="#" class="last-sidebar-message">
						<span><em>08:36</em> Bonjour !</span>
					</a></li>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a>
					<a href="#" class="last-sidebar-message">
						<span><em>08:36</em> Bonjour !</span>
					</a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-content d-scrollbar users">
			<div class="sidebar-content-header">
				<h4><i class="fa fa-users" aria-hidden="true"></i> Teams</h4>
			</div>
			<div class="sidebar-content-content">
				<ul>
					<li>
						<div class="contact-img team-contact-img">
							<a href="#">
								<div class="team-letter"></div>
							</a>
						</div> 
						<a href="#" class="team-name">Hello </a>
					</li>
					<li>
						<div class="contact-img team-contact-img">
							<a href="#">
								<div class="team-letter"></div>
							</a>
						</div> 
						<a href="#" class="team-name">Equipe 1 </a>
					</li>
					<li>
						<div class="contact-img team-contact-img">
							<a href="#">
								<div class="team-letter"></div>
							</a>
						</div> 
						<a href="#" class="team-name">Marque </a>
					</li>
					<li>
						<div class="contact-img team-contact-img">
							<a href="#">
								<div class="team-letter"></div>
							</a>
						</div> 
						<a href="#" class="team-name">Jeannot </a>
					</li>
				</ul>
			</div>
		</div>
	</div>-->
	<div class="sidebar todo toggle d-scrollbar">
		<div class="todo-header">
			<h4><i class="fa fa-tasks" aria-hidden="true"></i> Liste des taches</h4>
			<a href="#" class="todo-options"><i class="fa fa-cog" aria-hidden="true"></i></a>
		</div>
		<div class="todo-project">
			<div class="todo-project-header">
				<div class="todo-project-open">
					<i class="fa fa-plus" aria-hidden="true"></i>
				</div>
				<div class="todo-project-title">
					<h4>Refonte siteweb.fr</h4>	
				</div>
				<div class="clear"></div>
				<div class="todo-project-info">
					<div class="tpi-bloc tpi-small">
						<i class="fa fa-dot-circle-o" aria-hidden="true"></i><span>9</span>
					</div>
					<div class="tpi-bloc tpi-small">
						<i class="fa fa-check" aria-hidden="true"></i><span>6</span>
					</div>
					<div class="tpi-bloc tpi-large">
						<i class="fa fa-clock-o" aria-hidden="true"></i><span>03/10/2016</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="todo-project-content">
				<div class="todo-project-item">
					<h4>Architecture html <a href="#"><i class="fa fa-archive" aria-hidden="true"></i></a></h4>
					<div class="todo-project-bloc">
						<div class="tpb-line">
							<p>Analyse architecture html</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="tpb-line">
							<p>Conception architecture html</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="todo-project-item">
					<h4>Architecture css <a href="#"><i class="fa fa-archive" aria-hidden="true"></i></a></h4>
					<div class="todo-project-bloc">
						<div class="tpb-line">
							<p>Analyse architecture css</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="tpb-line">
							<p>Conception architecture css</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="todo-project">
			<div class="todo-project-header">
				<div class="todo-project-open">
					<i class="fa fa-plus" aria-hidden="true"></i>
				</div>
				<div class="todo-project-title">
					<h4>Rapport d'activité 2016</h4>	
				</div>
				<div class="clear"></div>
				<div class="todo-project-info">
					<div class="tpi-bloc tpi-small">
						<i class="fa fa-dot-circle-o" aria-hidden="true"></i><span>9</span>
					</div>
					<div class="tpi-bloc tpi-small">
						<i class="fa fa-check" aria-hidden="true"></i><span>6</span>
					</div>
					<div class="tpi-bloc tpi-large">
						<i class="fa fa-clock-o" aria-hidden="true"></i><span>03/10/2016</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="todo-project-content">
				<div class="todo-project-item">
					<h4>Rédaction rapport <a href="#"><i class="fa fa-archive" aria-hidden="true"></i></a></h4>
					<div class="todo-project-bloc">
						<div class="tpb-line">
							<p>Préface</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="tpb-line">
							<p>Graphiques</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="todo-project-item">
					<h4>Relecture rapport <a href="#"><i class="fa fa-archive" aria-hidden="true"></i></a></h4>
					<div class="todo-project-bloc">
						<div class="tpb-line">
							<p>Partie 1</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
						<div class="tpb-line">
							<p>Partie 2</p>
							<div class="tpb-line-validate">
								<a href="#">
									<i class="fa fa-check" aria-hidden="true"></i>
								</a>
								<a href="#">
									<i class="fa fa-times" aria-hidden="true"></i>
								</a>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="admin-menu society-admin-menu d-scrollbar">
		<div class="admin-menu-title">
			<h2>Espace société  <i class="fa fa-angle-down" aria-hidden="true"></i></h2>
		</div>
		<div class="admin-menu-content">
			<ul>
				<li>
						<a href="#" class="active">
							<i class="fa fa-tachometer" aria-hidden="true"></i>
							<span>Tableau de bord</span>
						</a>
					</li>
			</ul>
		</div>
	</div>
	<div class="main toggle admin-main society-main">
		<div class="main-header society-main-header">
			<h2>Tableau de bord</h2>
		</div>
		<div class="main-content society-container d-container admin-container">
			<div class="d-row">
				<div class="d-col d-col-12">
					<div class="admin-content society-content padded-content">
						<div class="admin-content-content t-a-r auto-height">
							<h4 class="not-yet">Vous n'avez pas encore enregistré votre société.</h4>
							<a href="#" class="button button-green">Enregistrez-là dès maintenant !</a>
						</div>
					</div>
				</div>
				<div class="d-col d-col-6 p-r-15">
					<div class="admin-content society-content padded-content">
						<div class="admin-content-content auto-height">
							<!--<div class="society-enhance-img">
								<img src="ressources/images/society-band.jpg" alt="">
							</div>-->
							<h4>Ce que vous offre votre espace société</h4>
							<ul class="d-list icon-list">
								<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Planifiez vos taches,</li>
								<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Managez et coachez vos équipes,</li>
								<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Faites participer vos clients dans la réalisation des projets,</li>
								<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Gérez votre temps,</li>
								<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Assurez la qualité de vos projets,</li>
								<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Profitez d'un cloud privé.</li>
								<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Et bien d'autres fonctionnalités...</li>
							</ul>

							</div>
						</div>
					</div>
					<div class="d-col d-col-6">
						<div class="admin-content society-content padded-content">
						<div class="admin-content-content auto-height">
							<div class="society-content-img">
								<img src="ressources/images/workplace.jpg" alt="">										
							</div>
							<h4 class="t-a-c">Un espace professionnel dédié à votre entreprises et à vos projets</h4>				
						</div>
					</div>
				</div>
				<div class="d-col d-col-6">
					
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="ressources/js/parallax/parallax.js"></script>
	<script src="ressources/js/front.js"></script>
	<script src="ressources/js/app.js"></script>
</body>
</html>