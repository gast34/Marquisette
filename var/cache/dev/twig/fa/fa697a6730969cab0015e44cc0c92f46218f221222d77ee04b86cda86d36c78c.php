<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_88f18bd8dd5141874ee924668603cd4a242c1f767a224d4453902d59f2fad53d extends Twig_Template
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
        $__internal_a6e843a7ce04f96e28be95f1e38ee7b08f9f0ac9b31dbd906350660f0d42a256 = $this->env->getExtension("native_profiler");
        $__internal_a6e843a7ce04f96e28be95f1e38ee7b08f9f0ac9b31dbd906350660f0d42a256->enter($__internal_a6e843a7ce04f96e28be95f1e38ee7b08f9f0ac9b31dbd906350660f0d42a256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a6e843a7ce04f96e28be95f1e38ee7b08f9f0ac9b31dbd906350660f0d42a256->leave($__internal_a6e843a7ce04f96e28be95f1e38ee7b08f9f0ac9b31dbd906350660f0d42a256_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
