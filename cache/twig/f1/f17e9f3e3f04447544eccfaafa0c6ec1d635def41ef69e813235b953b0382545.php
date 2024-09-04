<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_c21cbbfe8bfac6c234bda198da44c9d9c8f011a313fffb50a08e23f03158416b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", []), "html", null, true))) : (print ("en")));
        echo "\">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/styles.css"], "method");
        // line 9
        echo "
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('footer', $context, $blocks);
        // line 21
        echo "

        <!-- Bootstrap 5 JS and Popper.js CDN -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
        <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                // Function to add AOS attributes
                function addAOSAttributes() {
                    const accordionItems = document.querySelectorAll(\".accordion-li\");
                    accordionItems.forEach((item, index) => {
                        item.setAttribute(\"data-aos\", \"fade-up\");
                        item.setAttribute(\"data-aos-offset\", \"50\");
                        item.setAttribute(\"data-aos-delay\", (index * 20).toString());
                        item.setAttribute(\"data-aos-duration\", \"1000\");
                        item.setAttribute(\"data-aos-easing\", \"ease-in-out\");
                    });
                }

                // Call the function to add AOS attributes
                addAOSAttributes();

                // Initialize AOS
                AOS.init();
            });
        </script>
        <script>

            jQuery(document).ready(function(){
                window.onscroll = function() {
                    if (window.pageYOffset >= 500){
                        jQuery('.tab-sticky-mob').css({position: 'fixed', left:'0', right:'0', width:'fit-content'});
                    }
                    else {
                        jQuery('.tab-sticky-mob').css({position: ''});
                    }
                }
            });

        </script>
        <script>
            jQuery(document).ready(function(){
                window.onscroll = function() {
                    if (window.pageYOffset >= 400){
                        jQuery('.tab-sticky').css({position: 'fixed',left:'40px',right:'0',width:'fit-content', bottom: '30px'});
                    }
                    else {
                        jQuery('.tab-sticky').css({position: '', bottom: ''});
                    }
                }
            });
        </script>

        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                var accItems = document.querySelectorAll(\".accordion-li\");

                accItems.forEach(function (item) {
                    item.addEventListener(\"click\", function () {
                        // Toggle active class on clicked item
                        accItems.forEach(function (li) {
                            if (li === item) {
                                li.classList.toggle(\"active\");
                            } else {
                                li.classList.remove(\"active\");
                            }
                        });
                    });
                });
            });
        </script>

    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "            ";
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 6)->display($context);
        // line 7
        echo "        ";
    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        // line 13
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "        ";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
    }

    // line 18
    public function block_footer($context, array $blocks = [])
    {
        // line 19
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 19)->display($context);
        // line 20
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 20,  174 => 19,  171 => 18,  166 => 16,  162 => 14,  159 => 13,  156 => 12,  152 => 7,  149 => 6,  146 => 5,  66 => 21,  64 => 18,  61 => 17,  59 => 16,  56 => 15,  54 => 12,  49 => 9,  46 => 8,  44 => 5,  39 => 3,  36 => 2,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
            {% include 'partials/head.html.twig' %}
        {% endblock %}
        {% do assets.addCss('theme://css/styles.css') %}

    </head>
    <body>
        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}


        <!-- Bootstrap 5 JS and Popper.js CDN -->
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js\"></script>
        <script src=\"https://unpkg.com/aos@next/dist/aos.js\"></script>
        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                // Function to add AOS attributes
                function addAOSAttributes() {
                    const accordionItems = document.querySelectorAll(\".accordion-li\");
                    accordionItems.forEach((item, index) => {
                        item.setAttribute(\"data-aos\", \"fade-up\");
                        item.setAttribute(\"data-aos-offset\", \"50\");
                        item.setAttribute(\"data-aos-delay\", (index * 20).toString());
                        item.setAttribute(\"data-aos-duration\", \"1000\");
                        item.setAttribute(\"data-aos-easing\", \"ease-in-out\");
                    });
                }

                // Call the function to add AOS attributes
                addAOSAttributes();

                // Initialize AOS
                AOS.init();
            });
        </script>
        <script>

            jQuery(document).ready(function(){
                window.onscroll = function() {
                    if (window.pageYOffset >= 500){
                        jQuery('.tab-sticky-mob').css({position: 'fixed', left:'0', right:'0', width:'fit-content'});
                    }
                    else {
                        jQuery('.tab-sticky-mob').css({position: ''});
                    }
                }
            });

        </script>
        <script>
            jQuery(document).ready(function(){
                window.onscroll = function() {
                    if (window.pageYOffset >= 400){
                        jQuery('.tab-sticky').css({position: 'fixed',left:'40px',right:'0',width:'fit-content', bottom: '30px'});
                    }
                    else {
                        jQuery('.tab-sticky').css({position: '', bottom: ''});
                    }
                }
            });
        </script>

        <script>
            document.addEventListener(\"DOMContentLoaded\", function () {
                var accItems = document.querySelectorAll(\".accordion-li\");

                accItems.forEach(function (item) {
                    item.addEventListener(\"click\", function () {
                        // Toggle active class on clicked item
                        accItems.forEach(function (li) {
                            if (li === item) {
                                li.classList.toggle(\"active\");
                            } else {
                                li.classList.remove(\"active\");
                            }
                        });
                    });
                });
            });
        </script>

    </body>
</html>
", "partials/base.html.twig", "D:\\wamp64\\www\\project_i&i\\user\\themes\\clean-blog\\templates\\partials\\base.html.twig");
    }
}
