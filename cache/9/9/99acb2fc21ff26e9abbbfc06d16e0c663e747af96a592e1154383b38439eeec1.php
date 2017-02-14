<?php

/* transparencia.html */
class __TwigTemplate_99acb2fc21ff26e9abbbfc06d16e0c663e747af96a592e1154383b38439eeec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "transparencia.html", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
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

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/source/jquery.fancybox.css\">
";
    }

    // line 7
    public function block_js($context, array $blocks = array())
    {
        // line 8
        echo "\t<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/source/jquery.fancybox.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/script/fancybox-config.js\"></script>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
\t<div id=\"transparencia\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>TRANSPARÊNCIA</h1>
\t\t\t<p>Veja aqui o funcionamento da prefeitura, endereço e fotos da sala de reuniões.</p>
\t\t\t<hr />

\t\t\t<p><strong>Telefone:</strong> (00) 0000-0000</p>
\t\t\t<p><strong>Endereço:</strong> Av. Dezenove de Junho, 2015 | Coqueiral - MG | CEP 00000-000</p>
\t\t\t<p class=\"line\"><strong>Horário de atendimento ao público:</strong> das 8h às 18h, de segunda a sexta.</p>
\t\t\t<p class=\"line\"><strong>Reuniões ordinárias:</strong> Todas as terças-feiras às 9h</p>

\t\t\t<h3>GALERIA DE FOTOS:</h3>
\t\t\t<hr />
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-3\">
\t\t\t\t\t<a class=\"fancybox\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_b.jpg\" data-fancybox-group=\"gallery\" title=\"Lorem ipsum dolor sit amet\"><img src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_s.jpg\" alt=\"\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-3\">
\t\t\t\t\t<a class=\"fancybox\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_b.jpg\" data-fancybox-group=\"gallery\" title=\"Lorem ipsum dolor sit amet\"><img src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_s.jpg\" alt=\"\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-3\">
\t\t\t\t\t<a class=\"fancybox\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_b.jpg\" data-fancybox-group=\"gallery\" title=\"Lorem ipsum dolor sit amet\"><img src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_s.jpg\" alt=\"\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-3\">
\t\t\t\t\t<a class=\"fancybox\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_b.jpg\" data-fancybox-group=\"gallery\" title=\"Lorem ipsum dolor sit amet\"><img src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/js/plugins/fancybox/demo/1_s.jpg\" alt=\"\" /></a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "transparencia.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  96 => 38,  88 => 35,  80 => 32,  61 => 15,  58 => 14,  52 => 10,  48 => 9,  43 => 8,  40 => 7,  33 => 5,  30 => 4,  11 => 1,);
    }
}
