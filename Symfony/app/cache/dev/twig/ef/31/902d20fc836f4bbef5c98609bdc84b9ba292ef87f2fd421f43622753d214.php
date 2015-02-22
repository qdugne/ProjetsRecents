<?php

/* MtBlogBundle:Blog:form.html.twig */
class __TwigTemplate_ef31902d20fc836f4bbef5c98609bdc84b9ba292ef87f2fd421f43622753d214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<h3>Formulaire</h3>



  ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "



</html>
";
    }

    public function getTemplateName()
    {
        return "MtBlogBundle:Blog:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }
}
