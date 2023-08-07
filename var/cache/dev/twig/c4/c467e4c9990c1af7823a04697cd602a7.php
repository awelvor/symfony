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

/* euros/comptes.html.twig */
class __TwigTemplate_7a2c9530ac2ee25ef8302746a8e55c34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/comptes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/comptes.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
<meta charset=\"UTF-8\">
<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
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
       <div class=\"container mt-5\">    
<div class=\"row\">
 <div class=\"col-sm-3 bg-light text-dark\">
 <caption>Les comptes</caption>
 <table class=\"table table-hover table-sm\">
 <thead>
 <th>compte</th>
 <th>solde</th>
 </thead>
 ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes_global"]) || array_key_exists("comptes_global", $context) ? $context["comptes_global"] : (function () { throw new RuntimeError('Variable "comptes_global" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo " <tr>
 <td class='text-start'>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "bb", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
 <td class='text-end table-success'><a href=\"http://localhost:8000/euros/comptes?compte=";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "bb", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "aa", [], "any", false, false, false, 39), 0, [], "any", false, false, false, 39), "ss", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></td>
 </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " </table>
 </div>
 
 <div class=\"col-sm-8 bg-light text-dark\">
 <caption>Le compte ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["le_compte"]) || array_key_exists("le_compte", $context) ? $context["le_compte"] : (function () { throw new RuntimeError('Variable "le_compte" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</caption>
<table class=\"table table-hover table-sm\">
<thead>
<th col-1>Date</th>
<th class=\"col-6\">Libelle</th>
<th>Credit</th>
<th>Debit</th>
<th>Banque</th>
</thead>
<tbody>
";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes_detail_notnull"]) || array_key_exists("comptes_detail_notnull", $context) ? $context["comptes_detail_notnull"] : (function () { throw new RuntimeError('Variable "comptes_detail_notnull" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "<tr>
<td class=\"col-2\" >";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
<td class=\"col-2\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "libelle", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
<td class='col-1 text-end table-success'>";
            // line 60
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "credit", [], "any", false, false, false, 60) > 0)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "credit", [], "any", false, false, false, 60), "html", null, true);
            }
            echo "</td>
<td class='col-1 text-end table-success'>";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "debit", [], "any", false, false, false, 61) > 0)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "debit", [], "any", false, false, false, 61), "html", null, true);
            }
            echo "</td>
<td class='col-2 text-end'>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "banque", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "<tr><td>*</td></tr>
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes_detail_null"]) || array_key_exists("comptes_detail_null", $context) ? $context["comptes_detail_null"] : (function () { throw new RuntimeError('Variable "comptes_detail_null" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "<tr>
<td >";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "date", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
<td ><a href=\"http://localhost:8000/euros/comptes?id=";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "libelle", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></td>
<td class='text-end table-success'>";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "credit", [], "any", false, false, false, 71) > 0)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "credit", [], "any", false, false, false, 71), "html", null, true);
            }
            echo "</td>
<td class='text-end table-success'>";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "debit", [], "any", false, false, false, 72) > 0)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "debit", [], "any", false, false, false, 72), "html", null, true);
            }
            echo "</td>
<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "banque", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 74
            echo "\">edit</a></td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "</tbody>
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

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "euros/comptes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 5,  206 => 77,  198 => 74,  194 => 73,  188 => 72,  182 => 71,  176 => 70,  172 => 69,  169 => 68,  165 => 67,  162 => 66,  152 => 62,  146 => 61,  140 => 60,  136 => 59,  132 => 58,  129 => 57,  125 => 56,  112 => 46,  106 => 42,  95 => 39,  91 => 38,  88 => 37,  84 => 36,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
<meta charset=\"UTF-8\">
<title>{% block title %}Welcome!{% endblock %}</title>
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
       <div class=\"container mt-5\">    
<div class=\"row\">
 <div class=\"col-sm-3 bg-light text-dark\">
 <caption>Les comptes</caption>
 <table class=\"table table-hover table-sm\">
 <thead>
 <th>compte</th>
 <th>solde</th>
 </thead>
 {% for item in comptes_global %}
 <tr>
 <td class='text-start'>{{ item.bb }}</td>
 <td class='text-end table-success'><a href=\"http://localhost:8000/euros/comptes?compte={{item.bb}}\">{{ item.aa.0.ss }}</a></td>
 </tr>
 {% endfor %}
 </table>
 </div>
 
 <div class=\"col-sm-8 bg-light text-dark\">
 <caption>Le compte {{le_compte}}</caption>
<table class=\"table table-hover table-sm\">
<thead>
<th col-1>Date</th>
<th class=\"col-6\">Libelle</th>
<th>Credit</th>
<th>Debit</th>
<th>Banque</th>
</thead>
<tbody>
{% for item in comptes_detail_notnull %}
<tr>
<td class=\"col-2\" >{{ item.date }}</td>
<td class=\"col-2\">{{ item.libelle }}</td>
<td class='col-1 text-end table-success'>{% if item.credit > 0 %}{{ item.credit }}{% endif %}</td>
<td class='col-1 text-end table-success'>{% if item.debit  > 0 %}{{ item.debit  }}{% endif %}</td>
<td class='col-2 text-end'>{{ item.banque }}</td>

</tr>
{% endfor %}
<tr><td>*</td></tr>
{% for item in comptes_detail_null %}
<tr>
<td >{{ item.date }}</td>
<td ><a href=\"http://localhost:8000/euros/comptes?id={{item.id}}\">{{ item.libelle }}</a></td>
<td class='text-end table-success'>{% if item.credit > 0 %}{{ item.credit }}{% endif %}</td>
<td class='text-end table-success'>{% if item.debit > 0 %}{{ item.debit }}{% endif %}</td>
<td>{{ item.banque }}</td>
<td><a href=\"{# path('app_euros_edit', {'id': item.1.id}) #}\">edit</a></td>
</tr>
{% endfor %}
</tbody>
    </table>
    </div>
</div>
</div>
    </body>
</html>
", "euros/comptes.html.twig", "/home/philippe/symfony/templates/euros/comptes.html.twig");
    }
}
