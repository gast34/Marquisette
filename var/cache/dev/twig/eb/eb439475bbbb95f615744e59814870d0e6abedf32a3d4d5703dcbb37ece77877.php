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
        $__internal_bb9df43f7862213eec33d7ba660c4e732be198b8cb741b20d4fa472edc637829 = $this->env->getExtension("native_profiler");
        $__internal_bb9df43f7862213eec33d7ba660c4e732be198b8cb741b20d4fa472edc637829->enter($__internal_bb9df43f7862213eec33d7ba660c4e732be198b8cb741b20d4fa472edc637829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainBundle:Default:index.html.twig"));

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
    </head>
    <body>

        
        ";
        // line 22
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            echo "Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <a href =\"logout\">Deconnexion</a><a href =\"gestion\">Gestion</a>  
        ";
        } else {
            // line 23
            echo "<a href =\"connexion\">Connexion</a>
        ";
        }
        // line 25
        echo "        

<html>

    <body>

     <nav id = \"navi\">
            <ul>
               <a class=\"js-scrollTo\" href = \".hist\">
                 <span class=\"dot bulle1\">
                 </span>
               </a>
                   <a class=\"js-scrollTo\" href = \"#manif\">
                     <span class=\"dot bulle1-1\">
                     </span>
                   </a>
                   <a class=\"js-scrollTo\" href = \"#qui\">
                     <span class=\"dot bulle1-2\">
                     </span>
                   </a>
              <a class=\"js-scrollTo\" href = \".prod\">
                <span class=\"dot bulle2\"></span>
              </a>
                    <a class=\"js-scrollTo\" href = \".prodorigines\">
                      <span class=\"dot bulle2-1\"></span>
                    </a>
                    <a class=\"js-scrollTo\" href = \".recipe\">
                      <span class=\"dot bulle2-2\"></span>
                    </a>
             <a class=\"js-scrollTo\" href = \"#point\">
               <span class=\"dot bulle3\"></span>
             </a>
           </ul>
     </nav>

       <div id=\"myCarousel\" class=\"carousel slide hist\">
         <!-- Indicators -->
         <ol class=\"carousel-indicators\">
           <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
           <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
           <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
         </ol>

         <!-- Wrapper for slides -->
         <div class=\"carousel-inner\">

           <div class=\"item active img1\"></div>

           <div class=\"item img2\"></div>

           <div class=\"item img3\"></div>

         </div>
       </div>
<!-- manifest -->
       <div class=\"container\" id=\"manif\">

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


       </div>
<!-- qui sommes nous -->
       <div class=\"container\" id=\"qui\">
           <h1 class=\"titles center\">Qui sommes nous ?</h1>

           <div class=\"col-xs-offset-2 col-xs-3\"><img class=\"img-responsive\" src=\"../img/qui1.png\" alt=\"\" /></div>
           <div class=\"col-xs-5\"><img class=\"img-responsive\" src=\"../img/marquisette_logo.png\" alt=\"\" /></div>

        </div>


       <div class=\"container prod \">
          <div class=\"col-xs-offset-2 col-xs-8\">
            <h1 class=\"titles center\">Produit</h1>
            <p class=\"\">
              Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.
            </p>
          </div>

            <div class=\"col-lg-2\"></div>
        </div>

     <section class=\"container pdv\" id=\"point\">
       <div class=\"col-xs-offset-2 col-xs-8\">
         <h1 class=\"titles center\">Point de vente</h1>
           <p class=\"\">
             C'est avec un immense plaisir que nous développons au fil des rencontres nos points de distribution. Epiceries fines, restaurants, cafés, bars à cocktails, cavistes, découvrez nos différents points de distribution. Si vous souhaitez distribuer la Marquisette, n'hésitez pas à nous contacter on viendra vous faire déguster ce beau produit ! Cliquez ici pour découvrir nos points de vente...
           </p>
       </div>
     </section>

       <!-- Section COntacts -->
<!-- FORMULAIRE MAIL -->
    <footer class=\"fin-du-site\">
      <div class=\"center\">
        <h3 class=\"padContactez\">Contactez nous</h3>
        <div id=\"form_contact\">
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
      <label for=\"message\">Message:</label>
      <textarea class=\"message-area\" id=\"message\" placeholder=\"...\" name=\"message\" rows=\"8\" cols=\"50\"></textarea>
        <br /><span id=\"msg_message\"></span>
    </p>
    <p>
      <input id=\"send\" type=\"submit\" value=\"Envoyer\" />
    </p>
</form>
<span id=\"msg_all\"></span>
<p id=\"test\"></p>
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
        
        $__internal_bb9df43f7862213eec33d7ba660c4e732be198b8cb741b20d4fa472edc637829->leave($__internal_bb9df43f7862213eec33d7ba660c4e732be198b8cb741b20d4fa472edc637829_prof);

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
        return array (  56 => 25,  52 => 23,  45 => 22,  22 => 1,);
    }
}
/* <html>*/
/*     <head>*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*             <meta charset="utf-8">*/
/*             <title>Marquisette</title>*/
/*             <!-- Import Bootstrap AVANT le fichier css (afin de pouvoir overight) -->*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*             <!-- Import de Jquery -->*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>*/
/*             <!-- Import de Bootstrap.js -->*/
/*             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">*/
/*             <script type='text/javascript' language='javascript' src='../script/disclaimer.js'></script>*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*             <link rel="stylesheet" href="../main.css">*/
/*             <!-- Import du fichier JS principal -->*/
/*             <script type="text/javascript" src="../script/main.js"></script>*/
/*     </head>*/
/*     <body>*/
/* */
/*         */
/*         {%if app.user.username is defined %}Bonjour {{app.user.username}} <a href ="logout">Deconnexion</a><a href ="gestion">Gestion</a>  */
/*         {%else%}<a href ="connexion">Connexion</a>*/
/*         {%endif%}*/
/*         */
/* */
/* <html>*/
/* */
/*     <body>*/
/* */
/*      <nav id = "navi">*/
/*             <ul>*/
/*                <a class="js-scrollTo" href = ".hist">*/
/*                  <span class="dot bulle1">*/
/*                  </span>*/
/*                </a>*/
/*                    <a class="js-scrollTo" href = "#manif">*/
/*                      <span class="dot bulle1-1">*/
/*                      </span>*/
/*                    </a>*/
/*                    <a class="js-scrollTo" href = "#qui">*/
/*                      <span class="dot bulle1-2">*/
/*                      </span>*/
/*                    </a>*/
/*               <a class="js-scrollTo" href = ".prod">*/
/*                 <span class="dot bulle2"></span>*/
/*               </a>*/
/*                     <a class="js-scrollTo" href = ".prodorigines">*/
/*                       <span class="dot bulle2-1"></span>*/
/*                     </a>*/
/*                     <a class="js-scrollTo" href = ".recipe">*/
/*                       <span class="dot bulle2-2"></span>*/
/*                     </a>*/
/*              <a class="js-scrollTo" href = "#point">*/
/*                <span class="dot bulle3"></span>*/
/*              </a>*/
/*            </ul>*/
/*      </nav>*/
/* */
/*        <div id="myCarousel" class="carousel slide hist">*/
/*          <!-- Indicators -->*/
/*          <ol class="carousel-indicators">*/
/*            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*            <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*            <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*          </ol>*/
/* */
/*          <!-- Wrapper for slides -->*/
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
/* <!-- manifest -->*/
/*        <div class="container" id="manif">*/
/* */
/*         <div class="center">*/
/*           <img class="" src="../img/marquisette_logo.png" alt="logo" />*/
/*         </div>*/
/* */
/*          <div class="marge-img wow bounceInLeft col-xs-offset-4 col-xs-4"><img class="img-responsive" src="../img/manif0.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif1.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif2.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif3.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif4.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif5.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif6.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif7.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInLeft col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif8.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInRight col-xs-offset-2 col-xs-8"><img class="img-responsive" src="../img/manif9.png" alt="" /></div>*/
/* */
/*          <div class="marge-img wow bounceInRight col-xs-offset-4 col-xs-4"><img class="img-responsive" src="../img/manif10.png" alt="" /></div>*/
/* */
/* */
/*        </div>*/
/* <!-- qui sommes nous -->*/
/*        <div class="container" id="qui">*/
/*            <h1 class="titles center">Qui sommes nous ?</h1>*/
/* */
/*            <div class="col-xs-offset-2 col-xs-3"><img class="img-responsive" src="../img/qui1.png" alt="" /></div>*/
/*            <div class="col-xs-5"><img class="img-responsive" src="../img/marquisette_logo.png" alt="" /></div>*/
/* */
/*         </div>*/
/* */
/* */
/*        <div class="container prod ">*/
/*           <div class="col-xs-offset-2 col-xs-8">*/
/*             <h1 class="titles center">Produit</h1>*/
/*             <p class="">*/
/*               Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.*/
/*             </p>*/
/*           </div>*/
/* */
/*             <div class="col-lg-2"></div>*/
/*         </div>*/
/* */
/*      <section class="container pdv" id="point">*/
/*        <div class="col-xs-offset-2 col-xs-8">*/
/*          <h1 class="titles center">Point de vente</h1>*/
/*            <p class="">*/
/*              C'est avec un immense plaisir que nous développons au fil des rencontres nos points de distribution. Epiceries fines, restaurants, cafés, bars à cocktails, cavistes, découvrez nos différents points de distribution. Si vous souhaitez distribuer la Marquisette, n'hésitez pas à nous contacter on viendra vous faire déguster ce beau produit ! Cliquez ici pour découvrir nos points de vente...*/
/*            </p>*/
/*        </div>*/
/*      </section>*/
/* */
/*        <!-- Section COntacts -->*/
/* <!-- FORMULAIRE MAIL -->*/
/*     <footer class="fin-du-site">*/
/*       <div class="center">*/
/*         <h3 class="padContactez">Contactez nous</h3>*/
/*         <div id="form_contact">*/
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
/*       <label for="message">Message:</label>*/
/*       <textarea class="message-area" id="message" placeholder="..." name="message" rows="8" cols="50"></textarea>*/
/*         <br /><span id="msg_message"></span>*/
/*     </p>*/
/*     <p>*/
/*       <input id="send" type="submit" value="Envoyer" />*/
/*     </p>*/
/* </form>*/
/* <span id="msg_all"></span>*/
/* <p id="test"></p>*/
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
/* </body>*/
/* </html>*/
/* */
