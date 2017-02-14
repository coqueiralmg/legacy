<?php

/* legislacoes.html */
class __TwigTemplate_9df04dac8ab0a5a65c20f77814b4c6cc186cd16ddd4e1040a5de755133c2cc82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "legislacoes.html", 1);
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
        echo "/public/js/script/legislacao.js\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
\t<div id=\"legislacoes\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>LEGISLAÇÃO</h1>
\t\t\t<p>Pesquise e baixe documentos da legislação municipal.</p>
\t\t\t<hr />

\t\t\t<form id=\"pesquisar-legislacao\">
\t\t\t\t<input type=\"search\" name=\"search\" id=\"pesquisa\" placeholder=\"Digite aqui todo ou parte do nome/número do arquivo que deseja buscar\">
\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"btn-pesquisar\" value=\"\">
\t\t\t</form>

\t\t\t";
        // line 21
        if ((twig_length_filter($this->env, (isset($context["legislacoes"]) ? $context["legislacoes"] : null)) > 0)) {
            // line 22
            echo "
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["legislacoes"]) ? $context["legislacoes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["legislacao"]) {
                // line 25
                echo "\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t<a href=\"/legislacao/";
                // line 26
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["legislacao"], "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["legislacao"], "getId", array(), "method")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["legislacao"], "getTitulo", array(), "method")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<p>";
                // line 28
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($context["legislacao"], "getDescricao", array(), "method"), 350, true, true)), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p>Data: ";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["legislacao"], "getData", array(), "method"), "d/m/Y H:i"), "html", null, true);
                echo " | Número: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["legislacao"], "getNumero", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['legislacao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t\t</div>

\t\t\t\t<p id=\"registros\">Registros: ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t<div id=\"paginacao\">";
            // line 37
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "</div>

\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t<p>Nenhuma legislação disponível!</p>
\t\t\t";
        }
        // line 42
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "legislacoes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  108 => 40,  102 => 37,  98 => 36,  94 => 34,  81 => 29,  77 => 28,  70 => 26,  67 => 25,  63 => 24,  59 => 22,  57 => 21,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
