<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_01af7e891a4295446b486e714a1dd00c extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  19 => 1,  79 => 21,  74 => 14,  72 => 13,  69 => 12,  60 => 6,  47 => 18,  40 => 11,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 40,  125 => 39,  120 => 38,  117 => 37,  110 => 33,  105 => 31,  101 => 29,  87 => 24,  80 => 22,  67 => 19,  57 => 16,  54 => 22,  51 => 14,  44 => 9,  42 => 16,  35 => 9,  32 => 3,  29 => 6,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 41,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 36,  111 => 30,  107 => 32,  104 => 27,  97 => 24,  93 => 22,  90 => 25,  81 => 19,  70 => 20,  66 => 11,  62 => 18,  59 => 11,  56 => 10,  52 => 6,  49 => 5,  45 => 17,  41 => 6,  37 => 4,  33 => 4,  30 => 3,);
    }
}
