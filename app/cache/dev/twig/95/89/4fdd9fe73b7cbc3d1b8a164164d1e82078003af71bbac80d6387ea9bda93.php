<?php

/* DwmCatalogueBundle:Default:formFournisseur.html.twig */
class __TwigTemplate_95894fdd9fe73b7cbc3d1b8a164164d1e82078003af71bbac80d6387ea9bda93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <body>
    <link rel=\"stylesheet\"  href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/accueil.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\"  href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" type=\"text/css\" />
          <div id=\"entete\" style=\"background-color:gray;  height:70px\" >
              ";
        // line 6
        $this->displayBlock('entete', $context, $blocks);
        // line 18
        echo "</div>
              <div id=\"content\" style=\"height:500px\" > 
                  ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "                  </div>
                  
                  
                  
                  <div id=\"footer\" style=\"background-color :gray;text-align:center;clear:both ; height:100px \">
                      ";
        // line 84
        $this->displayBlock('footer', $context, $blocks);
        // line 87
        echo "                      </div>
        </body>
    </html>
";
    }

    // line 6
    public function block_entete($context, array $blocks = array())
    {
        // line 7
        echo "                
<table align=\"right\">      
    
    <tr>
        
<td><a href=\"accueil\" target=\"_blank\"><i>Back</i></a></td>
  
                
    </tr>
    </table>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "                  <link rel=\"stylesheet\"  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bgi.css"), "html", null, true);
        echo "\" type=\"text/css\" />
                
                  
        <link rel=\"stylesheet\"  href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/button.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), 'form_start');
        echo "
    <table >
        <tr>
            <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "libelle"), 'label');
        echo "</td>
            <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "libelle"), 'widget');
        echo "</td>
            <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "libelle"), 'errors');
        echo "</td>

        </tr>

        <tr>
            <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "code"), 'label');
        echo "</td>
            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "code"), 'widget');
        echo "</td>
            <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "code"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "adresse"), 'label');
        echo "</td>
            <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "adresse"), 'widget');
        echo "</td>
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "adresse"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "ville"), 'label');
        echo "</td>
            <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "ville"), 'widget');
        echo "</td>
            <td>";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "ville"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "codePostal"), 'label');
        echo "</td>
            <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "codePostal"), 'widget');
        echo "</td>
            <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "codePostal"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "Email"), 'label');
        echo "</td>
            <td>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "Email"), 'widget');
        echo "</td>
            <td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "Email"), 'errors');
        echo "</td>

        </tr>
        <tr>
            <td>";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "tel"), 'label');
        echo "</td>
            <td>";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "tel"), 'widget');
        echo "</td>
            <td>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), "tel"), 'errors');
        echo "</td>

        </tr>
       
    </table>
    ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["frm"]) ? $context["frm"] : $this->getContext($context, "frm")), 'form_end');
        echo "


                  
                  
                  ";
    }

    // line 84
    public function block_footer($context, array $blocks = array())
    {
        // line 85
        echo "        <p  style=\"text-align: justify ; color: white  ;text-align: justify; font-style: oblique\">Tous droits réservés </p>
    ";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:formFournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  113 => 36,  127 => 83,  274 => 187,  270 => 186,  256 => 177,  234 => 167,  90 => 46,  232 => 168,  76 => 20,  155 => 113,  58 => 17,  178 => 123,  248 => 55,  245 => 54,  239 => 5,  223 => 166,  212 => 117,  200 => 111,  192 => 67,  188 => 66,  184 => 107,  180 => 106,  150 => 91,  97 => 29,  198 => 137,  186 => 139,  148 => 105,  137 => 87,  126 => 79,  118 => 76,  110 => 75,  53 => 15,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 180,  265 => 184,  261 => 175,  257 => 174,  250 => 170,  242 => 169,  231 => 166,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 217,  277 => 207,  205 => 141,  195 => 134,  185 => 134,  175 => 127,  165 => 120,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 226,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 165,  220 => 70,  214 => 84,  177 => 61,  169 => 60,  140 => 55,  132 => 43,  128 => 42,  107 => 75,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 168,  235 => 164,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 85,  208 => 68,  204 => 73,  179 => 69,  159 => 61,  143 => 48,  135 => 88,  119 => 81,  102 => 73,  71 => 19,  67 => 20,  63 => 15,  59 => 6,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 18,  87 => 25,  21 => 2,  26 => 3,  93 => 28,  88 => 6,  78 => 21,  46 => 16,  27 => 7,  44 => 11,  31 => 8,  28 => 10,  201 => 145,  196 => 68,  183 => 82,  171 => 61,  166 => 56,  163 => 62,  158 => 54,  156 => 94,  151 => 50,  142 => 59,  138 => 85,  136 => 44,  121 => 38,  117 => 37,  105 => 31,  91 => 26,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  72 => 16,  69 => 11,  47 => 15,  40 => 13,  37 => 18,  22 => 1,  246 => 170,  157 => 56,  145 => 106,  139 => 45,  131 => 52,  123 => 82,  120 => 40,  115 => 43,  111 => 76,  108 => 36,  101 => 30,  98 => 51,  96 => 70,  83 => 25,  74 => 41,  66 => 15,  55 => 15,  52 => 87,  50 => 84,  43 => 79,  41 => 20,  35 => 6,  32 => 11,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 140,  187 => 84,  182 => 138,  176 => 105,  173 => 60,  168 => 116,  164 => 117,  162 => 55,  154 => 110,  149 => 51,  147 => 49,  144 => 88,  141 => 88,  133 => 95,  130 => 41,  125 => 44,  122 => 77,  116 => 41,  112 => 67,  109 => 34,  106 => 74,  103 => 74,  99 => 64,  95 => 54,  92 => 47,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 11,  54 => 18,  51 => 16,  48 => 13,  45 => 13,  42 => 7,  39 => 13,  36 => 12,  33 => 3,  30 => 4,);
    }
}
