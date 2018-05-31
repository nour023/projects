<?php

/* DwmCatalogueBundle:Default:addSousFamille.html.twig */
class __TwigTemplate_93aaf5b740cbdc071a0f85c778e5776a70bbd37b5e2080dc54e98c2764d5ff2f extends Twig_Template
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

   <html>
   <head>
      <title>   list fournisseur </title>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"  />
       <link rel=\"stylesheet\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bgi.css"), "html", null, true);
        echo "\" type=\"text/css\" />
         <link rel=\"stylesheet\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/lnk.css"), "html", null, true);
        echo "\" type=\"text/css\" />
   </head>
   <body >
  <div id=\"entete\" style=\"background-color:black;  height:70px\" >
          <div class=\"background\" style=\"color: white\">
        <center>  
            <br>
   
            NYshop
        </center>  
              
              <form class=\"form-inline navbar-search\" method=\"post\" action=\"deconnection\" >
\t\t 
\t\t  <button type=\"submit\" id=\"submitButton\" class=\"btn\" style=\"padding-bline-height:1.428571;background-color:black;border: none;  position: absolute;
  right: 0;
  outline: 0px;
  top: 0;
  display: block;
     width: 120px;
    height: 58px;
  padding: 0;
  border: none;
  margin-top: 14px; /* margin-top + border-width */
  margin-right: 155px; /* border-width */
 
  color: #888;
  font-family: 'Helvetica', sans-serif;
  font-size: 15px;
  line-height: 60px;\">Déconnexion</button>
    </form>
            </div>
</div>
 
   <div id=\"main\" style=\"float:left; width: 290px; height:100%;\" >
         <div class=\"back\" style=\"color: black; width: 240px; height: 440px\">
        <br>
        <br> <br> <br>
        <ul>

            
            <li><a href=\"listSousFamille\">BACK</a></li>

      
       
      </ul>
   </div>
   </div>
   <div id=\"main\" style=\"float:right; width: 170px; height:100%;\">
  
    </div>
    <div id=\"content\" style=\"height: 100%\">
        <br>    
        
       <div id=\"content\" style=\"height: 100%\">
        <br>  <br>  <br> 
        <div style=\"overflow-x:auto\">
    <div class=\"transbox\" style=\"width: 85%\">
    <br> 
    <center>



  ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), 'form_start');
        echo "
    <table>
        <tr>
            <td>";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "libelle"), 'label');
        echo "</td>
            <td>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "libelle"), 'widget');
        echo "</td>
            <td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "libelle"), 'errors');
        echo "</td>

        </tr>

        <tr>
            <td>";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "code"), 'label');
        echo "</td>
            <td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "code"), 'widget');
        echo "</td>
            <td>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "code"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "familleid"), 'label');
        echo "</td>
            <td>";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "familleid"), 'widget');
        echo "</td>
            <td>";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), "familleid"), 'errors');
        echo "</td>

        </tr>
    </table>
    ";
        // line 92
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["sf"]) ? $context["sf"] : $this->getContext($context, "sf")), 'form_end');
        echo "







 </div>
                       <br>

       
   </div>
        </div>
          <div id=\"footer\" style=\"background-color :black;text-align:center;clear:both ; height:80px;color: white \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\" style=\"color:white;font-size: 15px;margin-right: 20px\">&copy;NYshop
                    
        </div>
  </div>
  
    ";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:addSousFamille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 92,  137 => 87,  126 => 82,  118 => 80,  110 => 75,  53 => 5,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 180,  265 => 176,  261 => 175,  257 => 174,  250 => 170,  242 => 168,  231 => 163,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 217,  277 => 207,  205 => 141,  195 => 134,  185 => 127,  175 => 120,  165 => 113,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 226,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 164,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 157,  217 => 75,  208 => 68,  204 => 151,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 73,  71 => 19,  67 => 20,  63 => 15,  59 => 6,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 7,  44 => 11,  31 => 8,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 11,  47 => 12,  40 => 5,  37 => 10,  22 => 2,  246 => 169,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 70,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 14,  50 => 10,  43 => 11,  41 => 7,  35 => 7,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 57,  154 => 110,  149 => 51,  147 => 58,  144 => 103,  141 => 88,  133 => 86,  130 => 41,  125 => 44,  122 => 81,  116 => 41,  112 => 42,  109 => 34,  106 => 74,  103 => 53,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 10,  36 => 4,  33 => 6,  30 => 7,);
    }
}
