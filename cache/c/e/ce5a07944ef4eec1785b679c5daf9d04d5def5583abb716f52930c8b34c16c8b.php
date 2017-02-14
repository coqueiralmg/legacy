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
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "Prefeitura Municipal de Coqueiral MG</title>

    <link rel=\"shortcut icon\" type=\"image/ico\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/favicon.png\" />

    <!-- [css] optionals css -->
    ";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 15
        echo "
    <!-- [css] grid bootstrap, camera slider e personalizacao -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/bootstrap/bootstrap.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/bootstrap/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/css/camera.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/SlickNav/dist/slicknav.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/style.css\">

    <div id=\"fb-root\"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</head>

<body>

    <!-- navbar -->
    <header id=\"top\">
        <div class=\"container visible-sm-block visible-md-block visible-lg-block\" id=\"faixa-branca\">
            <div class=\"container\">
                <a href=\"/\" class=\"pull-left first\" style=\"color: #009900\">WWW.COQUEIRAL.MG.GOV.BR</a>
                <span class=\"pull-right\">ADMINISTRAÇÃO 2017 | 2020</span>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row visible-sm-block visible-md-block visible-lg-block\">
                <div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-right\">
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/prefeituradecoqueiral\" data-width=\"390\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"false\">
                        <blockquote cite=\"https://www.facebook.com/prefeituradecoqueiral\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/prefeituradecoqueiral\">Prefeitura Municipal de Coqueiral</a></blockquote>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"clearfix  visible-xs-block\" style=\"margin-bottom: 60px !important;\"></div>
                <div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3\">
                    <div id=\"logo\" class=\"text-center\">
                        <a href=\"/\">
                            <div class=\"visible-xs-block\">
                                <img style=\"margin: 0 auto;\" class=\"img-responsive\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\">
                            </div>
                            <div class=\"visible-sm-block visible-md-block visible-lg-block\">
                                <img class=\"img-responsive\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\">
                            </div>
                        </a>
                    </div>
                </div>
                <!--
\t\t\t\t<div class=\"col-xs-12 col-sm-9 col-md-9 col-lg-9\" id=\"faixa\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<h1>Prefeitura Municipal de <span>COQUEIRAL MG</span></h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<img class=\"img-responsive visible-sm-block visible-md-block visible-lg-block\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/faixa.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\"></a>
\t\t\t\t</div>
\t\t\t\t-->
                <!--<div class=\"col-xs-12 col-sm-5 col-md-4 col-ls-4\">
\t\t\t\t\t<div id=\"logo\"><a href=\"/\"><img class=\"img-responsive\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\"></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-7 col-md-8 col-ls-8 visible-sm visible-md visible-lg\">
\t\t\t\t\t<div id=\"texto\"><h1 class=\"pull-left\">DIA A DIA POR VOCÊ</h1><img class=\"pull-right\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/arrow-top.png\" alt=\"Seta - Prefeitura Municipal de Coqueiral MG\"></div>
\t\t\t\t</div>-->
            </div>
        </div>
        <nav id=\"menu\" class=\"navbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-ls-12\">
                        <ul>
                            <li><a href=\"/secretarias\">A PREFEITURA</a></li>
                            <li><a href=\"#\">SALA DE IMPRENSA</a>
                                <ul>
                                    <li><a href=\"/jornal\">JORNAL</a></li>
                                    <li><a href=\"/noticias\">NOTÍCIAS</a></li>
                                    <li><a href=\"/videos\">VÍDEOS</a></li>
                                </ul>
                            </li>
                            <li>
                                <form action=\"/busca\" method=\"post\">
                                    <input type=\"text\" required minlength=\"3\" name=\"busca\" placeholder=\"Pesquise aqui\" />
                                    <button type=\"submit\" name=\"buscar\"></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav id=\"sub-menu\" class=\"navbar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-ls-12\">
                        <ul>
                            <li><a href=\"/\">Página Inicial</a></li>
                            <li><a href=\"http://www.transparencia.mg.gov.br/municipios/coqueiral\" target=\"_blank\">Transparência</a></li>
                            <li><a href=\"/legislacao\">Legislação</a></li>
                            <li><a href=\"/publicacoes\">Publicações</a></li>
                            <li><a href=\"/fale-conosco\">Fale com a Prefeitura</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <ul class=\"slick-nav\">
            <li><a href=\"/prefeitura\">A PREFEITURA</a></li>
            <li><a href=\"/secretarias\">SECRETARIAS</a></li>
            <li><a href=\"/noticias\">NOTÍCIAS</a></li>
            <li><a href=\"/sala-de-imprensa\">SALA DE IMPRENSA</a></li>
            <li>
                <form action=\"/busca\" method=\"post\">
                    <input type=\"text\" required minlength=\"3\" name=\"busca\" placeholder=\"Pesquise aqui\" />
                    <button type=\"submit\" name=\"buscar\"></button>
                </form>
            </li>
            <li><a href=\"/\">Página Inicial</a></li>
            <li><a href=\"/transparencia\">Transparência</a></li>
            <li><a href=\"/legislacao\">Legislação</a></li>
            <li><a href=\"/publicacoes\">Publicações</a></li>
            <li><a href=\"/fale-conosco\">Fale com a Prefeitura</a></li>
        </ul>
    </header>

    <!-- content -->
    <div id=\"container\" class=\"container\">
        ";
        // line 147
        $this->displayBlock('content', $context, $blocks);
        // line 148
        echo "    </div>

    <!-- footer -->
    <footer class=\"footer\">

        <!--<section id=\"secretarias\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div id=\"fale-com-secretaria\" class=\"col-xs-12 col-sm-4 col-md-4 col-lg-4\">
\t\t\t\t\t\t<div><img src=\"";
        // line 158
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
        // line 167
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 168
            echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 169
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                // line 170
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
            // line 172
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        } else {
            // line 174
            echo "\t\t\t\t\t\t\t<h3 class=\"color-white\">Nenhuma secretaria disponível no momento!</h3>
\t\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</section>-->

        <section id=\"bottom\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"logo\" class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
                        <a id=\"logo-footer\" href=\"/\"><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo-footer.png\" alt=\"Prefeitura Municipal de Coqueiral MG\" title=\"Prefeitura Municipal de Coqueiral MG\" /></a>
                    </div>

                    <div id=\"secretarias\" class=\"col-xs-4 col-sm-4 col-md-3 col-lg-3 visible-sm visible-md visible-lg\">
                        <h2>SECRETARIAS</h2>

                        <ul>
                            ";
        // line 193
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 194
            echo "                            <ul>
                                ";
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                // line 196
                echo "                                <li><a href=\"/fale-com-secretaria/";
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["secretaria"], "getNome", array(), "method"))) . " / ") . $this->getAttribute($context["secretaria"], "getId", array(), "method")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                echo "</a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secretaria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                            </ul>
                            ";
        } else {
            // line 200
            echo "                            <p class=\"color-white\">Nenhuma secretaria disponível!</p>
                            ";
        }
        // line 202
        echo "                        </ul>

                    </div>

                    <div id=\"developer\" class=\"col-xs-6 col-sm-2 col-md-2 col-lg-2 col-md-offset-4 col-lg-offset-4 visible-sm visible-md visible-lg\">
                        <p>Desenvolvido por</p>
                        <a href=\"http://www.flymedia.com.br\" target=\"_blank\"><img src=\"";
        // line 208
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/logo-flymedia.png\" alt=\"FlyMedia\"></a>
                    </div>

                </div>

            </div>
        </section>

    </footer>

    <!-- [js] jquery e camera slider -->
    <script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/jquery/jquery-1.7.1.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/jquery.mobile.customized.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/jquery.easing.1.3.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/camera/js/camera.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/camera-config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 224
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/SlickNav/dist/jquery.slicknav.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/slick-nav-config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 226
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/config.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/email.js\"></script>

    <!-- [js] optionals js's -->
    ";
        // line 230
        $this->displayBlock('js', $context, $blocks);
        // line 231
        echo "
</body>

</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 14
    public function block_css($context, array $blocks = array())
    {
    }

    // line 147
    public function block_content($context, array $blocks = array())
    {
    }

    // line 230
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
        return array (  407 => 230,  402 => 147,  397 => 14,  391 => 9,  384 => 231,  382 => 230,  376 => 227,  372 => 226,  368 => 225,  364 => 224,  360 => 223,  356 => 222,  352 => 221,  348 => 220,  344 => 219,  330 => 208,  322 => 202,  318 => 200,  314 => 198,  303 => 196,  299 => 195,  296 => 194,  294 => 193,  284 => 186,  272 => 176,  268 => 174,  264 => 172,  245 => 170,  241 => 169,  238 => 168,  236 => 167,  224 => 158,  212 => 148,  210 => 147,  143 => 83,  137 => 80,  130 => 76,  115 => 64,  109 => 61,  66 => 21,  62 => 20,  58 => 19,  54 => 18,  50 => 17,  46 => 15,  44 => 14,  38 => 11,  33 => 9,  23 => 1,);
    }
}
