<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_fb9f76eb55254a52af3d5a366ddd3850247f63a4424416d1796b7a9a24e5d425 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  302 => 125,  296 => 121,  293 => 120,  253 => 100,  170 => 84,  363 => 153,  357 => 123,  353 => 149,  344 => 119,  332 => 116,  327 => 114,  318 => 111,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  329 => 131,  325 => 129,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  286 => 112,  275 => 105,  267 => 101,  262 => 98,  216 => 79,  207 => 75,  70 => 15,  84 => 27,  197 => 69,  77 => 38,  266 => 127,  380 => 158,  289 => 113,  194 => 68,  233 => 87,  206 => 101,  124 => 61,  114 => 56,  471 => 327,  467 => 326,  452 => 317,  447 => 315,  434 => 305,  420 => 297,  415 => 180,  410 => 293,  389 => 160,  375 => 267,  370 => 265,  339 => 240,  335 => 134,  324 => 113,  319 => 229,  301 => 217,  297 => 104,  282 => 207,  249 => 186,  244 => 136,  104 => 32,  172 => 57,  210 => 77,  160 => 94,  129 => 66,  190 => 76,  321 => 135,  288 => 118,  284 => 204,  263 => 95,  259 => 103,  255 => 101,  226 => 84,  222 => 83,  167 => 118,  202 => 77,  191 => 67,  153 => 77,  81 => 23,  65 => 11,  34 => 5,  326 => 138,  281 => 114,  213 => 78,  161 => 63,  152 => 46,  181 => 65,  113 => 48,  127 => 35,  274 => 110,  270 => 102,  256 => 96,  234 => 175,  90 => 42,  232 => 88,  76 => 34,  155 => 47,  58 => 25,  178 => 59,  248 => 97,  245 => 183,  239 => 54,  223 => 167,  212 => 78,  200 => 72,  192 => 110,  188 => 90,  184 => 63,  180 => 107,  150 => 55,  97 => 41,  198 => 137,  186 => 84,  148 => 73,  137 => 84,  126 => 62,  118 => 49,  110 => 22,  53 => 12,  308 => 224,  306 => 107,  295 => 188,  291 => 102,  287 => 209,  280 => 182,  276 => 111,  272 => 210,  265 => 105,  261 => 175,  257 => 174,  250 => 122,  242 => 55,  231 => 83,  215 => 105,  211 => 155,  174 => 65,  134 => 39,  23 => 3,  385 => 274,  338 => 135,  323 => 128,  307 => 128,  290 => 119,  277 => 137,  205 => 55,  195 => 96,  185 => 74,  175 => 58,  165 => 83,  100 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 319,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 304,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 295,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 263,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 254,  322 => 242,  314 => 227,  312 => 130,  309 => 129,  305 => 216,  298 => 120,  294 => 90,  285 => 192,  283 => 115,  278 => 98,  268 => 200,  264 => 197,  258 => 94,  252 => 80,  247 => 186,  241 => 93,  229 => 87,  220 => 81,  214 => 84,  177 => 125,  169 => 78,  140 => 58,  132 => 64,  128 => 69,  107 => 66,  61 => 12,  273 => 197,  269 => 107,  254 => 92,  243 => 92,  240 => 119,  238 => 168,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 165,  217 => 123,  208 => 76,  204 => 100,  179 => 109,  159 => 78,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 18,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 41,  21 => 1,  26 => 9,  93 => 49,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 99,  196 => 92,  183 => 136,  171 => 61,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 77,  138 => 85,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 7,  22 => 3,  246 => 96,  157 => 111,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 59,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 26,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 5,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 117,  162 => 59,  154 => 60,  149 => 90,  147 => 75,  144 => 42,  141 => 73,  133 => 87,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 69,  99 => 23,  95 => 34,  92 => 28,  86 => 49,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 6,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
