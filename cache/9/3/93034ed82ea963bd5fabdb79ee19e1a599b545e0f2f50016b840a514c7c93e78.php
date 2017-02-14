<?php

/* admin/banner/alterar.html */
class __TwigTemplate_93034ed82ea963bd5fabdb79ee19e1a599b545e0f2f50016b840a514c7c93e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/banner/alterar.html", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
\t<h1>Alterar Banner</h1>


\t<form method=\"post\" action=\"/admin/painel/banner/alterar\" enctype=\"multipart/form-data\">

\t\t<input type=\"hidden\" name=\"_METHOD\" value=\"PUT\"/>
\t  \t<input type=\"hidden\" name=\"banner-id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t<input type=\"text\" name=\"banner-titulo\" maxlength=\"60\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-titulo", array(), "array")) : ($this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getTitulo", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Descrição</label>
\t\t\t\t\t<input type=\"text\" name=\"banner-descricao\" maxlength=\"100\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-descricao", array(), "array")) : ($this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getDescricao", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira a descrição\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t<select name=\"banner-ativo\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 30
        if (array_key_exists("dados", $context)) {
            // line 31
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-ativo", array(), "array") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 32
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-ativo", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getAtivo", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 35
            echo ((($this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getAtivo", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Banner</label>
\t\t\t\t\t<input type=\"file\" name=\"banner-banner\" id=\"exampleInputFile\">
\t\t\t\t\t<p class=\"help-block\">Imagem .jpg ou .png</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t<img src=\"";
        // line 51
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getBanner", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getTitulo", array(), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "getTitulo", array(), "method"), "html", null, true);
        echo "\" class=\"img-responsive\" />
\t\t\t\t<br />
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Alterar</button>
\t\t<a href=\"/admin/painel/banner\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 60
        if (array_key_exists("erro", $context)) {
            // line 61
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 62
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/banner/alterar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 64,  127 => 62,  124 => 61,  122 => 60,  106 => 51,  90 => 37,  85 => 35,  80 => 34,  75 => 32,  70 => 31,  68 => 30,  58 => 23,  49 => 17,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
