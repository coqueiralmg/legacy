<?php

/* 404.html */
class __TwigTemplate_c9a61210f0983b60f2f159dc0d0ce4c9637a0c72a8bdd7eee86dc54ea9229cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "404.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
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
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "404.html";
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
