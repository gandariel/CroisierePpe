<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_74861bc0effbe2b8b457935daca33d134c19b144c219749e23ba542fcf8b3c7f extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  32 => 6,  26 => 3,  24 => 2,  19 => 1,  1035 => 312,  1026 => 311,  1023 => 310,  1009 => 307,  1003 => 306,  1000 => 305,  978 => 302,  953 => 301,  950 => 300,  942 => 296,  938 => 295,  935 => 294,  926 => 287,  924 => 286,  920 => 285,  917 => 284,  912 => 280,  904 => 278,  900 => 277,  898 => 276,  896 => 275,  893 => 274,  887 => 271,  884 => 270,  880 => 267,  877 => 265,  875 => 264,  872 => 263,  865 => 259,  863 => 258,  841 => 257,  838 => 255,  835 => 253,  833 => 252,  831 => 251,  828 => 250,  824 => 247,  822 => 246,  820 => 245,  817 => 244,  813 => 239,  810 => 238,  806 => 235,  804 => 234,  802 => 233,  799 => 232,  795 => 229,  793 => 228,  791 => 227,  789 => 226,  787 => 225,  784 => 224,  780 => 221,  777 => 216,  772 => 212,  752 => 208,  749 => 206,  747 => 205,  744 => 203,  742 => 202,  739 => 200,  737 => 199,  735 => 198,  732 => 197,  728 => 192,  726 => 191,  723 => 190,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  696 => 178,  692 => 175,  690 => 174,  687 => 173,  683 => 170,  681 => 169,  678 => 168,  674 => 165,  672 => 164,  669 => 163,  664 => 160,  662 => 159,  659 => 158,  655 => 155,  653 => 154,  650 => 153,  646 => 150,  644 => 149,  641 => 148,  637 => 145,  634 => 144,  630 => 141,  628 => 140,  625 => 139,  621 => 136,  619 => 135,  616 => 133,  611 => 129,  601 => 128,  596 => 127,  594 => 126,  591 => 124,  589 => 123,  586 => 122,  581 => 118,  579 => 116,  578 => 115,  577 => 114,  576 => 113,  572 => 112,  569 => 110,  567 => 109,  564 => 108,  559 => 104,  557 => 103,  555 => 102,  553 => 101,  551 => 100,  547 => 99,  544 => 97,  542 => 96,  539 => 95,  525 => 92,  522 => 91,  508 => 88,  505 => 87,  480 => 82,  477 => 80,  475 => 79,  473 => 78,  468 => 77,  466 => 76,  449 => 75,  446 => 74,  442 => 71,  440 => 70,  438 => 69,  432 => 66,  430 => 65,  428 => 64,  426 => 63,  424 => 62,  415 => 60,  413 => 59,  405 => 58,  402 => 56,  400 => 55,  397 => 54,  393 => 51,  387 => 49,  385 => 48,  381 => 47,  376 => 46,  373 => 45,  368 => 41,  365 => 39,  363 => 38,  360 => 37,  352 => 34,  349 => 33,  345 => 30,  342 => 28,  340 => 27,  337 => 26,  333 => 23,  331 => 22,  329 => 21,  326 => 19,  324 => 18,  320 => 17,  317 => 16,  303 => 13,  301 => 12,  298 => 11,  293 => 7,  290 => 5,  288 => 4,  285 => 3,  281 => 310,  278 => 309,  276 => 305,  273 => 304,  271 => 300,  268 => 299,  266 => 294,  263 => 293,  260 => 291,  258 => 284,  255 => 283,  253 => 274,  250 => 273,  248 => 270,  245 => 269,  243 => 263,  240 => 262,  238 => 250,  235 => 249,  233 => 244,  230 => 243,  227 => 241,  225 => 238,  222 => 237,  220 => 232,  217 => 231,  215 => 224,  212 => 223,  210 => 216,  207 => 215,  204 => 213,  202 => 212,  199 => 211,  197 => 197,  194 => 196,  191 => 194,  189 => 190,  186 => 189,  184 => 185,  181 => 184,  179 => 178,  176 => 177,  174 => 173,  171 => 172,  169 => 168,  166 => 167,  164 => 163,  161 => 162,  159 => 158,  156 => 157,  154 => 153,  151 => 152,  149 => 148,  146 => 147,  144 => 144,  141 => 143,  139 => 139,  136 => 138,  134 => 133,  131 => 132,  129 => 122,  126 => 121,  124 => 108,  121 => 107,  119 => 95,  116 => 94,  114 => 91,  111 => 90,  109 => 87,  104 => 74,  96 => 53,  94 => 45,  91 => 35,  89 => 37,  86 => 36,  81 => 32,  79 => 29,  74 => 16,  71 => 15,  66 => 25,  61 => 2,  69 => 11,  59 => 6,  53 => 5,  47 => 12,  44 => 11,  42 => 12,  35 => 7,  29 => 5,  23 => 1,  106 => 86,  101 => 73,  99 => 54,  92 => 20,  88 => 19,  84 => 33,  80 => 17,  76 => 25,  72 => 15,  68 => 14,  64 => 3,  60 => 12,  56 => 11,  52 => 10,  48 => 9,  43 => 6,  40 => 5,  33 => 6,  30 => 5,  38 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
