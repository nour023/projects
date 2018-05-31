<?php

/* DwmCatalogueBundle:Default:pagefournisseur.html.twig */
class __TwigTemplate_f39c049940fbf527e21015787fb614139678ac9ce476163912cc099ba6406fa2 extends Twig_Template
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
<head>
   <link rel=\"stylesheet\"  href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 <link rel=\"stylesheet\"  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 <link rel=\"stylesheet\"  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/tabl.css"), "html", null, true);
        echo "\" type=\"text/css\" />

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" />



 <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 13
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
        <li><a href=\"newArticle\" class=\"nav1\">Ajouter un article</a></li>
        <li class=\"divider\"></li>
";
        // line 38
        echo "        
       </div> 
    
  </div>
  
    <div class=\"main-body\">
        <div class=\"container\">
            <br><br> <br>
            
            <table border=\"1\" width=\"70%\" bgcolor=\"white\">
            <tr >
                <td><i>Nom du produit</i></td><td><i>Prix</i></td>
                <td><i>Tva</i></td><td><i>Unite</i></td><td><i>Sous famille</i></td>
            <td><i>SUPPRIMER</i></td><td><i>MODIFIER</i></td></tr>
            ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 53
            echo "                <tr>
                    
                   
                    <td>
                        ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "libelle"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prix"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "tva"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "unite"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "Sfamille"), "id"), "html", null, true);
            echo "
                    <td ><form method=\"get\" action=\"suppArticle\" >
                            <i><input type=\"submit\" name=\"ok\" value=\"SUPPRIMER\" class=\"buttt\"></i>
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "\">
                        </form>
                    </td>
                    <td ><form method=\"get\" action=\"vmodifArticle\">
                            <i><input type=\"submit\" name=\"ok\" value=\"MODIFIER\" class=\"buttt\"></i>
                            <input type=\"hidden\" name=\"i\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "\">
                        </form>
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </tr>
                </table>
            
            
            
                        </div> <!-- main-menu -->
                     <!-- main-navigation -->
                 <br><br> <br><br><br> <br><br><br> <br>
                  
";
        // line 91
        echo "                                  


          
               <footer class=\"row\" >
                   
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    
            
                </div>    
            </footer>  <!-- .row -->      
        </div> <!-- .container -->
    </div> <!-- .main-body -->
\t
 
            <!-- .row -->      
        </div> <!-- .container -->
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
        return "DwmCatalogueBundle:Default:pagefournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 91,  152 => 81,  142 => 77,  134 => 72,  128 => 69,  122 => 66,  116 => 63,  110 => 60,  104 => 57,  98 => 53,  94 => 52,  78 => 38,  51 => 13,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
