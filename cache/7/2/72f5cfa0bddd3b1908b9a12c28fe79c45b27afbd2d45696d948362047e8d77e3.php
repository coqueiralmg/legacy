<?php

/* legislacao.html */
class __TwigTemplate_72f5cfa0bddd3b1908b9a12c28fe79c45b27afbd2d45696d948362047e8d77e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "legislacao.html", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div id=\"legislacao\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t";
        // line 8
        if (((isset($context["legislacao"]) ? $context["legislacao"] : null) != null)) {
            // line 9
            echo "\t\t\t
\t\t\t\t<h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["legislacao"]) ? $context["legislacao"] : null), "getTitulo", array(), "method"), "html", null, true);
            echo "</h1>
\t\t\t\t<p>Data: ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["legislacao"]) ? $context["legislacao"] : null), "getDataInicio", array(), "method"), "d/m/Y H:i"), "html", null, true);
            echo " | Número: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["legislacao"]) ? $context["legislacao"] : null), "getNumero", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"fb-like\" data-href=\"";
            // line 12
            echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/legislacao/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute((isset($context["legislacao"]) ? $context["legislacao"] : null), "getTitulo", array(), "method")))) . "/") . $this->getAttribute((isset($context["legislacao"]) ? $context["legislacao"] : null), "getId", array(), "method")), "html", null, true);
            echo "\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
\t\t\t\t<hr />

\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["legislacao"]) ? $context["legislacao"] : null), "getArquivo", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\">ARQUIVO (BAIXAR)</a>
\t\t\t\t
\t\t\t\t";
            // line 17
            echo $this->getAttribute((isset($context["legislacao"]) ? $context["legislacao"] : null), "getDescricao", array(), "method");
            echo "

\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t<p>Legislação não encontrada!</p>
\t\t\t";
        }
        // line 22
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "legislacao.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  69 => 20,  63 => 17,  58 => 15,  52 => 12,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
