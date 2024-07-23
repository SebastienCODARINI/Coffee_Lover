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

/* front-office/user/profil.html.twig */
class __TwigTemplate_a87feb6ff9d81d6b387a79b16fcf6c688960aa7ed83acee66ce4b7fdd7cbbf5e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/user/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/user/profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front-office/user/profil.html.twig", 1);
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
        echo "  Profil
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
        echo "  <div id=\"scroll-point\" class=\"my-4\">";
        echo "<br>";
        echo "</div>
  <section class=\"features-section m-4 py-3 py-md-5\">
    <div class=\"container mt-4\">
      <div class=\"card mb-4\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-md-8\">
              <h1 class=\"mb-4\">Mon Profil</h1>
              <p class=\"lead\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "firstname", [], "any", false, false, false, 16), "html", null, true);
        echo "
                ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "lastname", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
              <p class=\"text-muted\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "email", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card mb-4\">
        <div class=\"card-body\">
          <h2 class=\"mb-4\">Mes Scores de Quiz</h2>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th scope=\"col\">Quiz</th>
                  <th scope=\"col\">Score</th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "play", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["play"]) {
            // line 37
            echo "                  <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["play"], "quiz", [], "any", false, false, false, 38), "title", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, max([0 => twig_get_attribute($this->env, $this->source, $context["play"], "score", [], "any", false, false, false, 39)]), "html", null, true);
            echo "</td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['play'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class=\"card\">
        <div class=\"card-body\">
          <h2 class=\"mb-4\">Mes Récompenses de Quiz</h2>
          <div class=\"row\">
            ";
        // line 52
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "reward", [], "any", false, false, false, 52))) {
            // line 53
            echo "              <div class=\"col text-center\">
                <h5 class=\"text-muted\">Vous n'avez pas encore de récompense. Continuez à participer aux quiz pour en gagner.</h5>
              </div>
            ";
        }
        // line 57
        echo "            ";
        // line 58
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "reward", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
            // line 59
            echo "              <div class=\"col-md-3 mb-3\">
                <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profil_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reward"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"text-decoration-none text-dark\">
                  <div class=\"card h-100\">
                    <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["reward"], "pictureFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reward"], "title", [], "any", false, false, false, 62), "html", null, true);
            echo "\" class=\"card-img-top img-thumbnail\" />
                    <div class=\"card-body\">
                      <p class=\"card-text text-center\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reward"], "title", [], "any", false, false, false, 64), "html", null, true);
            echo "</p>
                    </div>
                  </div>
                </a>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "          </div>
        </div>
      </div>
    </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front-office/user/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 70,  193 => 64,  186 => 62,  181 => 60,  178 => 59,  173 => 58,  171 => 57,  165 => 53,  163 => 52,  151 => 42,  142 => 39,  138 => 38,  135 => 37,  131 => 36,  110 => 18,  106 => 17,  102 => 16,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Profil
{% endblock %}

{% block body %}
  <div id=\"scroll-point\" class=\"my-4\">{{ '<br>'|raw }}</div>
  <section class=\"features-section m-4 py-3 py-md-5\">
    <div class=\"container mt-4\">
      <div class=\"card mb-4\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-md-8\">
              <h1 class=\"mb-4\">Mon Profil</h1>
              <p class=\"lead\">{{ app.user.firstname }}
                {{ app.user.lastname }}</p>
              <p class=\"text-muted\">{{ app.user.email }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class=\"card mb-4\">
        <div class=\"card-body\">
          <h2 class=\"mb-4\">Mes Scores de Quiz</h2>
          <div class=\"table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th scope=\"col\">Quiz</th>
                  <th scope=\"col\">Score</th>
                </tr>
              </thead>
              <tbody>
                {% for play in app.user.play %}
                  <tr>
                    <td>{{ play.quiz.title }}</td>
                    <td>{{ max([play.score]) }}</td>
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class=\"card\">
        <div class=\"card-body\">
          <h2 class=\"mb-4\">Mes Récompenses de Quiz</h2>
          <div class=\"row\">
            {% if app.user.reward is empty %}
              <div class=\"col text-center\">
                <h5 class=\"text-muted\">Vous n'avez pas encore de récompense. Continuez à participer aux quiz pour en gagner.</h5>
              </div>
            {% endif %}
            {# Loop to display pictures of rewards #}
            {% for reward in app.user.reward %}
              <div class=\"col-md-3 mb-3\">
                <a href=\"{{ path('app_profil_show', { id: reward.id }) }}\" class=\"text-decoration-none text-dark\">
                  <div class=\"card h-100\">
                    <img src=\"{{ vich_uploader_asset(reward, 'pictureFile') }}\" alt=\"{{ reward.title }}\" class=\"card-img-top img-thumbnail\" />
                    <div class=\"card-body\">
                      <p class=\"card-text text-center\">{{ reward.title }}</p>
                    </div>
                  </div>
                </a>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  </section>
{% endblock %}
", "front-office/user/profil.html.twig", "/var/www/html/projet-12-coffee-lover/templates/front-office/user/profil.html.twig");
    }
}
