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
        $__internal_eb5cabd29708cad5860f023ba76db130ef30067fd43fa2edb60c82121dc0fe42 = $this->env->getExtension("native_profiler");
        $__internal_eb5cabd29708cad5860f023ba76db130ef30067fd43fa2edb60c82121dc0fe42->enter($__internal_eb5cabd29708cad5860f023ba76db130ef30067fd43fa2edb60c82121dc0fe42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5cabd29708cad5860f023ba76db130ef30067fd43fa2edb60c82121dc0fe42->leave($__internal_eb5cabd29708cad5860f023ba76db130ef30067fd43fa2edb60c82121dc0fe42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54d47b10738312d5ac8cc1ffe031b5464c96986554b15007779417550c977888 = $this->env->getExtension("native_profiler");
        $__internal_54d47b10738312d5ac8cc1ffe031b5464c96986554b15007779417550c977888->enter($__internal_54d47b10738312d5ac8cc1ffe031b5464c96986554b15007779417550c977888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54d47b10738312d5ac8cc1ffe031b5464c96986554b15007779417550c977888->leave($__internal_54d47b10738312d5ac8cc1ffe031b5464c96986554b15007779417550c977888_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e6d14eab71f841e1897506e2392c043f0ed9642afb592015528da58176a8067 = $this->env->getExtension("native_profiler");
        $__internal_9e6d14eab71f841e1897506e2392c043f0ed9642afb592015528da58176a8067->enter($__internal_9e6d14eab71f841e1897506e2392c043f0ed9642afb592015528da58176a8067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9e6d14eab71f841e1897506e2392c043f0ed9642afb592015528da58176a8067->leave($__internal_9e6d14eab71f841e1897506e2392c043f0ed9642afb592015528da58176a8067_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3f5509f4944d7be39023e1ccabffe4efa551b4ccf315be127c42ffadfaea83de = $this->env->getExtension("native_profiler");
        $__internal_3f5509f4944d7be39023e1ccabffe4efa551b4ccf315be127c42ffadfaea83de->enter($__internal_3f5509f4944d7be39023e1ccabffe4efa551b4ccf315be127c42ffadfaea83de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3f5509f4944d7be39023e1ccabffe4efa551b4ccf315be127c42ffadfaea83de->leave($__internal_3f5509f4944d7be39023e1ccabffe4efa551b4ccf315be127c42ffadfaea83de_prof);

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
