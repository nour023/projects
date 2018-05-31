<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_f4d5b183954f3206b0619a6a15c02c528f201cac19ddfbe4ebcb3266cafd41f9 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  329 => 131,  325 => 129,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  286 => 112,  275 => 105,  267 => 101,  262 => 98,  216 => 79,  207 => 75,  70 => 19,  84 => 24,  197 => 71,  77 => 38,  266 => 127,  380 => 160,  289 => 113,  194 => 70,  233 => 87,  206 => 101,  124 => 61,  114 => 56,  471 => 327,  467 => 326,  452 => 317,  447 => 315,  434 => 305,  420 => 297,  415 => 180,  410 => 293,  389 => 275,  375 => 267,  370 => 265,  339 => 240,  335 => 134,  324 => 231,  319 => 229,  301 => 217,  297 => 216,  282 => 207,  249 => 186,  244 => 184,  104 => 70,  172 => 64,  210 => 103,  160 => 94,  129 => 66,  190 => 95,  321 => 221,  288 => 205,  284 => 204,  263 => 195,  259 => 193,  255 => 124,  226 => 84,  222 => 175,  167 => 118,  202 => 58,  191 => 67,  153 => 56,  81 => 23,  65 => 26,  34 => 3,  326 => 251,  281 => 213,  213 => 78,  161 => 63,  152 => 81,  181 => 65,  113 => 48,  127 => 60,  274 => 187,  270 => 102,  256 => 96,  234 => 175,  90 => 27,  232 => 168,  76 => 31,  155 => 73,  58 => 17,  178 => 66,  248 => 94,  245 => 183,  239 => 54,  223 => 167,  212 => 159,  200 => 72,  192 => 110,  188 => 94,  184 => 125,  180 => 107,  150 => 55,  97 => 41,  198 => 137,  186 => 84,  148 => 73,  137 => 84,  126 => 62,  118 => 49,  110 => 22,  53 => 12,  308 => 224,  306 => 229,  295 => 188,  291 => 187,  287 => 209,  280 => 182,  276 => 205,  272 => 210,  265 => 184,  261 => 175,  257 => 174,  250 => 122,  242 => 55,  231 => 166,  215 => 105,  211 => 155,  174 => 124,  134 => 54,  23 => 3,  385 => 274,  338 => 135,  323 => 128,  307 => 231,  290 => 216,  277 => 137,  205 => 55,  195 => 96,  185 => 66,  175 => 65,  165 => 60,  100 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 319,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 304,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 295,  381 => 296,  379 => 119,  374 => 116,  368 => 112,  365 => 263,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 254,  322 => 242,  314 => 227,  312 => 124,  309 => 217,  305 => 216,  298 => 120,  294 => 90,  285 => 192,  283 => 88,  278 => 106,  268 => 200,  264 => 197,  258 => 125,  252 => 80,  247 => 186,  241 => 90,  229 => 85,  220 => 81,  214 => 84,  177 => 125,  169 => 78,  140 => 58,  132 => 64,  128 => 69,  107 => 66,  61 => 12,  273 => 197,  269 => 94,  254 => 92,  243 => 120,  240 => 119,  238 => 168,  235 => 180,  230 => 82,  227 => 162,  224 => 71,  221 => 77,  219 => 165,  217 => 123,  208 => 56,  204 => 100,  179 => 109,  159 => 78,  143 => 87,  135 => 62,  119 => 40,  102 => 40,  71 => 41,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 48,  85 => 32,  75 => 17,  68 => 14,  56 => 11,  87 => 34,  21 => 1,  26 => 9,  93 => 49,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 15,  31 => 3,  28 => 3,  201 => 99,  196 => 111,  183 => 136,  171 => 61,  166 => 97,  163 => 91,  158 => 62,  156 => 58,  151 => 59,  142 => 77,  138 => 85,  136 => 68,  121 => 50,  117 => 19,  105 => 34,  91 => 36,  62 => 33,  49 => 14,  24 => 4,  25 => 35,  19 => 1,  79 => 21,  72 => 25,  69 => 37,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 111,  145 => 93,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 59,  111 => 47,  108 => 19,  101 => 43,  98 => 53,  96 => 37,  83 => 33,  74 => 27,  66 => 26,  55 => 16,  52 => 14,  50 => 13,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 57,  193 => 5,  189 => 88,  187 => 132,  182 => 5,  176 => 63,  173 => 79,  168 => 61,  164 => 117,  162 => 59,  154 => 60,  149 => 90,  147 => 54,  144 => 103,  141 => 51,  133 => 87,  130 => 46,  125 => 51,  122 => 90,  116 => 39,  112 => 83,  109 => 34,  106 => 45,  103 => 69,  99 => 31,  95 => 45,  92 => 47,  86 => 49,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 6,  57 => 12,  54 => 18,  51 => 17,  48 => 9,  45 => 10,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
