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

/* euros/libelles.html.twig */
class __TwigTemplate_87045cca308800fcbdf764c034b36061 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/libelles.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/libelles.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
<meta charset=\"UTF-8\">
<title>libelles</title>
<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
 
        
        
    </head>
    <body>
       <div class=\"container\"> 
       <nav class=\"fixed-top navbar navbar-light bg-light\">
  <form class=\"container justify-content-center\">
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/\" role=\"button\">Budgets</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/comptes\" role=\"button\">Comptes</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/newop\" role=\"button\">Newop</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/libelles\" role=\"button\">Libelles</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cbid\" role=\"button\">CBid</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cheques\" role=\"button\">Chèques</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/portfolio.php\" role=\"button\">Portfolio</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/peaphilippe.php\" role=\"button\">PEA-BS</a>
    </form>
</nav>
       </div>
       <div class=\"container-fluid mt-5\">    
<div class=\"row\">

 <div class=\"col-sm-4 bg-light text-dark\">
 <caption>Libelles</caption>
 <table class=\"table table-hover table-sm\">
 ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libelles"]) || array_key_exists("libelles", $context) ? $context["libelles"] : (function () { throw new RuntimeError('Variable "libelles" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo " <tr>
 <td class='text-start'>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "libelle", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
 <td class='text-end table-success'>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ss", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
 </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " </table>
 </div>
 
 <div class=\"col-sm-4 bg-light text-dark\">
<table class=\"table table-hover table-sm\">
<thead>
<tr>
<th>Date</th>
<th>Libelle</th>
<th>Credit</th>
<th>Debit</th>
<th>Banque</th>
</tr>
</thead>
<tbody>
";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libelles_detail"]) || array_key_exists("libelles_detail", $context) ? $context["libelles_detail"] : (function () { throw new RuntimeError('Variable "libelles_detail" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo " <tr>
 <td class='text-start'>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
 <td class='text-start'>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "libelle", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
 <td class='text-end table-success'>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "credit", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
 <td class='text-start'>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "debit", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
 <td class='text-end table-success'>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "banque", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
 </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "   
</tbody>
    </table>
    </div>
</div>
</div>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "euros/libelles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 62,  137 => 60,  133 => 59,  129 => 58,  125 => 57,  121 => 56,  118 => 55,  114 => 54,  97 => 39,  88 => 36,  84 => 35,  81 => 34,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
<meta charset=\"UTF-8\">
<title>libelles</title>
<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
 
        
        
    </head>
    <body>
       <div class=\"container\"> 
       <nav class=\"fixed-top navbar navbar-light bg-light\">
  <form class=\"container justify-content-center\">
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/\" role=\"button\">Budgets</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/comptes\" role=\"button\">Comptes</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/newop\" role=\"button\">Newop</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/libelles\" role=\"button\">Libelles</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cbid\" role=\"button\">CBid</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost:8000/euros/cheques\" role=\"button\">Chèques</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/portfolio.php\" role=\"button\">Portfolio</a>
    <a class=\"btn  btn-primary btn-outline-light\" href=\"http://localhost/money/peaphilippe.php\" role=\"button\">PEA-BS</a>
    </form>
</nav>
       </div>
       <div class=\"container-fluid mt-5\">    
<div class=\"row\">

 <div class=\"col-sm-4 bg-light text-dark\">
 <caption>Libelles</caption>
 <table class=\"table table-hover table-sm\">
 {% for item in libelles %}
 <tr>
 <td class='text-start'>{{ item.libelle }}</td>
 <td class='text-end table-success'>{{ item.ss }}</td>
 </tr>
 {% endfor %}
 </table>
 </div>
 
 <div class=\"col-sm-4 bg-light text-dark\">
<table class=\"table table-hover table-sm\">
<thead>
<tr>
<th>Date</th>
<th>Libelle</th>
<th>Credit</th>
<th>Debit</th>
<th>Banque</th>
</tr>
</thead>
<tbody>
{% for item in libelles_detail %}
 <tr>
 <td class='text-start'>{{ item.date }}</td>
 <td class='text-start'>{{ item.libelle }}</td>
 <td class='text-end table-success'>{{ item.credit }}</td>
 <td class='text-start'>{{ item.debit }}</td>
 <td class='text-end table-success'>{{ item.banque }}</td>
 </tr>
 {% endfor %}   
</tbody>
    </table>
    </div>
</div>
</div>
    </body>
</html>
", "euros/libelles.html.twig", "/home/philippe/symfony/templates/euros/libelles.html.twig");
    }
}
