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

/* euros/newop.html.1.twig */
class __TwigTemplate_8da3942237bc3769c57666f850ecd774 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/newop.html.1.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "euros/newop.html.1.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"philippe\" >
    <meta name=\"generator\" content=\"Bluefish 2.2.12\" >
    <title>Checkout example · Bootstrap v5.2</title>

   

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
  <main>
    <div class=\"py-5 text-center\">
      
      <h2>Newop form</h2>
      
    </div>

    <div class=\"row g-5\">
      
      
      
      <div class=\"col-md-7 col-lg-4\">
       
        <form class=\"needs-validation\" novalidate>
          <div class=\"row g-3\">
            <div class=\"col-sm-6\">
              <label for=\"firstName\" class=\"form-label\">Credit</label>
              <input type=\"text\" class=\"form-control\" id=\"credit\" placeholder=\"0.0\" value=\"0.0\" required>
              <div class=\"invalid-feedback\">
                Valid credit is required.
              </div>
            </div>

            <div class=\"col-sm-6\">
              <label for=\"lastName\" class=\"form-label\">Debit</label>
              <input type=\"text\" class=\"form-control\" id=\"debit\" placeholder=\"0.0\" value=\"0.0\" required>
              <div class=\"invalid-feedback\">
                Valid debit is required.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"username\" class=\"form-label\">Libelle</label>
              <div class=\"input-group has-validation\">
                
                <input type=\"text\" class=\"form-control\" id=\"libelle\" placeholder=\"libelle\" required>
              <div class=\"invalid-feedback\">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class=\"col-12\">
              <label for=\"username\" class=\"form-label\">Date</label>
              <div class=\"input-group has-validation\">
                
                <input type=\"text\" class=\"form-control\" id=\"date\" placeholder=\"2023-07-01\" required>
              <div class=\"invalid-feedback\">
                  date is required.
                </div>
              </div>
            </div>

            

            <div class=\"col-12\">
              <label for=\"address\" class=\"form-label\">Cbid</label>
              <input type=\"text\" class=\"form-control\" id=\"cbid\" placeholder=\"cbid\"
              
            </div>

            

            <div class=\"col-md-5\">
              <label for=\"country\" class=\"form-label\">Compte</label>
              <select class=\"form-select\" id=\"compte\" required>
                <option>cb boursorama</option>
                <option>ccsg</option>
                <option>cc boursorama</option>
                
                <option>amazon</option>
                
                
                
              </select>
              
            </div>

           

            
          </div>

          

          <button class=\"w-100 btn btn-primary btn-lg\" type=\"submit\">Valider</button>
        </form>
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
        return "euros/newop.html.1.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
    <title>Checkout example · Bootstrap v5.2</title>

   

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
  <main>
    <div class=\"py-5 text-center\">
      
      <h2>Newop form</h2>
      
    </div>

    <div class=\"row g-5\">
      
      
      
      <div class=\"col-md-7 col-lg-4\">
       
        <form class=\"needs-validation\" novalidate>
          <div class=\"row g-3\">
            <div class=\"col-sm-6\">
              <label for=\"firstName\" class=\"form-label\">Credit</label>
              <input type=\"text\" class=\"form-control\" id=\"credit\" placeholder=\"0.0\" value=\"0.0\" required>
              <div class=\"invalid-feedback\">
                Valid credit is required.
              </div>
            </div>

            <div class=\"col-sm-6\">
              <label for=\"lastName\" class=\"form-label\">Debit</label>
              <input type=\"text\" class=\"form-control\" id=\"debit\" placeholder=\"0.0\" value=\"0.0\" required>
              <div class=\"invalid-feedback\">
                Valid debit is required.
              </div>
            </div>

            <div class=\"col-12\">
              <label for=\"username\" class=\"form-label\">Libelle</label>
              <div class=\"input-group has-validation\">
                
                <input type=\"text\" class=\"form-control\" id=\"libelle\" placeholder=\"libelle\" required>
              <div class=\"invalid-feedback\">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class=\"col-12\">
              <label for=\"username\" class=\"form-label\">Date</label>
              <div class=\"input-group has-validation\">
                
                <input type=\"text\" class=\"form-control\" id=\"date\" placeholder=\"2023-07-01\" required>
              <div class=\"invalid-feedback\">
                  date is required.
                </div>
              </div>
            </div>

            

            <div class=\"col-12\">
              <label for=\"address\" class=\"form-label\">Cbid</label>
              <input type=\"text\" class=\"form-control\" id=\"cbid\" placeholder=\"cbid\"
              
            </div>

            

            <div class=\"col-md-5\">
              <label for=\"country\" class=\"form-label\">Compte</label>
              <select class=\"form-select\" id=\"compte\" required>
                <option>cb boursorama</option>
                <option>ccsg</option>
                <option>cc boursorama</option>
                
                <option>amazon</option>
                
                
                
              </select>
              
            </div>

           

            
          </div>

          

          <button class=\"w-100 btn btn-primary btn-lg\" type=\"submit\">Valider</button>
        </form>
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
", "euros/newop.html.1.twig", "/home/philippe/symfony/templates/euros/newop.html.1.twig");
    }
}
