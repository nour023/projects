<?php

/* DwmCatalogueBundle:Default:listClient.html.twig */
class __TwigTemplate_8fab70809a68ecf422d18fa33d98909d2614d247b5fae5b07f4abe580b8a426f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "   <html>
   <head>
      <title>  ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" media=\"all\" />
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

            
         <li><a href=\"menu\">BACK</a></li>
         <li><a href=\"ClientEnAttente\"> client en attente </a></li>
      
       
      </ul>
   </div>
   </div>
   <div id=\"main\" style=\"float:right; width: 170px; height:100%;\">
        ";
        // line 55
        $this->displayBlock('main', $context, $blocks);
        // line 58
        echo "
    </div>
    <div id=\"content\" style=\"height: 100%\">
        <br>    
        
       <div id=\"content\" style=\"height: 100%\">
        <br>  <br>  <br> 
        <div style=\"overflow-x:auto\">
    <div class=\"transbox\" style=\"width: 85%\">
    <br> 
    <center>
<table border=\"2\" width=\"70%\" bgcolor=\"white\" >
            <tr >
<td><i>id</i></td><td><i>nom</i></td><td><i>prenom</i></td>
                <td><i>sexe</i></td><td><i/>login<i></td><td><i>mot de passe</i></td>
                <td><i>adresse</i></td>
                <td><i>supprimer</i></td>             </tr>
            ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 76
            echo "                <tr>
                    <td>
                        ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nom"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prenom"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "sexe"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "login"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "mdp"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "adresse"), "html", null, true);
            echo "
                    </td>
                     <td>
                         <form method=\"GET\" action=\"suppClient\">
                        <input type=\"submit\" name=\"supprimer\" value=\"supprimer\" class=\"buttonn\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 101
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
        // line 106
        echo "                    </table>
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " list fournisseur ";
    }

    // line 55
    public function block_main($context, array $blocks = array())
    {
        // line 56
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:listClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 27,  191 => 11,  153 => 78,  81 => 41,  65 => 26,  34 => 3,  326 => 251,  281 => 213,  213 => 157,  161 => 96,  152 => 116,  181 => 62,  113 => 56,  127 => 83,  274 => 187,  270 => 186,  256 => 177,  234 => 167,  90 => 30,  232 => 168,  76 => 20,  155 => 93,  58 => 17,  178 => 123,  248 => 55,  245 => 54,  239 => 5,  223 => 164,  212 => 117,  200 => 111,  192 => 67,  188 => 10,  184 => 107,  180 => 106,  150 => 91,  97 => 29,  198 => 137,  186 => 139,  148 => 105,  137 => 84,  126 => 79,  118 => 76,  110 => 75,  53 => 15,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 210,  265 => 184,  261 => 175,  257 => 174,  250 => 170,  242 => 169,  231 => 166,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 216,  277 => 212,  205 => 55,  195 => 134,  185 => 134,  175 => 127,  165 => 120,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 226,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 165,  220 => 70,  214 => 84,  177 => 61,  169 => 101,  140 => 55,  132 => 43,  128 => 42,  107 => 53,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 168,  235 => 164,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 85,  208 => 56,  204 => 73,  179 => 69,  159 => 61,  143 => 87,  135 => 88,  119 => 59,  102 => 73,  71 => 19,  67 => 29,  63 => 19,  59 => 6,  38 => 5,  94 => 28,  89 => 44,  85 => 42,  75 => 17,  68 => 14,  56 => 18,  87 => 29,  21 => 2,  26 => 3,  93 => 28,  88 => 6,  78 => 21,  46 => 8,  27 => 7,  44 => 12,  31 => 2,  28 => 10,  201 => 145,  196 => 68,  183 => 136,  171 => 61,  166 => 56,  163 => 62,  158 => 81,  156 => 94,  151 => 50,  142 => 59,  138 => 85,  136 => 44,  121 => 76,  117 => 75,  105 => 31,  91 => 26,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  72 => 16,  69 => 11,  47 => 15,  40 => 13,  37 => 5,  22 => 1,  246 => 170,  157 => 118,  145 => 106,  139 => 45,  131 => 81,  123 => 82,  120 => 40,  115 => 43,  111 => 76,  108 => 36,  101 => 50,  98 => 58,  96 => 55,  83 => 25,  74 => 41,  66 => 15,  55 => 31,  52 => 16,  50 => 29,  43 => 24,  41 => 20,  35 => 6,  32 => 11,  29 => 5,  209 => 82,  203 => 150,  199 => 5,  193 => 143,  189 => 140,  187 => 84,  182 => 5,  176 => 125,  173 => 123,  168 => 116,  164 => 120,  162 => 55,  154 => 110,  149 => 90,  147 => 49,  144 => 88,  141 => 72,  133 => 67,  130 => 41,  125 => 78,  122 => 77,  116 => 41,  112 => 67,  109 => 34,  106 => 74,  103 => 74,  99 => 64,  95 => 47,  92 => 47,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 16,  54 => 18,  51 => 16,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 12,  33 => 3,  30 => 2,);
    }
}
