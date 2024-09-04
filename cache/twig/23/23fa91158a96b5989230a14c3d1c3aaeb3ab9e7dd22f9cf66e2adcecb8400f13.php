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

/* partials/header.html.twig */
class __TwigTemplate_fdad5cb63296d3f1d2d881f27a8fdf1743bf7927a7d8f23240e1925c281b808b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<nav class=\"navbar navbar-expand\">
    <a class=\"navbar-brand\" href=\"#\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/logo.png"), "html", null, true);
        echo "\" alt=\"I&I\" />
    </a>
    <div class=\"collapse navbar-collapse\">
        <div class=\"my-dv\">
            <ul class=\"navbar-nav me-auto mb-md-0 d-none d-md-flex\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Who we are</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">How we think</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">What we do</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">What will you get</a>
                </li>
            </ul>
        </div>
        <div class=\"ms-auto\">
            <a
                    class=\"btn_primary\"
                    href=\"#\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#myModal\"
            >
                <span class=\"btn-text\">Contact us</span>
                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/contact-icon.png"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-logo\" />
            </a>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 30,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand\">
    <a class=\"navbar-brand\" href=\"#\">
        <img src=\"{{ url('theme://img/logo.png')}}\" alt=\"I&I\" />
    </a>
    <div class=\"collapse navbar-collapse\">
        <div class=\"my-dv\">
            <ul class=\"navbar-nav me-auto mb-md-0 d-none d-md-flex\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Who we are</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">How we think</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">What we do</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">What will you get</a>
                </li>
            </ul>
        </div>
        <div class=\"ms-auto\">
            <a
                    class=\"btn_primary\"
                    href=\"#\"
                    data-bs-toggle=\"modal\"
                    data-bs-target=\"#myModal\"
            >
                <span class=\"btn-text\">Contact us</span>
                <img src=\"{{ url('theme://img/contact-icon.png')}}\" alt=\"\" class=\"btn-logo\" />
            </a>
        </div>
    </div>
</nav>", "partials/header.html.twig", "D:\\wamp64\\www\\project_i&i\\user\\themes\\clean-blog\\templates\\partials\\header.html.twig");
    }
}
