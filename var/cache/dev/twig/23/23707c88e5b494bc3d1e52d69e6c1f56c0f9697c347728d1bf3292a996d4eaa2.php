<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dae804c59f483ba1fe2be3ed91c207b6237abac53917da47ea848bfd61c4632c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4d7b6c2beba78d303628b21c2a91b477ad7f04d3bfff1b1b9a1736bbec12f19 = $this->env->getExtension("native_profiler");
        $__internal_a4d7b6c2beba78d303628b21c2a91b477ad7f04d3bfff1b1b9a1736bbec12f19->enter($__internal_a4d7b6c2beba78d303628b21c2a91b477ad7f04d3bfff1b1b9a1736bbec12f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a4d7b6c2beba78d303628b21c2a91b477ad7f04d3bfff1b1b9a1736bbec12f19->leave($__internal_a4d7b6c2beba78d303628b21c2a91b477ad7f04d3bfff1b1b9a1736bbec12f19_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_55f8c1a130154ffc39463109df37410461b99ba27653d186f0b952f932541f0b = $this->env->getExtension("native_profiler");
        $__internal_55f8c1a130154ffc39463109df37410461b99ba27653d186f0b952f932541f0b->enter($__internal_55f8c1a130154ffc39463109df37410461b99ba27653d186f0b952f932541f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_55f8c1a130154ffc39463109df37410461b99ba27653d186f0b952f932541f0b->leave($__internal_55f8c1a130154ffc39463109df37410461b99ba27653d186f0b952f932541f0b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
