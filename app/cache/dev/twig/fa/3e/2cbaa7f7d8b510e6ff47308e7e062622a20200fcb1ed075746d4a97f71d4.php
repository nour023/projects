<?php

/* DwmCatalogueBundle:Default:addArticle.html.twig */
class __TwigTemplate_fa3e2cbaa7f7d8b510e6ff47308e7e062622a20200fcb1ed075746d4a97f71d4 extends Twig_Template
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

<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" />



 <link id=\"callCss\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/themes/bootshop/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"screen\"/>
 
<!--
Accord Template
http://www.templatemo.com/tm-478-accord
--> 

    <title>Liste des articles</title>
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
                <a href=\"pagefournisseur\" class=\"nav2\"><li>Back</li></a>

        </ul>
        
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
                                    <a href=\"\" class=\"block-keep-ratio__content  main-menu-link\">
                                        <span class=\"main-menu-link-text\">
                                          
                                        </span>                                        
                                    </a>
                                </div>                                
                            </div>

                            <div class=\"menu-container\">                                
                                <div class=\"block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main\">                                    
                                    <a href=\"\" class=\"main-menu-link about block-keep-ratio__content flexbox-center\">
                                        <i class=\"fa fa-user fa-4x main-menu-link-icon\"></i>
                           
                                    </a>                                    
                                </div>

                                <div class=\"block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main\">
                                    <a href=\"\" class=\"main-menu-link contact block-keep-ratio__content flexbox-center\">
                                        <i class=\"fa fa-envelope-o fa-4x main-menu-link-icon\"></i>
                                
                                    </a>                                
                                </div>    
                            </div>   

                            <div class=\"menu-container\">
                                <div class=\"block-keep-ratio block-keep-ratio-1-1 block-keep-ratio-md-2-1 block-width-full gallery\">                                    
                                    <a href=\"\" class=\"main-menu-link  block-keep-ratio__content\">
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
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/macgpic-1409254380-118720709714993-op.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                            <div class=\"item\">
                                               
                                                <img   style=\"height: 220px\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/samsung-galaxy-tab-live-42.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                 <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/Gold-Macbook-Air1.jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/images (3).jpg"), "html", null, true);
        echo "\" alt=\"slider\">
                                                <div class=\"carousel-caption menu-caption\">
                                                   
                                                </div>
                                            </div>
                                                     <div class=\"item\">
                                               
                                                <img   style=\"height: 220px;width: 100%\" src=\"";
        // line 124
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
                                  
<br><br><br><br><br><br><br>
<center>
    ";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_start');
        echo "
    
    <table>
        <tr>
            <td>";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle"), 'label');
        echo "</td>
            <td>";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle"), 'widget');
        echo "</td>
            <td>";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "libelle"), 'errors');
        echo "</td>

        </tr>

        <tr>
            <td>";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "code"), 'label');
        echo "</td>
            <td>";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "code"), 'widget');
        echo "</td>
            <td>";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "code"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prix"), 'label');
        echo "</td>
            <td>";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prix"), 'widget');
        echo "</td>
            <td>";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "prix"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tva"), 'label');
        echo "</td>
            <td>";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tva"), 'widget');
        echo "</td>
            <td>";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "tva"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "unite"), 'label');
        echo "</td>
            <td>";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "unite"), 'widget');
        echo "</td>
            <td>";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "unite"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Sfamille"), 'label');
        echo "</td>
            <td>";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Sfamille"), 'widget');
        echo "</td>
            <td>";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Sfamille"), 'errors');
        echo "</td>

        </tr>
       
       <tr>
           <td>  <label for=\"img\">Photo </label></td>
                   <td>      <input  type=\"file\" name=\"img\"></td>
        </tr> 
      ";
        // line 200
        echo "       ";
        // line 224
        echo "        
    </table>
    ";
        // line 226
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'form_end');
        echo "
    </center>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:addArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 226,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 180,  265 => 176,  261 => 175,  257 => 174,  250 => 170,  246 => 169,  242 => 168,  235 => 164,  231 => 163,  227 => 162,  219 => 157,  215 => 156,  211 => 155,  204 => 151,  174 => 124,  164 => 117,  154 => 110,  144 => 103,  134 => 96,  47 => 12,  40 => 8,  36 => 7,  32 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }
}
