<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2b44bc3b5f36534a6d789c22b91fa826c9503680ee86964293b3c60f0f275fd4 extends Twig_Template
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
        $__internal_c6a7b68bae310f80e1581f78dd348f8ab199b1ecddc20c39f61077ec26c8e6f6 = $this->env->getExtension("native_profiler");
        $__internal_c6a7b68bae310f80e1581f78dd348f8ab199b1ecddc20c39f61077ec26c8e6f6->enter($__internal_c6a7b68bae310f80e1581f78dd348f8ab199b1ecddc20c39f61077ec26c8e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c6a7b68bae310f80e1581f78dd348f8ab199b1ecddc20c39f61077ec26c8e6f6->leave($__internal_c6a7b68bae310f80e1581f78dd348f8ab199b1ecddc20c39f61077ec26c8e6f6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
