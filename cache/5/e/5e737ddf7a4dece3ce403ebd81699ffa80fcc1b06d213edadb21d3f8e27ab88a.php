<?php

/* admin/licitacao/novo.html */
class __TwigTemplate_5e737ddf7a4dece3ce403ebd81699ffa80fcc1b06d213edadb21d3f8e27ab88a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/licitacao/novo.html", 1);
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
\t<h1>Nova Licitação</h1>


\t<form method=\"post\" action=\"/admin/painel/licitacao/novo\" enctype=\"multipart/form-data\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t<input type=\"text\" name=\"licitacao-titulo\" maxlength=\"100\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-titulo", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Data de Início</label>
\t\t\t\t\t<input type=\"text\" name=\"licitacao-data-inicio\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-data-inicio", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control date-hour\" id=\"exampleInputEmail1\" placeholder=\"Insira a data de início\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Data de Término</label>
\t\t\t\t\t<input type=\"text\" name=\"licitacao-data-termino\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-data-termino", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control date-hour\" id=\"exampleInputEmail1\" placeholder=\"Insira a data de término\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Descrição</label>
\t\t\t\t\t<!-- tinyMCE mapeia o class editor-texto para gerar o editor e atribui um input hidden com name igual ao id do div (licitacao-descricao) -->
\t\t\t\t\t<div id=\"licitacao-descricao\" class=\"editor-texto\">";
        // line 33
        echo ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-descricao", array(), "array")) : (""));
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Edital</label>
\t\t\t\t\t<input type=\"file\" name=\"licitacao-edital\" id=\"exampleInputFile\">
\t\t\t\t\t<p class=\"help-block\">Arquivos .pdf, .doc ou .docx</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t<select name=\"licitacao-ativo\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"0\" ";
        // line 47
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-ativo", array(), "array") == 0))) ? ("selected") : (""));
        echo ">Não</option>
\t\t\t\t\t\t<option value=\"1\" ";
        // line 48
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-ativo", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Sim</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
\t\t<a href=\"/admin/painel/licitacao\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 58
        if (array_key_exists("erro", $context)) {
            // line 59
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 60
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/licitacao/novo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 62,  110 => 60,  107 => 59,  105 => 58,  92 => 48,  88 => 47,  71 => 33,  61 => 26,  52 => 20,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
