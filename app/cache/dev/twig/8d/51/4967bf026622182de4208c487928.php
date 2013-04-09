<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_8d514967bf026622182de4208c487928 extends Twig_Template
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
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 3
            echo "    <div id=\"sfMiniToolbar-";
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\" class=\"sf-minitoolbar\">
        <a href=\"javascript:void(0);\" title=\"Show Symfony toolbar\" onclick=\"
            var elem = this.parentNode;
            if (elem.style.display == 'none') {
                document.getElementById('sfToolbarMainContent-";
            // line 7
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'none';
                document.getElementById('sfToolbarClearer-";
            // line 8
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'none';
                elem.style.display = 'block';
            } else {
                document.getElementById('sfToolbarMainContent-";
            // line 11
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
                document.getElementById('sfToolbarClearer-";
            // line 12
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
                elem.style.display = 'none'
            }

            Sfjs.setPreference('toolbar/displayState', 'block');
        \">
            <img width=\"26\" height=\"28\" alt=\"Symfony\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAMAAABIzV/hAAACZFBMVEUwLjL///////////////////////////////////////////////////////////////////+Eg4b///+Ni46Xlpj///////////+op6n///////////////////////////////////////////////////////////9ZWFv///////9qaWz///////+mpaf///////////////9ZWFv///////////////9PTVH///91dHb////////////////////g4OD///9NTE+Ih4r///////+Ni47///////92dHeRkJLk5OTLy8xlY2b///////+cm53///////+5ubr////o6Oj////////U1NT///9DQURsa22rq6ysq61hX2L///+LioxTUVVBP0NEQkZpZ2rGxsf///9ram3////s7O2SkZNfXmFxcHKmpae4uLnKysuXlpiop6l3dXiIh4pYVlmrq6ycm52trK7Nzc48Oj5dW158e36dnJ49Oz/Pz9BiYGPAv8BDQUTQz9BVU1aioaNHRUnBwcJXVVk6ODxJR0t3dnmko6U8Oj6lpKY9Oz+0tLXDwsRQTlF7en1QTlHi4eJhX2LFxcZTUVViYGNwb3J+fX83NTlFQ0dUUlW4t7icm524uLk8Oj5YVlmPjpBLSU2enZ9aWVw/PkFBP0NdW153dnk0MjZQTlE1MzdQT1JdXF9ram15eHqGhYdDQkV5eHo2NThEQkZRUFNFQ0dta244NjpGREhTUVU5NztUUlVhX2JubG9HRUlVU1ZiYGM7OTxIRkk7OT1IR0o8Oj4wLjI9Oz8YdG13AAAAynRSTlMAAAEDBAUGCgsMDQ4QEhMUGRobGx0gISIkJiYnKCktLi8wMjM0NTk6Ozw+P0NFSEpLTE5PUFBTWlteXmBiZGVmaWxtcHBxc3R0dnl5fX+BgoOGi46Pj5CRmZqanZ6eoKeoq6ytsLCwsrO0tbe5urq8vL+/wsTFx8jJycvLy8vM0NHR0tLU1NfX2NnZ2trc3N3d3eHh4uLl5ebm5ubn5+fo6urt7e3u7vDx8/Pz9PT19fX19fX29vf39/j4+fn5+vr6+vv7+/z8/f3+yR5EtwAAAbVJREFUeNpl0mVXVFEYhuF3zhkOFqMjYmCi2MUYYKGIYiJ2YCd2t4IBFqgoKjZ2jg3igI2KyO2f8sTMngGvj/te71r7wyMuk4jofZccAihcMzJKXDYnuYcVotyeYKiktV5LA0faaE7S4s7TyMsBupnMcoH/vO6gmanJaiLV1Py+Xwn5zc0fjCbSi2LI2QdkGdLyFBG+rHwMzz4BD7wyGEfFk8pfsD2TkGmyFNvFHfDj55v02VD6DcteOYylatY8oG7boA2QV4vlklzB8tU3/DIwo+dWv58guY5tRcLMtwSGdi1DkTvAn9Jqsgbu4kafRBqlV4sDFCWuIjdhMsp7yQU49rB28/QPLOu2DuWqLMfmfw6M716GskdGVRMSGDKRsEzpvZ+Qs0lFKDd94s2oArh2F7K3oNQt6ChGr5x6+Dx3J7d2E3Ygqam4PCkngRNnngYIO5cWq4lLb5t+vJ6GiifFR1nbMNqP3fSOCN8PZnQynEW5W/nmHy0PXv79eHpRSjsjtEOtWZcRc9YXlNx7VFKwceGYHjG6s0Ob3iK+X3LqlKnjkvt39rjD6w3W6BhvrCdaVw//ADrWicJIvtkmAAAAAElFTkSuQmCC\"/>
        </a>
    </div>
    <style type=\"text/css\">
        ";
            // line 22
            if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar.css.twig")->display(array_merge($context, array("position" => $_position_, "floatable" => true)));
            // line 23
            echo "    </style>
    <div id=\"sfToolbarClearer-";
            // line 24
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "\" style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 26
        echo "
<div id=\"sfToolbarMainContent-";
        // line 27
        if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
        echo twig_escape_filter($this->env, $_token_, "html", null, true);
        echo "\" class=\"sf-toolbarreset\">
    ";
        // line 28
        if (isset($context["templates"])) { $_templates_ = $context["templates"]; } else { $_templates_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_templates_);
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 29
            echo "        ";
            if (isset($context["template"])) { $_template_ = $context["template"]; } else { $_template_ = null; }
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_template_, "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute($_profile_, "getcollector", array(0 => $_name_), "method"), "profiler_url" => $_profiler_url_, "token" => $this->getAttribute($_profile_, "token"), "name" => $_name_)), "method"), "html", null, true);
            // line 35
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "
    ";
        // line 38
        if (isset($context["position"])) { $_position_ = $context["position"]; } else { $_position_ = null; }
        if (("normal" != $_position_)) {
            // line 39
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
            document.getElementById('sfMiniToolbar-";
            // line 43
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo twig_escape_filter($this->env, $_token_, "html", null, true);
            echo "').style.display = 'block';
            Sfjs.setPreference('toolbar/displayState', 'none');
        \"></a>
    ";
        }
        // line 47
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,  549 => 162,  543 => 161,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  434 => 119,  416 => 110,  413 => 109,  408 => 106,  375 => 101,  359 => 97,  355 => 95,  348 => 91,  327 => 88,  321 => 86,  302 => 84,  287 => 80,  279 => 78,  271 => 77,  256 => 73,  247 => 70,  239 => 69,  231 => 68,  102 => 28,  84 => 21,  58 => 10,  204 => 70,  198 => 69,  155 => 55,  138 => 44,  123 => 42,  89 => 28,  232 => 82,  226 => 78,  215 => 73,  211 => 71,  202 => 68,  183 => 60,  171 => 54,  146 => 41,  124 => 47,  118 => 33,  93 => 22,  49 => 9,  59 => 11,  34 => 7,  31 => 4,  845 => 473,  842 => 472,  829 => 470,  824 => 469,  820 => 467,  807 => 466,  780 => 461,  777 => 460,  755 => 458,  737 => 457,  732 => 455,  727 => 454,  722 => 453,  717 => 452,  712 => 451,  707 => 450,  702 => 449,  699 => 448,  696 => 447,  678 => 446,  667 => 445,  651 => 440,  644 => 438,  639 => 437,  636 => 436,  634 => 435,  620 => 434,  583 => 399,  562 => 396,  544 => 395,  541 => 394,  538 => 158,  530 => 155,  524 => 389,  219 => 67,  208 => 70,  190 => 85,  186 => 60,  180 => 59,  164 => 77,  157 => 48,  154 => 74,  143 => 49,  129 => 36,  121 => 34,  103 => 45,  97 => 35,  94 => 42,  41 => 6,  28 => 3,  391 => 119,  388 => 118,  367 => 113,  364 => 112,  354 => 109,  351 => 108,  336 => 104,  329 => 102,  318 => 100,  312 => 98,  307 => 85,  292 => 95,  282 => 93,  270 => 92,  262 => 85,  236 => 78,  224 => 77,  175 => 63,  156 => 51,  152 => 50,  149 => 42,  144 => 45,  130 => 40,  127 => 39,  96 => 25,  64 => 16,  48 => 7,  39 => 8,  214 => 67,  196 => 64,  189 => 61,  174 => 58,  162 => 58,  151 => 58,  134 => 43,  119 => 35,  100 => 27,  82 => 32,  65 => 22,  27 => 3,  95 => 33,  92 => 25,  86 => 28,  83 => 24,  76 => 17,  432 => 160,  429 => 116,  423 => 112,  411 => 156,  406 => 155,  399 => 152,  396 => 151,  393 => 150,  390 => 103,  380 => 147,  377 => 116,  374 => 145,  368 => 141,  365 => 99,  361 => 111,  358 => 110,  353 => 135,  347 => 107,  344 => 90,  340 => 105,  337 => 128,  332 => 125,  326 => 121,  323 => 120,  311 => 115,  308 => 114,  303 => 111,  300 => 110,  295 => 81,  291 => 105,  284 => 103,  280 => 101,  277 => 100,  272 => 97,  264 => 74,  258 => 83,  255 => 88,  251 => 71,  248 => 86,  243 => 83,  237 => 79,  234 => 78,  230 => 77,  227 => 76,  222 => 76,  216 => 69,  201 => 66,  195 => 65,  192 => 65,  188 => 57,  181 => 62,  178 => 61,  170 => 62,  167 => 57,  161 => 43,  158 => 56,  147 => 51,  139 => 35,  131 => 42,  116 => 43,  113 => 24,  104 => 37,  99 => 20,  85 => 28,  81 => 19,  77 => 26,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 15,  69 => 14,  66 => 13,  60 => 25,  52 => 10,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 2,  267 => 136,  185 => 64,  177 => 82,  165 => 46,  159 => 53,  148 => 47,  137 => 37,  133 => 44,  120 => 27,  117 => 36,  115 => 32,  110 => 39,  107 => 38,  101 => 34,  90 => 29,  87 => 24,  80 => 27,  70 => 15,  67 => 12,  62 => 11,  57 => 24,  54 => 12,  51 => 12,  44 => 7,  42 => 8,  32 => 4,  29 => 3,  456 => 183,  445 => 180,  440 => 179,  437 => 120,  431 => 177,  428 => 176,  420 => 111,  417 => 169,  410 => 165,  402 => 153,  394 => 105,  386 => 153,  378 => 149,  370 => 114,  362 => 98,  346 => 129,  338 => 125,  330 => 89,  325 => 101,  319 => 119,  316 => 118,  304 => 113,  301 => 112,  298 => 111,  289 => 104,  286 => 94,  278 => 97,  275 => 96,  269 => 96,  266 => 92,  261 => 89,  254 => 87,  244 => 85,  241 => 84,  229 => 79,  221 => 75,  213 => 68,  209 => 76,  206 => 75,  203 => 74,  193 => 63,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 80,  166 => 51,  163 => 55,  160 => 49,  153 => 51,  145 => 54,  140 => 38,  132 => 42,  128 => 50,  125 => 49,  122 => 37,  114 => 52,  111 => 32,  108 => 31,  105 => 31,  98 => 33,  91 => 41,  88 => 40,  78 => 20,  75 => 20,  71 => 24,  68 => 23,  63 => 17,  56 => 12,  46 => 11,  43 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
