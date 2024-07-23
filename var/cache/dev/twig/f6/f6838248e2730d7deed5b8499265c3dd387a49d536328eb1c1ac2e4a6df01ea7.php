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

/* front-office/quiz/result.html.twig */
class __TwigTemplate_8e6bda607ca5c4d297f289002d57b000cc56ab5e1f20d8a373e06291f9115857 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/quiz/result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/quiz/result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front-office/quiz/result.html.twig", 1);
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
        echo "  Résultat du quiz
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
        echo "<section class=\" container-fluid  center\" >
  <div class=\"container-fluid\">
    <div id=\"scroll-point\" class=\"my-4\">";
        // line 10
        echo "<br>";
        echo " ";
        echo "</br>";
        echo "</div>

      
    <h1 class=\"text-center mb-4\">Résultat de votre Quiz</h1>
  <div class=\"col container-fluid mb-4 \">
    <div class=\"card-center-fluid features-section mx-auto mb-4\" style=\"max-width: 28rem;\">
      <p class=\"card-text text-center fw-bolder p-2 fs-1\">résultat :
        ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "/10</p>
      ";
        // line 18
        if (((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 18, $this->source); })()) <= 6)) {
            // line 19
            echo "        <p class=\"text-center p-1\">Chat! C'est pas terrible tu peux faire mieux !</p>
        <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gifs/defeat.png"), "html", null, true);
            echo "\" class=\"img-fluid h-auto w-auto\" id=\"img-quiz\" alt=\"defeat\" />
        <audio src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/soundstracks/defeat_1703063012_6582ade46470d.mp3"), "html", null, true);
            echo "\" autoplay></audio>
        <div class=\"card-body my-4 text-center\">
          <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie", ["categorySlug" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 23, $this->source); })()), "link", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-quiz\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</a>
        </div>
      ";
        } else {
            // line 26
            echo "     
        <p class=\"text-center p-1\">Miaou ! Chat c'est fort, tu as vraiment fait un bon score !</p>
         <div class=\" d-flex\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gifs/succes.png"), "html", null, true);
            echo "\" class=\"img-fluid h-auto w-auto\" id=\"img-quiz\" alt=\"succes\" />
        </div>
        <div class=\"card-body my-4 text-center\">
          <p>Chatpristi! tu as gagné une magnifique récompense</p>
          <a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil");
            echo "\" class=\"btn btn-quiz\">Mon profil</a>
        </div>
      ";
        }
        // line 36
        echo "    </div>
  </div>
  </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front-office/quiz/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  144 => 33,  137 => 29,  132 => 26,  124 => 23,  119 => 21,  115 => 20,  112 => 19,  110 => 18,  106 => 17,  94 => 10,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Résultat du quiz
{% endblock %}

{% block body %}
<section class=\" container-fluid  center\" >
  <div class=\"container-fluid\">
    <div id=\"scroll-point\" class=\"my-4\">{{ '<br>'|raw }} {{ '</br>'|raw }}</div>

      
    <h1 class=\"text-center mb-4\">Résultat de votre Quiz</h1>
  <div class=\"col container-fluid mb-4 \">
    <div class=\"card-center-fluid features-section mx-auto mb-4\" style=\"max-width: 28rem;\">
      <p class=\"card-text text-center fw-bolder p-2 fs-1\">résultat :
        {{ score }}/10</p>
      {% if score <= 6 %}
        <p class=\"text-center p-1\">Chat! C'est pas terrible tu peux faire mieux !</p>
        <img src=\"{{ asset('images/gifs/defeat.png') }}\" class=\"img-fluid h-auto w-auto\" id=\"img-quiz\" alt=\"defeat\" />
        <audio src=\"{{ asset('images/soundstracks/defeat_1703063012_6582ade46470d.mp3') }}\" autoplay></audio>
        <div class=\"card-body my-4 text-center\">
          <a href=\"{{ path('app_categorie', { categorySlug: quiz.link }) }}\" class=\"btn btn-quiz\">{{ quiz.title }}</a>
        </div>
      {% else %}
     
        <p class=\"text-center p-1\">Miaou ! Chat c'est fort, tu as vraiment fait un bon score !</p>
         <div class=\" d-flex\">
        <img src=\"{{ asset('images/gifs/succes.png') }}\" class=\"img-fluid h-auto w-auto\" id=\"img-quiz\" alt=\"succes\" />
        </div>
        <div class=\"card-body my-4 text-center\">
          <p>Chatpristi! tu as gagné une magnifique récompense</p>
          <a href=\"{{ path('app_profil') }}\" class=\"btn btn-quiz\">Mon profil</a>
        </div>
      {% endif %}
    </div>
  </div>
  </div>
</section>
{% endblock %}
", "front-office/quiz/result.html.twig", "/var/www/html/projet-12-coffee-lover/templates/front-office/quiz/result.html.twig");
    }
}
