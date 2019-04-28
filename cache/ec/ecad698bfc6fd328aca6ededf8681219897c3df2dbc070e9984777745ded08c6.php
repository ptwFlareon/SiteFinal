<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_85e13ca2f9f1b2b0bd1294bded384b6505822aec12e0b7294c4ba8b0cd97edf3 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head>
\t\t<title>Minha Incrível APP</title>
\t</head>
\t
\t<body>
\t\t<h1>
\t\t\t";
        // line 10
        if (($context["hello"] ?? null)) {
            // line 11
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, ($context["hello"] ?? null), "html", null, true);
            echo "
\t\t\t";
        }
        // line 13
        echo "\t\t</h1>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  48 => 11,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "D:\\Faculs\\Faculdade\\Terceiro Ano\\OO II\\1903a\\site\\template\\base.html");
    }
}
