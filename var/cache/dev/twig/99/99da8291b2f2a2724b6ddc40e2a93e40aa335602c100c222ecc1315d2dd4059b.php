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

/* back-office/base.html.twig */
class __TwigTemplate_d404fb70cdf409cc25f4c2f2a0579c866cdaa83fa9d9c7944182edc9f1c9d7a9 extends \Twig\Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicone.png"), "html", null, true);
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
        echo "zhqKfMm/bannerV2.png\" id=\"banner\" class=\"img-fluid h-auto w-auto\" alt=\"Banner\"/>
\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\" id=\"Coffee Lover\">Coffee Lover</h5>
\t\t\t</div>

\t\t\t";
        // line 28
        echo "

\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\">Coffee Lover</h5>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 35
        $this->loadTemplate("fragments/_search_mobile.html.twig", "back-office/base.html.twig", 35)->display($context);
        // line 36
        echo "
\t\t<nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top \">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<button class=\"navbar-toggler btn-outline\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"bi bi-list\" style=\"font-size: 2rem\"></span>
\t\t\t\t</button>
\t\t\t\t";
        // line 43
        echo "\t\t\t\t<div class=\"d-flex d-lg-none\">

\t\t\t\t\t<div class=\"dropdown-center\">
\t\t\t\t\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "\t\t\t\t\t\t\t<button class=\"bi bi-person-fill dropdown-toggle nav-link\" style=\"font-size: 2rem\" id=\"navbarDropdown\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"></button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 55
            if ((twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55)) || twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55)))) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_office");
                echo "\">Backoffice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        } else {
            // line 64
            echo "\t\t\t\t\t\t\t<a class=\"bi bi-person-fill nav-link\" style=\"font-size: 2rem\" id=\"navbarDropdown\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
            echo "\"></a>
\t\t\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex d-lg-none\">
\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<li class=\"nav-item d-none d-lg-block\">
\t\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("logo.png"), "html", null, true);
        echo "\" alt=\"logo\" title=\"accueil\" id=\"logo\"/></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_users");
        echo "\">Utilisateurs</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_articles");
        echo "\">Articles</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_quiz");
        echo "\">Quiz</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reward");
        echo "\">Récompenses</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_gif");
        echo "\">GIFs/Musiques</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_office");
        echo "\">Backoffice</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t";
        // line 99
        echo "\t\t\t\t\t<form class=\"d-none d-lg-flex form-inline ms-auto me-4\" id=\"search-form\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"searchTerm\" class=\"bi bi-search\"/>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"d-none d-lg-flex\">
\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
        echo "\">Déconnexion</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<div id=\"scroll-point\" class=\"my-4\">";
        // line 110
        echo "<br>";
        echo "</div>
\t\t";
        // line 111
        $this->loadTemplate("fragments/_flash_message.html.twig", "back-office/base.html.twig", 111)->display($context);
        // line 112
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 113
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
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mention_legal");
        echo "\">Mentions légales</a>
\t\t\t\t\t|
\t\t\t\t\t<a class=\"text-white\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">Qui sommes-nous</a>

\t\t\t\t</div>
\t\t\t</span>
\t\t</footer>
\t\t<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/search-animate.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scroll.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
\t</body>
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

    // line 112
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

    public function getTemplateName()
    {
        return "back-office/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 112,  331 => 17,  327 => 16,  322 => 15,  312 => 14,  301 => 8,  291 => 7,  274 => 143,  270 => 142,  266 => 141,  258 => 136,  253 => 134,  230 => 113,  227 => 112,  225 => 111,  221 => 110,  212 => 104,  205 => 99,  199 => 95,  193 => 92,  187 => 89,  181 => 86,  175 => 83,  168 => 79,  160 => 76,  153 => 72,  145 => 66,  139 => 64,  134 => 61,  128 => 58,  124 => 56,  122 => 55,  117 => 53,  111 => 50,  106 => 47,  104 => 46,  99 => 43,  91 => 36,  89 => 35,  80 => 28,  72 => 22,  67 => 19,  65 => 14,  59 => 11,  56 => 10,  54 => 7,  46 => 1,);
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
\t\t<link rel=\"icon\" href=\"{{ asset('favicone.png') }}\" type=\"image/png\"/>
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
\t\t\t<img src=\"{{ cdn_base_url }}zhqKfMm/bannerV2.png\" id=\"banner\" class=\"img-fluid h-auto w-auto\" alt=\"Banner\"/>
\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\" id=\"Coffee Lover\">Coffee Lover</h5>
\t\t\t</div>

\t\t\t{# search form for mobile device #}


\t\t\t<div class=\"card-img-overlay d-none d-lg-block\">
\t\t\t\t<h5 class=\"card-title text-center fs-1 fw-bolder\">Coffee Lover</h5>
\t\t\t</div>
\t\t</div>

\t\t{% include \"fragments/_search_mobile.html.twig\" %}

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

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<a class=\"bi bi-person-fill nav-link\" style=\"font-size: 2rem\" id=\"navbarDropdown\" href=\"{{ path('app_security_login') }}\"></a>
\t\t\t\t\t\t{% endif %}
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
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_back_users') }}\">Utilisateurs</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_back_articles') }}\">Articles</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_back_quiz') }}\">Quiz</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_back_reward') }}\">Récompenses</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_back_gif') }}\">GIFs/Musiques</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_back_office') }}\">Backoffice</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t{# search form for desktop device #}
\t\t\t\t\t<form class=\"d-none d-lg-flex form-inline ms-auto me-4\" id=\"search-form\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" id=\"searchTerm\" class=\"bi bi-search\"/>
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"d-none d-lg-flex\">
\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_security_logout') }}\">Déconnexion</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<div id=\"scroll-point\" class=\"my-4\">{{ '<br>'|raw }}</div>
\t\t{% include 'fragments/_flash_message.html.twig' %}
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
\t\t<script src=\"{{ asset('js/search.js') }}\"></script>
\t\t<script src=\"{{ asset('js/search-animate.js') }}\"></script>
\t\t<script src=\"{{ asset('js/scroll.js') }}\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js\" integrity=\"sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
\t</body>
</html>
", "back-office/base.html.twig", "/var/www/html/projet-12-coffee-lover/templates/back-office/base.html.twig");
    }
}
