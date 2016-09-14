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
        $__internal_84ce47b5ff70501be01dcafbee0eaec1e8671f064af528e333b05a05023c1a7c = $this->env->getExtension("native_profiler");
        $__internal_84ce47b5ff70501be01dcafbee0eaec1e8671f064af528e333b05a05023c1a7c->enter($__internal_84ce47b5ff70501be01dcafbee0eaec1e8671f064af528e333b05a05023c1a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_84ce47b5ff70501be01dcafbee0eaec1e8671f064af528e333b05a05023c1a7c->leave($__internal_84ce47b5ff70501be01dcafbee0eaec1e8671f064af528e333b05a05023c1a7c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af669778fd66e4b08e08e1745634676a9ca2a67e74132b2be3d6a7754c21f9ff = $this->env->getExtension("native_profiler");
        $__internal_af669778fd66e4b08e08e1745634676a9ca2a67e74132b2be3d6a7754c21f9ff->enter($__internal_af669778fd66e4b08e08e1745634676a9ca2a67e74132b2be3d6a7754c21f9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_af669778fd66e4b08e08e1745634676a9ca2a67e74132b2be3d6a7754c21f9ff->leave($__internal_af669778fd66e4b08e08e1745634676a9ca2a67e74132b2be3d6a7754c21f9ff_prof);

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
