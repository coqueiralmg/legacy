<?php

/* videos.html */
class __TwigTemplate_a93a8cb1d9fded9a5149cba14236ebf8a10f7d8a36b9b150f49a01c84c133eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "videos.html", 1);
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
\t<div id=\"videos\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>TV PREFEITURA</h1>
\t\t\t<p>Vídeos das reuniões plenárias, matérias e de utilidade pública. </p>
\t\t\t<hr />

\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["videos"]) ? $context["videos"] : null)) > 0)) {
            // line 13
            echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 16
                echo "\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-3 col-lg-3\">
\t\t\t\t\t\t\t<a href=\"/video/";
                // line 17
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["video"], "getId", array(), "method")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img class=\"img\" src=\"http://img.youtube.com/vi/";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('videoEmbedYoutube')->getCallable(), array($this->getAttribute($context["video"], "getVideo", array(), "method"))), "html", null, true);
                echo "/0.jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<h3>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t<p>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"), "html", null, true);
                echo " visualizações | ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getDataPostagem", array(), "method"), "d/m/Y"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t</div>

\t\t\t\t<p id=\"registros\">Registros: ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t";
            // line 27
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "

\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t<p>Nenhum vídeo disponível!</p>
\t\t\t";
        }
        // line 32
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "videos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  98 => 30,  92 => 27,  88 => 26,  84 => 24,  72 => 20,  68 => 19,  60 => 18,  54 => 17,  51 => 16,  47 => 15,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
