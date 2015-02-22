<?php

/* MtBlogBundle:Blog:index2.html.twig */
class __TwigTemplate_d5435398be4832a73e793cec61cf2d175614eeba6ab6650059d0784f6d3e608e extends Twig_Template
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
        if (((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == "add")) {
            // line 11
            echo "\t\t\t<p>la solution est ";
            echo twig_escape_filter($this->env, ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) + (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b"))), "html", null, true);
            echo "</p>
\t\t";
        } elseif ((        // line 12
(isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == "sou")) {
            // line 13
            echo "\t\t\t<p>la solution est ";
            echo twig_escape_filter($this->env, ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) - (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b"))), "html", null, true);
            echo "</p>
\t\t";
        } elseif ((        // line 14
(isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == "mul")) {
            // line 15
            echo "\t\t\t<p>la solution est ";
            echo twig_escape_filter($this->env, ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) * (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b"))), "html", null, true);
            echo "</p>
\t\t";
        } elseif ((        // line 16
(isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == "div")) {
            // line 17
            echo "\t\t\t";
            if (((isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")) == 0)) {
                echo "\t
\t\t\t<p>\tdivision par 0 impossible</p>
\t\t";
            } else {
                // line 20
                echo "\t\t\tla solution est ";
                echo twig_escape_filter($this->env, ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) / (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b"))), "html", null, true);
                echo "
\t\t";
            }
            // line 21
            echo "\t
\t\t";
        } else {
            // line 23
            echo "\t\t\t<p>erreur veuillez spécifier un opérateur: add, mul, sou, div</p>
\t\t";
        }
        // line 24
        echo "\t\t
\t\t<p>en php</p>
\t\t";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "html", null, true);
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "MtBlogBundle:Blog:index2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  74 => 24,  70 => 23,  66 => 21,  60 => 20,  53 => 17,  51 => 16,  46 => 15,  44 => 14,  39 => 13,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
