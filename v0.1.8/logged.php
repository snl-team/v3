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
	<link rel="stylesheet" href="ressources/css/home.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="icon" href="ressources/images/favicon.png" />
	
	<!-- Plugin Owl Carousel -->
	<link rel="stylesheet" href="ressources/plugins/owl-slider/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="ressources/plugins/owl-slider/owl-carousel/owl.theme.css">

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
				<li><a href="#" class=""><i class="fa fa-cogs" aria-hidden="true"></i>Gestion de projet</a></li>
				<li><a href="#" class=""><i class="fa fa-th" aria-hidden="true"></i>Applications</a></li>
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
		<div class="user-header-container user">
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
		<div class="sidebar-content hashtag open">
			<div class="sidebar-content-header">
				<h4><i class="fa fa-hashtag" aria-hidden="true"></i> Channels</h4>
			</div>
			<div class="sidebar-content-content">
				<ul>
					<li><a href="#">#Channel 1 <span class="channel-new">5</span></a></li>
					<li><a href="#">#Channel 2</a></li>
					<li><a href="#">#Channel 3</a></li>
					<li><a href="#">#Channel 4</a></li>
				</ul>
			</div>
		</div>
		<div class="sidebar-content briefcase">
			<div class="sidebar-content-header">
				<h4><i class="fa fa-briefcase" aria-hidden="true"></i> Groupes de travail</h4>
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
		<div class="sidebar-content comments">
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
		<div class="sidebar-content users">
			<div class="sidebar-content-header">
				<h4><i class="fa fa-users" aria-hidden="true"></i> Contacts</h4>
			</div>
			<div class="sidebar-content-content">
				<ul>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a></li>
					<li><div class="contact-img offline"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a></li>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a></li>
					<li><div class="contact-img online"><img src="ressources/images/user-1.jpg" alt=""></div> <a href="#">Jean Valjean </a></li>
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
					<div class="info-user">
						<p><a href="#">Antoine Machin</a></p>
						<em><a href="#">@amachin</a></em>
						<span>Directeur commercial</span>
					</div>
					<div class="clear"></div>
					<i class="fa fa-plus" aria-hidden="true"></i>
				</div>
				<div class="info-connect">
					<a href="#" class="accept">Se connecter</a>
					<a href="#" class="decline">Décliner</a>
				</div>
			</div>
			<div class="info-bloc">
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
					<i class="fa fa-plus" aria-hidden="true"></i>
				</div>
				<div class="info-connect">
					<a href="#" class="accept">Se connecter</a>
					<a href="#" class="decline">Décliner</a>
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
			<h4>Suivez ses entreprises</h4>
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
				<div class="info-connect">
					<a href="#" class="accept">Se connecter</a>
					<a href="#" class="decline">Décliner</a>
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
				<div class="info-connect">
					<a href="#" class="accept">Se connecter</a>
					<a href="#" class="decline">Décliner</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="main toggle">
		<div class="main-header">
			<h2>Actualités</h2>
		</div>
		<div class="post add-post">
			<div class="post-header">
					<div class="post-img">
						<a href="#"><img src="ressources/images/user-me.jpg" alt=""></a>
					</div>
					<div class="post-user">
						<div class="user-name"><a href="#"><p>Tom Amount <span>@tamount</span></p></a></div>
						<div class="user-title"><p>Directeur Recherche & Développement <a href="#">@entreprise1</a></p></div>
					</div>
					<div class="add-post-form">
						<form action="" class="form">
							<textarea name="" id="" class="add-message"></textarea>
							<div class="files-added empty">
							</div>
							<div class="form-bottom">
								<span class="add-files">
									<img src="ressources/images/add-media.png" alt="">									
								</span>
								<div class="add-files-container">
									<div class="add-files-options">
										<h4>Ajouter un media</h4>
										<ul>
											<li><label for="image" class="button label-add"><i class="fa fa-picture-o" aria-hidden="true"></i> Ajouter une image</label><input type="file" class="input-add hide" id="image"></li>
											<li><label for="video" class="button label-add"><i class="fa fa-film" aria-hidden="true"></i> Ajouter une vidéo</label><input type="file" class="input-add hide" id="video"></li>
										</ul>
									</div>
								</div>
								<select name="" id="" class="select-visibility">
									<option value="">Entreprise</option>
									<option value="">Réseau</option>
									<option value="">Privé</option>
									<option value="">Public</option>
								</select>
								<input type="submit" value="Publier" class="button button-green new-post">
								<div class="clear"></div>
							</div>
						</form>
					</div>
					<div class="clear"></div>
				</div>
		</div>
		<div class="main-content">
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
		</div>
	</div>
	


	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="ressources/js/parallax/parallax.js"></script>
	<script src="ressources/js/front.js"></script>
	<script src="ressources/js/app.js"></script>
</body>
</html>