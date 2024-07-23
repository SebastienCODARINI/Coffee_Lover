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

/* back-office/article/list.html.twig */
class __TwigTemplate_6035821fd7ac1b3f4be73f6f17c508c4130eae92ccd5d1d8c1553a4862d1e60d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/article/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/article/list.html.twig"));

        $this->parent = $this->loadTemplate("back-office/base.html.twig", "back-office/article/list.html.twig", 1);
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
        echo "  Liste des articles
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
        echo "  <div class=\"container center mb-5\" style=\"max-width: 30rem;\">
    <section class=\"features-section px-1 mb-4\">
      <div class=\"container-fluid mx-auto\">
        <h2 class=\"section-title text-center mb-8\">Liste des articles</h2>

        <table class=\"container-fluid table-hover\">
          <thead class=\"thead-dark\">
            <tr>
              <th scope=\"col\">Titre</th>
              <th scope=\"col\">Date</th>
              <th scope=\"col\">Actions</th>
            </tr>
          </thead>
          <tbody class=\"table-group-divider\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 23
            echo "              <tr class=\"table-group-divider py-1\">
                <td class=\"section mb-3\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td class=\"text-secondary mb-3\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>
                  <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_articles_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-rounded btn-quiz bi bi-pencil m-2\"></a>
                  ";
            // line 28
            $this->loadTemplate("fragments/_confirm_action.html.twig", "back-office/article/list.html.twig", 28)->display(twig_array_merge($context, ["confirmationMessage" => "Voulez-vous vraiment supprimer ?", "actionUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_articles_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 28)]), "buttonLabel" => ""]));
            // line 29
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "          </tbody>
        </table>
        <div class=\"pagination mx-auto ms-2\">";
        // line 34
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 34, $this->source); })()));
        echo "</div>
        <a type=\"button\" class=\"btn btn-rounded btn-quiz ms-2\" data-mdb-ripple-init data-mdb-ripple-color=\"dark\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_articles_add");
        echo "\">Ajouter un nouvel article</a>
      </div>
    </section>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back-office/article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 35,  161 => 34,  157 => 32,  141 => 29,  139 => 28,  135 => 27,  130 => 25,  126 => 24,  123 => 23,  106 => 22,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back-office/base.html.twig' %}

{% block title %}
  Liste des articles
{% endblock %}

{% block body %}
  <div class=\"container center mb-5\" style=\"max-width: 30rem;\">
    <section class=\"features-section px-1 mb-4\">
      <div class=\"container-fluid mx-auto\">
        <h2 class=\"section-title text-center mb-8\">Liste des articles</h2>

        <table class=\"container-fluid table-hover\">
          <thead class=\"thead-dark\">
            <tr>
              <th scope=\"col\">Titre</th>
              <th scope=\"col\">Date</th>
              <th scope=\"col\">Actions</th>
            </tr>
          </thead>
          <tbody class=\"table-group-divider\">
            {% for article in pagination %}
              <tr class=\"table-group-divider py-1\">
                <td class=\"section mb-3\">{{ article.title }}</td>
                <td class=\"text-secondary mb-3\">{{ article.getCreatedAt|date('d-m-Y') }}</td>
                <td>
                  <a href=\"{{ path('app_back_articles_edit', { id: article.id }) }}\" class=\"btn btn-rounded btn-quiz bi bi-pencil m-2\"></a>
                  {% include 'fragments/_confirm_action.html.twig' with { confirmationMessage: 'Voulez-vous vraiment supprimer ?', actionUrl: path('app_back_articles_delete', { id: article.id }), buttonLabel: '' } %}
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
        <div class=\"pagination mx-auto ms-2\">{{ knp_pagination_render(pagination) }}</div>
        <a type=\"button\" class=\"btn btn-rounded btn-quiz ms-2\" data-mdb-ripple-init data-mdb-ripple-color=\"dark\" href=\"{{ path('app_back_articles_add') }}\">Ajouter un nouvel article</a>
      </div>
    </section>
  </div>
{% endblock %}
", "back-office/article/list.html.twig", "/var/www/html/projet-12-coffee-lover/templates/back-office/article/list.html.twig");
    }
}
