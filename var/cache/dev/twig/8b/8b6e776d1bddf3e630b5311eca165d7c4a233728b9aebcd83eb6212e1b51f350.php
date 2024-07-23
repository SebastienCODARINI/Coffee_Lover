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

/* front-office/article/list.html.twig */
class __TwigTemplate_c1f78aedfaeca5ad66aa4ba74849b3e985e0b14388c21b2b1ffc5a1f23158cec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/article/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/article/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front-office/article/list.html.twig", 1);
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

        echo "Articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div id=\"scroll-point\" class=\"my-4\">";
        // line 7
        echo "";
        echo "</div>
    <section class=\"features-section m-4\" >
\t\t<div class=\"container overflow-hidden\" >
\t\t\t<div class=\"row g-4\">
              <h1 class=\"text-center fw-bolder text-dark p-5 mb-4\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 12, $this->source); })()));
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
            // line 13
            echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"row align-items-center ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14) % 2 != 0)) {
                echo "gx-md-4";
            } else {
                echo "flex-row-reverse gx-xl-5";
            }
            echo " article-card mb-4\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"img-wrapper position-relative bsb-hover-push \">
\t\t\t\t\t\t\t\t";
            // line 17
            if ($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "pictureFile")) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["categorySlug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 18), "slug", [], "any", false, false, false, 18), "articleSlug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\"><img alt=\"Mobirise Website Builder\" class=\"img-fluid rounded mb-4\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["article"], "pictureFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 18), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["categorySlug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 20), "slug", [], "any", false, false, false, 20), "articleSlug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\"><img alt=\"Mobirise Website Builder\" class=\"img-fluid rounded mb-4\" src=\"https://i.ibb.co/MBGNWWD/ibrick.png\"></a>
\t\t\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2 class=\"h3 mb-3\"><a class=\"link-dark text-decoration-none\" href=\"#!\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</a></h2>
\t\t\t\t\t\t\t\t\t<p class=\"mb-3\">";
            // line 28
            echo twig_escape_filter($this->env, (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 28), 0, 150) . "..."), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">Créé le : ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getCreatedAt", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true);
            echo "</p>";
            if (twig_get_attribute($this->env, $this->source, $context["article"], "getUpdatedAt", [], "any", false, false, false, 29)) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">Mis à jour le : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getUpdatedAt", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
                echo "</p>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t\t\t<div class=\"section-btn mt-3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-color=\"white\" data-mdb-ripple-init=\"\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["categorySlug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 32), "slug", [], "any", false, false, false, 32), "articleSlug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Lire la suite</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>";
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
        // line 38
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front-office/article/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 38,  177 => 32,  174 => 31,  169 => 30,  165 => 29,  161 => 28,  157 => 27,  150 => 22,  144 => 20,  134 => 18,  132 => 17,  122 => 14,  119 => 13,  102 => 12,  98 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles{% endblock %}

{% block body %}

<div id=\"scroll-point\" class=\"my-4\">{{ ''|raw }}</div>
    <section class=\"features-section m-4\" >
\t\t<div class=\"container overflow-hidden\" >
\t\t\t<div class=\"row g-4\">
              <h1 class=\"text-center fw-bolder text-dark p-5 mb-4\">{{ category.title }}</h1>
\t\t\t\t{% for article in articles %}
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"row align-items-center {% if loop.index is odd %}gx-md-4{% else %}flex-row-reverse gx-xl-5{% endif %} article-card mb-4\">
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t<div class=\"img-wrapper position-relative bsb-hover-push \">
\t\t\t\t\t\t\t\t{% if vich_uploader_asset(article, 'pictureFile') %}
\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_article_show',{'categorySlug':article.category.slug,'articleSlug':article.slug})}}\"><img alt=\"Mobirise Website Builder\" class=\"img-fluid rounded mb-4\" src=\"{{ vich_uploader_asset(article, 'pictureFile') }}\" alt=\"{{ article.title }}\"></a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_article_show',{'categorySlug':article.category.slug,'articleSlug':article.slug})}}\"><img alt=\"Mobirise Website Builder\" class=\"img-fluid rounded mb-4\" src=\"https://i.ibb.co/MBGNWWD/ibrick.png\"></a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h2 class=\"h3 mb-3\"><a class=\"link-dark text-decoration-none\" href=\"#!\">{{article.title}}</a></h2>
\t\t\t\t\t\t\t\t\t<p class=\"mb-3\">{{ (article.content|slice(0, 150)) ~ '...' }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">Créé le : {{article.getCreatedAt|date(\"d-m-Y\")}}</p>{% if article.getUpdatedAt %}
\t\t\t\t\t\t\t\t\t<p class=\"text-secondary mb-1\">Mis à jour le : {{article.getUpdatedAt|date(\"d-m-Y\")}}</p>{% endif %}
\t\t\t\t\t\t\t\t\t<div class=\"section-btn mt-3\">
\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-color=\"white\" data-mdb-ripple-init=\"\" href=\"{{path('app_article_show',{'categorySlug':article.category.slug,'articleSlug':article.slug})}}\">Lire la suite</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}

", "front-office/article/list.html.twig", "/var/www/html/projet-12-coffee-lover/templates/front-office/article/list.html.twig");
    }
}
