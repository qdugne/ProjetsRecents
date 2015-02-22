<?php

namespace MtBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use MtBlogBundle\Entity\Blog\Annonce;
use MtBlogBundle\Entity\Blog\Grade;
use MtBlogBundle\Entity\Blog\Censor;

class BlogController extends Controller
{
    public function indexAction()
    {
       return (new Response ('bonjour'));
    }
	function renderAction($a,$b)
    {
       return $this->render('MtBlogBundle:Blog:index.html.twig',array( 'a' => $a,'b'=>$b));
    }
	function switchcaseAction($a,$b,$c)
    {
       
	   switch ($c){
	   case "add":
	   $s=$a + $b;
	   $rep="le resultat est".$s;
	   break;
	   case "sou":
	   $s=$a - $b;
	   	   $rep="le resultat est".$s;

	   break;
	   case "mul":
	   $s=$a * $b;
	   	   $rep="le resultat est".$s;

	   break;	   
	   case "div":
	   $s=$a / $b;
	   	   $rep="le resultat est".$s;

	   break;
	   }
	   return $this->render('MtBlogBundle:Blog:index2.html.twig',array( 'a' => $a,'b'=>$b,'c'=>$c,'rep'=>$rep));
    }
	
	public function createAction()
	{
		$annonce = new Annonce();
		
		$annonce->setTitre('Maltem');
		$annonce->setAuteur('Quentin');
		$annonce->setDateAnnonce(new \Datetime("18-02-2015 14:00:00"));
		$annonce->setPrixAnnonce("20");

		$em = $this->getDoctrine()->getManager();
		$em->persist($annonce);
		$em->flush();

	   return new Response("annonce ajouté");
	   
	}
	public function CalculeAction($a)
	{
		$annonce = new Annonce();
		$prix='20';
		return $this->render('MtBlogBundle:Blog:bdd.html.twig',array( 'a'=>$a, 'prix'=>$prix));
	}
	
	//dfghjkjhgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
	
	
	 public function formulaireAction()

  {

      $annonce = new Annonce();

    // On crée le FormBuilder grâce au service form factory

    $formBuilder = $this->get('form.factory')->createBuilder('form', $annonce);

    // On ajoute les childs de l'entité que l'on veut à notre formulaire
// $dateannonce=new \datetime();
    $formBuilder

      ->add('titre',      'text')
      ->add('auteur',     'text')
      ->add('dateannonce',   'datetime', array(
    'data' => new \DateTime()
    ))
      ->add('util',   'text')
      ->add('contenuAnnonces',   'textarea')
      ->add('submit',      'submit')

    ;

//
	
    $form = $formBuilder->getForm();//on genère le formaulaire

 
//
if ($form->isValid()) {
	return (new Response ('élément enregistré'));

	}
    return $this->render('MtBlogBundle:Blog:form.html.twig', array(

      'form' => $form->createView(),//méthode create view pour passer du formulaire à la vue

    ));

  }
  	public function createGradeAction()
	{
		$grade = new Grade();
		
		$grade->setGraLib('Lecteur','testeur','anulateur','validateur');
		$grade->setGraCertifiant('Non','Oui','Non','Oui');


		$em = $this->getDoctrine()->getManager();
		$em->persist($grade);
		$em->flush();

	   return new Response("annonce ajouté");
	   
	}
 public function formulaireGradeAction()

  {

      $censor= new Censor();

    // On crée le FormBuilder grâce au service form factory

    $formBuilder = $this->get('form.factory')->createBuilder('form', $censor);

    // On ajoute les childs de l'entité que l'on veut à notre formulaire
// $dateannonce=new \datetime();
    $formBuilder

      ->add('cen_nom',      'text')
      ->add('cen_prenom',     'text')
      ->add('gra_id',   'choice', array(
						'choices' =>array('1'=>'lecteur','2'=>'testeur','3'=>'annulateur','4'=>'validateur')))
      ->add('submit',      'submit')

    ;

//
	
    $form = $formBuilder->getForm();//on genère le formaulaire

 
//
if ($form->isValid()) {
			$censor = new Censor();
		
		$censor->cennom(nom);
		$censor->cenprenom(prenom);
		$censor->graid(grade);


		$em = $this->getDoctrine()->getManager();
		$em->persist($censor);
		$em->flush();

	   return new Response("censeur ajouté");

	}
    return $this->render('MtBlogBundle:Blog:form.html.twig', array(

      'form' => $form->createView(),//méthode create view pour passer du formulaire à la vue

    ));

  }
}
