<?php

/* busca.html */
class __TwigTemplate_efcd8fa8ef33aa262c1e960798214f5db63f4569c50450802bd1cf9de85de93e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "busca.html", 1);
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
\t<div id=\"busca\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

\t\t\t<h1>Pesquisar</h1>
\t\t\t<p>Sua pesquisa: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["busca"]) ? $context["busca"] : null), "html", null, true);
        echo "</p>
\t\t\t<p>Registros: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["registros"]) ? $context["registros"] : null), "html", null, true);
        echo "</p>
\t\t\t<hr />

\t\t\t";
        // line 13
        if (((isset($context["registros"]) ? $context["registros"] : null) > 0)) {
            // line 14
            echo "\t
\t\t\t\t";
            // line 15
            if ((twig_length_filter($this->env, (isset($context["secretariasBusca"]) ? $context["secretariasBusca"] : null)) > 0)) {
                // line 16
                echo "\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t\t<h3>Secretarias</h3>
\t\t\t\t\t\t";
                // line 18
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["secretariasBusca"]) ? $context["secretariasBusca"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["secretaria"]) {
                    // line 19
                    echo "\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<a href=\"fale-com-secretaria/";
                    // line 20
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["secretaria"], "getNome", array(), "method"))) . "/") . $this->getAttribute($context["secretaria"], "getId", array(), "method")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getSecretario", array(), "method"), "html", null, true);
                    echo ")</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secretaria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 25
            echo "
\t\t\t\t";
            // line 26
            if ((twig_length_filter($this->env, (isset($context["licitacoes"]) ? $context["licitacoes"] : null)) > 0)) {
                // line 27
                echo "\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t\t<h3>Licitações</h3>
\t\t\t\t\t\t";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["licitacoes"]) ? $context["licitacoes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["licitacao"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<a href=\"licitacao/";
                    // line 31
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["licitacao"], "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["licitacao"], "getId", array(), "method")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["licitacao"], "getTitulo", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['licitacao'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 36
            echo "
\t\t\t\t";
            // line 37
            if ((twig_length_filter($this->env, (isset($context["legislacoes"]) ? $context["legislacoes"] : null)) > 0)) {
                // line 38
                echo "\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t\t<h3>Legislações</h3>
\t\t\t\t\t\t";
                // line 40
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["legislacoes"]) ? $context["legislacoes"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["legislacao"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<a href=\"legislacao/";
                    // line 42
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["legislacao"], "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["legislacao"], "getId", array(), "method")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["legislacao"], "getTitulo", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['legislacao'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 47
            echo "
\t\t\t\t";
            // line 48
            if ((twig_length_filter($this->env, (isset($context["noticias"]) ? $context["noticias"] : null)) > 0)) {
                // line 49
                echo "\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t\t<h3>Notícias</h3>
\t\t\t\t\t\t";
                // line 51
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["noticias"]) ? $context["noticias"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["noticia"]) {
                    // line 52
                    echo "\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<a href=\"noticia/";
                    // line 53
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["noticia"], "getId", array(), "method")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["noticia"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noticia'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 58
            echo "
\t\t\t\t";
            // line 59
            if ((twig_length_filter($this->env, (isset($context["videos"]) ? $context["videos"] : null)) > 0)) {
                // line 60
                echo "\t\t\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t\t<h3>Vídeos</h3>
\t\t\t\t\t\t";
                // line 62
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                    // line 63
                    echo "\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t\t\t\t<a href=\"video/";
                    // line 64
                    echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"))) . "/") . $this->getAttribute($context["video"], "getId", array(), "method")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["video"], "getPost", array(), "method"), "getTitulo", array(), "method"), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t";
        } else {
            // line 71
            echo "\t\t\t\t<p>Sua pesquisa não retornou nenhum resultado.</p>
\t\t\t";
        }
        // line 73
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "busca.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 73,  211 => 71,  207 => 69,  203 => 67,  192 => 64,  189 => 63,  185 => 62,  181 => 60,  179 => 59,  176 => 58,  172 => 56,  161 => 53,  158 => 52,  154 => 51,  150 => 49,  148 => 48,  145 => 47,  141 => 45,  130 => 42,  127 => 41,  123 => 40,  119 => 38,  117 => 37,  114 => 36,  110 => 34,  99 => 31,  96 => 30,  92 => 29,  88 => 27,  86 => 26,  83 => 25,  79 => 23,  66 => 20,  63 => 19,  59 => 18,  55 => 16,  53 => 15,  50 => 14,  48 => 13,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
