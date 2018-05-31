<?php

/* DwmCatalogueBundle:Default:listArticle.html.twig */
class __TwigTemplate_7e76cd1521d03c5918936f6650cbb2dca26e07ac87ca5178e98218bc3172d86b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
            'entete' => array($this, 'block_entete'),
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
        echo "    <html>
    <head>
        <title>  ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    </head>
    <body style=\"background-color: #999999\">
    <div id=\"entete\" style=\"background-color:black;  height:50px\" >
        ";
        // line 10
        $this->displayBlock('entete', $context, $blocks);
        // line 14
        echo "    </div>
    <div id=\"main\" style=\"float:left; width: 240px; height:650px;background-color:gray\">
        <h1 style=\"text-align: justify ; color: white ; font-style: oblique\"><center>";
        // line 16
        $this->displayBlock("title", $context, $blocks);
        echo "</center> </h1>
        <ul id=\"main\">

            <li><a style=\" color: white\" href=\"menu\">Menu</a></li>
            <li ><a style=\" color: white\" href=\"listFournisseur\">Gerer Fournisseur</a></li>
            <li ><a  style=\" color: white\" href=\"listFamille\">Gerer Famille</a></li>
            <li ><a style=\" color: white\" href=\"listSousFamille\">Gerer Sous Famille</a></li>
        </ul>
    </div>
    <div id=\"main\" style=\"float:right; width: 240px; height:650px;background-color:gray\">
        ";
        // line 26
        $this->displayBlock('main', $context, $blocks);
        // line 29
        echo "
    </div>
    <div id=\"content\" style=\"margin-left:245px;background-color:#999999\">





        <table border=\"2\" width=\"70%\" bgcolor=\"white\">
            <tr >
                <td>id</td><td>code</td><td>libelle</td><td>prix</td><td>tva</td><td>unite</td><td>sous famille</td><td>SUPPRIMER</td><td>MODIFIER</td>
            </tr>
            ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            echo "                <tr>
                    <td>
                        ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "code"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "libelle"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prix"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "tva"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "unite"), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "Sfamille"), "id"), "html", null, true);
            echo "
                    </td>

                    <td ><form method=\"get\" action=\"suppArticle\" >
                            <input type=\"submit\" name=\"ok\" value=\"SUPPRIMER\">
                            <input type=\"hidden\" name=\"id\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "\">
                        </form>
                    </td>
                    <td ><form method=\"get\" action=\"vmodifArticle\">
                            <input type=\"submit\" name=\"ok\" value=\"MODIFIER\">
                            <input type=\"hidden\" name=\"i\" value=\"";
            // line 72
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
        // line 78
        echo "            
        </table>

        <li><a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("new_article");
        echo "\">Ajouter un article</a></li>










    </div>

    <div id=\"footer\" style=\"background-color :black;text-align:center;clear:both ; height:250px \">
        <p  style=\"text-align: justify ; color: white  ;text-align: justify; font-style: oblique\">Tous droits réservés </p>
    </div>
    </body>
    </html>
    border-right
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 10
    public function block_entete($context, array $blocks = array())
    {
        // line 11
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Dwm/CatalogueBundle/Ressources/public/images/1.jpg"), "html", null, true);
        echo "\" alt=\"Aceuil\" width=\"28\" height=\"28\" /> 

        ";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "DwmCatalogueBundle:Default:listArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 27,  191 => 11,  153 => 78,  81 => 41,  65 => 26,  34 => 3,  326 => 251,  281 => 213,  213 => 157,  161 => 119,  152 => 116,  181 => 62,  113 => 56,  127 => 83,  274 => 187,  270 => 186,  256 => 177,  234 => 167,  90 => 30,  232 => 168,  76 => 20,  155 => 113,  58 => 17,  178 => 123,  248 => 55,  245 => 54,  239 => 5,  223 => 164,  212 => 117,  200 => 111,  192 => 67,  188 => 10,  184 => 107,  180 => 106,  150 => 91,  97 => 29,  198 => 137,  186 => 139,  148 => 105,  137 => 87,  126 => 79,  118 => 76,  110 => 75,  53 => 15,  308 => 224,  306 => 200,  295 => 188,  291 => 187,  287 => 186,  280 => 182,  276 => 181,  272 => 210,  265 => 184,  261 => 175,  257 => 174,  250 => 170,  242 => 169,  231 => 166,  215 => 156,  211 => 155,  174 => 124,  134 => 96,  23 => 1,  385 => 297,  338 => 256,  323 => 244,  307 => 231,  290 => 216,  277 => 212,  205 => 141,  195 => 134,  185 => 134,  175 => 127,  165 => 120,  100 => 51,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 226,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 192,  283 => 88,  278 => 188,  268 => 85,  264 => 197,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 165,  220 => 70,  214 => 84,  177 => 61,  169 => 60,  140 => 55,  132 => 43,  128 => 42,  107 => 53,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 168,  235 => 164,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 85,  208 => 68,  204 => 73,  179 => 69,  159 => 61,  143 => 48,  135 => 88,  119 => 59,  102 => 73,  71 => 19,  67 => 29,  63 => 19,  59 => 6,  38 => 5,  94 => 28,  89 => 44,  85 => 42,  75 => 17,  68 => 14,  56 => 18,  87 => 29,  21 => 2,  26 => 3,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 7,  44 => 12,  31 => 2,  28 => 10,  201 => 145,  196 => 68,  183 => 136,  171 => 61,  166 => 56,  163 => 62,  158 => 81,  156 => 94,  151 => 50,  142 => 59,  138 => 85,  136 => 44,  121 => 38,  117 => 37,  105 => 31,  91 => 26,  62 => 7,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 21,  72 => 16,  69 => 11,  47 => 15,  40 => 13,  37 => 18,  22 => 1,  246 => 170,  157 => 118,  145 => 106,  139 => 45,  131 => 52,  123 => 82,  120 => 40,  115 => 43,  111 => 76,  108 => 36,  101 => 50,  98 => 51,  96 => 70,  83 => 25,  74 => 41,  66 => 15,  55 => 31,  52 => 16,  50 => 29,  43 => 24,  41 => 20,  35 => 6,  32 => 11,  29 => 5,  209 => 82,  203 => 150,  199 => 26,  193 => 143,  189 => 140,  187 => 84,  182 => 5,  176 => 125,  173 => 123,  168 => 116,  164 => 120,  162 => 55,  154 => 110,  149 => 51,  147 => 49,  144 => 88,  141 => 72,  133 => 67,  130 => 41,  125 => 62,  122 => 77,  116 => 41,  112 => 67,  109 => 34,  106 => 74,  103 => 74,  99 => 64,  95 => 47,  92 => 47,  86 => 24,  82 => 22,  80 => 19,  73 => 19,  64 => 20,  60 => 6,  57 => 16,  54 => 18,  51 => 16,  48 => 14,  45 => 13,  42 => 7,  39 => 10,  36 => 12,  33 => 3,  30 => 4,);
    }
}
