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
			<div class="floating-button floating-button-toolbar" data-floating="toolbar">
				<p>Barre d'outils</p><div class="round oranged"><i class="fa fa-check-square-o" aria-hidden="true"></i> </div>
			</div>
			<div class="floating-button floating-button-todo" data-floating="todo">
				<p>TODO List</p><div class="round reded"><i class="fa fa-list-ul" aria-hidden="true"></i></div>
			</div>
		<div class="clear"></div>
	</div>
	<div class="close-sidebar">
		<p>Fermer</p>
	</div>
	<div class="post-header user-header">
		<div class="user-header-container user" style="background-image: url(ressources/images/cover.jpg);">
			<div class="post-img">
				<a href="#"><img src="ressources/images/user-me.jpg" alt=""></a>
			</div>
			<div class="post-user">
				<div class="user-name"><a href="#"><p>Tom Amount <span>@tamount</span></p></a></div>
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
	<div class="sidebar toolbar toggle">
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
	</div>
	<div class="sidebar todo toggle">
		
	</div>
	<div class="infobar toggle">
		<div class="infos relations">
			<h4>Entrez en relation avec</h4>
			<div class="info-bloc">
				<div class="info-header">
					<div class="info-img">
						<a href="#"><img src="ressources/images/user-2.jpg" alt=""></a>
					</div>
					<div class="info-user follow">
						<p><a href="#">Antoine Machin</a></p>
						<em><a href="#">@amachin</a></em>
						<span>Directeur commercial</span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="infoconnect">
					<a href="#" class="linking accept">
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						<span>Se connecter</span>
					</a>
					<a href="#" class="linking decline">
						<i class="fa fa-times-circle" aria-hidden="true"></i>
						<span>Décliner</span>
					</a>
				</div>
			</div>
			<div class="info-bloc follow">
				<div class="info-header">
					<div class="info-img">
						<a href="#"><img src="ressources/images/user-2.jpg" alt=""></a>
					</div>
					<div class="info-user">
						<p><a href="#">Antoine Machin</a></p>
						<em><a href="#">@amachin</a></em>
						<span>Directeur commercial</span>
					</div>
					<div class="clear"></div>
				</div>
				<div class="infoconnect">
					<a href="#" class="linking accept">
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						<span>Se connecter</span>
					</a>
					<a href="#" class="linking decline">
						<i class="fa fa-times-circle" aria-hidden="true"></i>
						<span>Décliner</span>
					</a>
				</div>
			</div>
		</div>
		<div class="infos advertising">
			<div class="info-header pub-header">
				<h4>Publicité</h4>
			</div>
			<div class="pub-visu">
				<a href="#">
					<img src="ressources/images/pub.jpg" alt="">
				</a>
			</div>
			<div class="pub-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab velit saepe illum voluptatibus nulla <a href="#">similique dolores lib!</a></p>
			</div>
		</div>
		<div class="infos companies">
			<h4>Suivez ces entreprises</h4>
			<div class="info-bloc">
				<div class="info-header">
					<div class="info-img">
						<a href="#"><img src="ressources/images/user-2.jpg" alt=""></a>
					</div>
					<div class="info-user">
						<p><a href="#">Entreprise 1</a></p>
						<em><a href="#">@entreprise1</a></em>
						<span>développement web</span>
					</div>
					<div class="clear"></div>
					<i class="fa fa-plus" aria-hidden="true"></i>
				</div>
				<div class="infoconnect">
					<a href="#" class="linking accept">
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						<span>Se connecter</span>
					</a>
					<a href="#" class="linking decline">
						<i class="fa fa-times-circle" aria-hidden="true"></i>
						<span>Décliner</span>
					</a>
				</div>
			</div>
			<div class="info-bloc">
				<div class="info-header">
					<div class="info-img">
						<a href="#"><img src="ressources/images/user-2.jpg" alt=""></a>
					</div>
					<div class="info-user">
						<p><a href="#">Entreprise 2</a></p>
						<em><a href="#">@entreprise2</a></em>
						<span>Management</span>
					</div>
					<div class="clear"></div>
					<i class="fa fa-plus" aria-hidden="true"></i>
				</div>
				<div class="infoconnect">
					<a href="#" class="linking accept">
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						<span>Se connecter</span>
					</a>
					<a href="#" class="linking decline">
						<i class="fa fa-times-circle" aria-hidden="true"></i>
						<span>Décliner</span>
					</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="main toggle">
		<div class="main-header">
			<h2>#Channel 1 <i class="fa fa-cog" aria-hidden="true"></i></h2>
			<div class="channel-options">
				<div class="channel-option-title">
					<h4>Options du channel : <span>#Channel 1</span></h4>
					<!--
						Utilisateur
						Groupe utilisateur
						Entreprises
						Thèmes / hashtags
					-->
				</div>
				<form action="#" method="POST" class="form">
					<div class="field nol">
						<label for="channel-name">Nom du channel</label>
						<span class="sharp">#</span>
						<input type="text" class="mb" id="channel-name" placeholder="Nom du channel">
						<div class="clear"></div>
					</div>
					<div class="field nol">
						<label for="add-people">Ajouter des utilisateurs</label>
						<input type="text" class="np mb" id="add-people" placeholder="Ajouter des utilisateurs">
						<i class="fa fa-user-plus" aria-hidden="true"></i>
					</div>
					<div class="field nol">
						<label for="add-teams">Ajouter des teams</label>
						<input type="text" class="np mb" id="add-teams" placeholder="Ajouter des teams">
						<i class="fa fa-users" aria-hidden="true"></i>
					</div>
					<input type="submit" value="Enregistrer" class="button button-green submit">
					<div class="clear"></div>
				</form>
			</div>
		</div>
		<div class="main-content">
			<div class="post my-post">
				<div class="modify-my-post">
						<p class="modify-my-post-btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editer</p>
					<div class="modify-my-post-content">
					<ul>
						<h4>Editer</h4>
						<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</a></li>
						<li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i> supprimer</a></li>
					</ul>
					</div>
				</div>
				<div class="post-container">
					<div class="post-header">
						<div class="post-img">
							<a href="#"><img src="ressources/images/user-me.jpg" alt=""></a>
						</div>
						<div class="post-user">
							<div class="user-name"><a href="#"><p>Tom Amount <span>@tamount</span></p></a></div>
							<div class="user-title"><p>Directeur Recherche & Développement <a href="#">@entreprise1</a></p></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="post-content">
						<p>Important : Les nouveaux planning sont arrivés ! <a href="#">https://debriefon.com/post/02550ad5568dv</a></p>
						<div class="post-content-img">
							<img src="ressources/images/actu-img.jpg" alt="">
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="post-actions">
					<div class="post-actions-icons open-content">
						<i class="fa fa-refresh quote-icon" aria-hidden="true"></i>
						<div class="post-actions-content">
							<h4>Citer ce post <span class="button button-small cancel">Annuler</span></h4>
							<form action="" class="form">
								<div class="field">
									<label for="quote-comment" class="hide-label">Ajouter un commentaire</label>
									<textarea name="quote-comment" id="quote-comment" placeholder="Ajouter un commentaire"></textarea>
								</div>
								<div class="quote-post d-scrollbar"></div>
								<div class="action-form-validate">
									<input type="submit" value="Citer ce post" class="button button-green">
									<div class="clear"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="post-actions-icons "> <!--PHP TODO Ajouter la classe liked lorsqu'un poste est aimé-->
						<i class="fa fa-heart" aria-hidden="true"></i>
					</div>
					<div class="post-actions-icons open-content">
						<i class="fa fa-reply" aria-hidden="true"></i>
						<div class="post-actions-content dn">
							<h4>Répondre à <span class="user-respond"><!-- PHP TODO [Insérer le nom de l'utilisateur à qui répondre] --></span><span class="button button-small cancel">Annuler</span></h4>
							<form action="" class="form">
								<div class="field">
									<label for="quote-comment" class="hide-label">Répondre à <!-- PHP TODO [Insérer le nom de l'utilisateur à qui répondre] --></label>
									<textarea name="quote-comment" id="quote-comment" rows="5" placeholder="Répondre à"></textarea>
								</div>
								<div class="action-form-validate">
									<input type="submit" value="Répondre à " class="button button-green">
									<!-- PHP TODO [Insérer le nom de l'utilisateur à qui répondre] -->
									<div class="clear"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="post-actions-icons open-content">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<div class="post-actions-content dn">
							<h4>Plus</h4>
						</div>
					</div>
					<div class="post-action-dark"></div>
				</div>
			</div>
			<div class="post">
				<div class="post-container">
					<div class="post-header">
						<div class="post-img">
							<a href="#"><img src="ressources/images/user-1.jpg" alt=""></a>
						</div>
						<div class="post-user">
							<div class="user-name"><a href="#"><p>John Doe <span>@johndoe</span></p></a></div>
							<div class="user-title"><p>Manager des unitées commerciales <a href="#">@entreprise2</a></p></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="post-content">
						<p>Important : Les nouveaux planning sont arrivés ! <a href="#">https://debriefon.com/post/02550ad5568dv</a></p>
						<div class="post-content-img">
							<img src="ressources/images/actu-img.jpg" alt="">
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="post-actions">
					<div class="post-actions-icons open-content">
						<i class="fa fa-refresh quote-icon" aria-hidden="true"></i>
						<div class="post-actions-content">
							<h4>Citer ce post <span class="button button-small cancel">Annuler</span></h4>
							<form action="" class="form">
								<div class="field">
									<label for="quote-comment" class="hide-label">Ajouter un commentaire</label>
									<textarea name="quote-comment" id="quote-comment" placeholder="Ajouter un commentaire"></textarea>
								</div>
								<div class="quote-post d-scrollbar"></div>
								<div class="action-form-validate">
									<input type="submit" value="Citer ce post" class="button button-green">
									<div class="clear"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="post-actions-icons "> <!--PHP TODO Ajouter la classe liked lorsqu'un poste est aimé-->
						<i class="fa fa-heart" aria-hidden="true"></i>
					</div>
					<div class="post-actions-icons open-content">
						<i class="fa fa-reply" aria-hidden="true"></i>
						<div class="post-actions-content dn">
							<h4>Répondre à <span class="user-respond"><!-- PHP TODO [Insérer le nom de l'utilisateur à qui répondre] --></span><span class="button button-small cancel">Annuler</span></h4>
							<form action="" class="form">
								<div class="field">
									<label for="quote-comment" class="hide-label">Répondre à <!-- PHP TODO [Insérer le nom de l'utilisateur à qui répondre] --></label>
									<textarea name="quote-comment" id="quote-comment" rows="5" placeholder="Répondre à"></textarea>
								</div>
								<div class="action-form-validate">
									<input type="submit" value="Répondre à " class="button button-green">
									<!-- PHP TODO [Insérer le nom de l'utilisateur à qui répondre] -->
									<div class="clear"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="post-actions-icons open-content">
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
						<div class="post-actions-content dn">
							<h4>Plus</h4>
						</div>
					</div>
					<div class="post-action-dark"></div>
				</div>
			</div>
			<div class="post">
				<div class="post-header">
					<div class="post-img">
						<a href="#"><img src="ressources/images/user-1.jpg" alt=""></a>
					</div>
					<div class="post-user">
						<div class="user-name"><a href="#"><p>John Doe <span>@johndoe</span></p></a></div>
						<div class="user-title"><p>Manager des unitées commerciales <a href="#">@entreprise2</a></p></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="post-content">
					<p>Important : Les nouveaux planning sont arrivés ! <a href="#">https://debriefon.com/post/02550ad5568dv</a></p>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="post">
				<div class="post-header">
					<div class="post-img">
						<a href="#"><img src="ressources/images/user-1.jpg" alt=""></a>
					</div>
					<div class="post-user">
						<div class="user-name"><a href="#"><p>John Doe <span>@johndoe</span></p></a></div>
						<div class="user-title"><p>Manager des unitées commerciales <a href="#">@entreprise2</a></p></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="post-content">
					<p>Important : Les nouveaux planning sont arrivés ! <a href="#">https://debriefon.com/post/02550ad5568dv</a></p>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="post">
				<div class="post-header">
					<div class="post-img">
						<a href="#"><img src="ressources/images/user-1.jpg" alt=""></a>
					</div>
					<div class="post-user">
						<div class="user-name"><a href="#"><p>John Doe <span>@johndoe</span></p></a></div>
						<div class="user-title"><p>Manager des unitées commerciales <a href="#">@entreprise2</a></p></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="post-content">
					<p>Important : Les nouveaux planning sont arrivés ! <a href="#">https://debriefon.com/post/02550ad5568dv</a></p>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="post-content-img">
						<img src="ressources/images/actu-img.jpg" alt="">
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="more-posts">
				<a href="#">Afficher plus de posts</a>
			</div>
		</div>
	</div>
	


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="ressources/js/parallax/parallax.js"></script>
	<script src="ressources/js/front.js"></script>
	<script src="ressources/js/app.js"></script>
</body>
</html>