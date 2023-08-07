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

/* euros/euros.html.twig */
class __TwigTemplate_7f0a81285d083bc3ea241a8b5c0d3cf9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/euros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/euros.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
<meta charset=\"UTF-8\">
<title>budgets</title>
<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
 
        
        
    </head>
    <body>
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
       </div>
       <div class=\"container-fluid mt-5\">    
<div class=\"row\">
 <div class=\"col-sm-3 bg-light text-dark\">
 <caption>Budgets Annuels</caption>
 <table class=\"table table-hover table-sm\">
 ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annuel"]) || array_key_exists("annuel", $context) ? $context["annuel"] : (function () { throw new RuntimeError('Variable "annuel" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo " <tr>
 <td class='text-start'>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 34), "annee", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
 <td class='text-end'>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 35), "scredit", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
 <td class='text-end'>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 36), "sdebit", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
 <td class='text-end table-success'><a href='http://localhost:8000/euros?annee=";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 37), "annee", [], "any", false, false, false, 37), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 37), "scredit", [], "any", false, false, false, 37) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 37), "sdebit", [], "any", false, false, false, 37)), "html", null, true);
            echo "</a></td>
 </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo " </table>
 </div>
 
 <div class=\"col-sm-3 bg-light text-dark\">
 <caption>Budgets Mensuels</caption>
 <table class=\"table table-hover table-sm\">
 ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensuel"]) || array_key_exists("mensuel", $context) ? $context["mensuel"] : (function () { throw new RuntimeError('Variable "mensuel" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo " <tr>
 <td class='text-start'>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 48), "mois", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
 <td class='text-end'>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 49), "scredit", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
 <td class='text-end'>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 50), "sdebit", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
 <td class='text-end table-success'><a href='http://localhost:8000/euros?mois=";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 51), "mois", [], "any", false, false, false, 51), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 51), "scredit", [], "any", false, false, false, 51) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], 0, [], "any", false, false, false, 51), "sdebit", [], "any", false, false, false, 51)), "html", null, true);
            echo "</a></td>
 </tr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " </table>
 </div>
 
 <div class=\"col-sm-6 bg-light text-dark\">
<table class=\"table table-hover table-sm\">
<thead>
            <tr>
<th></th>
<th>Libelle</th>
<th>Credit</th>
<th>Debit</th>
<th>Banque</th>
                
                
                
            </tr>
</thead>
<tbody>
        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["euros"]) || array_key_exists("euros", $context) ? $context["euros"] : (function () { throw new RuntimeError('Variable "euros" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["euro"]) {
            // line 73
            echo "            <tr>
<td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["euro"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["euro"], "date", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["euro"], "libelle", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
<td class='text-end table-success'>";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["euro"], "credit", [], "any", false, false, false, 77) > 0)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["euro"], "credit", [], "any", false, false, false, 77), "html", null, true);
            }
            echo "</td>
<td class='text-end table-success'>";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, $context["euro"], "debit", [], "any", false, false, false, 78) > 0)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["euro"], "debit", [], "any", false, false, false, 78), "html", null, true);
            }
            echo "</td>
<td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["euro"], "banque", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>

</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['euro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
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

    public function getTemplateName()
    {
        return "euros/euros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 83,  195 => 79,  189 => 78,  183 => 77,  179 => 76,  175 => 75,  171 => 74,  168 => 73,  164 => 72,  144 => 54,  133 => 51,  129 => 50,  125 => 49,  121 => 48,  118 => 47,  114 => 46,  106 => 40,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  80 => 33,  76 => 32,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
<meta charset=\"UTF-8\">
<title>budgets</title>
<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
 
        
        
    </head>
    <body>
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
       </div>
       <div class=\"container-fluid mt-5\">    
<div class=\"row\">
 <div class=\"col-sm-3 bg-light text-dark\">
 <caption>Budgets Annuels</caption>
 <table class=\"table table-hover table-sm\">
 {% for item in annuel %}
 <tr>
 <td class='text-start'>{{item.0.annee}}</td>
 <td class='text-end'>{{item.0.scredit}}</td>
 <td class='text-end'>{{item.0.sdebit}}</td>
 <td class='text-end table-success'><a href='http://localhost:8000/euros?annee={{item.0.annee}}'>{{item.0.scredit-item.0.sdebit}}</a></td>
 </tr>
 {% endfor %}
 </table>
 </div>
 
 <div class=\"col-sm-3 bg-light text-dark\">
 <caption>Budgets Mensuels</caption>
 <table class=\"table table-hover table-sm\">
 {% for item in mensuel %}
 <tr>
 <td class='text-start'>{{item.0.mois}}</td>
 <td class='text-end'>{{item.0.scredit}}</td>
 <td class='text-end'>{{item.0.sdebit}}</td>
 <td class='text-end table-success'><a href='http://localhost:8000/euros?mois={{item.0.mois}}'>{{item.0.scredit-item.0.sdebit}}</a></td>
 </tr>
 {% endfor %}
 </table>
 </div>
 
 <div class=\"col-sm-6 bg-light text-dark\">
<table class=\"table table-hover table-sm\">
<thead>
            <tr>
<th></th>
<th>Libelle</th>
<th>Credit</th>
<th>Debit</th>
<th>Banque</th>
                
                
                
            </tr>
</thead>
<tbody>
        {% for euro in euros %}
            <tr>
<td>{{ euro.id }}</td>
<td>{{ euro.date }}</td>
<td>{{ euro.libelle }}</td>
<td class='text-end table-success'>{% if euro.credit  > 0 %}{{ euro.credit }}{% endif %}</td>
<td class='text-end table-success'>{% if euro.debit  > 0 %}{{ euro.debit }}{% endif %}</td>
<td>{{ euro.banque }}</td>

</td></tr>
        {% endfor %}
</tbody>
    </table>
    </div>
</div>
</div>
    </body>
</html>
", "euros/euros.html.twig", "/home/philippe/symfony/templates/euros/euros.html.twig");
    }
}
