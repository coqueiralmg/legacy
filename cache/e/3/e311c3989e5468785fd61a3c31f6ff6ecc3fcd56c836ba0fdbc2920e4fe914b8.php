<?php

/* admin/usuario/alterar.html */
class __TwigTemplate_e311c3989e5468785fd61a3c31f6ff6ecc3fcd56c836ba0fdbc2920e4fe914b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/usuario/alterar.html", 1);
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
\t<h1>Alterar Usuário</h1>


\t<form method=\"post\" action=\"/admin/painel/usuario/alterar\">

\t\t<input type=\"hidden\" name=\"_METHOD\" value=\"PUT\"/>
\t\t<input type=\"hidden\" name=\"usuario-id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />
\t\t<input type=\"hidden\" name=\"pessoa-id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getPessoa", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\" />

\t\t<div role=\"tabpanel\">
\t\t\t<!-- Nav tabs -->
\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#usuario\" aria-controls=\"usuario\" role=\"tab\" data-toggle=\"tab\">Dados Usuário</a></li>
\t\t\t\t<li role=\"presentation\"><a href=\"#pessoa\" aria-controls=\"pessoa\" role=\"tab\" data-toggle=\"tab\">Dados Pessoais</a></li>
\t\t\t</ul>

\t\t\t<!-- Tab panes -->
\t\t\t<div class=\"tab-content\">

\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"usuario\">
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Usuário</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"usuario-usuario\" maxlength=\"30\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-usuario", array(), "array")) : ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getUsuario", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira um nickname, ex:(fulanotal)\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"usuario-email\" maxlength=\"50\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-email", array(), "array")) : ($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getEmail", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Senha</label>
\t\t\t\t\t\t\t\t<input type=\"password\" name=\"usuario-senha\" maxlength=\"50\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-senha", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira a senha\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t\t\t\t<select name=\"usuario-ativo\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 50
        if (array_key_exists("dados", $context)) {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-ativo", array(), "array") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 52
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-ativo", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getAtivo", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 55
            echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getAtivo", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Nível de acesso</label>
\t\t\t\t\t\t\t\t<select name=\"usuario-nivel\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 64
        if (array_key_exists("dados", $context)) {
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-nivel", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Normal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            // line 66
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "usuario-nivel", array(), "array") == 2)) ? ("selected") : (""));
            echo ">Administrador</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getNivel", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Normal</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            // line 69
            echo ((($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getNivel", array(), "method") == 2)) ? ("selected") : (""));
            echo ">Administrador</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 71
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"pessoa\">
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Nome</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"pessoa-nome\" maxlength=\"60\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "pessoa-nome", array(), "array")) : ($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getPessoa", array(), "method"), "getNome", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o nome\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Apelido</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"pessoa-apelido\" maxlength=\"45\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "pessoa-apelido", array(), "array")) : ($this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getPessoa", array(), "method"), "getApelido", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o apelido se for o caso\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Data de nascimento</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"pessoa-data-nascimento\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "pessoa-data-nascimento", array(), "array")) : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : null), "getPessoa", array(), "method"), "getDataNascimento", array(), "method"), "d/m/Y"))), "html", null, true);
        echo "\" class=\"form-control date\" id=\"exampleInputEmail1\" placeholder=\"Insira a data de nascimento\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<button type=\"submit\" class=\"btn btn-primary\">Alterar</button>
\t\t<a href=\"/admin/painel/usuario\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 110
        if (array_key_exists("erro", $context)) {
            // line 111
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 112
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 114
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/usuario/alterar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 114,  202 => 112,  199 => 111,  197 => 110,  180 => 96,  171 => 90,  162 => 84,  147 => 71,  142 => 69,  137 => 68,  132 => 66,  127 => 65,  125 => 64,  116 => 57,  111 => 55,  106 => 54,  101 => 52,  96 => 51,  94 => 50,  84 => 43,  75 => 37,  66 => 31,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
