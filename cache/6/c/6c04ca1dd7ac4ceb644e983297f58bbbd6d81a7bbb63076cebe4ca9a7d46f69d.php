<?php

/* login.html */
class __TwigTemplate_6c04ca1dd7ac4ceb644e983297f58bbbd6d81a7bbb63076cebe4ca9a7d46f69d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Login | Prefeitura Municipal de Coqueiral MG</title>

\t<!-- [css] bootstrap -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/vendor/twitter/bootstrap/dist/css/bootstrap.min.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/vendor/twitter/bootstrap/dist/css/bootstrap-theme.min.css\" />
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/css/login.css\" />
</head>
<body>
\t
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">\t\t
\t\t\t\t
\t\t\t\t<form class=\"form-signin\" role=\"form\" action=\"/admin/logar\" method=\"post\">
\t\t            <h2 class=\"form-signin-heading\">Painel de Controle</h2>
\t\t            <h4 class=\"form-signin-heading\">Prefeitura de Coqueiral MG</h4>
\t\t            <input type=\"text\" name=\"login\" class=\"form-control\" id=\"login\" placeholder=\"Login ou email\" required autofocus />
\t\t            <input type=\"password\" name=\"senha\" class=\"form-control\" id=\"senha\" placeholder=\"Senha\" required />
\t\t            <!--<label class=\"checkbox\">
\t\t                <input type=\"checkbox\" name=\"lembrar\" value=\"1\"> Lembrar-me
\t\t            </label>-->
\t\t            <button id=\"btn-entrar\" class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
\t\t            <div id=\"mensagem\"></div>
\t\t        </form>

\t\t    </div>
\t\t</div>
\t</div>

\t<!-- [js] jquery e boostrap -->
\t<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/jquery/jquery-2.1.4.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/vendor/twitter/bootstrap/dist/js/bootstrap.min.js\"></script>

\t<!-- [js] geral -->
\t<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/config.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/login.js\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 40,  74 => 39,  68 => 36,  64 => 35,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
