<?php

/* admin/destaque/listar.html */
class __TwigTemplate_268267cd79a331985d6094a18ae2e9129c0a97d8f97628740abe547bc8d02690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/destaque/listar.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "./admin/layout.html";
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
\t<h1>Destaques</h1>

\t";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["destaques"]) ? $context["destaques"] : null)) > 0)) {
            // line 8
            echo "\t\t<div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right\">
\t\t\t<div id=\"limitar-registros\" data-url=\"admin/painel/destaque\">
\t\t\t\t<div class=\"form-group\">
\t\t\t    <label for=\"exampleInputEmail1\">Mostrar:</label>
\t\t\t    ";
            // line 12
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getSelect", array(), "method");
            echo "
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 17
        echo "
\t<a href=\"/admin/painel/destaque/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>

\t<div id=\"saida\">
\t\t<div class=\"saida\" id=\"saida-js-destaque\" role=\"alert\"></div>
\t\t";
        // line 22
        if (array_key_exists("mensagem", $context)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-success\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["mensagem"]) ? $context["mensagem"] : null), "html", null, true);
            echo "</div>
\t\t";
        } elseif (        // line 24
array_key_exists("erro", $context)) {
            // line 25
            echo "\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, (isset($context["erro"]) ? $context["erro"] : null), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 27
        echo "\t</div>

\t<table class=\"table table-striped table-hover\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Título</th>
\t\t\t\t<th>Ativo</th>
\t\t\t\t<th>Alterar</th>
\t\t\t\t<th>Excluir</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody data-location=\"listar\">
\t\t\t";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getObjects", array(), "method")) > 0)) {
            // line 40
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["destaques"]) ? $context["destaques"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["destaque"]) {
                // line 41
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($context["destaque"], "getTitulo", array(), "method"), 80, true)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 43
                echo ((($this->getAttribute($context["destaque"], "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/destaque/alterar/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaque"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/destaque/deletar/";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["destaque"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"destaque\" data-element=\"#saida-js-destaque\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['destaque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t<tr><td colspan=\"7\" align=\"center\">Nenhum destaque cadastrado!</td></tr>
\t\t\t";
        }
        // line 51
        echo "\t\t</tbody>
\t</table>

\t";
        // line 54
        if ((twig_length_filter($this->env, (isset($context["destaques"]) ? $context["destaques"] : null)) > 0)) {
            // line 55
            echo "\t\t<p id=\"registros\" class=\"text-center\">Registros: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t";
            // line 56
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "
\t";
        }
        // line 58
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "admin/destaque/listar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 58,  138 => 56,  133 => 55,  131 => 54,  126 => 51,  122 => 49,  119 => 48,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  95 => 41,  90 => 40,  88 => 39,  74 => 27,  68 => 25,  66 => 24,  61 => 23,  59 => 22,  52 => 17,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
