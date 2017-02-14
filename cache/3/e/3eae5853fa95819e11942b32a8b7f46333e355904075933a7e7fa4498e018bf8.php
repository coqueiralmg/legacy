<?php

/* admin/destaque/alterar.html */
class __TwigTemplate_3eae5853fa95819e11942b32a8b7f46333e355904075933a7e7fa4498e018bf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/destaque/alterar.html", 1);
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
\t<h1>Alterar Destaque</h1>


\t<form method=\"post\" action=\"/admin/painel/destaque/alterar\" enctype=\"multipart/form-data\">

\t\t<input type=\"hidden\" name=\"_METHOD\" value=\"PUT\"/>
\t\t<input type=\"hidden\" name=\"destaque-id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t<input type=\"text\" name=\"destaque-titulo\" maxlength=\"100\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-titulo", array(), "array")) : ($this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getTitulo", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Link</label>
\t\t\t\t\t<input type=\"text\" name=\"destaque-link\" maxlength=\"200\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-link", array(), "array")) : ($this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getLink", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Cole ou digite o link\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t<select name=\"destaque-ativo\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 30
        if (array_key_exists("dados", $context)) {
            // line 31
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-ativo", array(), "array") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 32
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-ativo", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getAtivo", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 35
            echo ((($this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getAtivo", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getFoto", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getTitulo", array(), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["destaque"]) ? $context["destaque"] : null), "getTitulo", array(), "method"), "html", null, true);
        echo "\" >
\t\t\t\t<br /><br />
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Foto Destaque</label>
\t\t\t\t\t<input type=\"file\" name=\"destaque-foto\" id=\"exampleInputFile\">
\t\t\t\t\t<p class=\"help-block\">Imagem .jpg ou .png</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Alterar</button>
\t\t<a href=\"/admin/painel/destaque\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
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
        return "admin/destaque/alterar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 64,  127 => 62,  124 => 61,  122 => 60,  99 => 44,  90 => 37,  85 => 35,  80 => 34,  75 => 32,  70 => 31,  68 => 30,  58 => 23,  49 => 17,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
