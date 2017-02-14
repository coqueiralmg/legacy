<?php

/* prefeitura.html */
class __TwigTemplate_0521dc226a8c41ed5b7e7d057b2797b835cd57330bc38425b108da286d23f850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "prefeitura.html", 1);
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
\t<div id=\"camara\" class=\"row\">
\t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
\t\t\t
\t\t\t<h1>A PREFEITURA</h1>
\t\t\t<hr />
\t\t\t
\t\t\t<img title=\"Prefeitura Municipal de Coqueiral MG\" alt=\"Prefeitura Municipal de Coqueiral MG\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('siteUrl')->getCallable(), array()), "html", null, true);
        echo "/public/img/primeira-camara.jpg\" class=\"float-right img padding-10\">

\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mattis vehicula tempus. Pellentesque tempor venenatis ex, sit amet fringilla felis imperdiet vel. Nullam ultrices nulla a sodales hendrerit. Fusce ligula enim, mattis vel velit vitae, molestie luctus ex. Nunc tincidunt semper mollis. Vivamus dignissim rhoncus libero. Vestibulum tristique finibus ipsum sed laoreet. Pellentesque fringilla convallis turpis, in placerat lacus. Proin at nulla imperdiet augue ullamcorper efficitur in eget arcu. Nam vulputate dignissim enim, a sagittis diam congue in. Nam vel urna nulla.</p>
\t\t\t<p>Curabitur posuere felis in orci pretium scelerisque. Maecenas hendrerit ultrices porttitor. Vestibulum pellentesque nulla finibus eros aliquet egestas. Integer id odio tortor. Sed fermentum feugiat dictum. Nunc eget pellentesque odio. Aenean sollicitudin tristique bibendum. Duis cursus tortor odio, nec vestibulum est facilisis ac. Aenean auctor turpis venenatis quam volutpat, accumsan dictum risus vehicula.</p>
\t\t\t<p>Sed mollis libero orci, imperdiet faucibus nunc rhoncus quis. Sed venenatis augue vel mauris viverra, a pulvinar dui venenatis. Duis vel rutrum augue. In ultricies eros at urna ultricies fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ut tortor at elit iaculis varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed turpis ipsum, tempor vitae massa ut, fermentum eleifend mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ut pulvinar ipsum, at consequat nibh. Proin ut tempus sapien. Cras lectus nulla, bibendum sed dictum eget, porta feugiat purus. Suspendisse aliquet non orci vitae commodo. Praesent nec sagittis ligula. Ut tempor efficitur nulla, ac eleifend tellus.</p>
\t\t\t<p>Vestibulum sed metus nisl. Duis ex quam, pellentesque id nisi et, posuere ornare lacus. Praesent fermentum efficitur enim ac gravida. Mauris finibus, purus quis sollicitudin interdum, ante lectus convallis nisi, rutrum dictum elit risus ut justo. Ut viverra consequat porta. Sed venenatis ut metus nec mattis. Fusce eget neque condimentum, pretium dui a, ullamcorper eros. Vestibulum facilisis dictum purus id eleifend. Nulla suscipit dui ac ante congue, non ullamcorper erat tincidunt. Curabitur arcu dolor, lobortis sed quam sed, fringilla congue velit.</p>
\t\t\t<p>Pellentesque eget ex tortor. Nunc ullamcorper hendrerit dolor et tincidunt. Sed facilisis vel orci a hendrerit. Vivamus interdum massa metus, ac posuere leo aliquam ac. Nulla facilisi. Quisque sed lorem ipsum. Maecenas in posuere risus. Vivamus nec nunc vel nisl accumsan tincidunt. Sed eu velit porta, finibus sapien sed, rhoncus urna. Nullam at felis et eros lacinia condimentum.</p>
\t\t\t<p>Nam quis enim sit amet nunc ultrices iaculis. Praesent ullamcorper facilisis turpis, eget feugiat sem auctor at. Vivamus tincidunt lorem quis dolor tristique, id venenatis urna convallis. Nullam a convallis eros. Etiam accumsan dui sem, vel aliquet lectus placerat eget. Donec facilisis nulla leo, id tempus purus commodo eu. Duis lobortis metus quam, eu molestie dui tempus et. Aenean vulputate metus eu ex congue molestie. Sed ut elementum odio, eget commodo nunc. Duis et eleifend ante. Nam velit magna, sodales eu enim eget, auctor bibendum ligula. Nam vulputate sed ex at molestie. Sed eget congue orci.</p>

\t\t</div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "prefeitura.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
