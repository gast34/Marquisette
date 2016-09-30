<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1808194f265efa1157abd2192444d67fca7df7a751f11058055f4cf3304f83a2 extends Twig_Template
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
        $__internal_f7b96600d422df653a9ea57c3990fc2ea2d01ac5f92ca55166e5651c111fad53 = $this->env->getExtension("native_profiler");
        $__internal_f7b96600d422df653a9ea57c3990fc2ea2d01ac5f92ca55166e5651c111fad53->enter($__internal_f7b96600d422df653a9ea57c3990fc2ea2d01ac5f92ca55166e5651c111fad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f7b96600d422df653a9ea57c3990fc2ea2d01ac5f92ca55166e5651c111fad53->leave($__internal_f7b96600d422df653a9ea57c3990fc2ea2d01ac5f92ca55166e5651c111fad53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
