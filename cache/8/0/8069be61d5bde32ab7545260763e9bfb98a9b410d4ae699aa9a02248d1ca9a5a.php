<?php

/* admin/tipo-prefeito/novo.html */
class __TwigTemplate_8069be61d5bde32ab7545260763e9bfb98a9b410d4ae699aa9a02248d1ca9a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/tipo-prefeito/novo.html", 1);
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
\t<h1>Novo Tipo de Prefeito</h1>

\t<form method=\"post\" action=\"/admin/painel/tipo-prefeito/novo\">
\t  <div class=\"form-group\">
\t    <label for=\"exampleInputEmail1\">Descrição</label>
\t    <input type=\"text\" name=\"tipo-descricao\" maxlength=\"45\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Digite a descrição\">
\t  </div>
\t  <button type=\"submit\" class=\"btn btn-primary\">Cadastrar</button>
\t  <a href=\"/admin/painel/tipo-prefeito\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 16
        if (array_key_exists("erro", $context)) {
            // line 17
            echo "\t\t<br />
\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            // line 18
            echo (isset($context["erro"]) ? $context["erro"] : null);
            echo "</div>
\t";
        }
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/tipo-prefeito/novo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  50 => 18,  47 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
