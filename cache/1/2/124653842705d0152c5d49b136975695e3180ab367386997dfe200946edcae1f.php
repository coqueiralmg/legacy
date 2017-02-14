<?php

/* ./admin/layout.html */
class __TwigTemplate_124653842705d0152c5d49b136975695e3180ab367386997dfe200946edcae1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "Painel Prefeitura Municipal de Coqueiral MG</title>

\t<!-- [css] bootstrap -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/vendor/twitter/bootstrap/dist/css/bootstrap.min.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/vendor/twitter/bootstrap/dist/css/bootstrap-theme.min.css\" />
\t<!-- [css] personalizado -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/style-admin.css\" />

</head>
<body>

\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t  <div class=\"container\">
\t    <!-- Brand and toggle get grouped for better mobile display -->
\t    <div class=\"navbar-header\">
\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t        <span class=\"sr-only\">Toggle navigation</span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t        <span class=\"icon-bar\"></span>
\t      </button>
\t      <a class=\"navbar-brand\" href=\"/admin/painel\">Prefeitura de Coqueiral</a>
\t    </div>

\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t      <ul class=\"nav navbar-nav\">
\t        <!--<li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
\t        <li><a href=\"#\">Link</a></li>-->
\t        <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"glyphicon glyphicon-file\"></i> Novo <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\" role=\"menu\">

\t\t\t\t";
        // line 38
        if (((isset($context["usuarioNivel"]) ? $context["usuarioNivel"] : null) == 2)) {
            // line 39
            echo "\t\t\t\t\t<li><a href=\"/admin/painel/usuario/novo\">Usuário</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/secretaria/novo\">Secretaria</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/banner/novo\">Banner</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/licitacao/novo\">Licitação</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/legislacao/novo\">Legislação</a></li>
\t\t\t\t";
        }
        // line 45
        echo "
\t\t\t\t<li><a href=\"/admin/painel/video/novo\">Vídeo</a></li>
\t\t\t\t<li><a href=\"/admin/painel/noticia/novo\">Notícia</a></li>
\t\t\t\t<li><a href=\"/admin/painel/destaque/novo\">Destaque</a></li>

\t\t\t\t<!--<li class=\"dropdown-submenu\"><a tabindex=\"-1\" href=\"/admin/painel/secretaria\">Secretaria</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t                  <li><a tabindex=\"-1\" href=\"/admin/painel/secretaria/novo\">Novo</a></li>
\t                  <li><a tabindex=\"-1\" href=\"/admin/painel/secretaria\">Ver todos</a></li>
\t              \t</ul>
\t            </li>-->

\t          </ul>
\t        </li>

\t        <li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"glyphicon glyphicon-list\"></i> Ver <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\" role=\"menu\">

\t\t\t\t";
        // line 64
        if (((isset($context["usuarioNivel"]) ? $context["usuarioNivel"] : null) == 2)) {
            // line 65
            echo "\t\t\t\t\t<li><a href=\"/admin/painel/usuario\">Usuários</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/secretaria\">Secretarias</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/banner\">Banners</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/licitacao\">Licitações</a></li>
\t\t\t\t\t<li><a href=\"/admin/painel/legislacao\">Legislações</a></li>
\t\t\t\t";
        }
        // line 71
        echo "
\t\t\t\t<li><a href=\"/admin/painel/video\">Vídeos</a></li>
\t\t\t\t<li><a href=\"/admin/painel/noticia\">Notícias</a></li>
\t\t\t\t<li><a href=\"/admin/painel/destaque\">Destaques</a></li>

\t\t\t\t<!--<li class=\"dropdown-submenu\"><a tabindex=\"-1\" href=\"/admin/painel/secretaria\">Secretaria</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t                  <li><a tabindex=\"-1\" href=\"/admin/painel/secretaria/novo\">Novo</a></li>
\t                  <li><a tabindex=\"-1\" href=\"/admin/painel/secretaria\">Ver todos</a></li>
\t              \t</ul>
\t            </li>-->

\t          </ul>
\t        </li>

\t      </ul>
\t      <form class=\"navbar-form navbar-left\" role=\"search\">
\t        <div class=\"form-group\">
\t          <input type=\"text\" class=\"form-control\" placeholder=\"Pesquisar\">
\t        </div>
\t        <button type=\"submit\" class=\"btn btn-default\">Ok</button>
\t      </form>
\t      <ul class=\"nav navbar-nav navbar-right\">
\t      \t<li><a href=\"#\" id=\"clock-system\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/ajax-loader.gif\"> Aguarde...</a></li>
\t        <!--<li class=\"dropdown\">
\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
\t          <ul class=\"dropdown-menu\" role=\"menu\">
\t            <li><a href=\"#\">Action</a></li>
\t            <li><a href=\"#\">Another action</a></li>
\t            <li><a href=\"#\">Something else here</a></li>
\t            <li class=\"divider\"></li>
\t            <li><a href=\"#\">Separated link</a></li>
\t          </ul>
\t        </li>-->
\t     \t<li><a href=\"#\">";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["usuarioNome"]) ? $context["usuarioNome"] : null), "html", null, true);
        echo "</a></li>
\t        <li><a href=\"/admin/painel/sair\" title=\"Sair do sistema\"><i class=\"glyphicon glyphicon-off\"></i></a></li>
\t      </ul>
\t    </div><!-- /.navbar-collapse -->
\t  </div><!-- /.container-fluid -->
\t</nav>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t";
        // line 115
        $this->displayBlock('content', $context, $blocks);
        // line 116
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<p class=\"text-muted\">";
        // line 122
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Prefeitura Municipal de Coqueiral MG</p>
\t\t</div>
    </footer>

\t<!-- [js] jquery e bootstrap -->
\t<script type=\"text/javascript\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/jquery/jquery-2.1.4.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/vendor/twitter/bootstrap/dist/js/bootstrap.min.js\"></script>

\t<!-- [js] plugins -->
\t<script type=\"text/javascript\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/tinymce/tinymce.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/admin/tinyMCE.init.js\"></script>

\t<!-- [js] geral -->
\t<script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/config.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/admin/configAdmin.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/admin/clock.js\"></script>

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 115
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "./admin/layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 115,  223 => 5,  215 => 138,  211 => 137,  207 => 136,  201 => 133,  197 => 132,  193 => 131,  187 => 128,  183 => 127,  175 => 122,  167 => 116,  165 => 115,  152 => 105,  138 => 94,  113 => 71,  105 => 65,  103 => 64,  82 => 45,  74 => 39,  72 => 38,  42 => 11,  37 => 9,  33 => 8,  27 => 5,  21 => 1,);
    }
}
