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

/* base.html.twig */
class __TwigTemplate_2887f394913ae7ab6a88019fb919e5ad5d251183fcb7c939a7e5cb77bfa7bb8c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.1/assets/img/favicons/favicon.ico\">

    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "  </head>

  <body>

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
      <h5 class=\"my-0 mr-md-auto font-weight-normal\">Projet</h5>
      <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
        <a class=\"p-2 text-dark\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_template");
        echo "\">Template</a>
        
        ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 30
            echo "          <a class=\"p-2 text-dark\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_member_index");
            echo "\">Espace membre</a>
        ";
        }
        // line 32
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "          <a class=\"p-2 text-dark\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_index");
            echo "\">Espace admin</a>
        ";
        }
        // line 35
        echo "
        ";
        // line 36
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 37
            echo "        <a class=\"p-2 text-dark\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Inscription</a>
        ";
        }
        // line 39
        echo "      </nav>
      ";
        // line 40
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "      <a class=\"btn btn-outline-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
      ";
        } else {
            // line 43
            echo "      <a class=\"btn btn-outline-primary\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
      ";
        }
        // line 45
        echo "    </div>

    <div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
      ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    </div>

    <div class=\"container\">
      <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
          <div class=\"col-12 col-md\">
            <small class=\"d-block mb-3 text-muted\">&copy; 2019-2020</small>
          </div>
          <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
              <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
              <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
              <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
              <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
              <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
            </ul>
          </div>
          <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
              <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
              <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
              <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
            </ul>
          </div>
          <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"text-muted\" href=\"#\">Team</a></li>
              <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
              <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
              <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "      ";
        // line 15
        echo "      <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
      ";
        // line 17
        echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "      <h1 class=\"display-4\">Bienvenue</h1>
      <p class=\"lead\">Test Symfony</p>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 93,  254 => 49,  244 => 48,  231 => 17,  228 => 15,  226 => 14,  216 => 13,  197 => 11,  181 => 94,  179 => 93,  136 => 52,  134 => 48,  129 => 45,  123 => 43,  117 => 41,  115 => 40,  112 => 39,  106 => 37,  104 => 36,  101 => 35,  95 => 33,  92 => 32,  86 => 30,  84 => 29,  79 => 27,  75 => 26,  66 => 19,  64 => 13,  59 => 11,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.1/assets/img/favicons/favicon.ico\">

    <title>{% block title %}Bienvenue!{% endblock %}</title>

    {% block stylesheets %}
      {# bootstrap #}
      <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
      {# custom #}
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/styles.css') }}\">
    {% endblock %}
  </head>

  <body>

    <div class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm\">
      <h5 class=\"my-0 mr-md-auto font-weight-normal\">Projet</h5>
      <nav class=\"my-2 my-md-0 mr-md-3\">
        <a class=\"p-2 text-dark\" href=\"{{path('homepage')}}\">Accueil</a>
        <a class=\"p-2 text-dark\" href=\"{{path('home_template')}}\">Template</a>
        
        {% if is_granted('ROLE_USER') %}
          <a class=\"p-2 text-dark\" href=\"{{path('app_member_index')}}\">Espace membre</a>
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
          <a class=\"p-2 text-dark\" href=\"{{path('app_admin_index')}}\">Espace admin</a>
        {% endif %}

        {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
        <a class=\"p-2 text-dark\" href=\"{{path('app_register')}}\">Inscription</a>
        {% endif %}
      </nav>
      {% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
      <a class=\"btn btn-outline-primary\" href=\"{{ path('app_login') }}\">Connexion</a>
      {% else %}
      <a class=\"btn btn-outline-primary\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
      {% endif %}
    </div>

    <div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
      {% block body %}
      <h1 class=\"display-4\">Bienvenue</h1>
      <p class=\"lead\">Test Symfony</p>
      {% endblock %}
    </div>

    <div class=\"container\">
      <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
          <div class=\"col-12 col-md\">
            <small class=\"d-block mb-3 text-muted\">&copy; 2019-2020</small>
          </div>
          <div class=\"col-6 col-md\">
            <h5>Features</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"text-muted\" href=\"#\">Cool stuff</a></li>
              <li><a class=\"text-muted\" href=\"#\">Random feature</a></li>
              <li><a class=\"text-muted\" href=\"#\">Team feature</a></li>
              <li><a class=\"text-muted\" href=\"#\">Stuff for developers</a></li>
              <li><a class=\"text-muted\" href=\"#\">Another one</a></li>
              <li><a class=\"text-muted\" href=\"#\">Last time</a></li>
            </ul>
          </div>
          <div class=\"col-6 col-md\">
            <h5>Resources</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"text-muted\" href=\"#\">Resource</a></li>
              <li><a class=\"text-muted\" href=\"#\">Resource name</a></li>
              <li><a class=\"text-muted\" href=\"#\">Another resource</a></li>
              <li><a class=\"text-muted\" href=\"#\">Final resource</a></li>
            </ul>
          </div>
          <div class=\"col-6 col-md\">
            <h5>About</h5>
            <ul class=\"list-unstyled text-small\">
              <li><a class=\"text-muted\" href=\"#\">Team</a></li>
              <li><a class=\"text-muted\" href=\"#\">Locations</a></li>
              <li><a class=\"text-muted\" href=\"#\">Privacy</a></li>
              <li><a class=\"text-muted\" href=\"#\">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    {% block javascripts %}{% endblock %}

    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  </body>
</html>
", "base.html.twig", "C:\\laragon\\www\\projet_symf\\templates\\base.html.twig");
    }
}
