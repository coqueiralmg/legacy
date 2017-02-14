<?php

/* admin/noticia/listar.html */
class __TwigTemplate_5d5df60b424e13d8f3376b09a8be2d2392bde227cadef8f0afc4282f930e3e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/noticia/listar.html", 1);
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
\t<h1>Notícias</h1>

\t";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["noticias"]) ? $context["noticias"] : null)) > 0)) {
            // line 8
            echo "\t\t<div class=\"col-xs-1 col-sm-1 col-md-1 col-lg-1 pull-right\">
\t\t\t<div id=\"limitar-registros\" data-url=\"admin/painel/noticia\">
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
\t<a href=\"/admin/painel/noticia/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>

\t<div id=\"saida\">
\t\t<div class=\"saida\" id=\"saida-js-noticia\" role=\"alert\"></div>
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
\t\t\t\t<th>Postagem</th>
\t\t\t\t<th>Alteração</th>
\t\t\t\t<th>Visto</th>
\t\t\t\t<th>Destaque</th>
\t\t\t\t<th>Ativo</th>
\t\t\t\t<th>Alterar</th>
\t\t\t\t<th>Excluir</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody data-location=\"listar\">
\t\t\t";
        // line 43
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getObjects", array(), "method")) > 0)) {
            // line 44
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                // line 45
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method"), 80, true)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataPostagem", array(), "method"), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataAlteracao", array(), "method"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataAlteracao", array(), "method"), "d/m/Y"))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"), "html", null, true);
                echo " vezes</td>
\t\t\t\t\t\t<td>";
                // line 50
                echo ((($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDestaque", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 51
                echo ((($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/noticia/alterar/";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t<td><a href=\"/admin/painel/noticia/deletar/";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"noticia\" data-element=\"#saida-js-noticia\"></a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t";
        } else {
            // line 57
            echo "\t\t\t\t<tr><td colspan=\"7\" align=\"center\">Nenhuma notícia cadastrada!</td></tr>
\t\t\t";
        }
        // line 59
        echo "\t\t</tbody>
\t</table>

\t";
        // line 62
        if ((twig_length_filter($this->env, (isset($context["noticias"]) ? $context["noticias"] : null)) > 0)) {
            // line 63
            echo "\t\t<p id=\"registros\" class=\"text-center\">Registros: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalObjects", array(), "method"), "html", null, true);
            echo "</p>
\t\t";
            // line 64
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getLinks", array(), "method");
            echo "
\t";
        }
        // line 66
        echo "\t

";
    }

    public function getTemplateName()
    {
        return "admin/noticia/listar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 66,  158 => 64,  153 => 63,  151 => 62,  146 => 59,  142 => 57,  139 => 56,  130 => 53,  126 => 52,  122 => 51,  118 => 50,  114 => 49,  110 => 48,  106 => 47,  102 => 46,  99 => 45,  94 => 44,  92 => 43,  74 => 27,  68 => 25,  66 => 24,  61 => 23,  59 => 22,  52 => 17,  44 => 12,  38 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
