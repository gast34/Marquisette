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
        $__internal_6896755e16022c3dccc4ccfe2e87818f0302e1929da3038a9f28d69b1c845d4b = $this->env->getExtension("native_profiler");
        $__internal_6896755e16022c3dccc4ccfe2e87818f0302e1929da3038a9f28d69b1c845d4b->enter($__internal_6896755e16022c3dccc4ccfe2e87818f0302e1929da3038a9f28d69b1c845d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6896755e16022c3dccc4ccfe2e87818f0302e1929da3038a9f28d69b1c845d4b->leave($__internal_6896755e16022c3dccc4ccfe2e87818f0302e1929da3038a9f28d69b1c845d4b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f30009a1dbe1b9aad4b41a6b7eab7a6705b448843ffe7cc9a45032b85e22636d = $this->env->getExtension("native_profiler");
        $__internal_f30009a1dbe1b9aad4b41a6b7eab7a6705b448843ffe7cc9a45032b85e22636d->enter($__internal_f30009a1dbe1b9aad4b41a6b7eab7a6705b448843ffe7cc9a45032b85e22636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f30009a1dbe1b9aad4b41a6b7eab7a6705b448843ffe7cc9a45032b85e22636d->leave($__internal_f30009a1dbe1b9aad4b41a6b7eab7a6705b448843ffe7cc9a45032b85e22636d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03385283f1069b87b18863517e03581d7d8d42c589a75f095842aea7f5de0c65 = $this->env->getExtension("native_profiler");
        $__internal_03385283f1069b87b18863517e03581d7d8d42c589a75f095842aea7f5de0c65->enter($__internal_03385283f1069b87b18863517e03581d7d8d42c589a75f095842aea7f5de0c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03385283f1069b87b18863517e03581d7d8d42c589a75f095842aea7f5de0c65->leave($__internal_03385283f1069b87b18863517e03581d7d8d42c589a75f095842aea7f5de0c65_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ae5a80b4189156fa6eee9931433e3e7a21b0222cd299e0367c699b76a62f5b9 = $this->env->getExtension("native_profiler");
        $__internal_4ae5a80b4189156fa6eee9931433e3e7a21b0222cd299e0367c699b76a62f5b9->enter($__internal_4ae5a80b4189156fa6eee9931433e3e7a21b0222cd299e0367c699b76a62f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ae5a80b4189156fa6eee9931433e3e7a21b0222cd299e0367c699b76a62f5b9->leave($__internal_4ae5a80b4189156fa6eee9931433e3e7a21b0222cd299e0367c699b76a62f5b9_prof);

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
