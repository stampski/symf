<?php

/* BraincraftedBootstrapBundle:Menu:menu.html.twig */
class __TwigTemplate_7019e58b33accc9aef42e6e2be300ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'dropdownList' => array($this, 'block_dropdownList'),
            'listList' => array($this, 'block_listList'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('list', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('dropdownList', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('listList', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('children', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('item', $context, $blocks);
        // line 154
        echo "
";
        // line 155
        $this->displayBlock('linkElement', $context, $blocks);
        // line 156
        echo "
";
        // line 157
        $this->displayBlock('dropdownElement', $context, $blocks);
        // line 165
        echo "
";
        // line 166
        $this->displayBlock('dividerElement', $context, $blocks);
        // line 170
        echo "
";
        // line 171
        $this->displayBlock('spanElement', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 20
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = twig_array_merge($_options_, array("currentDepth" => 0));
        // line 21
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && $this->getAttribute($_options_, "currentClass", array(), "any", true, true)) && ($this->getAttribute($_options_, "currentClass") == "current"))) {
            // line 22
            echo "    ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context["options"] = twig_array_merge($_options_, array("currentClass" => "active"));
        }
        // line 24
        echo "
";
        // line 25
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["listAttributes"] = $this->getAttribute($_item_, "childrenAttributes");
        // line 26
        $this->displayBlock("list", $context, $blocks);
    }

    // line 29
    public function block_list($context, array $blocks = array())
    {
        // line 30
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren") && (!($this->getAttribute($_options_, "depth") === 0))) && $this->getAttribute($_item_, "displayChildren"))) {
            // line 31
            echo "    ";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            $context["listAttributes"] = twig_array_merge($_listAttributes_, array("class" => trim(((($this->getAttribute($_listAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_listAttributes_, "class"), "")) : ("")) . " nav"))));
            // line 32
            echo "
    ";
            // line 33
            $context["listClass"] = "";
            // line 34
            echo "    ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && ($this->getAttribute($_options_, "nav_type") == "tabs"))) {
                // line 35
                echo "        ";
                $context["listClass"] = "nav-tabs";
                // line 36
                echo "    ";
            } elseif (($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && ($this->getAttribute($_options_, "nav_type") == "pills"))) {
                // line 37
                echo "        ";
                $context["listClass"] = "nav-pills";
                // line 38
                echo "    ";
            } elseif (($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && ($this->getAttribute($_options_, "nav_type") == "stacked_tabs"))) {
                // line 39
                echo "        ";
                $context["listClass"] = "nav-tabs nav-stacked";
                // line 40
                echo "    ";
            } elseif (($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && ($this->getAttribute($_options_, "nav_type") == "stacked_pills"))) {
                // line 41
                echo "        ";
                $context["listClass"] = "nav-pills nav-stacked";
                // line 42
                echo "    ";
            } elseif (($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && ($this->getAttribute($_options_, "nav_type") == "list"))) {
                // line 43
                echo "        ";
                $context["listClass"] = "nav-list";
                // line 44
                echo "    ";
            }
            // line 45
            echo "
    ";
            // line 46
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (($this->getAttribute($_options_, "pull", array(), "any", true, true) && ($this->getAttribute($_options_, "pull") == "right"))) {
                // line 47
                echo "        ";
                if (isset($context["listClass"])) { $_listClass_ = $context["listClass"]; } else { $_listClass_ = null; }
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($_listClass_, "")) : ("")) . " pull-right"));
                // line 48
                echo "    ";
            } elseif (($this->getAttribute($_options_, "pull", array(), "any", true, true) && ($this->getAttribute($_options_, "pull") == "left"))) {
                // line 49
                echo "        ";
                if (isset($context["listClass"])) { $_listClass_ = $context["listClass"]; } else { $_listClass_ = null; }
                $context["listClass"] = trim((((array_key_exists("listClass", $context)) ? (_twig_default_filter($_listClass_, "")) : ("")) . "pull-left"));
                // line 50
                echo "    ";
            }
            // line 51
            echo "
    ";
            // line 52
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            if (isset($context["listClass"])) { $_listClass_ = $context["listClass"]; } else { $_listClass_ = null; }
            $context["listAttributes"] = twig_array_merge($_listAttributes_, array("class" => trim((((($this->getAttribute($_listAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_listAttributes_, "class"), "")) : ("")) . " ") . $_listClass_))));
            // line 53
            echo "
    <ul";
            // line 54
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_listAttributes_), "method");
            echo ">
        ";
            // line 55
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 60
    public function block_dropdownList($context, array $blocks = array())
    {
        // line 61
        ob_start();
        // line 62
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren") && (!($this->getAttribute($_options_, "depth") === 0))) && $this->getAttribute($_item_, "displayChildren"))) {
            // line 63
            echo "        ";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            $context["listAttributes"] = twig_array_merge($_listAttributes_, array("class" => trim(((($this->getAttribute($_listAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_listAttributes_, "class"), "")) : ("")) . " dropdown-menu"))));
            // line 64
            echo "        <ul";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_listAttributes_), "method");
            echo ">
        ";
            // line 65
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 71
    public function block_listList($context, array $blocks = array())
    {
        // line 72
        ob_start();
        // line 73
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren") && (!($this->getAttribute($_options_, "depth") === 0))) && $this->getAttribute($_item_, "displayChildren"))) {
            // line 74
            echo "        ";
            $this->displayBlock("children", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_children($context, array $blocks = array())
    {
        // line 81
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["currentOptions"] = $_options_;
        // line 82
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["currentItem"] = $_item_;
        // line 84
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((!(null === $this->getAttribute($_options_, "depth")))) {
            // line 85
            if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
            $context["options"] = twig_array_merge($_currentOptions_, array("depth" => ($this->getAttribute($_currentOptions_, "depth") - 1)));
        }
        // line 87
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["options"] = twig_array_merge($_options_, array("currentDepth" => ($this->getAttribute($_options_, "currentDepth") + 1)));
        // line 88
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_currentItem_, "children"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 92
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context["item"] = $_currentItem_;
        // line 93
        if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
        $context["options"] = $_currentOptions_;
    }

    // line 96
    public function block_item($context, array $blocks = array())
    {
        // line 97
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if ($this->getAttribute($_item_, "displayed")) {
            // line 99
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["classes"] = (((!twig_test_empty($this->getAttribute($_item_, "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "attribute", array(0 => "class"), "method"))) : (array()));
            // line 100
            if (isset($context["matcher"])) { $_matcher_ = $context["matcher"]; } else { $_matcher_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (((array_key_exists("matcher", $context) && $this->getAttribute($_matcher_, "isCurrent", array(0 => $_item_), "method")) || ($this->getAttribute($_item_, "current", array(), "any", true, true) && $this->getAttribute($_item_, "current")))) {
                // line 101
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "currentClass")));
            } elseif (((array_key_exists("matcher", $context) && $this->getAttribute($_matcher_, "isAncestor", array(0 => $_item_, 1 => $this->getAttribute($_options_, "depth")), "method")) || ($this->getAttribute($_item_, "currentAncestor", array(), "any", true, true) && $this->getAttribute($_item_, "currentAncestor")))) {
                // line 103
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "ancestorClass")));
            }
            // line 105
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeFirst")) {
                // line 106
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "firstClass")));
            }
            // line 108
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeLast")) {
                // line 109
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "lastClass")));
            }
            // line 111
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (($this->getAttribute($_item_, "hasChildren") && (($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && ($this->getAttribute($_options_, "nav_type") == "list")) || (!($this->getAttribute($_options_, "currentDepth") === 1))))) {
                // line 112
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "nav-header"));
            } elseif ((($this->getAttribute($_item_, "hasChildren") && $this->getAttribute($_options_, "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute($_options_, "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar")))) {
                // line 114
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "dropdown"));
            }
            // line 117
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["attributes"] = $this->getAttribute($_item_, "attributes");
            // line 119
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            if ((((($this->getAttribute($_options_, "nav_type", array(), "any", true, true) && ($this->getAttribute($_options_, "nav_type") == "navbar")) && $this->getAttribute($_attributes_, "divider", array(), "any", true, true)) && (!twig_test_empty($this->getAttribute($_attributes_, "divider")))) && ($this->getAttribute($_options_, "currentDepth") === 1))) {
                // line 120
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "divider-vertical"));
            } elseif (($this->getAttribute($_attributes_, "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_attributes_, "divider"))))) {
                // line 122
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => "divider"));
            }
            // line 125
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            if ((!twig_test_empty($_classes_))) {
                // line 126
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["attributes"] = twig_array_merge($_attributes_, array("class" => twig_join_filter($_classes_, " ")));
            }
            // line 129
            echo "    <li";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo $this->getAttribute($this, "attributes", array(0 => $_attributes_), "method");
            echo ">";
            // line 130
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (isset($context["matcher"])) { $_matcher_ = $context["matcher"]; } else { $_matcher_ = null; }
            if (($this->getAttribute($_attributes_, "divider", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($_attributes_, "divider"))))) {
            } elseif (((($this->getAttribute($_item_, "hasChildren") && $this->getAttribute($_options_, "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute($_options_, "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar"))) && ($this->getAttribute($_options_, "currentDepth") === 1))) {
                // line 132
                echo "        ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute($_item_, "uri"))) && ((array_key_exists("matcher", $context) && (!$this->getAttribute($_matcher_, "isCurrent", array(0 => $_item_), "method"))) || $this->getAttribute($_options_, "currentAsLink")))) {
                // line 134
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } elseif (((!twig_test_empty($this->getAttribute($_item_, "uri"))) && (($this->getAttribute($_item_, "current", array(), "any", true, true) && (!$this->getAttribute($_item_, "current"))) || $this->getAttribute($_options_, "currentAsLink")))) {
                // line 136
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 138
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 141
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 142
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = twig_array_merge($_childrenClasses_, array(0 => ("menu_level_" . $this->getAttribute($_item_, "level"))));
            // line 143
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            $context["listAttributes"] = twig_array_merge($this->getAttribute($_item_, "childrenAttributes"), array("class" => twig_join_filter($_childrenClasses_, " ")));
            // line 144
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if ((($this->getAttribute($_item_, "hasChildren") && $this->getAttribute($_options_, "nav_type", array(), "any", true, true)) && (($this->getAttribute($_options_, "nav_type") == "list") || (!($this->getAttribute($_options_, "currentDepth") === 1))))) {
                // line 145
                echo "            ";
                $this->displayBlock("listList", $context, $blocks);
            } elseif ((($this->getAttribute($_item_, "hasChildren") && $this->getAttribute($_options_, "nav_type", array(), "any", true, true)) && twig_in_filter($this->getAttribute($_options_, "nav_type"), array(0 => "tabs", 1 => "pills", 2 => "navbar")))) {
                // line 147
                echo "            ";
                $this->displayBlock("dropdownList", $context, $blocks);
            } else {
                // line 149
                echo "            ";
                $this->displayBlock("list", $context, $blocks);
            }
            // line 151
            echo "    </li>
";
        }
    }

    // line 155
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "uri"), "html", null, true);
        echo "\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "linkAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 157
    public function block_dropdownElement($context, array $blocks = array())
    {
        // line 158
        ob_start();
        // line 159
        echo "    ";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["labelAttributes"] = $this->getAttribute($_item_, "labelAttributes");
        // line 160
        echo "    ";
        if (isset($context["labelAttributes"])) { $_labelAttributes_ = $context["labelAttributes"]; } else { $_labelAttributes_ = null; }
        $context["labelAttributes"] = twig_array_merge($_labelAttributes_, array("class" => trim(((($this->getAttribute($_labelAttributes_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_labelAttributes_, "class"), "")) : ("")) . " dropdown-toggle"))));
        // line 161
        echo "    ";
        if (isset($context["labelAttributes"])) { $_labelAttributes_ = $context["labelAttributes"]; } else { $_labelAttributes_ = null; }
        $context["labelAttributes"] = twig_array_merge($_labelAttributes_, array("data-toggle" => "dropdown"));
        // line 162
        echo "    <a href=\"#\"";
        if (isset($context["labelAttributes"])) { $_labelAttributes_ = $context["labelAttributes"]; } else { $_labelAttributes_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $_labelAttributes_), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo " <b class=\"caret\"></b></a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 166
    public function block_dividerElement($context, array $blocks = array())
    {
        // line 167
        ob_start();
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 171
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "labelAttributes")), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 173
    public function block_label($context, array $blocks = array())
    {
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_options_, "allow_safe_labels") && $this->getAttribute($_item_, "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->env->getExtension('bootstrap_icon_extension')->parseIconsFilter($this->getAttribute($_item_, "label"));
        } else {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->env->getExtension('bootstrap_icon_extension')->parseIconsFilter($this->getAttribute($_item_, "label"));
        }
    }

    // line 1
    public function getattributes($_attributes = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $_attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (((!(null === $_value_)) && (!($_value_ === false)))) {
                    // line 4
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo sprintf(" %s=\"%s\"", $_name_, ((($_value_ === true)) ? (twig_escape_filter($this->env, $_name_)) : (twig_escape_filter($this->env, $_value_))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 4,  559 => 3,  554 => 2,  543 => 1,  529 => 173,  518 => 171,  513 => 167,  510 => 166,  499 => 162,  495 => 161,  491 => 160,  487 => 159,  485 => 158,  482 => 157,  468 => 155,  462 => 151,  458 => 149,  454 => 147,  450 => 145,  446 => 144,  442 => 143,  438 => 142,  435 => 141,  431 => 138,  427 => 136,  423 => 134,  419 => 132,  412 => 130,  407 => 129,  402 => 126,  399 => 125,  395 => 122,  391 => 120,  387 => 119,  384 => 117,  380 => 114,  376 => 112,  372 => 111,  367 => 109,  364 => 108,  359 => 106,  356 => 105,  351 => 103,  346 => 101,  341 => 100,  338 => 99,  335 => 97,  332 => 96,  327 => 93,  324 => 92,  307 => 89,  289 => 88,  286 => 87,  282 => 85,  279 => 84,  276 => 82,  273 => 81,  270 => 79,  261 => 74,  256 => 73,  254 => 72,  251 => 71,  242 => 65,  236 => 64,  232 => 63,  227 => 62,  225 => 61,  222 => 60,  214 => 55,  209 => 54,  206 => 53,  202 => 52,  199 => 51,  196 => 50,  192 => 49,  189 => 48,  185 => 47,  182 => 46,  179 => 45,  176 => 44,  173 => 43,  170 => 42,  167 => 41,  164 => 40,  161 => 39,  158 => 38,  155 => 37,  152 => 36,  149 => 35,  145 => 34,  143 => 33,  140 => 32,  136 => 31,  132 => 30,  129 => 29,  125 => 26,  122 => 25,  119 => 24,  114 => 22,  111 => 21,  108 => 20,  105 => 15,  98 => 11,  96 => 10,  93 => 9,  89 => 173,  86 => 172,  84 => 171,  81 => 170,  79 => 166,  76 => 165,  74 => 157,  71 => 156,  69 => 155,  66 => 154,  64 => 96,  61 => 95,  59 => 79,  56 => 78,  54 => 71,  51 => 70,  49 => 60,  46 => 59,  44 => 29,  41 => 28,  39 => 15,  36 => 14,  34 => 9,  31 => 8,);
    }
}
