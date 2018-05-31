<?php

/* DwmCatalogueBundle:Default:ClientEnAttente.html.twig */
class __TwigTemplate_66d4ed59837298377f1b1e274a2c13b25ddd76b40c6dd64c284dd4cc85f6eace extends Twig_Template
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

            
         <li><a href=\"listClient\">BACK</a></li>
      
       
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
    <div class=\"transbox\" style=\"width: 95%\">
    <br> 
    <center>
<table border=\"2\" width=\"70%\" bgcolor=\"white\" >
            <tr >
                <td><i>Id</i></td><td><i>Nom</i></td><td><i>Prénom</i></td>
                <td><i>Sexe</i></td><td><i/>Login<i></td><td><i>Mot de passe</i></td><td>
                    <i>Adresse</i></td><td><i>Compte</i></td>
                    
                <td><i>ajouter</i></td><td><i>supprimer</i></td>
             </tr>
            ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 77
            echo "                <tr>
                    <td>
                        ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nom"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prenom"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "sexe"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "login"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "mdp"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "adresse"), "html", null, true);
            echo "
                    </td>
                      <td>
                        ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "compte"), "html", null, true);
            echo "
                    </td>
                    <td>
                        <form method=\"GET\" action=\"addclient\">
                        <input type=\"submit\" name=\"ajout\" value=\"ajouter\" class=\"buttonn\">
                        <input type=\"hidden\" name=\"nom\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nom"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"prenom\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prenom"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"sexe\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "sexe"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"login\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "login"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"mdp\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "mdp"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"adresse\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "adresse"), "html", null, true);
            echo "\">
                        <input type=\"hidden\" name=\"compte\" value=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "compte"), "html", null, true);
            echo "\">
                        </form>
                    <td>
                        <form method=\"GET\" action=\"rejeter\">
                        <input type=\"submit\" name=\"supprimer\" value=\"rejeter\" class=\"buttonn\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 117
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
        // line 122
        echo "                    </table>
                    </div>
                     </div>
                       <div id=\"footer\" style=\"background-color :black;text-align:center;clear:both ; height:80px;color: white \">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12 footer\">
                    <p class=\"copyright\"style=\"color:white;font-size: 15px;margin-right: 20px\">&copy;NYshop
                    
        </div>
  </div>
 
   </html>
  
";
    }

    // line 5
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
        return "DwmCatalogueBundle:Default:ClientEnAttente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 55,  245 => 54,  239 => 5,  223 => 122,  212 => 117,  200 => 111,  192 => 109,  188 => 108,  184 => 107,  180 => 106,  150 => 91,  97 => 57,  198 => 143,  186 => 139,  148 => 92,  137 => 87,  126 => 79,  118 => 76,  110 => 75,  53 => 5,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 180,  265 => 176,  261 => 175,  257 => 174,  250 => 170,  242 => 168,  231 => 163,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 217,  277 => 207,  205 => 141,  195 => 134,  185 => 127,  175 => 120,  165 => 113,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 226,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 136,  169 => 60,  140 => 55,  132 => 82,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 164,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 157,  217 => 75,  208 => 68,  204 => 112,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 73,  71 => 19,  67 => 20,  63 => 15,  59 => 6,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 15,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 8,  27 => 7,  44 => 11,  31 => 8,  28 => 2,  201 => 145,  196 => 110,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 94,  151 => 63,  142 => 59,  138 => 85,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 2,  79 => 18,  72 => 16,  69 => 11,  47 => 18,  40 => 5,  37 => 5,  22 => 4,  246 => 169,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 88,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 70,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 14,  50 => 10,  43 => 17,  41 => 7,  35 => 7,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 140,  187 => 84,  182 => 138,  176 => 105,  173 => 65,  168 => 100,  164 => 117,  162 => 97,  154 => 110,  149 => 51,  147 => 58,  144 => 88,  141 => 88,  133 => 95,  130 => 41,  125 => 44,  122 => 77,  116 => 41,  112 => 42,  109 => 34,  106 => 74,  103 => 53,  99 => 31,  95 => 54,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 6,  57 => 11,  54 => 10,  51 => 19,  48 => 13,  45 => 17,  42 => 7,  39 => 16,  36 => 4,  33 => 3,  30 => 2,);
    }
}
