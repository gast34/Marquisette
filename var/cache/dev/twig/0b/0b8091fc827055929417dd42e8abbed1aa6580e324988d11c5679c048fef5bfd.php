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
        $__internal_900deae1d62aa27f8efa35aa02518ab96b0972c2f4475903a2125663b7b6773d = $this->env->getExtension("native_profiler");
        $__internal_900deae1d62aa27f8efa35aa02518ab96b0972c2f4475903a2125663b7b6773d->enter($__internal_900deae1d62aa27f8efa35aa02518ab96b0972c2f4475903a2125663b7b6773d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900deae1d62aa27f8efa35aa02518ab96b0972c2f4475903a2125663b7b6773d->leave($__internal_900deae1d62aa27f8efa35aa02518ab96b0972c2f4475903a2125663b7b6773d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ccaa0476075977ec1c02439b4188066be69a7925b1c7f283b042ad5df6210b1 = $this->env->getExtension("native_profiler");
        $__internal_4ccaa0476075977ec1c02439b4188066be69a7925b1c7f283b042ad5df6210b1->enter($__internal_4ccaa0476075977ec1c02439b4188066be69a7925b1c7f283b042ad5df6210b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4ccaa0476075977ec1c02439b4188066be69a7925b1c7f283b042ad5df6210b1->leave($__internal_4ccaa0476075977ec1c02439b4188066be69a7925b1c7f283b042ad5df6210b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34e02368ced4b1671268648a51ba7014184a39bc1ab0a34def81646cf61e8f2e = $this->env->getExtension("native_profiler");
        $__internal_34e02368ced4b1671268648a51ba7014184a39bc1ab0a34def81646cf61e8f2e->enter($__internal_34e02368ced4b1671268648a51ba7014184a39bc1ab0a34def81646cf61e8f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_34e02368ced4b1671268648a51ba7014184a39bc1ab0a34def81646cf61e8f2e->leave($__internal_34e02368ced4b1671268648a51ba7014184a39bc1ab0a34def81646cf61e8f2e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46e5ffb100be556a6fe0eb59429545c2a17252685a51ae4589d7a234770daa97 = $this->env->getExtension("native_profiler");
        $__internal_46e5ffb100be556a6fe0eb59429545c2a17252685a51ae4589d7a234770daa97->enter($__internal_46e5ffb100be556a6fe0eb59429545c2a17252685a51ae4589d7a234770daa97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_46e5ffb100be556a6fe0eb59429545c2a17252685a51ae4589d7a234770daa97->leave($__internal_46e5ffb100be556a6fe0eb59429545c2a17252685a51ae4589d7a234770daa97_prof);

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
