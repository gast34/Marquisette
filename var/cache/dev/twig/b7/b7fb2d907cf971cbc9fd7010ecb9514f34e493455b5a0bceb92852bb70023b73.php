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
        $__internal_8ab30f661959201b40f0ff40d13ab1f1b38836f5dba7aa90de553d39ad15cea6 = $this->env->getExtension("native_profiler");
        $__internal_8ab30f661959201b40f0ff40d13ab1f1b38836f5dba7aa90de553d39ad15cea6->enter($__internal_8ab30f661959201b40f0ff40d13ab1f1b38836f5dba7aa90de553d39ad15cea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8ab30f661959201b40f0ff40d13ab1f1b38836f5dba7aa90de553d39ad15cea6->leave($__internal_8ab30f661959201b40f0ff40d13ab1f1b38836f5dba7aa90de553d39ad15cea6_prof);

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
