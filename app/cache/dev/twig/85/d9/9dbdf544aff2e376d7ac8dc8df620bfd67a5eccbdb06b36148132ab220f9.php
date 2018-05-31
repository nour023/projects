<?php

/* DwmCatalogueBundle:Default:listecommande.html.twig */
class __TwigTemplate_85d99dbdf544aff2e376d7ac8dc8df620bfd67a5eccbdb06b36148132ab220f9 extends Twig_Template
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
        // line 3
        echo "
";
        // line 13
        echo "
<!DOCTYPE html>

<head>
   <link rel=\"stylesheet\"  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 <link rel=\"stylesheet\"  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/tab.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 <link rel=\"stylesheet\"  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" type=\"text/css\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" />



 <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
 
<!--
Accord Template
http://www.templatemo.com/tm-478-accord
--> 

    <title>Liste de commandes</title>
</head>

<body class=\"contact-page\">
   <div id=\"main_container\">
  <div class=\"top_bar\">
    <div class=\"top_search\">
  
      <form class=\"form-inline navbar-search\" method=\"post\" action=\"products\" >
\t\t<input id=\"srchFld\" class=\"srchTxt\" type=\"text\" style=\"height:20px\"  />
\t\t 
\t\t  <button type=\"submit\" id=\"submitButton\" class=\"btn btn-primary\" style=\"line-height:1.428571;background-color: #333;border: none;\">Go</button>
    </form>
  
    </div>
       
      <div class=\"left_menu_corner\"></div>
      <form method=\"GET\" action=\"deconnection\">
           
               <input type=\"submit\"  class=\"butt\" value=\"DECONNEXION\" > 
              
            </form>
     
        
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
                                        <!-- sidebar carousel -->
                            <div class=\"menu-container\">
                                <div class=\"mauris\">
                                    <div id=\"carousel-menu\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                               
                                                <img  style=\"height: 220px\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/macgpic-1409254380-118720709714993-op.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                               
                                                <img   style=\"height: 220px\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/samsung-galaxy-tab-live-42.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                 <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/Gold-Macbook-Air1.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/images (3).jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/maxresdefault.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class=\"left carousel-control\" href=\"#carousel-menu\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"fa fa-caret-left\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"right carousel-control\" href=\"#carousel-menu\" role=\"button\" data-slide=\"next\">
                                            <span class=\"fa fa-caret-right\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                </div> <!-- .mauris -->
                            </div>
                        </div> <!-- main-menu -->
                    </aside> <!-- main-navigation -->
                 
                  
                    <div class=\"content-main contact-content\" style=\"height:1100px;background-color:transparent\">
                                  
                      
                        
                        <table  class=\"table\">
    <tr><td><H3><i>Produit</i></H3></td><td><H3><i>Quntité</i></H3></td> <td><H3><i>Prix</i></H3></td>
        <td><H3><i>Remise</i></H3></td>
    <td><H3><i>Supprimer</i></H3></td></tr>
    
";
        // line 175
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lcm"]) ? $context["lcm"] : $this->getContext($context, "lcm")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 176
            echo "    <tr><td>
  ";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "article"), "libelle"), "html", null, true);
            echo "
  </td>
   <td>
  ";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "qte"), "html", null, true);
            echo " 
  </td>
  <td>
  \$";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "prix"), "html", null, true);
            echo " 
  </td>
  <td>
  ";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "remise"), "html", null, true);
            echo " 
  </td>
    <td>
        <form method=\"GET\" action=\"supprimerlc\">
  <input type=\"submit\" value=\"supprimer\" class=\"buttt\">
  <input type=\"hidden\" name=\"lcm\" value=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "id"), "html", null, true);
            echo "\">
  <input type=\"hidden\" name=\"com\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"), "html", null, true);
            echo "\"> 
  <input type=\"hidden\" name=\"prix\" value=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "prix"), "html", null, true);
            echo "\"> 
  </form>
  </td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "<tr><td colspan=\"5\"><H2><i>Total =              \$";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "totalttc"), "html", null, true);
        echo " </i></H2></td>

</tr>
</table>

<table><tr><td>
<form method=\"GET\" onsubmit=\"return validateform()\" name=\"valider\" action=\"validercm\">
    <input type=\"hidden\" name=\"com\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"), "html", null, true);
        echo "\"> 
    <input type=\"hidden\" name=\"idcm\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "totalttc"), "html", null, true);
        echo "\">

<input type=\"submit\" name=\"acheter\" id=\"acheter\" value=\"Acheter\" class=\"buttt\"></form>
</td><td>

<form method=\"GET\" action=\"annulercm\">
<input type=\"submit\" value=\"Annuler\" class=\"buttt\" >
    <input type=\"hidden\" name=\"idcm\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id"), "html", null, true);
        echo "\">
</form>
</td></tr></table>
                        <div class=\"red\">
";
        // line 216
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 217
            echo " 
";
            // line 218
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "</div>
                        
                        
                        
                        

                     <!-- .contact-content -->
                 <!-- .main-page -->
          <!-- .row -->
           <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                    
               <footer class=\"row\" >
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\" style=\"color: black;font-size: 15px\">Copyright © 2016 Company Name 
                    
                    | Design: <a style=\"color: black;font-size: 15px\" rel=\"nofollow\" href=\"http://www.templatemo.com\" target=\"_parent\">template mo</a></p>
              <p class=\"pull-right\" style=\"color: black;font-size: 30px\">&copy;NYshop</p>
                </div>    
            </footer>  <!-- .row -->      
        </div> <!-- .container -->
    </div> <!-- .main-body -->
\t
 
            <!-- .row -->      
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
        return "DwmCatalogueBundle:Default:listecommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 221,  288 => 205,  284 => 204,  263 => 193,  259 => 192,  255 => 191,  226 => 176,  222 => 175,  167 => 129,  202 => 27,  191 => 11,  153 => 78,  81 => 41,  65 => 26,  34 => 3,  326 => 251,  281 => 213,  213 => 157,  161 => 96,  152 => 116,  181 => 62,  113 => 56,  127 => 83,  274 => 187,  270 => 186,  256 => 177,  234 => 167,  90 => 30,  232 => 168,  76 => 20,  155 => 93,  58 => 17,  178 => 123,  248 => 55,  245 => 54,  239 => 5,  223 => 164,  212 => 117,  200 => 111,  192 => 67,  188 => 10,  184 => 107,  180 => 106,  150 => 91,  97 => 29,  198 => 137,  186 => 139,  148 => 105,  137 => 84,  126 => 79,  118 => 76,  110 => 75,  53 => 15,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 210,  265 => 184,  261 => 175,  257 => 174,  250 => 170,  242 => 169,  231 => 166,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 216,  277 => 212,  205 => 55,  195 => 134,  185 => 134,  175 => 127,  165 => 120,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 218,  309 => 217,  305 => 216,  298 => 212,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 186,  241 => 183,  229 => 177,  220 => 70,  214 => 84,  177 => 136,  169 => 101,  140 => 55,  132 => 43,  128 => 42,  107 => 53,  61 => 17,  273 => 197,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 168,  235 => 180,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 85,  208 => 56,  204 => 73,  179 => 69,  159 => 61,  143 => 87,  135 => 88,  119 => 59,  102 => 73,  71 => 19,  67 => 29,  63 => 19,  59 => 6,  38 => 5,  94 => 28,  89 => 44,  85 => 42,  75 => 17,  68 => 14,  56 => 27,  87 => 29,  21 => 2,  26 => 3,  93 => 28,  88 => 6,  78 => 21,  46 => 8,  27 => 7,  44 => 12,  31 => 2,  28 => 17,  201 => 145,  196 => 68,  183 => 136,  171 => 61,  166 => 56,  163 => 62,  158 => 81,  156 => 94,  151 => 50,  142 => 59,  138 => 85,  136 => 44,  121 => 76,  117 => 75,  105 => 31,  91 => 26,  62 => 7,  49 => 23,  24 => 4,  25 => 3,  19 => 3,  79 => 21,  72 => 16,  69 => 11,  47 => 15,  40 => 13,  37 => 5,  22 => 13,  246 => 170,  157 => 122,  145 => 106,  139 => 45,  131 => 81,  123 => 82,  120 => 40,  115 => 43,  111 => 76,  108 => 36,  101 => 50,  98 => 58,  96 => 55,  83 => 25,  74 => 41,  66 => 15,  55 => 31,  52 => 16,  50 => 29,  43 => 24,  41 => 21,  35 => 6,  32 => 18,  29 => 5,  209 => 82,  203 => 150,  199 => 5,  193 => 143,  189 => 140,  187 => 143,  182 => 5,  176 => 125,  173 => 123,  168 => 116,  164 => 120,  162 => 55,  154 => 110,  149 => 90,  147 => 115,  144 => 88,  141 => 72,  133 => 67,  130 => 41,  125 => 78,  122 => 77,  116 => 41,  112 => 67,  109 => 34,  106 => 74,  103 => 74,  99 => 64,  95 => 47,  92 => 47,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 16,  54 => 18,  51 => 16,  48 => 14,  45 => 22,  42 => 7,  39 => 10,  36 => 19,  33 => 3,  30 => 2,);
    }
}
