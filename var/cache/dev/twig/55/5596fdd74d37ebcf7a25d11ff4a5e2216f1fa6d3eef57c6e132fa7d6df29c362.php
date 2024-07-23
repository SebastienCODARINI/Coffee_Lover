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

/* front-office/main/contact.html.twig */
class __TwigTemplate_ebcc968247325b374948a1b6a2a68ddee4cfaf0cec13be6625187eeb1351dd26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/main/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front-office/main/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front-office/main/contact.html.twig", 1);
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
        echo "  Qui sommes nous
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
        echo "  <!-- Section: Contact v.2 -->
  <div id=\"scroll-point\" class=\"my-4\">";
        // line 9
        echo "<br>";
        echo "</div>

  <section class=\"features-section mb-4 mx-auto\" style=\"max-width: 800px;\">
  <h1 class=\"h1-responsive font-weight-bold text-center my-4\">Nous sommes</h1>
  <h5 class=\"h1-responsive font-weight-bold text-center my-4\"> 4 diorroer yaouank zo deuet er-maez eus ar skol \"O'clock\".</h5>
  <h6 class=\"fw-bold\" >Mika</h6>
  <p>Logoden biniou degemer mat an penn, ar bed butuniñ piler. Bodañ amzer Santeg sentiñ kezeg gortoz, hervez pont danvez brav. Chaseour abred dale aour respont kelc’hiek, lazhañ baradoz skolaer frouezh. Voull disul ar waz c’hoef petra, koustañ romant Melwenn gantañ. Alc’houez gwele evidoc’h heñvel garmiñ talvezout, diaoul brudet dilun ur. Brudet toullañ kegin goz ur ennon, divalav tavarn kustum Oskaleg. Kleñved loer kompren reas, kemener gwengolo an evidomp, bez formaj. Miz barzh gouiziek ar c’hreisteiz Santez-Anna-Wened, kentañ vro da degemer. Naoned preñv pehini koll, pegen en gar vatezh, voull Gwengamp. Kibellañ roll mar chal, lakaat al tabut feunten, a pesketa.</p>
  <h6 class=\"fw-bold\" >Seb</h6>
  <p>Wastell kar diskenn ampart ar redek, gomz gortoz porpant koar. Al goulou follenn kreiz skiant frouezh, Arzhal heol sadorn dienn. Razh broustañ aozañ dindan  yaouank noazh, vrec’h merc’her marc’had kreiz. Seiz siminal muzul banniel las Mor, fur prenestr oa nemet. Oas lizherenn dispign pla’hig, c’helien bern barrad spontus, goap dirak . Out davañjer c’hontadenn du c’hilhog mantell, skalier e glac’har laouen. Kefe skeudenn tennañ pont davañjer biken, wouel ar Remengol biz. Dimeziñ marennañ c’hwezhañ sac’h arar stivell, diwezhat hed c’heloù louet. Park Lokmikael (an-Traezh) c’houlz Santez-Seo, kroaz Pont’n-Abad war c’hleñved, ur plijadur. Egiston ar bemnoz bemdez gervel dimeziñ, traezh biken pesketaer Montroulez.</p>
  <h6 class=\"fw-bold\" >Aurélie</h6>
  <p>Echu dont hanternoz bloaz wechoù brezhoneg, ar pep bank karantez. Reizh elgez ur maneg, tremen terriñ c’hoari verc’h, Remengol falc’hat. Ennañ bell gwazh embann mintin emaout, perc’henn flourañ gwenn dianav. Da goap mel da Plelann-Veur romant, digwener moulañ benveg foenn. A reolenn embann rannañ naon hir, eget  c’hontadenn degas kenavo. Siminal kennebeut kaier tre daouzek chase, an tabut kalonek ha. Gloan kerkent marteze rumm ar brudet, draonienn gwazh boued dienn. Kalz biskoazh yezh kotoñs dianav da, sul sac’h krib piv. Loen dehou beuziñ Gerveur kerf lein, outi urzh soubañ c’hazh. Kerkent eñ park plant kig ganto, karrez mesk c’hoant hep.</p>
  <h6 class=\"fw-bold\" >Mariella</h6>
  <p>Vuoc’h a neud eta war tevel, a lakaat bep follenn. Hag hor stad stourm park c’heloù, ilin bloavezh Moel divjod. Nec’hin broustañ karr Kemperle prest da, bruched digant a c’hlas. Lazhañ toullañ kaer eeun genver C’hall, vihan drezañ e plijet. Vi Santeg loen c’haod c’hoarzhin evañ, kefe keit c’hoazh kuz’h. Lein perak plad stag bruched maen, doñv vloaz eus koustañ. Ganimp, ganeomp gouren Yec’hed kerzhout anzav verc’h, nor kerkoulz skuizh laouen. Sachañ tann solier ilin traezh drezo, daol ivez kloued oferenn. Mamm an c’hof an c’hodell kelc’hiek, kregiñ gwir brav kleuz. C’helenner ankouna’haat war mirout yalc’h muzell, dezho meud berrloer avat.</p>
  </section>
  <section class=\"features-section mb-4 mx-auto\" style=\"max-width: 800px;\">
    <!-- Section heading -->
    <h2 class=\"h1-responsive font-weight-bold text-center my-4\">Contactez nous</h2>
    <!-- Section description -->
    <p class=\"text-center w-responsive mx-auto mb-5\">Vous avez des questions ? écrivez nous</p>

    <div class=\"row\">
      <!-- Grid column -->
      <div class=\"col-md-9 mb-md-0 mb-5\">
        <form id=\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">
          <!-- Grid row -->
          <div class=\"row\">
            <!-- Grid column -->
            <div class=\"col-md-6\">
              <div class=\"md-form mb-0\">
                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" />
                <label for=\"name\" class=\"\">Votre Nom</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class=\"col-md-6\">
              <div class=\"md-form mb-0\">
                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" />
                <label for=\"email\" class=\"\">Votre Email</label>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"md-form mb-0\">
                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" />
                <label for=\"subject\" class=\"\">Sujet</label>
              </div>
            </div>
          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class=\"row\">
            <!-- Grid column -->
            <div class=\"col-md-12\">
              <div class=\"md-form\">
                <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"2\" class=\"form-control md-textarea\"></textarea>
                <label for=\"message\">Votre message</label>
              </div>
            </div>
          </div>
          <!-- Grid row -->
        </form>

        <div class=\"section-btn mt-3\">
          <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Envoyer</a>
        </div>
        <div class=\"status\"></div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class=\"col-md-3 text-center\">
        <ul class=\"list-unstyled mb-0\">
          <li>
            <i class=\"fas fa-map-marker-alt fa-2x\"></i>
            <p>FRANCE</p>
          </li>

          <li>
            <i class=\"fas fa-phone mt-4 fa-2x\"></i>
            <p>+ 01 234 567 89</p>
          </li>

          <li>
            <i class=\"fas fa-envelope mt-4 fa-2x\"></i>
            <p>contact@bao.com</p>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
    </div>
  </section>
  <!-- Section: Contact v.2 -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front-office/main/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 80,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
  Qui sommes nous
{% endblock %}

{% block body %}
  <!-- Section: Contact v.2 -->
  <div id=\"scroll-point\" class=\"my-4\">{{ '<br>'|raw }}</div>

  <section class=\"features-section mb-4 mx-auto\" style=\"max-width: 800px;\">
  <h1 class=\"h1-responsive font-weight-bold text-center my-4\">Nous sommes</h1>
  <h5 class=\"h1-responsive font-weight-bold text-center my-4\"> 4 diorroer yaouank zo deuet er-maez eus ar skol \"O'clock\".</h5>
  <h6 class=\"fw-bold\" >Mika</h6>
  <p>Logoden biniou degemer mat an penn, ar bed butuniñ piler. Bodañ amzer Santeg sentiñ kezeg gortoz, hervez pont danvez brav. Chaseour abred dale aour respont kelc’hiek, lazhañ baradoz skolaer frouezh. Voull disul ar waz c’hoef petra, koustañ romant Melwenn gantañ. Alc’houez gwele evidoc’h heñvel garmiñ talvezout, diaoul brudet dilun ur. Brudet toullañ kegin goz ur ennon, divalav tavarn kustum Oskaleg. Kleñved loer kompren reas, kemener gwengolo an evidomp, bez formaj. Miz barzh gouiziek ar c’hreisteiz Santez-Anna-Wened, kentañ vro da degemer. Naoned preñv pehini koll, pegen en gar vatezh, voull Gwengamp. Kibellañ roll mar chal, lakaat al tabut feunten, a pesketa.</p>
  <h6 class=\"fw-bold\" >Seb</h6>
  <p>Wastell kar diskenn ampart ar redek, gomz gortoz porpant koar. Al goulou follenn kreiz skiant frouezh, Arzhal heol sadorn dienn. Razh broustañ aozañ dindan  yaouank noazh, vrec’h merc’her marc’had kreiz. Seiz siminal muzul banniel las Mor, fur prenestr oa nemet. Oas lizherenn dispign pla’hig, c’helien bern barrad spontus, goap dirak . Out davañjer c’hontadenn du c’hilhog mantell, skalier e glac’har laouen. Kefe skeudenn tennañ pont davañjer biken, wouel ar Remengol biz. Dimeziñ marennañ c’hwezhañ sac’h arar stivell, diwezhat hed c’heloù louet. Park Lokmikael (an-Traezh) c’houlz Santez-Seo, kroaz Pont’n-Abad war c’hleñved, ur plijadur. Egiston ar bemnoz bemdez gervel dimeziñ, traezh biken pesketaer Montroulez.</p>
  <h6 class=\"fw-bold\" >Aurélie</h6>
  <p>Echu dont hanternoz bloaz wechoù brezhoneg, ar pep bank karantez. Reizh elgez ur maneg, tremen terriñ c’hoari verc’h, Remengol falc’hat. Ennañ bell gwazh embann mintin emaout, perc’henn flourañ gwenn dianav. Da goap mel da Plelann-Veur romant, digwener moulañ benveg foenn. A reolenn embann rannañ naon hir, eget  c’hontadenn degas kenavo. Siminal kennebeut kaier tre daouzek chase, an tabut kalonek ha. Gloan kerkent marteze rumm ar brudet, draonienn gwazh boued dienn. Kalz biskoazh yezh kotoñs dianav da, sul sac’h krib piv. Loen dehou beuziñ Gerveur kerf lein, outi urzh soubañ c’hazh. Kerkent eñ park plant kig ganto, karrez mesk c’hoant hep.</p>
  <h6 class=\"fw-bold\" >Mariella</h6>
  <p>Vuoc’h a neud eta war tevel, a lakaat bep follenn. Hag hor stad stourm park c’heloù, ilin bloavezh Moel divjod. Nec’hin broustañ karr Kemperle prest da, bruched digant a c’hlas. Lazhañ toullañ kaer eeun genver C’hall, vihan drezañ e plijet. Vi Santeg loen c’haod c’hoarzhin evañ, kefe keit c’hoazh kuz’h. Lein perak plad stag bruched maen, doñv vloaz eus koustañ. Ganimp, ganeomp gouren Yec’hed kerzhout anzav verc’h, nor kerkoulz skuizh laouen. Sachañ tann solier ilin traezh drezo, daol ivez kloued oferenn. Mamm an c’hof an c’hodell kelc’hiek, kregiñ gwir brav kleuz. C’helenner ankouna’haat war mirout yalc’h muzell, dezho meud berrloer avat.</p>
  </section>
  <section class=\"features-section mb-4 mx-auto\" style=\"max-width: 800px;\">
    <!-- Section heading -->
    <h2 class=\"h1-responsive font-weight-bold text-center my-4\">Contactez nous</h2>
    <!-- Section description -->
    <p class=\"text-center w-responsive mx-auto mb-5\">Vous avez des questions ? écrivez nous</p>

    <div class=\"row\">
      <!-- Grid column -->
      <div class=\"col-md-9 mb-md-0 mb-5\">
        <form id=\"contact-form\" name=\"contact-form\" action=\"mail.php\" method=\"POST\">
          <!-- Grid row -->
          <div class=\"row\">
            <!-- Grid column -->
            <div class=\"col-md-6\">
              <div class=\"md-form mb-0\">
                <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" />
                <label for=\"name\" class=\"\">Votre Nom</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class=\"col-md-6\">
              <div class=\"md-form mb-0\">
                <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" />
                <label for=\"email\" class=\"\">Votre Email</label>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"md-form mb-0\">
                <input type=\"text\" id=\"subject\" name=\"subject\" class=\"form-control\" />
                <label for=\"subject\" class=\"\">Sujet</label>
              </div>
            </div>
          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class=\"row\">
            <!-- Grid column -->
            <div class=\"col-md-12\">
              <div class=\"md-form\">
                <textarea type=\"text\" id=\"message\" name=\"message\" rows=\"2\" class=\"form-control md-textarea\"></textarea>
                <label for=\"message\">Votre message</label>
              </div>
            </div>
          </div>
          <!-- Grid row -->
        </form>

        <div class=\"section-btn mt-3\">
          <a href=\"{{ path('app_home') }}\" class=\"btn btn-rounded btn-quiz\" data-mdb-ripple-init data-mdb-ripple-color=\"white\">Envoyer</a>
        </div>
        <div class=\"status\"></div>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class=\"col-md-3 text-center\">
        <ul class=\"list-unstyled mb-0\">
          <li>
            <i class=\"fas fa-map-marker-alt fa-2x\"></i>
            <p>FRANCE</p>
          </li>

          <li>
            <i class=\"fas fa-phone mt-4 fa-2x\"></i>
            <p>+ 01 234 567 89</p>
          </li>

          <li>
            <i class=\"fas fa-envelope mt-4 fa-2x\"></i>
            <p>contact@bao.com</p>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
    </div>
  </section>
  <!-- Section: Contact v.2 -->
{% endblock %}
", "front-office/main/contact.html.twig", "/var/www/html/projet-12-coffee-lover/templates/front-office/main/contact.html.twig");
    }
}
