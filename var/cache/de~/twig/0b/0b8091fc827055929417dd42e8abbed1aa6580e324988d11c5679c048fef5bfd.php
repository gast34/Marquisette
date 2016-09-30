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
        $__internal_3ba0475317818cc12217f8fbf17b0959c588cf167df2f72088f5247a27b44181 = $this->env->getExtension("native_profiler");
        $__internal_3ba0475317818cc12217f8fbf17b0959c588cf167df2f72088f5247a27b44181->enter($__internal_3ba0475317818cc12217f8fbf17b0959c588cf167df2f72088f5247a27b44181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ba0475317818cc12217f8fbf17b0959c588cf167df2f72088f5247a27b44181->leave($__internal_3ba0475317818cc12217f8fbf17b0959c588cf167df2f72088f5247a27b44181_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fadde75d2767c32afcc76696358266b6f73ad603edb2de4a83a2dc28a208057a = $this->env->getExtension("native_profiler");
        $__internal_fadde75d2767c32afcc76696358266b6f73ad603edb2de4a83a2dc28a208057a->enter($__internal_fadde75d2767c32afcc76696358266b6f73ad603edb2de4a83a2dc28a208057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fadde75d2767c32afcc76696358266b6f73ad603edb2de4a83a2dc28a208057a->leave($__internal_fadde75d2767c32afcc76696358266b6f73ad603edb2de4a83a2dc28a208057a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e720cc33bdff18367bbf4a43dbdf1a09d8a6eae7b2c3bba604ac2da6a3103ee = $this->env->getExtension("native_profiler");
        $__internal_8e720cc33bdff18367bbf4a43dbdf1a09d8a6eae7b2c3bba604ac2da6a3103ee->enter($__internal_8e720cc33bdff18367bbf4a43dbdf1a09d8a6eae7b2c3bba604ac2da6a3103ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8e720cc33bdff18367bbf4a43dbdf1a09d8a6eae7b2c3bba604ac2da6a3103ee->leave($__internal_8e720cc33bdff18367bbf4a43dbdf1a09d8a6eae7b2c3bba604ac2da6a3103ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_101e5601702afb18450305f9bad99b7b02237de3c0f4bf84f3bdf7a81c000dd2 = $this->env->getExtension("native_profiler");
        $__internal_101e5601702afb18450305f9bad99b7b02237de3c0f4bf84f3bdf7a81c000dd2->enter($__internal_101e5601702afb18450305f9bad99b7b02237de3c0f4bf84f3bdf7a81c000dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_101e5601702afb18450305f9bad99b7b02237de3c0f4bf84f3bdf7a81c000dd2->leave($__internal_101e5601702afb18450305f9bad99b7b02237de3c0f4bf84f3bdf7a81c000dd2_prof);

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
