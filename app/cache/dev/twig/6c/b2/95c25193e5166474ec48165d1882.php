<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6cb295c25193e5166474ec48165d1882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "hasexception")) {
            // line 5
            echo "        <style type=\"text/css\">
            ";
            // line 6
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => $_token_)));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((!$this->getAttribute($_collector_, "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            if (isset($context["token"])) { $_token_ = $context["token"]; } else { $_token_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => $_token_)));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  92 => 32,  86 => 28,  83 => 27,  76 => 24,  432 => 160,  429 => 159,  423 => 158,  411 => 156,  406 => 155,  399 => 152,  396 => 151,  393 => 150,  390 => 149,  380 => 147,  377 => 146,  374 => 145,  368 => 141,  365 => 140,  361 => 139,  358 => 138,  353 => 135,  347 => 131,  344 => 130,  340 => 129,  337 => 128,  332 => 125,  326 => 121,  323 => 120,  311 => 115,  308 => 114,  303 => 111,  300 => 110,  295 => 107,  291 => 105,  284 => 103,  280 => 101,  277 => 100,  272 => 97,  264 => 93,  258 => 89,  255 => 88,  251 => 87,  248 => 86,  243 => 83,  237 => 79,  234 => 78,  230 => 77,  227 => 76,  222 => 73,  216 => 69,  201 => 63,  195 => 59,  192 => 58,  188 => 57,  181 => 54,  178 => 53,  170 => 47,  167 => 46,  161 => 43,  158 => 42,  147 => 39,  139 => 35,  131 => 31,  116 => 25,  113 => 24,  104 => 21,  99 => 20,  85 => 17,  81 => 16,  77 => 15,  50 => 8,  36 => 5,  79 => 25,  74 => 14,  72 => 13,  69 => 12,  66 => 18,  60 => 9,  52 => 21,  47 => 9,  45 => 17,  40 => 6,  37 => 5,  22 => 1,  267 => 32,  185 => 56,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  137 => 41,  133 => 40,  120 => 27,  117 => 37,  115 => 36,  110 => 23,  107 => 32,  101 => 29,  90 => 25,  87 => 24,  80 => 22,  70 => 20,  67 => 12,  62 => 18,  57 => 13,  54 => 12,  51 => 14,  44 => 7,  42 => 16,  32 => 4,  29 => 6,  456 => 183,  445 => 180,  440 => 179,  437 => 178,  431 => 177,  428 => 176,  420 => 157,  417 => 169,  410 => 165,  402 => 153,  394 => 157,  386 => 153,  378 => 149,  370 => 145,  362 => 141,  346 => 129,  338 => 125,  330 => 121,  325 => 118,  319 => 119,  316 => 118,  304 => 113,  301 => 112,  298 => 111,  289 => 104,  286 => 103,  278 => 97,  275 => 96,  269 => 96,  266 => 92,  261 => 89,  254 => 87,  244 => 85,  241 => 84,  229 => 79,  221 => 75,  213 => 68,  209 => 67,  206 => 66,  203 => 67,  193 => 64,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 58,  166 => 56,  163 => 55,  160 => 54,  153 => 51,  145 => 47,  140 => 46,  132 => 42,  128 => 40,  125 => 39,  122 => 38,  114 => 34,  111 => 33,  108 => 31,  105 => 31,  98 => 27,  91 => 19,  88 => 18,  78 => 20,  75 => 19,  71 => 18,  68 => 17,  63 => 17,  56 => 12,  46 => 10,  43 => 9,  38 => 6,  35 => 9,  33 => 4,  30 => 3,);
    }
}
