<?php

/* ::base.html.twig */
class __TwigTemplate_8157431eb1cb7e821b8a7ee3b79b49bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
  <head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "  </head>
  <body>
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "  </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  86 => 15,  81 => 9,  76 => 5,  70 => 4,  65 => 17,  62 => 16,  60 => 15,  56 => 14,  52 => 13,  45 => 9,  41 => 8,  35 => 6,  33 => 5,  24 => 1,  163 => 92,  155 => 93,  153 => 92,  150 => 91,  144 => 90,  137 => 87,  125 => 85,  121 => 84,  116 => 83,  87 => 57,  32 => 4,  29 => 4,  85 => 33,  78 => 29,  72 => 27,  66 => 25,  55 => 18,  47 => 10,  39 => 10,  31 => 4,  28 => 3,);
    }
}
