<?php

/* home.html */
class __TwigTemplate_48625666ae8cb37e727f86bc53a038cbdb668cdf7dae860f6704da166e588a7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "home.html", 1);
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
\t<div id=\"home\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">


\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div class=\"visible-xs-block\"><br /></div>
\t\t\t\t\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/prefeituradecoqueiral\" data-tabs=\"timeline\" data-height=\"800\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/prefeituradecoqueiral\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/prefeituradecoqueiral\">Prefeitura Municipal de Coqueiral</a></blockquote></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>


\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">

\t\t\t\t<div id=\"banner\" class=\"row row-banner\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div class=\"visible-xs-block\"><br /></div>
\t\t\t\t\t\t<div class=\"camera_wrap\" id=\"camera-wrap\">
\t\t\t\t\t\t    ";
        // line 27
        if ((twig_length_filter($this->env, (isset($context["banners"]) ? $context["banners"] : null)) > 0)) {
            // line 28
            echo "\t\t\t\t\t\t     \t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 29
                echo "\t\t\t\t\t\t     \t\t<div data-src=\"";
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute($context["banner"], "getBanner", array(), "method")), "html", null, true);
                echo "\">
\t\t\t\t\t\t     \t\t\t<div class=\"camera_caption fadeIn\">";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "getTitulo", array(), "method"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t     \t\t</div>
\t\t\t\t\t\t     \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t\t     ";
        } else {
            // line 34
            echo "\t\t\t\t\t\t     \t<div data-src=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
            echo "/public/img/banner-demo.jpg\">
\t\t\t\t\t\t     \t\t<div class=\"camera_caption fadeFromBottom\">
\t\t\t\t\t                    Você faz a <em>Câmara...</em>
\t\t\t\t\t                </div>
\t\t\t\t\t\t     \t</div>
\t\t\t\t\t\t     \t<div data-src=\"";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
            echo "/public/img/banner-demo.jpg\">
\t\t\t\t\t\t     \t\t<div class=\"camera_caption fadeFromBottom\">
\t\t\t\t\t                    Você faz a <em>Câmara...</em>
\t\t\t\t\t                </div>
\t\t\t\t\t\t     \t</div>
\t\t\t\t\t\t     ";
        }
        // line 45
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"destaques\" class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!--<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"head visible-sm visible-md visible-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"arrow-left\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"center center-middle-3\">
\t\t\t\t\t\t\t\t\t\t<h1>DESTAQUE</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"arrow-right\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"head-xs seta-direita visible-xs\">
\t\t\t\t\t\t\t\t\t<h1>DESTAQUE</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>-->

\t\t\t\t\t\t\t<div id=\"frame\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t\t\t\t\t\t<div id=\"thumbs\" class=\"row\">

\t\t\t\t\t\t\t\t\t";
        // line 71
        if ((twig_length_filter($this->env, (isset($context["destaques"]) ? $context["destaques"] : null)) > 0)) {
            echo "\t
\t\t\t\t\t\t\t\t\t\t";
            // line 72
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["destaques"]) ? $context["destaques"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["destaque"]) {
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div id=\"thumb-destaque\" class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaque"], "getLink", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div><img src=\"";
                // line 76
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute($context["destaque"], "getFoto", array(), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaque"], "getTitulo", array(), "method"), "html", null, true);
                echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4>";
                // line 77
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($context["destaque"], "getTitulo", array(), "method"), 18, true)), "html", null, true);
                echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destaque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t\t<p>Nenhum destaque no momento!</p>
\t\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"clima\" class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!--<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"head visible-sm visible-md visible-lg\">
\t\t\t\t\t\t\t\t\t<div class=\"arrow-left\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"center center-middle-2\">
\t\t\t\t\t\t\t\t\t\t<h1>CLIMA TEMPO</h1>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"arrow-right\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"head-xs seta-direita visible-xs\">
\t\t\t\t\t\t\t\t\t<h1>CLIMA TEMPO</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>-->

\t\t\t\t\t\t\t<div id=\"frame\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t\t\t\t\t\t\t\t<div id=\"left\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"top\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-top\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<iframe class=\"center-block\" src=\"http://selos.climatempo.com.br/selos/MostraSelo.php?CODCIDADE=3680&SKIN=azul\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\" frameborder=\"0\" height=\"170\" width=\"150\"></iframe>
\t\t\t\t\t\t\t\t\t\t<div id=\"right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"top\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sub-top\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div id=\"noticias\" class=\"row\">
\t\t\t\t\t
\t\t\t\t\t<!--<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div class=\"head visible-sm visible-md visible-lg\">
\t\t\t\t\t\t\t<div class=\"arrow-left\"></div>
\t\t\t\t\t\t\t<div class=\"center center-middle\">
\t\t\t\t\t\t\t\t<h1>NOTÍCIAS</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"arrow-right\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"head-xs seta-direita visible-xs\">
\t\t\t\t\t\t\t<h1>NOTÍCIAS</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>-->

\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t<div class=\"noticia-container\">
\t\t\t\t\t\t\t";
        // line 154
        if (((isset($context["noticia"]) ? $context["noticia"] : null) != null)) {
            // line 155
            echo "\t\t\t\t\t\t\t\t<div class=\"noticia\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 156
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . strtr($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getFoto", array(), "method"), array("large" => "small"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<h2>";
            // line 157
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method")), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t\t\t";
            // line 158
            echo call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getTexto", array(), "method"), 650, true, true));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"pull-right\" href=\"/noticia/";
            // line 160
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getPost", array(), "method"), "getTitulo", array(), "method"))) . "/") . $this->getAttribute((isset($context["noticia"]) ? $context["noticia"] : null), "getId", array(), "method")), "html", null, true);
            echo "\">Leia mais</a>
\t\t\t\t\t\t\t";
        } else {
            // line 162
            echo "\t\t\t\t\t\t\t\t<p>Nenhuma notícia disponível no momento!</p>
\t\t\t\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 164,  264 => 162,  259 => 160,  254 => 158,  250 => 157,  242 => 156,  239 => 155,  237 => 154,  166 => 85,  162 => 83,  159 => 82,  148 => 77,  142 => 76,  138 => 75,  130 => 72,  126 => 71,  98 => 45,  89 => 39,  80 => 34,  77 => 33,  68 => 30,  63 => 29,  58 => 28,  56 => 27,  31 => 4,  28 => 3,  11 => 1,);
    }
}
