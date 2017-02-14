<?php

/* fale-secretaria.html */
class __TwigTemplate_5a38d02c7ba0cfb3bd52a8b8564dc1a604d5714261c499fea6e77e713d72137f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "fale-secretaria.html", 1);
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
\t<div id=\"fale-secretaria\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>FALE COM A SECRETARIA</h1>
\t\t\t<p>Sua mensagem será enviada para:</p>
\t\t\t<hr />

\t\t\t";
        // line 12
        if (((isset($context["secretaria"]) ? $context["secretaria"] : null) != null)) {
            // line 13
            echo "
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"container-secretaria\">
\t\t\t\t\t<div class=\"col-xs-12 col-sm-2 col-md-2 col-lg-2\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()) . "/") . $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getFoto", array(), "method")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getNome", array(), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getNome", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-12 col-sm-10 col-md-10 col-lg-10\">
\t\t\t\t\t\t<p><strong>Secretaria: </strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getNome", array(), "method"), "html", null, true);
            echo "  <span><strong>Telefone:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getTelefone", array(), "method"), "html", null, true);
            echo "</span></p>
\t\t\t\t\t\t<p><strong>Responsável: </strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getSecretario", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<p><strong>Sobre a Secretaria: </strong>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getDescricao", array(), "method"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"headline\">
\t\t\t\t\t<h3>PREENCHA CORRETAMENTE TODOS OS CAMPOS PARA FACILITAR O RETORNO E VALIDAR O SEU CONTATO.</h3>
\t\t\t\t</div>\t\t\t\t

\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"formulario\">

\t\t\t\t\t<form method=\"post\" action=\"/email/enviar\" id=\"fale-secretaria\">
\t\t\t\t\t  <input type=\"hidden\" name=\"secretaria-id\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["secretaria"]) ? $context["secretaria"] : null), "getId", array(), "method"), "html", null, true);
            echo "\">

\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Nome</label>
\t\t\t\t\t    \t<input type=\"text\" required name=\"nome\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Digite seu nome\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Seu e-mail</label>
\t\t\t\t\t    \t<input type=\"email\" required name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Digite seu email\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Telefone</label>
\t\t\t\t\t    \t<input type=\"text\" required name=\"telefone\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Ex: (35) 0000-0000 ou (16) 9-0000-0000\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Endereço</label>
\t\t\t\t\t    \t<input type=\"text\" required name=\"endereco\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Ex: Rua Quinze, nº 50, Bairro Trinta, Pirapora-MG\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Assunto</label>
\t\t\t\t\t    \t<input type=\"text\" required name=\"assunto\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Digite o assunto\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </div>

\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Mensagem</label>
\t\t\t\t\t  \t\t<textarea name=\"mensagem\" required cols=\"30\" rows=\"6\" placeholder=\"Digite sua mensagem aqui\"></textarea>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t  
\t\t\t\t\t  <div class=\"row\">
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-right\">
\t\t\t\t\t  \t\t<button data-form=\"#fale-secretaria\" data-msg=\"Em breve a secretaria responderá!\" id=\"btn-enviar\" class=\"btn-enviar\" type=\"submit\">ENVIAR MENSAGEM</button>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  \t<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-left\">
\t\t\t\t\t  \t\t<div id=\"mensagem-form\" data-element=\"mensagem-form\"></div>
\t\t\t\t\t  \t</div>
\t\t\t\t\t  </div>
\t\t\t\t\t</form>

\t\t\t\t</div>
\t
\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t<h4>Secretaria não encontrada!</h4>
\t\t\t";
        }
        // line 88
        echo "
\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "fale-secretaria.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 88,  139 => 86,  82 => 32,  68 => 21,  64 => 20,  58 => 19,  48 => 16,  43 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
