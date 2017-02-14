<?php

/* admin/secretaria/alterar.html */
class __TwigTemplate_b205cf2bd86b61dce048307e28c32276e2005af00f947aec2399950fc5bdb41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/secretaria/alterar.html", 1);
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
\t<h1>Alterar Secretaria</h1>

\t<form method=\"post\" action=\"/admin/painel/secretaria/alterar\" enctype=\"multipart/form-data\">

\t\t<input type=\"hidden\" name=\"_METHOD\" value=\"PUT\"/>
\t\t<input type=\"hidden\" name=\"secretaria-id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getFoto", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getNome", array(), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getNome", array(), "method"), "html", null, true);
        echo "\" >
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Nome</label>
\t\t\t\t\t<input type=\"text\" name=\"secretaria-nome\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-nome", array(), "array")) : ($this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getNome", array(), "method"))), "html", null, true);
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
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-email", array(), "array")) : ($this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getEmail", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o email\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Telefone</label>
\t\t\t\t\t<input type=\"text\" name=\"secretaria-telefone\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-telefone", array(), "array")) : ($this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getTelefone", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Ex: (00) 0000-0000\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Secretário Responsável</label>
\t\t\t\t\t<input type=\"text\" name=\"secretaria-secretario\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-secretario", array(), "array")) : ($this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getSecretario", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Responsável pela secretaria\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t<select name=\"secretaria-ativo\" class=\"form-control\">
\t\t\t\t\t\t";
        // line 56
        if (array_key_exists("dados", $context)) {
            // line 57
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-ativo", array(), "array") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 58
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-ativo", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getAtivo", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 61
            echo ((($this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getAtivo", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t";
        }
        // line 63
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Descrição</label>
\t\t\t\t\t<textarea name=\"secretaria-descricao\" class=\"form-control\" placeholder=\"Sobre a secretaria\" cols=\"30\" rows=\"5\">";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "secretaria-descricao", array(), "array")) : ($this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getDescricao", array(), "method"))), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<button type=\"submit\" class=\"btn btn-primary\">Alterar</button>
\t\t<a href=\"/admin/painel/secretaria\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 81
        if (array_key_exists("erro", $context)) {
            // line 82
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 83
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 85
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/secretaria/alterar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 85,  157 => 83,  154 => 82,  152 => 81,  139 => 71,  129 => 63,  124 => 61,  119 => 60,  114 => 58,  109 => 57,  107 => 56,  97 => 49,  88 => 43,  77 => 35,  61 => 22,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
