<?php

/* AccountBundle:Default:login.html.twig */
class __TwigTemplate_a8f145defeea017a6baf722fad4199ec815e40b4506b07ecf6be03d533c8841d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_206a201ce3ea7541dc08e0429356c464657936cee6c738be187f4bde5d3aa915 = $this->env->getExtension("native_profiler");
        $__internal_206a201ce3ea7541dc08e0429356c464657936cee6c738be187f4bde5d3aa915->enter($__internal_206a201ce3ea7541dc08e0429356c464657936cee6c738be187f4bde5d3aa915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_206a201ce3ea7541dc08e0429356c464657936cee6c738be187f4bde5d3aa915->leave($__internal_206a201ce3ea7541dc08e0429356c464657936cee6c738be187f4bde5d3aa915_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a39e21b035aa0f191e3538bc19b1f8e6050cda5c8902af9846940fb3c9d41771 = $this->env->getExtension("native_profiler");
        $__internal_a39e21b035aa0f191e3538bc19b1f8e6050cda5c8902af9846940fb3c9d41771->enter($__internal_a39e21b035aa0f191e3538bc19b1f8e6050cda5c8902af9846940fb3c9d41771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    
    <body>

  ";
        // line 6
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "
  ";
        // line 11
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>
    
    </body>

";
        
        $__internal_a39e21b035aa0f191e3538bc19b1f8e6050cda5c8902af9846940fb3c9d41771->leave($__internal_a39e21b035aa0f191e3538bc19b1f8e6050cda5c8902af9846940fb3c9d41771_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  52 => 11,  49 => 9,  43 => 7,  40 => 6,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/*     */
/*     <body>*/
/* */
/*   {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/*   {% if error %}*/
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
/*   {% endif %}*/
/* */
/*   {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/*   <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Login :</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe :</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*     <br />*/
/*     <input type="submit" value="Connexion" />*/
/*   </form>*/
/*     */
/*     </body>*/
/* */
/* {% endblock %}*/
