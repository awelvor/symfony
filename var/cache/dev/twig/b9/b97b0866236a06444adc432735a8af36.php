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

/* euros/newop.html.twig */
class __TwigTemplate_6fd7230729367d0cead4424dffdd6239 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/newop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/newop.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"philippe\" >
    <meta name=\"generator\" content=\"Bluefish 2.2.12\" >
    <title>Newop</title>

   

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" >
  </head>

   

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href=\"form-validation.css\" rel=\"stylesheet\">
  </head>
  <body class=\"bg-light\">
    
<div class=\"container\">

<nav class=\"fixed-top navbar navbar-light bg-light\">
  <form class=\"container justify-content-center\">
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/\" role=\"button\">Budgets</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/comptes?compte=ccsg\" role=\"button\">Comptes</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/newop\" role=\"button\">Newop</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/libelles\" role=\"button\">Libelles</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cbid\" role=\"button\">CBid</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cheques\" role=\"button\">Chèques</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/portfolio.php\" role=\"button\">Portfolio</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/peaphilippe.php\" role=\"button\">PEA-BS</a>
    </form>
</nav>



  <main>
    <div class=\"py-5 text-center\">
      
      <h2>Newop form</h2>
      
    </div>

    <div class=\"row g-5\">
      
      
      
      <div class=\"col-md-7 col-lg-4\">
        ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_start');
        echo "
        
          <div class=\"row g-3\">
            <div class=\"col-sm-6\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "credit", [], "any", false, false, false, 109), 'row');
        echo "</div>
            <div class=\"col-sm-6\">";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "debit", [], "any", false, false, false, 110), 'row');
        echo "</div>
            </div>
            
<input name=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "libelle", [], "any", false, false, false, 113)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "libelle", [], "any", false, false, false, 113)), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "libelle", [], "any", false, false, false, 113)), "html", null, true);
        echo "\" class=\"form-control\" />
<input name=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "date", [], "any", false, false, false, 114)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "date", [], "any", false, false, false, 114)), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "date", [], "any", false, false, false, 114)), "html", null, true);
        echo "\" class=\"form-control\" />
<input name=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "compte", [], "any", false, false, false, 115)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "compte", [], "any", false, false, false, 115)), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "compte", [], "any", false, false, false, 115)), "html", null, true);
        echo "\" class=\"form-control\" />
<input name=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "budget", [], "any", false, false, false, 116)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "budget", [], "any", false, false, false, 116)), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "budget", [], "any", false, false, false, 116)), "html", null, true);
        echo "\" class=\"form-control\" />
<input name=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "cbid", [], "any", false, false, false, 117)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "cbid", [], "any", false, false, false, 117)), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldLabel(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "cbid", [], "any", false, false, false, 117)), "html", null, true);
        echo "\" class=\"form-control\" />

<div class=\"form-control\">";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "save", [], "any", false, false, false, 119), 'row', ["label" => "Submit me"]);
        echo "</div>



           

  
     

       
            

            

           

            
          </div>

          

          
        
        ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        echo "
      </div>
    </div>
  </main>

  <footer class=\"my-5 pt-5 text-muted text-center text-small\">
    <p class=\"mb-1\">&copy; 2023 Company Name</p>
    <ul class=\"list-inline\">
      <li class=\"list-inline-item\"><a href=\"#\">Privacy</a></li>
      <li class=\"list-inline-item\"><a href=\"#\">Terms</a></li>
      <li class=\"list-inline-item\"><a href=\"#\">Support</a></li>
    </ul>
  </footer>
</div>


 
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
  </body>

      <script src=\"form-validation.js\"></script>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "euros/newop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 142,  207 => 119,  198 => 117,  190 => 116,  182 => 115,  174 => 114,  166 => 113,  160 => 110,  156 => 109,  150 => 106,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"philippe\" >
    <meta name=\"generator\" content=\"Bluefish 2.2.12\" >
    <title>Newop</title>

   

    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" >
  </head>

   

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href=\"form-validation.css\" rel=\"stylesheet\">
  </head>
  <body class=\"bg-light\">
    
<div class=\"container\">

<nav class=\"fixed-top navbar navbar-light bg-light\">
  <form class=\"container justify-content-center\">
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/\" role=\"button\">Budgets</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/comptes?compte=ccsg\" role=\"button\">Comptes</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/newop\" role=\"button\">Newop</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/libelles\" role=\"button\">Libelles</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cbid\" role=\"button\">CBid</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cheques\" role=\"button\">Chèques</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/portfolio.php\" role=\"button\">Portfolio</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/peaphilippe.php\" role=\"button\">PEA-BS</a>
    </form>
</nav>



  <main>
    <div class=\"py-5 text-center\">
      
      <h2>Newop form</h2>
      
    </div>

    <div class=\"row g-5\">
      
      
      
      <div class=\"col-md-7 col-lg-4\">
        {{ form_start(form) }}
        
          <div class=\"row g-3\">
            <div class=\"col-sm-6\">{{ form_row(form.credit) }}</div>
            <div class=\"col-sm-6\">{{ form_row(form.debit) }}</div>
            </div>
            
<input name=\"{{ field_name(form.libelle) }}\" value=\"{{ field_value(form.libelle) }}\" placeholder=\"{{ field_label(form.libelle) }}\" class=\"form-control\" />
<input name=\"{{ field_name(form.date) }}\" value=\"{{ field_value(form.date) }}\" placeholder=\"{{ field_label(form.date) }}\" class=\"form-control\" />
<input name=\"{{ field_name(form.compte) }}\" value=\"{{ field_value(form.compte) }}\" placeholder=\"{{ field_label(form.compte) }}\" class=\"form-control\" />
<input name=\"{{ field_name(form.budget) }}\" value=\"{{ field_value(form.budget) }}\" placeholder=\"{{ field_label(form.budget) }}\" class=\"form-control\" />
<input name=\"{{ field_name(form.cbid) }}\" value=\"{{ field_value(form.cbid) }}\" placeholder=\"{{ field_label(form.cbid) }}\" class=\"form-control\" />

<div class=\"form-control\">{{ form_row(form.save, { 'label': 'Submit me' }) }}</div>



           

  
     

       
            

            

           

            
          </div>

          

          
        
        {{ form_end(form) }}
      </div>
    </div>
  </main>

  <footer class=\"my-5 pt-5 text-muted text-center text-small\">
    <p class=\"mb-1\">&copy; 2023 Company Name</p>
    <ul class=\"list-inline\">
      <li class=\"list-inline-item\"><a href=\"#\">Privacy</a></li>
      <li class=\"list-inline-item\"><a href=\"#\">Terms</a></li>
      <li class=\"list-inline-item\"><a href=\"#\">Support</a></li>
    </ul>
  </footer>
</div>


 
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>
  </body>

      <script src=\"form-validation.js\"></script>
  </body>
</html>
", "euros/newop.html.twig", "/home/philippe/symfony/templates/euros/newop.html.twig");
    }
}
