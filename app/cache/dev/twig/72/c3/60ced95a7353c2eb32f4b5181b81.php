<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_72c360ced95a7353c2eb32f4b5181b81 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
            echo " - ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  110 => 20,  89 => 16,  63 => 13,  58 => 12,  49 => 10,  34 => 5,  26 => 4,  114 => 22,  109 => 21,  106 => 20,  101 => 19,  77 => 12,  67 => 9,  59 => 8,  37 => 4,  25 => 3,  221 => 90,  211 => 84,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  152 => 55,  142 => 47,  140 => 46,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  115 => 39,  105 => 31,  100 => 19,  75 => 24,  53 => 19,  19 => 1,  98 => 40,  93 => 18,  88 => 17,  80 => 15,  46 => 9,  44 => 9,  36 => 7,  27 => 3,  22 => 2,  57 => 11,  43 => 8,  40 => 7,  30 => 3,  91 => 16,  86 => 15,  81 => 14,  76 => 5,  70 => 23,  65 => 14,  62 => 16,  60 => 21,  56 => 20,  52 => 11,  45 => 6,  41 => 8,  35 => 6,  33 => 4,  24 => 1,  163 => 92,  155 => 56,  153 => 92,  150 => 91,  144 => 90,  137 => 87,  125 => 85,  121 => 24,  116 => 83,  87 => 57,  32 => 12,  29 => 4,  85 => 16,  78 => 25,  72 => 27,  66 => 25,  55 => 18,  47 => 7,  39 => 10,  31 => 4,  28 => 4,);
    }
}
