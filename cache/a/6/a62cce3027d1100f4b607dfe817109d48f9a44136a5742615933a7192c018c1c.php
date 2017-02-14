<?php

/* admin/licitacao/alterar.html */
class __TwigTemplate_a62cce3027d1100f4b607dfe817109d48f9a44136a5742615933a7192c018c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/licitacao/alterar.html", 1);
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
\t<h1>Alterar Licitação</h1>


\t<form method=\"post\" action=\"/admin/painel/licitacao/alterar\" enctype=\"multipart/form-data\">

\t\t<input type=\"hidden\" name=\"_METHOD\" value=\"PUT\"/>
\t  \t<input type=\"hidden\" name=\"licitacao-id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t<input type=\"text\" name=\"licitacao-titulo\" maxlength=\"100\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-titulo", array(), "array")) : ($this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getTitulo", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Data de Início</label>
\t\t\t\t\t<input type=\"text\" name=\"licitacao-data-inicio\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-data-inicio", array(), "array")) : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getDataInicio", array(), "method"), "d/m/Y H:i:s"))), "html", null, true);
        echo "\" class=\"form-control date-hour\" id=\"exampleInputEmail1\" placeholder=\"Insira a data de início\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Data de Término</label>
\t\t\t\t\t<input type=\"text\" name=\"licitacao-data-termino\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-data-termino", array(), "array")) : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getDataTermino", array(), "method"), "d/m/Y H:i:s"))), "html", null, true);
        echo "\" class=\"form-control date-hour\" id=\"exampleInputEmail1\" placeholder=\"Insira a data de término\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Descrição</label>
\t\t\t\t\t<!-- tinyMCE mapeia o class editor-texto para gerar o editor e atribui um input hidden com name igual ao id do div (licitacao-descricao) -->
\t\t\t\t\t<div id=\"licitacao-descricao\" class=\"editor-texto\">";
        // line 36
        echo ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-descricao", array(), "array")) : ($this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getDescricao", array(), "method")));
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
\t\t\t\t\t\t";
        // line 50
        if (array_key_exists("dados", $context)) {
            // line 51
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-ativo", array(), "array") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 52
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "licitacao-ativo", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getAtivo", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 55
            echo ((($this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getAtivo", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<h5>Edital atual: <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getEdital", array(), "method")), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getTitulo", array(), "method"), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-paperclip\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["licitacao"]) ? $context["licitacao"] : null), "getTitulo", array(), "method"), "html", null, true);
        echo "</a></h5>
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Alterar</button>
\t\t<a href=\"/admin/painel/licitacao\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 72
        if (array_key_exists("erro", $context)) {
            // line 73
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 74
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 76
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/licitacao/alterar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 76,  145 => 74,  142 => 73,  140 => 72,  125 => 64,  116 => 57,  111 => 55,  106 => 54,  101 => 52,  96 => 51,  94 => 50,  77 => 36,  67 => 29,  58 => 23,  49 => 17,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
