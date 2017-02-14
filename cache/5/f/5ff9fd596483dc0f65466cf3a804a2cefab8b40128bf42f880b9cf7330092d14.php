<?php

/* layout.html */
class __TwigTemplate_5ff9fd596483dc0f65466cf3a804a2cefab8b40128bf42f880b9cf7330092d14 extends Twig_Template
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
\t\t\t\t<a href=\"/\" class=\"pull-left first\">WWW.COQUEIRAL.MG.GOV.BR</a>
\t\t\t\t<span class=\"pull-right\">ADMINISTRAÇÃO 2013 | 2016</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row visible-sm-block visible-md-block visible-lg-block\">
\t\t\t\t<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
\t\t\t\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/inforrmativoprefeituracoqueiral\" data-small-header=\"true\" data-adapt-container-width=\"false\" data-hide-cover=\"true\" data-show-facepile=\"false\" data-show-posts=\"false\"><div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"https://www.facebook.com/inforrmativoprefeituracoqueiral\"><a href=\"https://www.facebook.com/inforrmativoprefeituracoqueiral\">Informativo Prefeitura Municipal De Coqueiral</a></blockquote></div></div>
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
\t\t\t\t<div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-9\" id=\"faixa\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<h1>Prefeitura Municipal de <span>COQUEIRAL MG</span></h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<img class=\"img-responsive visible-sm-block visible-md-block visible-lg-block\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/faixa.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\"></a>
\t\t\t\t</div>
\t\t\t\t<!--<div class=\"col-xs-12 col-sm-5 col-md-4 col-ls-4\">
\t\t\t\t\t<div id=\"logo\"><a href=\"/\"><img class=\"img-responsive\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\"></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-7 col-md-8 col-ls-8 visible-sm visible-md visible-lg\">
\t\t\t\t\t<div id=\"texto\"><h1 class=\"pull-left\">DIA A DIA POR VOCÊ</h1><img class=\"pull-right\" src=\"";
        // line 74
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
\t\t\t\t\t\t\t<li><a href=\"/licitacoes\">Licitações</a></li>
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
\t\t\t<li><a href=\"/licitacoes\">Licitações</a></li>
\t\t\t<li><a href=\"/fale-conosco\">Fale com a Prefeitura</a></li>
\t\t</ul>
    </header>

\t<!-- content -->
\t<div id=\"container\" class=\"container\">
\t\t";
        // line 138
        $this->displayBlock('content', $context, $blocks);
        // line 139
        echo "\t</div>

\t<!-- footer -->
\t<footer class=\"footer\">

\t\t<!--<section id=\"secretarias\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"fale-com-secretaria\" class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div><img src=\"";
        // line 149
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
        // line 158
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 159
            echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 160
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                // line 161
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
            // line 163
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        } else {
            // line 165
            echo "\t\t\t\t\t\t\t<h3 class=\"color-white\">Nenhuma secretaria disponível no momento!</h3>
\t\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>-->

\t\t<section id=\"bottom\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"logo\" class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
\t\t\t\t\t\t<a id=\"logo-footer\" href=\"/\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo-footer.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\" /></a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"secretarias\" class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3 visible-sm visible-md visible-lg\">
\t\t\t\t\t\t<h2>SECRETARIAS</h2>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
        // line 184
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 185
            echo "\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t";
            // line 186
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                // line 187
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
            // line 189
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t<p class=\"color-white\">Nenhuma secretaria disponível!</p>
\t\t\t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"developer\" class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2 col-md-offset-4 col-lg-offset-4 visible-sm visible-md visible-lg\">
\t\t\t\t\t\t<p>Desenvolvido por</p>
\t\t\t\t\t\t<a href=\"http://www.flymedia.com.br\" target=\"_blank\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo-flymedia.png\" alt=\"FlyMedia\"></a>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t</section>

    </footer>

    <!-- [js] jquery e camera slider -->
    <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/jquery/jquery-1.7.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/jquery.mobile.customized.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/jquery.easing.1.3.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/camera.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/camera-config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/SlickNav/dist/jquery.slicknav.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/slick-nav-config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/email.js\"></script>

    <!-- [js] optionals js's -->
\t";
        // line 221
        $this->displayBlock('js', $context, $blocks);
        // line 222
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

    // line 138
    public function block_content($context, array $blocks = array())
    {
    }

    // line 221
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
        return array (  397 => 221,  392 => 138,  387 => 13,  381 => 8,  375 => 222,  373 => 221,  367 => 218,  363 => 217,  359 => 216,  355 => 215,  351 => 214,  347 => 213,  343 => 212,  339 => 211,  335 => 210,  321 => 199,  313 => 193,  309 => 191,  305 => 189,  294 => 187,  290 => 186,  287 => 185,  285 => 184,  275 => 177,  263 => 167,  259 => 165,  255 => 163,  236 => 161,  232 => 160,  229 => 159,  227 => 158,  215 => 149,  203 => 139,  201 => 138,  134 => 74,  128 => 71,  122 => 68,  108 => 57,  102 => 54,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 14,  43 => 13,  37 => 10,  32 => 8,  23 => 1,);
    }
}
