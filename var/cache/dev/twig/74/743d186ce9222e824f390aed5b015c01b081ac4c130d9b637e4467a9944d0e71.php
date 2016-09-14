<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0090100848ea14e8b93508ab0cbdd3b3a13dd8cbf5184091e122b3b0e89c1409 extends Twig_Template
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
        $__internal_b045f892639c9a9f18e260ed0f120f60984bba9e287dc7658051f8694702fdc8 = $this->env->getExtension("native_profiler");
        $__internal_b045f892639c9a9f18e260ed0f120f60984bba9e287dc7658051f8694702fdc8->enter($__internal_b045f892639c9a9f18e260ed0f120f60984bba9e287dc7658051f8694702fdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b045f892639c9a9f18e260ed0f120f60984bba9e287dc7658051f8694702fdc8->leave($__internal_b045f892639c9a9f18e260ed0f120f60984bba9e287dc7658051f8694702fdc8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
