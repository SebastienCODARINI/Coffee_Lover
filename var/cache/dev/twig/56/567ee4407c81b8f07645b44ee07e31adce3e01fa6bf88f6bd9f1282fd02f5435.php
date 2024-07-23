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

/* back-office/quiz/show.html.twig */
class __TwigTemplate_640ad58fa6131a82fc2522c1bbe78949ff341f543d1dfc9b5f9b1f72b459e71c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/quiz/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/quiz/show.html.twig"));

        $this->parent = $this->loadTemplate("back-office/base.html.twig", "back-office/quiz/show.html.twig", 1);
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
        echo "  Liste des questions
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
        echo "  <div class=\"container center mb-5 \" style=\"max-width: 45rem;\">
    <section class=\"features-section px-1 m-4\">
      <div class=\"container-fluid mx-auto text\">
        <h2 class=\"section-title mb-8 text-center\">Liste des questions</h2>
        <table class=\"justify-content-center table-hover\">
          <thead class=\"thead-dark\">
            <tr>
              <th scope=\"col\">Titre</th>
              <th scope=\"col\">Actions</th>
            </tr>
          </thead>
          <tbody class=\"table-group-divider\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 20, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 21
            echo "              <tr class=\"table-group-divider py-1\">
                <td class=\"text mb-1\" scope=\"row-dark\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "getTextQuestion", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>

                <td class=\"align-middle\">
                  <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_quiz_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-quiz bi bi-pencil m-2\"></a>
                  ";
            // line 26
            $this->loadTemplate("fragments/_confirm_action.html.twig", "back-office/quiz/show.html.twig", 26)->display(twig_array_merge($context, ["confirmationMessage" => "Voulez-vous vraiment supprimer ?", "actionUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_quiz_delete", ["quizId" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "questionId" => twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 26), "quizTitle" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26)]), "buttonLabel" => ""]));
            // line 27
            echo "                </td>
              </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "          </tbody>
        </table>
      </div>
      <div class=\"pagination mx-auto ms-2\">";
        // line 33
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 33, $this->source); })()));
        echo "</div>

      <a type=\"button\" class=\"btn btn-rounded btn-quiz ms-2\" data-mdb-ripple-init data-mdb-ripple-color=\"dark\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_quiz_add");
        echo "\">Ajouter de nouvelle question</a>
    </section>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back-office/quiz/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 35,  157 => 33,  152 => 30,  136 => 27,  134 => 26,  130 => 25,  124 => 22,  121 => 21,  104 => 20,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back-office/base.html.twig' %}

{% block title %}
  Liste des questions
{% endblock %}

{% block body %}
  <div class=\"container center mb-5 \" style=\"max-width: 45rem;\">
    <section class=\"features-section px-1 m-4\">
      <div class=\"container-fluid mx-auto text\">
        <h2 class=\"section-title mb-8 text-center\">Liste des questions</h2>
        <table class=\"justify-content-center table-hover\">
          <thead class=\"thead-dark\">
            <tr>
              <th scope=\"col\">Titre</th>
              <th scope=\"col\">Actions</th>
            </tr>
          </thead>
          <tbody class=\"table-group-divider\">
            {% for question in pagination %}
              <tr class=\"table-group-divider py-1\">
                <td class=\"text mb-1\" scope=\"row-dark\">{{ question.getTextQuestion }}</td>

                <td class=\"align-middle\">
                  <a href=\"{{ path('app_back_quiz_edit', { id: question.id }) }}\" class=\"btn btn-rounded btn-quiz bi bi-pencil m-2\"></a>
                  {% include 'fragments/_confirm_action.html.twig' with { confirmationMessage: 'Voulez-vous vraiment supprimer ?', actionUrl: path('app_back_quiz_delete', { quizId: quiz.id, questionId: question.id, quizTitle: quiz.title }), buttonLabel: '' } %}
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
      <div class=\"pagination mx-auto ms-2\">{{ knp_pagination_render(pagination) }}</div>

      <a type=\"button\" class=\"btn btn-rounded btn-quiz ms-2\" data-mdb-ripple-init data-mdb-ripple-color=\"dark\" href=\"{{ path('app_back_quiz_add') }}\">Ajouter de nouvelle question</a>
    </section>
  </div>
{% endblock %}
", "back-office/quiz/show.html.twig", "/var/www/html/projet-12-coffee-lover/templates/back-office/quiz/show.html.twig");
    }
}
