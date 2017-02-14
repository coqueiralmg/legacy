<?php

/* admin/home.html */
class __TwigTemplate_5266f650d7e55fa9ad169ce8478b81b2e15770b072972e5e0e31c58f82d4db15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/home.html", 1);
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
\t<p class=\"text-right\">";
        // line 5
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["ultimoAcesso"]) ? $context["ultimoAcesso"] : null), "getData", array(), "method") != null)) ? ((((("Seu último acesso foi em: " . twig_date_format_filter($this->env, $this->getAttribute((isset($context["ultimoAcesso"]) ? $context["ultimoAcesso"] : null), "getData", array(), "method"), "d/m/Y")) . " as ") . twig_date_format_filter($this->env, $this->getAttribute((isset($context["ultimoAcesso"]) ? $context["ultimoAcesso"] : null), "getData", array(), "method"), "H:i")) . "h")) : ("Este é seu primeiro acesso ao sistema")), "html", null, true);
        echo "</p>

\t<h1>Página inicial</h1>

\t";
        // line 9
        if (((isset($context["usuarioNivel"]) ? $context["usuarioNivel"] : null) == 2)) {
            // line 10
            echo "\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t<h2>Usuários</h2>
\t\t\t\t<a href=\"/admin/painel/usuario/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>
\t\t\t\t<div id=\"saida\">
\t\t\t\t\t<div class=\"saida\" id=\"saida-js-usuario\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t\t\t<th>Usuário</th>
\t\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t\t<th>Ativo</th>
\t\t\t\t\t\t\t<th>Nível</th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-pencil\"></i></th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-remove\"></i></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 31
            if ((twig_length_filter($this->env, (isset($context["usuarios"]) ? $context["usuarios"] : null)) > 0)) {
                // line 32
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "getPessoa", array(), "method"), "getNome", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "getUsuario", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "getEmail", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 37
                    echo ((($this->getAttribute($context["usuario"], "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 38
                    echo ((($this->getAttribute($context["usuario"], "getNivel", array(), "method") == 1)) ? ("Normal") : ("Admin"));
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/usuario/alterar/";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/usuario/deletar/";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"usuario\" data-element=\"#saida-js-usuario\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "\t\t\t\t\t\t\t<tr><td id=\"ver-todos\" colspan=\"7\" align=\"center\"><a href=\"/admin/painel/usuario\">Ver todos</a></td></tr>
\t\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\" align=\"center\">Nenhum usuário cadastrado!</td></tr>
\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t<h2>Secretarias</h2>
\t\t\t\t<a href=\"/admin/painel/secretaria/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>
\t\t\t\t<div id=\"saida\">
\t\t\t\t\t<div class=\"saida\" id=\"saida-js-secretaria\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t\t\t<th>Telefone</th>
\t\t\t\t\t\t\t<th>Responsável</th>
\t\t\t\t\t\t\t<th>Ativo</th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-pencil\"></i></th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-remove\"></i></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 69
            if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
                // line 70
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 72
                    echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getTelefone", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getSecretario", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 75
                    echo ((($this->getAttribute($context["secretaria"], "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/secretaria/alterar/";
                    // line 76
                    echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/secretaria/deletar/";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"secretaria\" data-element=\"#saida-js-secretaria\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secretaria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "\t\t\t\t\t\t\t<tr><td id=\"ver-todos\" colspan=\"6\" align=\"center\"><a href=\"/admin/painel/secretaria\">Ver todos</a></td></tr>
\t\t\t\t\t\t";
            } else {
                // line 82
                echo "\t\t\t\t\t\t\t<tr><td colspan=\"6\" align=\"center\">Nenhuma secretaria cadastrada!</td></tr>
\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t<h2>Banners</h2>
\t\t\t\t<a href=\"/admin/painel/banner/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>
\t\t\t\t<div id=\"saida\">
\t\t\t\t\t<div class=\"saida\" id=\"saida-js-banner\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Título</th>
\t\t\t\t\t\t\t<th>Ativo</th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-pencil\"></i></th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-remove\"></i></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 106
            if ((twig_length_filter($this->env, (isset($context["banners"]) ? $context["banners"] : null)) > 0)) {
                // line 107
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "getTitulo", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 110
                    echo ((($this->getAttribute($context["banner"], "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/banner/alterar/";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/banner/deletar/";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["banner"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"banner\" data-element=\"#saida-js-banner\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "\t\t\t\t\t\t\t<tr><td id=\"ver-todos\" colspan=\"4\" align=\"center\"><a href=\"/admin/painel/banner\">Ver todos</a></td></tr>
\t\t\t\t\t\t";
            } else {
                // line 117
                echo "\t\t\t\t\t\t\t<tr><td colspan=\"4\" align=\"center\">Nenhum banner cadastrado!</td></tr>
\t\t\t\t\t\t";
            }
            // line 119
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t<h2>Licitações</h2>
\t\t\t\t<a href=\"/admin/painel/licitacao/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>
\t\t\t\t<div id=\"saida\">
\t\t\t\t\t<div class=\"saida\" id=\"saida-js-licitacao\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Título</th>
\t\t\t\t\t\t\t<th>Início</th>
\t\t\t\t\t\t\t<th>Término</th>
\t\t\t\t\t\t\t<th>Ativo</th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-pencil\"></i></th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-remove\"></i></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 141
            if ((twig_length_filter($this->env, (isset($context["licitacoes"]) ? $context["licitacoes"] : null)) > 0)) {
                // line 142
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["licitacoes"]) ? $context["licitacoes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["licitacao"]) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 144
                    echo twig_escape_filter($this->env, $this->getAttribute($context["licitacao"], "getTitulo", array(), "method"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 145
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["licitacao"], "getDataInicio", array(), "method"), "d/m/Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 146
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["licitacao"], "getDataTermino", array(), "method"), "d/m/Y"), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 147
                    echo ((($this->getAttribute($context["licitacao"], "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/licitacao/alterar/";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute($context["licitacao"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/licitacao/deletar/";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getAttribute($context["licitacao"], "getId", array(), "method"), "html", null, true);
                    echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"licitacao\" data-element=\"#saida-js-licitacao\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licitacao'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "\t\t\t\t\t\t\t<tr><td id=\"ver-todos\" colspan=\"6\" align=\"center\"><a href=\"/admin/painel/licitacao\">Ver todos</a></td></tr>
\t\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t\t<tr><td colspan=\"6\" align=\"center\">Nenhuma licitação cadastrada!</td></tr>
\t\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t";
        }
        // line 162
        echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t<h2>Notícias</h2>
\t\t\t\t<a href=\"/admin/painel/noticia/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>
\t\t\t\t<div id=\"saida\">
\t\t\t\t\t<div class=\"saida\" id=\"saida-js-noticia\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Título</th>
\t\t\t\t\t\t\t<th>Postagem</th>
\t\t\t\t\t\t\t<th>Alteração</th>
\t\t\t\t\t\t\t<th>Visto</th>
\t\t\t\t\t\t\t<th>Ativo</th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-pencil\"></i></th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-remove\"></i></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 183
        if ((twig_length_filter($this->env, (isset($context["noticias"]) ? $context["noticias"] : null)) > 0)) {
            // line 184
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                // line 185
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 186
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method"), 25, true)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 187
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataPostagem", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 188
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataAlteracao", array(), "method"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getDataAlteracao", array(), "method"), "d/m/Y"))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 189
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"))) ? ("0") : ($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"))), "html", null, true);
                echo " vezes</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 190
                echo ((($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/noticia/alterar/";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/noticia/deletar/";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["noticia"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"noticia\" data-element=\"#saida-js-noticia\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "\t\t\t\t\t\t\t<tr><td id=\"ver-todos\" colspan=\"7\" align=\"center\"><a href=\"/admin/painel/noticia\">Ver todos</a></td></tr>
\t\t\t\t\t\t";
        } else {
            // line 197
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\" align=\"center\">Nenhuma notícia cadastrada!</td></tr>
\t\t\t\t\t\t";
        }
        // line 199
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t<h2>Vídeos</h2>
\t\t\t\t<a href=\"/admin/painel/video/novo\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-file\"></i> Novo</a>
\t\t\t\t<div id=\"saida\">
\t\t\t\t\t<div class=\"saida\" id=\"saida-js-video\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Título</th>
\t\t\t\t\t\t\t<th>Postagem</th>
\t\t\t\t\t\t\t<th>Alteração</th>
\t\t\t\t\t\t\t<th>Visto</th>
\t\t\t\t\t\t\t<th>Ativo</th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-pencil\"></i></th>
\t\t\t\t\t\t\t<th><i class=\"glyphicon glyphicon-remove\"></i></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 222
        if ((twig_length_filter($this->env, (isset($context["videos"]) ? $context["videos"] : null)) > 0)) {
            // line 223
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 224
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 225
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"), 25, true)), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 226
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getDataPostagem", array()), "d/m/Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 227
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getDataAlteracao", array(), "method"))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getDataAlteracao", array(), "method"), "d/m/Y"))), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 228
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"))) ? ("0") : ($this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getVisualizacoes", array(), "method"))), "html", null, true);
                echo " vezes</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 229
                echo ((($this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getAtivo", array(), "method") == 1)) ? ("Sim") : ("Não"));
                echo "</td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/video/alterar/";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-pencil\"></a></td>
\t\t\t\t\t\t\t\t\t<td><a href=\"/admin/painel/video/deletar/";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "getId", array(), "method"), "html", null, true);
                echo "\" class=\"glyphicon glyphicon-remove\" id=\"btn-deletar\" data-reference=\"video\" data-element=\"#saida-js-video\"></a></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "\t\t\t\t\t\t\t<tr><td id=\"ver-todos\" colspan=\"7\" align=\"center\"><a href=\"/admin/painel/video\">Ver todos</a></td></tr>
\t\t\t\t\t\t";
        } else {
            // line 236
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\" align=\"center\">Nenhum vídeo cadastrado!</td></tr>
\t\t\t\t\t\t";
        }
        // line 238
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "admin/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 238,  476 => 236,  472 => 234,  463 => 231,  459 => 230,  455 => 229,  451 => 228,  447 => 227,  443 => 226,  439 => 225,  436 => 224,  431 => 223,  429 => 222,  404 => 199,  400 => 197,  396 => 195,  387 => 192,  383 => 191,  379 => 190,  375 => 189,  371 => 188,  367 => 187,  363 => 186,  360 => 185,  355 => 184,  353 => 183,  330 => 162,  322 => 156,  318 => 154,  314 => 152,  305 => 149,  301 => 148,  297 => 147,  293 => 146,  289 => 145,  285 => 144,  282 => 143,  277 => 142,  275 => 141,  251 => 119,  247 => 117,  243 => 115,  234 => 112,  230 => 111,  226 => 110,  222 => 109,  219 => 108,  214 => 107,  212 => 106,  188 => 84,  184 => 82,  180 => 80,  171 => 77,  167 => 76,  163 => 75,  159 => 74,  155 => 73,  151 => 72,  148 => 71,  143 => 70,  141 => 69,  117 => 47,  113 => 45,  109 => 43,  100 => 40,  96 => 39,  92 => 38,  88 => 37,  84 => 36,  80 => 35,  76 => 34,  73 => 33,  68 => 32,  66 => 31,  43 => 10,  41 => 9,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
