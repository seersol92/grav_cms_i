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

/* partials/footer.html.twig */
class __TwigTemplate_443890f62983f7a68b21dc28d7d028aba1f36414374d0a31e0af269050b37316 extends \Twig\Template
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
        echo "<footer style=\"padding: 30px\">
    <div class=\"row\">
        <!-- Left Border Column -->
        <div class=\"col-5 border-column d-none d-md-block\">
            <div class=\"footer-content\">
                <ul class=\"\">
                    <li><a href=\"#\">Mobile app</a></li>
                    <li><a href=\"#\">Community</a></li>
                    <li><a href=\"#\">Company</a></li>
                </ul>
            </div>
        </div>

        <!-- Center Logo Column -->
        <div class=\"col-2 logo-container\">
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"footer-logo\" />
        </div>

        <!-- Right Border Column -->
        <div class=\"col-5 border-column d-none d-md-block\">
            <div class=\"footer-content\">
                <ul>
                    <li><a href=\"#\">Help desk</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Resources</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"d-flex d-md-none mt-3 justify-content-center footer-content\">
        <ul class=\"\">
            <li><a href=\"#\">Mobile app</a></li>
            <li><a href=\"#\">Community</a></li>
            <li><a href=\"#\">Company</a></li>
            <li><a href=\"#\">Help desk</a></li>
            <li><a href=\"#\">Blog</a></li>
            <li><a href=\"#\">Resources</a></li>
        </ul>
    </div>

    <div
            class=\"d-flex flex-column align-items-center mt-5 pb-3 footer-social gap-3\"
    >
        <div class=\"mb-3\">
            <a href=\"\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/facebook.png"), "html", null, true);
        echo "\" /></a>
            <a href=\"\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/youtube.png"), "html", null, true);
        echo "\" /></a>
            <a href=\"\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/linkedin.png"), "html", null, true);
        echo "\" /></a>
        </div>
        <p>&copy; <span>2024</span> I&I All Rights Reserved.</p>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 48,  84 => 47,  80 => 46,  47 => 16,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer style=\"padding: 30px\">
    <div class=\"row\">
        <!-- Left Border Column -->
        <div class=\"col-5 border-column d-none d-md-block\">
            <div class=\"footer-content\">
                <ul class=\"\">
                    <li><a href=\"#\">Mobile app</a></li>
                    <li><a href=\"#\">Community</a></li>
                    <li><a href=\"#\">Company</a></li>
                </ul>
            </div>
        </div>

        <!-- Center Logo Column -->
        <div class=\"col-2 logo-container\">
            <img src=\"{{ url('theme://img/logo.png')}}\" alt=\"\" class=\"footer-logo\" />
        </div>

        <!-- Right Border Column -->
        <div class=\"col-5 border-column d-none d-md-block\">
            <div class=\"footer-content\">
                <ul>
                    <li><a href=\"#\">Help desk</a></li>
                    <li><a href=\"#\">Blog</a></li>
                    <li><a href=\"#\">Resources</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"d-flex d-md-none mt-3 justify-content-center footer-content\">
        <ul class=\"\">
            <li><a href=\"#\">Mobile app</a></li>
            <li><a href=\"#\">Community</a></li>
            <li><a href=\"#\">Company</a></li>
            <li><a href=\"#\">Help desk</a></li>
            <li><a href=\"#\">Blog</a></li>
            <li><a href=\"#\">Resources</a></li>
        </ul>
    </div>

    <div
            class=\"d-flex flex-column align-items-center mt-5 pb-3 footer-social gap-3\"
    >
        <div class=\"mb-3\">
            <a href=\"\"><img src=\"{{ url('theme://img/facebook.png')}}\" /></a>
            <a href=\"\"><img src=\"{{ url('theme://img/youtube.png')}}\" /></a>
            <a href=\"\"><img src=\"{{ url('theme://img/linkedin.png')}}\" /></a>
        </div>
        <p>&copy; <span>2024</span> I&I All Rights Reserved.</p>
    </div>
</footer>", "partials/footer.html.twig", "D:\\wamp64\\www\\project_i&i\\user\\themes\\clean-blog\\templates\\partials\\footer.html.twig");
    }
}
