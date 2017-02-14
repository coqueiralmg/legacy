<?php

/* admin/error.html */
class __TwigTemplate_9a73860747e6c9e1309b08944cd3cfa430884327eac6a0f970db324ee247c279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/error.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Erro inesperado | Câmara Municipal de Pirapora MG";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<div id=\"erro-geral\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t<h1>Ocorreu um erro inesperado, tente novamente!</h1>
\t\t\t<p>Mensagem: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</p>
\t\t\t<p>Arquivo: ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : null), "html", null, true);
        echo "</p>
\t\t\t<p>Linha: ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : null), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "admin/error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  48 => 11,  44 => 10,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
