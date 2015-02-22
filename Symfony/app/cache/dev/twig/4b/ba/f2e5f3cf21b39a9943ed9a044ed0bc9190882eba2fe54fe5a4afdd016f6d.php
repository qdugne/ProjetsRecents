<?php

/* MtBlogBundle:Blog:bdd.html.twig */
class __TwigTemplate_4bbaf2e5f3cf21b39a9943ed9a044ed0bc9190882eba2fe54fe5a4afdd016f6d extends Twig_Template
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

\t\t";
        // line 4
        if (((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) != null)) {
            // line 5
            echo "\t\t\t<p>pour ce nombre de lignes cela coutera ";
            echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a"))), "html", null, true);
            echo " €</p>
\t\t
\t\t";
        } else {
            // line 8
            echo "\t\t\t<p>veuillez entrer le nombre de ligne dans l'url</p>
\t\t";
        }
        // line 9
        echo "\t\t

</html>
";
    }

    public function getTemplateName()
    {
        return "MtBlogBundle:Blog:bdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  33 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }
}
