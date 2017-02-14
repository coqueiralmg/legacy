<?php

/* secretarias.html */
class __TwigTemplate_9a27e358c6aa752e6bf25744342e98241563883eab47300115965f30d61eb24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "secretarias.html", 1);
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
\t<div id=\"secretarias\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>SECRETARIAS</h1>
\t\t\t<p>Clique e conheça melhor cada secretaria, e se quiser, envie uma mensagem.</p>
\t\t\t<hr />

\t\t\t";
        // line 12
        if ((twig_length_filter($this->env, (isset($context["secretarias"]) ? $context["secretarias"] : null)) > 0)) {
            // line 13
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["secretarias"]) ? $context["secretarias"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["secretaria"]) {
                // line 15
                echo "\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2 col-lg-2\">
\t\t\t\t\t\t\t<a class=\"secretaria-thumb\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, ((((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/fale-com-secretaria/") . call_user_func_array($this->env->getFunction('gerarSlug')->getCallable(), array($this->getAttribute($context["secretaria"], "getNome", array(), "method")))) . "/") . $this->getAttribute($context["secretaria"], "getId", array(), "method")), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                // line 17
                echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute($context["secretaria"], "getFoto", array(), "method")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getNome", array(), "method"), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t\t<p class=\"text-center\">";
                // line 18
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('cortarTexto')->getCallable(), array($this->getAttribute($context["secretaria"], "getNome", array(), "method"), 25, true)), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t<p class=\"text-center\">(";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["secretaria"], "getSecretario", array(), "method"), "html", null, true);
                echo ")</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 23
                if (((($context["key"] + 1) % 2) == 0)) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<div class=\"clearfix visible-xs-block\"></div>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['secretaria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t</div>
\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t<p>Nenhuma secretaria disponível no momento!</p>
\t\t\t";
        }
        // line 31
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "secretarias.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  92 => 29,  88 => 27,  82 => 26,  78 => 24,  76 => 23,  69 => 19,  65 => 18,  57 => 17,  53 => 16,  50 => 15,  46 => 14,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
