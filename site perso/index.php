<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Quentin Dugne" />
	<meta name="description" content="Le site d'un jeune dev web motivé ayant quelques bagages" />
	<meta name="keywords" content="Developpement web, webdesign, infographie" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" href="design/design.css" title="Design" type="text/css" media="all" /> 	

	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
	
	<!--<script src="js/jquery.mCustomScrollbar.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
	<link href="js/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,600' rel='stylesheet' type='text/css'>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<script type="text/javascript">$(document).ready(function() 
	{ 
		$("#tabs").tabs();
	});</script>
	<title>Chez Quentin Dugne</title>

</head>
<body style="background-color:#dbeaf9; overflow-y:hidden;
	overflow-x:hidden;"><div id="page">
<div  class="container" id="header">
<img src="images/Bannieresite.png" alt="banniere" />
</div>

<div  class="container" id="bloc" >
	<div class="row">
		<div class="span12">
			<div id="tabs">
				<ul id="ong">
					<li><a href="#tabs-1"> Index du site</a></li>
					<li><a href="#tabs-2"> Dev Web</a></li>
					<li><a href="#tabs-3"> Infographie</a></li>
					<li><a href="#tabs-4"> Divers</a></li>
					<li id="basdroite"><a href="#tabs-5"> Qui suis-je?</a></li>
				</ul>	
				<div  class="container" id="tabs-1" style="overflow-y:hidden;
	overflow-x:hidden;">
					<div class="row-fluid"> 
						<div class="span7"><h2 id="titre">Bienvenue</h2>
							<div class="row-fluid"> 
								<div class="span12" id="produit">
									<p> Bienvenue sur le site de <strong>Quentin Dugne</strong>, jeune développeur web. Vous trouverez ici plusieurs travaux réalisés au cours de mes différentes expériences, qu'il s'agisse de mes études, mes stages, mes travaux professionnels ou encore quelques réalisations personnelles.</p>		<p> La section "Dev Web" contient des sites réalisés en HTML/CSS/PHP/MySQL, dans divers contextes. </p>		<p>La section "Infographie" contient mes réalisations faites sous photoshop, il s'agit principalement de travaux réalisés durant mes stages et mes années de DUT Services et Réseaux de Communication à l'IUT du Puy en Velay. </p>		<p>La section "Divers" contient mes réalisations n'ayant pas de rapport direct avec les deux précédents thèmes.</p>		<p> La dernière section me présente plus en détail et permet de télécharger mon CV.</p>	
									<div class="row" id="boutons">
										<div class="span5 offset1"></div>
										<div class="span4">
											<a href="mailto:qdugne@gmail.com" class="btn btn-warning btn-small"><i class="icon-white icon-user"></i> Me contacter</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="span1"></div>
						<div class="span3 offset1" id="agenda"> 
							<h4 id="titre">En bref</h4><p>Je suis un jeune diplômé de 25 ans titulaire d'un DUT SRC et d'une Licence Informatique en recherche d'emploi.</p>
						</div>
					</div>
				</div>
				<div class="container"id="tabs-2">
				
				<h3>Mes differents réalisations en matière de dev web et webdesign</h3>
				<div class="row-fluid" id="sites"> 
					<div class="span3 offset1" > 
						<a href="http://annuaire.lebondrive.fr/" target=_blank ><img src="imagessite/drive.png" alt="lebondrive" /> </a>
					</div>
					<div class="span5" > 
						<p>2013 Entrprise lebondrive.fr: refonte de l'annuaire de drives.</p>
						<p>Site utilisant HTML5, CSS3, PHP/MySQL et Javascript</p>
					</div>
				</div>
				<div class="row-fluid" id="sites"> 
					<div class="span3 offset1" > 
						<a href="http://covoiturage.pij-velay.org/" target=_blank ><img src="imagessite/covoit.png" alt="site de covoiturage" /> </a>
					</div>
					<div class="span5" > 
						<p>2010-2011 IUT SRC/PIJ-Velay: Site de covoiturage du Point information Jeunesse du Puy en Velay dans le cadre du projet tuteuré de 2nd année.</p>
						<p>Site utilisant HTML5, CSS3, PHP/MySQL et Javascript</p>
					</div>
				</div>
				<div class="row-fluid" id="sites"> 
					<div class="span3 offset1" > 
						<a href="sites/oiseaux/index.html" target=_blank><img src="imagessite/oiseaux.png" alt="Oiseaux" /> </a>
					</div>
					<div class="span5" > 
						<p>2012 CMI Romagnat: Site de présentation du projet de l'exposcience 2012 sur les oiseaux</p>
						<p>Site utilisant HTML5, CSS3 et Javascript</p>
					</div>
				</div>
				<div class="row-fluid" id="sites"> 
					<div class="span3 offset1" > 
						<a href="sites/cheires/index.html" target=_blank><img src="imagessite/cheires.png" alt="cheires" /> </a>
					</div>
					<div class="span5" > 
						<p>Depuis 2011 Snorkelling Auvergne, Club de Nage avec Palmes: Site de présentation du relais de nage avec palmes La Ronde des Cheires :</p>
						<p>Site utilisant HTML5, CSS3, et PHP</p>
					</div>
				</div>
			</div>
			<div class="container"id="tabs-3" style="overflow-y:hidden;
	overflow-x:hidden;">

				<?php
				try {
$bdd = new PDO('mysql:host=qdugneimages.mysql.db;dbname=qdugneimages','qdugneimages','*****', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
  catch (PDOException $error) {
die("Erreur de connexion : " . $error->getMessage() );
}

			

				$req=$bdd->prepare("SELECT * FROM infographie");
				$req->execute();
				
				

				?>
			

				<div id="carrousel">
					<div class="row-fluid"> 
						<div id="gallerie" class="span12" style="height: 430px; overflow: hidden; ">
							<div >
								<div id="mask">
									<ul id="image_container">
						
									<?php
										while($line=$req->fetch()){
										
										$i=$line['id'];
										$img=$line['image'];
										$titre=$line['titre'];
										$desc=$line['description'];
									
									?>
										<li style="margin-left:5px; width:855px;">
											<div  id="infograph" class="image<?php echo $i ?>">
												<div class="span1" id="imagecarrou"  >
													<a href="imagessite/<?php echo $img ?>.png" target=_blank><img src="img.php?q=<?php echo $img ?>" alt="<?php echo $titre ?>" /></a>
												</div>
											</div>
											<div class="span3" id="agenda"> 
												<h4 id="titre"><?php echo $titre ?></h4><p><?php echo $desc ?></p>
											</div>
										</li>				
										<?php } ?>
										<div id="fleche_droite" class="fleche">
											<i class="icon-chevron-right"></i>
										</div>
										<div id="fleche_gauche" class="fleche">
											<i class="icon-chevron-left"></i>
										</div>
									</ul>  
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container" id="tabs-4">
				<iframe width="420" height="315" src="//www.youtube.com/embed/22z6_ADutYE" frameborder="0" allowfullscreen></iframe>
				<p>2014 Stage dans l'entreprise <a href="http://lebondrive.fr">lebondrive.fr</a>: video promotionnelle réalisée dans le cadre du concours #mystartupinparis</p>	
			</div>
			<div class="container" id="tabs-5">
				<div class="row-fluid"> 
					<div class="span7 "><h2 id="titre">Qui suis-je?</h2>
						<div class="row-fluid"> 
							<div class="span12" id="produit">
								<h3>Pour me présenter</h3>
								<p>Je m'appelle Quentin Dugne. Je suis un jeune homme de 25 ans, originaire de Clermont-Ferrand et vivant en région parisienne, je suis principalement intéressé par le développement web avec PHP/MySQL, mais je possède aussi des compétences d'infographie et d'administration système et réseaux.</p>
								<h3>Formation</h3>
								<p>Je possède une Licence informatique de l'université d'Evry Val d'Essonnes(91) et un DUT Services et Réseaux de Communication de l'université Clermont1, antenne du Puy-en-Velay.</p>
								<h3>Expériences</h3>
								<ul id="exp">
								
									<li>-Stage de développeur web au sein de l'entreprise Lebondrive à Evry(91), durant ce stage mon travail a principalement consisté au développement d'un nouvel annuaire de recherche de drives.(2013)</li>
									
									<li>-Stage de Développeur/Admministrateur système dans l'entreprise Periscope Créations de Clermont-Ferrand(63), mon travail a consisté à une prise en main de Zend framework et à des tests de compatibilité sur une machine Windows 7 en vue d'une prochaine migration de l'entreprise.(2011)</li>
									
									<li>-Développeur web/Webmaster pour le point info jeune du Puy en Velay(43) ce travail consistait à la mise en place d'un site de réservation de covoiturage.(2011)</li>
									
									<li>-Développeur web/Webmaster pour le club Snorkelling Auvergne de Clermont Ferrand(63), ici ma tâche était de créer un site présentant une compétition de nage avec palmes et donner la possibilité aux gens de s'inscrire en ligne.(2011)</li>
									
									<li>-Développeur web/Webmaster pour l'école du Centre Médical Infantile de Romagnat(63), je devais créer un site présentant le projet expo-sciences de l'école sur les oiseaux du parc du centre, sous la forme d'un jeu de reconnaissance des oiseaux via leur cri et leur forme.(2012)<li>
									<li>-Poste bénévole de dépanneur informatique au siège des restaurants du coeur de Clermont Ferrand(63), où je devais principalement mettre en place de nouvelles machines et dépanner les machines défectueuses.(2012)</li>
									<li>-Infographiste/Dépanneur informatique au magasin d'informatique ID-PC de Brioude(43) dans le cadre d'un stage d'essai, j'ai eu à dépanner les machines des clients et créer un nouveau flyer.(2011)</li>
									<li>-Stage de dépanneur informatique au Centre Médical Infantile Romagnat(63), ce stage consistait surtout à rendre fonctionnelles et mettre en réseau toutes les machines du centre ainsi que centraliser les impressions sur une unique imprimante.(2010)</li>
									<li>-Tuteur aux Cordées de la réussite, emploi étudiant à Evry(91) consistant en l'accompagnement et l'encadrement de collégiens et lycéens dans le cadre de leur orientation, leur découverte des métiers et leur ouverture à la culture.(2012-2014)</li>
								</ul>
								<h3>Autres informations</h3>
								<p>Je suis passionné d'informatique, de jeux vidéos et de randonnées à vélo. J'ai un bon niveau d'anglais et je suis plutôt du genre à me lancer à fond dans les projets qui me passionnent</p>
							</div>
						</div>
					</div>
					<div class="span1"></div>
					<div class="span3 offset1" id="agenda"> <img src="images/photoident.png" alt="photo"/>
						<ul>
							<li>Nom: Dugne</li>
							<li>Prénom: Quentin</li>
							<li>Age: 25 ans</li>
							<br />
							<li><a href="CV-Qdugne.pdf" class="btn btn-warning btn-small"><i class="icon-white icon-list-alt"></i> Télécharger mon CV</a></li>
							<li><a href="mailto:qdugne@gmail.com" class="btn btn-warning btn-small"><i class="icon-white icon-user"></i> Me contacter</a></li>
						</ul>
					</div>
				</div>
			</div>
			</div>						
			</div>
		</div>
	</div>
</div>				

<div  class="container" id="footer" itemscope itemtype="http://schema.org/LocalBusiness" >
<strong>Site créé par <a href="mailto:qdugne@gmail.com">Quentin Dugne</a></strong>
</div>
			<script type="text/javascript">
			(function($){
   $(window).load(function(){
      $("#bloc").mCustomScrollbar();
   });
})(jQuery);

</script>
<script>
$(document).ready(function(){
    
var $carrousel = $('#carrousel'), // on cible le bloc du carrousel
    $img = $('#carrousel li'), // on cible les images contenues dans le carrousel
    indexImg = <?php echo $i ?>-1, // on définit l'index du dernier élément
    i = 0, // on initialise un compteur
    $currentImg = $img.eq(i); // enfin, on cible l'image courante, qui possède l'index i (0 pour l'instant)

$img.css('display', 'none'); // on cache les images
$currentImg.css('display', 'block'); // on affiche seulement l'image courante



$('#fleche_droite').click(function(){ // image suivante
	$('#fleche_gauche').css('display', 'block');
    i++; // on incrémente le compteur

    if( i <= indexImg ){
        $img.css('display', 'none'); // on cache les images
        $currentImg = $img.eq(i); // on définit la nouvelle image
        $currentImg.css('display', 'block'); // puis on l'affiche
		
    }

		
   else{
        i = indexImg;
    }

});

$('#fleche_gauche').click(function(){ // image précédente

    i--; // on décrémente le compteur, puis on réalise la même chose que pour la fonction "suivante"

    if( i >= 0 ){
        $img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
		$('#fleche_droite').css('display', 'block');
    }
		/*	if (i==0)
		{
		$img.css('display', 'none');
        $currentImg = $img.eq(i);
        $currentImg.css('display', 'block');
		$('#fleche_droite').css('display', 'block');
		$('#fleche_gauche').css('display', 'none');}*/
    else{
        i = 0;

    }

});

function slideImg(){
	setTimeout(function(){ // on utilise une fonction anonyme
							
			if(i < indexImg){ // si le compteur est inférieur au dernier index
			i++; // on l'incrémente
		}
		else{ // sinon, on le remet à 0 (première image)
			i = 0;
		}

		$img.css('display', 'none');

		$currentImg = $img.eq(i);
		$currentImg.css('display', 'block');

		slideImg(); // on oublie pas de relancer la fonction à la fin
		$('#fleche_gauche').css('display', 'block');
		}, 300000); // on définit l'intervalle à 7000 millisecondes (7s)
	}

	slideImg(); // enfin, on lance la fonction une première fois

});
    </script>
	</div>
</body>
</html>


