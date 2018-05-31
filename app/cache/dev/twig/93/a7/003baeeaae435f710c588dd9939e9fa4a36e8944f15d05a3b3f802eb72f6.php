<?php

/* DwmCatalogueBundle:Default:vmodifSousFamille.html.twig */
class __TwigTemplate_93a7003baeeaae435f710c588dd9939e9fa4a36e8944f15d05a3b3f802eb72f6 extends Twig_Template
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
        echo "<html>
   <head>
      <title>   list fournisseur </title>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"  />
       <link rel=\"stylesheet\"  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bgi.css"), "html", null, true);
        echo "\" type=\"text/css\" />
         <link rel=\"stylesheet\"  href=\"";
        // line 6
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


<form method=\"get\" action=\"modifSousFamille\">
    <table >
        <tr>

            <td>
                Code
            </td>
            <td>
                <input type=\"text\" name=\"code\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sfamille"]) ? $context["sfamille"] : $this->getContext($context, "sfamille")), "code"), "html", null, true);
        echo "\">
            </td>
        </tr>
        <tr>
            <td>
                Libelle
            </td>
            <td>
                <input type=\"text\" name=\"libelle\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sfamille"]) ? $context["sfamille"] : $this->getContext($context, "sfamille")), "libelle"), "html", null, true);
        echo "\">
            </td>
        </tr>
        <tr>
            <td colspan=\"2\" width=\"100%\">

                <input type=\"submit\" name=\"envoer\" value=\"MODIFIER\">
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sfamille"]) ? $context["sfamille"] : $this->getContext($context, "sfamille")), "id"), "html", null, true);
        echo "\">

            </td>

        </tr>
    </table>
</form>
                
                

 </div>
                       <br>

       
   </div>
        </div>
          <div id=\"footer\" style=\"background-color :black;text-align:center;clear:both ; height:80px;color: white \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\" style=\"color:white;font-size: 15px;margin-right: 20px\">&copy;NYshop
                    
        </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:vmodifSousFamille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 49,  197 => 95,  77 => 38,  266 => 127,  380 => 294,  289 => 215,  194 => 132,  233 => 114,  206 => 101,  124 => 61,  114 => 56,  471 => 327,  467 => 326,  452 => 317,  447 => 315,  434 => 305,  420 => 297,  415 => 295,  410 => 293,  389 => 275,  375 => 267,  370 => 265,  339 => 240,  335 => 239,  324 => 231,  319 => 229,  301 => 217,  297 => 216,  282 => 207,  249 => 186,  244 => 184,  104 => 70,  172 => 105,  210 => 103,  160 => 94,  129 => 66,  190 => 95,  321 => 221,  288 => 205,  284 => 204,  263 => 195,  259 => 193,  255 => 124,  226 => 176,  222 => 175,  167 => 118,  202 => 58,  191 => 11,  153 => 72,  81 => 41,  65 => 26,  34 => 3,  326 => 251,  281 => 213,  213 => 52,  161 => 75,  152 => 81,  181 => 62,  113 => 56,  127 => 87,  274 => 187,  270 => 186,  256 => 191,  234 => 175,  90 => 30,  232 => 168,  76 => 20,  155 => 73,  58 => 18,  178 => 81,  248 => 55,  245 => 183,  239 => 54,  223 => 167,  212 => 159,  200 => 111,  192 => 110,  188 => 94,  184 => 125,  180 => 107,  150 => 71,  97 => 29,  198 => 137,  186 => 84,  148 => 73,  137 => 84,  126 => 62,  118 => 76,  110 => 55,  53 => 16,  308 => 224,  306 => 229,  295 => 188,  291 => 187,  287 => 209,  280 => 182,  276 => 205,  272 => 210,  265 => 184,  261 => 175,  257 => 174,  250 => 122,  242 => 55,  231 => 166,  215 => 105,  211 => 155,  174 => 124,  134 => 96,  23 => 3,  385 => 274,  338 => 256,  323 => 244,  307 => 231,  290 => 216,  277 => 137,  205 => 55,  195 => 96,  185 => 93,  175 => 127,  165 => 120,  100 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 319,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 304,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 295,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 263,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 254,  322 => 242,  314 => 227,  312 => 218,  309 => 217,  305 => 216,  298 => 212,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 200,  264 => 197,  258 => 125,  252 => 80,  247 => 186,  241 => 183,  229 => 113,  220 => 107,  214 => 84,  177 => 125,  169 => 78,  140 => 67,  132 => 64,  128 => 69,  107 => 66,  61 => 17,  273 => 197,  269 => 94,  254 => 92,  243 => 120,  240 => 119,  238 => 168,  235 => 180,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 123,  208 => 56,  204 => 100,  179 => 109,  159 => 78,  143 => 87,  135 => 88,  119 => 60,  102 => 52,  71 => 41,  67 => 20,  63 => 19,  59 => 6,  38 => 5,  94 => 52,  89 => 48,  85 => 45,  75 => 17,  68 => 14,  56 => 15,  87 => 57,  21 => 1,  26 => 4,  93 => 49,  88 => 50,  78 => 45,  46 => 11,  27 => 4,  44 => 9,  31 => 3,  28 => 2,  201 => 99,  196 => 111,  183 => 136,  171 => 61,  166 => 97,  163 => 91,  158 => 81,  156 => 94,  151 => 96,  142 => 77,  138 => 85,  136 => 68,  121 => 76,  117 => 75,  105 => 31,  91 => 26,  62 => 33,  49 => 15,  24 => 4,  25 => 5,  19 => 1,  79 => 21,  72 => 35,  69 => 37,  47 => 12,  40 => 17,  37 => 5,  22 => 3,  246 => 170,  157 => 111,  145 => 93,  139 => 90,  131 => 67,  123 => 75,  120 => 59,  115 => 59,  111 => 76,  108 => 36,  101 => 75,  98 => 53,  96 => 58,  83 => 44,  74 => 42,  66 => 15,  55 => 31,  52 => 14,  50 => 13,  43 => 9,  41 => 21,  35 => 7,  32 => 6,  29 => 6,  209 => 82,  203 => 150,  199 => 57,  193 => 5,  189 => 88,  187 => 132,  182 => 5,  176 => 106,  173 => 79,  168 => 104,  164 => 117,  162 => 55,  154 => 110,  149 => 90,  147 => 104,  144 => 103,  141 => 70,  133 => 87,  130 => 41,  125 => 78,  122 => 90,  116 => 63,  112 => 83,  109 => 34,  106 => 53,  103 => 69,  99 => 64,  95 => 45,  92 => 47,  86 => 49,  82 => 22,  80 => 19,  73 => 41,  64 => 20,  60 => 6,  57 => 16,  54 => 18,  51 => 25,  48 => 13,  45 => 14,  42 => 7,  39 => 8,  36 => 7,  33 => 3,  30 => 5,);
    }
}
