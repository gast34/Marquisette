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
        $__internal_3e698a418ac04a7916499e6191d628c7c3a7764e47091b8a5aa4a96b4654bf6e = $this->env->getExtension("native_profiler");
        $__internal_3e698a418ac04a7916499e6191d628c7c3a7764e47091b8a5aa4a96b4654bf6e->enter($__internal_3e698a418ac04a7916499e6191d628c7c3a7764e47091b8a5aa4a96b4654bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Default:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../login.css\"/>
        
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "



</html>

";
        
        $__internal_3e698a418ac04a7916499e6191d628c7c3a7764e47091b8a5aa4a96b4654bf6e->leave($__internal_3e698a418ac04a7916499e6191d628c7c3a7764e47091b8a5aa4a96b4654bf6e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c716b29b8123de366e5f0261b558f180c1c3cd7f1b5a1f5f77c5dc75e456daa = $this->env->getExtension("native_profiler");
        $__internal_6c716b29b8123de366e5f0261b558f180c1c3cd7f1b5a1f5f77c5dc75e456daa->enter($__internal_6c716b29b8123de366e5f0261b558f180c1c3cd7f1b5a1f5f77c5dc75e456daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<body>
        <div class=\"logo_center\">
        <a href=\"http://lamarquisette.fr\"><img class=\"img-responsive\" src=\"../img/marquisette_logo.png\"/></a>
        </div>
        <div class=\"login\">
            <div class=\"bienvenue\">
                <h2>Compte client</h2>
                ";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 19
            echo "                    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
                ";
        }
        // line 21
        echo "                <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">

                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" class=\"form-control\" name=\"_username\" placeholder=\"Identifiant\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                        <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Mot de passe\">
                    </div>
                    <button type=\"submit\" class=\"float\">Se connecter</button>
                </form>
            </div>
        </div>
    </body>

";
        
        $__internal_6c716b29b8123de366e5f0261b558f180c1c3cd7f1b5a1f5f77c5dc75e456daa->leave($__internal_6c716b29b8123de366e5f0261b558f180c1c3cd7f1b5a1f5f77c5dc75e456daa_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 21,  66 => 19,  64 => 18,  54 => 10,  48 => 9,  35 => 39,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" type="text/css" href="../login.css"/>*/
/*         */
/* {% block body %}*/
/* */
/* <body>*/
/*         <div class="logo_center">*/
/*         <a href="http://lamarquisette.fr"><img class="img-responsive" src="../img/marquisette_logo.png"/></a>*/
/*         </div>*/
/*         <div class="login">*/
/*             <div class="bienvenue">*/
/*                 <h2>Compte client</h2>*/
/*                 {% if error %}*/
/*                     <div class="alert alert-danger">{{ error.message }}</div>*/
/*                 {% endif %}*/
/*                 <form action="{{ path('login_check') }}" method="post">*/
/* */
/*                     <div class="input-group input-group-lg">*/
/*                         <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                         <input type="text" class="form-control" name="_username" placeholder="Identifiant" value="{{ last_username }}">*/
/*                     </div>*/
/* */
/*                     <div class="input-group input-group-lg">*/
/*                         <span class="input-group-addon"><i class="fa fa-lock"></i></span>*/
/*                         <input type="password" class="form-control" name="_password" placeholder="Mot de passe">*/
/*                     </div>*/
/*                     <button type="submit" class="float">Se connecter</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* </html>*/
/* */
/* */
