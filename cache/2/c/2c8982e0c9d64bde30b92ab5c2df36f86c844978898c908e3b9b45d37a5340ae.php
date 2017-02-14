<?php

/* admin/404.html */
class __TwigTemplate_2c8982e0c9d64bde30b92ab5c2df36f86c844978898c908e3b9b45d37a5340ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/404.html", 1);
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
        echo "Página não encontrada | Câmara Municipal de Pirapora MG";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<div id=\"erro-404\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t<h1>Página não encontrada!</h1>
\t\t\t<p>A página solicitada não foi encontrada!</p>
\t\t\t<a href=\"/admin/painel\" class=\"btn btn-success\">Página inicial</a>
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "admin/404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
