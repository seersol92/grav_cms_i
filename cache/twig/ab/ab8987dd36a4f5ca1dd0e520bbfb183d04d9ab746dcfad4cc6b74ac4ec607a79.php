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

/* blog.html.twig */
class __TwigTemplate_11891be8fad34245300d8897ad207a7296073791b6c9036ded67c542151255ac extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "   <main>
       <div
               class=\"modal fade\"
               id=\"myModal\"
               tabindex=\"-1\"
               aria-labelledby=\"myModalLabel\"
               aria-hidden=\"true\"
       >
           <div class=\"modal-dialog modal-md\">
               <div class=\"modal-content\">
                   <div class=\"modal-header justify-content-end p-2\">
                       <a
                               href=\"\"
                               data-bs-dismiss=\"modal\"
                               aria-label=\"Close\"
                               type=\"button\"
                               class=\"close-btn\"
                       >
                           <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/close-icon.png"), "html", null, true);
        echo "\" alt=\"\" />

                       </a>
                   </div>
                   <div class=\"modal-body\">
                       <h5 class=\"modal-title mb-4\" id=\"myModalLabel\">Contact us</h5>

                       <form>
                           <!-- Name Field -->
                           <div class=\"mb-3 w-100\">
                               <input
                                       type=\"text\"
                                       class=\"form-control\"
                                       id=\"name\"
                                       placeholder=\"Name\"
                               />
                           </div>
                           <!-- Email Field -->
                           <div class=\"mb-3 w-100\">
                               <input
                                       type=\"email\"
                                       class=\"form-control\"
                                       id=\"email\"
                                       placeholder=\"Email\"
                               />
                           </div>
                           <!-- Message Field -->
                           <div class=\"mb-3 w-100\">
                <textarea
                        class=\"form-control\"
                        id=\"message\"
                        rows=\"3\"
                        placeholder=\"Message\"
                ></textarea>
                           </div>

                           <div class=\"pb-5 pt-4 w-100\">
                               <a
                                       class=\"btn_primary\"
                                       href=\"#\"
                                       data-bs-toggle=\"modal\"
                                       data-bs-toggle=\"modal\"
                                       data-bs-target=\"#successModal\"
                               >
                                   <span class=\"btn-text\">Send message</span>
                                   <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/send-icon.png"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-logo\" />
                               </a>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>

       <!-- Success Modal -->
       <div
               class=\"modal fade success-modal\"
               id=\"successModal\"
               tabindex=\"-1\"
               aria-labelledby=\"successModalLabel\"
               aria-hidden=\"true\"
       >
           <div class=\"modal-dialog modal-md\">
               <div class=\"modal-content\">
                   <div class=\"modal-header justify-content-end p-2\">
                       <a
                               href=\"\"
                               data-bs-dismiss=\"modal\"
                               aria-label=\"Close\"
                               type=\"button\"
                               class=\"close-btn\"
                       >
                           <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/close-icon.png"), "html", null, true);
        echo "\" alt=\"\" />
                       </a>
                   </div>
                   <div class=\"modal-body success-message\">
                       <div class=\"mb-2\">Thank you, your message has been sent</div>
                       <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/success-image.png"), "html", null, true);
        echo "\" alt=\"\" class=\"success-image\" />
                       <div class=\"mb-4\">Please expect a response shortly.</div>
                   </div>
               </div>
           </div>
       </div>
       <section class=\"hero-section\">
           <div class=\"hero\">
               <div
                       class=\"hero-heading\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"hero-heading-start\">Creative solutions</div>
                   <div class=\"hero-heading-center\">for modern minds.</div>
               </div>
           </div>

           <div
                   class=\"font-bold-24 d-flex justify-content-md-end\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <div class=\"branding\">
                   From strategic branding to advanced tech, we pave your digital
                   success.
               </div>
           </div>

           <div class=\"innovate pt-4 mb-4 font-bold-24\">
               <div class=\"\">Innovate</div>
               <div class=\"flex-center\">
            <span class=\"icon-wrapper flex-center\">
              <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/Union.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icon\" />
            </span>
                   <span class=\"icon-wrapper flex-center\">
              <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/Subtract.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icon\" />
            </span>
               </div>
               <div class=\"\">Inspire</div>
           </div>

           <div class=\"mb-2 d-flex d-md-none\">
               <div class=\"mx-auto tab-sticky-mob\">
                   <div class=\"d-flex align-items-center custom-tab \">
                       <ul
                               class=\"nav nav-tabs rounded-tabs me-3\"
                               id=\"myTab\"
                               role=\"tablist\"
                       >
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link active\"
                                       id=\"home-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#home\"
                                       role=\"tab\"
                                       aria-controls=\"home\"
                                       aria-selected=\"true\"
                               >Home</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"community-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#community\"
                                       role=\"tab\"
                                       aria-controls=\"community\"
                                       aria-selected=\"false\"
                               >Community</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"help-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#help\"
                                       role=\"tab\"
                                       aria-controls=\"help\"
                                       aria-selected=\"false\"
                               >Help</a
                               >
                           </li>
                       </ul>

                       <!-- Icon -->
                       <img
                               src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/discover-icon.png"), "html", null, true);
        echo "\"
                               alt=\"Icon\"
                               class=\"icon-img\"
                       />
                   </div>
               </div>
           </div>
       </section>

       <section class=\"who-section\">
           <div class=\"mb-4 d-none d-md-flex\">
               <div>
                   <a href=\"#wrap-brand\"> <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/icon.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
               </div>
               <div class=\"mx-auto tab-sticky\">
                   <div class=\"d-flex align-items-center custom-tab  \">
                       <ul
                               class=\"nav nav-tabs rounded-tabs me-3\"
                               id=\"myTab\"
                               role=\"tablist\"
                       >
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link active\"
                                       id=\"home-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#home\"
                                       role=\"tab\"
                                       aria-controls=\"home\"
                                       aria-selected=\"true\"
                               >Home</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"community-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#community\"
                                       role=\"tab\"
                                       aria-controls=\"community\"
                                       aria-selected=\"false\"
                               >Community</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"help-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#help\"
                                       role=\"tab\"
                                       aria-controls=\"help\"
                                       aria-selected=\"false\"
                               >Help</a
                               >
                           </li>
                       </ul>

                       <!-- Icon -->
                       <img
                               src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/discover-icon.png"), "html", null, true);
        echo "\"
                               alt=\"Icon\"
                               class=\"icon-img\"
                       />
                   </div>
               </div>
           </div>

           <div
                   class=\"d-md-flex aaaaa\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <div class=\"me-1\">Who we are</div>
               <div class=\"mx-0 mx-md-auto\">
                   <div class=\"custom-text\">
                       <p>Business solves at heart, norm challengers by nature.</p>
                       <p>
                           We are a dynamic collective soul, formed by diverse minds that
                           thrives on experience, dedication and the pursuit of a simple
                           mission:
                       </p>
                   </div>
               </div>
           </div>

           <div
                   class=\"d-md-flex who-heading\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <div>
                   <p>
                       Bring your
                       <a class=\"btn_primary d-none d-md-flex mt-5\" href=\"#\">
                           <span class=\"btn-text\">Discover us</span>
                           <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/discover-icon.png"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-logo\" />
                       </a>
                   </p>
                   <p>
                       vision
                       <img class=\"heading-icon\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/heading-icon-1.png"), "html", null, true);
        echo "\" /> to
                       life.
                   </p>
               </div>
           </div>

           <div class=\"d-md-none d-flex pb-3 justify-content-center\">
               <a class=\"btn_primary\" href=\"#\" style=\"width: 250px\">
                   <span class=\"btn-text\">Discover us</span>
                   <img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/discover-icon.png"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-logo\" />
               </a>
           </div>
       </section>

       <!-- Brand & Strategy  -->
       <section
               id=\"wrap-brand\"
               class=\"brand-section\"
               data-aos=\"fade-up\"
               data-aos-offset=\"50\"
               data-aos-delay=\"10\"
               data-aos-duration=\"1000\"
               data-aos-easing=\"ease-in-out\"
               data-aos-mirror=\"true\"
               data-aos-once=\"false\"
       >
           <div
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"30\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <p>What we do</p>
               <p>Brand Strategy</p>
           </div>
           <div
                   class=\"d-md-flex justify-content-end\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"40\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
          <span class=\"brand-details\">
            Audio and data visua lisation marketing & communication plan social
            media & advertising.
          </span>
           </div>
           <div
                   class=\"progress-main h-auto d-block ms-auto\"
           >
               <div class=\"progress\">
                   <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                       <span>01</span>
                       <a href=\"\">
                           <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/arrow-right.svg"), "html", null, true);
        echo "\" class=\"img-fluid\">
                       </a>
                   </div>
               </div>
           </div>
       </section>

       <section class=\"how-section\">
           <div class=\"row\">
               <!-- Column 1 -->
               <div class=\"col-lg-3 col-12\">
                   <div>How we think</div>
               </div>
               <!-- Column 2 -->
               <div class=\"col-lg-9 col-12\">
                   <ul class=\"accordion-ul\">
                       <!-- Accordion Item 1 (Open by default) -->
                       <li class=\"accordion-li active\" data-number=\"01\">
                           <div>Kick off and project setup</div>
                       </li>
                       <div class=\"accordion-content\">
                           Audits involve reviewing operations to ensure compliance and
                           identify improvements. Benchmarking compares performance against
                           industry standards to gauge competitiveness. Together, they
                           provide insights for optimizing strategies and enhancing
                           productivity.
                       </div>

                       <!-- Accordion Item 2 -->
                       <li class=\"accordion-li\" data-number=\"02\">
                           <div>Budget & strategic planning</div>
                       </li>
                       <div class=\"accordion-content\">
                           Audits involve reviewing operations to ensure compliance and
                           identify improvements. Benchmarking compares performance against
                           industry standards to gauge competitiveness. Together, they
                           provide insights for optimizing strategies and enhancing
                           productivity.
                       </div>

                       <!-- Accordion Item 3 -->
                       <li class=\"accordion-li\" data-number=\"03\">
                           <div>Positioning & brand core3</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"04\">
                           <div>Design & brand exploration</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"05\">
                           <div>Website & content production</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"06\">
                           <div>Advertising & automation</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"07\">
                           <div>PR & events</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"08\">
                           <div>Web 3.0 & blockchain</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>
                   </ul>
               </div>
           </div>
       </section>

       <!--Marketing plan-->
       <section class=\"marketing-section\">
           <div>
               <div class=\"d-flex justify-content-center\">
                   <div class=\"tabs\">
                       <input type=\"radio\" id=\"radio-1\" name=\"tabs\" checked />
                       <label class=\"tab\" for=\"radio-1\">Strategy & marketing plan</label>
                       <input type=\"radio\" id=\"radio-2\" name=\"tabs\" />
                       <label class=\"tab\" for=\"radio-2\">Branding experience</label>
                       <input type=\"radio\" id=\"radio-3\" name=\"tabs\" />
                       <label class=\"tab\" for=\"radio-3\"> Communication & elevation</label>
                       <span class=\"glider\"></span>
                   </div>
               </div>
           </div>
           <div class=\"market-research\">
               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
                       data-aos-anchor-placement=\"top-center\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>

                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
                       data-aos-anchor-placement=\"top-center\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>
           </div>
           <div
                   class=\"d-flex justify-content-center market-journey\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <p>
                   Let's begin <br />
                   the <img src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/heading-icon.png"), "html", null, true);
        echo "\" class=\"img-fluid\" width=\"140\" /> journey
               </p>
           </div>
           <div class=\"d-flex justify-content-center discover-us\">
               <a class=\"btn_primary\" href=\"#\">
                   <span class=\"btn-text\">Discover us</span>
                   <img src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://img/discover-icon.png"), "html", null, true);
        echo "\" alt=\"\" class=\"btn-logo\" />
               </a>
           </div>
       </section>
   </main>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  733 => 651,  724 => 645,  447 => 371,  393 => 320,  381 => 311,  373 => 306,  324 => 260,  272 => 211,  257 => 199,  200 => 145,  194 => 142,  148 => 99,  140 => 94,  110 => 67,  62 => 22,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
   <main>
       <div
               class=\"modal fade\"
               id=\"myModal\"
               tabindex=\"-1\"
               aria-labelledby=\"myModalLabel\"
               aria-hidden=\"true\"
       >
           <div class=\"modal-dialog modal-md\">
               <div class=\"modal-content\">
                   <div class=\"modal-header justify-content-end p-2\">
                       <a
                               href=\"\"
                               data-bs-dismiss=\"modal\"
                               aria-label=\"Close\"
                               type=\"button\"
                               class=\"close-btn\"
                       >
                           <img src=\"{{ url('theme://img/close-icon.png')}}\" alt=\"\" />

                       </a>
                   </div>
                   <div class=\"modal-body\">
                       <h5 class=\"modal-title mb-4\" id=\"myModalLabel\">Contact us</h5>

                       <form>
                           <!-- Name Field -->
                           <div class=\"mb-3 w-100\">
                               <input
                                       type=\"text\"
                                       class=\"form-control\"
                                       id=\"name\"
                                       placeholder=\"Name\"
                               />
                           </div>
                           <!-- Email Field -->
                           <div class=\"mb-3 w-100\">
                               <input
                                       type=\"email\"
                                       class=\"form-control\"
                                       id=\"email\"
                                       placeholder=\"Email\"
                               />
                           </div>
                           <!-- Message Field -->
                           <div class=\"mb-3 w-100\">
                <textarea
                        class=\"form-control\"
                        id=\"message\"
                        rows=\"3\"
                        placeholder=\"Message\"
                ></textarea>
                           </div>

                           <div class=\"pb-5 pt-4 w-100\">
                               <a
                                       class=\"btn_primary\"
                                       href=\"#\"
                                       data-bs-toggle=\"modal\"
                                       data-bs-toggle=\"modal\"
                                       data-bs-target=\"#successModal\"
                               >
                                   <span class=\"btn-text\">Send message</span>
                                   <img src=\"{{ url('theme://img/send-icon.png')}}\" alt=\"\" class=\"btn-logo\" />
                               </a>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>

       <!-- Success Modal -->
       <div
               class=\"modal fade success-modal\"
               id=\"successModal\"
               tabindex=\"-1\"
               aria-labelledby=\"successModalLabel\"
               aria-hidden=\"true\"
       >
           <div class=\"modal-dialog modal-md\">
               <div class=\"modal-content\">
                   <div class=\"modal-header justify-content-end p-2\">
                       <a
                               href=\"\"
                               data-bs-dismiss=\"modal\"
                               aria-label=\"Close\"
                               type=\"button\"
                               class=\"close-btn\"
                       >
                           <img src=\"{{ url('theme://img/close-icon.png')}}\" alt=\"\" />
                       </a>
                   </div>
                   <div class=\"modal-body success-message\">
                       <div class=\"mb-2\">Thank you, your message has been sent</div>
                       <img src=\"{{ url('theme://img/success-image.png')}}\" alt=\"\" class=\"success-image\" />
                       <div class=\"mb-4\">Please expect a response shortly.</div>
                   </div>
               </div>
           </div>
       </div>
       <section class=\"hero-section\">
           <div class=\"hero\">
               <div
                       class=\"hero-heading\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"hero-heading-start\">Creative solutions</div>
                   <div class=\"hero-heading-center\">for modern minds.</div>
               </div>
           </div>

           <div
                   class=\"font-bold-24 d-flex justify-content-md-end\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <div class=\"branding\">
                   From strategic branding to advanced tech, we pave your digital
                   success.
               </div>
           </div>

           <div class=\"innovate pt-4 mb-4 font-bold-24\">
               <div class=\"\">Innovate</div>
               <div class=\"flex-center\">
            <span class=\"icon-wrapper flex-center\">
              <img src=\"{{ url('theme://img/Union.png')}}\" alt=\"\" class=\"icon\" />
            </span>
                   <span class=\"icon-wrapper flex-center\">
              <img src=\"{{ url('theme://img/Subtract.png')}}\" alt=\"\" class=\"icon\" />
            </span>
               </div>
               <div class=\"\">Inspire</div>
           </div>

           <div class=\"mb-2 d-flex d-md-none\">
               <div class=\"mx-auto tab-sticky-mob\">
                   <div class=\"d-flex align-items-center custom-tab \">
                       <ul
                               class=\"nav nav-tabs rounded-tabs me-3\"
                               id=\"myTab\"
                               role=\"tablist\"
                       >
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link active\"
                                       id=\"home-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#home\"
                                       role=\"tab\"
                                       aria-controls=\"home\"
                                       aria-selected=\"true\"
                               >Home</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"community-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#community\"
                                       role=\"tab\"
                                       aria-controls=\"community\"
                                       aria-selected=\"false\"
                               >Community</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"help-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#help\"
                                       role=\"tab\"
                                       aria-controls=\"help\"
                                       aria-selected=\"false\"
                               >Help</a
                               >
                           </li>
                       </ul>

                       <!-- Icon -->
                       <img
                               src=\"{{ url('theme://img/discover-icon.png')}}\"
                               alt=\"Icon\"
                               class=\"icon-img\"
                       />
                   </div>
               </div>
           </div>
       </section>

       <section class=\"who-section\">
           <div class=\"mb-4 d-none d-md-flex\">
               <div>
                   <a href=\"#wrap-brand\"> <img src=\"{{ url('theme://img/icon.png')}}\" alt=\"\" /></a>
               </div>
               <div class=\"mx-auto tab-sticky\">
                   <div class=\"d-flex align-items-center custom-tab  \">
                       <ul
                               class=\"nav nav-tabs rounded-tabs me-3\"
                               id=\"myTab\"
                               role=\"tablist\"
                       >
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link active\"
                                       id=\"home-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#home\"
                                       role=\"tab\"
                                       aria-controls=\"home\"
                                       aria-selected=\"true\"
                               >Home</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"community-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#community\"
                                       role=\"tab\"
                                       aria-controls=\"community\"
                                       aria-selected=\"false\"
                               >Community</a
                               >
                           </li>
                           <li class=\"nav-item\" role=\"presentation\">
                               <a
                                       class=\"nav-link\"
                                       id=\"help-tab\"
                                       data-bs-toggle=\"tab\"
                                       href=\"#help\"
                                       role=\"tab\"
                                       aria-controls=\"help\"
                                       aria-selected=\"false\"
                               >Help</a
                               >
                           </li>
                       </ul>

                       <!-- Icon -->
                       <img
                               src=\"{{ url('theme://img/discover-icon.png')}}\"
                               alt=\"Icon\"
                               class=\"icon-img\"
                       />
                   </div>
               </div>
           </div>

           <div
                   class=\"d-md-flex aaaaa\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <div class=\"me-1\">Who we are</div>
               <div class=\"mx-0 mx-md-auto\">
                   <div class=\"custom-text\">
                       <p>Business solves at heart, norm challengers by nature.</p>
                       <p>
                           We are a dynamic collective soul, formed by diverse minds that
                           thrives on experience, dedication and the pursuit of a simple
                           mission:
                       </p>
                   </div>
               </div>
           </div>

           <div
                   class=\"d-md-flex who-heading\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <div>
                   <p>
                       Bring your
                       <a class=\"btn_primary d-none d-md-flex mt-5\" href=\"#\">
                           <span class=\"btn-text\">Discover us</span>
                           <img src=\"{{ url('theme://img/discover-icon.png')}}\" alt=\"\" class=\"btn-logo\" />
                       </a>
                   </p>
                   <p>
                       vision
                       <img class=\"heading-icon\" src=\"{{ url('theme://img/heading-icon-1.png')}}\" /> to
                       life.
                   </p>
               </div>
           </div>

           <div class=\"d-md-none d-flex pb-3 justify-content-center\">
               <a class=\"btn_primary\" href=\"#\" style=\"width: 250px\">
                   <span class=\"btn-text\">Discover us</span>
                   <img src=\"{{ url('theme://img/discover-icon.png')}}\" alt=\"\" class=\"btn-logo\" />
               </a>
           </div>
       </section>

       <!-- Brand & Strategy  -->
       <section
               id=\"wrap-brand\"
               class=\"brand-section\"
               data-aos=\"fade-up\"
               data-aos-offset=\"50\"
               data-aos-delay=\"10\"
               data-aos-duration=\"1000\"
               data-aos-easing=\"ease-in-out\"
               data-aos-mirror=\"true\"
               data-aos-once=\"false\"
       >
           <div
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"30\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <p>What we do</p>
               <p>Brand Strategy</p>
           </div>
           <div
                   class=\"d-md-flex justify-content-end\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"40\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
          <span class=\"brand-details\">
            Audio and data visua lisation marketing & communication plan social
            media & advertising.
          </span>
           </div>
           <div
                   class=\"progress-main h-auto d-block ms-auto\"
           >
               <div class=\"progress\">
                   <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                       <span>01</span>
                       <a href=\"\">
                           <img src=\"{{ url('theme://img/arrow-right.svg')}}\" class=\"img-fluid\">
                       </a>
                   </div>
               </div>
           </div>
       </section>

       <section class=\"how-section\">
           <div class=\"row\">
               <!-- Column 1 -->
               <div class=\"col-lg-3 col-12\">
                   <div>How we think</div>
               </div>
               <!-- Column 2 -->
               <div class=\"col-lg-9 col-12\">
                   <ul class=\"accordion-ul\">
                       <!-- Accordion Item 1 (Open by default) -->
                       <li class=\"accordion-li active\" data-number=\"01\">
                           <div>Kick off and project setup</div>
                       </li>
                       <div class=\"accordion-content\">
                           Audits involve reviewing operations to ensure compliance and
                           identify improvements. Benchmarking compares performance against
                           industry standards to gauge competitiveness. Together, they
                           provide insights for optimizing strategies and enhancing
                           productivity.
                       </div>

                       <!-- Accordion Item 2 -->
                       <li class=\"accordion-li\" data-number=\"02\">
                           <div>Budget & strategic planning</div>
                       </li>
                       <div class=\"accordion-content\">
                           Audits involve reviewing operations to ensure compliance and
                           identify improvements. Benchmarking compares performance against
                           industry standards to gauge competitiveness. Together, they
                           provide insights for optimizing strategies and enhancing
                           productivity.
                       </div>

                       <!-- Accordion Item 3 -->
                       <li class=\"accordion-li\" data-number=\"03\">
                           <div>Positioning & brand core3</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"04\">
                           <div>Design & brand exploration</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"05\">
                           <div>Website & content production</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"06\">
                           <div>Advertising & automation</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"07\">
                           <div>PR & events</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>

                       <li class=\"accordion-li\" data-number=\"08\">
                           <div>Web 3.0 & blockchain</div>
                       </li>
                       <div class=\"accordion-content\">
                           <p>
                               Audits involve reviewing operations to ensure compliance and
                               identify improvements. Benchmarking compares performance
                               against industry standards to gauge competitiveness. Together,
                               they provide insights for optimizing strategies and enhancing
                               productivity.
                           </p>
                       </div>
                   </ul>
               </div>
           </div>
       </section>

       <!--Marketing plan-->
       <section class=\"marketing-section\">
           <div>
               <div class=\"d-flex justify-content-center\">
                   <div class=\"tabs\">
                       <input type=\"radio\" id=\"radio-1\" name=\"tabs\" checked />
                       <label class=\"tab\" for=\"radio-1\">Strategy & marketing plan</label>
                       <input type=\"radio\" id=\"radio-2\" name=\"tabs\" />
                       <label class=\"tab\" for=\"radio-2\">Branding experience</label>
                       <input type=\"radio\" id=\"radio-3\" name=\"tabs\" />
                       <label class=\"tab\" for=\"radio-3\"> Communication & elevation</label>
                       <span class=\"glider\"></span>
                   </div>
               </div>
           </div>
           <div class=\"market-research\">
               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
                       data-aos-anchor-placement=\"top-center\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>

                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
                       data-aos-anchor-placement=\"top-center\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>

               <div
                       class=\"d-flex flex-column flex-lg-row justify-content-center market-items\"
                       data-aos=\"fade-up\"
                       data-aos-offset=\"50\"
                       data-aos-delay=\"10\"
                       data-aos-duration=\"1000\"
                       data-aos-easing=\"ease-in-out\"
                       data-aos-mirror=\"true\"
                       data-aos-once=\"false\"
               >
                   <div class=\"market-research-container\">
                       <p class=\"market-research-heading\">
                           Market research and analysis
                       </p>
                   </div>
                   <div class=\"market-research-description-container\">
                       <p class=\"market-research-description\">
                           We will conduct comprehensive market research to understand the
                           target audience, identify competitors, and analyze current
                           market trends and opportunities.
                       </p>
                   </div>
               </div>
           </div>
           <div
                   class=\"d-flex justify-content-center market-journey\"
                   data-aos=\"fade-up\"
                   data-aos-offset=\"50\"
                   data-aos-delay=\"10\"
                   data-aos-duration=\"1000\"
                   data-aos-easing=\"ease-in-out\"
                   data-aos-mirror=\"true\"
                   data-aos-once=\"false\"
           >
               <p>
                   Let's begin <br />
                   the <img src=\"{{ url('theme://img/heading-icon.png')}}\" class=\"img-fluid\" width=\"140\" /> journey
               </p>
           </div>
           <div class=\"d-flex justify-content-center discover-us\">
               <a class=\"btn_primary\" href=\"#\">
                   <span class=\"btn-text\">Discover us</span>
                   <img src=\"{{ url('theme://img/discover-icon.png')}}\" alt=\"\" class=\"btn-logo\" />
               </a>
           </div>
       </section>
   </main>
{% endblock %}
", "blog.html.twig", "D:\\wamp64\\www\\project_i\\user\\themes\\clean-blog\\templates\\blog.html.twig");
    }
}
