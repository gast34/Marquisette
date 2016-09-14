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
        $__internal_d6b96ce2b65e8b79182d32c452d82c59e9919ff324c0815892e662c1742fe5ea = $this->env->getExtension("native_profiler");
        $__internal_d6b96ce2b65e8b79182d32c452d82c59e9919ff324c0815892e662c1742fe5ea->enter($__internal_d6b96ce2b65e8b79182d32c452d82c59e9919ff324c0815892e662c1742fe5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b96ce2b65e8b79182d32c452d82c59e9919ff324c0815892e662c1742fe5ea->leave($__internal_d6b96ce2b65e8b79182d32c452d82c59e9919ff324c0815892e662c1742fe5ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8d051d95af048871f344a24c2de5e468a1d2ee3368ebd8aaa2d6ab6e0127396 = $this->env->getExtension("native_profiler");
        $__internal_a8d051d95af048871f344a24c2de5e468a1d2ee3368ebd8aaa2d6ab6e0127396->enter($__internal_a8d051d95af048871f344a24c2de5e468a1d2ee3368ebd8aaa2d6ab6e0127396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8d051d95af048871f344a24c2de5e468a1d2ee3368ebd8aaa2d6ab6e0127396->leave($__internal_a8d051d95af048871f344a24c2de5e468a1d2ee3368ebd8aaa2d6ab6e0127396_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd6d9c01f15336bba06159d9254222cc781bc13dd17b02263ba565ead4cdd58b = $this->env->getExtension("native_profiler");
        $__internal_bd6d9c01f15336bba06159d9254222cc781bc13dd17b02263ba565ead4cdd58b->enter($__internal_bd6d9c01f15336bba06159d9254222cc781bc13dd17b02263ba565ead4cdd58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bd6d9c01f15336bba06159d9254222cc781bc13dd17b02263ba565ead4cdd58b->leave($__internal_bd6d9c01f15336bba06159d9254222cc781bc13dd17b02263ba565ead4cdd58b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eeb5e7b448ce292897429f4fb62580ab686dde142f21c55fe8e5a0ba4895873 = $this->env->getExtension("native_profiler");
        $__internal_9eeb5e7b448ce292897429f4fb62580ab686dde142f21c55fe8e5a0ba4895873->enter($__internal_9eeb5e7b448ce292897429f4fb62580ab686dde142f21c55fe8e5a0ba4895873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9eeb5e7b448ce292897429f4fb62580ab686dde142f21c55fe8e5a0ba4895873->leave($__internal_9eeb5e7b448ce292897429f4fb62580ab686dde142f21c55fe8e5a0ba4895873_prof);

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
