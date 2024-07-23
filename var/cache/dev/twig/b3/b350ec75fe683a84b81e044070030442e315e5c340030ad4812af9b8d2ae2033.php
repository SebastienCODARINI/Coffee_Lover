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

/* paginator/knp_template.html.twig */
class __TwigTemplate_29d903e3a64aa6768f1e7412c286a48ee7fafedf96b8fee765d61e525df8d077 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paginator/knp_template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paginator/knp_template.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "  <ul class=\"pagination\">
    ";
            // line 3
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 3, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 3, $this->source); })())))) {
                // line 4
                echo "      <li class=\"waves-effect disabled\">
        ";
                // line 6
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 6, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 6, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 6, $this->source); })())])), "html", null, true);
                echo "\"><i class=\"material-icons\">1</i></a>
      </li>
    ";
            } else {
                // line 9
                echo "      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">first_page</i></a>
      </li>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            if (array_key_exists("previous", $context)) {
                // line 15
                echo "      <li class=\"waves-effect\">
        <a rel=\"prev\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 16, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 16, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 16, $this->source); })())])), "html", null, true);
                echo "\"><i class=\"material-icons\"><<</i></a>
      </li>
    ";
            } else {
                // line 19
                echo "      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">>>knjkl</i></a>
      </li>
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "      ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 25, $this->source); })()))) {
                    // line 26
                    echo "        <li class=\"waves-effect\">
          <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 27, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 27, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 27, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
        </li>
      ";
                } else {
                    // line 30
                    echo "        <li class=\"active\">
          <a href=\"#!\">";
                    // line 31
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
        </li>
      ";
                }
                // line 34
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
    ";
            // line 36
            if (array_key_exists("next", $context)) {
                // line 37
                echo "      <li class=\"waves-effect\">
        ";
                // line 39
                echo "        <a rel=\"next\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 39, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 39, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 39, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 39, $this->source); })())])), "html", null, true);
                echo "\"><i class=\"material-icons\">>></i></a>
      </li>
    ";
            } else {
                // line 42
                echo "      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">>></i></a>
      </li>
    ";
            }
            // line 46
            echo "
    ";
            // line 47
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 47, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 47, $this->source); })())))) {
                // line 48
                echo "      <li class=\"waves-effect\">
        <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 49, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 49, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 49, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 49, $this->source); })())])), "html", null, true);
                echo "\"><i class=\"material-icons\">end</i></a>
      </li>
    ";
            } else {
                // line 52
                echo "      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">last_page</i></a>
      </li>
    ";
            }
            // line 56
            echo "  </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "paginator/knp_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 56,  157 => 52,  151 => 49,  148 => 48,  146 => 47,  143 => 46,  137 => 42,  130 => 39,  127 => 37,  125 => 36,  122 => 35,  116 => 34,  110 => 31,  107 => 30,  99 => 27,  96 => 26,  93 => 25,  89 => 24,  86 => 23,  80 => 19,  74 => 16,  71 => 15,  69 => 14,  66 => 13,  60 => 9,  53 => 6,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}
  <ul class=\"pagination\">
    {% if first is defined and current != first %}
      <li class=\"waves-effect disabled\">
        {# ! #}
        <a href=\"{{ path(route, query|merge({ (pageParameterName): first })) }}\"><i class=\"material-icons\">1</i></a>
      </li>
    {% else %}
      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">first_page</i></a>
      </li>
    {% endif %}

    {% if previous is defined %}
      <li class=\"waves-effect\">
        <a rel=\"prev\" href=\"{{ path(route, query|merge({ (pageParameterName): previous })) }}\"><i class=\"material-icons\"><<</i></a>
      </li>
    {% else %}
      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">>>knjkl</i></a>
      </li>
    {% endif %}

    {% for page in pagesInRange %}
      {% if page != current %}
        <li class=\"waves-effect\">
          <a href=\"{{ path(route, query|merge({ (pageParameterName): page })) }}\">{{ page }}</a>
        </li>
      {% else %}
        <li class=\"active\">
          <a href=\"#!\">{{ page }}</a>
        </li>
      {% endif %}
    {% endfor %}

    {% if next is defined %}
      <li class=\"waves-effect\">
        {# ! #}
        <a rel=\"next\" href=\"{{ path(route, query|merge({ (pageParameterName): next })) }}\"><i class=\"material-icons\">>></i></a>
      </li>
    {% else %}
      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">>></i></a>
      </li>
    {% endif %}

    {% if last is defined and current != last %}
      <li class=\"waves-effect\">
        <a href=\"{{ path(route, query|merge({ (pageParameterName): last })) }}\"><i class=\"material-icons\">end</i></a>
      </li>
    {% else %}
      <li class=\"disabled d-none\">
        <a href=\"#!\"><i class=\"material-icons\">last_page</i></a>
      </li>
    {% endif %}
  </ul>
{% endif %}
", "paginator/knp_template.html.twig", "/var/www/html/projet-12-coffee-lover/templates/paginator/knp_template.html.twig");
    }
}
