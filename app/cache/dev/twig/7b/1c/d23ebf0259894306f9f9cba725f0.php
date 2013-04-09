<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_7b1cd23ebf0259894306f9f9cba725f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_b7e2e022a96a912aa8192ec21ea63b3efeb0ae91"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAiCAQAAADragGFAAAD60lEQVR42o2UfUxbVRjGb7fy4ah2QwdECSgjEpcYUP8hmtiWljbt+Gih62zGVqBjXkqgVcYQKzNLJF1HBxt0S9YMgqHVLt1oZRqidcpcgQ1dMpkxgyVK2NSYyWTAJoPB4/1g0iLQnZub+348v3vOPe95L/FogFO+pbBMbtPmgEsEDXC1OXJbYVn5FnBoPwg4wVfVCc7J3WRToxoxIbmYRjXZJHcLzqnqTvAZkEUsSfI2iddxCHtR8LkIvBCIR0UKsNdxSOKVt1mSwGGQ87GKNk3ncO1ARdFxkU/qxMYQaKPUKfIVHR+oGK7VdCrazsdSGKJKqsW+oRqnMcu7s91Td02FuBAo7prKU7ezPcvrNA7ViH0l1Ygi/Kmiz+y2H3Tirvqj0PvLqk09ieAsfW1PYrXJXwZ9/VFx11Vda2OW159KmEvFvkkdadvunN19oEbYrXSczMD6/6D1JzOUDmH3gZrZ3dudpG1SJ/aZSwnSuqsDebIz9oZBtbC7/SDykATu0oZTXl77QWH3oNreIDuD3F0dpJXoU3sMU9nG5ku6lop8N9RIAw9ccqvGoDGQWymIR0XUqk+PVF0qNjZPZXsMfWoCKUijrky8Qt0KyuIiWtMqnBdAAOG8phXRVORFKvM6rWC0KQQiqfAG8PEUnkY8ZUVW7hdg6arcTyk2UJlnKAWfsqIRSSwfSFDeDIaUN5FAhBtIlz4IhqQPkB4eytROBEPaCWQ+xkyu3mDI1fs4Mz33dUsw9KUdieGhzVXf0GIF8hmoPIC4sNBEmuweLbbca56kn9kzI+ngrIkgosHMLqu/90c/a31oQVSYxemu0ELNDCph0E0z+3cd8WshnMAb4jlaqP/rjuwPWelt2hYtfCHFutWhJ95vXTw8v6l/yh3dNyphPJMLMatDz6rHaJHhnwsXJQ+33R/z1d6l/dxxJK+GrHMVsvOUTOdNX+ztvKycaLnORo6Vg7sy9GRVFyspnhp2wIDKs+6cGTay5wI2rQj9nbpt8dTtuzVM4gW89JVlB7V/a1QLEUeMrEBDNaDkfvHht07TrVi/eObrrStUC7H6AJ0smH848MnPWUzn5swM9qNHzyxRO4KE/1XoRoZklk5aRy/bdX8KIJ8XLwhQ+ut3H526ylbLk7OsWogy29hlkL+LKPEHd25f+WXIdJf+T7xzQ8RkjG7wljW5duRRM+yYDvThMIpQjGP+79mtWKzW8yEV8snp9wsgWzh1a64De/Ay+NiEV0HOdXw8plhgsaaKoGohxuSigxKM9cOMN7GZTSIC8ZT33vi3BczG6AOIXYKS85mj+e443kYKokO/FsnQWUeZl84OvUZX618UFpIDvqMM6gAAAABJRU5ErkJggg==\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_collector_, "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            echo $context["__internal_b7e2e022a96a912aa8192ec21ea63b3efeb0ae91"]->getdisplay_listener($_listener_);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "    </table>

    ";
        // line 39
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "notcalledlisteners")) {
            // line 40
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["listeners"] = $this->getAttribute($_collector_, "notcalledlisteners");
            // line 48
            echo "            ";
            if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter($_listeners_)));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_listeners_, $_listener_, array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                if (isset($context["listeners"])) { $_listeners_ = $context["listeners"]; } else { $_listeners_ = null; }
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $context["__internal_b7e2e022a96a912aa8192ec21ea63b3efeb0ae91"]->getdisplay_listener($this->getAttribute($_listeners_, $_listener_, array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 54
            echo "        </table>
    ";
        }
    }

    // line 58
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
            if (($this->getAttribute($_listener_, "type") == "Closure")) {
                // line 60
                echo "        Closure
    ";
            } elseif (($this->getAttribute($_listener_, "type") == "Function")) {
                // line 62
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file"), $this->getAttribute($_listener_, "line"));
                // line 63
                echo "        ";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function"), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "function"), "html", null, true);
                }
                // line 64
                echo "    ";
            } elseif (($this->getAttribute($_listener_, "type") == "Method")) {
                // line 65
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute($_listener_, "file"), $this->getAttribute($_listener_, "line"));
                // line 66
                echo "        ";
                if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute($_listener_, "class"));
                echo "::";
                if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                if ($_link_) {
                    echo "<a href=\"";
                    if (isset($context["link"])) { $_link_ = $context["link"]; } else { $_link_ = null; }
                    echo twig_escape_filter($this->env, $_link_, "html", null, true);
                    echo "\">";
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method"), "html", null, true);
                    echo "</a>";
                } else {
                    if (isset($context["listener"])) { $_listener_ = $context["listener"]; } else { $_listener_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_listener_, "method"), "html", null, true);
                }
                // line 67
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 67,  196 => 66,  189 => 64,  174 => 63,  162 => 59,  151 => 58,  134 => 51,  119 => 48,  100 => 37,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 32,  86 => 28,  83 => 27,  76 => 24,  432 => 160,  429 => 159,  423 => 158,  411 => 156,  406 => 155,  399 => 152,  396 => 151,  393 => 150,  390 => 149,  380 => 147,  377 => 146,  374 => 145,  368 => 141,  365 => 140,  361 => 139,  358 => 138,  353 => 135,  347 => 131,  344 => 130,  340 => 129,  337 => 128,  332 => 125,  326 => 121,  323 => 120,  311 => 115,  308 => 114,  303 => 111,  300 => 110,  295 => 107,  291 => 105,  284 => 103,  280 => 101,  277 => 100,  272 => 97,  264 => 93,  258 => 89,  255 => 88,  251 => 87,  248 => 86,  243 => 83,  237 => 79,  234 => 78,  230 => 77,  227 => 76,  222 => 73,  216 => 69,  201 => 63,  195 => 59,  192 => 65,  188 => 57,  181 => 54,  178 => 53,  170 => 62,  167 => 46,  161 => 43,  158 => 42,  147 => 39,  139 => 35,  131 => 31,  116 => 47,  113 => 24,  104 => 39,  99 => 20,  85 => 33,  81 => 16,  77 => 31,  50 => 14,  36 => 5,  79 => 25,  74 => 14,  72 => 13,  69 => 12,  66 => 18,  60 => 9,  52 => 21,  47 => 9,  45 => 17,  40 => 6,  37 => 5,  22 => 1,  267 => 32,  185 => 56,  177 => 56,  165 => 46,  159 => 45,  148 => 42,  137 => 41,  133 => 40,  120 => 27,  117 => 37,  115 => 36,  110 => 23,  107 => 40,  101 => 29,  90 => 34,  87 => 24,  80 => 22,  70 => 20,  67 => 12,  62 => 18,  57 => 13,  54 => 12,  51 => 14,  44 => 7,  42 => 16,  32 => 5,  29 => 6,  456 => 183,  445 => 180,  440 => 179,  437 => 178,  431 => 177,  428 => 176,  420 => 157,  417 => 169,  410 => 165,  402 => 153,  394 => 157,  386 => 153,  378 => 149,  370 => 145,  362 => 141,  346 => 129,  338 => 125,  330 => 121,  325 => 118,  319 => 119,  316 => 118,  304 => 113,  301 => 112,  298 => 111,  289 => 104,  286 => 103,  278 => 97,  275 => 96,  269 => 96,  266 => 92,  261 => 89,  254 => 87,  244 => 85,  241 => 84,  229 => 79,  221 => 75,  213 => 68,  209 => 67,  206 => 66,  203 => 67,  193 => 64,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 58,  166 => 60,  163 => 55,  160 => 54,  153 => 51,  145 => 54,  140 => 46,  132 => 42,  128 => 50,  125 => 49,  122 => 38,  114 => 34,  111 => 33,  108 => 31,  105 => 31,  98 => 27,  91 => 19,  88 => 18,  78 => 20,  75 => 19,  71 => 18,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 6,  35 => 6,  33 => 4,  30 => 3,);
    }
}
