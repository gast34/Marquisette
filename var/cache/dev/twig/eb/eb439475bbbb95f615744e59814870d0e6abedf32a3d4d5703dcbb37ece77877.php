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
        $__internal_440d60cc11c4ff0b7ac78737d83057f2de04794cba4ce5aad677c3a3c92e62f3 = $this->env->getExtension("native_profiler");
        $__internal_440d60cc11c4ff0b7ac78737d83057f2de04794cba4ce5aad677c3a3c92e62f3->enter($__internal_440d60cc11c4ff0b7ac78737d83057f2de04794cba4ce5aad677c3a3c92e62f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainBundle:Default:index.html.twig"));

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
        // line 29
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            echo "Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <a href =\"logout\">Deconnexion</a><a href =\"gestion\">Gestion</a>  
        ";
        } else {
            // line 30
            echo "<a href =\"connexion\">Connexion</a>
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        $context["i"] = 0;
        // line 34
        echo "        <div style=\"display:none\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["test"]) ? $context["test"] : $this->getContext($context, "test")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 36
            echo "                ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            echo "    

                <div class = \"description";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" >
                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "description", array()), "html", null, true);
            echo "
                </div>
                <div class = \"adresse";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                    ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "adresse", array()), "html", null, true);
            echo "
                </div>
                <div class = \"longitude";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "longitude", array()), "html", null, true);
            echo "
                </div>
                <div class = \"latitude";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                    ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "latitude", array()), "html", null, true);
            echo "  
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </div>

        <div id = \"val\" style=\"display:none\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
        echo "</div>

<!-- Menu de navigation (petites bulles sur la gauche de la vue) -->
     <nav id = \"navi\">
          <ul>
              <a class=\"js-scrollTo\" href = \".hist\"><!--fonction smooth scroll-->
                 <span class=\"dot bulle1\"></span>
              </a>
              <a class=\"js-scrollTo\" href = \"#manif\"><!--fonction smooth scroll-->
                 <span class=\"dot bulle1-1\"></span>
              </a>
              <a class=\"js-scrollTo\" href = \"#qui\"><!--fonction smooth scroll-->
               <span class=\"dot bulle1-2\"></span>
              </a>
              <a class=\"js-scrollTo\" href = \".prod\"><!--fonction smooth scroll-->
                <span class=\"dot bulle2\"></span>
              </a>
              <a class=\"js-scrollTo\" href = \"#point\"><!--fonction smooth scroll-->
               <span class=\"dot bulle3\"></span>
             </a>
          </ul>
     </nav>
     <!-- Carousel du haut___________________________________________________-->
       <div id=\"myCarousel\" class=\"carousel slide hist\">
         <!-- bulles control du carousel -->
         <ol class=\"carousel-indicators\">
           <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
           <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
           <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
         </ol>

         <!-- Images/items du carousel -->
         <div class=\"carousel-inner\">

           <div class=\"item active img1\"></div>

           <div class=\"item img2\"></div>

           <div class=\"item img3\"></div>

         </div>
       </div>
<!-- manifeste _____________________________________________________________-->
      <section class=\"container\" id=\"manif\">

        <div class=\"center\">
          <img class=\"\" src=\"../img/marquisette_logo.png\" alt=\"logo\" />
        </div>
           <div class=\"marge-img wow bounceInLeft col-xs-offset-4 col-xs-4\"><img class=\"img-responsive\" src=\"../img/manif0.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInRight col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif1.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInLeft col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif2.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInRight col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif3.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInLeft col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif4.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInRight col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif5.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInLeft col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif6.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInRight col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif7.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInLeft col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif8.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInRight col-xs-offset-2 col-xs-8\"><img class=\"img-responsive\" src=\"../img/manif9.png\" alt=\"\" /></div>
           <div class=\"marge-img wow bounceInRight col-xs-offset-4 col-xs-4\"><img class=\"img-responsive\" src=\"../img/manif10.png\" alt=\"\" /></div>
       </section>
<!--section qui sommes nous_________________________________________________ -->
       <section class=\"container\" id=\"qui\">
         <div class=\"col-xs-offset-2 col-xs-8\">
           <h1 class=\"titles center\">Qui sommes nous ?</h1>

           <div class=\"col-xs-offset-2 col-xs-3\"><img class=\"img-responsive\" src=\"../img/qui1.png\" alt=\"\" /></div>
           <div class=\"col-xs-5\"><img class=\"img-responsive\" src=\"../img/marquisette_logo.png\" alt=\"\" /></div>
         </div>
        </section>
<!-- Fin de la section qui sommes nous ______________________________________-->

<!-- Section PRODUIT ________________________________________________________-->
       <section class=\"container prod \">
          <div class=\"col-xs-offset-2 col-xs-8\">
            <h1 class=\"titles center\">Produit</h1>
            <p class=\"\">
              Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.
            </p>
          </div>
        </section>
<!-- Fin de la section produit_______________________________________________ -->

            <section class=\"container pdv\" id=\"point\">
                <div class=\"col-xs-offset-2 col-xs-8\">
                    <h1 class=\"titles center\">Point de vente</h1>
                    <p class=\"\">
                        C'est avec un immense plaisir que nous développons au fil des rencontres nos points de distribution. Epiceries fines, restaurants, cafés, bars à cocktails, cavistes, découvrez nos différents points de distribution. Si vous souhaitez distribuer la Marquisette, n'hésitez pas à nous contacter on viendra vous faire déguster ce beau produit ! Cliquez ici pour découvrir nos points de vente...
                    </p>
                    <div id=\"map\"></div>
                </div>

            </section>

       <!-- Section COntacts -->
<!-- FORMULAIRE MAIL -->
    <footer class=\"container fin-du-site center\">
      <div class=\"col-xs-offset-2 col-xs-8\">
        <h1 class=\"titles center padContactez\">Contactez nous</h1>
        <div id=\"form_contact\">
  <!-- On attaque le bon fichier PHP pour l'envoi de mail -->
  <form action=\"http://localhost/process.php\" id=\"contact\" method=\"POST\">
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
      <textarea class=\"message-area\" id=\"message\" placeholder=\"Votre message\" name=\"message\" rows=\"8\" cols=\"50\"></textarea>
        <br /><span id=\"msg_message\"></span>
    </p>
    <p>
      <input class=\"boutonSend\" id=\"send\" type=\"submit\" value=\"Envoyer\" />
    </p>
              <p id=\"msgConfirm\"></p>

</form>

</div>
</div>
</footer>
<!-- Fin du formulaire -->
<footer class=\"col-lg-12 endSite\">
  <p>
  cesarthibon@lamarquisette.fr
  </p>
  <p>
    06 99 79 64 13
  </p>
  <p>
    © Nous
  </p>
</footer>

        </body>
    </html>
";
        
        $__internal_440d60cc11c4ff0b7ac78737d83057f2de04794cba4ce5aad677c3a3c92e62f3->leave($__internal_440d60cc11c4ff0b7ac78737d83057f2de04794cba4ce5aad677c3a3c92e62f3_prof);

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
        return array (  126 => 54,  122 => 52,  112 => 48,  108 => 47,  103 => 45,  99 => 44,  94 => 42,  90 => 41,  85 => 39,  81 => 38,  75 => 36,  71 => 35,  68 => 34,  66 => 33,  63 => 32,  59 => 30,  52 => 29,  22 => 1,);
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
/*         {%if app.user.username is defined %}Bonjour {{app.user.username}} <a href ="logout">Deconnexion</a><a href ="gestion">Gestion</a>  */
/*         {%else%}<a href ="connexion">Connexion</a>*/
/*         {%endif%}*/
/* */
/*         {%set i = 0%}*/
/*         <div style="display:none">*/
/*             {%for result in test%}*/
/*                 {%set i = i + 1%}    */
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
/*                     {{result.latitude}}  */
/*                 </div>*/
/* */
/*             {%endfor%}*/
/*         </div>*/
/* */
/*         <div id = "val" style="display:none">{{i}}</div>*/
/* */
/* <!-- Menu de navigation (petites bulles sur la gauche de la vue) -->*/
/*      <nav id = "navi">*/
/*           <ul>*/
/*               <a class="js-scrollTo" href = ".hist"><!--fonction smooth scroll-->*/
/*                  <span class="dot bulle1"></span>*/
/*               </a>*/
/*               <a class="js-scrollTo" href = "#manif"><!--fonction smooth scroll-->*/
/*                  <span class="dot bulle1-1"></span>*/
/*               </a>*/
/*               <a class="js-scrollTo" href = "#qui"><!--fonction smooth scroll-->*/
/*                <span class="dot bulle1-2"></span>*/
/*               </a>*/
/*               <a class="js-scrollTo" href = ".prod"><!--fonction smooth scroll-->*/
/*                 <span class="dot bulle2"></span>*/
/*               </a>*/
/*               <a class="js-scrollTo" href = "#point"><!--fonction smooth scroll-->*/
/*                <span class="dot bulle3"></span>*/
/*              </a>*/
/*           </ul>*/
/*      </nav>*/
/*      <!-- Carousel du haut___________________________________________________-->*/
/*        <div id="myCarousel" class="carousel slide hist">*/
/*          <!-- bulles control du carousel -->*/
/*          <ol class="carousel-indicators">*/
/*            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*            <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*            <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*          </ol>*/
/* */
/*          <!-- Images/items du carousel -->*/
/*          <div class="carousel-inner">*/
/* */
/*            <div class="item active img1"></div>*/
/* */
/*            <div class="item img2"></div>*/
/* */
/*            <div class="item img3"></div>*/
/* */
/*          </div>*/
/*        </div>*/
/* <!-- manifeste _____________________________________________________________-->*/
/*       <section class="container" id="manif">*/
/* */
/*         <div class="center">*/
/*           <img class="" src="../img/marquisette_logo.png" alt="logo" />*/
/*         </div>*/
/*            <div class="marge-img wow bounceInLeft col-xs-offset-4 col-xs-4"><img class="img-responsive" src="../img/manif0.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif1.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif2.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif3.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif4.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif5.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif6.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif7.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif8.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif9.png" alt="" /></div>*/
/*            <div class="marge-img wow bounceInRight col-xs-offset-4 col-xs-4"><img class="img-responsive" src="../img/manif10.png" alt="" /></div>*/
/*        </section>*/
/* <!--section qui sommes nous_________________________________________________ -->*/
/*        <section class="container" id="qui">*/
/*          <div class="col-xs-offset-2 col-xs-8">*/
/*            <h1 class="titles center">Qui sommes nous ?</h1>*/
/* */
/*            <div class="col-xs-offset-2 col-xs-3"><img class="img-responsive" src="../img/qui1.png" alt="" /></div>*/
/*            <div class="col-xs-5"><img class="img-responsive" src="../img/marquisette_logo.png" alt="" /></div>*/
/*          </div>*/
/*         </section>*/
/* <!-- Fin de la section qui sommes nous ______________________________________-->*/
/* */
/* <!-- Section PRODUIT ________________________________________________________-->*/
/*        <section class="container prod ">*/
/*           <div class="col-xs-offset-2 col-xs-8">*/
/*             <h1 class="titles center">Produit</h1>*/
/*             <p class="">*/
/*               Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.*/
/*             </p>*/
/*           </div>*/
/*         </section>*/
/* <!-- Fin de la section produit_______________________________________________ -->*/
/* */
/*             <section class="container pdv" id="point">*/
/*                 <div class="col-xs-offset-2 col-xs-8">*/
/*                     <h1 class="titles center">Point de vente</h1>*/
/*                     <p class="">*/
/*                         C'est avec un immense plaisir que nous développons au fil des rencontres nos points de distribution. Epiceries fines, restaurants, cafés, bars à cocktails, cavistes, découvrez nos différents points de distribution. Si vous souhaitez distribuer la Marquisette, n'hésitez pas à nous contacter on viendra vous faire déguster ce beau produit ! Cliquez ici pour découvrir nos points de vente...*/
/*                     </p>*/
/*                     <div id="map"></div>*/
/*                 </div>*/
/* */
/*             </section>*/
/* */
/*        <!-- Section COntacts -->*/
/* <!-- FORMULAIRE MAIL -->*/
/*     <footer class="container fin-du-site center">*/
/*       <div class="col-xs-offset-2 col-xs-8">*/
/*         <h1 class="titles center padContactez">Contactez nous</h1>*/
/*         <div id="form_contact">*/
/*   <!-- On attaque le bon fichier PHP pour l'envoi de mail -->*/
/*   <form action="http://localhost/process.php" id="contact" method="POST">*/
/*     <p>*/
/*       <label for="nom" class="nom">Nom:</label>*/
/*       <input id="nom" placeholder="Votre nom" name="nom" type="text">*/
/*         <br /><span id="msg_nom"></span>*/
/*     </p>*/
/*     <p>*/
/*       <label for="sujet" class="sujet">Sujet:</label>*/
/*       <input id="sujet" placeholder="Sujet du message" name="sujet" type="text">*/
/*         <br /><span id="msg_sujet"></span>*/
/*     </p>*/
/*     <p>*/
/*       <label for="email">Email:</label>*/
/*       <input id="email" placeholder="vous@exemple.com" name="email" type="email">*/
/*         <br /><span id="msg_email"></span>*/
/*     </p>*/
/*     <p>*/
/*       <textarea class="message-area" id="message" placeholder="Votre message" name="message" rows="8" cols="50"></textarea>*/
/*         <br /><span id="msg_message"></span>*/
/*     </p>*/
/*     <p>*/
/*       <input class="boutonSend" id="send" type="submit" value="Envoyer" />*/
/*     </p>*/
/*               <p id="msgConfirm"></p>*/
/* */
/* </form>*/
/* */
/* </div>*/
/* </div>*/
/* </footer>*/
/* <!-- Fin du formulaire -->*/
/* <footer class="col-lg-12 endSite">*/
/*   <p>*/
/*   cesarthibon@lamarquisette.fr*/
/*   </p>*/
/*   <p>*/
/*     06 99 79 64 13*/
/*   </p>*/
/*   <p>*/
/*     © Nous*/
/*   </p>*/
/* </footer>*/
/* */
/*         </body>*/
/*     </html>*/
/* */
