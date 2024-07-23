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

/* fragments/_confirm_action.html.twig */
class __TwigTemplate_bf3912ebc056cad1e86b97b318b3f3978fece1e3f90f98481ef8637157b26e53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragments/_confirm_action.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fragments/_confirm_action.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"btn btn-rounded btn-quiz bi bi-trash m-2\" onclick=\"confirmAction('";
        echo twig_escape_filter($this->env, (isset($context["confirmationMessage"]) || array_key_exists("confirmationMessage", $context) ? $context["confirmationMessage"] : (function () { throw new RuntimeError('Variable "confirmationMessage" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["actionUrl"]) || array_key_exists("actionUrl", $context) ? $context["actionUrl"] : (function () { throw new RuntimeError('Variable "actionUrl" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, (isset($context["buttonLabel"]) || array_key_exists("buttonLabel", $context) ? $context["buttonLabel"] : (function () { throw new RuntimeError('Variable "buttonLabel" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</a>
";
        // line 3
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("path/to/sweetalert2.all.min.js"), "html", null, true);
        echo "\"></script>
<script>
  function confirmAction(message, url) {
    Swal.fire({
      title: 'Confirmation',
      text: message,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#770708',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Oui, je confirme',
      cancelButtonText: 'Annuler'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url
      }
    })
  }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fragments/_confirm_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"#\" class=\"btn btn-rounded btn-quiz bi bi-trash m-2\" onclick=\"confirmAction('{{ confirmationMessage }}', '{{ actionUrl }}');\">{{ buttonLabel }}</a>
{# ! Ici, template de la confirmation de suppression, que j'inclus dans mes base.html.twig #}
<script src=\"{{ asset('path/to/sweetalert2.all.min.js') }}\"></script>
<script>
  function confirmAction(message, url) {
    Swal.fire({
      title: 'Confirmation',
      text: message,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#770708',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Oui, je confirme',
      cancelButtonText: 'Annuler'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url
      }
    })
  }
</script>
", "fragments/_confirm_action.html.twig", "/var/www/html/projet-12-coffee-lover/templates/fragments/_confirm_action.html.twig");
    }
}
