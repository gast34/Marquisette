<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_986fdd52473277b30781baccdebbe4838e80b1915ab39bb0ba5be5a13fcf2ec6 extends Twig_Template
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
        $__internal_dc311a1314225db52384d42b1c0c9aa322c3a9afbcbc82de47840734e4a1c612 = $this->env->getExtension("native_profiler");
        $__internal_dc311a1314225db52384d42b1c0c9aa322c3a9afbcbc82de47840734e4a1c612->enter($__internal_dc311a1314225db52384d42b1c0c9aa322c3a9afbcbc82de47840734e4a1c612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_dc311a1314225db52384d42b1c0c9aa322c3a9afbcbc82de47840734e4a1c612->leave($__internal_dc311a1314225db52384d42b1c0c9aa322c3a9afbcbc82de47840734e4a1c612_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
