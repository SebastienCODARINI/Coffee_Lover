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

/* base.html.twig */
class __TwigTemplate_6cfa86c2e3d0c3a8dfcb1e719e2197e62e92e16d91c4235ac972b7bd2f08d96e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" type=\"image/png\"/>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css\"/>
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "\t</head>
\t<body>
\t\t<div class=\"card text-bg-dark rounded-0\">
\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["cdn_base_url"]) || array_key_exists("cdn_base_url", $context) ? $context["cdn_base_url"] : (function () { throw new RuntimeError('Variable "cdn_base_url" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "zhqKfMm/bannerV2.png\" class=\"img-fluid h-auto w-auto\" alt=\"Banner\"/>
\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\" id=\"Coffee Lover\">Coffee Lover</h5>
\t\t\t</div>

\t\t\t";
        // line 27
        $this->loadTemplate("fragments/_search_mobile.html.twig", "base.html.twig", 27)->display($context);
        // line 28
        echo "
\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\">Coffee Lover</h5>
\t\t\t</div>

\t\t</div>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<button class=\"navbar-toggler btn-outline\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"bi bi-list\" style=\"font-size: 2rem\"></span>
\t\t\t\t</button>
\t\t\t\t";
        // line 40
        echo "\t\t\t\t<div class=\"d-flex d-lg-none\">
\t\t\t\t\t<div class=\"dropdown-center\">
\t\t\t\t\t\t";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "\t\t\t\t\t\t\t<button class=\"bi bi-person-fill dropdown-toggle nav-link\" style=\"font-size: 2rem\" id=\"navbarDropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 51
            if ((twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "roles", [], "any", false, false, false, 51)) || twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "roles", [], "any", false, false, false, 51)))) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_office");
                echo "\">Backoffice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
            echo "\" class=\"bi bi-person-fill nav-link\" style=\"font-size: 2rem\" id=\"navbarDropdown\"></a>
\t\t\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex d-lg-none\">
\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t<a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"accueil\" id=\"logo\"/></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "botanique-et-culture"]);
        echo "\">Botanique et culture</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "recolte-et-transformation"]);
        echo "\">Récolte et transformation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "cafe-de-specialite"]);
        echo "\">Café de spécialité</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => "torrefaction-et-methodes-d-extraction"]);
        echo "\">Torréfaction et méthodes d'extraction</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) {
            // line 86
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_list");
            echo "\">QUIZ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 92
        echo "\t\t\t\t\t<form class=\"d-none d-lg-flex form-inline ms-auto me-4\" id=\"search-form\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"searchTerm\" class=\"bi bi-search\"/>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"d-none d-lg-block\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
            // line 98
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\" id=\"navbar-color\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
            echo "\">Déconnexion</a>

\t\t\t\t\t\t\t\t\t\t";
            // line 104
            if ((twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "roles", [], "any", false, false, false, 104)) || twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", [], "any", false, false, false, 104), "roles", [], "any", false, false, false, 104)))) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 106
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_office");
                echo "\">Backoffice</a>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 111
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</nav>
\t\t\t";
        // line 120
        $this->loadTemplate("fragments/_flash_message.html.twig", "base.html.twig", 120)->display($context);
        // line 121
        echo "\t\t\t";
        // line 122
        echo "\t\t\t<div id=\"search-results\"></div>
\t\t</div>
\t\t";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
\t\t<footer class=\"footer container-fluid py-8 border-top text-center\">
\t\t\t<span class=\"text-white\">
\t\t\t\t<div class=\"container p-4 pb-4\">
\t\t\t\t\t<section class=\"mb-4\">
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-twitter-x\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-share-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-github\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</section>
\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mention_legal");
        echo "\">Mentions légales</a>
\t\t\t\t\t|
\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Qui sommes-nous</a>
\t\t\t\t</div>
\t\t\t</span>
\t\t</footer>
\t\t";
        // line 152
        $this->displayBlock('javascripts', $context, $blocks);
        // line 160
        echo "\t</body>
</html>";
        
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
        echo "\t\t\t\tCoffe Lover
\t\t\t";
        
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
        echo "\t\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/search.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/search-mobile.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 153
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search-animate.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scroll.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search-mobile.js"), "html", null, true);
        echo "\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 158,  401 => 155,  397 => 154,  392 => 153,  382 => 152,  364 => 124,  352 => 17,  348 => 16,  343 => 15,  333 => 14,  322 => 8,  312 => 7,  301 => 160,  299 => 152,  292 => 148,  287 => 146,  264 => 125,  262 => 124,  258 => 122,  256 => 121,  254 => 120,  247 => 115,  241 => 112,  238 => 111,  233 => 108,  228 => 106,  225 => 105,  223 => 104,  218 => 102,  214 => 101,  209 => 98,  207 => 97,  200 => 92,  197 => 90,  191 => 87,  188 => 86,  186 => 85,  181 => 83,  175 => 80,  169 => 77,  163 => 74,  155 => 71,  148 => 67,  139 => 60,  133 => 58,  130 => 57,  124 => 54,  120 => 52,  118 => 51,  113 => 49,  107 => 46,  102 => 43,  100 => 42,  96 => 40,  83 => 28,  81 => 27,  73 => 22,  68 => 19,  66 => 14,  60 => 11,  57 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
\t\t<title>
\t\t\t{% block title %}
\t\t\t\tCoffe Lover
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"{{ asset('favicon.png') }}\" type=\"image/png\"/>
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\"/>
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css\"/>
\t\t{% block stylesheets %}
\t\t\t<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\"/>
\t\t\t<link href=\"{{ asset('css/search.css') }}\" rel=\"stylesheet\"/>
\t\t\t<link href=\"{{ asset('css/search-mobile.css') }}\" rel=\"stylesheet\"/>
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<div class=\"card text-bg-dark rounded-0\">
\t\t\t<img src=\"{{ cdn_base_url }}zhqKfMm/bannerV2.png\" class=\"img-fluid h-auto w-auto\" alt=\"Banner\"/>
\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\" id=\"Coffee Lover\">Coffee Lover</h5>
\t\t\t</div>

\t\t\t{% include \"fragments/_search_mobile.html.twig\" %}

\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\">Coffee Lover</h5>
\t\t\t</div>

\t\t</div>
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<button class=\"navbar-toggler btn-outline\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"bi bi-list\" style=\"font-size: 2rem\"></span>
\t\t\t\t</button>
\t\t\t\t{# For mobile device #}
\t\t\t\t<div class=\"d-flex d-lg-none\">
\t\t\t\t\t<div class=\"dropdown-center\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<button class=\"bi bi-person-fill dropdown-toggle nav-link\" style=\"font-size: 2rem\" id=\"navbarDropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_profil') }}\">Profil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_security_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% if 'ROLE_MANAGER' in app.user.roles or 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_back_office') }}\">Backoffice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_security_login') }}\" class=\"bi bi-person-fill nav-link\" style=\"font-size: 2rem\" id=\"navbarDropdown\"></a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex d-lg-none\">
\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_home') }}\">Accueil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\"><img src=\"{{ asset('logo.png') }}\" alt=\"logo\" title=\"accueil\" id=\"logo\"/></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'botanique-et-culture' }) }}\">Botanique et culture</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'recolte-et-transformation' }) }}\">Récolte et transformation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'cafe-de-specialite' }) }}\">Café de spécialité</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_categorie', { categorySlug: 'torrefaction-et-methodes-d-extraction' }) }}\">Torréfaction et méthodes d'extraction</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_quiz_list') }}\">QUIZ</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t\t{# search form for desktop device #}
\t\t\t\t\t<form class=\"d-none d-lg-flex form-inline ms-auto me-4\" id=\"search-form\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"searchTerm\" class=\"bi bi-search\"/>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"d-none d-lg-block\">
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\" id=\"navbar-color\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_profil') }}\">Profil</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_security_logout') }}\">Déconnexion</a>

\t\t\t\t\t\t\t\t\t\t{% if 'ROLE_MANAGER' in app.user.roles or 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_back_office') }}\">Backoffice</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_security_login') }}\">Connexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</nav>
\t\t\t{% include 'fragments/_flash_message.html.twig' %}
\t\t\t{# add div container for search : #}
\t\t\t<div id=\"search-results\"></div>
\t\t</div>
\t\t{% block body %}{% endblock %}

\t\t<footer class=\"footer container-fluid py-8 border-top text-center\">
\t\t\t<span class=\"text-white\">
\t\t\t\t<div class=\"container p-4 pb-4\">
\t\t\t\t\t<section class=\"mb-4\">
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-twitter-x\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-linkedin\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"!\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-share-fill\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-light btn-floating m-1\" href=\"#\" role=\"button\">
\t\t\t\t\t\t\t<i class=\"bi bi-github\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</section>
\t\t\t\t\t<a class=\"text-white\" href=\"{{ path('app_mention_legal') }}\">Mentions légales</a>
\t\t\t\t\t|
\t\t\t\t\t<a class=\"text-white\" href=\"{{ path('app_contact') }}\">Qui sommes-nous</a>
\t\t\t\t</div>
\t\t\t</span>
\t\t</footer>
\t\t{% block javascripts %}
\t\t\t<script src=\"{{ asset('js/search.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/search-animate.js') }}\"></script>
\t\t\t<script src=\"{{ asset('js/scroll.js') }}\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"{{ asset('js/search-mobile.js') }}\"></script>
\t\t{% endblock %}
\t</body>
</html>", "base.html.twig", "/var/www/html/projet-12-coffee-lover/templates/base.html.twig");
    }
}
