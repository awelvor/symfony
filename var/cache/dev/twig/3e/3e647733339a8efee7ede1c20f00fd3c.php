<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* assets/brand/bootstrap-logo-white.svg */
class __TwigTemplate_26cac99449074061d3bdec2a84dc97b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "assets/brand/bootstrap-logo-white.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "assets/brand/bootstrap-logo-white.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"512\" height=\"408\" fill=\"#fff\"><path d=\"M106.342 0c-29.214 0-50.827 25.58-49.86 53.32.927 26.647-.278 61.165-8.966 89.31C38.802 170.862 24.07 188.707 0 191v26c24.069 2.293 38.802 20.138 47.516 48.37 8.688 28.145 9.893 62.663 8.965 89.311C55.515 382.42 77.128 408 106.342 408h299.353c29.214 0 50.827-25.58 49.861-53.319-.928-26.648.277-61.166 8.964-89.311 8.715-28.232 23.411-46.077 47.48-48.37v-26c-24.069-2.293-38.765-20.138-47.48-48.37-8.687-28.145-9.892-62.663-8.964-89.31C456.522 25.58 434.909 0 405.695 0H106.342zm236.559 251.102c0 38.197-28.501 61.355-75.798 61.355h-87.202a2 2 0 01-2-2v-213a2 2 0 012-2h86.74c39.439 0 65.322 21.354 65.322 54.138 0 23.008-17.409 43.61-39.594 47.219v1.203c30.196 3.309 50.532 24.212 50.532 53.085zm-84.58-128.125h-45.91v64.814h38.669c29.888 0 46.373-12.03 46.373-33.535 0-20.151-14.174-31.279-39.132-31.279zm-45.91 90.53v71.431h47.605c31.12 0 47.605-12.482 47.605-35.941 0-23.46-16.947-35.49-49.608-35.49h-45.602z\"/></svg>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "assets/brand/bootstrap-logo-white.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"512\" height=\"408\" fill=\"#fff\"><path d=\"M106.342 0c-29.214 0-50.827 25.58-49.86 53.32.927 26.647-.278 61.165-8.966 89.31C38.802 170.862 24.07 188.707 0 191v26c24.069 2.293 38.802 20.138 47.516 48.37 8.688 28.145 9.893 62.663 8.965 89.311C55.515 382.42 77.128 408 106.342 408h299.353c29.214 0 50.827-25.58 49.861-53.319-.928-26.648.277-61.166 8.964-89.311 8.715-28.232 23.411-46.077 47.48-48.37v-26c-24.069-2.293-38.765-20.138-47.48-48.37-8.687-28.145-9.892-62.663-8.964-89.31C456.522 25.58 434.909 0 405.695 0H106.342zm236.559 251.102c0 38.197-28.501 61.355-75.798 61.355h-87.202a2 2 0 01-2-2v-213a2 2 0 012-2h86.74c39.439 0 65.322 21.354 65.322 54.138 0 23.008-17.409 43.61-39.594 47.219v1.203c30.196 3.309 50.532 24.212 50.532 53.085zm-84.58-128.125h-45.91v64.814h38.669c29.888 0 46.373-12.03 46.373-33.535 0-20.151-14.174-31.279-39.132-31.279zm-45.91 90.53v71.431h47.605c31.12 0 47.605-12.482 47.605-35.941 0-23.46-16.947-35.49-49.608-35.49h-45.602z\"/></svg>", "assets/brand/bootstrap-logo-white.svg", "/home/philippe/symfony/templates/assets/brand/bootstrap-logo-white.svg");
    }
}
