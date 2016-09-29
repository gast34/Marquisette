<?php

/* mainBundle:Default:index.html.twig */
class __TwigTemplate_deb6de7a10dc8757dfde59740fd151f5e96ee2def3e080718fc5fee1502cb733 extends Twig_Template
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
        $__internal_6e7d94b81a8ba21fade5cc3baec16369d295e0eea6d84923afb3e003b75d3200 = $this->env->getExtension("native_profiler");
        $__internal_6e7d94b81a8ba21fade5cc3baec16369d295e0eea6d84923afb3e003b75d3200->enter($__internal_6e7d94b81a8ba21fade5cc3baec16369d295e0eea6d84923afb3e003b75d3200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta charset=\"utf-8\">
        <title>Marquisette</title>
        <!-- Import Bootstrap AVANT le fichier css (afin de pouvoir overight) -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <!-- Import de Jquery -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
        <!-- Import de Bootstrap.js -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css\">
        <!-- Import du css de Lightbox -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css\">
        <script type='text/javascript' language='javascript' src='../script/disclaimer.js'></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"../main.css\">
        <!-- Import du fichier JS principal -->
        <script type=\"text/javascript\" src=\"../script/main.js\"></script>
        <script async defer
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyA2tZpX31pxKdUuGC9w4u-zPnqbwSWSMSg&callback=initMap\">
        </script>
        <script src =\"../script/map.js\"></script>
        <style type=\"text/css\">
            html, body { height: 100%; margin: 0; padding: 0; }
            #map { height: 70%; width:100%}
        </style>
    </head>
    <body>

        ";
        // line 31
        $context["i"] = 0;
        // line 32
        echo "        <div style=\"display:none\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["points"]) ? $context["points"] : $this->getContext($context, "points")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 34
            echo "                ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 35
            echo "
                <div class = \"description";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" >
                    ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "description", array()), "html", null, true);
            echo "
                </div>
                <div class = \"adresse";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "adresse", array()), "html", null, true);
            echo "
                </div>
                <div class = \"longitude";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                    ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "longitude", array()), "html", null, true);
            echo "
                </div>
                <div class = \"latitude";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "latitude", array()), "html", null, true);
            echo "
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>

        <div id = \"val\" style=\"display:none\">";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
        echo "</div>


        <!-- Bordure rouge sur les cotés du site -->
        <div class=\"border-red\">

            <!-- Carousel du haut___________________________________________________-->
            <div id=\"myCarousel\" class=\"carousel slide\">
                <!-- bulles control du carousel -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Images/items du carousel -->
                <div class=\"carousel-inner\">
                    <!-- images du carousel importée dans le CSS -->
                    <div class=\"item active img1\"></div>
                    <div class=\"item img2\"></div>
                    <div class=\"item img3\"></div>
                </div>
            </div>
            <!-- fin du carousel -->

            <!-- Menu de navigation (petites bulles sur la gauche de la vue) -->
            <div class=\"marg-navy\">
                <ul class=\"navy\">
                    <a class=\"test js-scrollTo\" href = \".prod\">
                        <li class=\"js-scrollTo\"></li>
                    </a>
                    <a class=\"js-scrollTo\" href = \".hist\">
                        <li class=\"js-scrollTo\"></li>
                    </a>
                    <a class=\"js-scrollTo\" href = \".qui\">
                        <li class=\"js-scrollTo\"></li>
                    </a>
                    <a class=\"js-scrollTo\" href = \".pdv\">
                        <li class=\"js-scrollTo\"></li>
                    </a>
                </ul>
            </div>

            <!-- logo réseaux sociaux -->
            <div class=\"navbar-fixed-top align-responsive\">
                <ul class=\"align\">
                    <li><a target=\"_blank\" href=\"https://www.facebook.com/lamarquisettecesarthibon/?fref=ts\"><img class=\"logo-connex img-responsive\" src=\"../img/fb.png\" alt=\"\" /></a></li>
                    <li><a target=\"_blank\" href=\"https://www.instagram.com/lamarquisettecesarthibon/\"><img class=\"logo-connex img-responsive\" src=\"../img/insta.png\" alt=\"\" /></a></li>
                </ul>
            </div>

            <nav class=\"navbar\">

                <div class=\"container-fluid\">
                    ";
        // line 106
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 107
            echo "                        <div class=\"navbar-header\"><span class=\"navbar-brand bonjour\">Bonjour <span class=\"red\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span></span></div>
                            ";
        }
        // line 109
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 110
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            echo "  <li> <a href=\"gestion\"><span class=\"glyphicon glyphicon-wrench\"></span> Gestion</a></li>
                            <li><a href=\"logout\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a></li>
                        ";
        } else {
            // line 112
            echo "<li><a href=\"connexion\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                            ";
        }
        // line 114
        echo "


                    </ul>
                </div>
            </nav>
            <!-- Section PRODUIT ________________________________________________________-->
            <!-- video youtube -->
            <section class=\"prod\">
                <!-- Logo marquisette ne haut de page -->
                <div class=\"logo-center\">
                    <img class=\"img-responsive\" src=\"../img/marquisette_logo.png\" alt=\"logo\" />
                </div>

                <!-- fin logos réseaux sociaux -->

                <!-- Texte au dessus de la vidéo -->
                <p class=\"marg-text col-xs-offset-1 col-xs-10\">
                    Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.
                </p>
                <!-- vidéo Youtube -->
                <div class=\"col-xs-offset-2 col-xs-8\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/tWw003p4710\" frameborder=\"0\" width=\"560\" height=\"315\"></iframe>
                    </div>
                </div>
                <!-- Images des cocktails + plugin lightbox (le js est en fin de code) -->
                <!-- cocktail 1 -->
                <div class=\"col-sm-offset-2 col-xs-offset-0 col-xs-12 col-sm-8 col-md-4\">
                    <a href=\"../img/willie1.png\" data-lightbox=\"roadtrip\">
                        <div class=\"sombre\">
                            <img class=\"img-responsive\" src=\"../img/willie1.png\" alt=\"\" />
                        </div>
                    </a>
                </div>
                <!-- cocktail 2 -->
                <div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4\">
                    <a href=\"../img/willie2.png\" data-lightbox=\"roadtrip\">
                        <div class=\"sombre\">
                            <img class=\"img-responsive\" src=\"../img/willie2.png\" alt=\"\" />
                        </div>
                    </a>
                </div>
                <!-- cocktail 3 -->
                <div class=\"col-sm-offset-2 col-xs-offset-0 col-xs-12 col-sm-8 col-md-4\">
                    <a href=\"../img/bycoss.png\" data-lightbox=\"roadtrip\">
                        <div class=\"sombre\">
                            <img class=\"img-responsive\" src=\"../img/bycoss.png\" alt=\"\" />
                        </div>
                    </a>
                </div>
                <!-- cocktail 4 -->
                <div class=\"col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4\">
                    <a href=\"../img/parfum.png\" data-lightbox=\"roadtrip\">
                        <div class=\"sombre\">
                            <img class=\"img-responsive\" src=\"../img/parfum.png\" alt=\"\" />
                        </div>
                    </a>
                </div>
            </section>
            <!-- Fin de la section produit_______________________________________________ -->

            <!-- Début de la section histoire (manifeste) -->
            <section class=\"container\">
                <div class=\"col-xs-offset-0 col-sm-offset-2 col-xs-12 col-sm-8 \">
                    <h1 class=\"hist titles center\">Notre histoire</h1>
                </div>
                <!-- images du manifeste (animation animate.css + wow.js) -->
                <div class=\"marge-img4 wow bounceInLeft col-sm-offset-4 col-xs-offset-2 col-sm-4 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif0.png\" alt=\"\" /></div>
                <div class=\"marge-img wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif1.png\" alt=\"\" /></div>
                <div class=\"marge-img wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif2.png\" alt=\"\" /></div>
                <div class=\"marge-img wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif3.png\" alt=\"\" /></div>
                <div class=\"marge-img3 wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif4.png\" alt=\"\" /></div>
                <div class=\"marge-img3 wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif5.png\" alt=\"\" /></div>
                <div class=\"marge-img wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif6.png\" alt=\"\" /></div>
                <div class=\"marge-img2 wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif7.png\" alt=\"\" /></div>
                <div class=\"marge-img wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif8.png\" alt=\"\" /></div>
                <div class=\"marge-img wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12\"><img class=\"img-responsive\" src=\"../img/manif9.png\" alt=\"\" /></div>
                <div class=\"marge-img wow bounceInRight col-sm-offset-4 col-xs-offset-2 col-sm-4 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif10.png\" alt=\"\" /></div>
            </section>
            <!-- fin de la section histoire -->

            <!--Début de la section qui sommes nous_________________________________________________ -->
            <section class=\"container\">
                <div class=\"col-xs-offset-0 col-sm-offset-2 col-sm-8 col-xs-12\">
                    <h1 class=\"qui titles center\">Qui sommes nous ?</h1>
                    <!-- Images qui apparaissent au scroll, visages + textes -->
                    <div class=\"marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10\"><img class=\"img-responsive\" src=\"../img/qui1.png\" alt=\"\" /></div>
                    <div class=\"marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10\"><img class=\"img-responsive\" src=\"../img/qui2.png\" alt=\"\" /></div>
                    <div class=\"marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10\"><img class=\"img-responsive\" src=\"../img/qui3.png\" alt=\"\" /></div>
                    <div class=\"marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10\"><img class=\"img-responsive\" src=\"../img/simonfull.png\" alt=\"\" /></div>
                </div>
            </section>
            <!-- Fin de la section qui sommes nous ______________________________________-->

            <!-- Début de la section point de vente -->
            <section class=\"container\">
                <div class=\"col-xs-offset-0 col-sm-offset-2 col-xs-12 col-sm-8\">
                    <h1 class=\"pdv titles center\">Point de vente</h1>

                    <div id=\"map\"></div>

                </div>
            </section>

            <!-- Section COntacts -->

            <!-- FORMULAIRE MAIL -->
            <section class=\"container fin-du-site center\">
                <div class=\"col-xs-offset-0 col-sm-offset-2 col-xs-12 col-sm-8\">
                    <h1 class=\"titles center\">Contactez nous</h1>
                    <div id=\"form_contact\">
                        <!-- On attaque le bon fichier PHP pour l'envoi de mail -->
                        <form action=\"http://server-test.vince-feger.com/process.php\" id=\"contact\" method=\"POST\">
                            <p>
                                <label for=\"nom\" class=\"nom\">Nom:</label>
                                <input id=\"nom\" placeholder=\"Votre nom\" name=\"nom\" type=\"text\">
                                <br /><span id=\"msg_nom\"></span>
                            </p>
                            <p>
                                <label for=\"sujet\" class=\"sujet\">Sujet:</label>
                                <input id=\"sujet\" placeholder=\"Sujet du message\" name=\"sujet\" type=\"text\">
                                <br /><span id=\"msg_sujet\"></span>
                            </p>
                            <p>
                                <label for=\"email\">Email:</label>
                                <input id=\"email\" placeholder=\"vous@exemple.com\" name=\"email\" type=\"email\">
                                <br /><span id=\"msg_email\"></span>
                            </p>
                            <p>
                                <label for=\"message\">Message:</label>
                                <textarea class=\"message-area\" id=\"message\" placeholder=\"...\" name=\"message\" rows=\"8\" cols=\"50\"></textarea>
                                <br /><span id=\"msg_message\"></span>
                            </p>
                            <p>
                                <input class=\"boutonSend\" id=\"send\" type=\"submit\" value=\"Envoyer\" />
                            </p>
                            <p id=\"msgConfirm\"></p>
                        </form>
                    </div>
                </div>
            </section>
            <!-- Fin du formulaire -->

            <footer class=\"endSite\">
                <p>
                    cesarthibon@lamarquisette.fr
                </p>
                <p>
                    06 99 79 64 13
                </p>
                <p>
                    © Vincent Feger / Perle Estru / Gaston Saboy / beWeb
                </p>
            </footer>
        </div>
        <!-- Script du plugin lightbox -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js\"></script>
        <!-- Fermeture des balise body et html -->

    </body>
</html>
";
        
        $__internal_6e7d94b81a8ba21fade5cc3baec16369d295e0eea6d84923afb3e003b75d3200->leave($__internal_6e7d94b81a8ba21fade5cc3baec16369d295e0eea6d84923afb3e003b75d3200_prof);

    }

    public function getTemplateName()
    {
        return "mainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 114,  188 => 112,  182 => 110,  179 => 109,  173 => 107,  171 => 106,  114 => 52,  110 => 50,  100 => 46,  96 => 45,  91 => 43,  87 => 42,  82 => 40,  78 => 39,  73 => 37,  69 => 36,  66 => 35,  63 => 34,  59 => 33,  56 => 32,  54 => 31,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta charset="utf-8">*/
/*         <title>Marquisette</title>*/
/*         <!-- Import Bootstrap AVANT le fichier css (afin de pouvoir overight) -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <!-- Import de Jquery -->*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*         <!-- Import de Bootstrap.js -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">*/
/*         <!-- Import du css de Lightbox -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">*/
/*         <script type='text/javascript' language='javascript' src='../script/disclaimer.js'></script>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         <link rel="stylesheet" href="../main.css">*/
/*         <!-- Import du fichier JS principal -->*/
/*         <script type="text/javascript" src="../script/main.js"></script>*/
/*         <script async defer*/
/*                 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2tZpX31pxKdUuGC9w4u-zPnqbwSWSMSg&callback=initMap">*/
/*         </script>*/
/*         <script src ="../script/map.js"></script>*/
/*         <style type="text/css">*/
/*             html, body { height: 100%; margin: 0; padding: 0; }*/
/*             #map { height: 70%; width:100%}*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/* */
/*         {%set i = 0%}*/
/*         <div style="display:none">*/
/*             {%for result in points%}*/
/*                 {%set i = i + 1%}*/
/* */
/*                 <div class = "description{{i}}" >*/
/*                     {{result.description}}*/
/*                 </div>*/
/*                 <div class = "adresse{{i}}">*/
/*                     {{result.adresse}}*/
/*                 </div>*/
/*                 <div class = "longitude{{i}}">*/
/*                     {{result.longitude}}*/
/*                 </div>*/
/*                 <div class = "latitude{{i}}">*/
/*                     {{result.latitude}}*/
/*                 </div>*/
/* */
/*             {%endfor%}*/
/*         </div>*/
/* */
/*         <div id = "val" style="display:none">{{i}}</div>*/
/* */
/* */
/*         <!-- Bordure rouge sur les cotés du site -->*/
/*         <div class="border-red">*/
/* */
/*             <!-- Carousel du haut___________________________________________________-->*/
/*             <div id="myCarousel" class="carousel slide">*/
/*                 <!-- bulles control du carousel -->*/
/*                 <ol class="carousel-indicators">*/
/*                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                     <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                     <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                 </ol>*/
/* */
/*                 <!-- Images/items du carousel -->*/
/*                 <div class="carousel-inner">*/
/*                     <!-- images du carousel importée dans le CSS -->*/
/*                     <div class="item active img1"></div>*/
/*                     <div class="item img2"></div>*/
/*                     <div class="item img3"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- fin du carousel -->*/
/* */
/*             <!-- Menu de navigation (petites bulles sur la gauche de la vue) -->*/
/*             <div class="marg-navy">*/
/*                 <ul class="navy">*/
/*                     <a class="test js-scrollTo" href = ".prod">*/
/*                         <li class="js-scrollTo"></li>*/
/*                     </a>*/
/*                     <a class="js-scrollTo" href = ".hist">*/
/*                         <li class="js-scrollTo"></li>*/
/*                     </a>*/
/*                     <a class="js-scrollTo" href = ".qui">*/
/*                         <li class="js-scrollTo"></li>*/
/*                     </a>*/
/*                     <a class="js-scrollTo" href = ".pdv">*/
/*                         <li class="js-scrollTo"></li>*/
/*                     </a>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <!-- logo réseaux sociaux -->*/
/*             <div class="navbar-fixed-top align-responsive">*/
/*                 <ul class="align">*/
/*                     <li><a target="_blank" href="https://www.facebook.com/lamarquisettecesarthibon/?fref=ts"><img class="logo-connex img-responsive" src="../img/fb.png" alt="" /></a></li>*/
/*                     <li><a target="_blank" href="https://www.instagram.com/lamarquisettecesarthibon/"><img class="logo-connex img-responsive" src="../img/insta.png" alt="" /></a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <nav class="navbar">*/
/* */
/*                 <div class="container-fluid">*/
/*                     {%if app.user.username is defined%}*/
/*                         <div class="navbar-header"><span class="navbar-brand bonjour">Bonjour <span class="red">{{app.user.username}}</span></span></div>*/
/*                             {%endif%}*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         {%if app.user.username is defined %}  <li> <a href="gestion"><span class="glyphicon glyphicon-wrench"></span> Gestion</a></li>*/
/*                             <li><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>*/
/*                         {%else%}<li><a href="connexion"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*                             {%endif%}*/
/* */
/* */
/* */
/*                     </ul>*/
/*                 </div>*/
/*             </nav>*/
/*             <!-- Section PRODUIT ________________________________________________________-->*/
/*             <!-- video youtube -->*/
/*             <section class="prod">*/
/*                 <!-- Logo marquisette ne haut de page -->*/
/*                 <div class="logo-center">*/
/*                     <img class="img-responsive" src="../img/marquisette_logo.png" alt="logo" />*/
/*                 </div>*/
/* */
/*                 <!-- fin logos réseaux sociaux -->*/
/* */
/*                 <!-- Texte au dessus de la vidéo -->*/
/*                 <p class="marg-text col-xs-offset-1 col-xs-10">*/
/*                     Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.*/
/*                 </p>*/
/*                 <!-- vidéo Youtube -->*/
/*                 <div class="col-xs-offset-2 col-xs-8">*/
/*                     <div class="embed-responsive embed-responsive-16by9">*/
/*                         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tWw003p4710" frameborder="0" width="560" height="315"></iframe>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- Images des cocktails + plugin lightbox (le js est en fin de code) -->*/
/*                 <!-- cocktail 1 -->*/
/*                 <div class="col-sm-offset-2 col-xs-offset-0 col-xs-12 col-sm-8 col-md-4">*/
/*                     <a href="../img/willie1.png" data-lightbox="roadtrip">*/
/*                         <div class="sombre">*/
/*                             <img class="img-responsive" src="../img/willie1.png" alt="" />*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <!-- cocktail 2 -->*/
/*                 <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4">*/
/*                     <a href="../img/willie2.png" data-lightbox="roadtrip">*/
/*                         <div class="sombre">*/
/*                             <img class="img-responsive" src="../img/willie2.png" alt="" />*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <!-- cocktail 3 -->*/
/*                 <div class="col-sm-offset-2 col-xs-offset-0 col-xs-12 col-sm-8 col-md-4">*/
/*                     <a href="../img/bycoss.png" data-lightbox="roadtrip">*/
/*                         <div class="sombre">*/
/*                             <img class="img-responsive" src="../img/bycoss.png" alt="" />*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*                 <!-- cocktail 4 -->*/
/*                 <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-0 col-md-4">*/
/*                     <a href="../img/parfum.png" data-lightbox="roadtrip">*/
/*                         <div class="sombre">*/
/*                             <img class="img-responsive" src="../img/parfum.png" alt="" />*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- Fin de la section produit_______________________________________________ -->*/
/* */
/*             <!-- Début de la section histoire (manifeste) -->*/
/*             <section class="container">*/
/*                 <div class="col-xs-offset-0 col-sm-offset-2 col-xs-12 col-sm-8 ">*/
/*                     <h1 class="hist titles center">Notre histoire</h1>*/
/*                 </div>*/
/*                 <!-- images du manifeste (animation animate.css + wow.js) -->*/
/*                 <div class="marge-img4 wow bounceInLeft col-sm-offset-4 col-xs-offset-2 col-sm-4 col-xs-8"><img class="img-responsive" src="../img/manif0.png" alt="" /></div>*/
/*                 <div class="marge-img wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif1.png" alt="" /></div>*/
/*                 <div class="marge-img wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif2.png" alt="" /></div>*/
/*                 <div class="marge-img wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif3.png" alt="" /></div>*/
/*                 <div class="marge-img3 wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif4.png" alt="" /></div>*/
/*                 <div class="marge-img3 wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif5.png" alt="" /></div>*/
/*                 <div class="marge-img wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif6.png" alt="" /></div>*/
/*                 <div class="marge-img2 wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif7.png" alt="" /></div>*/
/*                 <div class="marge-img wow bounceInLeft col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif8.png" alt="" /></div>*/
/*                 <div class="marge-img wow bounceInRight col-sm-offset-2 col-xs-offset-0 col-sm-8 col-xs-12"><img class="img-responsive" src="../img/manif9.png" alt="" /></div>*/
/*                 <div class="marge-img wow bounceInRight col-sm-offset-4 col-xs-offset-2 col-sm-4 col-xs-8"><img class="img-responsive" src="../img/manif10.png" alt="" /></div>*/
/*             </section>*/
/*             <!-- fin de la section histoire -->*/
/* */
/*             <!--Début de la section qui sommes nous_________________________________________________ -->*/
/*             <section class="container">*/
/*                 <div class="col-xs-offset-0 col-sm-offset-2 col-sm-8 col-xs-12">*/
/*                     <h1 class="qui titles center">Qui sommes nous ?</h1>*/
/*                     <!-- Images qui apparaissent au scroll, visages + textes -->*/
/*                     <div class="marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10"><img class="img-responsive" src="../img/qui1.png" alt="" /></div>*/
/*                     <div class="marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10"><img class="img-responsive" src="../img/qui2.png" alt="" /></div>*/
/*                     <div class="marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10"><img class="img-responsive" src="../img/qui3.png" alt="" /></div>*/
/*                     <div class="marge-img wow fadeIn col-xs-offset-0 col-sm-offset-1 col-xs-12 col-sm-10"><img class="img-responsive" src="../img/simonfull.png" alt="" /></div>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- Fin de la section qui sommes nous ______________________________________-->*/
/* */
/*             <!-- Début de la section point de vente -->*/
/*             <section class="container">*/
/*                 <div class="col-xs-offset-0 col-sm-offset-2 col-xs-12 col-sm-8">*/
/*                     <h1 class="pdv titles center">Point de vente</h1>*/
/* */
/*                     <div id="map"></div>*/
/* */
/*                 </div>*/
/*             </section>*/
/* */
/*             <!-- Section COntacts -->*/
/* */
/*             <!-- FORMULAIRE MAIL -->*/
/*             <section class="container fin-du-site center">*/
/*                 <div class="col-xs-offset-0 col-sm-offset-2 col-xs-12 col-sm-8">*/
/*                     <h1 class="titles center">Contactez nous</h1>*/
/*                     <div id="form_contact">*/
/*                         <!-- On attaque le bon fichier PHP pour l'envoi de mail -->*/
/*                         <form action="http://server-test.vince-feger.com/process.php" id="contact" method="POST">*/
/*                             <p>*/
/*                                 <label for="nom" class="nom">Nom:</label>*/
/*                                 <input id="nom" placeholder="Votre nom" name="nom" type="text">*/
/*                                 <br /><span id="msg_nom"></span>*/
/*                             </p>*/
/*                             <p>*/
/*                                 <label for="sujet" class="sujet">Sujet:</label>*/
/*                                 <input id="sujet" placeholder="Sujet du message" name="sujet" type="text">*/
/*                                 <br /><span id="msg_sujet"></span>*/
/*                             </p>*/
/*                             <p>*/
/*                                 <label for="email">Email:</label>*/
/*                                 <input id="email" placeholder="vous@exemple.com" name="email" type="email">*/
/*                                 <br /><span id="msg_email"></span>*/
/*                             </p>*/
/*                             <p>*/
/*                                 <label for="message">Message:</label>*/
/*                                 <textarea class="message-area" id="message" placeholder="..." name="message" rows="8" cols="50"></textarea>*/
/*                                 <br /><span id="msg_message"></span>*/
/*                             </p>*/
/*                             <p>*/
/*                                 <input class="boutonSend" id="send" type="submit" value="Envoyer" />*/
/*                             </p>*/
/*                             <p id="msgConfirm"></p>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </section>*/
/*             <!-- Fin du formulaire -->*/
/* */
/*             <footer class="endSite">*/
/*                 <p>*/
/*                     cesarthibon@lamarquisette.fr*/
/*                 </p>*/
/*                 <p>*/
/*                     06 99 79 64 13*/
/*                 </p>*/
/*                 <p>*/
/*                     © Vincent Feger / Perle Estru / Gaston Saboy / beWeb*/
/*                 </p>*/
/*             </footer>*/
/*         </div>*/
/*         <!-- Script du plugin lightbox -->*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>*/
/*         <!-- Fermeture des balise body et html -->*/
/* */
/*     </body>*/
/* </html>*/
/* */
