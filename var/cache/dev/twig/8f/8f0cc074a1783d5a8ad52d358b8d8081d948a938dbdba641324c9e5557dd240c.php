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

/* back-office/article/edit.html.twig */
class __TwigTemplate_93fb1c534665e535e209b99c9d5c0755cc2d73451a4d77b0c5d608d75b692dd0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/article/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back-office/article/edit.html.twig"));

        $this->parent = $this->loadTemplate("back-office/base.html.twig", "back-office/article/edit.html.twig", 1);
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

        echo "Modifier un Article
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container-fluid center mb-5\" style=\"max-width: 60rem;\">
\t<div class=\"row justify-content-center features-section m-4\">
\t\t<div class=\"img-fluid\">
\t\t\t<h1 class=\"text-center text-muted fw-bold mb-4\">Modifier un article</h1>

\t\t\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'label', ["label" => "Titre"]);
        echo "
\t\t\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "content", [], "any", false, false, false, 20), 'label', ["label" => "Contenu"]);
        echo "
\t\t\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "subtitle", [], "any", false, false, false, 25), 'label', ["label" => "Sous-titre"]);
        echo "
\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "subtitle", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "category", [], "any", false, false, false, 30), 'label', ["label" => "Sélectionnez une catégorie"]);
        echo "
\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "category", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\" >
\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "pictureFile", [], "any", false, false, false, 35), 'label', ["label" => "Image de l'article, Une URL en http:// ou https://"]);
        echo "
\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "pictureFile", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control img-fluid"]]);
        echo "
\t\t\t\t
\t\t\t\t\t<img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 38, $this->source); })()), "pictureFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), "html", null, true);
        echo "\" class=\"card-img-top img-thumbnail\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"section-btn mt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Modifier</button>
\t\t\t\t</div>
\t\t\t\t";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_end');
        echo "   
\t\t</div>
\t</div>
</div<
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "back-office/article/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 44,  155 => 38,  150 => 36,  146 => 35,  139 => 31,  135 => 30,  128 => 26,  124 => 25,  117 => 21,  113 => 20,  106 => 16,  102 => 15,  96 => 12,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back-office/base.html.twig' %}

{% block title %}Modifier un Article
{% endblock %}

{% block body %}
<div class=\"container-fluid center mb-5\" style=\"max-width: 60rem;\">
\t<div class=\"row justify-content-center features-section m-4\">
\t\t<div class=\"img-fluid\">
\t\t\t<h1 class=\"text-center text-muted fw-bold mb-4\">Modifier un article</h1>

\t\t\t\t{{ form_start(form) }}

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.title, 'Titre') }}
\t\t\t\t\t{{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.content, 'Contenu') }}
\t\t\t\t\t{{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.subtitle, 'Sous-titre') }}
\t\t\t\t\t{{ form_widget(form.subtitle, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.category, 'Sélectionnez une catégorie') }}
\t\t\t\t\t{{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"mb-3\" >
\t\t\t\t\t{{ form_label(form.pictureFile, 'Image de l\\'article, Une URL en http:// ou https://') }}
\t\t\t\t\t{{ form_widget(form.pictureFile, {'attr': {'class': 'form-control img-fluid'}}) }}
\t\t\t\t
\t\t\t\t\t<img src=\"{{ vich_uploader_asset(article, 'pictureFile') }}\" alt=\"{{ article.title }}\" class=\"card-img-top img-thumbnail\" />
\t\t\t\t</div>

\t\t\t\t<div class=\"section-btn mt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Modifier</button>
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}   
\t\t</div>
\t</div>
</div<
{% endblock %}
", "back-office/article/edit.html.twig", "/var/www/html/projet-12-coffee-lover/templates/back-office/article/edit.html.twig");
    }
}
