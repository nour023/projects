<?php

/* DwmCatalogueBundle:Default:test.html.twig */
class __TwigTemplate_404ce75aaadae020fdfc76baee7de93eeccbaa885a5cc0eaf0a66385a72530ea extends Twig_Template
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
        // line 2
        echo "   <head>
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
        <li><a href=\"addArticle\" class=\"nav1\">Ajouter un article</a></li>
        <li class=\"divider\"></li>
";
        // line 38
        echo "        
       </div> 
    
  </div>
  
    <div class=\"main-body\">
        <div class=\"container\">
            <br><br> <br>
<table border=\"1\">
    
";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 49
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "Sfamille"), "familleid"), "libelle") == (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")))) {
                // line 50
                echo "        <tr><td style=\"widht:250px\"> <img  src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "src"), "html", null, true);
                echo "\"   style=\"height: 200px; width: 200px;\" alt=\"Image\" class=\"img-responsive\">
</td>
            <td> ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle"), "html", null, true);
                echo "</td><td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "prix"), "html", null, true);
                echo "\$</td>
        <td>    <form method=\"GET\" action=\"consulter\" >
 <input type=\"submit\" value=\"consulter\" class=\"buttt\" >
        <input type=\"hidden\" name=\"produit\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "id"), "html", null, true);
                echo "\">
         <input type=\"hidden\" name=\"jjjj\" value=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "id"), "html", null, true);
                echo "\"></form>
        </td>  </tr>
     ";
            }
            // line 59
            echo "    
    
        ";
            // line 61
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "Sfamille"), "libelle") == (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")))) {
                // line 62
                echo "  <tr><td> <img  src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "src"), "html", null, true);
                echo "\"   style=\"height: 200px; width: 200px;\" alt=\"Image\" class=\"img-responsive\">
</td>
            <td> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle"), "html", null, true);
                echo "</td><td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "prix"), "html", null, true);
                echo "\$)</td>
        <td>    <form method=\"GET\" action=\"consulter\">
        <input type=\"submit\" value=\"consulter\" class=\"buttt\">
        <input type=\"hidden\" name=\"produit\" value=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "id"), "html", null, true);
                echo "\">
         <input type=\"hidden\" name=\"jjjj\" value=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "id"), "html", null, true);
                echo "\"></form>
        </td></tr>       
";
            }
            // line 71
            echo "
        ";
            // line 72
            if (($this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle") == (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")))) {
                // line 73
                echo "  <tr><td> <img  src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "src"), "html", null, true);
                echo "\"   style=\"height: 200px; width: 200px;\" alt=\"Image\" class=\"img-responsive\">
</td>
            <td> ";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "libelle"), "html", null, true);
                echo "</td><td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "prix"), "html", null, true);
                echo "\$</td>
        <td>    <form method=\"GET\" action=\"consulter\" > 
            <input type=\"submit\" value=\"consulter\" class=\"buttt\">
        <input type=\"hidden\" name=\"produit\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "article_id"), "id"), "html", null, true);
                echo "\">
         <input type=\"hidden\" name=\"jjjj\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "id"), "html", null, true);
                echo "\"></form></td></tr>   
        ";
            }
            // line 81
            echo "        
   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</table>
";
        // line 88
        echo "

                        </div> <!-- main-menu -->
                     <!-- main-navigation -->
                 <br><br> <br><br><br> <br><br><br> <br>
                  
";
        // line 95
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
        return "DwmCatalogueBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 95,  77 => 38,  266 => 127,  380 => 294,  289 => 215,  194 => 132,  233 => 114,  206 => 101,  124 => 61,  114 => 56,  471 => 327,  467 => 326,  452 => 317,  447 => 315,  434 => 305,  420 => 297,  415 => 295,  410 => 293,  389 => 275,  375 => 267,  370 => 265,  339 => 240,  335 => 239,  324 => 231,  319 => 229,  301 => 217,  297 => 216,  282 => 207,  249 => 186,  244 => 184,  104 => 70,  172 => 105,  210 => 103,  160 => 94,  129 => 66,  190 => 95,  321 => 221,  288 => 205,  284 => 204,  263 => 195,  259 => 193,  255 => 124,  226 => 176,  222 => 175,  167 => 118,  202 => 58,  191 => 11,  153 => 72,  81 => 41,  65 => 26,  34 => 3,  326 => 251,  281 => 213,  213 => 52,  161 => 75,  152 => 81,  181 => 62,  113 => 56,  127 => 87,  274 => 187,  270 => 186,  256 => 177,  234 => 167,  90 => 30,  232 => 168,  76 => 20,  155 => 73,  58 => 18,  178 => 81,  248 => 55,  245 => 121,  239 => 54,  223 => 164,  212 => 117,  200 => 111,  192 => 110,  188 => 94,  184 => 125,  180 => 107,  150 => 71,  97 => 29,  198 => 137,  186 => 84,  148 => 73,  137 => 84,  126 => 62,  118 => 76,  110 => 55,  53 => 16,  308 => 224,  306 => 229,  295 => 188,  291 => 187,  287 => 209,  280 => 182,  276 => 205,  272 => 210,  265 => 184,  261 => 175,  257 => 174,  250 => 122,  242 => 55,  231 => 166,  215 => 105,  211 => 155,  174 => 87,  134 => 72,  23 => 7,  385 => 274,  338 => 256,  323 => 244,  307 => 231,  290 => 216,  277 => 137,  205 => 55,  195 => 96,  185 => 93,  175 => 127,  165 => 120,  100 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 319,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 304,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 295,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 263,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 254,  322 => 242,  314 => 227,  312 => 218,  309 => 217,  305 => 216,  298 => 212,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 85,  264 => 197,  258 => 125,  252 => 80,  247 => 186,  241 => 183,  229 => 113,  220 => 107,  214 => 84,  177 => 125,  169 => 78,  140 => 67,  132 => 64,  128 => 69,  107 => 53,  61 => 17,  273 => 197,  269 => 94,  254 => 92,  243 => 120,  240 => 119,  238 => 168,  235 => 180,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 123,  208 => 56,  204 => 100,  179 => 109,  159 => 78,  143 => 87,  135 => 88,  119 => 60,  102 => 52,  71 => 41,  67 => 20,  63 => 19,  59 => 6,  38 => 5,  94 => 52,  89 => 48,  85 => 45,  75 => 17,  68 => 14,  56 => 15,  87 => 57,  21 => 1,  26 => 4,  93 => 49,  88 => 50,  78 => 45,  46 => 11,  27 => 7,  44 => 9,  31 => 3,  28 => 2,  201 => 99,  196 => 111,  183 => 136,  171 => 61,  166 => 97,  163 => 91,  158 => 81,  156 => 94,  151 => 96,  142 => 77,  138 => 85,  136 => 68,  121 => 76,  117 => 75,  105 => 31,  91 => 26,  62 => 31,  49 => 15,  24 => 4,  25 => 5,  19 => 2,  79 => 21,  72 => 35,  69 => 37,  47 => 15,  40 => 12,  37 => 5,  22 => 3,  246 => 170,  157 => 111,  145 => 93,  139 => 90,  131 => 67,  123 => 75,  120 => 59,  115 => 59,  111 => 76,  108 => 36,  101 => 51,  98 => 53,  96 => 50,  83 => 44,  74 => 42,  66 => 15,  55 => 31,  52 => 14,  50 => 13,  43 => 9,  41 => 21,  35 => 7,  32 => 10,  29 => 6,  209 => 82,  203 => 150,  199 => 57,  193 => 5,  189 => 88,  187 => 132,  182 => 5,  176 => 106,  173 => 79,  168 => 104,  164 => 80,  162 => 55,  154 => 76,  149 => 90,  147 => 104,  144 => 68,  141 => 70,  133 => 87,  130 => 41,  125 => 78,  122 => 66,  116 => 63,  112 => 71,  109 => 34,  106 => 53,  103 => 69,  99 => 64,  95 => 45,  92 => 47,  86 => 49,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 16,  54 => 18,  51 => 13,  48 => 13,  45 => 14,  42 => 7,  39 => 8,  36 => 11,  33 => 3,  30 => 5,);
    }
}
