<?php

/* admin/noticia/alterar.html */
class __TwigTemplate_51a4cefe043215787dc2d68da508c4420474bb475f936dff353343b1abcd1800 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/noticia/alterar.html", 1);
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
\t<h1>Alterar Notícia</h1>


\t<form method=\"post\" action=\"/admin/painel/noticia/alterar\" enctype=\"multipart/form-data\">

\t\t<input type=\"hidden\" name=\"_METHOD\" value=\"PUT\"/>
\t\t<input type=\"hidden\" name=\"post-id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\" />
\t  \t<input type=\"hidden\" name=\"noticia-id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />

\t\t<div role=\"tabpanel\">
\t\t\t<!-- Nav tabs -->
\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#post\" aria-controls=\"post\" role=\"tab\" data-toggle=\"tab\">Dados do Post</a></li>
\t\t\t\t<li role=\"presentation\"><a href=\"#noticia\" aria-controls=\"noticia\" role=\"tab\" data-toggle=\"tab\">Dados da Notícia</a></li>
\t\t\t</ul>

\t\t\t<!-- Tab panes -->
\t\t\t<div class=\"tab-content\">

\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"post\">
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"post-titulo\" maxlength=\"100\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-titulo", array(), "array")) : ($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Destaque</label>
\t\t\t\t\t\t\t\t<select name=\"post-destaque\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        if (array_key_exists("dados", $context)) {
            // line 39
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-destaque", array(), "array") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 40
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-destaque", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getDestaque", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 43
            echo ((($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getDestaque", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t\t\t\t<select name=\"post-ativo\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 52
        if (array_key_exists("dados", $context)) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-ativo", array(), "array") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 54
            echo ((($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-ativo", array(), "array") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getAtivo", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 57
            echo ((($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getAtivo", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"noticia\">
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getFoto", array(), "method")), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
        echo "\" >
\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Foto Destaque</label>
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"noticia-foto\" id=\"exampleInputFile\">
\t    \t\t\t\t\t\t<p class=\"help-block\">Imagem .jpg ou .png</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Texto</label>
\t\t\t\t\t\t\t\t<!-- tinyMCE mapeia o class editor-texto para gerar o editor e atribui um input hidden com name igual ao id do div (noticia-texto) -->
\t\t\t\t\t\t\t\t<div id=\"noticia-texto\" class=\"editor-texto\" data-input=\"#input-noticia-texto\">";
        // line 87
        echo ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "noticia-texto", array(), "array")) : ($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getTexto", array(), "method")));
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<button type=\"submit\" class=\"btn btn-primary\">Alterar</button>
\t\t<a href=\"/admin/painel/noticia\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 101
        if (array_key_exists("erro", $context)) {
            // line 102
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 103
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 105
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/noticia/alterar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 105,  188 => 103,  185 => 102,  183 => 101,  166 => 87,  142 => 70,  129 => 59,  124 => 57,  119 => 56,  114 => 54,  109 => 53,  107 => 52,  98 => 45,  93 => 43,  88 => 42,  83 => 40,  78 => 39,  76 => 38,  66 => 31,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
