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

/* fragments/_mobile_login.html.twig */
class __TwigTemplate_47c57c794db0f75aedd02c8582ace3b45e0e777f33622e982df3c439cf366aa7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragments/_mobile_login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragments/_mobile_login.html.twig"));

        // line 1
        echo "<!-- fragments/_mobile_login.html.twig -->
<div class=\"d-flex align-items-center\">
\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#rightNavbar\">
\t\t<span class=\"bi bi-person-fill\" style=\"font-size: 2rem\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"rightNavbar\">
\t\t<ul class=\"navbar-nav\">
\t\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\" id=\"navbar-color\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\">Profil</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_logout");
            echo "\">Déconnexion</a>

\t\t\t\t\t\t";
            // line 16
            if ((twig_in_filter("ROLE_MANAGER", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "roles", [], "any", false, false, false, 16)) || twig_in_filter("ROLE_ADMIN", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "roles", [], "any", false, false, false, 16)))) {
                // line 17
                echo "\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 18
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_office");
                echo "\">Backoffice</a>
\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 23
            echo "\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
            echo "\">Connexion</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 27
        echo "\t\t</ul>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fragments/_mobile_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  87 => 24,  84 => 23,  79 => 20,  74 => 18,  71 => 17,  69 => 16,  64 => 14,  60 => 13,  55 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- fragments/_mobile_login.html.twig -->
<div class=\"d-flex align-items-center\">
\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#rightNavbar\">
\t\t<span class=\"bi bi-person-fill\" style=\"font-size: 2rem\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"rightNavbar\">
\t\t<ul class=\"navbar-nav\">
\t\t\t{% if app.user %}
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\" id=\"navbar-color\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_profil') }}\">Profil</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_security_logout') }}\">Déconnexion</a>

\t\t\t\t\t\t{% if 'ROLE_MANAGER' in app.user.roles or 'ROLE_ADMIN' in app.user.roles %}
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_back_office') }}\">Backoffice</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_security_login') }}\">Connexion</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</div>
</div>
", "fragments/_mobile_login.html.twig", "/var/www/html/projet-12-coffee-lover/templates/fragments/_mobile_login.html.twig");
    }
}
