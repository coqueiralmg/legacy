<?php

/* admin/usuario/novo.html */
class __TwigTemplate_3f43b9c2805abb2bb2758c3ad38fbee1b118e1909786ad0c90188e1998ad71cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/usuario/novo.html", 1);
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
\t<h1>Novo Usuário</h1>


\t<form method=\"post\" action=\"/admin/painel/usuario/novo\">

\t<div role=\"tabpanel\">
\t\t<!-- Nav tabs -->
\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#usuario\" aria-controls=\"usuario\" role=\"tab\" data-toggle=\"tab\">Dados Usuário</a></li>
\t\t\t<li role=\"presentation\"><a href=\"#pessoa\" aria-controls=\"pessoa\" role=\"tab\" data-toggle=\"tab\">Dados Pessoais</a></li>
\t\t</ul>

\t\t<!-- Tab panes -->
\t\t<div class=\"tab-content\">

\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"usuario\">
\t\t\t\t
\t\t\t\t<br />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Usuário</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"usuario-usuario\" maxlength=\"30\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-usuario", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira um nickname, ex:(fulanotal)\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Email</label>
\t\t\t\t\t\t\t<input type=\"email\" name=\"usuario-email\" maxlength=\"50\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-email", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o email\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Senha</label>
\t\t\t\t\t\t\t<input type=\"password\" name=\"usuario-senha\" maxlength=\"50\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-senha", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira a senha\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t\t\t<select name=\"usuario-ativo\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 46
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-ativo", array(), "array") == 0))) ? ("selected") : (""));
        echo ">Não</option>
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 47
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-ativo", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Sim</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Nível de acesso</label>
\t\t\t\t\t\t\t<select name=\"usuario-nivel\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 55
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-nivel", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Normal</option>
\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 56
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-nivel", array(), "array") == 2))) ? ("selected") : (""));
        echo ">Administrador</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"pessoa\">
\t\t\t\t
\t\t\t\t<br />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Nome</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"pessoa-nome\" maxlength=\"60\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "pessoa-nome", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o nome\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Apelido</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"pessoa-apelido\" maxlength=\"45\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "pessoa-apelido", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o apelido se for o caso\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Data de nascimento</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"pessoa-data-nascimento\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "pessoa-data-nascimento", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control date\" id=\"exampleInputEmail1\" placeholder=\"Insira a data de nascimento\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>


\t\t<button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
\t\t<a href=\"/admin/painel/vereador\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 96
        if (array_key_exists("erro", $context)) {
            // line 97
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 98
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 100
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/usuario/novo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 100,  160 => 98,  157 => 97,  155 => 96,  138 => 82,  129 => 76,  120 => 70,  103 => 56,  99 => 55,  88 => 47,  84 => 46,  74 => 39,  65 => 33,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }
}
