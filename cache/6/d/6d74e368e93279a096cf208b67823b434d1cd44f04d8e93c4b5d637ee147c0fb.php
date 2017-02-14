<?php

/* admin/banner/novo.html */
class __TwigTemplate_6d74e368e93279a096cf208b67823b434d1cd44f04d8e93c4b5d637ee147c0fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/banner/novo.html", 1);
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
\t<h1>Novo Banner</h1>


\t<form method=\"post\" action=\"/admin/painel/banner/novo\" enctype=\"multipart/form-data\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t<input type=\"text\" name=\"banner-titulo\" maxlength=\"60\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-titulo", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Descrição</label>
\t\t\t\t\t<input type=\"text\" name=\"banner-descricao\" maxlength=\"100\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-descricao", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira a descrição\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t<select name=\"banner-ativo\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"0\" ";
        // line 27
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-ativo", array(), "array") == 0))) ? ("selected") : (""));
        echo ">Não</option>
\t\t\t\t\t\t<option value=\"1\" ";
        // line 28
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "banner-ativo", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Sim</option>
\t\t\t\t\t</select>
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

\t\t<button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
\t\t<a href=\"/admin/painel/banner\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 45
        if (array_key_exists("erro", $context)) {
            // line 46
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 47
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/banner/novo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 49,  91 => 47,  88 => 46,  86 => 45,  66 => 28,  62 => 27,  52 => 20,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
