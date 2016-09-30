<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_53fbaf8d68da0b132680e56cf2c452e6e5c18c23a852f6f3738778407eebf2b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5e421be3f51147e2349b61e3892da7351d7d9363b63b56d102c224c0fc16c28 = $this->env->getExtension("native_profiler");
        $__internal_f5e421be3f51147e2349b61e3892da7351d7d9363b63b56d102c224c0fc16c28->enter($__internal_f5e421be3f51147e2349b61e3892da7351d7d9363b63b56d102c224c0fc16c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5e421be3f51147e2349b61e3892da7351d7d9363b63b56d102c224c0fc16c28->leave($__internal_f5e421be3f51147e2349b61e3892da7351d7d9363b63b56d102c224c0fc16c28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4f2b70c541b011ab525f868ae225e9fb4f1db3fe8740a3a155c51172dddcf06e = $this->env->getExtension("native_profiler");
        $__internal_4f2b70c541b011ab525f868ae225e9fb4f1db3fe8740a3a155c51172dddcf06e->enter($__internal_4f2b70c541b011ab525f868ae225e9fb4f1db3fe8740a3a155c51172dddcf06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4f2b70c541b011ab525f868ae225e9fb4f1db3fe8740a3a155c51172dddcf06e->leave($__internal_4f2b70c541b011ab525f868ae225e9fb4f1db3fe8740a3a155c51172dddcf06e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f081ccce445018e8c845a7ccce26ab7eacdebfcf314c6793c4fff0982646e7d = $this->env->getExtension("native_profiler");
        $__internal_9f081ccce445018e8c845a7ccce26ab7eacdebfcf314c6793c4fff0982646e7d->enter($__internal_9f081ccce445018e8c845a7ccce26ab7eacdebfcf314c6793c4fff0982646e7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f081ccce445018e8c845a7ccce26ab7eacdebfcf314c6793c4fff0982646e7d->leave($__internal_9f081ccce445018e8c845a7ccce26ab7eacdebfcf314c6793c4fff0982646e7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_46a267eb31cbe0734f3164783af91242bdc9d89cb04a1e29512432aaf57220bd = $this->env->getExtension("native_profiler");
        $__internal_46a267eb31cbe0734f3164783af91242bdc9d89cb04a1e29512432aaf57220bd->enter($__internal_46a267eb31cbe0734f3164783af91242bdc9d89cb04a1e29512432aaf57220bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46a267eb31cbe0734f3164783af91242bdc9d89cb04a1e29512432aaf57220bd->leave($__internal_46a267eb31cbe0734f3164783af91242bdc9d89cb04a1e29512432aaf57220bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
