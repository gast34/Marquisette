<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d80c45f7387fc14e584f8921add5d14468ed2a6eb636e9d7aac2d4c79cc58724 extends Twig_Template
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
        $__internal_52a3045e802370d1d0bea588f92dc6d567a820fc8951ab10f87ff6b82d53a00a = $this->env->getExtension("native_profiler");
        $__internal_52a3045e802370d1d0bea588f92dc6d567a820fc8951ab10f87ff6b82d53a00a->enter($__internal_52a3045e802370d1d0bea588f92dc6d567a820fc8951ab10f87ff6b82d53a00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_52a3045e802370d1d0bea588f92dc6d567a820fc8951ab10f87ff6b82d53a00a->leave($__internal_52a3045e802370d1d0bea588f92dc6d567a820fc8951ab10f87ff6b82d53a00a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
