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
				<li><a href="#" class=""><i class="fa fa-home" aria-hidden="true"></i>Accueil</a></li>
				<li><a href="#" class="active"><i class="fa fa-user" aria-hidden="true"></i>Profil</a></li>
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
	<div class="infobar toggle profil-infobar">
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
	<div class="profil-header toggle">
		<div class="profil-cover parallax-section" style="background-image: url(ressources/images/cover.jpg);">
		</div>
		<div class="modify-header">
			<form action="#" method="POST">
				<p class="modify-action" id="modify-cover">Changer l'image de fond</p>
				<label for="modify-header-label" class="dn">Changer l'image de fond</label>
				<input type="file" id="modify-header-label" class="modify-header-file dn">
				<input type="submit" value="Enregistrer" class="button button-green modify-header-submit">
			</form>
		</div>
		<div class="profil-img">
			<a href="#"><img src="ressources/images/user-me.jpg" alt=""></a>
			<div class="change-img modify-action" id="modify-pro">
				<i class="fa fa-camera" aria-hidden="true"></i>
			</div>
		</div>
		<div class="profil-name">
			<h4>Tom Amount</h4>
			<p>@tamount</p>
		</div>		
		<div class="darker-modify"></div>
		<div class="modify-img d-scrollbar modify-pro">
		<div class="close-modify">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
			<form action="#" method="#">
				<h4>Changer l'image de profil <em>(Largeur conseillée : 150px)</em></h4>
				<div class="alert info"><i class="fa fa-info-circle" aria-hidden="true"></i><p class="selected-file"> Aucune image choisie</p></div>
				<label for="modify-img-pro" class="button">Choisir une image</label>
				<input type="file" class="modify-file dn" id="modify-img-pro" required>
				<input type="submit" value="Enregistrer" name="pro-submit" class="button button-green submit">
			</form>
			<div class="preview-image"><img src="" alt="" /></div>
		</div>
		<div class="modify-img d-scrollbar modify-cover">
		<div class="close-modify">
			<i class="fa fa-times" aria-hidden="true"></i>
		</div>
			<form action="#" method="#">
				<h4>Changer l'image de fond <em>(Largeur conseillée : 1400px)</em></h4>
				<div class="alert info"><i class="fa fa-info-circle" aria-hidden="true"></i><p class="selected-file"> Aucune image choisie</p></div>
				<label for="modify-img-cover" class="button">Choisir une image</label>
				<input type="file" class="modify-file dn" id="modify-img-cover" required>
				<input type="submit" value="Enregistrer" name="cover-submit" class="button button-green submit">
			</form>
			<div class="preview-image"><img src="" alt="" /></div>
		</div>
	</div>
	<div class="edit-profil-band">
		<ul class="profil-top-menu">
			<li class="active" id="profil"><i class="fa fa-user" aria-hidden="true"></i> Profil</li>
			<li id="posts"><i class="fa fa-paper-plane" aria-hidden="true"></i> Posts <span>128</span></li>
			<li id="relations"><i class="fa fa-users" aria-hidden="true"></i> Relations <span>55</span></li>
			<li id="follow"><i class="fa fa-building" aria-hidden="true"></i> Abonnements <span>60</span></li>
			<li id="medias"><i class="fa fa-picture-o" aria-hidden="true"></i> Medias <span>25</span></li>
			<div class="clear"></div>
		</ul>
		<div class="clear"></div>
	</div>
	<div class="notification-bloc">
		<div class="notification success-notif">
			<i class="fa fa-dot-circle-o" aria-hidden="true"></i> Profil mis à jours
		</div>
		<div class="notification error-notif">
			<i class="fa fa-dot-circle-o" aria-hidden="true"></i> Erreur lors de la soumission du formulaire
		</div>
	</div>
	<div class="main toggle profil-main">
		<div class="profil-content profil-content-profil profil-info active">
			<div class="profil-info-header">
				<h2>Profil de <span>Tom Amount</span></h2>
			</div>
			<div class="profil-bloc">
				<!--<div class="edit-profil">
					<i class="fa fa-pencil" aria-hidden="true"></i> <span>Editer</span>
				</div>-->
				<p class="profil-bloc-title">Poste actuel</p>
				<div class="profil-bloc-content">
					<p>Directeur Recherche & développement <a href="#">@entreprise1</a> </p>
				</div>
				<div class="edit-profil-form">
					<div class="close-edit">
						<i class="fa fa-times" aria-hidden="true"></i><span> Fermer</span>
					</div>
					<form action="#" method="POST">
						<div class="field inline-field">
							<label for="poste-actuel">Renseignez votre nouveau poste actuel</label>
							<input type="text" name="poste-actuel" class="text-input small-input" id="poste-actuel">
							<div class="submit-bloc">
								<input type="submit" value="Enregistrer" class="button button-green submit nm button-float-r">
							<div class="clear"></div>
							</div>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="profil-bloc">
				<div class="edit-profil">
					<i class="fa fa-pencil" aria-hidden="true"></i> <span>Editer</span>
				</div>
				<p class="profil-bloc-title">Biographie</p>
				<div class="profil-bloc-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam placeat cum excepturi perspiciatis molestias expedita quidem earum animi blanditiis atque, nisi dolor incidunt asperiores nulla temporibus eaque tempore corrupti minima nemo repellat provident, fugiat, error eos, quia maxime? Iusto quod animi harum delectus vero explicabo voluptates assumenda incidunt nisi, dolorum?</p>
				</div>
				<div class="edit-profil-form">
					<div class="close-edit">
						<i class="fa fa-times" aria-hidden="true"></i><span> Fermer</span>
					</div>
					<p>Editer votre biographie</p>
					<form action="#" method="POST">
						<div class="field inline-field">
							<label for="biographie">Biographie <i class="fa fa-trash-o" aria-hidden="true" title="Nettoyer"></i></label>
							<textarea name="biographie" class="textarea-medium mb d-scrollbar" id="biographie"></textarea>
							<div class="submit-bloc">
								<input type="submit" value="Enregistrer" class="button button-green submit nm button-float-r">
							<div class="clear"></div>
							</div>
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>
			<div class="profil-bloc">
				<div class="edit-profil">
					<i class="fa fa-plus" aria-hidden="true"></i> <span>Ajouter</span>
				</div>
				<p class="profil-bloc-title">Experience</p>
				<div class="profil-bloc-content">
					<ul>
						<li>
							<div class="experience-bloc">
								<h5>Directeur recherche et développement <i class="fa fa-trash-o remove-link" aria-hidden="true"></i><div class="remove-ask"> Supprimer cette information ? <a href="#">oui</a> <div>non</div></div><i class="fa fa-pencil edit-link" aria-hidden="true"></i></h5>
								<span><a href="#">Entreprise 2</a></span>
								<em>juin 2015 - Ajourd'hui</em>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, officiis.</p>
							</div>							
							<div class="edit-profil-form modify-profil-form">
								<div class="close-edit">
									<i class="fa fa-times" aria-hidden="true"></i><span> Fermer</span>
								</div>
								<p><span>Editer</span> une experience</p>
								<form action="#" data-controller="controller" method="POST">
									<div class="field inline-field">
										<label for="experience">Votre experience</label>
										<input name="experience" class="mb" id="experience">
										<div class="clear"></div>
									</div>
									<div class="field inline-field">
										<label for="Entreprise">Entreprise</label>
										<input name="Entreprise" class="mb" id="Entreprise">
										<div class="clear"></div>
									</div>
									<div class="field inline-field">
										<label for="Periode">Période</label>
										<input name="Periode" class="mb" id="Periode">
										<div class="clear"></div>
									</div>
									<div class="field inline-field small-textarea">
										<label for="comment">Commentaire</label>
										<textarea name="comment" id="comment" class=""></textarea>
										<div class="clear"></div>
									</div>
									<div class="submit-bloc">
										<input type="submit" value="Enregistrer" class="button button-green submit nm button-float-r">
										<div class="clear"></div>
									</div>
								</form>
							</div>
						</li>
						<li>
							<div class="experience-bloc">
								<h5>Directeur recherche et développement <i class="fa fa-trash-o remove-link" aria-hidden="true"></i><div class="remove-ask"> Supprimer cette information ? <a href="#">oui</a> <div>non</div></div><i class="fa fa-pencil edit-link" aria-hidden="true"></i></h5>
								<span><a href="#">Entreprise 2</a></span>
								<em>juin 2015 - Ajourd'hui</em>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, officiis.</p>
							</div>
						</li>
						<li>
							<div class="experience-bloc">
								<h5>Directeur recherche et développement <i class="fa fa-trash-o remove-link" aria-hidden="true"></i><div class="remove-ask"> Supprimer cette information ? <a href="#">oui</a> <div>non</div></div><i class="fa fa-pencil edit-link" aria-hidden="true"></i></h5>
								<span><a href="#">Entreprise 2</a></span>
								<em>juin 2015 - Ajourd'hui</em>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, officiis.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="edit-profil-form">
					<div class="close-edit">
						<i class="fa fa-times" aria-hidden="true"></i><span> Fermer</span>
					</div>
					<p><span>Ajouter</span> une experience</p>
					<form action="#" data-controller="controller" method="POST">
						<div class="field inline-field">
							<label for="experience">Votre experience</label>
							<input name="experience" class="mb" id="experience">
							<div class="clear"></div>
						</div>
						<div class="field inline-field">
							<label for="Entreprise">Entreprise</label>
							<input name="Entreprise" class="mb" id="Entreprise">
							<div class="clear"></div>
						</div>
						<div class="field inline-field">
							<label for="Periode">Période</label>
							<input name="Periode" class="mb" id="Periode">
							<div class="clear"></div>
						</div>
						<div class="field inline-field small-textarea">
							<label for="comment">Commentaire</label>
							<textarea name="comment" id="comment" class=""></textarea>
							<div class="clear"></div>
						</div>
						<div class="submit-bloc">
							<input type="submit" value="Enregistrer" class="button button-green submit nm button-float-r">
							<div class="clear"></div>
						</div>
					</form>
				</div>
			</div>	
			<div class="profil-bloc">
				<div class="edit-profil">
					<i class="fa fa-plus" aria-hidden="true"></i> <span>Ajouter</span>
				</div>
				<p class="profil-bloc-title">Diplômes et certifications</p>
				<div class="profil-bloc-content">
					<ul>
						<li>
							<div class="experience-bloc">
								<h5>Master physique des particules <i class="fa fa-trash-o remove-link" aria-hidden="true"></i><div class="remove-ask"> Supprimer cette information ? <a href="#">oui</a> <div>non</div></div> <i class="fa fa-pencil edit-link" aria-hidden="true"></i></h5>
								<span><a href="#">Université de strasbourg</a></span>
								<em>juin 2010</em>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, officiis.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="edit-profil-form last-page-form">
					<div class="close-edit">
						<i class="fa fa-times" aria-hidden="true"></i><span> Fermer</span>
					</div>
					<p><span>Ajouter</span> un diplôme ou une certification</p>
					<form action="#" method="POST">
						<div class="field inline-field">
							<label for="diplome">Diplôme ou certification</label>
							<input name="diplome" class="mb" id="diplome">
							<div class="clear"></div>
						</div>
						<div class="field inline-field">
							<label for="ecole">Ecole</label>
							<input name="ecole" class="mb" id="ecole">
							<div class="clear"></div>
						</div>
						<div class="field inline-field">
							<label for="optention">Année d'optention</label>
							<input name="optention" class="mb" id="optention">
							<div class="clear"></div>
						</div>						
						<div class="field inline-field small-textarea">
							<label for="comment">Commentaire</label>
							<textarea name="comment" id="comment" class=""></textarea>
							<div class="clear"></div>
						</div>
						<div class="submit-bloc">
							<input type="submit" value="Enregistrer" class="button button-green submit nm button-float-r">
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</form>
				</div>
			</div>			
			<div class="edit-darker"></div>
		</div>
		<div class="profil-content profil-content-posts">
			<div class="profil-info-header">
				<h2>Posts de <span>Tom Amount</span><em class="numbers"></em></h2>
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
								<textarea name="" id="" class="add-message" placeholder="A quoi pensez-vous ?" required></textarea>
								<div class="files-added empty">
								</div>
								<div class="form-bottom">
									<span class="add-files">
										<img src="ressources/images/add-media.png" alt="">									
									</span>
									<div class="add-files-container">
										<h4>Ajouter un media</h4>
										<div class="add-files-options">
											<ul>
												<li>
													<label for="image1" class="button label-add image1">
														<i class="fa fa-picture-o" aria-hidden="true"></i> 
														<span>Ajouter une image</span>
													</label>
													<input type="file" class="input-add hide" id="image1">
												</li>
												<li>
													<label for="video" class="button label-add">
														<i class="fa fa-film" aria-hidden="true"></i> 
														<span>Ajouter une vidéo</span>
													</label>
													<input type="file" class="input-add hide" id="video">
												</li>
											</ul>
										</div>
										<div class="add-validate">
											<span class="button button-green">Valider</span>
											<div class="clear"></div>
										</div>
									</div>
									<select name="" id="" class="select-visibility">
										<option value="">Entreprise</option>
										<option value="">Réseau</option>
										<option value="">Privé</option>
										<option value="">Public</option>
									</select>
									<input type="submit" value="Publier" class="button button-green new-post unable">
									<div class="clear"></div>
								</div>
							</form>
						</div>
						<div class="clear"></div>
					</div>
					<div class="add-dark"></div>
			</div>
			<div class="main-content">
				<div class="post">
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
							<p>Mon post</a></p>
							<div class="clear"></div>
						</div>
					</div>
					<div class="post-actions">
						<div class="post-actions-icons open-content">
							<i class="fa fa-refresh quote-icon" aria-hidden="true"></i>
							<div class="post-actions-content">
								<h4>Citer ce post <span class="button button-small cancel">Annuler</span></h4>
								<form action="" class="form">
									<div class="field inline-field">
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
									<div class="field inline-field">
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
			</div>
		</div>
		<div class="profil-content profil-content-relations">
			<div class="profil-info-header">
				<h2>Relations de <span>Tom Amount</span><em class="numbers"></em></h2>
			</div>
			<div class="d-container">
				<div class="d-row">
					<div class="d-col d-col-4">
						<form action="#" method="POST" class="form">
							<div class="field">
								<label for="search-bar1" class="dn">Rechercher parmis les relations</label>
								<input type="text" id="search-bar1" class="input full-border" placeholder="Rechercher parmis les relations">
							</div>
						</form>
					</div>
				</div>
				<div class="d-row">
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
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
						<div class="clear"></div>
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/user-me.jpg" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Wade Wilson <span>@deadpool</span></p></a></div>
								<div class="user-title"><p>Mercenaire <a href="#">@ttention</a></p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="d-col d-col-4 relation-col">
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
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="profil-content profil-content-follow">
			<div class="profil-info-header">
				<h2>Abonnements de <span>Tom Amount</span><em class="numbers"></em></h2>
			</div>
			<div class="d-container">
				<div class="d-row">
					<div class="d-col d-col-4">
						<form action="#" method="POST" class="form">
							<div class="field">
								<label for="search-bar2" class="dn">Rechercher parmis les abonnements</label>
								<input type="text" id="search-bar2" class="input full-border" placeholder="Rechercher parmis les abonnements">
							</div>
						</form>
					</div>
				</div>
				<div class="d-row">
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 1 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 1 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 1 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 1 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 6 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 1 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 2 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="d-col d-col-4 follow-col">
						<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Entreprise 1 <span>@tamount</span></p></a></div>
								<div class="user-title"><p>Recherche & Développement</p></div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="profil-content profil-content-medias">
			<div class="profil-info-header">
				<h2>Medias de <span>Tom Amount</span><em class="numbers"></em></h2>
			</div>
			<div class="profil-bloc">
				<img src="ressources/images/actu-img.jpg" alt="">
				<img src="ressources/images/actu-img.jpg" alt="">
				<img src="ressources/images/actu-img.jpg" alt="">
				<img src="ressources/images/actu-img.jpg" alt="">
				<img src="ressources/images/actu-img.jpg" alt="">
				<div class="clear"></div>
			</div>
		</div>
		<div class="profil-sider">
			<div class="profil-side">
				<h4>Dernières relations</h4>
				<div class="profil-relation-content">
					<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/user-3.jpg" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Marc Aurele <span>@tamount</span></p></a></div>
							</div>
							<div class="clear"></div>
						</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/user-3.jpg" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Marc Aurele <span>@tamount</span></p></a></div>
							</div>
							<div class="clear"></div>
						</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/user-3.jpg" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Marc Aurele <span>@tamount</span></p></a></div>
							</div>
							<div class="clear"></div>
						</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/user-3.jpg" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Marc Aurele <span>@tamount</span></p></a></div>
							</div>
							<div class="clear"></div>
						</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
							<div class="post-img">
								<a href="#"><img src="ressources/images/user-3.jpg" alt=""></a>
							</div>
							<div class="post-user">
								<div class="user-name"><a href="#"><p>Marc Aurele <span>@tamount</span></p></a></div>
							</div>
							<div class="clear"></div>
						</div>
				</div>
			</div>
			<div class="profil-side">
				<h4>Medias</h4>
				<div class="profil-side-media">
					<img src="ressources/images/entreprise.jpg" alt="">
				</div>
				<div class="profil-side-media">
					<img src="ressources/images/entreprise.jpg" alt="">
				</div>
				<div class="profil-side-media">
					<img src="ressources/images/entreprise.jpg" alt="">
				</div>
				<div class="profil-side-media">
					<img src="ressources/images/entreprise.jpg" alt="">
				</div>
				<div class="clear"></div>
			</div>
			<div class="profil-side">
				<h4>Derniers abonnements</h4>
				<div class="profil-relation-content">
					<div class="post-header">
						<div class="post-img">
							<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
						</div>
						<div class="post-user">
							<div class="user-name"><a href="#"><p>Entreprise 3 <span>@entreprise3</span></p></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
						<div class="post-img">
							<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
						</div>
						<div class="post-user">
							<div class="user-name"><a href="#"><p>Entreprise 3 <span>@entreprise3</span></p></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
						<div class="post-img">
							<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
						</div>
						<div class="post-user">
							<div class="user-name"><a href="#"><p>Entreprise 3 <span>@entreprise3</span></p></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
						<div class="post-img">
							<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
						</div>
						<div class="post-user">
							<div class="user-name"><a href="#"><p>Entreprise 3 <span>@entreprise3</span></p></a></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="profil-relation-content">
					<div class="post-header">
						<div class="post-img">
							<a href="#"><img src="ressources/images/entreprise-tmp.png" alt=""></a>
						</div>
						<div class="post-user">
							<div class="user-name"><a href="#"><p>Entreprise 3 <span>@entreprise3</span></p></a></div>
						</div>
						<div class="clear"></div>
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