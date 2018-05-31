<?php

/* DwmCatalogueBundle:Default:connexionf.html.twig */
class __TwigTemplate_775c32cf1978e88bf02b250e4744869fe04e30259f8b88e42911d1113fe584c1 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

       <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styl.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/font-awesome/font-awesome.min.css"), "html", null, true);
        echo "\" />
 
  
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/botstrap.min.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/styll.css"), "html", null, true);
        echo "\" />
 <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" />

  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/red.css"), "html", null, true);
        echo "\" />
<!--
Accord Template
http://www.templatemo.com/tm-478-accord
--> 

    <title>erreur</title>
</head>

<body class=\"contact-page\">
   <div id=\"main_container\">
  <div class=\"top_bar\">
   ";
        // line 41
        echo "       
      <div class=\"left_menu_corner\"></div>
      <ul class=\"menu\">
          <li><a href=\"inscrit\" class=\"nav1\" style=\"color: whitesmoke\"> Back</a></li>
        <li class=\"divider\"></li>
        </ul>
     
        
       </div>
  </div>
  
   

                 
                  
                    <div class=\"content-main contact-content\" style=\"height:1100px;background-color:transparent\">
                        <div class=\"contact-content-upper\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                                  
                                    <h2 style=\"font-size: 60px\"> Désolé !</h2>
                                    <br> <br> <br>
                                   <h2>
                                      ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 65
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</h2>

                    </div> <!-- .contact-content -->
                </div> <!-- .main-page -->
            </div> <!-- .row -->
                    
             

";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:connexionf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 168,  76 => 39,  155 => 113,  58 => 17,  178 => 126,  248 => 55,  245 => 54,  239 => 5,  223 => 166,  212 => 117,  200 => 111,  192 => 109,  188 => 133,  184 => 107,  180 => 106,  150 => 91,  97 => 57,  198 => 143,  186 => 139,  148 => 105,  137 => 87,  126 => 79,  118 => 76,  110 => 75,  53 => 15,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 180,  265 => 176,  261 => 175,  257 => 174,  250 => 170,  242 => 168,  231 => 163,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 217,  277 => 207,  205 => 141,  195 => 134,  185 => 134,  175 => 127,  165 => 120,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 226,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 136,  169 => 60,  140 => 55,  132 => 82,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 164,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 75,  208 => 68,  204 => 112,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 73,  71 => 19,  67 => 20,  63 => 15,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 16,  27 => 7,  44 => 11,  31 => 8,  28 => 10,  201 => 145,  196 => 110,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 112,  156 => 94,  151 => 63,  142 => 59,  138 => 85,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  24 => 4,  25 => 3,  19 => 3,  79 => 18,  72 => 16,  69 => 11,  47 => 18,  40 => 13,  37 => 5,  22 => 4,  246 => 169,  157 => 56,  145 => 106,  139 => 45,  131 => 52,  123 => 88,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 70,  83 => 25,  74 => 41,  66 => 15,  55 => 15,  52 => 14,  50 => 17,  43 => 17,  41 => 7,  35 => 9,  32 => 11,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 140,  187 => 84,  182 => 138,  176 => 105,  173 => 65,  168 => 119,  164 => 117,  162 => 97,  154 => 110,  149 => 51,  147 => 58,  144 => 88,  141 => 88,  133 => 95,  130 => 41,  125 => 44,  122 => 77,  116 => 41,  112 => 67,  109 => 34,  106 => 74,  103 => 65,  99 => 64,  95 => 54,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 11,  54 => 18,  51 => 19,  48 => 13,  45 => 13,  42 => 7,  39 => 10,  36 => 12,  33 => 3,  30 => 2,);
    }
}
