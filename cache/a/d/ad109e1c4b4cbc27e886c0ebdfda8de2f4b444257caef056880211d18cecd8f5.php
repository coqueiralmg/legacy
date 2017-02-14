<?php

/* video.html */
class __TwigTemplate_ad109e1c4b4cbc27e886c0ebdfda8de2f4b444257caef056880211d18cecd8f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "video.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
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
\t<div id=\"video\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t";
        // line 8
        if (((isset($context["video"]) ? $context["video"] : null) != null)) {
            // line 9
            echo "
\t\t\t\t<h1>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
            echo "</h1>
\t\t\t\t<p>Autor: ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getAutor", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method") . " | Postado: ") . twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getDataPostagem", array(), "method"), "d/m/Y H:i")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getDataAlteracao", array(), "method") != null)) ? ((" | Atualizado: " . twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getPost", array(), "method"), "getDataAlteracao", array(), "method"), "d/m/Y H:i"))) : ("")), "html", null, true);
            echo "</p>
\t\t\t\t<div class=\"fb-like\" data-href=\"";
            // line 12
            echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/noticia/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method")))) . "/") . $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getId", array(), "method")), "html", null, true);
            echo "\" data-layout=\"standard\" data-action=\"like\" data-show-faces=\"true\" data-share=\"true\"></div>
\t\t\t\t<hr />

\t\t\t\t<div class=\"row\" id=\"video\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-9 col-lg-9\">
\t\t\t\t\t\t<div class=\"video-container\">
\t\t\t\t\t\t\t<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('videoEmbedYoutube')->getCallable(), array($this->getAttribute((isset($context["video"]) ? $context["video"] : null), "getVideo", array(), "method"))), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<h3>Mais vídeos:</h3>
\t\t\t\t<hr />

\t\t\t\t<div class=\"row\" id=\"videos\">
\t\t\t\t\t";
            // line 27
            if ((twig_length_filter($this->env, (isset($context["videos"]) ? $context["videos"] : null)) > 0)) {
                // line 28
                echo "\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["videoB"]) {
                    // line 29
                    echo "\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2\">
\t\t\t\t\t\t\t<a href=\"/video/";
                    // line 30
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute($context["videoB"], "getPost", array(), "method"), "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["videoB"], "getId", array(), "method")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["videoB"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<img class=\"img\" src=\"http://img.youtube.com/vi/";
                    // line 31
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('videoEmbedYoutube')->getCallable(), array($this->getAttribute($context["videoB"], "getVideo", array(), "method"))), "html", null, true);
                    echo "/0.jpg\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["videoB"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["videoB"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<h3>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["videoB"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                    echo "</h3>
\t\t\t\t\t\t\t\t<p>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["videoB"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"), "html", null, true);
                    echo " visualizações | ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["videoB"], "getPost", array(), "method"), "getDataPostagem", array(), "method"), "d/m/Y"), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videoB'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<p>Sem sugestões de vídeos no momento!</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t</div>

\t\t\t\t<br />
\t\t\t\t<div class=\"fb-comments\" data-href=\"";
            // line 45
            echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/noticia/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method")))) . "/") . $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getId", array(), "method")), "html", null, true);
            echo "\" data-width=\"100%\" data-numposts=\"5\" data-colorscheme=\"light\"></div>

\t\t\t";
        } else {
            // line 48
            echo "\t\t\t\t<p>Vídeo não encontrado!</p>
\t\t\t";
        }
        // line 50
        echo "
\t\t\t

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "video.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 50,  133 => 48,  127 => 45,  122 => 42,  116 => 38,  113 => 37,  101 => 33,  97 => 32,  89 => 31,  83 => 30,  80 => 29,  75 => 28,  73 => 27,  61 => 18,  52 => 12,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
