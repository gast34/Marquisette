<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5aa7feaf4cca16934a4b14c0562f41c89de483d4a546bbb5a82088bd7ba62910 extends Twig_Template
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
        $__internal_9156ca040099190a30ef33fe5daad9d06bf4d5a67a04c9281caf8092877d1904 = $this->env->getExtension("native_profiler");
        $__internal_9156ca040099190a30ef33fe5daad9d06bf4d5a67a04c9281caf8092877d1904->enter($__internal_9156ca040099190a30ef33fe5daad9d06bf4d5a67a04c9281caf8092877d1904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_9156ca040099190a30ef33fe5daad9d06bf4d5a67a04c9281caf8092877d1904->leave($__internal_9156ca040099190a30ef33fe5daad9d06bf4d5a67a04c9281caf8092877d1904_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
