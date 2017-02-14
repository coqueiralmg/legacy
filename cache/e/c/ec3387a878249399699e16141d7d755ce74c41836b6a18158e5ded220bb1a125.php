<?php

/* admin/licitacao/listar.html */
class __TwigTemplate_ec3387a878249399699e16141d7d755ce74c41836b6a18158e5ded220bb1a125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/licitacao/listar.html", 1);
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
\t<h1>Licitações</h1>

\t";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["licitacoes"]) ? $context["licitacoes"] : null)) > 0)) {
            // line 8
            echo "\t\t<div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right\">
\t\t\t<div id=\"limitar-registros\" data-url=\"admin/painel/licitacao\">
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
\t<a href=\"/admin/painel/licitacao/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>

\t<div id=\"saida\">
\t\t<div class=\"saida\" id=\"saida-js-licitacao\" role=\"alert\"></div>
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
\t\t\t\t<th>Início</th>
\t\t\t\t<th>Término</th>
\t\t\t\t<th>Ativo</th>
\t\t\t\t<th>Alterar</th>
\t\t\t\t<th>Excluir</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody data-location=\"listar\">
\t\t\t";
        // line 41
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getObjects", array(), "method")) > 0)) {
            // line 42
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["licitacoes"]) ? $context["licitacoes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["licitacao"]) {
                // line 43
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["licitacao"], "getTitulo", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["licitacao"], "getDataInicio", array(), "method"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["licitacao"], "getDataTermino", array(), "method"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 47
                echo ((($this->getAttribute($context["licitacao"], "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/licitacao/alterar/";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["licitacao"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/licitacao/deletar/";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["licitacao"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"licitacao\" data-element=\"#saida-js-licitacao\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licitacao'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t<tr><td colspan=\"7\" align=\"center\">Nenhuma licitação cadastrada!</td></tr>
\t\t\t";
        }
        // line 55
        echo "\t\t</tbody>
\t</table>

\t";
        // line 58
        if ((twig_length_filter($this->env, (isset($context["licitacoes"]) ? $context["licitacoes"] : null)) > 0)) {
            // line 59
            echo "\t\t<p id=\"registros\" class=\"text-center\">Registros: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t";
            // line 60
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "
\t";
        }
        // line 62
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "admin/licitacao/listar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  148 => 60,  143 => 59,  141 => 58,  136 => 55,  132 => 53,  129 => 52,  120 => 49,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  97 => 43,  92 => 42,  90 => 41,  74 => 27,  68 => 25,  66 => 24,  61 => 23,  59 => 22,  52 => 17,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
