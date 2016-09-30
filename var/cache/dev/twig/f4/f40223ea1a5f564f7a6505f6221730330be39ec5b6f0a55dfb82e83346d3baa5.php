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
        $__internal_eb920af5769b06e6821ba7e54551cfb9cb3b5b2d0556c27cedb9e9d859e9037e = $this->env->getExtension("native_profiler");
        $__internal_eb920af5769b06e6821ba7e54551cfb9cb3b5b2d0556c27cedb9e9d859e9037e->enter($__internal_eb920af5769b06e6821ba7e54551cfb9cb3b5b2d0556c27cedb9e9d859e9037e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb920af5769b06e6821ba7e54551cfb9cb3b5b2d0556c27cedb9e9d859e9037e->leave($__internal_eb920af5769b06e6821ba7e54551cfb9cb3b5b2d0556c27cedb9e9d859e9037e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c1ff6315b7840d70edc1a47e2d172be1ac5d445175153b583c21a4a8beb4e9d = $this->env->getExtension("native_profiler");
        $__internal_8c1ff6315b7840d70edc1a47e2d172be1ac5d445175153b583c21a4a8beb4e9d->enter($__internal_8c1ff6315b7840d70edc1a47e2d172be1ac5d445175153b583c21a4a8beb4e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c1ff6315b7840d70edc1a47e2d172be1ac5d445175153b583c21a4a8beb4e9d->leave($__internal_8c1ff6315b7840d70edc1a47e2d172be1ac5d445175153b583c21a4a8beb4e9d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6a65f36afa0b696ce93178fd83bc0506ccbfe9cd6d11a5d46bc636c917d53c2 = $this->env->getExtension("native_profiler");
        $__internal_a6a65f36afa0b696ce93178fd83bc0506ccbfe9cd6d11a5d46bc636c917d53c2->enter($__internal_a6a65f36afa0b696ce93178fd83bc0506ccbfe9cd6d11a5d46bc636c917d53c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a6a65f36afa0b696ce93178fd83bc0506ccbfe9cd6d11a5d46bc636c917d53c2->leave($__internal_a6a65f36afa0b696ce93178fd83bc0506ccbfe9cd6d11a5d46bc636c917d53c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26d83f186f8e319718b5a26d67d39044e27ace31faba41d9223e0222027fa80e = $this->env->getExtension("native_profiler");
        $__internal_26d83f186f8e319718b5a26d67d39044e27ace31faba41d9223e0222027fa80e->enter($__internal_26d83f186f8e319718b5a26d67d39044e27ace31faba41d9223e0222027fa80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26d83f186f8e319718b5a26d67d39044e27ace31faba41d9223e0222027fa80e->leave($__internal_26d83f186f8e319718b5a26d67d39044e27ace31faba41d9223e0222027fa80e_prof);

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
