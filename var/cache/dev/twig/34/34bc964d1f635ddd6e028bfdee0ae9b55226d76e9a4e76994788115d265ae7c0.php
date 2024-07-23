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

/* security/login.html.twig */
class __TwigTemplate_c36e6a391a30fec62e8a10cbfc2ddaabd3f298ddf06980ef3fab055b94c05dc3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div id=\"scroll-point\" class=\"my-4\">";
        echo "";
        echo "
\t\t";
        // line 5
        echo "";
        echo "</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 d-flex align-items-center\">
\t\t\t\t<!-- picture on left -->
\t\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/403.png"), "html", null, true);
        echo "\" alt=\"Coffee Image\" class=\"img-fluid center mb-3 rounded- \"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 d-flex align-items-center\">

\t\t\t\t<form class=\"form-signin features-section m-4\" method=\"post\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_security_login");
        echo "\">
\t\t\t\t\t<h1 class=\"h3 mb-3 fw-normal text-center\">Connectez-vous</h1>

\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t<input type=\"email\" name=\"_username\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\"/>
\t\t\t\t\t\t<label for=\"floatingInput\">Votre Email</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t<input type=\"password\" name=\"_password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\"/>
\t\t\t\t\t\t<label for=\"floatingPassword\">Votre mot de passe</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"section-btn mt-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Se connecter</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mt-3 text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tPas encore inscrit ?
\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-quiz mt-2\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Par ici</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  90 => 16,  83 => 12,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<div id=\"scroll-point\" class=\"my-4\">{{ ''|raw }}
\t\t{{ ''|raw }}</div>

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div
\t\t\t\tclass=\"col-md-6 d-flex align-items-center\">
\t\t\t\t<!-- picture on left -->
\t\t\t\t<img src=\"{{ asset('images/403.png') }}\" alt=\"Coffee Image\" class=\"img-fluid center mb-3 rounded- \"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 d-flex align-items-center\">

\t\t\t\t<form class=\"form-signin features-section m-4\" method=\"post\" action=\"{{ path('app_security_login') }}\">
\t\t\t\t\t<h1 class=\"h3 mb-3 fw-normal text-center\">Connectez-vous</h1>

\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t<input type=\"email\" name=\"_username\" class=\"form-control\" id=\"floatingInput\" placeholder=\"name@example.com\"/>
\t\t\t\t\t\t<label for=\"floatingInput\">Votre Email</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-floating mb-3\">
\t\t\t\t\t\t<input type=\"password\" name=\"_password\" class=\"form-control\" id=\"floatingPassword\" placeholder=\"Password\"/>
\t\t\t\t\t\t<label for=\"floatingPassword\">Votre mot de passe</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"section-btn mt-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Se connecter</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mt-3 text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tPas encore inscrit ?
\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-quiz mt-2\" href=\"{{ path('app_register') }}\">Par ici</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "security/login.html.twig", "/var/www/html/projet-12-coffee-lover/templates/security/login.html.twig");
    }
}
