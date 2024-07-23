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

/* front-office/main/mentionLegal.html.twig */
class __TwigTemplate_4aa6e52745afbc13abcd47971c47402e9a9019655c7119e77dd67f8cfc6982c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/main/mentionLegal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/main/mentionLegal.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front-office/main/mentionLegal.html.twig", 1);
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
        echo "\tMentions légales
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div id=\"scroll-point\" class=\"my-4\">
</div>
<section class=\"features-section m-4\">
<h2 class=\"h1-responsive font-weight-bold text-center my-4\">Mentions Légales</h2>
\t<div class=\"container text-center mx-auto\">
\t\t<h2 class=\"section-title mb-6\"></h2>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-15 col-lg-6\">
\t\t\t\t<img src=\"https://i.ibb.co/2FjZbYm/403.png\" class=\"img-fluid mb-4\"/>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<p class=\"section-text \">
    En vigueur au 13/12/2023
    </p>
\t<p class=\"section-text mb-2\">
        Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
        Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
        visiteurs, ci-après l\"\"Utilisateur\", du site coffee-lover.com , ci-après le \"Site\", les présentes mentions
        légales.
\t</p>
\t<p class=\"section-text mb-2 mb-3\">
\t\tLa connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans
        réserve des présentes mentions légales.
\t</p>
\t<div class=\"section-text mt-2 mb-3\">
        Ces dernières sont accessibles sur le Site à la rubrique « Mentions légales ».
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 1 - L'EDITEUR</h3>
    <div class=\"section-text mt-2\">
        L'édition du Site est assurée par coffee-lover SAS au capital de 10000 euros, immatriculée au
        Registre du Commerce et des Sociétés de paris sous le numéro 123456789 dont le siège social est
        situé au 56 rue cappuccino,
\t</div>
    <div class=\"section-text mt-2\"> Numéro de téléphone 0158624895,
\t</div>
    <div class=\"section-text mt-2\">
        Adresse e-mail : coffee-lover@bao.com.
\t</div>
    <div class=\"section-text mt-2\">
        N° de TVA intracommunautaire : FR 75 123456789
\t</div>
    <div class=\"section-text mt-2\">
        Le Directeur de la publication est John Coffee
\t</div>
    <div class=\"section-text mt-2 mb-3\">
        ci-après l'\"Editeur\".
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 2 - L'HEBERGEUR</h3>
    <div class=\"section-text mt-2 mb-3\">
        L'hébergeur du Site est la société : Maracafé, dont le siège social est situé au 12 place de
        l'Espresso , avec le numéro de téléphone : 01 23 45 67 89 + contact@maracafe.fr
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 3 - ACCES AU SITE</h3>
    <div class=\"section-text mt-2\">
        Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
        programmée ou non et pouvant découlant d’une nécessité de maintenance.
\t</div>
    <div class=\"section-text mt-2 mb-3\">
        En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 4 - COLLECTE DES DONNEES</h3>
    <div class=\"section-text mt-2\">
        Le Site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect
        de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers
        et aux libertés.
\t</div>
    <div class=\"section-text mt-2\">
        En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit
        d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur
        exerce ce droit :
            <li>via un formulaire de contact ;</li>
\t</div>
    <div class=\"section-text mt-2\">
        Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
        sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
        telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.
\t</div>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front-office/main/mentionLegal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 9,  80 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tMentions légales
{% endblock %}


{% block body %}
\t<div id=\"scroll-point\" class=\"my-4\">
</div>
<section class=\"features-section m-4\">
<h2 class=\"h1-responsive font-weight-bold text-center my-4\">Mentions Légales</h2>
\t<div class=\"container text-center mx-auto\">
\t\t<h2 class=\"section-title mb-6\"></h2>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-15 col-lg-6\">
\t\t\t\t<img src=\"https://i.ibb.co/2FjZbYm/403.png\" class=\"img-fluid mb-4\"/>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<p class=\"section-text \">
    En vigueur au 13/12/2023
    </p>
\t<p class=\"section-text mb-2\">
        Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
        Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
        visiteurs, ci-après l\"\"Utilisateur\", du site coffee-lover.com , ci-après le \"Site\", les présentes mentions
        légales.
\t</p>
\t<p class=\"section-text mb-2 mb-3\">
\t\tLa connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans
        réserve des présentes mentions légales.
\t</p>
\t<div class=\"section-text mt-2 mb-3\">
        Ces dernières sont accessibles sur le Site à la rubrique « Mentions légales ».
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 1 - L'EDITEUR</h3>
    <div class=\"section-text mt-2\">
        L'édition du Site est assurée par coffee-lover SAS au capital de 10000 euros, immatriculée au
        Registre du Commerce et des Sociétés de paris sous le numéro 123456789 dont le siège social est
        situé au 56 rue cappuccino,
\t</div>
    <div class=\"section-text mt-2\"> Numéro de téléphone 0158624895,
\t</div>
    <div class=\"section-text mt-2\">
        Adresse e-mail : coffee-lover@bao.com.
\t</div>
    <div class=\"section-text mt-2\">
        N° de TVA intracommunautaire : FR 75 123456789
\t</div>
    <div class=\"section-text mt-2\">
        Le Directeur de la publication est John Coffee
\t</div>
    <div class=\"section-text mt-2 mb-3\">
        ci-après l'\"Editeur\".
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 2 - L'HEBERGEUR</h3>
    <div class=\"section-text mt-2 mb-3\">
        L'hébergeur du Site est la société : Maracafé, dont le siège social est situé au 12 place de
        l'Espresso , avec le numéro de téléphone : 01 23 45 67 89 + contact@maracafe.fr
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 3 - ACCES AU SITE</h3>
    <div class=\"section-text mt-2\">
        Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
        programmée ou non et pouvant découlant d’une nécessité de maintenance.
\t</div>
    <div class=\"section-text mt-2 mb-3\">
        En cas de modification, interruption ou suspension du Site, l'Editeur ne saurait être tenu responsable.
\t</div>
    <h3 class=\"section-subtitle mb-3\">ARTICLE 4 - COLLECTE DES DONNEES</h3>
    <div class=\"section-text mt-2\">
        Le Site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect
        de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers
        et aux libertés.
\t</div>
    <div class=\"section-text mt-2\">
        En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit
        d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur
        exerce ce droit :
            <li>via un formulaire de contact ;</li>
\t</div>
    <div class=\"section-text mt-2\">
        Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
        sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
        telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.
\t</div>
</section>

{% endblock %}
", "front-office/main/mentionLegal.html.twig", "/var/www/html/projet-12-coffee-lover/templates/front-office/main/mentionLegal.html.twig");
    }
}
