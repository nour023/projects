<?php

/* DwmCatalogueBundle:Default:consulter.html.twig */
class __TwigTemplate_72e5ca4498053da4c7ae15f9bb53c3dc6b318f15c2f9ea94b965b1df2e7ad4c2 extends Twig_Template
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
        
        
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/llink.css"), "html", null, true);
        echo "\" />

             <link rel=\"stylesheet\"  href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                          <link rel=\"stylesheet\"  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/number.css"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" />

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" />


 <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
 
<!--
Accord Template
http://www.templatemo.com/tm-478-accord
--> 

    <title>Consulter</title>
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
      
                   ";
        // line 46
        if (((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")) == 2)) {
            // line 47
            echo "         <form method=\"GET\" action=\"deconnection\" class=\"butt\">
                       <input type=\"submit\" class=\"butt\" name=\"DECONNECTER\" value=\"DECONNEXION\">
           </form>
         ";
        }
        // line 51
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
                                        <!-- sidebar carousel -->
                            <div class=\"menu-container\">
                                <div class=\"mauris\">
                                    <div id=\"carousel-menu\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                               
                                                <img  style=\"height: 220px\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/macgpic-1409254380-118720709714993-op.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                               
                                                <img   style=\"height: 220px\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/samsung-galaxy-tab-live-42.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                 <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/Gold-Macbook-Air1.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/images (3).jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 137
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
                                  
           
         
<form method=\"GET\" action=\"commande\" >
    ";
        // line 165
        if (((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")) == 2)) {
            // line 166
            echo "        <br><br><br><br><br><br><br>
        <input type=\"hidden\" name=\"prd\" value=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id"), "html", null, true);
            echo "\">
<table align=\"center\"><tr><td> <img  src=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "src"), "html", null, true);
            echo "\" ></td></tr>
    <tr><td> ";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo "</td></tr>
    <tr><td> ";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
            echo " \$</td></tr>
    <tr><td> Quantité <input type=\"number\" class=\"in\" min=\"1\" max=\"99\" required value=\"1\"    name=\"qte\" ></td></tr>
  
    <tr><td> <input type=\"submit\" name=\"commande\" class=\"buttt\" value=\"PASSER UNE COMMANDE\"></td></tr>
        
           
        ";
        }
        // line 177
        echo "   
</table>
</form>
        
        
        
        
       ";
        // line 184
        if (((isset($context["session"]) ? $context["session"] : $this->getContext($context, "session")) != 2)) {
            echo " 
           <br><br><br><br><br><br><br>
           <table align=\"center\"><tr><td> <img  src=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "src"), "html", null, true);
            echo "\" ></td></tr>
    <tr><td> ";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "libelle"), "html", null, true);
            echo "</td></tr>
    <tr><td> ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
            echo " \$</td></tr>
    
    <tr><td><a href=\"cnx\" class=\"a\">CONNECTER POUR PASSER UNE COMMANDE</a></td></tr>  </table>   
           ";
        }
        // line 192
        echo "                        
                        
                        
                        
                        
                        
                        

                     <!-- .contact-content -->
                 <!-- .main-page -->
          <!-- .row -->
           <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                    
               <footer class=\"row\" >
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\"style=\"color: black;font-size: 15px\">Copyright © 2016 Company Name 
                    
                    | Design: <a style=\"color: black;font-size: 15px\" rel=\"nofollow\" href=\"http://www.templatemo.com\" target=\"_parent\">template mo</a></p>
              <p class=\"pull-right\" style=\"color: black;font-size: 30px\">&copy;NYshop</p>
                </div>    
            </footer>  <!-- .row -->      
        </div> <!-- .container -->
    </div> <!-- .main-body -->
\t
 
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
        return "DwmCatalogueBundle:Default:consulter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 192,  278 => 188,  274 => 187,  270 => 186,  265 => 184,  256 => 177,  246 => 170,  242 => 169,  238 => 168,  234 => 167,  231 => 166,  229 => 165,  198 => 137,  188 => 130,  178 => 123,  168 => 116,  158 => 109,  98 => 51,  92 => 47,  90 => 46,  62 => 21,  56 => 18,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  30 => 10,  19 => 1,);
    }
}
