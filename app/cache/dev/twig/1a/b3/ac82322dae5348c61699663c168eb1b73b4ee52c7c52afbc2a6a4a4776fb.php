<?php

/* DwmCatalogueBundle:Default:formFamille.html.twig */
class __TwigTemplate_1ab3ac82322dae5348c61699663c168eb1b73b4ee52c7c52afbc2a6a4a4776fb extends Twig_Template
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

            
            <li><a href=\"listFamille\">BACK</a></li>

      
       
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), 'form_start');
        echo "

    <table>
        <tr>
            <td>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), "libelle"), 'label');
        echo "</td>
            <td>";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), "libelle"), 'widget');
        echo "</td>
            <td>";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), "libelle"), 'errors');
        echo "</td>

        </tr>

        <tr>
            <td>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), "code"), 'label');
        echo "</td>
            <td>";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), "code"), 'widget');
        echo "</td>
            <td>";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), "code"), 'errors');
        echo "</td>

        </tr>
        </table>

    ";
        // line 88
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["fm"]) ? $context["fm"] : $this->getContext($context, "fm")), 'form_end');
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
        return "DwmCatalogueBundle:Default:formFamille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 83,  274 => 187,  270 => 186,  256 => 177,  234 => 167,  90 => 46,  232 => 168,  76 => 39,  155 => 113,  58 => 17,  178 => 123,  248 => 55,  245 => 54,  239 => 5,  223 => 166,  212 => 117,  200 => 111,  192 => 109,  188 => 130,  184 => 107,  180 => 106,  150 => 91,  97 => 57,  198 => 137,  186 => 139,  148 => 105,  137 => 87,  126 => 79,  118 => 76,  110 => 75,  53 => 15,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 180,  265 => 184,  261 => 175,  257 => 174,  250 => 170,  242 => 169,  231 => 166,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 217,  277 => 207,  205 => 141,  195 => 134,  185 => 134,  175 => 127,  165 => 120,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 226,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 165,  220 => 70,  214 => 69,  177 => 136,  169 => 60,  140 => 55,  132 => 82,  128 => 49,  107 => 75,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 168,  235 => 164,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 75,  208 => 68,  204 => 112,  179 => 69,  159 => 61,  143 => 56,  135 => 88,  119 => 81,  102 => 73,  71 => 19,  67 => 20,  63 => 15,  59 => 20,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 18,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 16,  27 => 7,  44 => 11,  31 => 8,  28 => 10,  201 => 145,  196 => 110,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 109,  156 => 94,  151 => 63,  142 => 59,  138 => 85,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 21,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 11,  47 => 15,  40 => 13,  37 => 5,  22 => 4,  246 => 170,  157 => 56,  145 => 106,  139 => 45,  131 => 52,  123 => 82,  120 => 40,  115 => 43,  111 => 76,  108 => 36,  101 => 32,  98 => 51,  96 => 70,  83 => 25,  74 => 41,  66 => 15,  55 => 15,  52 => 14,  50 => 17,  43 => 14,  41 => 7,  35 => 12,  32 => 11,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 140,  187 => 84,  182 => 138,  176 => 105,  173 => 65,  168 => 116,  164 => 117,  162 => 97,  154 => 110,  149 => 51,  147 => 58,  144 => 88,  141 => 88,  133 => 95,  130 => 41,  125 => 44,  122 => 77,  116 => 41,  112 => 67,  109 => 34,  106 => 74,  103 => 74,  99 => 64,  95 => 54,  92 => 47,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 11,  54 => 18,  51 => 16,  48 => 13,  45 => 13,  42 => 7,  39 => 13,  36 => 12,  33 => 3,  30 => 10,);
    }
}
