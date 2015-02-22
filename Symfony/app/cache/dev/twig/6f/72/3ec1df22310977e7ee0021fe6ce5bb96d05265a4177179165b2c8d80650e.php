<?php

/* MtBlogBundle:Blog:index.html.twig */
class __TwigTemplate_6f723ec1df22310977e7ee0021fe6ce5bb96d05265a4177179165b2c8d80650e extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t\t<title>Mon Site avec twig</title>
\t</head>
\t<body>
\t\t<h1>Bonjour ceci est mon site avec twig</h1>
\t\t<p>Merci de visiter mon site, Il a été conçu uniquement pour tester les fonctionnalités du moteur twig. Je vais aussi mettre UTF-8 sans BOM
\t\t</p>
\t\t";
        // line 10
        if (((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) < (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")))) {
            // line 11
            echo "\t\t\t<p>la première valeur ";
            echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
            echo "est plus petite que la ";
            echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
            echo "</p>
\t\t";
        } elseif ((        // line 12
(isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")) < (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")))) {
            // line 13
            echo "\t\t\t<p>la première valeur ";
            echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
            echo "est plus petite que la ";
            echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
            echo "</p>
\t\t";
        } else {
            // line 15
            echo "\t\t\t<p>les valeurs ";
            echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
            echo "et";
            echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
            echo " sont égales </p>
\t\t";
        }
        // line 16
        echo "\t\t
\t\t
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MtBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  49 => 15,  41 => 13,  39 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
