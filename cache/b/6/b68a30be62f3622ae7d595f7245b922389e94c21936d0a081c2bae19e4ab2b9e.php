<?php

/* admin/video/novo.html */
class __TwigTemplate_b68a30be62f3622ae7d595f7245b922389e94c21936d0a081c2bae19e4ab2b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/video/novo.html", 1);
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
\t<h1>Novo Vídeo</h1>


\t<form method=\"post\" action=\"/admin/painel/video/novo\">

\t<div role=\"tabpanel\">
\t\t<!-- Nav tabs -->
\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#post\" aria-controls=\"post\" role=\"tab\" data-toggle=\"tab\">Dados do Post</a></li>
\t\t\t<li role=\"presentation\"><a href=\"#video\" aria-controls=\"video\" role=\"tab\" data-toggle=\"tab\">Dados do Vídeo</a></li>
\t\t</ul>

\t\t<!-- Tab panes -->
\t\t<div class=\"tab-content\">

\t\t\t<div role=\"tabpanel\" class=\"tab-pane active\" id=\"post\">
\t\t\t\t
\t\t\t\t<br />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Título</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"post-titulo\" maxlength=\"100\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-titulo", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira o título\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Data Postagem</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"post-data-postagem\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-data-postagem", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control date-hour\" id=\"exampleInputEmail1\" placeholder=\"Insira a data, deixar em branco para preencher automaticamente\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Destaque</label>
\t\t\t\t\t\t\t<select name=\"post-destaque\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 40
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-destaque", array(), "array") == 0))) ? ("selected") : (""));
        echo ">Não</option>
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 41
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-destaque", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Sim</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Ativo</label>
\t\t\t\t\t\t\t<select name=\"post-ativo\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 49
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-ativo", array(), "array") == 0))) ? ("selected") : (""));
        echo ">Não</option>
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 50
        echo (((array_key_exists("dados", $context) && ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-ativo", array(), "array") == 1))) ? ("selected") : (""));
        echo ">Sim</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"video\">
\t\t\t\t
\t\t\t\t<br />
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Vídeo (Url)</label>
\t\t\t\t\t\t\t<input type=\"text\" name=\"video-video\" maxlength=\"100\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "video-video", array(), "array")) : ("")), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira a url do vídeo\">
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>


\t\t<button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
\t\t<a href=\"/admin/painel/video\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 78
        if (array_key_exists("erro", $context)) {
            // line 79
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 80
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 82
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/video/novo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 82,  133 => 80,  130 => 79,  128 => 78,  111 => 64,  94 => 50,  90 => 49,  79 => 41,  75 => 40,  65 => 33,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }
}
