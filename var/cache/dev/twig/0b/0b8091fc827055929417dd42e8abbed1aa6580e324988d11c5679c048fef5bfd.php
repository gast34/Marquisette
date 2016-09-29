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
        $__internal_849525ad8b642aa10a7b3ac8a183d19b7edd57f11d31992171086a7386dbf7d1 = $this->env->getExtension("native_profiler");
        $__internal_849525ad8b642aa10a7b3ac8a183d19b7edd57f11d31992171086a7386dbf7d1->enter($__internal_849525ad8b642aa10a7b3ac8a183d19b7edd57f11d31992171086a7386dbf7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849525ad8b642aa10a7b3ac8a183d19b7edd57f11d31992171086a7386dbf7d1->leave($__internal_849525ad8b642aa10a7b3ac8a183d19b7edd57f11d31992171086a7386dbf7d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5fa122790909e7b292728bc928f4ff53536fa20e56e37e7b11133bad69375480 = $this->env->getExtension("native_profiler");
        $__internal_5fa122790909e7b292728bc928f4ff53536fa20e56e37e7b11133bad69375480->enter($__internal_5fa122790909e7b292728bc928f4ff53536fa20e56e37e7b11133bad69375480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5fa122790909e7b292728bc928f4ff53536fa20e56e37e7b11133bad69375480->leave($__internal_5fa122790909e7b292728bc928f4ff53536fa20e56e37e7b11133bad69375480_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_029ea2e60794d262c1f34ee749bf2b49082d1386d42ff2f1ca509a3332e59ab6 = $this->env->getExtension("native_profiler");
        $__internal_029ea2e60794d262c1f34ee749bf2b49082d1386d42ff2f1ca509a3332e59ab6->enter($__internal_029ea2e60794d262c1f34ee749bf2b49082d1386d42ff2f1ca509a3332e59ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_029ea2e60794d262c1f34ee749bf2b49082d1386d42ff2f1ca509a3332e59ab6->leave($__internal_029ea2e60794d262c1f34ee749bf2b49082d1386d42ff2f1ca509a3332e59ab6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6173c8c48c799bab840d65f5e44fcbdd848d503eaaf5a01743307a1c6aa236d0 = $this->env->getExtension("native_profiler");
        $__internal_6173c8c48c799bab840d65f5e44fcbdd848d503eaaf5a01743307a1c6aa236d0->enter($__internal_6173c8c48c799bab840d65f5e44fcbdd848d503eaaf5a01743307a1c6aa236d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6173c8c48c799bab840d65f5e44fcbdd848d503eaaf5a01743307a1c6aa236d0->leave($__internal_6173c8c48c799bab840d65f5e44fcbdd848d503eaaf5a01743307a1c6aa236d0_prof);

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
