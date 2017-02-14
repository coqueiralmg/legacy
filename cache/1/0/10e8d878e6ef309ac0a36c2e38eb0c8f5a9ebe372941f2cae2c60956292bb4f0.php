<?php

/* licitacoes.html */
class __TwigTemplate_10e8d878e6ef309ac0a36c2e38eb0c8f5a9ebe372941f2cae2c60956292bb4f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "licitacoes.html", 1);
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
\t<div id=\"licitacoes\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>PUBLICAÇÕES</h1>
\t\t\t<p>Documentos e informações sobre licitações, portarias, contratos e outros.</p>
\t\t\t<hr />

\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["licitacoes"]) ? $context["licitacoes"] : null)) > 0)) {
            // line 13
            echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["licitacoes"]) ? $context["licitacoes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["licitacao"]) {
                // line 16
                echo "\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<a href=\"/licitacao/";
                // line 17
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["licitacao"], "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["licitacao"], "getId", array(), "method")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["licitacao"], "getTitulo", array(), "method")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<p>Início: ";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["licitacao"], "getDataInicio", array(), "method"), "d/m/Y H:i"), "html", null, true);
                echo " | Término: ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["licitacao"], "getDataTermino", array(), "method"), "d/m/Y H:i"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licitacao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t\t</div>

\t\t\t\t<p id=\"registros\">Registros: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t";
            // line 25
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "

\t\t\t";
        } else {
            // line 28
            echo "\t\t\t\t<p>Nenhuma licitação disponível!</p>
\t\t\t";
        }
        // line 30
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "licitacoes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  86 => 28,  80 => 25,  76 => 24,  72 => 22,  60 => 18,  54 => 17,  51 => 16,  47 => 15,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
