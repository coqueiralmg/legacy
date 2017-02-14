<?php

/* fale-prefeitura.html */
class __TwigTemplate_0d7cea83e46f57185956fe8c4a9e9965e37d2d8a6a76d63d8f19669ed65a4561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "fale-prefeitura.html", 1);
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
\t\t\t<h1>FALE COM A PREFEITURA</h1>
\t\t\t<p>Entre em contato conosco.</p>
\t\t\t<hr />

\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"headline\">
\t\t\t\t<h3>PREENCHA CORRETAMENTE TODOS OS CAMPOS PARA FACILITAR O RETORNO E VALIDAR O SEU CONTATO.</h3>
\t\t\t</div>\t\t\t\t

\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\" id=\"formulario\">

\t\t\t\t<form method=\"post\" action=\"/fale-prefeitura/enviar\" id=\"fale-camara\">

\t\t\t\t  <div class=\"row\">
\t\t\t\t  \t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Nome</label>
\t\t\t\t    \t<input type=\"text\" required name=\"nome\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Digite seu nome\">
\t\t\t\t  \t</div>
\t\t\t\t  \t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Seu e-mail</label>
\t\t\t\t    \t<input type=\"email\" required name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Digite seu email\">
\t\t\t\t  \t</div>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"row\">
\t\t\t\t  \t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Telefone</label>
\t\t\t\t    \t<input type=\"text\" required name=\"telefone\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Ex: (35) 0000-0000 ou (16) 9-0000-0000\">
\t\t\t\t  \t</div>
\t\t\t\t  \t<div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-6\">
\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Assunto</label>
\t\t\t\t    \t<input type=\"text\" required name=\"assunto\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Digite o assunto\">
\t\t\t\t  \t</div>
\t\t\t\t  </div>

\t\t\t\t  <div class=\"row\">
\t\t\t\t  \t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t\t  \t\t<label for=\"exampleInputEmail1\">Mensagem</label>
\t\t\t\t  \t\t<textarea name=\"mensagem\" required cols=\"30\" rows=\"6\" placeholder=\"Digite sua mensagem aqui\"></textarea>
\t\t\t\t  \t</div>
\t\t\t\t  </div>
\t\t\t\t  
\t\t\t\t  <div class=\"row\">
\t\t\t\t  \t<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-right\">
\t\t\t\t  \t\t<button data-form=\"#fale-camara\" data-msg=\"Em breve responderemos!\" id=\"btn-enviar\" class=\"btn-enviar\" type=\"submit\">ENVIAR MENSAGEM</button>
\t\t\t\t  \t</div>
\t\t\t\t  \t<div class=\"col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-left\">
\t\t\t\t  \t\t<div id=\"mensagem-form\" data-element=\"mensagem-form\"></div>
\t\t\t\t  \t</div>
\t\t\t\t  </div>
\t\t\t\t</form>

\t\t\t</div>

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "fale-prefeitura.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
