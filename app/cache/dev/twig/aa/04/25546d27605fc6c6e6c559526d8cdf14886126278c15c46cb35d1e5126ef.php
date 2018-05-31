<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_aa0425546d27605fc6c6e6c559526d8cdf14886126278c15c46cb35d1e5126ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 323,  347 => 322,  20 => 1,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  302 => 281,  296 => 121,  293 => 120,  253 => 100,  170 => 84,  363 => 153,  357 => 123,  353 => 149,  344 => 321,  332 => 116,  327 => 114,  318 => 111,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 333,  351 => 120,  348 => 140,  342 => 137,  329 => 131,  325 => 129,  320 => 127,  315 => 131,  303 => 106,  300 => 280,  286 => 112,  275 => 105,  267 => 101,  262 => 98,  216 => 79,  207 => 75,  70 => 26,  84 => 27,  197 => 69,  77 => 25,  266 => 127,  380 => 158,  289 => 113,  194 => 68,  233 => 87,  206 => 101,  124 => 61,  114 => 56,  471 => 327,  467 => 326,  452 => 317,  447 => 315,  434 => 305,  420 => 297,  415 => 180,  410 => 293,  389 => 160,  375 => 267,  370 => 265,  339 => 240,  335 => 134,  324 => 113,  319 => 229,  301 => 217,  297 => 104,  282 => 207,  249 => 186,  244 => 136,  104 => 37,  172 => 57,  210 => 77,  160 => 94,  129 => 66,  190 => 76,  321 => 135,  288 => 118,  284 => 204,  263 => 95,  259 => 103,  255 => 101,  226 => 84,  222 => 83,  167 => 118,  202 => 77,  191 => 67,  153 => 77,  81 => 23,  65 => 17,  34 => 5,  326 => 138,  281 => 114,  213 => 78,  161 => 63,  152 => 46,  181 => 65,  113 => 40,  127 => 35,  274 => 110,  270 => 102,  256 => 96,  234 => 175,  90 => 37,  232 => 88,  76 => 28,  155 => 47,  58 => 14,  178 => 59,  248 => 97,  245 => 183,  239 => 54,  223 => 167,  212 => 78,  200 => 72,  192 => 110,  188 => 90,  184 => 63,  180 => 107,  150 => 55,  97 => 41,  198 => 137,  186 => 84,  148 => 73,  137 => 84,  126 => 62,  118 => 49,  110 => 38,  53 => 17,  308 => 224,  306 => 107,  295 => 188,  291 => 102,  287 => 209,  280 => 182,  276 => 111,  272 => 210,  265 => 105,  261 => 175,  257 => 174,  250 => 122,  242 => 55,  231 => 83,  215 => 105,  211 => 155,  174 => 65,  134 => 39,  23 => 3,  385 => 274,  338 => 135,  323 => 128,  307 => 128,  290 => 119,  277 => 137,  205 => 55,  195 => 96,  185 => 74,  175 => 58,  165 => 83,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 319,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 304,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 295,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 263,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 254,  322 => 242,  314 => 227,  312 => 130,  309 => 129,  305 => 216,  298 => 120,  294 => 90,  285 => 192,  283 => 115,  278 => 98,  268 => 200,  264 => 197,  258 => 94,  252 => 80,  247 => 186,  241 => 93,  229 => 87,  220 => 81,  214 => 84,  177 => 125,  169 => 78,  140 => 58,  132 => 64,  128 => 69,  107 => 37,  61 => 23,  273 => 197,  269 => 107,  254 => 92,  243 => 92,  240 => 119,  238 => 168,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 165,  217 => 123,  208 => 76,  204 => 100,  179 => 109,  159 => 78,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 18,  63 => 21,  59 => 22,  38 => 7,  94 => 21,  89 => 30,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 33,  21 => 2,  26 => 3,  93 => 38,  88 => 30,  78 => 24,  46 => 14,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 99,  196 => 92,  183 => 136,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 77,  138 => 85,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 34,  62 => 16,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 29,  72 => 21,  69 => 26,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 96,  157 => 111,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 38,  52 => 12,  50 => 16,  43 => 12,  41 => 19,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 5,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 117,  162 => 59,  154 => 60,  149 => 90,  147 => 75,  144 => 42,  141 => 73,  133 => 87,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 39,  109 => 52,  106 => 51,  103 => 69,  99 => 23,  95 => 39,  92 => 31,  86 => 49,  82 => 26,  80 => 29,  73 => 23,  64 => 24,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 8,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
