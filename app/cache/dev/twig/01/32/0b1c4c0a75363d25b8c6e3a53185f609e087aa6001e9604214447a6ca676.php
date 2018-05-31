<?php

/* DwmCatalogueBundle:Default:inscritc.html.twig */
class __TwigTemplate_01320b1c4c0a75363d25b8c6e3a53185f609e087aa6001e9604214447a6ca676 extends Twig_Template
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
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styl.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" />

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" />

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" />


 <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
 <SCRIPT language=\"JavaScript\">
  function openWin() {
      var l =document.getElementById('lo');
    if(l.value===\"ok\"){
            {alert (' test'); 
            return false ;}
        }
        
        
        return true ;
}
  
    function validateform(){
        var x =document.inscritc.mdp.value;
        var y =document.inscritc.mdpp.value;
        var a =document.getElementById('h');
        var b =document.getElementById('f');
        
        if(x.length<8)
        {alert (' Mot de passe doit étre supérieur a 7 caractéres'); 
            return false ;}
        if (x!==y)
        {alert (' Veuillez vérifer la confirmation du votre  mot de passe'); 
            return false ;}
        
        if (!(a.checked===true || b.checked===true))
        {alert ('Veuillez choisir votre sexe'); 
            return false ;}
        
        
        
        
        return true ;
        
        
    } 
</script>

 

    <title>Inscription</title>
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
                                    <div id=\"carousel-menu\" class=\"carousel slide\" data-ride=\"carousel\">
                                        <!-- Wrapper for slides -->
                                        <div class=\"carousel-inner\" role=\"listbox\">
                                            <div class=\"item active\">
                                               
                                                <img  style=\"height: 220px\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/macgpic-1409254380-118720709714993-op.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                               
                                                <img   style=\"height: 220px\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/samsung-galaxy-tab-live-42.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                 <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/Gold-Macbook-Air1.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/images (3).jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 164
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
                    
       
                    <div class=\"content-main contact-content\" style=\"height:1000px;background-color:transparent\">
                        <div class=\"contact-content-upper\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    <div class=\"gallery_title\"  style=\"    border-left: 4px solid black;\">
                                        <h3 style=\"color: black\">NYshop  </h3>
                                        
                                    </div>    
                                </div>                            
                            </div>
     
                            <div class=\"row\">  
                                <div class=\"col-sm-12 col-md-6 contact_left\">   
                                    <br> <br>
                                            <div class=\"transbox\" style=\"  width: 100%; height:100%\">
     
             
            <br>
                  
            


<fieldset >
   <link rel=\"stylesheet\"  href=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  
    ";
        // line 212
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 213
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "
    <legend> <h1>hello  </h1></legend> <br>
    <form method=\"GET\" onsubmit=\"return validateform()\" name=\"inscritc\" action=\"Inscritclient\">  
  <div class=\"form-group\">                                          
                                            <input type=\"text\" class=\"form-control\" style=\"border-bottom: 2px solid black;background-color: transparent;border-radius: 45px;width: 400px\" id='name' required name=\"nom\" placeholder=\"NOM...\" >                                    
                                       </div>
          
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" style=\"border-bottom: 2px solid black;background-color: transparent;border-radius: 45px;width: 400px\" id=\"pre\" required name=\"prenom\" placeholder=\"PRENOM...\" >      
                                        </div>
         <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" style=\"border-bottom: 2px solid black;background-color: transparent;border-radius: 45px;width: 400px\"  required name=\"adresse\" placeholder=\"ADRESSE...\" >      
                                        </div>
     <div class=\"form-group\">
          <INPUT type=\"radio\" name=\"sexe\" id=\"h\" value=\"homme\"> <h style=\"color: black;font-size: 15px\">Homme</h>
 <INPUT type=\"radio\" name=\"sexe\" id=\"f\" value=\"femme\"><h style=\"color: black;font-size: 15px\"> Femme </h>
     </div>
   <div class=\"form-group\">                                    
                                            <input type=\"text\" style=\"border-bottom: 2px solid black;background-color: transparent;border-radius: 45px;width: 400px\" class=\"form-control\" id=\"log\" required name=\"login\" placeholder=\"LOGIN...\" >                                    
                                        </div>
          
                                        <div class=\"form-group\">
                                            <input type=\"password\"  style=\"border-bottom: 2px solid black;background-color: transparent;border-radius: 45px;width: 400px\"  class=\"form-control\" id=\"motdepasse\" name=\"mdp\" placeholder=\"MOT PASSE...\" >      
                                        </div>
      <div class=\"form-group\">
                                            <input type=\"password\" style=\"border-bottom: 2px solid black;background-color: transparent;border-radius: 45px;width: 400px\" class=\"form-control\" id=\"motdepassee\" required name=\"mdpp\" placeholder=\"RETAPER VOTRE MOT PASSE...\" >      
                                      </div>
        <div class=\"form-group\">
                                            <input type=\"number\" class=\"form-control\" id=\"motdepassee\" required name=\"compte\" placeholder=\"NUMERO DU COMPTE...\" style=\"border-bottom: 2px solid black;background-color: transparent;border-radius: 45px;width: 400px\">      
                                      </div>
   
     

    <input type=\"submit\" value=\"Enregistrer\" class=\"btn view_more btn-submit\" style=\"border-radius: 45px;background-color:black;outline: 0px\">
";
        // line 251
        echo " 
     </form> 
       <br> <br>
 </fieldset> 
     
                        </div> <!-- .contact-left -->
                                <div class=\"content-main contact-content\"style=\"width: 250%\" ></div>
      
                                                               <div class=\"col-sm-12 col-md-6 contact_right\">
                                 
                                                               </div>
                                    
                                

                                      
                          
                              
                                </div> <!-- .contact_right -->

                            </div> <!-- .row -->
                        </div>

                        <div class=\"row\" style=\"height:200px\">
                                           
                        </div>

                    </div> <!-- .contact-content -->
                </div> <!-- .main-page -->
            </div> <!-- .row -->

            
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
        return "DwmCatalogueBundle:Default:inscritc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 251,  290 => 216,  281 => 213,  277 => 212,  272 => 210,  223 => 164,  213 => 157,  203 => 150,  193 => 143,  183 => 136,  63 => 19,  57 => 16,  52 => 14,  48 => 13,  44 => 12,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  22 => 4,  19 => 1,);
    }
}
