<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_834bf7089dc9e3007865d7fdf2a305f71d6fa89fff86254096875c435e7ab308 extends Twig_Template
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
        $__internal_f57f78f00f9aeb4b742a4553cffdfb7dfc47712219aa6d66941982833e1b6f5c = $this->env->getExtension("native_profiler");
        $__internal_f57f78f00f9aeb4b742a4553cffdfb7dfc47712219aa6d66941982833e1b6f5c->enter($__internal_f57f78f00f9aeb4b742a4553cffdfb7dfc47712219aa6d66941982833e1b6f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f57f78f00f9aeb4b742a4553cffdfb7dfc47712219aa6d66941982833e1b6f5c->leave($__internal_f57f78f00f9aeb4b742a4553cffdfb7dfc47712219aa6d66941982833e1b6f5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
