<?php

/* AcmeStampBundle:Test:show.html.twig */
class __TwigTemplate_3c98d7303568f0cff3b26c47ca94370d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeStampBundle:Loguj:baza.html.twig");

        $this->blocks = array(
            'tresc' => array($this, 'block_tresc'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeStampBundle:Loguj:baza.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tresc($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Test</h1>

    <table class=\"table table-bordered table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "id"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imie</th>
                <td>";
        // line 14
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_entity_, "imie"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Data</th>
                <td>";
        // line 18
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_entity_, "data"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        
    
        <form action=\"";
        // line 25
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_delete", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 27
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_delete_form_, 'widget');
        echo "
            <div class=\"btn-group\">
                <a class=\"btn\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test"), "html", null, true);
        echo "\">
                    <i class=\"icon-chevron-left\"></i> Powróć do listy
                </a>
                                    
                <a class=\"btn\" href=\"";
        // line 33
        if (isset($context["entity"])) { $_entity_ = $context["entity"]; } else { $_entity_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_edit", array("id" => $this->getAttribute($_entity_, "id"))), "html", null, true);
        echo "\">
                    <i class=\"icon-pencil\"></i> Edytuj
                </a>
                
            
                                <button class=\"btn btn-danger \" type=\"submit\"><i class=\"icon-white icon-remove\"></i> Usuń</button>
            </div>
        </form>
    
";
    }

    public function getTemplateName()
    {
        return "AcmeStampBundle:Test:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 33,  78 => 29,  72 => 27,  66 => 25,  55 => 18,  47 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
