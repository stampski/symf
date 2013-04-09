<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_dbe11fcd74b49f5e2c9350bf799feded extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  130 => 42,  75 => 24,  53 => 19,  100 => 28,  89 => 16,  65 => 14,  63 => 13,  58 => 12,  34 => 5,  26 => 4,  114 => 22,  109 => 21,  106 => 20,  85 => 16,  77 => 12,  28 => 4,  24 => 4,  98 => 40,  88 => 17,  78 => 25,  46 => 9,  43 => 8,  50 => 7,  38 => 5,  25 => 3,  39 => 7,  36 => 7,  27 => 3,  19 => 1,  79 => 21,  74 => 14,  72 => 13,  69 => 12,  60 => 21,  47 => 7,  40 => 16,  22 => 2,  267 => 32,  185 => 58,  182 => 57,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  133 => 43,  125 => 39,  120 => 40,  117 => 37,  110 => 20,  105 => 31,  101 => 19,  87 => 24,  80 => 15,  67 => 9,  57 => 11,  54 => 22,  51 => 14,  44 => 9,  42 => 16,  35 => 9,  32 => 12,  29 => 6,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 30,  107 => 32,  104 => 27,  97 => 24,  93 => 18,  90 => 25,  81 => 14,  70 => 23,  66 => 11,  62 => 18,  59 => 8,  56 => 20,  52 => 11,  49 => 10,  45 => 6,  41 => 8,  37 => 4,  33 => 9,  30 => 4,);
    }
}
