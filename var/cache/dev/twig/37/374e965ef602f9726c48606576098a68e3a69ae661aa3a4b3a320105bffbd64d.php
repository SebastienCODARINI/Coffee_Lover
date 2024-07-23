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

/* baseQuiz.html.twig */
class __TwigTemplate_8efe5bca006cae9a466f72a55f432f37a2e5da1ff7d104eb67ebccb9f93ddcf5 extends \Twig\Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseQuiz.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseQuiz.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>
      ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicone.png"), "html", null, true);
        echo "\" type=\"image/png\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css\" />
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "  </head>
  <body>
    <div class=\"card text-bg-dark\">
      ";
        // line 22
        echo "      <form class=\"form-inline d-block d-lg-none position-absolute top-0 end-0 m-4\">
        <div class=\"input-group\">
          <button id=\"searchButton\" class=\"btn btn-outline-light rounded-pill\" type=\"button\"><i class=\"bi bi-search\"></i></button>
          <input id=\"searchInput\" class=\"form-control rounded-pill d-none\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" />
        </div>
      </form>

      <div class=\"card-img-overlay d-none d-lg-block\">
        <h5 class=\"card-title text-center fs-1 fw-bolder\">Coffee Lover</h5>
      </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top\">
      <div class=\"container-fluid\">
        <button class=\"navbar-toggler btn-outline\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"bi bi-list\" style=\"font-size: 2rem\"></span></button>
        <div class=\"d-flex d-lg-none\">
          <div class=\"me-3\">
            <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
        echo "\"><span class=\"bi bi-person-fill\" style=\"font-size: 2rem\"></span></a>
          </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <div class=\"d-flex d-lg-none\">
              <div class=\"me-3\">
                <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
              </div>
            </div>
            <li class=\"nav-item d-none d-lg-block\">
              <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><span id=\"cup\" class=\"bi bi-cup-hot pr-4\" title=\"Accueil\" style=\"font-size: 2rem\"></span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "botanique-et-culture"]);
        echo "\">Botanique et culture</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "recolte-et-transformation"]);
        echo "\">Récolte et transformation</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "torrefaction-et-methodes-d-extraction"]);
        echo "\">Torréfaction et méthodes d'extraction</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "cafe-de-specialite"]);
        echo "\">Café de spécialité</a>
            </li>
            ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) {
            // line 65
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_list");
            echo "\">QUIZ</a>
              </li>
            ";
        }
        // line 69
        echo "          </ul>
          ";
        // line 71
        echo "          <form class=\"d-none d-lg-flex form-inline ms-auto me-4\" id=\"search-form\">
            <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"searchTerm\" />
            <button class=\"btn btn-rounded btn-quiz ms-2\" type=\"submit\">Recherche</button>
          </form>
          <ul class=\"navbar-nav\">
            ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76)) {
            // line 77
            echo "              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\" id=\"navbar-color\">
                  <a class=\"dropdown-item\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
                  <a class=\"dropdown-item\" href=\"";
            // line 81
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
            echo "\">Déconnexion</a>

                  ";
            // line 83
            if ((twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "roles", [], "any", false, false, false, 83)) || twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "roles", [], "any", false, false, false, 83)))) {
                // line 84
                echo "                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"";
                // line 85
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_office");
                echo "\">Backoffice</a>
                  ";
            }
            // line 87
            echo "                </div>
              </li>
            ";
        } else {
            // line 90
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
            echo "\">Connexion</a>
              </li>
            ";
        }
        // line 94
        echo "          </ul>
        </div>
      </div>
    </nav>
    ";
        // line 99
        echo "    <div id=\"search-results\"></div>
    ";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "
    <footer class=\"footer container-fluid py-8 border-top text-center\">
      <span class=\"text-white\">
        <div class=\"container p-4 pb-4\">
          <section class=\"mb-4\">
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-facebook\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-twitter-x\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-linkedin\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-share-fill\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"><i class=\"bi bi-github\"></i></a>
          </section>
          <a class=\"text-white\" href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mention_legal");
        echo "\">Mentions légales</a>
          |
          <a class=\"text-white\" href=\"#\">Qui sommes-nous</a>
          |
          <a class=\"text-white\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Contactez nous</a>
        </div>
      </span>
    </footer>
    ";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "        Coffe Lover
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
      <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/search.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 101
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scroll.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseQuiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 124,  330 => 123,  320 => 122,  309 => 101,  299 => 100,  287 => 16,  282 => 15,  272 => 14,  261 => 8,  251 => 7,  239 => 128,  237 => 122,  230 => 118,  223 => 114,  210 => 103,  208 => 100,  205 => 99,  199 => 94,  193 => 91,  190 => 90,  185 => 87,  180 => 85,  177 => 84,  175 => 83,  170 => 81,  166 => 80,  161 => 77,  159 => 76,  152 => 71,  149 => 69,  143 => 66,  140 => 65,  138 => 64,  133 => 62,  127 => 59,  121 => 56,  115 => 53,  109 => 50,  102 => 46,  92 => 39,  73 => 22,  68 => 18,  66 => 14,  60 => 11,  57 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <title>
      {% block title %}
        Coffe Lover
      {% endblock %}
    </title>
    <link rel=\"icon\" href=\"{{ asset('favicone.png') }}\" type=\"image/png\" />
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\" />
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css\" />
    {% block stylesheets %}
      <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" />
      <link href=\"{{ asset('css/search.css') }}\" rel=\"stylesheet\" />
    {% endblock %}
  </head>
  <body>
    <div class=\"card text-bg-dark\">
      {# search form for mobile device #}
      <form class=\"form-inline d-block d-lg-none position-absolute top-0 end-0 m-4\">
        <div class=\"input-group\">
          <button id=\"searchButton\" class=\"btn btn-outline-light rounded-pill\" type=\"button\"><i class=\"bi bi-search\"></i></button>
          <input id=\"searchInput\" class=\"form-control rounded-pill d-none\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" />
        </div>
      </form>

      <div class=\"card-img-overlay d-none d-lg-block\">
        <h5 class=\"card-title text-center fs-1 fw-bolder\">Coffee Lover</h5>
      </div>
    </div>

    <nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top\">
      <div class=\"container-fluid\">
        <button class=\"navbar-toggler btn-outline\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"bi bi-list\" style=\"font-size: 2rem\"></span></button>
        <div class=\"d-flex d-lg-none\">
          <div class=\"me-3\">
            <a href=\"{{ path('app_security_login') }}\"><span class=\"bi bi-person-fill\" style=\"font-size: 2rem\"></span></a>
          </div>
        </div>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <div class=\"d-flex d-lg-none\">
              <div class=\"me-3\">
                <a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
              </div>
            </div>
            <li class=\"nav-item d-none d-lg-block\">
              <a href=\"{{ path('app_home') }}\"><span id=\"cup\" class=\"bi bi-cup-hot pr-4\" title=\"Accueil\" style=\"font-size: 2rem\"></span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'botanique-et-culture' }) }}\">Botanique et culture</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'recolte-et-transformation' }) }}\">Récolte et transformation</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'torrefaction-et-methodes-d-extraction' }) }}\">Torréfaction et méthodes d'extraction</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'cafe-de-specialite' }) }}\">Café de spécialité</a>
            </li>
            {% if app.user %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_quiz_list') }}\">QUIZ</a>
              </li>
            {% endif %}
          </ul>
          {# search form for desktop device #}
          <form class=\"d-none d-lg-flex form-inline ms-auto me-4\" id=\"search-form\">
            <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"searchTerm\" />
            <button class=\"btn btn-rounded btn-quiz ms-2\" type=\"submit\">Recherche</button>
          </form>
          <ul class=\"navbar-nav\">
            {% if app.user %}
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\" id=\"navbar-color\">
                  <a class=\"dropdown-item\" href=\"{{ path('app_profil') }}\">Profil</a>
                  <a class=\"dropdown-item\" href=\"{{ path('app_security_logout') }}\">Déconnexion</a>

                  {% if 'ROLE_MANAGER' in app.user.roles or 'ROLE_ADMIN' in app.user.roles %}
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"{{ path('app_back_office') }}\">Backoffice</a>
                  {% endif %}
                </div>
              </li>
            {% else %}
              <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{ path('app_security_login') }}\">Connexion</a>
              </li>
            {% endif %}
          </ul>
        </div>
      </div>
    </nav>
    {# ajout de la div container pour la recherche : #}
    <div id=\"search-results\"></div>
    {% block body %}

    {% endblock %}

    <footer class=\"footer container-fluid py-8 border-top text-center\">
      <span class=\"text-white\">
        <div class=\"container p-4 pb-4\">
          <section class=\"mb-4\">
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-facebook\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-twitter-x\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-linkedin\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\"><i class=\"bi bi-share-fill\"></i></a>
            <a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\"><i class=\"bi bi-github\"></i></a>
          </section>
          <a class=\"text-white\" href=\"{{ path('app_mention_legal') }}\">Mentions légales</a>
          |
          <a class=\"text-white\" href=\"#\">Qui sommes-nous</a>
          |
          <a class=\"text-white\" href=\"{{ path('app_contact') }}\">Contactez nous</a>
        </div>
      </span>
    </footer>
    {% block javascripts %}
      <script src=\"{{ asset('js/search.js') }}\"></script>
      <script src=\"{{ asset('js/scroll.js') }}\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
    {% endblock %}
  </body>
</html>
", "baseQuiz.html.twig", "/var/www/html/projet-12-coffee-lover/templates/baseQuiz.html.twig");
    }
}
