<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_66f078cf0f7adddc20e352279701b43c9bdca1d0d42e46672f4d50e81709958c extends Twig_Template
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
        $__internal_b04e2c048d09edf09b87a99a9703123aae9ef11579c4b397a507a07fb1679a57 = $this->env->getExtension("native_profiler");
        $__internal_b04e2c048d09edf09b87a99a9703123aae9ef11579c4b397a507a07fb1679a57->enter($__internal_b04e2c048d09edf09b87a99a9703123aae9ef11579c4b397a507a07fb1679a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_b04e2c048d09edf09b87a99a9703123aae9ef11579c4b397a507a07fb1679a57->leave($__internal_b04e2c048d09edf09b87a99a9703123aae9ef11579c4b397a507a07fb1679a57_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
