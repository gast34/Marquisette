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
        $__internal_34819ca8304f470a5302598e4a3917e824c37af17895977a95b11730d81f8fec = $this->env->getExtension("native_profiler");
        $__internal_34819ca8304f470a5302598e4a3917e824c37af17895977a95b11730d81f8fec->enter($__internal_34819ca8304f470a5302598e4a3917e824c37af17895977a95b11730d81f8fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainBundle:Default:index.html.twig"));

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
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <link rel=\"stylesheet\" href=\"../main.css\">
            <!-- Import du fichier JS principal -->
            <script type=\"text/javascript\" src=\"../script/main.js\"></script>
    </head>
    <body>

        
        ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            echo "<a href =\"logout\">Deconnexion</a>  
        ";
        } else {
            // line 20
            echo "<a href =\"connexion\">Connexion</a>
        ";
        }
        // line 22
        echo "        

<!-- DEBUT DE LA PAGE DE DEMANDE +18 ________________________________________-->
      <header class=\"container\">
            <div class=\"marg-title\">
              <!-- image du logo -->
                <img class=\"img-responsive img-majeur\" src=\"../img/marquisette_logo.png\" alt=\"\" />
              <!-- image majeur +18 -->
                <img class=\"img-responsive img-logo\" src=\"../img/majeur_marquisette.png\" alt=\"\" />
                  <h2 class=\"center\">
                    <a class=\"js-scrollTo\" id=\"yess\" href=\"#navigation\">OUI</a>
                    <span class=\"textred\">|</span>
                    <a href=\"#\">NON</a>
                  </h2>
            </div>
      </header>
      <!-- FIN DE LA PAGE DE DEMANDE +18 ____________________________________-->

     <nav id = \"navi\">
            <ul>
               <a class=\"js-scrollTo\" href = \".hist\">
                 <span class=\"dot bulle1\"></span>
               </a>
                   <a class=\"js-scrollTo\" href = \"#manif\">
                     <span class=\"dot bulle1-1\"></span>
                   </a>
                   <a class=\"js-scrollTo\" href = \"#qui\">
                     <span class=\"dot bulle1-2\"></span>
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

       <div class=\"container\" id=\"manif\">
         <img class=\"img-responsive manif\" src=\"../img/manif.jpg\" alt=\"\" />
       </div>

       <div class=\"container\" id=\"qui\">
        <h1 class=\"center\">Qui sommes nous ?</h1>
       </div>



       <div class=\"container prod\">
        <h1 class=\"center\">Produit</h1>
          <div class=\"col-lg-2\"></div>
            <p class=\"col-lg-8\">
              Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.
            </p>
            <div class=\"col-lg-2\"></div>
        </div>

          <div class=\"container prodorigines\">
            <h1 class=\"center\">Production et origines</h1>
              <div class=\"col-lg-2\"></div>
                <p class=\"col-lg-8\">
                  Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.
                </p>
              <div class=\"col-lg-2\"></div>
          </div>

          <div class=\"container recipe\">
            <h1 class=\"center\">Production et origines</h1>
              <div class=\"col-lg-2\"></div>
                <p class=\"col-lg-8\">
                  Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.
                </p>
              <div class=\"col-lg-2\"></div>
          </div>

     <section class=\"container pdv\" id=\"point\">
        <h1 class=\"center\">Point de vente</h1>
        <div class=\"col-lg-2\"></div>
          <p class=\"col-lg-8\">
            C'est avec un immense plaisir que nous développons au fil des rencontres nos points de distribution. Epiceries fines, restaurants, cafés, bars à cocktails, cavistes, découvrez nos différents points de distribution. Si vous souhaitez distribuer la Marquisette, n'hésitez pas à nous contacter on viendra vous faire déguster ce beau produit ! Cliquez ici pour découvrir nos points de vente...</p>
          <div class=\"col-lg-2\"></div>
     </section>

       <!-- Section COntacts -->
<!-- FORMULAIRE MAIL -->
    <footer class=\"fin-du-site\">
      <div class=\"center\">
        <h3 class=\"padContactez\">Contactez nous</h3>
        <div id=\"form_contact\">
  <form action=\"http://lamarquisette.fr/process.php\" id=\"contact\" method=\"POST\">
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
      <textarea id=\"message\" placeholder=\"...\" name=\"message\" rows=\"8\" cols=\"50\"></textarea>
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
        
        $__internal_34819ca8304f470a5302598e4a3917e824c37af17895977a95b11730d81f8fec->leave($__internal_34819ca8304f470a5302598e4a3917e824c37af17895977a95b11730d81f8fec_prof);

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
        return array (  51 => 22,  47 => 20,  42 => 19,  22 => 1,);
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
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*             <link rel="stylesheet" href="../main.css">*/
/*             <!-- Import du fichier JS principal -->*/
/*             <script type="text/javascript" src="../script/main.js"></script>*/
/*     </head>*/
/*     <body>*/
/* */
/*         */
/*         {%if app.user.username is defined %}<a href ="logout">Deconnexion</a>  */
/*         {%else%}<a href ="connexion">Connexion</a>*/
/*         {%endif%}*/
/*         */
/* */
/* <!-- DEBUT DE LA PAGE DE DEMANDE +18 ________________________________________-->*/
/*       <header class="container">*/
/*             <div class="marg-title">*/
/*               <!-- image du logo -->*/
/*                 <img class="img-responsive img-majeur" src="../img/marquisette_logo.png" alt="" />*/
/*               <!-- image majeur +18 -->*/
/*                 <img class="img-responsive img-logo" src="../img/majeur_marquisette.png" alt="" />*/
/*                   <h2 class="center">*/
/*                     <a class="js-scrollTo" id="yess" href="#navigation">OUI</a>*/
/*                     <span class="textred">|</span>*/
/*                     <a href="#">NON</a>*/
/*                   </h2>*/
/*             </div>*/
/*       </header>*/
/*       <!-- FIN DE LA PAGE DE DEMANDE +18 ____________________________________-->*/
/* */
/*      <nav id = "navi">*/
/*             <ul>*/
/*                <a class="js-scrollTo" href = ".hist">*/
/*                  <span class="dot bulle1"></span>*/
/*                </a>*/
/*                    <a class="js-scrollTo" href = "#manif">*/
/*                      <span class="dot bulle1-1"></span>*/
/*                    </a>*/
/*                    <a class="js-scrollTo" href = "#qui">*/
/*                      <span class="dot bulle1-2"></span>*/
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
/* */
/*        <div class="container" id="manif">*/
/*          <img class="img-responsive manif" src="../img/manif.jpg" alt="" />*/
/*        </div>*/
/* */
/*        <div class="container" id="qui">*/
/*         <h1 class="center">Qui sommes nous ?</h1>*/
/*        </div>*/
/* */
/* */
/* */
/*        <div class="container prod">*/
/*         <h1 class="center">Produit</h1>*/
/*           <div class="col-lg-2"></div>*/
/*             <p class="col-lg-8">*/
/*               Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.*/
/*             </p>*/
/*             <div class="col-lg-2"></div>*/
/*         </div>*/
/* */
/*           <div class="container prodorigines">*/
/*             <h1 class="center">Production et origines</h1>*/
/*               <div class="col-lg-2"></div>*/
/*                 <p class="col-lg-8">*/
/*                   Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.*/
/*                 </p>*/
/*               <div class="col-lg-2"></div>*/
/*           </div>*/
/* */
/*           <div class="container recipe">*/
/*             <h1 class="center">Production et origines</h1>*/
/*               <div class="col-lg-2"></div>*/
/*                 <p class="col-lg-8">*/
/*                   Boisson du sud de la France, la marquisette est connue dans des départements tels que l'Ardèche, la Drôme et le Gard. Originaires de l'Ardèche, les petits enfants Thibon ont connu la marquisette dans les bals d'été, les mariages, les baptêmes... Il existe autant de recettes que de villages. La recette traditionnelle de leur grand père, n'était autre qu'un subtil mélange de vin blanc, de vin pétillant, de limonade, aux senteurs d'agrumes et de rhum.La Marquisette Cesar Thibon est disponible en bouteille de 25 et 75cl.*/
/*                 </p>*/
/*               <div class="col-lg-2"></div>*/
/*           </div>*/
/* */
/*      <section class="container pdv" id="point">*/
/*         <h1 class="center">Point de vente</h1>*/
/*         <div class="col-lg-2"></div>*/
/*           <p class="col-lg-8">*/
/*             C'est avec un immense plaisir que nous développons au fil des rencontres nos points de distribution. Epiceries fines, restaurants, cafés, bars à cocktails, cavistes, découvrez nos différents points de distribution. Si vous souhaitez distribuer la Marquisette, n'hésitez pas à nous contacter on viendra vous faire déguster ce beau produit ! Cliquez ici pour découvrir nos points de vente...</p>*/
/*           <div class="col-lg-2"></div>*/
/*      </section>*/
/* */
/*        <!-- Section COntacts -->*/
/* <!-- FORMULAIRE MAIL -->*/
/*     <footer class="fin-du-site">*/
/*       <div class="center">*/
/*         <h3 class="padContactez">Contactez nous</h3>*/
/*         <div id="form_contact">*/
/*   <form action="http://lamarquisette.fr/process.php" id="contact" method="POST">*/
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
/*       <textarea id="message" placeholder="..." name="message" rows="8" cols="50"></textarea>*/
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
/* */
