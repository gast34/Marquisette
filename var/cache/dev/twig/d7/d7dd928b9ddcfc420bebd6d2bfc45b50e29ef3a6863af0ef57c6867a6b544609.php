<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_68ecd15b057547ef02596888863571282c5ca81e9a4edacd46866ca668105cbb extends Twig_Template
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
        $__internal_e5ce0e9dedf282d037f29a5e02d5efa1ee75eb448f26c163a70951a4168c2fd2 = $this->env->getExtension("native_profiler");
        $__internal_e5ce0e9dedf282d037f29a5e02d5efa1ee75eb448f26c163a70951a4168c2fd2->enter($__internal_e5ce0e9dedf282d037f29a5e02d5efa1ee75eb448f26c163a70951a4168c2fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e5ce0e9dedf282d037f29a5e02d5efa1ee75eb448f26c163a70951a4168c2fd2->leave($__internal_e5ce0e9dedf282d037f29a5e02d5efa1ee75eb448f26c163a70951a4168c2fd2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
