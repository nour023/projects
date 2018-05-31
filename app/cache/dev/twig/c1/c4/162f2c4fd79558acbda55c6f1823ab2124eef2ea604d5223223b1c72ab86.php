<?php

/* DwmCatalogueBundle:Default:recherche.html.twig */
class __TwigTemplate_c1c4162f2c4fd79558acbda55c6f1823ab2124eef2ea604d5223223b1c72ab86 extends Twig_Template
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
        echo "  <head>
   <link rel=\"stylesheet\"  href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 <link rel=\"stylesheet\"  href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 <link rel=\"stylesheet\"  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/tabl.css"), "html", null, true);
        echo "\" type=\"text/css\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />



 <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
 
<!--
Accord Template
http://www.templatemo.com/tm-478-accord
--> 

    <title></title>
</head>

<body class=\"contact-page\">
   <div id=\"main_container\">
  <div class=\"top_bar\">
    <div class=\"top_search\">
  
      <form method=\"GET\" action=\"deconnection\">
                    <input type=\"submit\" name=\"dec\" value=\"Déconnexion\" class=\"but\" >
                    </form>
  
    </div>
       <div class=\"left_menu_corner\"></div>
      <ul class=\"menu\">
        <li class=\"divider\"></li>
";
        // line 35
        echo "        
       </div> 
    
  </div>
  
    <div class=\"main-body\">
        <div class=\"container\">
<br><br><br>
<table border=\"0\" align=\"center\" width=\"70%\" ><tr>
    ";
        // line 44
        $context["foo"] = 0;
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "Sfamille"), "familleid"), "libelle") == (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")))) {
                // line 47
                echo "        <td>  <div class=\"box about_box_line card\" style=\"background-color: black;height:300px;width: 201px\">
                                            <div class=\"box-icon\"  style=\"height: 200px;background-color: #333;width: 201px\">
            <img  src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "src"), "html", null, true);
                echo "\"   style=\"height: 200px; width: 200px;\" alt=\"Image\" class=\"img-responsive\">
            <div class=\"inner_search\">
                <H3 class=\"white\">";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle"), "html", null, true);
                echo "<br>
                                                    prix :
                                                    ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "prix"), "html", null, true);
                echo " \$</H3>
                </div>
            </div>
            <div class=\"info\">
<br><br><br><form method=\"GET\" action=\"consulter\" >
 <input type=\"submit\" value=\"consulter\" class=\"but\" >
        <input type=\"hidden\" name=\"produit\" value=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "id"), "html", null, true);
                echo "\">
         <input type=\"hidden\" name=\"jjjj\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "id"), "html", null, true);
                echo "\"></form><br>
         </div>
         </div>
         </td>
";
                // line 65
                echo "       
        ";
                // line 66
                $context["foo"] = ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) + 1);
                // line 67
                echo "       ";
                if (((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) > 2)) {
                    echo " 
          ";
                    // line 68
                    $context["foo"] = 0;
                    echo "  </tr><tr>
     ";
                }
                // line 70
                echo "     ";
            }
            // line 71
            echo "    
    
        ";
            // line 73
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "Sfamille"), "libelle") == (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")))) {
                // line 74
                echo "  <td> <div class=\"box about_box_line card\" style=\"background-color: black;height:300px;width: 201px\">
                                            <div class=\"box-icon\"  style=\"height: 200px;background-color: #333;width: 201px\"> 
      <img  src=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "src"), "html", null, true);
                echo "\"   style=\"height: 200px; width: 200px;\" alt=\"Image\" class=\"img-responsive\">
       <div class=\"inner_search\">
                <H3 class=\"white\">";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle"), "html", null, true);
                echo "<br>
                                                    prix :
                                                    ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "prix"), "html", null, true);
                echo " \$</H3>
                </div>
            </div>
            <div class=\"info\">
<br><br><br>
<form method=\"GET\" action=\"consulter\" >
 <input type=\"submit\" value=\"consulter\" class=\"but\" >
        <input type=\"hidden\" name=\"produit\" value=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "id"), "html", null, true);
                echo "\">
         <input type=\"hidden\" name=\"jjjj\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "id"), "html", null, true);
                echo "\"></form><br>
          </div>
         </div>
  </td>
";
                // line 93
                echo "          
  ";
                // line 94
                $context["foo"] = ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) + 1);
                // line 95
                echo "   ";
                if (((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) > 2)) {
                    echo " 
          ";
                    // line 96
                    $context["foo"] = 0;
                    echo " </tr><tr>
     ";
                }
            }
            // line 99
            echo "
        ";
            // line 100
            if (($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle") == (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")))) {
                // line 101
                echo "  <td>  <div class=\"box about_box_line card\" style=\"background-color: black;height:300px;width: 201px\">
                                            <div class=\"box-icon\"  style=\"height: 200px;background-color: #333;width: 201px\">
           <img  src=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "src"), "html", null, true);
                echo "\"   style=\"height: 200px; width: 200px;\" alt=\"Image\" class=\"img-responsive\">
 <div class=\"inner_search\">
                <H3 class=\"white\">";
                // line 105
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle"), "html", null, true);
                echo "<br>
                                                    prix :
                                                    ";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "prix"), "html", null, true);
                echo " \$</H3>
                </div>
            </div>
            <div class=\"info\"><br><br><br>
<form method=\"GET\" action=\"consulter\" >
 <input type=\"submit\" value=\"consulter\" class=\"but\" >
        <input type=\"hidden\" name=\"produit\" value=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "id"), "html", null, true);
                echo "\">
         <input type=\"hidden\" name=\"jjjj\" value=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "id"), "html", null, true);
                echo "\"></form><br>
          </div>
         </div>
  </td>
";
                // line 119
                echo "        
  ";
                // line 120
                $context["foo"] = ((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) + 1);
                // line 121
                echo "   ";
                if (((isset($context["foo"]) ? $context["foo"] : $this->getContext($context, "foo")) > 2)) {
                    echo " 
          ";
                    // line 122
                    $context["foo"] = 0;
                    echo " </tr><tr>
     ";
                }
                // line 124
                echo "        ";
            }
            // line 125
            echo "        
   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "</tr> 
</table>



 </div> <!-- main-menu -->
                     <!-- main-navigation -->
                 <br><br> <br><br><br> <br><br><br> <br>
                  
";
        // line 137
        echo "                                  


          
               <footer class=\"row\" >
                   
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    
            
                </div>    
            </footer>  <!-- .row -->      
        </div> <!-- .container -->
   <!-- .container -->
   <!-- .main-body -->


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
        return "DwmCatalogueBundle:Default:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 137,  266 => 127,  258 => 125,  255 => 124,  250 => 122,  245 => 121,  243 => 120,  240 => 119,  233 => 114,  229 => 113,  220 => 107,  215 => 105,  210 => 103,  206 => 101,  204 => 100,  201 => 99,  195 => 96,  190 => 95,  188 => 94,  185 => 93,  178 => 88,  174 => 87,  164 => 80,  159 => 78,  154 => 76,  150 => 74,  148 => 73,  144 => 71,  141 => 70,  136 => 68,  131 => 67,  129 => 66,  126 => 65,  119 => 60,  115 => 59,  106 => 53,  101 => 51,  96 => 49,  92 => 47,  89 => 46,  85 => 45,  83 => 44,  72 => 35,  46 => 11,  39 => 7,  35 => 6,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
