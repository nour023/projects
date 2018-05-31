<?php

/* DwmCatalogueBundle:Default:PIFournisseur.html.twig */
class __TwigTemplate_888423362f9f3d66c757e279cb31e5b0111d9926a5886c7232c93a90a7770bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
   <html>
   <head>
      <title>  ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"  />
       <link rel=\"stylesheet\"  href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bgi.css"), "html", null, true);
        echo "\" type=\"text/css\" />
         <link rel=\"stylesheet\"  href=\"";
        // line 7
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
 
   <div id=\"main\" style=\"float:left; width: 100px; height:100%;\" >
         <div class=\"back\" style=\"color: black; width: 240px; height: 440px\">
        <br>
        <br> <br> <br>
        <ul>

            
         <li><a href=\"listFournisseur\">BACK</a></li>
      
       
      </ul>
   </div>
   </div>
   <div id=\"main\" style=\"float:right; width: 170px; height:100%;\">
        ";
        // line 54
        $this->displayBlock('main', $context, $blocks);
        // line 57
        echo "
    </div>
    <div id=\"content\" style=\"height: 100%\">
        <br>    
        
       <div id=\"content\" style=\"height: 100%\">
        <br>  <br>  <br> 
        <div style=\"overflow-x:auto\">
    <div class=\"transbox\" style=\"width: 155%\">
    
    
<table border=\"2\" ";
        // line 68
        echo "bgcolor=\"white\">
         <tr >
           <td><i>code</i></td>";
        // line 70
        echo "<td><i>libelle</i></td><td><i>adresse</i></td>
            <td><i>Ville</i></td><td><i>Code postal</i></td><td><i>Email</i></td>
           <td><i>tel</i></td><td><i>ACCEPTRER</i></td><td><i>REJETER</i></td>
         </tr>
         ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fournisseur"]) ? $context["fournisseur"] : $this->getContext($context, "fournisseur")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 75
            echo "            <tr>
               
               <td>
                  ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "code"), "html", null, true);
            echo "
               </td>
               ";
            // line 83
            echo "               <td>
                  ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "libelle"), "html", null, true);
            echo "
               </td>
               <td>
                  ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "adresse"), "html", null, true);
            echo "
               </td>
               <td>
                  ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "ville"), "html", null, true);
            echo "
               </td>
               <td>
                  ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "codePostal"), "html", null, true);
            echo "
               </td>
               <td>
                  ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "Email"), "html", null, true);
            echo "
               </td>
              <td>
                  ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "tel"), "html", null, true);
            echo "
               </td>
               <td ><form method=\"get\" action=\"accepterF\" >
                     <input type=\"submit\" name=\"ok\" value=\"ACCEPTER\" class=\"buttonn\">
                     <input type=\"hidden\" name=\"id\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"code\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "code"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"name\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "name"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"adresse\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "adresse"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"ville\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "ville"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"codepostal\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "codePostal"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"email\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "Email"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"tel\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "tel"), "html", null, true);
            echo "\">
                     <input type=\"hidden\" name=\"libelle\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "libelle"), "html", null, true);
            echo "\">
                  </form>
                
               </td>
                    <td>
                       <form method=\"GET\" action=\"rejeter\">
                        <input type=\"submit\" name=\"supprimer\" value=\"REJETER\" class=\"buttonn\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "\">
                        </form>
                    </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </table>
                    </div>
                     </div>
                       <div id=\"footer\" style=\"background-color :black;text-align:center;clear:both ; height:80px;color: white \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\" style=\"color:white;font-size: 15px;margin-right: 20px\">&copy;NYshop
                    
        </div>
  </div>
 

  
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " list fournisseur ";
    }

    // line 54
    public function block_main($context, array $blocks = array())
    {
        // line 55
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:PIFournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 4,  206 => 118,  124 => 83,  114 => 75,  471 => 327,  467 => 326,  452 => 317,  447 => 315,  434 => 305,  420 => 297,  415 => 295,  410 => 293,  389 => 275,  375 => 267,  370 => 265,  339 => 240,  335 => 239,  324 => 231,  319 => 229,  301 => 217,  297 => 216,  282 => 207,  249 => 186,  244 => 184,  104 => 70,  172 => 105,  210 => 51,  160 => 94,  129 => 78,  190 => 55,  321 => 221,  288 => 205,  284 => 204,  263 => 194,  259 => 193,  255 => 191,  226 => 176,  222 => 175,  167 => 129,  202 => 58,  191 => 11,  153 => 78,  81 => 41,  65 => 26,  34 => 3,  326 => 251,  281 => 213,  213 => 52,  161 => 99,  152 => 81,  181 => 62,  113 => 56,  127 => 84,  274 => 187,  270 => 186,  256 => 177,  234 => 167,  90 => 30,  232 => 168,  76 => 20,  155 => 113,  58 => 17,  178 => 123,  248 => 55,  245 => 54,  239 => 54,  223 => 164,  212 => 117,  200 => 111,  192 => 110,  188 => 109,  184 => 108,  180 => 107,  150 => 91,  97 => 29,  198 => 137,  186 => 111,  148 => 88,  137 => 84,  126 => 79,  118 => 76,  110 => 74,  53 => 15,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 209,  280 => 182,  276 => 181,  272 => 210,  265 => 184,  261 => 175,  257 => 174,  250 => 170,  242 => 55,  231 => 166,  215 => 156,  211 => 155,  174 => 124,  134 => 72,  23 => 7,  385 => 274,  338 => 256,  323 => 244,  307 => 231,  290 => 216,  277 => 205,  205 => 55,  195 => 141,  185 => 134,  175 => 127,  165 => 120,  100 => 68,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 319,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 304,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 263,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 227,  312 => 218,  309 => 217,  305 => 216,  298 => 212,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 186,  241 => 183,  229 => 177,  220 => 70,  214 => 84,  177 => 136,  169 => 101,  140 => 55,  132 => 43,  128 => 69,  107 => 53,  61 => 17,  273 => 197,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 168,  235 => 180,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 123,  208 => 56,  204 => 5,  179 => 109,  159 => 61,  143 => 87,  135 => 88,  119 => 78,  102 => 73,  71 => 41,  67 => 29,  63 => 19,  59 => 6,  38 => 5,  94 => 52,  89 => 44,  85 => 54,  75 => 17,  68 => 14,  56 => 27,  87 => 57,  21 => 1,  26 => 4,  93 => 28,  88 => 50,  78 => 45,  46 => 16,  27 => 9,  44 => 9,  31 => 6,  28 => 17,  201 => 145,  196 => 111,  183 => 136,  171 => 61,  166 => 97,  163 => 91,  158 => 81,  156 => 94,  151 => 96,  142 => 77,  138 => 85,  136 => 82,  121 => 76,  117 => 75,  105 => 31,  91 => 26,  62 => 7,  49 => 23,  24 => 4,  25 => 5,  19 => 1,  79 => 21,  72 => 16,  69 => 37,  47 => 15,  40 => 13,  37 => 5,  22 => 13,  246 => 170,  157 => 99,  145 => 93,  139 => 90,  131 => 81,  123 => 75,  120 => 40,  115 => 72,  111 => 76,  108 => 36,  101 => 50,  98 => 53,  96 => 55,  83 => 48,  74 => 42,  66 => 15,  55 => 31,  52 => 16,  50 => 29,  43 => 24,  41 => 21,  35 => 7,  32 => 3,  29 => 6,  209 => 82,  203 => 150,  199 => 57,  193 => 5,  189 => 140,  187 => 143,  182 => 5,  176 => 106,  173 => 101,  168 => 104,  164 => 103,  162 => 55,  154 => 91,  149 => 90,  147 => 115,  144 => 88,  141 => 72,  133 => 87,  130 => 41,  125 => 78,  122 => 66,  116 => 63,  112 => 71,  109 => 34,  106 => 74,  103 => 77,  99 => 64,  95 => 55,  92 => 51,  86 => 49,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 16,  54 => 18,  51 => 13,  48 => 14,  45 => 22,  42 => 7,  39 => 10,  36 => 7,  33 => 3,  30 => 2,);
    }
}
