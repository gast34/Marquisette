<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6724afbdf754efc403e9f32ce9e44c17035ddbd17e17d93488e60e11d8250d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7dfac9f8a9cf400b6777989c936fcbebfb72dcea2a7a89d9806f6fc2094bfb6b = $this->env->getExtension("native_profiler");
        $__internal_7dfac9f8a9cf400b6777989c936fcbebfb72dcea2a7a89d9806f6fc2094bfb6b->enter($__internal_7dfac9f8a9cf400b6777989c936fcbebfb72dcea2a7a89d9806f6fc2094bfb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7dfac9f8a9cf400b6777989c936fcbebfb72dcea2a7a89d9806f6fc2094bfb6b->leave($__internal_7dfac9f8a9cf400b6777989c936fcbebfb72dcea2a7a89d9806f6fc2094bfb6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
