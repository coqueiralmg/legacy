<?php

/* licitacao.html */
class __TwigTemplate_90b6e36be9d1c39f02cd8c1dc30ea13737a0058aeadad55c31ebda15206dfcab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "licitacao.html", 1);
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
\t<div id=\"licitacao\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t";
        // line 8
        if (((isset($context["licitacao"]) ? $context["licitacao"] : null) != null)) {
            // line 9
            echo "\t\t\t
\t\t\t\t<h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getTitulo", array(), "method"), "html", null, true);
            echo "</h1>
\t\t\t\t<p>Início: ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getDataInicio", array(), "method"), "d/m/Y H:i"), "html", null, true);
            echo " | Término: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getDataTermino", array(), "method"), "d/m/Y H:i"), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"fb-like\" data-href=\"";
            // line 12
            echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/licitacao/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getTitulo", array(), "method")))) . "/") . $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getId", array(), "method")), "html", null, true);
            echo "\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
\t\t\t\t<hr />

\t\t\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getEdital", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\">EDITAL (BAIXAR)</a>
\t\t\t\t
\t\t\t\t";
            // line 17
            echo $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getDescricao", array(), "method");
            echo "

\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t<p>Licitação não encontrada!</p>
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
        return "licitacao.html";
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
