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
        $__internal_e40c7522f0f41551db0ff3d9d8ddd5cd174f4e27118423a4aaa60f495eb8a973 = $this->env->getExtension("native_profiler");
        $__internal_e40c7522f0f41551db0ff3d9d8ddd5cd174f4e27118423a4aaa60f495eb8a973->enter($__internal_e40c7522f0f41551db0ff3d9d8ddd5cd174f4e27118423a4aaa60f495eb8a973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccountBundle:Default:login.html.twig"));

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
        // line 41
        echo "



</html>

";
        
        $__internal_e40c7522f0f41551db0ff3d9d8ddd5cd174f4e27118423a4aaa60f495eb8a973->leave($__internal_e40c7522f0f41551db0ff3d9d8ddd5cd174f4e27118423a4aaa60f495eb8a973_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_00cf221c69faa5ca3396c269a6c31b53bfcdb9ad51511e85b87baa5db33974ef = $this->env->getExtension("native_profiler");
        $__internal_00cf221c69faa5ca3396c269a6c31b53bfcdb9ad51511e85b87baa5db33974ef->enter($__internal_00cf221c69faa5ca3396c269a6c31b53bfcdb9ad51511e85b87baa5db33974ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <body>

        <a href=\"http://lamarquisette.fr\"><img class=\"logo\" src=\"../img/logo.png\"/></a>

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

        <div class=\"nous\">cesarthibon@lamarquisette.fr<br>06 99 79 64 13<br>© N o u s</div>
    </body>

";
        
        $__internal_00cf221c69faa5ca3396c269a6c31b53bfcdb9ad51511e85b87baa5db33974ef->leave($__internal_00cf221c69faa5ca3396c269a6c31b53bfcdb9ad51511e85b87baa5db33974ef_prof);

    }

    public function getTemplateName()
    {
        return "AccountBundle:Default:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  72 => 21,  66 => 19,  64 => 18,  54 => 10,  48 => 9,  35 => 41,  33 => 9,  23 => 1,);
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
/*     <body>*/
/* */
/*         <a href="http://lamarquisette.fr"><img class="logo" src="../img/logo.png"/></a>*/
/* */
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
/* */
/*         <div class="nous">cesarthibon@lamarquisette.fr<br>06 99 79 64 13<br>© N o u s</div>*/
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
