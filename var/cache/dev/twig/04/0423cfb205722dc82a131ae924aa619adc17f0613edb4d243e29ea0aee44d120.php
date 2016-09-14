<?php

/* base.html.twig */
class __TwigTemplate_3b0e0764aaa9dbcc86534bb0bc55f38ba8c90a0a3ebae25b2d6dbfeea99b4cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7d552a7f7f12daa1568e83151e1eb99fb41706ca286eb46f80c774c1bb55a30 = $this->env->getExtension("native_profiler");
        $__internal_e7d552a7f7f12daa1568e83151e1eb99fb41706ca286eb46f80c774c1bb55a30->enter($__internal_e7d552a7f7f12daa1568e83151e1eb99fb41706ca286eb46f80c774c1bb55a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e7d552a7f7f12daa1568e83151e1eb99fb41706ca286eb46f80c774c1bb55a30->leave($__internal_e7d552a7f7f12daa1568e83151e1eb99fb41706ca286eb46f80c774c1bb55a30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d3efce97e7da79cf2801c84432af907c315678ca27fcafaa83dcd1f6ba0801f = $this->env->getExtension("native_profiler");
        $__internal_6d3efce97e7da79cf2801c84432af907c315678ca27fcafaa83dcd1f6ba0801f->enter($__internal_6d3efce97e7da79cf2801c84432af907c315678ca27fcafaa83dcd1f6ba0801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d3efce97e7da79cf2801c84432af907c315678ca27fcafaa83dcd1f6ba0801f->leave($__internal_6d3efce97e7da79cf2801c84432af907c315678ca27fcafaa83dcd1f6ba0801f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_771061d1c927dd528f5bb7d4566311accc7b25b289435d4e9756f9a69d96e36d = $this->env->getExtension("native_profiler");
        $__internal_771061d1c927dd528f5bb7d4566311accc7b25b289435d4e9756f9a69d96e36d->enter($__internal_771061d1c927dd528f5bb7d4566311accc7b25b289435d4e9756f9a69d96e36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_771061d1c927dd528f5bb7d4566311accc7b25b289435d4e9756f9a69d96e36d->leave($__internal_771061d1c927dd528f5bb7d4566311accc7b25b289435d4e9756f9a69d96e36d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eec9f75de99205f2966f3bd27b7e4569d6928ea3053e7486d1a1e5d30e6a885 = $this->env->getExtension("native_profiler");
        $__internal_2eec9f75de99205f2966f3bd27b7e4569d6928ea3053e7486d1a1e5d30e6a885->enter($__internal_2eec9f75de99205f2966f3bd27b7e4569d6928ea3053e7486d1a1e5d30e6a885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2eec9f75de99205f2966f3bd27b7e4569d6928ea3053e7486d1a1e5d30e6a885->leave($__internal_2eec9f75de99205f2966f3bd27b7e4569d6928ea3053e7486d1a1e5d30e6a885_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3bcb6de7a0ca101ac705926ef3a42e79647f9aef150f00999fe3c50f20777737 = $this->env->getExtension("native_profiler");
        $__internal_3bcb6de7a0ca101ac705926ef3a42e79647f9aef150f00999fe3c50f20777737->enter($__internal_3bcb6de7a0ca101ac705926ef3a42e79647f9aef150f00999fe3c50f20777737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3bcb6de7a0ca101ac705926ef3a42e79647f9aef150f00999fe3c50f20777737->leave($__internal_3bcb6de7a0ca101ac705926ef3a42e79647f9aef150f00999fe3c50f20777737_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
