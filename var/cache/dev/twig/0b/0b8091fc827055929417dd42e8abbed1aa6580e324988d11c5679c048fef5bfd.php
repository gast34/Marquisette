<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a3cc78b8769a44f718327c42a5ae33225a8d4679c3e4e4bc68a7f51284e72bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_55452cc6dd7cf4325d6e6bdf9404d776ee26ce848baa70d07365a45e283f9e12 = $this->env->getExtension("native_profiler");
        $__internal_55452cc6dd7cf4325d6e6bdf9404d776ee26ce848baa70d07365a45e283f9e12->enter($__internal_55452cc6dd7cf4325d6e6bdf9404d776ee26ce848baa70d07365a45e283f9e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55452cc6dd7cf4325d6e6bdf9404d776ee26ce848baa70d07365a45e283f9e12->leave($__internal_55452cc6dd7cf4325d6e6bdf9404d776ee26ce848baa70d07365a45e283f9e12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_342110076fa1861baa07568fcc14c1bd24366ce5c0156b64a0c6258cd3c143b9 = $this->env->getExtension("native_profiler");
        $__internal_342110076fa1861baa07568fcc14c1bd24366ce5c0156b64a0c6258cd3c143b9->enter($__internal_342110076fa1861baa07568fcc14c1bd24366ce5c0156b64a0c6258cd3c143b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_342110076fa1861baa07568fcc14c1bd24366ce5c0156b64a0c6258cd3c143b9->leave($__internal_342110076fa1861baa07568fcc14c1bd24366ce5c0156b64a0c6258cd3c143b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8dabcee9490ebe3360425633f9f77876c39a1bf14639f4ee19c4f56399cb9cd = $this->env->getExtension("native_profiler");
        $__internal_a8dabcee9490ebe3360425633f9f77876c39a1bf14639f4ee19c4f56399cb9cd->enter($__internal_a8dabcee9490ebe3360425633f9f77876c39a1bf14639f4ee19c4f56399cb9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8dabcee9490ebe3360425633f9f77876c39a1bf14639f4ee19c4f56399cb9cd->leave($__internal_a8dabcee9490ebe3360425633f9f77876c39a1bf14639f4ee19c4f56399cb9cd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f065e26bb4fe6043dea176cffe6adf45f1b76ba4ed48a8d21796295be32d3d73 = $this->env->getExtension("native_profiler");
        $__internal_f065e26bb4fe6043dea176cffe6adf45f1b76ba4ed48a8d21796295be32d3d73->enter($__internal_f065e26bb4fe6043dea176cffe6adf45f1b76ba4ed48a8d21796295be32d3d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f065e26bb4fe6043dea176cffe6adf45f1b76ba4ed48a8d21796295be32d3d73->leave($__internal_f065e26bb4fe6043dea176cffe6adf45f1b76ba4ed48a8d21796295be32d3d73_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
