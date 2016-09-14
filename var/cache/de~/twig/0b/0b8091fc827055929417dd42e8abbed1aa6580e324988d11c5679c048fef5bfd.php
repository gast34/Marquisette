<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a3cc78b8769a44f718327c42a5ae33225a8d4679c3e4e4bc68a7f51284e72bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a61f14124d26a94ea9ad9945223e5d3b7e077dd8fe3ab5f79b546a53d98d5a38 = $this->env->getExtension("native_profiler");
        $__internal_a61f14124d26a94ea9ad9945223e5d3b7e077dd8fe3ab5f79b546a53d98d5a38->enter($__internal_a61f14124d26a94ea9ad9945223e5d3b7e077dd8fe3ab5f79b546a53d98d5a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a61f14124d26a94ea9ad9945223e5d3b7e077dd8fe3ab5f79b546a53d98d5a38->leave($__internal_a61f14124d26a94ea9ad9945223e5d3b7e077dd8fe3ab5f79b546a53d98d5a38_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ea2c6fb169a333fe1ca2f2e42b714a47dfecc9b470357a6f69c2a9d95d8c93f = $this->env->getExtension("native_profiler");
        $__internal_0ea2c6fb169a333fe1ca2f2e42b714a47dfecc9b470357a6f69c2a9d95d8c93f->enter($__internal_0ea2c6fb169a333fe1ca2f2e42b714a47dfecc9b470357a6f69c2a9d95d8c93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0ea2c6fb169a333fe1ca2f2e42b714a47dfecc9b470357a6f69c2a9d95d8c93f->leave($__internal_0ea2c6fb169a333fe1ca2f2e42b714a47dfecc9b470357a6f69c2a9d95d8c93f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_907ca3add989de63d0fb56585d173ddc209736045a9b8cd3483762d8aaee026a = $this->env->getExtension("native_profiler");
        $__internal_907ca3add989de63d0fb56585d173ddc209736045a9b8cd3483762d8aaee026a->enter($__internal_907ca3add989de63d0fb56585d173ddc209736045a9b8cd3483762d8aaee026a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_907ca3add989de63d0fb56585d173ddc209736045a9b8cd3483762d8aaee026a->leave($__internal_907ca3add989de63d0fb56585d173ddc209736045a9b8cd3483762d8aaee026a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cc33c7d866fc1a21b8585b34a585c05c241de30b18b633e92b87aa2d9722d47 = $this->env->getExtension("native_profiler");
        $__internal_8cc33c7d866fc1a21b8585b34a585c05c241de30b18b633e92b87aa2d9722d47->enter($__internal_8cc33c7d866fc1a21b8585b34a585c05c241de30b18b633e92b87aa2d9722d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8cc33c7d866fc1a21b8585b34a585c05c241de30b18b633e92b87aa2d9722d47->leave($__internal_8cc33c7d866fc1a21b8585b34a585c05c241de30b18b633e92b87aa2d9722d47_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
