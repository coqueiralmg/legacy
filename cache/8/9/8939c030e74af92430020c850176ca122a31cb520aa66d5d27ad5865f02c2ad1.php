<?php

/* jornal.html */
class __TwigTemplate_8939c030e74af92430020c850176ca122a31cb520aa66d5d27ad5865f02c2ad1 extends Twig_Template
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
\t\t\t<div id=\"jornal\" class=\"fb-page\" data-href=\"http://www.facebook.com/inforrmativoprefeituracoqueiral\" data-width=\"500px\" data-small-header=\"true\" data-adapt-container-width=\"true\" data-hide-cover=\"true\" data-show-facepile=\"false\" data-show-posts=\"true\"><div class=\"fb-xfbml-parse-ignore\"><blockquote cite=\"http://www.facebook.com/inforrmativoprefeituracoqueiral\"><a href=\"http://www.facebook.com/inforrmativoprefeituracoqueiral\">Informativo Prefeitura Municipal De Coqueiral</a></blockquote></div></div>

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
