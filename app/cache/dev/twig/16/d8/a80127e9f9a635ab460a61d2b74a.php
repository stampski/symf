<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_16d8a80127e9f9a635ab460a61d2b74a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($_collector_, "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($_collector_, "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  34 => 5,  31 => 4,  845 => 473,  842 => 472,  829 => 470,  824 => 469,  820 => 467,  807 => 466,  780 => 461,  777 => 460,  755 => 458,  737 => 457,  732 => 455,  727 => 454,  722 => 453,  717 => 452,  712 => 451,  707 => 450,  702 => 449,  699 => 448,  696 => 447,  678 => 446,  667 => 445,  651 => 440,  644 => 438,  639 => 437,  636 => 436,  634 => 435,  620 => 434,  583 => 399,  562 => 396,  544 => 395,  541 => 394,  538 => 393,  530 => 391,  524 => 389,  219 => 92,  208 => 90,  190 => 85,  186 => 84,  180 => 83,  164 => 77,  157 => 75,  154 => 74,  143 => 71,  129 => 61,  121 => 57,  103 => 45,  97 => 43,  94 => 42,  41 => 19,  28 => 3,  391 => 119,  388 => 118,  367 => 113,  364 => 112,  354 => 109,  351 => 108,  336 => 104,  329 => 102,  318 => 100,  312 => 98,  307 => 97,  292 => 95,  282 => 93,  270 => 92,  262 => 85,  236 => 78,  224 => 77,  175 => 63,  156 => 51,  152 => 49,  149 => 73,  144 => 45,  130 => 40,  127 => 39,  96 => 25,  64 => 27,  48 => 11,  39 => 7,  214 => 67,  196 => 66,  189 => 64,  174 => 63,  162 => 59,  151 => 58,  134 => 41,  119 => 35,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 24,  86 => 28,  83 => 27,  76 => 24,  432 => 160,  429 => 159,  423 => 158,  411 => 156,  406 => 155,  399 => 152,  396 => 151,  393 => 150,  390 => 149,  380 => 147,  377 => 116,  374 => 145,  368 => 141,  365 => 140,  361 => 111,  358 => 110,  353 => 135,  347 => 107,  344 => 106,  340 => 105,  337 => 128,  332 => 125,  326 => 121,  323 => 120,  311 => 115,  308 => 114,  303 => 111,  300 => 110,  295 => 96,  291 => 105,  284 => 103,  280 => 101,  277 => 100,  272 => 97,  264 => 93,  258 => 83,  255 => 88,  251 => 81,  248 => 86,  243 => 83,  237 => 79,  234 => 78,  230 => 77,  227 => 76,  222 => 93,  216 => 69,  201 => 87,  195 => 59,  192 => 65,  188 => 57,  181 => 54,  178 => 53,  170 => 62,  167 => 46,  161 => 43,  158 => 42,  147 => 39,  139 => 35,  131 => 31,  116 => 47,  113 => 24,  104 => 39,  99 => 20,  85 => 21,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 13,  69 => 12,  66 => 18,  60 => 25,  52 => 13,  47 => 9,  45 => 10,  40 => 6,  37 => 5,  22 => 1,  267 => 136,  185 => 56,  177 => 82,  165 => 46,  159 => 52,  148 => 42,  137 => 42,  133 => 40,  120 => 27,  117 => 37,  115 => 36,  110 => 31,  107 => 30,  101 => 29,  90 => 34,  87 => 24,  80 => 34,  70 => 20,  67 => 12,  62 => 18,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 6,  29 => 6,  456 => 183,  445 => 180,  440 => 179,  437 => 178,  431 => 177,  428 => 176,  420 => 157,  417 => 169,  410 => 165,  402 => 153,  394 => 157,  386 => 153,  378 => 149,  370 => 114,  362 => 141,  346 => 129,  338 => 125,  330 => 121,  325 => 101,  319 => 119,  316 => 118,  304 => 113,  301 => 112,  298 => 111,  289 => 104,  286 => 94,  278 => 97,  275 => 96,  269 => 96,  266 => 92,  261 => 89,  254 => 87,  244 => 85,  241 => 84,  229 => 79,  221 => 75,  213 => 68,  209 => 76,  206 => 75,  203 => 74,  193 => 86,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 80,  166 => 60,  163 => 55,  160 => 54,  153 => 51,  145 => 54,  140 => 46,  132 => 42,  128 => 50,  125 => 49,  122 => 36,  114 => 52,  111 => 51,  108 => 31,  105 => 31,  98 => 27,  91 => 41,  88 => 40,  78 => 20,  75 => 19,  71 => 30,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 7,  35 => 6,  33 => 4,  30 => 5,);
    }
}
