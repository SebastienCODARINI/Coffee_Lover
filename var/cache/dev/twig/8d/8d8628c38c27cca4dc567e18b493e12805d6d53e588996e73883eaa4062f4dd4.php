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

/* front-office/quiz/show.html.twig */
class __TwigTemplate_c56a7edf33141fd64faf4f2e10f2b71abe2b626bf622fd0591262fb953078593 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front-office/quiz/basequiz.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/quiz/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/quiz/show.html.twig"));

        $this->parent = $this->loadTemplate("front-office/quiz/basequiz.html.twig", "front-office/quiz/show.html.twig", 1);
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
        echo "  QUIZ/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "
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
        echo "  <section class=\"card-center mb-4 mx-auto\" style=\"max-width: 800px;\">
    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_quiz_submit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "title" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\" method=\"post\">
      <div class=\"container my-4\">
        <h1 class=\"text-center fw-bolder text-dark \">Quiz :</h1>
          <h2 class=\"text-center mb-2 fw-bolder text-dark \">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2> 
            <div class=\"card features-section\"> 
              <div class=\"card-body \">
                <div class=\"mb-3\">
                  <h4 class=\"mb-4\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 15, $this->source); })()), "getTextQuestion", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>
                  ";
        // line 16
        $context["responses"] = twig_shuffle_filter(twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 16, $this->source); })()), "responses", [], "any", false, false, false, 16));
        // line 17
        echo "
                  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["responses"]) || array_key_exists("responses", $context) ? $context["responses"] : (function () { throw new RuntimeError('Variable "responses" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
            // line 19
            echo "                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"radio\" name=\"response\" id=\"response";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" />
                        <label class=\"form-check-label\" for=\"response";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "getTextResponse", [], "any", false, false, false, 21), "html", null, true);
            echo "</label>
                    </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                </div>
                  <div>
                    <span id=\"display-score\" class=\"position-absolute bottom-0 end-0 badge m-3 p-3\">Question: ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " /10</span>
                  </div>
    
                  <div class=\"d-flex align-items-center\">
                    ";
        // line 32
        echo "                    <button type=\"submit\" class=\"btn btn-rounded btn-quiz\" id=\"nextButton\">suivant</button>
                    <div id=\"alertMessage\" class=\"ms-2\" style=\"display: none; color: red;\">Merci de choisir une réponse en premier.
                    </div>
                  </div>
              </div>
            </div>         
      </div>
      <div class=\"row\">
        <div class=\"col-auto mx-auto mb-4\">
          <div class=\"card\" center style=\"width: 20rem;\">
            <a class= \"btn btn-rounded-center btn-quiz\" href=\"#\">
              <img src=\"https://i.ibb.co/vXdCWV7/ DALL-E-2023-11-22-15-53-02-A-charming-and-animated-scene-inspired-by-Pixar-s-style-showing-a-cartoon.png\" class=\"card-img-top\" alt=\"test\" />
                <div class=\"card-body\">
                  <p class=\"card-text fw-bold text-center\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                </div>
            </a>
          </div>
        </div>
      </div>
    
    </form>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/quiz-validation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front-office/quiz/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 58,  199 => 57,  189 => 56,  169 => 45,  154 => 32,  147 => 27,  142 => 24,  131 => 21,  125 => 20,  122 => 19,  118 => 18,  115 => 17,  113 => 16,  109 => 15,  102 => 11,  96 => 8,  93 => 7,  83 => 6,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front-office/quiz/basequiz.html.twig' %}

{% block title %}
  QUIZ/{{ quiz.title }}
{% endblock %}
{% block body %}
  <section class=\"card-center mb-4 mx-auto\" style=\"max-width: 800px;\">
    <form action=\"{{ path('app_quiz_submit', { id: quiz.id, title: quiz.title }) }}\" method=\"post\">
      <div class=\"container my-4\">
        <h1 class=\"text-center fw-bolder text-dark \">Quiz :</h1>
          <h2 class=\"text-center mb-2 fw-bolder text-dark \">{{ quiz.title }}</h2> 
            <div class=\"card features-section\"> 
              <div class=\"card-body \">
                <div class=\"mb-3\">
                  <h4 class=\"mb-4\">{{ questions.getTextQuestion }}</h4>
                  {% set responses = questions.responses|shuffle %}

                  {% for response in responses %}
                    <div class=\"form-check\">
                      <input class=\"form-check-input\" type=\"radio\" name=\"response\" id=\"response{{ response.id }}\" value=\"{{ response.id }}\" />
                        <label class=\"form-check-label\" for=\"response{{ response.id }}\">{{ response.getTextResponse }}</label>
                    </div>
                  {% endfor %}

                </div>
                  <div>
                    <span id=\"display-score\" class=\"position-absolute bottom-0 end-0 badge m-3 p-3\">Question: {{ offset }} /10</span>
                  </div>
    
                  <div class=\"d-flex align-items-center\">
                    {# Btn \"suivant\" is disable, until the user seletcs a response (js function) #}
                    <button type=\"submit\" class=\"btn btn-rounded btn-quiz\" id=\"nextButton\">suivant</button>
                    <div id=\"alertMessage\" class=\"ms-2\" style=\"display: none; color: red;\">Merci de choisir une réponse en premier.
                    </div>
                  </div>
              </div>
            </div>         
      </div>
      <div class=\"row\">
        <div class=\"col-auto mx-auto mb-4\">
          <div class=\"card\" center style=\"width: 20rem;\">
            <a class= \"btn btn-rounded-center btn-quiz\" href=\"#\">
              <img src=\"https://i.ibb.co/vXdCWV7/ DALL-E-2023-11-22-15-53-02-A-charming-and-animated-scene-inspired-by-Pixar-s-style-showing-a-cartoon.png\" class=\"card-img-top\" alt=\"test\" />
                <div class=\"card-body\">
                  <p class=\"card-text fw-bold text-center\">{{ quiz.title }}</p>
                </div>
            </a>
          </div>
        </div>
      </div>
    
    </form>
  </section>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('js/quiz-validation.js') }}\"></script>
{% endblock %}
", "front-office/quiz/show.html.twig", "/var/www/html/projet-12-coffee-lover/templates/front-office/quiz/show.html.twig");
    }
}
