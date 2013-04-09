<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_f174b8d53a7176b96b1c33cb089e48a7 extends Twig_Template
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
        echo "<strong>Explanation:</strong>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($_data_, 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_row_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $_item_, "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  31 => 7,  204 => 70,  198 => 69,  174 => 58,  167 => 57,  138 => 45,  123 => 42,  108 => 36,  83 => 24,  71 => 19,  64 => 16,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 66,  186 => 70,  181 => 62,  178 => 61,  173 => 63,  162 => 59,  158 => 57,  155 => 51,  152 => 50,  142 => 47,  136 => 44,  130 => 42,  75 => 20,  53 => 19,  100 => 28,  89 => 28,  65 => 14,  63 => 13,  58 => 12,  34 => 5,  26 => 6,  114 => 22,  109 => 21,  106 => 20,  85 => 16,  77 => 12,  28 => 4,  24 => 4,  98 => 33,  88 => 17,  78 => 25,  46 => 12,  43 => 7,  50 => 7,  38 => 5,  25 => 3,  39 => 7,  36 => 7,  27 => 3,  19 => 1,  79 => 21,  74 => 14,  72 => 13,  69 => 17,  60 => 21,  47 => 7,  40 => 6,  22 => 2,  267 => 32,  185 => 64,  182 => 57,  177 => 56,  165 => 46,  159 => 53,  148 => 47,  133 => 44,  125 => 39,  120 => 40,  117 => 41,  110 => 20,  105 => 31,  101 => 34,  87 => 24,  80 => 23,  67 => 9,  57 => 11,  54 => 14,  51 => 13,  44 => 9,  42 => 16,  35 => 9,  32 => 12,  29 => 6,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 55,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 41,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 37,  107 => 32,  104 => 27,  97 => 24,  93 => 18,  90 => 25,  81 => 14,  70 => 23,  66 => 11,  62 => 18,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
