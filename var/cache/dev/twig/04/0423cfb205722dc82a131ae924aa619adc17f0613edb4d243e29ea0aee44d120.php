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
        $__internal_3b4f6adebc2c8396fd2f618d1abf7f4c8123286cf040e86089a5081e81cb00a7 = $this->env->getExtension("native_profiler");
        $__internal_3b4f6adebc2c8396fd2f618d1abf7f4c8123286cf040e86089a5081e81cb00a7->enter($__internal_3b4f6adebc2c8396fd2f618d1abf7f4c8123286cf040e86089a5081e81cb00a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3b4f6adebc2c8396fd2f618d1abf7f4c8123286cf040e86089a5081e81cb00a7->leave($__internal_3b4f6adebc2c8396fd2f618d1abf7f4c8123286cf040e86089a5081e81cb00a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6537a87cd4b9c0a8914f20cbf71e0dc95695a5b5af5390702db15196d740369 = $this->env->getExtension("native_profiler");
        $__internal_f6537a87cd4b9c0a8914f20cbf71e0dc95695a5b5af5390702db15196d740369->enter($__internal_f6537a87cd4b9c0a8914f20cbf71e0dc95695a5b5af5390702db15196d740369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f6537a87cd4b9c0a8914f20cbf71e0dc95695a5b5af5390702db15196d740369->leave($__internal_f6537a87cd4b9c0a8914f20cbf71e0dc95695a5b5af5390702db15196d740369_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_42e4b79fc5467c9f081fdeef748639df6f710bfa4829c1d9775709b2c2a880e6 = $this->env->getExtension("native_profiler");
        $__internal_42e4b79fc5467c9f081fdeef748639df6f710bfa4829c1d9775709b2c2a880e6->enter($__internal_42e4b79fc5467c9f081fdeef748639df6f710bfa4829c1d9775709b2c2a880e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_42e4b79fc5467c9f081fdeef748639df6f710bfa4829c1d9775709b2c2a880e6->leave($__internal_42e4b79fc5467c9f081fdeef748639df6f710bfa4829c1d9775709b2c2a880e6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_138b90b60a89dcc66f5ae49aae65a622bac38b729a78249fc4413894162004ea = $this->env->getExtension("native_profiler");
        $__internal_138b90b60a89dcc66f5ae49aae65a622bac38b729a78249fc4413894162004ea->enter($__internal_138b90b60a89dcc66f5ae49aae65a622bac38b729a78249fc4413894162004ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_138b90b60a89dcc66f5ae49aae65a622bac38b729a78249fc4413894162004ea->leave($__internal_138b90b60a89dcc66f5ae49aae65a622bac38b729a78249fc4413894162004ea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d2a3f76dea4a0d3628f737c8c20be50b9ff4e5c309cb780f696ce39d04dd9ad = $this->env->getExtension("native_profiler");
        $__internal_7d2a3f76dea4a0d3628f737c8c20be50b9ff4e5c309cb780f696ce39d04dd9ad->enter($__internal_7d2a3f76dea4a0d3628f737c8c20be50b9ff4e5c309cb780f696ce39d04dd9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d2a3f76dea4a0d3628f737c8c20be50b9ff4e5c309cb780f696ce39d04dd9ad->leave($__internal_7d2a3f76dea4a0d3628f737c8c20be50b9ff4e5c309cb780f696ce39d04dd9ad_prof);

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
