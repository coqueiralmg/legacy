<?php

/* admin/destaque/novo.html */
class __TwigTemplate_f4087aafa260d9a304367dc705df0747f3fa6bfb369008b774368fe5b3d34751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/destaque/novo.html", 1);
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
\t<h1>Novo Destaque</h1>


\t<form method=\"post\" action=\"/admin/painel/destaque/novo\" enctype=\"multipart/form-data\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t<input type=\"text\" name=\"destaque-titulo\" maxlength=\"100\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-titulo", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Link</label>
\t\t\t\t\t<input type=\"text\" name=\"destaque-link\" maxlength=\"200\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-link", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Cole ou digite o link\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t<select name=\"destaque-ativo\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"0\" ";
        // line 27
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-ativo", array(), "array") == 0))) ? ("selected") : (""));
        echo ">Não</option>
\t\t\t\t\t\t<option value=\"1\" ";
        // line 28
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "destaque-ativo", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Sim</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Foto Destaque</label>
\t\t\t\t\t<input type=\"file\" name=\"destaque-foto\" id=\"exampleInputFile\">
\t\t\t\t\t<p class=\"help-block\">Imagem .jpg ou .png</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
\t\t<a href=\"/admin/painel/destaque\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 48
        if (array_key_exists("erro", $context)) {
            // line 49
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 50
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 52
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/destaque/novo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 52,  94 => 50,  91 => 49,  89 => 48,  66 => 28,  62 => 27,  52 => 20,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
