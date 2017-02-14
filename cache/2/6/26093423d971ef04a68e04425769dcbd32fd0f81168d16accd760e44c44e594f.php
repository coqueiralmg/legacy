<?php

/* prefeitos.html */
class __TwigTemplate_26093423d971ef04a68e04425769dcbd32fd0f81168d16accd760e44c44e594f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "prefeitos.html", 1);
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
\t<div id=\"vereadores\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>PREFEITOS</h1>
\t\t\t<p>Clique e conheça melhor cada prefeito, e se quiser, fale diretamente com ele.</p>
\t\t\t<hr />

\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["prefeitos"]) ? $context["prefeitos"] : null)) > 0)) {
            // line 13
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["prefeitos"]) ? $context["prefeitos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["prefeito"]) {
                // line 15
                echo "\t\t\t\t\t\t<div class=\"col-xs-4 col-sm-3 col-md-2 col-lg-2\">
\t\t\t\t\t\t\t<a class=\"prefeito-thumb\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/fale-com-prefeito/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method")))) . "/") . $this->getAttribute($context["prefeito"], "getId", array(), "method")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                // line 17
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute($context["prefeito"], "getFoto", array(), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method"), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t\t<p class=\"text-center\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getPessoa", array(), "method"), "getNome", array(), "method"), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"text-center\">(";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["prefeito"], "getUsuario", array(), "method"), "getPessoa", array(), "method"), "getApelido", array(), "method"), "html", null, true);
                echo ")</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prefeito'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t</div>
\t\t\t";
        } else {
            // line 26
            echo "\t\t\t\t<p>Nenhum prefeito disponível no momento!</p>
\t\t\t";
        }
        // line 28
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "prefeitos.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  84 => 26,  80 => 24,  69 => 19,  65 => 18,  57 => 17,  53 => 16,  50 => 15,  46 => 14,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
