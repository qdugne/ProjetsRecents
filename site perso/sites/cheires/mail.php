       <?php

	$destinataire = '';
	$message_envoye = "Votre message a bien &eacute;t&eacute; envoy&eacute;";
	$message_non_envoye = "L'envoi du mail a &eacute;chou&eacute;, veuillez r&eacute;essayer SVP.";
	$message_erreur_formulaire = "Vous devez d'abord <a href=\"inscription.html\">envoyer le formulaire</a>.";
	$message_formulaire_invalide = "V&eacute;rifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

	if (!isset($_POST['nom']))
	{
		echo '<p>'.$message_erreur_formulaire.'</p>'."\n";
	}
	else
	{
		/*
		 * cette fonction sert à nettoyer et enregistrer un texte
		 */
		function Rec($text)
		{
			$text = trim($text); // delete white spaces after & before text
			if (1 === get_magic_quotes_gpc())
			{
				$stripslashes = create_function('$txt', 'return stripslashes($txt);');
			}
			else
			{
				$stripslashes = create_function('$txt', 'return $txt;');
			}

			// magic quotes ?
			$text = $stripslashes($text);
			$text = htmlspecialchars($text, ENT_QUOTES); // converts to string with " and ' as well
			$text = nl2br($text);
			return $text;
		};

		$nom     = $_POST['nom'];
		$email   = $_POST['email'];
		$objet   =  "Ronde des Cheires, inscription";
		$message = 'Nom :'.$_POST['nom'].' Prenom :'.$_POST['prenom'].' Age: '.$_POST['age'].' Mail: '.$_POST['email'].' Sexe: '.$_POST['sexe'].' Club: '.$_POST['Club'] ;


		if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
		{
			// les 4 variables sont remplies, on g&eacute;nère puis envoie le mail
			$headers = "From: ".$_POST['nom']." <".$_POST['email'].">"."\n";

			echo $headers;
				$cible = $destinataire;

			// Remplacement de certains caractères sp&eacute;ciaux
			$message = str_replace("&#039;","'",$message);
			$message = str_replace("&#8217;","'",$message);
			$message = str_replace("&quot;",'"',$message);
			$message = str_replace('<br>','',$message);
			$message = str_replace('<br />','',$message);
			$message = str_replace("&lt;","<",$message);
			$message = str_replace("&gt;",">",$message);
			$message = str_replace("&amp;","&",$message);

			// Envoi du mail
			if (mail($cible, $objet, $message, $headers))
			{
				echo '<p>'.$message_envoye.'</p>'."\n";
				
			}
			else
			{
				echo '<p>'.$message_non_envoye.'</p>'."\n";
			};
		}
		else
		{
			// une des 3 variables (ou plus) est vide ...
			echo '<p>'.$message_formulaire_invalide.' <a href="inscription.html">Retour au formulaire</a></p>'."\n";
		};
	};

?>