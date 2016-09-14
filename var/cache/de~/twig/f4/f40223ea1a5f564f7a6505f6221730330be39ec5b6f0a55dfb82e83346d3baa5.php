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
        $__internal_01da3aaa8bf788f97318bf75f08aa99703c0beb1debc1a90ce40a0ad9da0f994 = $this->env->getExtension("native_profiler");
        $__internal_01da3aaa8bf788f97318bf75f08aa99703c0beb1debc1a90ce40a0ad9da0f994->enter($__internal_01da3aaa8bf788f97318bf75f08aa99703c0beb1debc1a90ce40a0ad9da0f994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01da3aaa8bf788f97318bf75f08aa99703c0beb1debc1a90ce40a0ad9da0f994->leave($__internal_01da3aaa8bf788f97318bf75f08aa99703c0beb1debc1a90ce40a0ad9da0f994_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9423a74cd4236a4144d2408b96f6102906eb66eae97372603d55d7bc4a99f065 = $this->env->getExtension("native_profiler");
        $__internal_9423a74cd4236a4144d2408b96f6102906eb66eae97372603d55d7bc4a99f065->enter($__internal_9423a74cd4236a4144d2408b96f6102906eb66eae97372603d55d7bc4a99f065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9423a74cd4236a4144d2408b96f6102906eb66eae97372603d55d7bc4a99f065->leave($__internal_9423a74cd4236a4144d2408b96f6102906eb66eae97372603d55d7bc4a99f065_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0c38ed5606c19e2ed134cf709c5c3d954930bb195b2c239d5ccb9e4e0a38ee7 = $this->env->getExtension("native_profiler");
        $__internal_c0c38ed5606c19e2ed134cf709c5c3d954930bb195b2c239d5ccb9e4e0a38ee7->enter($__internal_c0c38ed5606c19e2ed134cf709c5c3d954930bb195b2c239d5ccb9e4e0a38ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0c38ed5606c19e2ed134cf709c5c3d954930bb195b2c239d5ccb9e4e0a38ee7->leave($__internal_c0c38ed5606c19e2ed134cf709c5c3d954930bb195b2c239d5ccb9e4e0a38ee7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a4a2c8483dd9a85b76ab0b80e349cf1e648d479493513ab036a3e47c3a8fbb9 = $this->env->getExtension("native_profiler");
        $__internal_0a4a2c8483dd9a85b76ab0b80e349cf1e648d479493513ab036a3e47c3a8fbb9->enter($__internal_0a4a2c8483dd9a85b76ab0b80e349cf1e648d479493513ab036a3e47c3a8fbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0a4a2c8483dd9a85b76ab0b80e349cf1e648d479493513ab036a3e47c3a8fbb9->leave($__internal_0a4a2c8483dd9a85b76ab0b80e349cf1e648d479493513ab036a3e47c3a8fbb9_prof);

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
