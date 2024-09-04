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

/* partials/head.html.twig */
class __TwigTemplate_12be301212fb72c0da0b8e6467cadaf06600f17ef3b5ee6454dc26b87701c2a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 6
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", []) != "generator")) {
                // line 7
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", [])) {
                    echo "name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "name", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                    echo "http-equiv=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "http_equiv", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", [])) {
                    echo "charset=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "charset", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", [])) {
                    echo "property=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "property", []), "html", null, true);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", [])) {
                    echo "content=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["meta"], "content", []), "html", null, true);
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute(($context["theme_config"] ?? null), "favicon", []) != "")) {
            // line 12
            echo "<link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["theme_config"] ?? null), "favicon", [])), true), "html", null, true);
            echo "\" />
";
        }
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 16
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "robots", []), "html", null, true);
            echo "\">
";
        }
        // line 18
        echo "
<title>I&I</title>

";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
";
        // line 30
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
        // line 33
        if (($context["base_url"] ?? null)) {
            // line 34
            echo "    ";
            $context["site_url"] = twig_replace_filter(($context["base_url_absolute"] ?? null), [($context["base_url"] ?? null) => ""]);
        } else {
            // line 36
            echo "    ";
            $context["site_url"] = ($context["base_url_absolute"] ?? null);
        }
        // line 38
        echo "
";
        // line 39
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", [])) {
            // line 40
            echo "    ";
            $context["og_image"] = (($context["site_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image", []), [], "array"), "cache", []), "url", [], "method"));
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(        // line 41
($context["page"] ?? null), "media", []), "images", [])) > 0)) {
            // line 42
            echo "    ";
            $context["og_image"] = (($context["site_url"] ?? null) . $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cache", []), "url", [], "method"));
        } else {
            // line 44
            echo "    ";
            $context["og_image"] = "";
        }
        // line 46
        echo "
<meta property=\"og:url\" content=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method"), "html", null, true);
        echo "\" />
<meta property=\"og:title\" content=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html_attr");
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "metadata", []), "description", []), "html_attr");
        echo "\" />
";
        // line 50
        if ( !twig_test_empty(($context["og_image"] ?? null))) {
            // line 51
            echo "<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["og_image"] ?? null), "html", null, true);
            echo "\" />
";
        }
        // line 53
        echo "<style>
    /* Custom CSS */
    :root {
        --color-black: #0B1215;
        --color-white: #ffffff;
        --color-green: #B0D291;
        --color-grey: #D2D8CD;
    }

    /*
    @font-face {
      font-family: 'Helvetica Neue';
      src: url('./fonts/HelveticaNeue.woff2') format('woff2');
      font-weight: normal;
      font-style: normal;
    } */

    /* Bold font */
    /*@font-face {
      font-family: 'Helvetica Neue';
      src: url('./fonts/HelveticaNeue-Bold.woff2') format('woff2');
      font-weight: bold;
      font-style: normal;
    }*/

    body {
        font-family: \"Helvetica Neue\", Roboto;
    }

    .font-bold-24 {
        font-size: 24px;
        font-weight: bold;
    }

    .flex-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar {
        padding: 5px 20px 10px 20px;
        position: relative;
    }

    .navbar-nav .nav-link {
        color: black !important;
        font-size: 17px !important;
    }


    .rounded-tabs .nav-link {
        border-radius: 20px;
        background-color: black;
        color: white;
        padding: 12px 22px;
        font-size: 16px;
        font-weight: normal;
    }

    .nav-tabs {
        border-color: unset !important
    }

    .rounded-tabs .nav-link.active {
        background-color: white;
        color: black;
        border-radius: 50px;
        text-decoration: none;
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        border-color: black !important
    }


    .icon-img {
        width: 50px;
        height: 50px;
    }
    .tab-sticky{
        z-index: 1000;
    }
    .tab-sticky-mob{
        z-index: 1000;
    }
    .custom-tab {
        background-color: black;
        padding: 5px;
        border-radius: 50px;
        overflow: hidden;
    }

    .navbar-nav {
        padding-left: 100px;
    }

    .navbar-collapse {
        position: relative;
    }

    /* Border styling with ::after pseudo-element */
    .my-dv {
        padding-top: 15px;
        border-bottom: 1px solid black;
    }

    .navbar-brand img {
        height: 58px;
        width: 58px;
    }

    /* Button styling */
    .btn_primary {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        width: 255px;
        height: 58px;
        border-radius: 50px;
        background-color: black;
        color: white;
        text-decoration: none;
        box-sizing: border-box;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .btn_primary:hover {
        background-color: #B0D291;
        color: #0B1215;
    }

    /* Button logo styling */
    .btn-logo {
        height: 50px;
        margin-right: 4px;
    }

    .btn-text {
        flex: 1;
        margin-left: 30px;
        font-size: 17px;
    }

    .hero-section {
        padding: 35px 20px 35px 20px;
        color: black;
        font-weight: bold;
        position: relative;
    }

    /* Hero section styling */
    .hero {
        display: flex;
        height: 83vh;
        overflow: hidden;
        font-size: 100px;
        line-height: 0.9;
    }

    /* Pseudo-element for background image */
    .hero-section::before {
        content: \"\";
        position: absolute;
        top: 42%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 615px;
        height: 526px;
        background: url('";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/hero-bg.png"), "html", null, true);
        echo "') no-repeat center center;        background-size: auto;
        background-size: cover;
        z-index: -1;
    }

    .hero-heading {
        display: flex;
        flex-direction: column;
        width: 100%;
    }


    .hero-heading-center {
        align-self: center;
    }

    .branding {
        max-width: 305px;
        max-height: 75px;
        line-height: 24px;
    }

    .innovate {
        display: inline-flex;
        gap: 30px;
        align-items: center;
    }

    .icon-wrapper {
        width: 60px;
        height: 60px;
        background-color: #D2D8CD;
        position: relative;
        font-size: 24px;
        color: white;
        border-radius: 30px;
        text-align: center;
    }

    .icon {
        width: 30px;
        height: 30px;
        position: absolute;
    }


    /* Base style for the section */
    .who-section {
        position: relative;
        padding: 20px 20px 60px 20px;
        width: 100%;
        background-color: #D2D8CD;
        overflow: hidden;
        z-index: 1;
    }

    .aaaaa {
        height: 80vh;
    }

    .who-heading {
        font-size: 205px;
        color: #ffffff;
        line-height: 180px;
        font-weight: 600;
    }


    /* Background image styling */
    .who-section::before {
        content: \"\";
        position: absolute;
        top: 54%;
        left: 67%;
        width: 650px;
        height: 507px;
        background-image: url('";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/who-bg.png"), "html", null, true);
        echo "');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .who-section::after {
        content: \"\";
        position: absolute;
        top: 20px;
        right: 25px;
        width: 12px;
        height: 95%;
        background-image: url('";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/Frame 4.png"), "html", null, true);
        echo "');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .who-heading p:first-child {
        align-content: center;
        display: flex;
        align-items: center;
        gap: 60px;
        justify-content: space-between;
    }


    .heading-icon {
        width: 150px;
        height: 80px;
    }

    .custom-text {
        max-width: 651px;
        font-size: 36px;
        font-weight: bold;
        line-height: 1.4;
    }

    .custom-text p:last-child {
        color: #ffffff;
    }

    .brand-section {
        padding: 50px 20px 30px 20px;
        position: relative;
    }

    .brand-section>div {
        display: flex;
        height: 45vh;
    }

    .brand-section p:first-of-type {
        width: 30%
    }

    .brand-section p:last-of-type {
        font-size: 36px;
        font-weight: bold;
    }

    .brand-details {
        max-width: 331px;
        font-weight: bold;
        font-size: 24px;
        line-height: initial;
        display: flex;
        align-items: center;
    }

    .brand-section::before {
        content: \"\";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 700px;
        height: 500px;
        background-image: url('";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/brand-strategy-bg.png"), "html", null, true);
        echo "');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .progress-main{
        width: 68%;
        margin-bottom: 80px;
    }
    .progress{
        background: #D2D8CD;
        border-radius: 50px;
        height:34px;
    }
    .progress-bar{
        background: #fff;
        border-radius: 50px;
        margin: 4px;
        color: #000;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 0px 10px;
    }

    .how-section {
        padding: 20px;
        margin-bottom: 50px;
    }

    .how-section>.heading {
        display: flex;
    }

    .how-section>.heading {
        display: flex;
    }

    .how-section>.heading p:last-of-type {
        font-size: 24px;
        font-weight: bold;
    }


    .accordion-ul {
        list-style: none;
        padding: 0;
    }

    .accordion-li {
        border-bottom: 1px solid black;
        cursor: pointer;
        padding: 20px 0px 20px 0px;
        position: relative;
        font-weight: bold;
        font-size: 24px;
        display: flex;
    }

    .accordion-li>div {
        position: relative;
        left: 30%;
        width: 69%;
    }

    .accordion-li::before {
        content: attr(data-number);
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 16px;
        color: #D2D8CD;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        font-size: 24px;
        color: #D2D8CD;
        background-color: #fff;
        position: relative;
        left: 9.3%;
    }

    .accordion-li.active div::after {
        content: \"\";
        position: absolute;
        width: 80px;
        height: 38px;
        background-image: url('";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/arrow-icon.png"), "html", null, true);
        echo "');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        right: 35%;
    }

    .accordion-li.active::after {
        content: \"\";
        position: absolute;
        font-size: 16px;
        left: 10%;
        width: 90px;
        height: 120px;
        background-image: url('";
        // line 489
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/accordain-active.png"), "html", null, true);
        echo "');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        transform: translate(-10%, -40%);
    }

    .accordion-li.active {
        color: #B0D291;
        border: none;
    }

    .accordion-li.active+.accordion-content {
        max-height: 600px;
        display: flex;
        position: relative;
        left: 30%;
        text-align: left;
        color: #D2D8CD;
        font-weight: bold;
        max-width: 566px;
    }


    .marketing-section {
        background-color: #d8d3cd;
        padding-top: 50px
    }

    .market-research-container {
        min-width: 40vw;
    }
    .tabs {
        display: flex;
        position: relative;
        border:2px solid #000;
        background-color: #d8d3cd;
        border-radius: 99px;
    }
    .tabs * {
        z-index: 2;
    }

    .tabs input[type=radio] {
        display: none;
    }

    .tab {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 54px;
        width: 250px;
        font-size: 17px;
        font-weight: 500;
        border-radius: 99px;
        cursor: pointer;
        transition: color 0.15s ease-in;
    }

    .tabs input[type=radio]:checked + label {
        color: #000;
    }
    .tabs input[type=radio]:checked + label > .notification {
        background-color: #fff;
        color: #000;
    }

    .tabs input[id=radio-1]:checked ~ .glider {
        transform: translateX(0);
    }

    .tabs input[id=radio-2]:checked ~ .glider {
        transform: translateX(100%);
    }

    .tabs input[id=radio-3]:checked ~ .glider {
        transform: translateX(200%);
    }

    .glider {
        position: absolute;
        display: flex;
        height: 54px;
        width: 250px;
        background-color: #fff;
        z-index: 0;
        border-radius: 99px;
        transition: 0.25s ease-out;
    }

    @media (max-width: 700px) {
        .tabs {
            transform: scale(0.6);
        }
        .glider {
            height: 50px;
            width: 200px;
        }
    }
    .market-research-heading {
        font-size: 36px;
        width: 350px;
        font-weight: bold;
        line-height: 34px;
    }

    .market-research-description {
        max-width: 430px;
        height: 133px;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .market-research {
        height: 285vh;
    }


    .market-research {
        position: relative;
    }

    .market-items {
        position: relative;
        padding: 5rem;
    }

    .market-items::before {
        content: \"\";
        position: absolute;
        left: 48.5%;
        height: 60px;
        width: 60px;
        background-image: url('";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/iconnn.png"), "html", null, true);
        echo "');
        z-index: 0;

    }

    .market-research::before {
        content: \"\";
        position: absolute;
        top: 4%;
        left: 50%;
        width: 12px;
        height: 74%;
        background-image: url('";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/line.png"), "html", null, true);
        echo "');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }


    .market-research::after {
        content: \"\";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 554px;
        height: 519px;
        background: url('";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/research-bg-bottom.png"), "html", null, true);
        echo "') no-repeat center center;
        background-size: cover;
        z-index: 0;
    }

    .market-journey {
        font-size: 210px;
        font-weight: bold;
        color: white;
        line-height: 0.9;
        padding-bottom: 40px;
        z-index: 1;
        /* position: relative; */
    }

    .discover-us {
        padding-bottom: 50px;
    }

    .border-column {
        position: relative;
        padding-top: 40px;
    }

    .border-column::before {
        content: \"\";
        position: absolute;
        top: 50%;
        display: inline-block;
        width: 96%;
        border-bottom: 1px solid #000;
    }

    .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    .footer-logo {
        width: 58px;
        height: 58px;
    }

    .footer-content ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: space-between;

    }


    .footer-content ul li a {
        text-decoration: none;
        color: #000;
    }


    .footer-social img {
        height: 60px;
        width: 60px;
    }

    .footer-social p {
        color: var(--color-grey);
    }


    /* Responsive Design */



    /* Extra Small Devices (Phones) */
    @media (max-width: 767.98px) {

        .market-journey {
            font-size: 80px;
            text-align: center;
        }

        .market-research {
            height: auto !important;
        }
        .market-journey {
            margin-top: 189px;
            position: relative;
        }

        .market-research::after {
            width: 241px;
            height: 230px;
        }

        .market-items {
            padding: 1rem;
        }

        .market-research-heading {
            font-size: 30px;
            max-width: 90% !important;
        }

        .market-research-description {
            height: auto;
            font-size: 20px;
            max-width: 90% !important;
        }

        .market-research::before {
            top: 1%;
            right: 8%;
            left: auto;
            height: 80%;
        }

        .market-items::before {
            content: \"\";
            position: absolute;
            background-image: url('";
        // line 771
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/iconnn-50x50.png"), "html", null, true);
        echo "');
            background-repeat: no-repeat;
            z-index: 3;
            right: 3%;
            top: 5%;
            left: auto;
            height: 50px;
            width: 50px;
        }

        .discover-us a {
            width: 70%;
        }

        .footer-social img {
            height: 50px;
            width: 50px;
        }

        .footer-logo {
            width: 40px;
            height: 40px;
        }

        .logo-container {
            width: 100%;
            position: relative;
        }

        .logo-container::before {
            content: \"\";
            position: absolute;
            border-bottom: 1px solid black;
            width: 43%;
            left: 0%;
        }


        .logo-container::after {
            content: \"\";
            position: absolute;
            border-bottom: 1px solid black;
            width: 43%;
            right: 0%;
        }

        .footer-content ul {
            list-style-type: none;
            flex-direction: column;
            gap: 0.5rem
        }

        .navbar-collapse::after {
            display: none;
        }

        .navbar::after {
            content: \"\";
            display: block;
            border-bottom: 1px solid black;
            position: absolute;
            bottom: 0px;
            width: 93%;
        }

        .navbar-brand img {
            height: 40px;
            width: 40px;
        }

        .btn_primary {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            width: 153px;
            height: 44px;
            border-radius: 50px;
            background-color: black;
            color: white;
            text-decoration: none;
            box-sizing: border-box;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn-text {
            flex: 1;
            font-size: 14px;

        }

        .btn-logo {
            height: 40px;
            width: 40px;
        }

        .hero-section {
            padding: 35px 20px 35px 20px;
            color: black;
            font-weight: bold;
        }

        .hero {
            height: 45vh;
            font-size: 40px;
            line-height: 50px;
            max-width: 335px;
            display: flex;
            align-items: end;
        }

        .hero-section::before {
            content: \"\";
            position: absolute;
            top: 26%;
            width: 227px;
            height: 236px;
            background: url('";
        // line 888
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/hero-bg.png"), "html", null, true);
        echo "') no-repeat center center;
            background-size: cover;
            z-index: -1;
        }

        .font-bold-24 {
            font-size: 20px;
        }

        .innovate {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .rounded-tabs .nav-link {
            padding: 8px 12px !important;
        }

        .icon-img {
            width: 40px;
            height: 40px;
        }


        .custom-tab {
            padding: 4px;
        }

        .who-section::before {
            content: \"\";
            position: absolute;
            left: 50%;
            width: 361px;
            height: 315px;
            background-image: url('";
        // line 923
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/who-bg.png"), "html", null, true);
        echo "');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        .who-section::after {
            right: 16px;
        }

        .accordion-content {
            left: 0%;
        }

        .how-section>.heading p:last-of-type {
            font-size: 20px;
        }

        .how-section>.heading {
            flex-direction: column;
        }

        .brand-section::before {
            width: 335px;
            height: 240px;
        }

        .brand-section p:last-of-type {
            font-size: 30px;
        }

        .brand-details {
            font-size: 20px;
        }

        .brand-section>div {
            flex-direction: column;
            text-align: left;
            align-items: start;
            height: 35vh;
        }


        .who-section {
            padding-top: 40px;
        }

        .aaaaa {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .who-heading p:first-child {
            margin-top: 100px;

        }
        .who-heading {
            font-size: 80px;
            line-height: 60px;
            margin-bottom: 40px;
        }
        .progress-main {
            width: 100%;
            margin-bottom: 30px;
            margin-top: 20px;
        }
        .tab {
            height: 50px;
            width: 200px;
            font-size: 15px;
        }
        .accordion-li::before {
            top: 34%;
        }
        .who-heading img {
            width: 68.59px;
            height: 50px;
        }

        .custom-text {
            max-width: 290px;
            font-size: 30px;
            font-weight: bold;
            line-height: 1.4;
        }

        .accordion-content {
            flex-direction: column;
            align-items: start;
        }

        .accordion-li.active+.accordion-content {
            left: 2%;
            padding-top: 140px;
            max-width: 100%;
        }

        .accordion-li {
            font-size: 20px;
        }

        .accordion-li.active {
            color: var(--color-black);
        }

        .accordion-li.active>div::before {
            display: none;
        }

        .accordion-li.active>div::after {
            display: none;
        }

        .accordion-li.active::after {
            display: none;
        }

        .accordion-li.active+.accordion-content::before {
            content: \"\";
            position: absolute;
            left: 40%;
            width: 82px;
            height: 110px;
            background-image: url('";
        // line 1048
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/accordain-active.png"), "html", null, true);
        echo "');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            top: 3%;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .accordion-li.active div::after {
            right: 15%;
        }

        .accordion-li.active::after {
            left: 15%;
        }

        .navbar-nav .nav-link {
            font-size: 13px !important;
        }

        .navbar-collapse::after {
            width: 58%;
        }

        .navbar-nav {
            padding-left: 30px;
        }

        .btn-logo {
            height: 39px;
            width: 40px;
        }

        .btn_primary {
            width: 210px;
            height: 50px;
        }

        .navbar-brand img {
            height: 50px;
            width: 50px;
        }

        .hero {
            height: 70vh;
            font-size: 90px;
        }
    }

    #scroll-icon {
        position: fixed;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
        cursor: pointer;
        z-index: -100;
        transition: top 0.3s ease, transform 0.3s ease, color 0.3s ease;
    }
    /* Styling for the modals */
    .modal-dialog.modal-md {
        max-width: 580px; /* Adjust the width as needed */
    }

    .modal-header {
        border: none;
    }

    .modal-content {
        border-radius: 15px;
    }

    .modal-title {
        font-size: 36px;
        font-weight: bold;
    }

    .modal-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2px;
    }

    .modal-body form {
        width: 75%;
    }

    .modal-body .btn_primary {
        width: 80%;
    }

    .form-control {
        border-color: #b0d291;
        text-align: center;
        line-height: 2.2;
        border-radius: 35px;
        font-size: 24px;
        font-weight: bold;
    }

    .form-control:focus {
        border-color: #b0d291;
        box-shadow: 0 0 0 0.15rem #b0d291;
    }

    .form-control::placeholder {
        color: #d2d8cd;
    }

    .modal-footer {
        display: flex;
        justify-content: center;
    }

    /* Success modal styling */
    .success-modal .modal-content {
        background-color: #b0d291;
        color: #fff;
    }

    .success-message {
        font-weight: bold;
        font-size: 36px;
        color: black;
    }

    .success-image {
        width: 320px;
        height: 301px;
        object-fit: cover;
        margin: 10px 0;
    }

    .success-text {
        font-weight: bold;
        font-size: 24px;
    }
</style>
";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"], "method");
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"], "method");
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://unpkg.com/aos@next/dist/aos.css"], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Helvetica%20Neue:400,700"], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/styles.css"], "method");
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1365 => 26,  1362 => 25,  1359 => 24,  1356 => 23,  1353 => 22,  1350 => 21,  1203 => 1048,  1075 => 923,  1037 => 888,  917 => 771,  793 => 650,  776 => 636,  761 => 624,  623 => 489,  606 => 475,  510 => 382,  440 => 315,  422 => 300,  343 => 224,  170 => 53,  164 => 51,  162 => 50,  158 => 49,  154 => 48,  150 => 47,  147 => 46,  143 => 44,  139 => 42,  137 => 41,  134 => 40,  132 => 39,  129 => 38,  125 => 36,  121 => 34,  119 => 33,  114 => 30,  110 => 29,  107 => 28,  105 => 21,  100 => 18,  94 => 16,  92 => 15,  89 => 14,  83 => 12,  81 => 11,  78 => 10,  44 => 7,  41 => 6,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

{% for meta in page.metadata %}
    {% if meta.name != 'generator' %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endif %}
{% endfor %}

{% if theme_config.favicon != '' %}
<link rel=\"icon\" href=\"{{ url('theme://img/' ~ theme_config.favicon, true) }}\" />
{% endif %}

{% if header.robots %}
<meta name=\"robots\" content=\"{{ header.robots }}\">
{% endif %}

<title>I&I</title>

{% block stylesheets %}
    {% do assets.addCss('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') %}
    {% do assets.addCss('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css') %}
    {% do assets.addCss('https://unpkg.com/aos@next/dist/aos.css') %}
    {% do assets.addCss('https://fonts.googleapis.com/css?family=Helvetica%20Neue:400,700') %}
    {% do assets.addCss('theme://css/styles.css') %}
{% endblock %}

{{ assets.css()|raw }}
{{ assets.js()|raw }}

{# Site URL is not correct if Grav is in subfolder #}
{% if base_url %}
    {% set site_url = base_url_absolute|replace({(base_url): ''}) %}
{% else %}
    {% set site_url = base_url_absolute %}
{% endif %}

{% if page.header.header_image %}
    {% set og_image = site_url ~  page.media.images[page.header.header_image].cache.url() %}
{% elseif page.media.images|length > 0 %}
    {% set og_image = site_url ~  page.media.images|first.cache.url() %}
{% else %}
    {% set og_image = '' %}
{% endif %}

<meta property=\"og:url\" content=\"{{ page.url(true) }}\" />
<meta property=\"og:title\" content=\"{{ page.title|e('html_attr') }}\" />
<meta property=\"og:description\" content=\"{{ page.header.metadata.description|e('html_attr') }}\" />
{% if og_image is not empty %}
<meta property=\"og:image\" content=\"{{ og_image }}\" />
{% endif %}
<style>
    /* Custom CSS */
    :root {
        --color-black: #0B1215;
        --color-white: #ffffff;
        --color-green: #B0D291;
        --color-grey: #D2D8CD;
    }

    /*
    @font-face {
      font-family: 'Helvetica Neue';
      src: url('./fonts/HelveticaNeue.woff2') format('woff2');
      font-weight: normal;
      font-style: normal;
    } */

    /* Bold font */
    /*@font-face {
      font-family: 'Helvetica Neue';
      src: url('./fonts/HelveticaNeue-Bold.woff2') format('woff2');
      font-weight: bold;
      font-style: normal;
    }*/

    body {
        font-family: \"Helvetica Neue\", Roboto;
    }

    .font-bold-24 {
        font-size: 24px;
        font-weight: bold;
    }

    .flex-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar {
        padding: 5px 20px 10px 20px;
        position: relative;
    }

    .navbar-nav .nav-link {
        color: black !important;
        font-size: 17px !important;
    }


    .rounded-tabs .nav-link {
        border-radius: 20px;
        background-color: black;
        color: white;
        padding: 12px 22px;
        font-size: 16px;
        font-weight: normal;
    }

    .nav-tabs {
        border-color: unset !important
    }

    .rounded-tabs .nav-link.active {
        background-color: white;
        color: black;
        border-radius: 50px;
        text-decoration: none;
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        border-color: black !important
    }


    .icon-img {
        width: 50px;
        height: 50px;
    }
    .tab-sticky{
        z-index: 1000;
    }
    .tab-sticky-mob{
        z-index: 1000;
    }
    .custom-tab {
        background-color: black;
        padding: 5px;
        border-radius: 50px;
        overflow: hidden;
    }

    .navbar-nav {
        padding-left: 100px;
    }

    .navbar-collapse {
        position: relative;
    }

    /* Border styling with ::after pseudo-element */
    .my-dv {
        padding-top: 15px;
        border-bottom: 1px solid black;
    }

    .navbar-brand img {
        height: 58px;
        width: 58px;
    }

    /* Button styling */
    .btn_primary {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        width: 255px;
        height: 58px;
        border-radius: 50px;
        background-color: black;
        color: white;
        text-decoration: none;
        box-sizing: border-box;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .btn_primary:hover {
        background-color: #B0D291;
        color: #0B1215;
    }

    /* Button logo styling */
    .btn-logo {
        height: 50px;
        margin-right: 4px;
    }

    .btn-text {
        flex: 1;
        margin-left: 30px;
        font-size: 17px;
    }

    .hero-section {
        padding: 35px 20px 35px 20px;
        color: black;
        font-weight: bold;
        position: relative;
    }

    /* Hero section styling */
    .hero {
        display: flex;
        height: 83vh;
        overflow: hidden;
        font-size: 100px;
        line-height: 0.9;
    }

    /* Pseudo-element for background image */
    .hero-section::before {
        content: \"\";
        position: absolute;
        top: 42%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 615px;
        height: 526px;
        background: url('{{ url('theme://img/hero-bg.png') }}') no-repeat center center;        background-size: auto;
        background-size: cover;
        z-index: -1;
    }

    .hero-heading {
        display: flex;
        flex-direction: column;
        width: 100%;
    }


    .hero-heading-center {
        align-self: center;
    }

    .branding {
        max-width: 305px;
        max-height: 75px;
        line-height: 24px;
    }

    .innovate {
        display: inline-flex;
        gap: 30px;
        align-items: center;
    }

    .icon-wrapper {
        width: 60px;
        height: 60px;
        background-color: #D2D8CD;
        position: relative;
        font-size: 24px;
        color: white;
        border-radius: 30px;
        text-align: center;
    }

    .icon {
        width: 30px;
        height: 30px;
        position: absolute;
    }


    /* Base style for the section */
    .who-section {
        position: relative;
        padding: 20px 20px 60px 20px;
        width: 100%;
        background-color: #D2D8CD;
        overflow: hidden;
        z-index: 1;
    }

    .aaaaa {
        height: 80vh;
    }

    .who-heading {
        font-size: 205px;
        color: #ffffff;
        line-height: 180px;
        font-weight: 600;
    }


    /* Background image styling */
    .who-section::before {
        content: \"\";
        position: absolute;
        top: 54%;
        left: 67%;
        width: 650px;
        height: 507px;
        background-image: url('{{ url('theme://img/who-bg.png') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .who-section::after {
        content: \"\";
        position: absolute;
        top: 20px;
        right: 25px;
        width: 12px;
        height: 95%;
        background-image: url('{{ url('theme://img/Frame 4.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .who-heading p:first-child {
        align-content: center;
        display: flex;
        align-items: center;
        gap: 60px;
        justify-content: space-between;
    }


    .heading-icon {
        width: 150px;
        height: 80px;
    }

    .custom-text {
        max-width: 651px;
        font-size: 36px;
        font-weight: bold;
        line-height: 1.4;
    }

    .custom-text p:last-child {
        color: #ffffff;
    }

    .brand-section {
        padding: 50px 20px 30px 20px;
        position: relative;
    }

    .brand-section>div {
        display: flex;
        height: 45vh;
    }

    .brand-section p:first-of-type {
        width: 30%
    }

    .brand-section p:last-of-type {
        font-size: 36px;
        font-weight: bold;
    }

    .brand-details {
        max-width: 331px;
        font-weight: bold;
        font-size: 24px;
        line-height: initial;
        display: flex;
        align-items: center;
    }

    .brand-section::before {
        content: \"\";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 700px;
        height: 500px;
        background-image: url('{{ url('theme://img/brand-strategy-bg.png') }}');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        transform: translate(-50%, -50%);
        z-index: -1;
    }

    .progress-main{
        width: 68%;
        margin-bottom: 80px;
    }
    .progress{
        background: #D2D8CD;
        border-radius: 50px;
        height:34px;
    }
    .progress-bar{
        background: #fff;
        border-radius: 50px;
        margin: 4px;
        color: #000;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 0px 10px;
    }

    .how-section {
        padding: 20px;
        margin-bottom: 50px;
    }

    .how-section>.heading {
        display: flex;
    }

    .how-section>.heading {
        display: flex;
    }

    .how-section>.heading p:last-of-type {
        font-size: 24px;
        font-weight: bold;
    }


    .accordion-ul {
        list-style: none;
        padding: 0;
    }

    .accordion-li {
        border-bottom: 1px solid black;
        cursor: pointer;
        padding: 20px 0px 20px 0px;
        position: relative;
        font-weight: bold;
        font-size: 24px;
        display: flex;
    }

    .accordion-li>div {
        position: relative;
        left: 30%;
        width: 69%;
    }

    .accordion-li::before {
        content: attr(data-number);
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 16px;
        color: #D2D8CD;
    }

    .accordion-content {
        max-height: 0;
        overflow: hidden;
        font-size: 24px;
        color: #D2D8CD;
        background-color: #fff;
        position: relative;
        left: 9.3%;
    }

    .accordion-li.active div::after {
        content: \"\";
        position: absolute;
        width: 80px;
        height: 38px;
        background-image: url('{{ url('theme://img/arrow-icon.png') }}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        right: 35%;
    }

    .accordion-li.active::after {
        content: \"\";
        position: absolute;
        font-size: 16px;
        left: 10%;
        width: 90px;
        height: 120px;
        background-image: url('{{ url('theme://img/accordain-active.png') }}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        transform: translate(-10%, -40%);
    }

    .accordion-li.active {
        color: #B0D291;
        border: none;
    }

    .accordion-li.active+.accordion-content {
        max-height: 600px;
        display: flex;
        position: relative;
        left: 30%;
        text-align: left;
        color: #D2D8CD;
        font-weight: bold;
        max-width: 566px;
    }


    .marketing-section {
        background-color: #d8d3cd;
        padding-top: 50px
    }

    .market-research-container {
        min-width: 40vw;
    }
    .tabs {
        display: flex;
        position: relative;
        border:2px solid #000;
        background-color: #d8d3cd;
        border-radius: 99px;
    }
    .tabs * {
        z-index: 2;
    }

    .tabs input[type=radio] {
        display: none;
    }

    .tab {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 54px;
        width: 250px;
        font-size: 17px;
        font-weight: 500;
        border-radius: 99px;
        cursor: pointer;
        transition: color 0.15s ease-in;
    }

    .tabs input[type=radio]:checked + label {
        color: #000;
    }
    .tabs input[type=radio]:checked + label > .notification {
        background-color: #fff;
        color: #000;
    }

    .tabs input[id=radio-1]:checked ~ .glider {
        transform: translateX(0);
    }

    .tabs input[id=radio-2]:checked ~ .glider {
        transform: translateX(100%);
    }

    .tabs input[id=radio-3]:checked ~ .glider {
        transform: translateX(200%);
    }

    .glider {
        position: absolute;
        display: flex;
        height: 54px;
        width: 250px;
        background-color: #fff;
        z-index: 0;
        border-radius: 99px;
        transition: 0.25s ease-out;
    }

    @media (max-width: 700px) {
        .tabs {
            transform: scale(0.6);
        }
        .glider {
            height: 50px;
            width: 200px;
        }
    }
    .market-research-heading {
        font-size: 36px;
        width: 350px;
        font-weight: bold;
        line-height: 34px;
    }

    .market-research-description {
        max-width: 430px;
        height: 133px;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .market-research {
        height: 285vh;
    }


    .market-research {
        position: relative;
    }

    .market-items {
        position: relative;
        padding: 5rem;
    }

    .market-items::before {
        content: \"\";
        position: absolute;
        left: 48.5%;
        height: 60px;
        width: 60px;
        background-image: url('{{ url('theme://img/iconnn.png') }}');
        z-index: 0;

    }

    .market-research::before {
        content: \"\";
        position: absolute;
        top: 4%;
        left: 50%;
        width: 12px;
        height: 74%;
        background-image: url('{{ url('theme://img/line.png') }}');
        background-size: cover;
        background-position: center;
        z-index: 0;
    }


    .market-research::after {
        content: \"\";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 554px;
        height: 519px;
        background: url('{{ url('theme://img/research-bg-bottom.png') }}') no-repeat center center;
        background-size: cover;
        z-index: 0;
    }

    .market-journey {
        font-size: 210px;
        font-weight: bold;
        color: white;
        line-height: 0.9;
        padding-bottom: 40px;
        z-index: 1;
        /* position: relative; */
    }

    .discover-us {
        padding-bottom: 50px;
    }

    .border-column {
        position: relative;
        padding-top: 40px;
    }

    .border-column::before {
        content: \"\";
        position: absolute;
        top: 50%;
        display: inline-block;
        width: 96%;
        border-bottom: 1px solid #000;
    }

    .logo-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    .footer-logo {
        width: 58px;
        height: 58px;
    }

    .footer-content ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: space-between;

    }


    .footer-content ul li a {
        text-decoration: none;
        color: #000;
    }


    .footer-social img {
        height: 60px;
        width: 60px;
    }

    .footer-social p {
        color: var(--color-grey);
    }


    /* Responsive Design */



    /* Extra Small Devices (Phones) */
    @media (max-width: 767.98px) {

        .market-journey {
            font-size: 80px;
            text-align: center;
        }

        .market-research {
            height: auto !important;
        }
        .market-journey {
            margin-top: 189px;
            position: relative;
        }

        .market-research::after {
            width: 241px;
            height: 230px;
        }

        .market-items {
            padding: 1rem;
        }

        .market-research-heading {
            font-size: 30px;
            max-width: 90% !important;
        }

        .market-research-description {
            height: auto;
            font-size: 20px;
            max-width: 90% !important;
        }

        .market-research::before {
            top: 1%;
            right: 8%;
            left: auto;
            height: 80%;
        }

        .market-items::before {
            content: \"\";
            position: absolute;
            background-image: url('{{ url('theme://img/iconnn-50x50.png') }}');
            background-repeat: no-repeat;
            z-index: 3;
            right: 3%;
            top: 5%;
            left: auto;
            height: 50px;
            width: 50px;
        }

        .discover-us a {
            width: 70%;
        }

        .footer-social img {
            height: 50px;
            width: 50px;
        }

        .footer-logo {
            width: 40px;
            height: 40px;
        }

        .logo-container {
            width: 100%;
            position: relative;
        }

        .logo-container::before {
            content: \"\";
            position: absolute;
            border-bottom: 1px solid black;
            width: 43%;
            left: 0%;
        }


        .logo-container::after {
            content: \"\";
            position: absolute;
            border-bottom: 1px solid black;
            width: 43%;
            right: 0%;
        }

        .footer-content ul {
            list-style-type: none;
            flex-direction: column;
            gap: 0.5rem
        }

        .navbar-collapse::after {
            display: none;
        }

        .navbar::after {
            content: \"\";
            display: block;
            border-bottom: 1px solid black;
            position: absolute;
            bottom: 0px;
            width: 93%;
        }

        .navbar-brand img {
            height: 40px;
            width: 40px;
        }

        .btn_primary {
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            width: 153px;
            height: 44px;
            border-radius: 50px;
            background-color: black;
            color: white;
            text-decoration: none;
            box-sizing: border-box;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn-text {
            flex: 1;
            font-size: 14px;

        }

        .btn-logo {
            height: 40px;
            width: 40px;
        }

        .hero-section {
            padding: 35px 20px 35px 20px;
            color: black;
            font-weight: bold;
        }

        .hero {
            height: 45vh;
            font-size: 40px;
            line-height: 50px;
            max-width: 335px;
            display: flex;
            align-items: end;
        }

        .hero-section::before {
            content: \"\";
            position: absolute;
            top: 26%;
            width: 227px;
            height: 236px;
            background: url('{{ url('theme://img/hero-bg.png') }}') no-repeat center center;
            background-size: cover;
            z-index: -1;
        }

        .font-bold-24 {
            font-size: 20px;
        }

        .innovate {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .rounded-tabs .nav-link {
            padding: 8px 12px !important;
        }

        .icon-img {
            width: 40px;
            height: 40px;
        }


        .custom-tab {
            padding: 4px;
        }

        .who-section::before {
            content: \"\";
            position: absolute;
            left: 50%;
            width: 361px;
            height: 315px;
            background-image: url('{{ url('theme://img/who-bg.png') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        .who-section::after {
            right: 16px;
        }

        .accordion-content {
            left: 0%;
        }

        .how-section>.heading p:last-of-type {
            font-size: 20px;
        }

        .how-section>.heading {
            flex-direction: column;
        }

        .brand-section::before {
            width: 335px;
            height: 240px;
        }

        .brand-section p:last-of-type {
            font-size: 30px;
        }

        .brand-details {
            font-size: 20px;
        }

        .brand-section>div {
            flex-direction: column;
            text-align: left;
            align-items: start;
            height: 35vh;
        }


        .who-section {
            padding-top: 40px;
        }

        .aaaaa {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .who-heading p:first-child {
            margin-top: 100px;

        }
        .who-heading {
            font-size: 80px;
            line-height: 60px;
            margin-bottom: 40px;
        }
        .progress-main {
            width: 100%;
            margin-bottom: 30px;
            margin-top: 20px;
        }
        .tab {
            height: 50px;
            width: 200px;
            font-size: 15px;
        }
        .accordion-li::before {
            top: 34%;
        }
        .who-heading img {
            width: 68.59px;
            height: 50px;
        }

        .custom-text {
            max-width: 290px;
            font-size: 30px;
            font-weight: bold;
            line-height: 1.4;
        }

        .accordion-content {
            flex-direction: column;
            align-items: start;
        }

        .accordion-li.active+.accordion-content {
            left: 2%;
            padding-top: 140px;
            max-width: 100%;
        }

        .accordion-li {
            font-size: 20px;
        }

        .accordion-li.active {
            color: var(--color-black);
        }

        .accordion-li.active>div::before {
            display: none;
        }

        .accordion-li.active>div::after {
            display: none;
        }

        .accordion-li.active::after {
            display: none;
        }

        .accordion-li.active+.accordion-content::before {
            content: \"\";
            position: absolute;
            left: 40%;
            width: 82px;
            height: 110px;
            background-image: url('{{ url('theme://img/accordain-active.png') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            top: 3%;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .accordion-li.active div::after {
            right: 15%;
        }

        .accordion-li.active::after {
            left: 15%;
        }

        .navbar-nav .nav-link {
            font-size: 13px !important;
        }

        .navbar-collapse::after {
            width: 58%;
        }

        .navbar-nav {
            padding-left: 30px;
        }

        .btn-logo {
            height: 39px;
            width: 40px;
        }

        .btn_primary {
            width: 210px;
            height: 50px;
        }

        .navbar-brand img {
            height: 50px;
            width: 50px;
        }

        .hero {
            height: 70vh;
            font-size: 90px;
        }
    }

    #scroll-icon {
        position: fixed;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 24px;
        cursor: pointer;
        z-index: -100;
        transition: top 0.3s ease, transform 0.3s ease, color 0.3s ease;
    }
    /* Styling for the modals */
    .modal-dialog.modal-md {
        max-width: 580px; /* Adjust the width as needed */
    }

    .modal-header {
        border: none;
    }

    .modal-content {
        border-radius: 15px;
    }

    .modal-title {
        font-size: 36px;
        font-weight: bold;
    }

    .modal-body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 2px;
    }

    .modal-body form {
        width: 75%;
    }

    .modal-body .btn_primary {
        width: 80%;
    }

    .form-control {
        border-color: #b0d291;
        text-align: center;
        line-height: 2.2;
        border-radius: 35px;
        font-size: 24px;
        font-weight: bold;
    }

    .form-control:focus {
        border-color: #b0d291;
        box-shadow: 0 0 0 0.15rem #b0d291;
    }

    .form-control::placeholder {
        color: #d2d8cd;
    }

    .modal-footer {
        display: flex;
        justify-content: center;
    }

    /* Success modal styling */
    .success-modal .modal-content {
        background-color: #b0d291;
        color: #fff;
    }

    .success-message {
        font-weight: bold;
        font-size: 36px;
        color: black;
    }

    .success-image {
        width: 320px;
        height: 301px;
        object-fit: cover;
        margin: 10px 0;
    }

    .success-text {
        font-weight: bold;
        font-size: 24px;
    }
</style>
", "partials/head.html.twig", "D:\\wamp64\\www\\project_i\\user\\themes\\clean-blog\\templates\\partials\\head.html.twig");
    }
}
