<?php

/* admin/prefeito/listar.html */
class __TwigTemplate_5f3909d788d9b644cd3aaffdf07f08fc8f27212aafc6d70f0118524339955e43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/prefeito/listar.html", 1);
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
\t<h1>Prefeitos</h1>

\t";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["prefeitos"]) ? $context["prefeitos"] : null)) > 0)) {
            // line 8
            echo "\t\t<div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right\">
\t\t\t<div id=\"limitar-registros\" data-url=\"admin/painel/prefeito\">
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
\t<a href=\"/admin/painel/prefeito/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>

\t<div id=\"saida\">
\t\t<div class=\"saida\" id=\"saida-js-prefeito\" role=\"alert\"></div>
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
\t\t\t\t<th>Usuário</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Ativo</th>
\t\t\t\t<th>Nível</th>
\t\t\t\t<th>Partido</th>
\t\t\t\t<th>Tipo</th>
\t\t\t\t<th>Alterar</th>
\t\t\t\t<th>Excluir</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody data-location=\"listar\">
\t\t\t";
        // line 44
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getObjects", array(), "method")) > 0)) {
            // line 45
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prefeitos"]) ? $context["prefeitos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prefeito"]) {
                // line 46
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getUsuario", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getEmail", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 50
                echo ((($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 51
                echo ((($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getNivel", array(), "method") == 1)) ? ("Normal") : ("Admin"));
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prefeito"], "getPartido", array(), "method"), "getSigla", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["prefeito"], "getTipo", array(), "method"), "getDescricao", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/prefeito/alterar/";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["prefeito"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/prefeito/deletar/";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["prefeito"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"prefeito\" data-element=\"#saida-js-prefeito\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prefeito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t<tr><td colspan=\"9\" align=\"center\">Nenhum prefeito cadastrado!</td></tr>
\t\t\t";
        }
        // line 61
        echo "\t\t</tbody>
\t</table>

\t";
        // line 64
        if ((twig_length_filter($this->env, (isset($context["prefeitos"]) ? $context["prefeitos"] : null)) > 0)) {
            // line 65
            echo "\t\t<p id=\"registros\" class=\"text-center\">Registros: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t";
            // line 66
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "
\t";
        }
        // line 68
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "admin/prefeito/listar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 68,  163 => 66,  158 => 65,  156 => 64,  151 => 61,  147 => 59,  144 => 58,  135 => 55,  131 => 54,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  100 => 46,  95 => 45,  93 => 44,  74 => 27,  68 => 25,  66 => 24,  61 => 23,  59 => 22,  52 => 17,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
