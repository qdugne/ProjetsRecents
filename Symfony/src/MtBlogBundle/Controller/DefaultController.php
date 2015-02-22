<?php

namespace MtBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MtBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
