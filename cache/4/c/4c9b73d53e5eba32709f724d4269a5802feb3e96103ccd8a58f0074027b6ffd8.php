<?php

/* jornal.html */
class __TwigTemplate_4c9b73d53e5eba32709f724d4269a5802feb3e96103ccd8a58f0074027b6ffd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "jornal.html", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
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
    public function block_js($context, array $blocks = array())
    {
        // line 4
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/jornal.js\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
\t<div id=\"jornal\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>JORNAL NOSSO MUNICÍPIO</h1>
\t\t\t<hr />
\t\t\t
\t\t\t<div class=\"fb-page\" data-href=\"https://www.facebook.com/prefeituradecoqueiral\" data-tabs=\"timeline\" data-height=\"800\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"false\" data-show-facepile=\"true\"><blockquote cite=\"https://www.facebook.com/prefeituradecoqueiral\" class=\"fb-xfbml-parse-ignore\"><a href=\"https://www.facebook.com/prefeituradecoqueiral\">Prefeitura Municipal de Coqueiral</a></blockquote></div>

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "jornal.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
