<?php

/* admin/secretaria/novo.html */
class __TwigTemplate_8252d51f95a55926508e513bf49fcb7dc042d0ecd721e2eb1bbc1af39f3ba6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/secretaria/novo.html", 1);
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
\t<h1>Nova Secretaria</h1>


\t<form method=\"post\" action=\"/admin/painel/secretaria/novo\" enctype=\"multipart/form-data\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Nome</label>
\t\t\t\t\t<input type=\"text\" name=\"secretaria-nome\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-nome", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Ex: Secretaria de Educação\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Foto</label>
\t\t\t\t\t<input type=\"file\" name=\"secretaria-foto\" id=\"exampleInputFile\">
\t\t\t\t\t<p class=\"help-block\">Imagem .jpg ou .png. (187 x 187 ou maior)</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Email</label>
\t\t\t\t\t<input type=\"email\" name=\"secretaria-email\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-email", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o email\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Telefone</label>
\t\t\t\t\t<input type=\"text\" name=\"secretaria-telefone\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-telefone", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Ex: (00) 0000-0000\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Secretário Responsável</label>
\t\t\t\t\t<input type=\"text\" name=\"secretaria-secretario\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-secretario", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Responsável pela secretaria\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t<select name=\"secretaria-ativo\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"0\" ";
        // line 48
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-ativo", array(), "array") == 0))) ? ("selected") : (""));
        echo ">Não</option>
\t\t\t\t\t\t<option value=\"1\" ";
        // line 49
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-ativo", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Sim</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Descrição</label>
\t\t\t\t\t<textarea name=\"secretaria-descricao\" class=\"form-control\" placeholder=\"Sobre a secretaria\" cols=\"30\" rows=\"5\">";
        // line 58
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-descricao", array(), "array")) : ("")), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
\t\t<a href=\"/admin/painel/secretaria\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 68
        if (array_key_exists("erro", $context)) {
            // line 69
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 70
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/secretaria/novo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 72,  123 => 70,  120 => 69,  118 => 68,  105 => 58,  93 => 49,  89 => 48,  79 => 41,  70 => 35,  59 => 27,  43 => 14,  31 => 4,  28 => 3,  11 => 1,);
    }
}
