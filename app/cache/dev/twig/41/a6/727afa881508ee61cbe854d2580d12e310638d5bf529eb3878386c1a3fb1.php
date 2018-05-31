<?php

/* DwmCatalogueBundle:Default:inscrit.html.twig */
class __TwigTemplate_41a6727afa881508ee61cbe854d2580d12e310638d5bf529eb3878386c1a3fb1 extends Twig_Template
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
        // line 3
        echo "



<!DOCTYPE html>
<html lang=\"en\">
   <link rel=\"stylesheet\"  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" type=\"text/css\" />

  <SCRIPT language=\"JavaScript\">
    function validateform(){
        var x =document.inscritf.code.value;
        if(x>99999999 || x<10000000)
        {alert ('Votre code doit etre composer de 8 chifres'); 
            return false ;}
        return true ;
        
    } 
</script>




    
    
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

       <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styl.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" />
 
<!--
Accord Template
http://www.templatemo.com/tm-478-accord
--> 

    <title>Inscrit Fournisseur</title>
</head>

<body class=\"contact-page\">
    
    <div id=\"main_container\">
  <div class=\"top_bar\">

     <form method=\"GET\" action=\"connexionf\">  
    <table  border=\"1\">
    
    <tr><td><i><input placeholder=\"EMAIL...\" size=\"15\" type=\"email\" name=\"name\"></i></td>
      <td><i><input placeholder=\"CODE...\" size=\"15\" type=\"text\"  name=\"code\"></i></td>
      <td><i>  <input type=\"submit\" name=\"ok\" value=\"SE CONNECTER\" class=\"butt\"></i></td></tr>
   
    </table>
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
                                                     
                            </div>

                            <div class=\"menu-container\">                                
                                

                                  
                            </div>   

                            <div class=\"menu-container\">
                             

                                        <!-- Controls -->
                                       
                                       
                                    </div>
                                </div> <!-- .mauris -->
                            </div>
                        </div> <!-- main-menu -->
                    <!-- main-navigation -->

                    <div class=\"content-main contact-content\" style=\"height:850px; width:700px;\">
                        <div class=\"contact-content-upper\"   >
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                    <div class=\"gallery_title\">
                                        <h3></h3>
                                        
                                    </div>    
                                </div>                            
                            </div>
     
                            <div class=\"row\">  
                                <div class=\"col-sm-12 col-md-6 contact_left\" >   
                                    
                                            
     
             
                                 
                  
            
 <h2 style=\"color: #2f96b4;\"> Inscription: </h2>
<fieldset >
       <link rel=\"stylesheet\"  href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <form method=\"GET\" class=\"red\" onsubmit=\"return openWin()\" > 
    ";
        // line 118
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 119
            echo " <input type=\"hidden\" id=\"lo\" value=\"ok\" >
";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "</form>
    ";
        // line 125
        echo "<form method=\"GET\" onsubmit=\"return validateform()\" name=\"inscritf\" action=\"inscritFournisseur\">
  <div class=\"form-group\">                                          
                                            <input type=\"number\" class=\"form-control\" style=\"width:300px\" required name=\"code\" placeholder=\"CODE...\" >                                    
                                       </div>
        <div class=\"form-group\">                                          
                                            <input type=\"text\" class=\"form-control\" style=\"width:300px\" required name=\"name\" placeholder=\"NOM...\" >                                    
                                       </div>
          
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control\" style=\"width:300px\"  required name=\"libelle\" placeholder=\"LIBELLE...\" >      
                                        </div>
   
   <div class=\"form-group\">                                    
                                            <input type=\"text\" style=\"width:300px\" class=\"form-control\" required name=\"adresse\" placeholder=\"ADRESSE...\" >                                    
                                        </div>
        <div class=\"form-group\">                                    
                                            <input type=\"text\" style=\"width:300px\" class=\"form-control\"  required name=\"ville\" placeholder=\"VILLE...\" >                                    
                                        </div>
          
                                        <div class=\"form-group\">
                                            <input type=\"number\"  style=\"width:300px\" class=\"form-control\"  name=\"codepostal\" placeholder=\"CODE POSTAL...\" >      
                                        </div>
      <div class=\"form-group\">
                                            <input type=\"email\" style=\"width:300px\" class=\"form-control\"  required name=\"email\" placeholder=\"EMAIL...\" >      
                                      </div>
   <div class=\"form-group\">
                                            <input type=\"number\" style=\"width:300px\" class=\"form-control\"  required name=\"tel\" placeholder=\"NUMERO  TELEPHONE...\" >      
                                      
     

    <input type=\"submit\" value=\"Enregistrer\" class=\"buttonnn\">
         <input   type=\"reset\" value=\"Annuler\" class=\"buttonnn\" />
 </h>
     </form> 
       <br> <br>
 </fieldset> 
     

                                 <!-- .contact-left -->
      
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

            <footer class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\">Copyright © 2016 Company Name
                    
                    | Design: <a rel=\"nofollow\" href=\"http://www.templatemo.com\" target=\"_parent\">template mo</a></p>
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
        return "DwmCatalogueBundle:Default:inscrit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 125,  173 => 123,  164 => 120,  161 => 119,  157 => 118,  152 => 116,  67 => 34,  63 => 33,  59 => 32,  55 => 31,  30 => 9,  22 => 3,  19 => 1,);
    }
}
