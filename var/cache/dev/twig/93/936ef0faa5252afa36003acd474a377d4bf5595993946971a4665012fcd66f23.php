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

/* front-office/article/show.html.twig */
class __TwigTemplate_e8b8cf57108bb2b52cc425405ca936be6dc8b5eaf50acc398a4257d0be014e9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/article/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front-office/article/show.html.twig", 1);
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
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
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
        echo "<div id=\"scroll-point\" class=\"my-4\">";
        echo "</br>";
        echo "</div>
  <div class=\"container-fluid center mb-5\" style=\"max-width: 80rem;\">
    <section class=\"features-section m-4\">
      <div class=\"container text-center mx-auto\">
        <h2 class=\"section-title my-16\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
          <div class=\"row justify-content-center\">
            <div class=\"col-15 col-lg-6 \">
              ";
        // line 15
        if ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "pictureFile")) {
            // line 16
            echo "\t\t\t\t\t\t\t  <img alt=\"Mobirise Website Builder\" class=\"img-fluid  mb-4\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "pictureFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
\t\t\t\t\t    ";
        } else {
            // line 18
            echo "\t\t\t\t\t\t\t  <img src=\"https://i.ibb.co/MBGNWWD/ibrick.png\" alt=\"Mobirise Website Builder\" class=\"img-fluid my-4\" />
\t\t\t\t      ";
        }
        // line 19
        echo "    
            </div>
          </div>
      </div>
    <h3 class=\"section-subtitle my-4 text-center\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "subtitle", [], "any", false, false, false, 23), "html", null, true);
        echo "</h3>
      <p class=\"section-text m-4\">";
        // line 24
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24), "html", null, true));
        echo "</p>
      <p class=\"text-secondary mb-1\">
        Publié le \"";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true);
        echo "\"
          ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27)) {
            echo " Par 
          ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "firstname", [], "any", false, false, false, 28), "html", null, true);
            echo "
          ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "lastname", [], "any", false, false, false, 29), "html", null, true);
            echo "
          ";
        }
        // line 31
        echo "      </p>
      <div class=\"section-btn text-center mt-3\">
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_list");
        echo "\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Venez tester vos connaissances</a>
      </div>
    </section>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front-office/article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 33,  152 => 31,  147 => 29,  143 => 28,  139 => 27,  135 => 26,  130 => 24,  126 => 23,  120 => 19,  116 => 18,  108 => 16,  106 => 15,  100 => 12,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block title %}
  {{ article.title }}
{% endblock %}

{% block body %}
<div id=\"scroll-point\" class=\"my-4\">{{ '</br>'|raw }}</div>
  <div class=\"container-fluid center mb-5\" style=\"max-width: 80rem;\">
    <section class=\"features-section m-4\">
      <div class=\"container text-center mx-auto\">
        <h2 class=\"section-title my-16\">{{ article.title }}</h2>
          <div class=\"row justify-content-center\">
            <div class=\"col-15 col-lg-6 \">
              {% if vich_uploader_asset(article, 'pictureFile') %}
\t\t\t\t\t\t\t  <img alt=\"Mobirise Website Builder\" class=\"img-fluid  mb-4\" src=\"{{ vich_uploader_asset(article, 'pictureFile') }}\" alt=\"{{ article.title }}\">
\t\t\t\t\t    {% else %}
\t\t\t\t\t\t\t  <img src=\"https://i.ibb.co/MBGNWWD/ibrick.png\" alt=\"Mobirise Website Builder\" class=\"img-fluid my-4\" />
\t\t\t\t      {% endif %}    
            </div>
          </div>
      </div>
    <h3 class=\"section-subtitle my-4 text-center\">{{ article.subtitle }}</h3>
      <p class=\"section-text m-4\">{{ article.content|nl2br }}</p>
      <p class=\"text-secondary mb-1\">
        Publié le \"{{ article.getCreatedAt|date('d-m-Y') }}\"
          {% if article.user %} Par 
          {{ article.user.firstname }}
          {{ article.user.lastname }}
          {% endif %}
      </p>
      <div class=\"section-btn text-center mt-3\">
        <a href=\"{{ path('app_quiz_list') }}\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Venez tester vos connaissances</a>
      </div>
    </section>
  </div>
</div>
{% endblock %}
", "front-office/article/show.html.twig", "/var/www/html/projet-12-coffee-lover/templates/front-office/article/show.html.twig");
    }
}
