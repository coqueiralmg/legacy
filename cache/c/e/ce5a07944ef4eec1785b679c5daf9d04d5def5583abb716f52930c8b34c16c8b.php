<?php

/* layout.html */
class __TwigTemplate_ce5a07944ef4eec1785b679c5daf9d04d5def5583abb716f52930c8b34c16c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "Prefeitura Municipal de Coqueiral MG</title>

    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/favicon.png\" />

\t<!-- [css] optionals css -->
\t";
        // line 13
        $this->displayBlock('css', $context, $blocks);
        // line 14
        echo "
\t<!-- [css] grid bootstrap, camera slider e personalizacao -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/bootstrap/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/bootstrap/bootstrap-theme.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/css/camera.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/SlickNav/dist/slicknav.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/style.css\">

\t<div id=\"fb-root\"></div>
\t<script>(function(d, s, id) {
\t  var js, fjs = d.getElementsByTagName(s)[0];
\t  if (d.getElementById(id)) return;
\t  js = d.createElement(s); js.id = id;
\t  js.src = \"//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3\";
\t  fjs.parentNode.insertBefore(js, fjs);
\t}(document, 'script', 'facebook-jssdk'));</script>

</head>
<body>

\t<!-- navbar -->
\t<header id=\"top\">
\t\t<div class=\"container visible-sm-block visible-md-block visible-lg-block\" id=\"faixa-branca\">
\t\t\t<div class=\"container\">
\t\t\t\t<a href=\"/\" class=\"pull-left first\" style=\"color: #009900\">WWW.COQUEIRAL.MG.GOV.BR</a>
\t\t\t\t<span class=\"pull-right\">ADMINISTRAÇÃO 2017 | 2020</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row visible-sm-block visible-md-block visible-lg-block\">
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/prefeituradecoqueiral\" data-width=\"390\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\"><blockquote cite=\"https://www.facebook.com/prefeituradecoqueiral\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/prefeituradecoqueiral\">Prefeitura Municipal de Coqueiral</a></blockquote></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"clearfix  visible-xs-block\" style=\"margin-bottom: 60px !important;\"></div>
\t\t\t\t<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3\">
\t\t\t\t\t<div id=\"logo\" class=\"text-center\">
\t\t\t\t\t\t<a href=\"/\">
\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t<img style=\"margin: 0 auto;\" class=\"img-responsive\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"visible-sm-block visible-md-block visible-lg-block\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--
\t\t\t\t<div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-9\" id=\"faixa\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<h1>Prefeitura Municipal de <span>COQUEIRAL MG</span></h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<img class=\"img-responsive visible-sm-block visible-md-block visible-lg-block\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/faixa.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\"></a>
\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t<!--<div class=\"col-xs-12 col-sm-5 col-md-4 col-ls-4\">
\t\t\t\t\t<div id=\"logo\"><a href=\"/\"><img class=\"img-responsive\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\"></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-7 col-md-8 col-ls-8 visible-sm visible-md visible-lg\">
\t\t\t\t\t<div id=\"texto\"><h1 class=\"pull-left\">DIA A DIA POR VOCÊ</h1><img class=\"pull-right\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/arrow-top.png\" alt=\"Seta - Prefeitura Municipal de Coqueiral MG\"></div>
\t\t\t\t</div>-->
\t\t\t</div>
\t\t</div>
\t\t<nav id=\"menu\" class=\"navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-ls-12\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"/secretarias\">A PREFEITURA</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">SALA DE IMPRENSA</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"/jornal\">JORNAL</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"/noticias\">NOTÍCIAS</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"/videos\">VÍDEOS</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form action=\"/busca\" method=\"post\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" required minlength=\"3\" name=\"busca\" placeholder=\"Pesquise aqui\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"buscar\"></button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<nav id=\"sub-menu\" class=\"navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-ls-12\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"/\">Página Inicial</a></li>
\t\t\t\t\t\t\t<li><a href=\"http://www.transparencia.mg.gov.br/municipios/coqueiral\" target=\"_blank\">Transparência</a></li>
\t\t\t\t\t\t\t<li><a href=\"/legislacao\">Legislação</a></li>
\t\t\t\t\t\t\t<li><a href=\"/licitacoes\">Publicações</a></li>
\t\t\t\t\t\t\t<li><a href=\"/fale-conosco\">Fale com a Prefeitura</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<ul class=\"slick-nav\">
\t\t\t<li><a href=\"/prefeitura\">A PREFEITURA</a></li>
\t\t\t<li><a href=\"/secretarias\">SECRETARIAS</a></li>
\t\t\t<li><a href=\"/noticias\">NOTÍCIAS</a></li>
\t\t\t<li><a href=\"/sala-de-imprensa\">SALA DE IMPRENSA</a></li>
\t\t\t<li>
\t\t\t\t<form action=\"/busca\" method=\"post\">
\t\t\t\t\t<input type=\"text\" required minlength=\"3\" name=\"busca\" placeholder=\"Pesquise aqui\" />
\t\t\t\t\t<button type=\"submit\" name=\"buscar\"></button>
\t\t\t\t</form>
\t\t\t</li>
\t\t\t<li><a href=\"/\">Página Inicial</a></li>
\t\t\t<li><a href=\"/transparencia\">Transparência</a></li>
\t\t\t<li><a href=\"/legislacao\">Legislação</a></li>
\t\t\t<li><a href=\"/licitacoes\">Publicações</a></li>
\t\t\t<li><a href=\"/fale-conosco\">Fale com a Prefeitura</a></li>
\t\t</ul>
    </header>

\t<!-- content -->
\t<div id=\"container\" class=\"container\">
\t\t";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        // line 141
        echo "\t</div>

\t<!-- footer -->
\t<footer class=\"footer\">

\t\t<!--<section id=\"secretarias\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"fale-com-secretaria\" class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/arrow-light-blue.png\"><span>FALE COM AS SECRETARIAS</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"fale-com-secretaria\" class=\"col-xs-12 col-sm-8 col-md-8 col-lg-8 visible-sm visible-md visible-lg\">
\t\t\t\t\t\t<h2>Sugestões, reclamações, reivindicações, opiniões, dúvidas e solicitações.</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"lista-secretarias\" class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t";
        // line 160
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 161
            echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 162
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                // line 163
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"/fale-com-secretaria/";
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["secretaria"], "getNome", array(), "method"))) . "/") . $this->getAttribute($context["secretaria"], "getId", array(), "method")), "html", null, true);
                echo "\"><span>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($context["secretaria"], "getNome", array(), "method"), 17)), "html", null, true);
                echo "</span><img src=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getFoto", array(), "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                echo "\"></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secretaria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        } else {
            // line 167
            echo "\t\t\t\t\t\t\t<h3 class=\"color-white\">Nenhuma secretaria disponível no momento!</h3>
\t\t\t\t\t\t";
        }
        // line 169
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>-->

\t\t<section id=\"bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"logo\" class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
\t\t\t\t\t\t<a id=\"logo-footer\" href=\"/\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo-footer.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\" /></a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"secretarias\" class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3 visible-sm visible-md visible-lg\">
\t\t\t\t\t\t<h2>SECRETARIAS</h2>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 186
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 187
            echo "\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
            // line 188
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                // line 189
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"/fale-com-secretaria/";
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["secretaria"], "getNome", array(), "method"))) . "/") . $this->getAttribute($context["secretaria"], "getId", array(), "method")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secretaria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        } else {
            // line 193
            echo "\t\t\t\t\t\t\t\t<p class=\"color-white\">Nenhuma secretaria disponível!</p>
\t\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"developer\" class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2 col-md-offset-4 col-lg-offset-4 visible-sm visible-md visible-lg\">
\t\t\t\t\t\t<p>Desenvolvido por</p>
\t\t\t\t\t\t<a href=\"http://www.flymedia.com.br\" target=\"_blank\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo-flymedia.png\" alt=\"FlyMedia\"></a>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

    </footer>

    <!-- [js] jquery e camera slider -->
    <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/jquery/jquery-1.7.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/jquery.mobile.customized.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/jquery.easing.1.3.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/camera.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/camera-config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/SlickNav/dist/jquery.slicknav.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/slick-nav-config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/email.js\"></script>

    <!-- [js] optionals js's -->
\t";
        // line 223
        $this->displayBlock('js', $context, $blocks);
        // line 224
        echo "\t
</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 13
    public function block_css($context, array $blocks = array())
    {
    }

    // line 140
    public function block_content($context, array $blocks = array())
    {
    }

    // line 223
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 223,  394 => 140,  389 => 13,  383 => 8,  377 => 224,  375 => 223,  369 => 220,  365 => 219,  361 => 218,  357 => 217,  353 => 216,  349 => 215,  345 => 214,  341 => 213,  337 => 212,  323 => 201,  315 => 195,  311 => 193,  307 => 191,  296 => 189,  292 => 188,  289 => 187,  287 => 186,  277 => 179,  265 => 169,  261 => 167,  257 => 165,  238 => 163,  234 => 162,  231 => 161,  229 => 160,  217 => 151,  205 => 141,  203 => 140,  136 => 76,  130 => 73,  123 => 69,  108 => 57,  102 => 54,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 14,  43 => 13,  37 => 10,  32 => 8,  23 => 1,);
    }
}
