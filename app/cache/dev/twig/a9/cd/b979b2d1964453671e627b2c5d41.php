<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_a9cdb979b2d1964453671e627b2c5d41 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
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
        return array (  102 => 35,  83 => 28,  54 => 15,  50 => 7,  110 => 20,  89 => 16,  63 => 13,  58 => 12,  49 => 14,  34 => 6,  26 => 4,  114 => 22,  109 => 21,  106 => 20,  101 => 19,  77 => 26,  67 => 24,  59 => 8,  37 => 4,  25 => 2,  221 => 90,  211 => 84,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  152 => 55,  142 => 47,  140 => 46,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  115 => 39,  105 => 31,  100 => 19,  75 => 24,  53 => 19,  19 => 1,  98 => 40,  93 => 30,  88 => 29,  80 => 15,  46 => 9,  44 => 9,  36 => 7,  27 => 3,  22 => 2,  57 => 11,  43 => 8,  40 => 7,  30 => 3,  91 => 16,  86 => 15,  81 => 14,  76 => 5,  70 => 23,  65 => 14,  62 => 16,  60 => 21,  56 => 20,  52 => 11,  45 => 12,  41 => 8,  35 => 6,  33 => 4,  24 => 1,  163 => 92,  155 => 56,  153 => 92,  150 => 91,  144 => 90,  137 => 87,  125 => 85,  121 => 24,  116 => 83,  87 => 57,  32 => 12,  29 => 4,  85 => 16,  78 => 25,  72 => 25,  66 => 25,  55 => 18,  47 => 7,  39 => 10,  31 => 5,  28 => 4,);
    }
}
