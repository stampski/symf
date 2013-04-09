<?php

/* AcmeStampBundle:Loguj:baza.html.twig */
class __TwigTemplate_6f303177de09caa176ce742462d1961e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'tresc' => array($this, 'block_tresc'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"navbar navbar-static-top navbar-inverse\" style=\"margin-bottom: 5px;\">
\t<div class=\"navbar-inner\">
\t\t<div class=\"container-fluid\">
\t\t    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t    <span class=\"icon-bar\">
\t\t\t    </span>
\t\t\t    <span class=\"icon-bar\">
\t\t\t    </span>
\t\t\t    <span class=\"icon-bar\">
\t\t\t    </span>
\t\t    </a>
\t\t\t<a class=\"brand\" href=\"#\">Ja</a>
\t\t\t<div class=\"nav-collapse\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t<li class=\"active first\"><a href=\"#\">Dokądś</a></li>
\t\t\t\t\t<li class=\"last\"><a href=\"#\">Itddd</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>

</div>

<div class=\"container-fluid\">
\t<div class=\"row-fluid\">
\t\t<div class=\"span2 bs-docs-sidebar\">
\t\t\t<!-- Menu -->
\t\t\t<div class=\"span2 well sidebar-nav\" data-spy=\"affix\">
\t\t\t    <!-- <ul class=\"nav nav-list\">
\t\t\t\t    <li class=\"nav-header\">
\t\t\t\t\t    Header
\t\t\t\t    </li>
\t\t\t\t    <li>
\t\t\t\t    </li>
\t\t\t\t    <li class=\"\">
\t\t\t\t\t    <a href=\"#\">
\t\t\t\t\t    <i class=\"icon-home\">
\t\t\t\t\t    </i>
\t\t\t\t\t    Link
\t\t\t\t\t    </a>
\t\t\t\t    </li>
\t\t\t\t    <li class=\"\">
\t\t\t\t\t    <a href=\"#\">
\t\t\t\t\t    Link
\t\t\t\t\t    </a>
\t\t\t\t    </li>
\t\t\t\t    <li class=\"\">
\t\t\t\t\t    <a href=\"#\">
\t\t\t\t\t    Link
\t\t\t\t\t    </a>
\t\t\t\t    </li>
\t\t\t    </ul> -->
\t\t\t    ";
        // line 57
        echo $this->env->getExtension('knp_menu')->render("AcmeStampBundle:Builder:navListIcons", array("nav_type" => "list"));
        echo "
\t\t    </div>

\t\t</div>
\t\t<div class=\"span10\">
\t\t\t<div class=\"hero-unit\">
\t\t        <span class=\"badge badge-info\">
\t\t\t        <i class=\"icon-home\">
\t\t\t        </i>
\t\t\t        Tak, udało się!
\t\t        </span>
\t\t        <div>
\t\t\t        <h1>
\t\t\t\t        Hello, world!
\t\t\t        </h1>
\t        \t<p>
\t\t            This is a template for a simple marketing or informational website. It
\t\t            includes a large callout called the hero unit and three supporting pieces
\t\t            of content. Use it as a starting point to create something more unique.
\t\t        </p>
\t\t        </div>
\t\t        <a class=\"btn btn-primary\" href=\"#\">
\t\t\t        Learn more »
\t\t        </a>
\t\t    </div>
\t\t    <!-- Komunikaty -->
\t\t    ";
        // line 83
        if (isset($context["kom"])) { $_kom_ = $context["kom"]; } else { $_kom_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_kom_);
        foreach ($context['_seq'] as $context["_key"] => $context["komunikat"]) {
            // line 84
            echo "\t\t    ";
            if (isset($context["komunikat"])) { $_komunikat_ = $context["komunikat"]; } else { $_komunikat_ = null; }
            if ($this->getAttribute($_komunikat_, "tresc")) {
                // line 85
                echo "\t\t    \t<div class=\"";
                if (isset($context["komunikat"])) { $_komunikat_ = $context["komunikat"]; } else { $_komunikat_ = null; }
                if ($this->getAttribute($_komunikat_, "typ")) {
                    if (isset($context["komunikat"])) { $_komunikat_ = $context["komunikat"]; } else { $_komunikat_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_komunikat_, "typ"), "html", null, true);
                } else {
                    echo "alert";
                }
                echo "\">
\t\t    \t\t<a href=\"#\" class=\"close\" data-dismiss=\"alert\">&times;</a>
\t\t    \t\t";
                // line 87
                if (isset($context["komunikat"])) { $_komunikat_ = $context["komunikat"]; } else { $_komunikat_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_komunikat_, "tresc"), "html", null, true);
                echo "
\t\t    \t</div>
\t\t    ";
            }
            // line 90
            echo "\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['komunikat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 91
        echo "\t\t    <!-- Kontent -->
\t\t\t";
        // line 92
        $this->displayBlock('tresc', $context, $blocks);
        // line 93
        echo "\t\t</div>
\t</div>
</div>

";
    }

    // line 92
    public function block_tresc($context, array $blocks = array())
    {
        echo "Tresc";
    }

    public function getTemplateName()
    {
        return "AcmeStampBundle:Loguj:baza.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 92,  155 => 93,  153 => 92,  150 => 91,  144 => 90,  137 => 87,  125 => 85,  121 => 84,  116 => 83,  87 => 57,  32 => 4,  29 => 3,  85 => 33,  78 => 29,  72 => 27,  66 => 25,  55 => 18,  47 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
