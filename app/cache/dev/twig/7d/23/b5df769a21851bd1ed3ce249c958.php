<?php

/* SwiftmailerBundle:Collector:swiftmailer.html.twig */
class __TwigTemplate_7d23b5df769a21851bd1ed3ce249c958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
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
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "messagecount")) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            <img width=\"23\" height=\"28\" alt=\"Swiftmailer\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAcCAYAAACK7SRjAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6N0NEOTU1MjM0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6N0NEOTU1MjQ0OThFMTFFMDg3NzJBNTE2ODgwQzMxMzQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMEQ5OTQ5QzQ5OEMxMUUwODc3MkE1MTY4ODBDMzEzNCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3Q0Q5NTUyMjQ5OEUxMUUwODc3MkE1MTY4ODBDMzEzNCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpkRnSAAAAJ0SURBVHjaYvz//z8DrQATAw3BqOFYAaO9vT1FBhw4cGCAXA5MipxBQUHT3r17l0AVAxkZ/wkLC89as2ZNIcjlYkALXKnlWqBZTH/+/PEDmQsynLW/v3+NoaHhN2oYDjJn8uTJK4BMNpDhPwsLCwOKiop2+fn5vafEYC8vrw8gc/Lz8wOB3B8gw/nev38vn5WV5eTg4LA/Ly/vESsrK2npmYmJITU19SnQ8L0gc4DxpwgyF2S4EEjB58+f+crLy31YWFjOt7S0XBYUFPxHjMEcHBz/6+rqboqJiZ0qKSnxBpkDlRICGc4MU/j792+2CRMm+L18+fLSxIkTDykoKPzBZ7CoqOi/np6eE8rKylvb29v9fvz4wYEkzYKRzjk5OX/LyMjcnDRpEkjjdisrK6wRraOj8wvokAMLFy788ejRoxcaGhrPCWai4ODgB8DUE3/mzBknYMToASNoMzAfvEVW4+Tk9LmhoWFbTU2NwunTpx2BjiiMjo6+hm4WCzJHUlLyz+vXrxkfP36sDOI/ffpUPikpibe7u3sLsJjQW7VqlSrQxe+Avjmanp7u9PbtWzGQOmCCkARmmu/m5uYfT548yY/V5UpKSl+2b9+uiiz26dMnIWBSDTp27NgdYGrYCIzwE7m5uR4wg2Hg/PnzSsDI/QlKOcjZ3wGUBLm5uf+DwLdv38gub4AG/xcSEvr35s0bZmCB5sgCE/z69SsjyDJKMtG/f/8YQQYD8wkoGf8H51AbG5sH1CpbQBnQ09PzBiiHgoIFFHlBQGwLxLxUMP8dqJgH4k3gIhfIkAKVYkDMTmmhCHIxEL8A4peMo02L4WU4QIABANxZAoDIQDv3AAAAAElFTkSuQmCC\" />
            <span class=\"sf-toolbar-status\">";
            // line 7
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Messages</b>
                <span>";
            // line 12
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messageCount"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Is spooled ?</b>
                <span>";
            // line 16
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            echo (($this->getAttribute($_collector_, "isSpool")) ? ("yes") : ("no"));
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 20
            echo "    ";
        }
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAYAAABaKIzgAAAEDElEQVR42u2XWUhUURjHy6isILAebO+lonpJ8qkHM3NFVFxAUVFM0RSXUKnwwdAQn3wQE0MyA1MwBEUQcxvHZTTTHNcZl9DUGqd0JBOzcsZ7+n8XJ0Z0GueOVwg68GfmnLn3O7/7Lee7s4cxZpHq6uos0bb3+Q+6DrG3u7v7RHt7u3tbW9uD5ubm8qamJnlDQ4NKIpG8HhkZOU3X7BYoD9Tb22sjk8mcWltb70ul0pcAegugBfzOjKmzs/MJ7j0kCujw8PBhADkAKAVAz+EZGYA+08bmCN79qdFo7sGmjaWg+wgIIUtoaWl5CqDmxsbGj7SJpYK3uYWFBRnsDmEfWyGg+zs6OkIBNEoGxVB9fT2bnZ1VIHff03xmZuY29rUyF9QWT6sWC5I0OTk5rVAo3unnSqXyEfa1Nhf0Kp5UKRYk8lsDD0oM1/r6+l5h32Pmgl5UqVTP5ubmlEgBHRlCobC8vDzm5eXFHB0dRZWzs/OXsLCwu5SCpkBPo4DaMVRI9rbp6Wk1vnP+/v5kaFfk4eGhAcdJU6Dn+/v7q9aTnpPL5YqVlRV5eXm5Fk+7Gx7lCgsL68Fx2RToWST7C8McQgr8yMrKWkLu/hQz/LDNIZojycnJb8BxwRTocYT8oSEoQs8bSkpK0k5MTGgiIiK4nYYMDg7mcBLIo6OjP9Ec44opUGvIF+eoTg/a1dX1x2BISMgyKncpLS1tbacgU1NT2djY2HxoaOi8fg3jhilQK+gmQvBVD4qQbzDs4+ND6bBWUFCgtRQyJyeHdwSKdcODY9zaTgu9jheMcWOgJFdXV1ZZWclqamp0bm5uQoqGVVRUrFHBuru782tCQC+hW0j/BkpCPlGXIY9wfn5+5hQN5T3dS+cz5btg0DNTU1NFpkBra2tZaWkpy8jIYOPj4ywmJmY7RcMGBwdZZmYmKykpoa7ELPGozeLiYrIetKenZ5OhuLg4ft3T05OfJyQk8LDp6el/LRq6JiUlheb8vXgzY7m5uYJBD0LeeDnRApQ8sKloqK3GxsZuWEPrYzhiWHFx8ZZFMzo6yiIjIw1DTTZ+qNXqMRcXF0GgVpADKltDoCisDcbj4+NZfn7+ll5D9fKeprYbFRXFwsPDWVVV1SodPwEBAVueEtnZ2QNIhTkhoKRrAxhb5WhRURFzcnIyGmIcX9rq6uoPq6urAzqdrresrGwIHtMZux62OOT6AD4FgZ5bXl5+DMhv6P16j/KhCwoK2vHO5O3t/SsxMfG7ENAjkAOUBUkMvMVDiiFKDSGge6Gj0CUoGmffpvwSEfg7dUch/0LtkWcdvr6+a2JDBgYG6tDt6DXPTgjoKegOVAo1QVKR1AgVQ8GQrRDQA+uw9ushuSWSyLYdQRr7K/JP6DcTwr8i7Fj8pwAAAABJRU5ErkJggg==\" alt=\"Configuration\" /></span>
    <strong>E-Mails</strong>
    <span class=\"count\">
        <span>";
        // line 28
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messagecount"), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 33
    public function block_panel($context, array $blocks = array())
    {
        // line 34
        echo "    <h2>Messages ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        echo (($this->getAttribute($_collector_, "isSpool")) ? ("spooled") : ("sent"));
        echo "</h2>

    ";
        // line 36
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ((!$this->getAttribute($_collector_, "messages"))) {
            // line 37
            echo "        <p>
            <em>No message sent.</em>
        </p>
    ";
        } else {
            // line 41
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "messages"));
            foreach ($context['_seq'] as $context["i"] => $context["message"]) {
                // line 42
                echo "            <h3>Message ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
                echo " / ";
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "messagecount"), "html", null, true);
                echo "</h3>

            ";
                // line 44
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_message_, "headers"), "all"));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 45
                    echo "                <pre>";
                    if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
                    echo twig_escape_filter($this->env, $_header_, "html", null, true);
                    echo "</pre>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 47
                echo "
            <p>
                <pre>";
                // line 50
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                if ($this->getAttribute($_message_, "charset")) {
                    // line 51
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute($_message_, "body"), "html", $this->getAttribute($_message_, "charset")), "UTF-8", $this->getAttribute($_message_, "charset")), "html", null, true);
                } else {
                    // line 53
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_message_, "body"), "html");
                }
                // line 55
                echo "</pre>
            </p>
            ";
                // line 57
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_message_, "children"));
                foreach ($context['_seq'] as $context["_key"] => $context["messagePart"]) {
                    if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                    if ((($this->getAttribute($_messagePart_, "contentType") == "text/plain") || ($this->getAttribute($_messagePart_, "contentType") == "text/html"))) {
                        // line 58
                        echo "                <h4>Alternative part</h4>
                <p>
                    <pre>";
                        // line 61
                        if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                        if ($this->getAttribute($_messagePart_, "charset")) {
                            // line 62
                            if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                            echo twig_escape_filter($this->env, twig_convert_encoding(twig_escape_filter($this->env, $this->getAttribute($_messagePart_, "body"), "html", $this->getAttribute($_messagePart_, "charset")), "UTF-8", $this->getAttribute($_messagePart_, "charset")), "html", null, true);
                        } else {
                            // line 64
                            if (isset($context["messagePart"])) { $_messagePart_ = $context["messagePart"]; } else { $_messagePart_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_messagePart_, "body"), "html");
                        }
                        // line 66
                        echo "</pre>
                </p>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagePart'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 69
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 70
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "SwiftmailerBundle:Collector:swiftmailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 70,  198 => 69,  155 => 51,  138 => 45,  123 => 42,  89 => 28,  232 => 82,  226 => 78,  215 => 73,  211 => 71,  202 => 68,  183 => 60,  171 => 54,  146 => 41,  124 => 35,  118 => 33,  93 => 22,  49 => 9,  59 => 11,  34 => 5,  31 => 4,  845 => 473,  842 => 472,  829 => 470,  824 => 469,  820 => 467,  807 => 466,  780 => 461,  777 => 460,  755 => 458,  737 => 457,  732 => 455,  727 => 454,  722 => 453,  717 => 452,  712 => 451,  707 => 450,  702 => 449,  699 => 448,  696 => 447,  678 => 446,  667 => 445,  651 => 440,  644 => 438,  639 => 437,  636 => 436,  634 => 435,  620 => 434,  583 => 399,  562 => 396,  544 => 395,  541 => 394,  538 => 393,  530 => 391,  524 => 389,  219 => 92,  208 => 70,  190 => 85,  186 => 84,  180 => 59,  164 => 77,  157 => 48,  154 => 74,  143 => 71,  129 => 36,  121 => 34,  103 => 45,  97 => 24,  94 => 42,  41 => 6,  28 => 3,  391 => 119,  388 => 118,  367 => 113,  364 => 112,  354 => 109,  351 => 108,  336 => 104,  329 => 102,  318 => 100,  312 => 98,  307 => 97,  292 => 95,  282 => 93,  270 => 92,  262 => 85,  236 => 78,  224 => 77,  175 => 63,  156 => 51,  152 => 50,  149 => 42,  144 => 45,  130 => 40,  127 => 39,  96 => 25,  64 => 16,  48 => 11,  39 => 7,  214 => 67,  196 => 64,  189 => 66,  174 => 58,  162 => 59,  151 => 58,  134 => 41,  119 => 35,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 24,  86 => 28,  83 => 24,  76 => 24,  432 => 160,  429 => 159,  423 => 158,  411 => 156,  406 => 155,  399 => 152,  396 => 151,  393 => 150,  390 => 149,  380 => 147,  377 => 116,  374 => 145,  368 => 141,  365 => 140,  361 => 111,  358 => 110,  353 => 135,  347 => 107,  344 => 106,  340 => 105,  337 => 128,  332 => 125,  326 => 121,  323 => 120,  311 => 115,  308 => 114,  303 => 111,  300 => 110,  295 => 96,  291 => 105,  284 => 103,  280 => 101,  277 => 100,  272 => 97,  264 => 93,  258 => 83,  255 => 88,  251 => 81,  248 => 86,  243 => 83,  237 => 79,  234 => 78,  230 => 77,  227 => 76,  222 => 76,  216 => 69,  201 => 87,  195 => 59,  192 => 65,  188 => 57,  181 => 62,  178 => 61,  170 => 62,  167 => 57,  161 => 43,  158 => 42,  147 => 39,  139 => 35,  131 => 31,  116 => 47,  113 => 24,  104 => 27,  99 => 20,  85 => 21,  81 => 19,  77 => 33,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 13,  69 => 12,  66 => 13,  60 => 25,  52 => 10,  47 => 9,  45 => 7,  40 => 6,  37 => 5,  22 => 1,  267 => 136,  185 => 64,  177 => 82,  165 => 46,  159 => 53,  148 => 47,  137 => 37,  133 => 44,  120 => 27,  117 => 41,  115 => 32,  110 => 31,  107 => 28,  101 => 34,  90 => 21,  87 => 24,  80 => 23,  70 => 15,  67 => 12,  62 => 12,  57 => 24,  54 => 12,  51 => 22,  44 => 7,  42 => 8,  32 => 6,  29 => 6,  456 => 183,  445 => 180,  440 => 179,  437 => 178,  431 => 177,  428 => 176,  420 => 157,  417 => 169,  410 => 165,  402 => 153,  394 => 157,  386 => 153,  378 => 149,  370 => 114,  362 => 141,  346 => 129,  338 => 125,  330 => 121,  325 => 101,  319 => 119,  316 => 118,  304 => 113,  301 => 112,  298 => 111,  289 => 104,  286 => 94,  278 => 97,  275 => 96,  269 => 96,  266 => 92,  261 => 89,  254 => 87,  244 => 85,  241 => 84,  229 => 79,  221 => 75,  213 => 68,  209 => 76,  206 => 75,  203 => 74,  193 => 63,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 80,  166 => 51,  163 => 55,  160 => 49,  153 => 51,  145 => 54,  140 => 38,  132 => 42,  128 => 50,  125 => 49,  122 => 36,  114 => 52,  111 => 37,  108 => 36,  105 => 31,  98 => 33,  91 => 41,  88 => 40,  78 => 20,  75 => 20,  71 => 19,  68 => 24,  63 => 17,  56 => 12,  46 => 13,  43 => 7,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
