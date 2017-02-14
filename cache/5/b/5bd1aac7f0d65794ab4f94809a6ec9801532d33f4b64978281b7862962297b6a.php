<?php

/* admin/secretaria/listar.html */
class __TwigTemplate_5bd1aac7f0d65794ab4f94809a6ec9801532d33f4b64978281b7862962297b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/secretaria/listar.html", 1);
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
\t<h1>Secretarias</h1>

\t";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 8
            echo "\t\t<div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right\">
\t\t\t<div id=\"limitar-registros\" data-url=\"admin/painel/secretaria\">
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
\t<a href=\"/admin/painel/secretaria/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>

\t<div id=\"saida\">
\t\t<div class=\"saida\" id=\"saida-js-secretaria\" role=\"alert\"></div>
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
\t\t\t\t<th>Nome</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Telefone</th>
\t\t\t\t<th>Secretário</th>
\t\t\t\t<th>Ativo</th>
\t\t\t\t<th>Alterar</th>
\t\t\t\t<th>Excluir</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody data-location=\"listar\">
\t\t\t";
        // line 42
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getObjects", array(), "method")) > 0)) {
            // line 43
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                // line 44
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getEmail", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getTelefone", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getSecretario", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 49
                echo ((($this->getAttribute($context["secretaria"], "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/secretaria/alterar/";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/secretaria/deletar/";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"secretaria\" data-element=\"#saida-js-secretaria\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secretaria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\t<tr><td colspan=\"9\" align=\"center\">Nenhuma secretaria cadastrada!</td></tr>
\t\t\t";
        }
        // line 57
        echo "\t\t</tbody>
\t</table>

\t";
        // line 60
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 61
            echo "\t\t<p id=\"registros\" class=\"text-center\">Registros: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t";
            // line 62
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "
\t";
        }
        // line 64
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "admin/secretaria/listar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 64,  153 => 62,  148 => 61,  146 => 60,  141 => 57,  137 => 55,  134 => 54,  125 => 51,  121 => 50,  117 => 49,  113 => 48,  109 => 47,  105 => 46,  101 => 45,  98 => 44,  93 => 43,  91 => 42,  74 => 27,  68 => 25,  66 => 24,  61 => 23,  59 => 22,  52 => 17,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
