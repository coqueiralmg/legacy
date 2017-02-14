<?php

/* admin/legislacao/multiple-upload.html */
class __TwigTemplate_f5fec8cb5565d2d9b6f4703564d32711f3a621c61dea6a3d764d26c821da31de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("./admin/layout.html", "admin/legislacao/multiple-upload.html", 1);
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
\t<h1>Upload Múltiplo de Legislações</h1>


\t<form method=\"post\" action=\"/admin/painel/legislacao/multiple-upload\" enctype=\"multipart/form-data\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-4\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"exampleInputEmail1\">Selecione todos os arquivos de uma vez:</label>
\t\t\t\t\t<input type=\"file\" required multiple name=\"legislacao-arquivos[]\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Subir Arquivos</button>
\t\t<a href=\"/admin/painel/legislacao\" class=\"btn btn-default\" id=\"btn-cancelar\">Cancelar</a>
\t</form>

\t";
        // line 23
        if (array_key_exists("mensagem", $context)) {
            // line 24
            echo "\t\t<br />
\t\t<div class=\"alert alert-info\" role=\"alert\">";
            // line 25
            echo (isset($context["mensagem"]) ? $context["mensagem"] : null);
            echo "</div>
\t";
        }
        // line 27
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin/legislacao/multiple-upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 27,  57 => 25,  54 => 24,  52 => 23,  31 => 4,  28 => 3,  11 => 1,);
    }
}
