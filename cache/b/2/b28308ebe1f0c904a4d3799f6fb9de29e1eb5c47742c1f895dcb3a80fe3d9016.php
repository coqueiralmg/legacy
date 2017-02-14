<?php

/* noticia.html */
class __TwigTemplate_b28308ebe1f0c904a4d3799f6fb9de29e1eb5c47742c1f895dcb3a80fe3d9016 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "noticia.html", 1);
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
\t<div id=\"noticia\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t";
        // line 8
        if (((isset($context["noticia"]) ? $context["noticia"] : null) != null)) {
            // line 9
            echo "
\t\t\t\t<h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
            echo "</h1>
\t\t\t\t<p>Autor: ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getAutor", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method") . " | Postado: ") . twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getDataPostagem", array(), "method"), "d/m/Y H:i")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getDataAlteracao", array(), "method") != null)) ? ((" | Atualizado: " . twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getDataAlteracao", array(), "method"), "d/m/Y H:i"))) : ("")), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"fb-like\" data-href=\"";
            // line 12
            echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/noticia/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method")))) . "/") . $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getId", array(), "method")), "html", null, true);
            echo "\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
\t\t\t\t<hr />

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<img class=\"float-right img margin-10\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getFoto", array(), "method")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 18
            echo $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getTexto", array(), "method");
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<br />
\t\t\t\t<div class=\"fb-comments\" data-href=\"";
            // line 23
            echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/noticia/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method")))) . "/") . $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getId", array(), "method")), "html", null, true);
            echo "\" data-width=\"100%\" data-numposts=\"5\" data-colorscheme=\"light\"></div>

\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t<p>Notícia não encontrada!</p>
\t\t\t";
        }
        // line 28
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "noticia.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  82 => 26,  76 => 23,  68 => 18,  60 => 17,  52 => 12,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
