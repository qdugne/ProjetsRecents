<?php
header('Content-type: image/png');

if(isset($_GET['q'])) {
$img=$_GET['q'];


list($largeur, $hauteur) = getimagesize("imagessite/".$img.".png");

if ($largeur>600){
	$n_largeur=600;
	$ratio = $n_largeur / $largeur;
	$n_hauteur = $hauteur * $ratio;
	if ($n_hauteur>400){
		$n_hauteur2=400;
		$ratio = $n_hauteur2 / $n_hauteur;
		$n_hauteur = $n_hauteur2;
		$n_largeur = $n_largeur * $ratio;
	}
}
if ($hauteur>400){
	$n_hauteur=400;
	$ratio = $n_hauteur / $hauteur;
	$n_largeur = $largeur * $ratio;
	if ($n_largeur>600){
		$n_largeur2=600;
		$ratio = $n_largeur2 / $n_largeur;
		$n_largeur = $n_largeur2;
		$n_hauteur = $n_hauteur * $ratio;
	}
}
else{

	$n_largeur = $largeur;
	$n_hauteur = $hauteur;
	}

//création de la destination
$destination = imagecreatetruecolor($n_largeur, $n_hauteur);

//on ouvre la source
$source = imagecreatefrompng("imagessite/".$img.".png");

// Redimensionnement
imagecopyresampled($destination, $source, 0, 0, 0, 0, $n_largeur, $n_hauteur, $largeur, $hauteur);

imagepng($destination);
imagedestroy($destination);
imagedestroy($source);
}
?> 
