<?php

/* admin/video/alterar.html */
class __TwigTemplate_31310c8eb911a5bb5166fc16522175f9ee15c8af58d4fe1a10c815c50f3afe6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/video/alterar.html", 1);
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
\t<h1>Alterar Vídeo</h1>


\t<form method=\"post\" action=\"/admin/painel/video/alterar\">

\t\t<input type=\"hidden\" name=\"_METHOD\" value=\"PUT\"/>
\t\t<input type=\"hidden\" name=\"post-id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\" />
\t  \t<input type=\"hidden\" name=\"video-id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getId", array(), "method"), "html", null, true);
        echo "\" />

\t\t<div role=\"tabpanel\">
\t\t\t<!-- Nav tabs -->
\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t<li role=\"presentation\" class=\"active\"><a href=\"#post\" aria-controls=\"post\" role=\"tab\" data-toggle=\"tab\">Dados do Post</a></li>
\t\t\t\t<li role=\"presentation\"><a href=\"#video\" aria-controls=\"video\" role=\"tab\" data-toggle=\"tab\">Dados do Vídeo</a></li>
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
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "post-titulo", array(), "array")) : ($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"))), "html", null, true);
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
            echo ((($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getDestaque", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 43
            echo ((($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getDestaque", array(), "method") == 1)) ? ("selected") : (""));
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
            echo ((($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getAtivo", array(), "method") == 0)) ? ("selected") : (""));
            echo ">Não</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 57
            echo ((($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getAtivo", array(), "method") == 1)) ? ("selected") : (""));
            echo ">Sim</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane\" id=\"video\">
\t\t\t\t\t
\t\t\t\t\t<br />
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"exampleInputEmail1\">Vídeo (Url)</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"video-video\" maxlength=\"100\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("dados", $context)) ? ($this->getAttribute((isset($context["dados"]) ? $context["dados"] : null), "video-video", array(), "array")) : ($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getVideo", array(), "method"))), "html", null, true);
        echo "\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Insira a url do vídeo\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<button type=\"submit\" class=\"btn btn-primary\">Alterar</button>
\t\t<a href=\"/admin/painel/video\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 86
        if (array_key_exists("erro", $context)) {
            // line 87
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 88
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 90
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/video/alterar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 90,  166 => 88,  163 => 87,  161 => 86,  144 => 72,  129 => 59,  124 => 57,  119 => 56,  114 => 54,  109 => 53,  107 => 52,  98 => 45,  93 => 43,  88 => 42,  83 => 40,  78 => 39,  76 => 38,  66 => 31,  44 => 12,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
