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

/* back-office/homeBackOffice.html.twig */
class __TwigTemplate_945b65eb04d52767884f38e8b3db66c5b1e9228e8b9ea1b454652f8f1d2d5a3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back-office/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/homeBackOffice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/homeBackOffice.html.twig"));

        $this->parent = $this->loadTemplate("back-office/base.html.twig", "back-office/homeBackOffice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"container text-center mb-5\" style=\"max-width: 800px;\">
  <section class=\"features-section m-3\" >
      <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-8\" >
          <div class=\"text-container\" >
            <h2 class=\"text-center section-title\">Backoffice ...</h2>
            <ul class=\"text-center list-group\">
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_users");
        echo "\">Gestion des Utilisateurs</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_articles");
        echo "\">Gestion des Articles</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_quiz");
        echo "\">Gestion des Quiz</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reward");
        echo "\">Gestion des récompenses</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_gif");
        echo "\">Gestion des GIF/Musique</a>
            </ul>
          </div>
        </div>
      </div>
  </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back-office/homeBackOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 19,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back-office/base.html.twig' %}

{% block title %}
  Accueil
{% endblock %}

{% block body %}
<div class=\"container text-center mb-5\" style=\"max-width: 800px;\">
  <section class=\"features-section m-3\" >
      <div class=\"row justify-content-center\">
        <div class=\"col-12 col-lg-8\" >
          <div class=\"text-container\" >
            <h2 class=\"text-center section-title\">Backoffice ...</h2>
            <ul class=\"text-center list-group\">
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"{{ path('app_back_users') }}\">Gestion des Utilisateurs</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"{{ path('app_back_articles') }}\">Gestion des Articles</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"{{ path('app_back_quiz') }}\">Gestion des Quiz</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"{{ path('app_back_reward') }}\">Gestion des récompenses</a>
              <a class=\"list-group-item mb-2 btn btn-rounded btn-quiz\" href=\"{{ path('app_back_gif') }}\">Gestion des GIF/Musique</a>
            </ul>
          </div>
        </div>
      </div>
  </section>
</div>
{% endblock %}
", "back-office/homeBackOffice.html.twig", "/var/www/html/projet-12-coffee-lover/templates/back-office/homeBackOffice.html.twig");
    }
}
