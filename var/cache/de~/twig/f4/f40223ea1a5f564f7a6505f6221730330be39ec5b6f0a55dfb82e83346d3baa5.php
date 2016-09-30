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
        $__internal_0f423d119fc95294034cbdc879a2d4ff859afb6d7f05f97088ca19d5f8ee2e99 = $this->env->getExtension("native_profiler");
        $__internal_0f423d119fc95294034cbdc879a2d4ff859afb6d7f05f97088ca19d5f8ee2e99->enter($__internal_0f423d119fc95294034cbdc879a2d4ff859afb6d7f05f97088ca19d5f8ee2e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f423d119fc95294034cbdc879a2d4ff859afb6d7f05f97088ca19d5f8ee2e99->leave($__internal_0f423d119fc95294034cbdc879a2d4ff859afb6d7f05f97088ca19d5f8ee2e99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7faa49b7a66a9afbbc8cddb7817d47da780b974485975e3247a5b13a9f7ddded = $this->env->getExtension("native_profiler");
        $__internal_7faa49b7a66a9afbbc8cddb7817d47da780b974485975e3247a5b13a9f7ddded->enter($__internal_7faa49b7a66a9afbbc8cddb7817d47da780b974485975e3247a5b13a9f7ddded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7faa49b7a66a9afbbc8cddb7817d47da780b974485975e3247a5b13a9f7ddded->leave($__internal_7faa49b7a66a9afbbc8cddb7817d47da780b974485975e3247a5b13a9f7ddded_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cff948a49ec1e415e6b2e1f0dc90b992cd5ea7f1633ab41d9a5a83976e13e299 = $this->env->getExtension("native_profiler");
        $__internal_cff948a49ec1e415e6b2e1f0dc90b992cd5ea7f1633ab41d9a5a83976e13e299->enter($__internal_cff948a49ec1e415e6b2e1f0dc90b992cd5ea7f1633ab41d9a5a83976e13e299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cff948a49ec1e415e6b2e1f0dc90b992cd5ea7f1633ab41d9a5a83976e13e299->leave($__internal_cff948a49ec1e415e6b2e1f0dc90b992cd5ea7f1633ab41d9a5a83976e13e299_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1f3383b90dd0099b3c80a831fdffc86731863026b1020669c87e2be84e962d6b = $this->env->getExtension("native_profiler");
        $__internal_1f3383b90dd0099b3c80a831fdffc86731863026b1020669c87e2be84e962d6b->enter($__internal_1f3383b90dd0099b3c80a831fdffc86731863026b1020669c87e2be84e962d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f3383b90dd0099b3c80a831fdffc86731863026b1020669c87e2be84e962d6b->leave($__internal_1f3383b90dd0099b3c80a831fdffc86731863026b1020669c87e2be84e962d6b_prof);

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
