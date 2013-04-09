<?php

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_2c5a24f809e6f7b90d170c59184025f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        // line 3
        $context["logger"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "counterrors") || $this->getAttribute($_collector_, "countdeprecations"))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <img width=\"15\" height=\"28\" alt=\"Logs\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAA4klEQVQ4y2P4//8/AyWYYXgYwOPp6Xnc3t7+P7EYpB6k7+zZs2ADNEjRjIwDAgKWgAywIUfz8+fPVzg7O/8AGeCATQEQnAfi/SAah/wcV1dXvAYUgORANA75ehcXl+/4DHAABRIe+ZrhbgAhTHsDiEgHBA0glA6GfSDiw5mZma+A+sphBlhVVFQ88vHx+Xfu3Ll7QP5haOjjwtuAuGHv3r3NIMNABqh8+/atsaur666vr+9XUlwSHx//AGQANxCbAnEWyGQicRMQ9wBxIQM0qjiBWAFqkB00/glhayBWHwb1AgB38EJsUtxtWwAAAABJRU5ErkJggg==\"/>
            ";
            // line 9
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors")) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } else {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = ($this->getAttribute($_collector_, "counterrors") + $this->getAttribute($_collector_, "countdeprecations"));
            // line 15
            echo "            <span class=\"sf-toolbar-status sf-toolbar-status-";
            if (isset($context["status_color"])) { $_status_color_ = $context["status_color"]; } else { $_status_color_ = null; }
            echo twig_escape_filter($this->env, $_status_color_, "html", null, true);
            echo "\">";
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "counterrors")) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Exception</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "counterrors"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            if ($this->getAttribute($_collector_, "countdeprecations")) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_collector_, "countdeprecations"), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "        ";
            if (isset($context["profiler_url"])) { $_profiler_url_ = $context["profiler_url"]; } else { $_profiler_url_ = null; }
            $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => $_profiler_url_)));
            // line 32
            echo "    ";
        }
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAgCAYAAAAMq2gFAAABjElEQVRIx2MIDw+vd3R0/GFvb/+fGtjFxeVJSUmJ1f///5nv37/PAMMMzs7OVLMEhoODgy/k5+cHJCYmagAtZAJbRG1L0DEwxCYALeOgiUXbt2+/X1NT8xTEdnd3/wi0SI4mFgHBDCBeCLXoF5BtwkCEpvNAvB8JnydCTwgQR0It+g1kWxNjUQEQOyDhAiL0gNUiWWRDjEUOyMkUZsCoRaMWjVpEvEVkFkGjFmEUqgc+fvx4hVYWIReqzi9evKileaoDslnu3LkTNLQtGk3edLPIycnpL9Bge5pb1NXVdQNosDmGRcAm7F+QgKur6783b95cBQoeRGv1kII3QPOdAoZF8+fPP4PUqnx55syZVKCEI1rLh1hsAbWEZ8aMGaUoFoFcMG3atKdIjfSPISEhawICAlaQgwMDA1f6+/sfB5rzE2Sej4/PD3C7DkjoAHHVoUOHLpSVlX3w8vL6Sa34Alr6Z8WKFaCoMARZxAHEoFZ/HBD3A/FyIF4BxMvIxCC964F4G6hZDMTxQCwJAGWE8pur5kFDAAAAAElFTkSuQmCC\" alt=\"Logger\" /></span>
    <strong>Logs</strong>
    ";
        // line 39
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if (($this->getAttribute($_collector_, "counterrors") || $this->getAttribute($_collector_, "countdeprecations"))) {
            // line 40
            echo "        ";
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context["error_count"] = ($this->getAttribute($_collector_, "counterrors") + $this->getAttribute($_collector_, "countdeprecations"));
            // line 41
            echo "        <span class=\"count\">
            <span>";
            // line 42
            if (isset($context["error_count"])) { $_error_count_ = $context["error_count"]; } else { $_error_count_ = null; }
            echo twig_escape_filter($this->env, $_error_count_, "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 45
        echo "</span>
";
    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        // line 49
        echo "    <h2>Logs</h2>

    ";
        // line 51
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["priority"] = $this->getAttribute($this->getAttribute($_request_, "query"), "get", array(0 => "priority", 1 => 0), "method");
        // line 52
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\" />
                    <label for=\"priority\">Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 62
        echo "                        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(100 => "DEBUG", 200 => "INFO", 250 => "NOTICE", 300 => "WARNING", 400 => "ERROR", 500 => "CRITICAL", 550 => "ALERT", 600 => "EMERGENCY", "-100" => "DEPRECATION only"));
        foreach ($context['_seq'] as $context["value"] => $context["text"]) {
            // line 63
            echo "                            <option value=\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "\"";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
            echo ((($_value_ == $_priority_)) ? (" selected") : (""));
            echo ">";
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, $_text_, "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 65
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\" />
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 74
        if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
        if ($this->getAttribute($_collector_, "logs")) {
            // line 75
            echo "        <ul class=\"alt\">
            ";
            // line 76
            if (isset($context["collector"])) { $_collector_ = $context["collector"]; } else { $_collector_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_collector_, "logs"));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                if (isset($context["priority"])) { $_priority_ = $context["priority"]; } else { $_priority_ = null; }
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                if (((($_priority_ >= 0) && ($this->getAttribute($_log_, "priority") >= $_priority_)) || (($_priority_ < 0) && ((($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type"), 0)) : (0)) == $_priority_)))) {
                    // line 77
                    echo "                <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($_loop_, "index")), "html", null, true);
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    if (($this->getAttribute($_log_, "priority") >= 400)) {
                        echo " error";
                    } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                        echo " warning";
                    }
                    echo "\">
                    ";
                    // line 78
                    if (isset($context["logger"])) { $_logger_ = $context["logger"]; } else { $_logger_ = null; }
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                    echo $_logger_->getdisplay_message($this->getAttribute($_loop_, "index"), $_log_);
                    echo "
                </li>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            if (!$context['_iterated']) {
                // line 81
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 83
            echo "        </ul>
    ";
        } else {
            // line 85
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
    }

    // line 92
    public function getdisplay_message($_log_index = null, $_log = null)
    {
        $context = $this->env->mergeGlobals(array(
            "log_index" => $_log_index,
            "log" => $_log,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if ((twig_constant("Symfony\\Component\\HttpKernel\\Debug\\ErrorHandler::TYPE_DEPRECATION") == (($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_log_, "context", array(), "any", false, true), "type"), 0)) : (0)))) {
                // line 94
                echo "        DEPRECATION -  ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
        ";
                // line 95
                if (isset($context["log_index"])) { $_log_index_ = $context["log_index"]; } else { $_log_index_ = null; }
                $context["id"] = ("sf-call-stack-" . $_log_index_);
                // line 96
                echo "        <a href=\"#\" onclick=\"Sfjs.toggle('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "', document.getElementById('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-on'), document.getElementById('";
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-off')); return false;\">
            <img class=\"toggle\" id=\"";
                // line 97
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\" />
            <img class=\"toggle\" id=\"";
                // line 98
                if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                echo twig_escape_filter($this->env, $_id_, "html", null, true);
                echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\" />
        </a>
        ";
                // line 100
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_log_, "context"), "stack"));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                    if (($_index_ > 1)) {
                        // line 101
                        echo "            ";
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (($_index_ == 2)) {
                            // line 102
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
                            echo twig_escape_filter($this->env, $_id_, "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 104
                        echo "            ";
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if ($this->getAttribute($_call_, "class", array(), "any", true, true)) {
                            // line 105
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = (($this->env->getExtension('code')->abbrClass($this->getAttribute($_call_, "class")) . "::") . $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function")));
                            // line 106
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "function", array(), "any", true, true)) {
                            // line 107
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->env->getExtension('code')->abbrMethod($this->getAttribute($_call_, "function"));
                            // line 108
                            echo "            ";
                        } elseif ($this->getAttribute($_call_, "file", array(), "any", true, true)) {
                            // line 109
                            echo "                ";
                            if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                            $context["from"] = $this->getAttribute($_call_, "file");
                            // line 110
                            echo "            ";
                        } else {
                            // line 111
                            echo "                ";
                            $context["from"] = "-";
                            // line 112
                            echo "            ";
                        }
                        // line 113
                        echo "
            <li>Called from ";
                        // line 114
                        if (isset($context["call"])) { $_call_ = $context["call"]; } else { $_call_ = null; }
                        if (isset($context["from"])) { $_from_ = $context["from"]; } else { $_from_ = null; }
                        echo ((($this->getAttribute($_call_, "file", array(), "any", true, true) && $this->getAttribute($_call_, "line", array(), "any", true, true))) ? ($this->env->getExtension('code')->formatFile($this->getAttribute($_call_, "file"), $this->getAttribute($_call_, "line"), $_from_)) : ($_from_));
                        echo "</li>

            ";
                        // line 116
                        if (isset($context["index"])) { $_index_ = $context["index"]; } else { $_index_ = null; }
                        if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                        echo ((($_index_ == (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($_log_, "context"), "stack")) - 1))) ? ("</ul>") : (""));
                        echo "
        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 118
                echo "    ";
            } else {
                // line 119
                echo "        ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
                echo " - ";
                if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 119,  388 => 118,  367 => 113,  364 => 112,  354 => 109,  351 => 108,  336 => 104,  329 => 102,  318 => 100,  312 => 98,  307 => 97,  292 => 95,  282 => 93,  270 => 92,  262 => 85,  236 => 78,  224 => 77,  175 => 63,  156 => 51,  152 => 49,  149 => 48,  144 => 45,  130 => 40,  127 => 39,  96 => 25,  64 => 15,  48 => 10,  39 => 7,  214 => 67,  196 => 66,  189 => 64,  174 => 63,  162 => 59,  151 => 58,  134 => 41,  119 => 35,  100 => 27,  82 => 32,  65 => 23,  27 => 3,  95 => 33,  92 => 24,  86 => 28,  83 => 27,  76 => 24,  432 => 160,  429 => 159,  423 => 158,  411 => 156,  406 => 155,  399 => 152,  396 => 151,  393 => 150,  390 => 149,  380 => 147,  377 => 116,  374 => 145,  368 => 141,  365 => 140,  361 => 111,  358 => 110,  353 => 135,  347 => 107,  344 => 106,  340 => 105,  337 => 128,  332 => 125,  326 => 121,  323 => 120,  311 => 115,  308 => 114,  303 => 111,  300 => 110,  295 => 96,  291 => 105,  284 => 103,  280 => 101,  277 => 100,  272 => 97,  264 => 93,  258 => 83,  255 => 88,  251 => 81,  248 => 86,  243 => 83,  237 => 79,  234 => 78,  230 => 77,  227 => 76,  222 => 73,  216 => 69,  201 => 63,  195 => 59,  192 => 65,  188 => 57,  181 => 54,  178 => 53,  170 => 62,  167 => 46,  161 => 43,  158 => 42,  147 => 39,  139 => 35,  131 => 31,  116 => 47,  113 => 24,  104 => 39,  99 => 20,  85 => 21,  81 => 19,  77 => 18,  50 => 14,  36 => 5,  79 => 25,  74 => 17,  72 => 13,  69 => 12,  66 => 18,  60 => 14,  52 => 21,  47 => 9,  45 => 9,  40 => 6,  37 => 5,  22 => 1,  267 => 32,  185 => 56,  177 => 56,  165 => 46,  159 => 52,  148 => 42,  137 => 42,  133 => 40,  120 => 27,  117 => 37,  115 => 36,  110 => 31,  107 => 30,  101 => 29,  90 => 34,  87 => 24,  80 => 22,  70 => 20,  67 => 12,  62 => 18,  57 => 13,  54 => 12,  51 => 11,  44 => 7,  42 => 8,  32 => 5,  29 => 6,  456 => 183,  445 => 180,  440 => 179,  437 => 178,  431 => 177,  428 => 176,  420 => 157,  417 => 169,  410 => 165,  402 => 153,  394 => 157,  386 => 153,  378 => 149,  370 => 114,  362 => 141,  346 => 129,  338 => 125,  330 => 121,  325 => 101,  319 => 119,  316 => 118,  304 => 113,  301 => 112,  298 => 111,  289 => 104,  286 => 94,  278 => 97,  275 => 96,  269 => 96,  266 => 92,  261 => 89,  254 => 87,  244 => 85,  241 => 84,  229 => 79,  221 => 75,  213 => 68,  209 => 76,  206 => 75,  203 => 74,  193 => 64,  187 => 62,  182 => 57,  179 => 60,  176 => 59,  169 => 58,  166 => 60,  163 => 55,  160 => 54,  153 => 51,  145 => 54,  140 => 46,  132 => 42,  128 => 50,  125 => 49,  122 => 36,  114 => 32,  111 => 33,  108 => 31,  105 => 31,  98 => 27,  91 => 19,  88 => 18,  78 => 20,  75 => 19,  71 => 18,  68 => 24,  63 => 17,  56 => 16,  46 => 13,  43 => 12,  38 => 6,  35 => 6,  33 => 4,  30 => 3,);
    }
}
