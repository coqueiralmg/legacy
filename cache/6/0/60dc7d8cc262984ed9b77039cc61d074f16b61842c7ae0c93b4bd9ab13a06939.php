<?php

/* noticias.html */
class __TwigTemplate_60dc7d8cc262984ed9b77039cc61d074f16b61842c7ae0c93b4bd9ab13a06939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "noticias.html", 1);
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
\t<div id=\"noticias\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>NOTÍCIAS</h1>
\t\t\t<p>Notícias do legislativo, matérias e de utilidade pública.</p>
\t\t\t<hr />

\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["noticias"]) ? $context["noticias"] : null)) > 0)) {
            // line 13
            echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                // line 16
                echo "\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<a href=\"/noticia/";
                // line 17
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["noticia"], "getId", array(), "method")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
\t\t\t\t\t\t\t\t\t<img class=\"img-responsive float-left\" src=\"";
                // line 19
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . strtr($this->getAttribute($context["noticia"], "getFoto", array(), "method"), array("large" => "small"))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-10 col-md-10 col-lg-10\">
\t\t\t\t\t\t\t\t\t<h1>";
                // line 22
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method")), "html", null, true);
                echo "</h1>
\t\t\t\t\t\t\t\t\t<p class=\"data\">Autor: ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getAutor", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method"), "html", null, true);
                echo " | Postado: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataPostagem", array(), "method"), "d/m/Y H:i"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataAlteracao", array(), "method") != null)) ? ((" | Atualizado: " . twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataAlteracao", array(), "method"), "d/m/Y H:i"))) : ("")), "html", null, true);
                echo " | ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"), "html", null, true);
                echo " visualizações</p>
\t\t\t\t\t\t\t\t\t<p>";
                // line 24
                echo call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($context["noticia"], "getTexto", array(), "method"), 450, true, true));
                echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t\t\t</div>

\t\t\t\t<p id=\"registros\">Registros: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t";
            // line 33
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "

\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t<p>Nenhuma notícia disponível!</p>
\t\t\t";
        }
        // line 38
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "noticias.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  109 => 36,  103 => 33,  99 => 32,  95 => 30,  83 => 24,  73 => 23,  69 => 22,  59 => 19,  54 => 17,  51 => 16,  47 => 15,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
