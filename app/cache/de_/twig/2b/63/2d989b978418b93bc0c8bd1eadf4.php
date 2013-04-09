<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_2b632d989b978418b93bc0c8bd1eadf4 extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $_exception_)));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  109 => 21,  106 => 20,  85 => 16,  77 => 12,  28 => 4,  24 => 4,  98 => 40,  88 => 17,  78 => 40,  46 => 10,  43 => 8,  50 => 7,  38 => 5,  25 => 3,  39 => 7,  36 => 7,  27 => 4,  19 => 1,  79 => 21,  74 => 14,  72 => 13,  69 => 12,  60 => 12,  47 => 7,  40 => 8,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 40,  125 => 39,  120 => 38,  117 => 37,  110 => 33,  105 => 31,  101 => 19,  87 => 24,  80 => 41,  67 => 9,  57 => 11,  54 => 22,  51 => 14,  44 => 9,  42 => 16,  35 => 9,  32 => 6,  29 => 6,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 41,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 36,  111 => 30,  107 => 32,  104 => 27,  97 => 24,  93 => 18,  90 => 25,  81 => 14,  70 => 20,  66 => 11,  62 => 18,  59 => 8,  56 => 10,  52 => 6,  49 => 5,  45 => 6,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
