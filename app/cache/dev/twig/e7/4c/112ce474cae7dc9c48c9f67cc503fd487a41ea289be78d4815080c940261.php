<?php

/* DwmCatalogueBundle:Default:panier.html.twig */
class __TwigTemplate_e74c112ce474cae7dc9c48c9f67cc503fd487a41ea289be78d4815080c940261 extends Twig_Template
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
        // line 1
        echo "

";
        // line 7
        echo "<html lang=\"en\">
<head>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" />

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" />


 <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>

    <title>panier</title>
</head>

<body class=\"contact-page\">
   <div id=\"main_container\">
  <div class=\"top_bar\">
    <div class=\"top_search\">
  
      <form class=\"form-inline navbar-search\" method=\"post\" action=\"recherche\" >
\t\t<input id=\"srchFld\" name=\"recherche\" class=\"srchTxt\" type=\"text\" style=\"height:20px;outline: 0px;\"  />
\t\t 
\t\t  <button type=\"submit\" id=\"submitButton\" class=\"btnn\" style=\"line-height:1.428571;height: 30px;width: 33px;outline: 0px;border-radius: 5px;color:white;background-color: #333;border: none;\">Go</button>
    </form>
  
    </div>
       
      <div class=\"left_menu_corner\"></div>
      
     ";
        // line 37
        echo "        ";
        // line 41
        echo "        <form method=\"GET\" action=\"deconnection\">
           ";
        // line 42
        if (((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")) == 2)) {
            echo "<ul class=\"menu\">
";
            // line 45
            echo "
        <li><a href=\"listecommande\" class=\"nav1\"> LISTE</a></li></ul>
               ";
        }
        // line 48
        echo "            </form>
        ";
        // line 49
        if (((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")) != 2)) {
            // line 50
            echo " <ul class=\"menu\">
        <li><a href=\"cnx\" class=\"nav1\"> connexion</a></li>
        <li class=\"divider\"></li>
        <li><a href=\"inscritc\" class=\"nav2\" >s'inscrire</a></li>
        <li class=\"divider\"></li></ul>               ";
        }
        // line 55
        echo "        
        
       </div>
  </div>
  
    <div class=\"main-body\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"main-page\">
                    <aside class=\"main-navigation\">
                        <div class=\"main-menu\">

                            <div class=\"menu-container\">
                                <div class=\"block-keep-ratio block-keep-ratio-2-1 block-width-full home\">                                    
                                    <a href=\"accueil\" class=\"block-keep-ratio__content  main-menu-link\">
                                        <span class=\"main-menu-link-text\">
                                          
                                        </span>                                        
                                    </a>
                                </div>                                
                            </div>

                            <div class=\"menu-container\">                                
                                <div class=\"block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main\">                                    
                                    <a href=\"about\" class=\"main-menu-link about block-keep-ratio__content flexbox-center\">
                                        <i class=\"fa fa-user fa-4x main-menu-link-icon\"></i>
                           
                                    </a>                                    
                                </div>

                                <div class=\"block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main\">
                                    <a href=\"contacte\" class=\"main-menu-link contact block-keep-ratio__content flexbox-center\">
                                        <i class=\"fa fa-envelope-o fa-4x main-menu-link-icon\"></i>
                                
                                    </a>                                
                                </div>    
                            </div>   

                            <div class=\"menu-container\">
                                <div class=\"block-keep-ratio block-keep-ratio-1-1 block-keep-ratio-md-2-1 block-width-full gallery\">                                    
                                    <a href=\"panier\" class=\"main-menu-link  block-keep-ratio__content\">
                                        <span class=\"main-menu-link-text\">
                                            
                                        </span>                                            
                                    </a>                                    
                                </div>                                
                            </div>

                            <!-- sidebar carousel -->
                             <!-- sidebar carousel -->
                            <div class=\"menu-container\">
                                <div class=\"mauris\">
                                    <div id=\"carousel-menu\"  data-ride=\"carousel\">
                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                               
                                                <img  style=\"height: 220px\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/macgpic-1409254380-118720709714993-op.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                               
                                                <img   style=\"height: 220px\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/samsung-galaxy-tab-live-42.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                 <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/Gold-Macbook-Air1.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/images (3).jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/maxresdefault.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class=\"left carousell-control\" href=\"#carousel-menu\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"fa fa-caret-left\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"right carousell-control\" href=\"#carousel-menu\" role=\"button\" data-slide=\"next\">
                                            <span class=\"fa fa-caret-right\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- .mauris -->
                            </div>
                        </div> <!-- main-menu -->
                    </aside> <!-- main-navigation -->
                    
       
                    <div class=\"content-main contact-content\" style=\"height:1000px;background-color:transparent\">
                        <div class=\"contact-content-upper\">
                            <div class=\"row\">
                              
                                    <div class=\"gallery_title\"  style=\"    border-left: 4px solid black;\">
                                        <h3 style=\"color: black\">NYshop  </h3>
                             
                                </div>                            
                            </div>
     
                            <div class=\"row about-box-main\" >
                             

                                    <div class=\"cards\">

                                        <div class=\"box about_box_line card\" style=\"background-color: black;height:300px\">
                                            <div class=\"box-icon\" style=\"height: 150px\">

                                                <img  src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 0), "src"), "html", null, true);
        echo "\"   style=\"height: 150px\" alt=\"Image\" class=\"img-responsive\">
                                                <div class=\"inner_search\">
                                                    <H3 class=\"white\">";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 0), "libelle"), "html", null, true);
        echo "<br>
                                                    prix :
                                                    ";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 0), "prix"), "html", null, true);
        echo " \$</H3>
                                                </div> <!-- .inner_search -->
                                            </div> <!-- .box-icon -->
                                            <div class=\"info\">
                                                <form method=\"GET\" action=\"consulter\">
                                                <div class=\"about_box_title\" >
                                               <input type=\"submit\" value=\"CONSULTER\" class=\"but\">
\t\t\t\t              <input type=\"hidden\" name=\"produit\" value=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 0), "id"), "html", null, true);
        echo "\">
                                              <input type=\"hidden\" name=\"jjjj\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 0), "id"), "html", null, true);
        echo "\">                                                   
                                                </div>
                                    </form>
                                            </div> <!-- .info -->
                                         
                                            <p class=\"about_box_text\"></p>
                                        </div>

                                        <div class=\"box about_box_line card\" style=\"background-color: black;height:300px\">
                                            <div class=\"box-icon\"  style=\"height: 150px\">

                                                <img  src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 1), "src"), "html", null, true);
        echo "\"  style=\"height: 150px\" alt=\"Image\" class=\"img-responsive\">
                                                <div class=\"inner_search\">
                                                    <H3 class=\"white\">";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 1), "libelle"), "html", null, true);
        echo "<br>
                                                    prix :
                                                    ";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 1), "prix"), "html", null, true);
        echo " \$</H3>
                                                </div>
                                            </div>
                                            <div class=\"info\">
                                              <form method=\"GET\" action=\"consulter\">
                                                <div class=\"about_box_title\">
                                                    <input type=\"submit\" value=\"CONSULTER\" class=\"but\">
\t\t\t\t              <input type=\"hidden\" name=\"produit\" value=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 1), "id"), "html", null, true);
        echo "\">
                                              <input type=\"hidden\" name=\"jjjj\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 1), "id"), "html", null, true);
        echo "\">
                                                </div>
                                                </form>
                                            </div>
                                          
                                            <p class=\"about_box_text\"></p>
                                        </div>

                                        <div class=\"box about_box_line card\" style=\"background-color: black;height:300px\">
                                            <div class=\"box-icon\"  style=\"height: 150px\">
                                                <img  src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 2), "src"), "html", null, true);
        echo "\"  style=\"height: 150px\" alt=\"Image\" class=\"img-responsive\">
                                               <div class=\"inner_search\">
                                                    <H3 class=\"white\">";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 2), "libelle"), "html", null, true);
        echo "<br>
                                                    prix :
                                                    ";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 2), "prix"), "html", null, true);
        echo " \$</H3>
                                                </div><!-- .inner_search -->
                                            </div> <!-- .box-icon -->
                                            <div class=\"info\">
                                                <form method=\"GET\" action=\"consulter\">
                                                <div class=\"about_box_title\">
                                                    
                                              <input type=\"submit\" value=\"CONSULTER\" class=\"but\">
\t\t\t\t              <input type=\"hidden\" name=\"produit\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 2), "id"), "html", null, true);
        echo "\">
                                              <input type=\"hidden\" name=\"jjjj\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 2), "id"), "html", null, true);
        echo "\">
                                                </div>
                                                </form>
                                            </div>
                                           
                                            <p class=\"about_box_text\"></p>
                                        </div>

                                    </div>

                                </div>

                            </div>
                                                <br>
                            
                            <div class=\"row about-box-main\" >
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">

                                    <div class=\"cards\">

                                        <div class=\"box about_box_line card\" style=\"background-color: black;height:300px\">
                                            <div class=\"box-icon\" style=\"height: 150px\">

                                                <img  src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 3), "src"), "html", null, true);
        echo "\"   style=\"height: 150px\"alt=\"Image\" class=\"img-responsive\">
                                                <div class=\"inner_search\">
                                                    <H3 class=\"white\">";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 3), "libelle"), "html", null, true);
        echo "<br>
                                                    prix :
                                                    ";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 3), "prix"), "html", null, true);
        echo " \$</H3>
                                                </div><!-- .inner_search -->
                                            </div> <!-- .box-icon -->
                                            <div class=\"info\">
                                                <div class=\"about_box_title\">
                                                 <form method=\"GET\" action=\"consulter\">   
                                              <input type=\"submit\" value=\"CONSULTER\" class=\"but\">
\t\t\t\t              <input type=\"hidden\" name=\"produit\" value=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 3), "id"), "html", null, true);
        echo "\">
                                              <input type=\"hidden\" name=\"jjjj\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 3), "id"), "html", null, true);
        echo "\">
                                              </form>
                                                </div>
                                                
                                                 
                                                <h3 style=\"color: whitesmoke\"> </h3>
  <h4 ><a class=\"btn\" href=\"#\" style=\"width: 60px\"> <i class=\"icon-shopping-cart\"></i></a> <a class=\"btn\" href=\"#\"></a></h4>

                                            </div> <!-- .info -->
                                            
                                            <p class=\"about_box_text\"></p>
                                        </div>

                                        <div class=\"box about_box_line card\" style=\"background-color: black;height:300px\">
                                            <div class=\"box-icon\"  style=\"height: 150px\">

                                                
                                                    
                                                <img  src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 4), "src"), "html", null, true);
        echo "\"  style=\"height: 150px\" alt=\"Image\" class=\"img-responsive\">
                                                 <div class=\"inner_search\">
                                                    <H3 class=\"white\">";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 4), "libelle"), "html", null, true);
        echo "<br>
                                                    prix :
                                                    ";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 4), "prix"), "html", null, true);
        echo " \$</H3>
                                                </div>
                                            </div>
                                            <div class=\"info\">
                                                <form method=\"GET\" action=\"consulter\">
                                                <div class=\"about_box_title\">
                                                 <input type=\"submit\" value=\"CONSULTER\" class=\"but\">
\t\t\t\t              <input type=\"hidden\" name=\"produit\" value=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 4), "id"), "html", null, true);
        echo "\">
                                              <input type=\"hidden\" name=\"jjjj\" value=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 4), "id"), "html", null, true);
        echo "\">  
                                                </div>
                                                </form>
                                            </div>
                                        
                                            <p class=\"about_box_text\"></p>
                                        </div>

                                        <div class=\"box about_box_line card\" style=\"background-color: black;height:300px \">
                                            <div class=\"box-icon\"  style=\"height: 150px\">
                                                <img  src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 5), "src"), "html", null, true);
        echo "\"  style=\"height: 150px\" alt=\"Image\" class=\"img-responsive\">
                                                <div class=\"inner_search\">
                                                    <H3 class=\"white\">";
        // line 317
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 5), "libelle"), "html", null, true);
        echo "<br>
                                                    prix :
                                                    ";
        // line 319
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 5), "prix"), "html", null, true);
        echo " \$</H3>
                                                </div><!-- .inner_search -->
                                            </div> <!-- .box-icon -->
                                            <div class=\"info\">
                                                <form method=\"GET\" action=\"consulter\">
                                                  <div class=\"about_box_title\">
                                                      <input type=\"submit\" value=\"CONSULTER\" class=\"but\">
\t\t\t\t              <input type=\"hidden\" name=\"produit\" value=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), 5), "id"), "html", null, true);
        echo "\">
                                              <input type=\"hidden\" name=\"jjjj\" value=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), 5), "id"), "html", null, true);
        echo "\">
                                                </div>
                                                </form>
                                            </div>
                                            

                                    </div>

                                </div>

                            </div>

                                   <div class=\"content-main contact-content\"style=\"width: 250%\" ></div>  
                                           
           <footer class=\"row\" >
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\"style=\"color: black;font-size: 15px\">Copyright © 2016 Company Name 
                    
                    | Design: <a style=\"color: black;font-size: 15px\" rel=\"nofollow\" href=\"http://www.templatemo.com\" target=\"_parent\">template mo</a></p>
              <p class=\"pull-right\" style=\"color: black;font-size: 30px\">&copy;NYshop</p>
                </div>    
            </footer>  <!-- .row -->      
        </div> <!-- .container -->
    </div> <!-- .main-body -->

    <script src=\"js/jquery-1.11.3.min.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script>
        /* Google map
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                                zoom: 16,
                                center: new google.maps.LatLng(13.758468,100.567481),
                                scrollwheel: false
                            };  
        
            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
                calculateCenter();
            });
        
            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(center);
            });
        } // initialize

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        }
      
        // DOM is ready.
        \$(document).ready(function(){
            loadGoogleMap();
        });
    </script>
</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 327,  467 => 326,  457 => 319,  452 => 317,  447 => 315,  434 => 305,  430 => 304,  420 => 297,  415 => 295,  410 => 293,  389 => 275,  385 => 274,  375 => 267,  370 => 265,  365 => 263,  339 => 240,  335 => 239,  324 => 231,  319 => 229,  314 => 227,  301 => 217,  297 => 216,  287 => 209,  282 => 207,  277 => 205,  263 => 194,  259 => 193,  249 => 186,  244 => 184,  239 => 182,  195 => 141,  185 => 134,  175 => 127,  165 => 120,  155 => 113,  95 => 55,  88 => 50,  86 => 49,  83 => 48,  78 => 45,  74 => 42,  71 => 41,  69 => 37,  46 => 16,  40 => 13,  35 => 11,  31 => 10,  27 => 9,  23 => 7,  19 => 1,);
    }
}
