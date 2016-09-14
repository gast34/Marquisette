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
        $__internal_a3983025ab12577b3a6ad107029354825feff45f062c2c109981d255d2a2d6e7 = $this->env->getExtension("native_profiler");
        $__internal_a3983025ab12577b3a6ad107029354825feff45f062c2c109981d255d2a2d6e7->enter($__internal_a3983025ab12577b3a6ad107029354825feff45f062c2c109981d255d2a2d6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Default:login.html.twig"));

        // line 2
        echo "test

";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a3983025ab12577b3a6ad107029354825feff45f062c2c109981d255d2a2d6e7->leave($__internal_a3983025ab12577b3a6ad107029354825feff45f062c2c109981d255d2a2d6e7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_cfe922d726d15dfc48e77584a2f309b54a1b3b72df2cc7fbc139f1ec7518b2dc = $this->env->getExtension("native_profiler");
        $__internal_cfe922d726d15dfc48e77584a2f309b54a1b3b72df2cc7fbc139f1ec7518b2dc->enter($__internal_cfe922d726d15dfc48e77584a2f309b54a1b3b72df2cc7fbc139f1ec7518b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    <body>

  ";
        // line 9
        echo "  ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 12
        echo "
  ";
        // line 14
        echo "  <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>
    
    </body>

";
        
        $__internal_cfe922d726d15dfc48e77584a2f309b54a1b3b72df2cc7fbc139f1ec7518b2dc->leave($__internal_cfe922d726d15dfc48e77584a2f309b54a1b3b72df2cc7fbc139f1ec7518b2dc_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  56 => 14,  53 => 12,  47 => 10,  44 => 9,  39 => 5,  27 => 4,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* test*/
/* */
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
