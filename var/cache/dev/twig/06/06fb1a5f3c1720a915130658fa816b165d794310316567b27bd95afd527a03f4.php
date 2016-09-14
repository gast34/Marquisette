<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eaac41b14637e442dbdf8c42484ee39c6fccd00b2b854871e226bcd0beca96b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87aa87e4105fd374345d7307c65aa0173f3ba2b87f6c38458d53ceb952059c0d = $this->env->getExtension("native_profiler");
        $__internal_87aa87e4105fd374345d7307c65aa0173f3ba2b87f6c38458d53ceb952059c0d->enter($__internal_87aa87e4105fd374345d7307c65aa0173f3ba2b87f6c38458d53ceb952059c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87aa87e4105fd374345d7307c65aa0173f3ba2b87f6c38458d53ceb952059c0d->leave($__internal_87aa87e4105fd374345d7307c65aa0173f3ba2b87f6c38458d53ceb952059c0d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dfcbfda598098e6bfd120d2d285f3dde7ccfb86219f36cf213a2b29564a517a = $this->env->getExtension("native_profiler");
        $__internal_3dfcbfda598098e6bfd120d2d285f3dde7ccfb86219f36cf213a2b29564a517a->enter($__internal_3dfcbfda598098e6bfd120d2d285f3dde7ccfb86219f36cf213a2b29564a517a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3dfcbfda598098e6bfd120d2d285f3dde7ccfb86219f36cf213a2b29564a517a->leave($__internal_3dfcbfda598098e6bfd120d2d285f3dde7ccfb86219f36cf213a2b29564a517a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_312a3bf364f55d153e24d65b4c076922acca2a8e560c4683f85679751db02c2f = $this->env->getExtension("native_profiler");
        $__internal_312a3bf364f55d153e24d65b4c076922acca2a8e560c4683f85679751db02c2f->enter($__internal_312a3bf364f55d153e24d65b4c076922acca2a8e560c4683f85679751db02c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_312a3bf364f55d153e24d65b4c076922acca2a8e560c4683f85679751db02c2f->leave($__internal_312a3bf364f55d153e24d65b4c076922acca2a8e560c4683f85679751db02c2f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
