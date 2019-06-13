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

/* default/template.html.twig */
class __TwigTemplate_e40fc729d11abe404ad2cd501cb16b92eb93de8db575e9c4063e7f472e5eb6b5 extends \Twig\Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/template.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"/docs/4.1/assets/img/favicons/favicon.ico\">

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "  </head>

  <body>

    <main role=\"main\">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <section id=\"section1\" class=\"text-center\">
        <div class=\"container navbar-dark d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3\">
          <!-- <h5 class=\"my-0 mr-md-auto font-weight-normal\">Company name</h5> -->
          <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/logo.png"), "html", null, true);
        echo "\" class=\"my-0 mr-md-auto\">
          <nav class=\"my-2 my-md-0 mr-md-3\">
            <a class=\"p-2 text-white uppercase\" href=\"#\">login</a>
            <a class=\"p-2 text-white uppercase\" href=\"#\">sign up</a>
          </nav>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
        </div>

        <!-- <div class=\"navbar navbar-dark shadow-sm\">
          <div class=\"container d-flex flex-column flex-md-row justify-content-between\">
            <a href=\"#\" class=\"navbar-brand d-flex align-items-center\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"mr-2\"><path d=\"M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z\"></path><circle cx=\"12\" cy=\"13\" r=\"4\"></circle></svg>
              <strong>Album</strong>
            </a>

            <nav class=\"my-2 my-md-0 mr-md-3\">
              <a class=\"p-2 text-dark\" href=\"#\">Features</a>
              <a class=\"p-2 text-dark\" href=\"#\">Enterprise</a>
              <a class=\"p-2 text-dark\" href=\"#\">Support</a>
              <a class=\"p-2 text-dark\" href=\"#\">Pricing</a>
            </nav>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
          </div>
        </div> -->

        <div class=\"row h-100\">
           <div class=\"col-sm-12 my-auto\">
             <div class=\"container\">
                <h2 class=\"display-5\">Find your Favorite</h2>
                <h1 class=\"display-3 uppercase\">recipes</h1>
                <p><a class=\"btn btn-lg btn-outline-light uppercase\" href=\"#\" role=\"button\">get started</a></p>
                <p class=\"uppercase\">or send us your own recipes and get rewarded !</p>
              </div>
           </div>
        </div>

      </section>

      <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"text-center mb-2\">
              <span class=\"cat_circle\"><img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/inspired.png"), "html", null, true);
        echo "\"></span>
            </div>
            <h4 class=\"uppercase text-center display-5\">get inspired</h4>
            <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
          <div class=\"col-md-4\">
            <div class=\"text-center mb-2\">
              <span class=\"cat_circle\"><img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/rewarded.png"), "html", null, true);
        echo "\"></span>
            </div>
            <h4 class=\"uppercase text-center display-5\">get rewarded</h4>
            <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class=\"col-md-4\">
            <div class=\"text-center mb-2\">
              <span class=\"cat_circle\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/social.png"), "html", null, true);
        echo "\"></span>
            </div>
            <h4 class=\"uppercase text-center display-5\">get social</h4>
            <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div> <!-- /container -->


      <div class=\"album pt-5 bg-light\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/iPhone-5s.png"), "html", null, true);
        echo "\" width=\"60%\">
            </div>
            <div class=\"col-md-6\">
              <h4 class=\"uppercase display-5\">introducing the fudi app</h4>
              <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <div>
                <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/app_store.png"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/gg_play.png"), "html", null, true);
        echo "\">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <img class=\"rounded-circle border mb-4\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/carousel.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"120\">

                <p>“I am so happy because I found this recipe, and it just made my life easier.
Thanks  so much for sharing!”</p>
                <p><small>- Michael Dawson, San Francisco, CA -</small></p>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <img class=\"rounded-circle border mb-4\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/carousel.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"120\">

                <p>“I am so happy because I found this recipe, and it just made my life easier.
Thanks  so much for sharing!”</p>
                <p><small>- Michael Dawson, San Francisco, CA -</small></p>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <img class=\"rounded-circle border mb-4\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/carousel.png"), "html", null, true);
        echo "\" alt=\"Generic placeholder image\" width=\"120\">

                <p>“I am so happy because I found this recipe, and it just made my life easier.
Thanks  so much for sharing!”</p>
                <p><small>- Michael Dawson, San Francisco, CA -</small></p>
              </div>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>

      <h4 class=\"uppercase text-center display-5\">BROWSE BY CUISINES</h4>

      <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/italian.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>327 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">italian</h4>
                  </div>
              </div>

              <!-- <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/italian.png"), "html", null, true);
        echo "\" class=\"img-fluid\" width=\"640\"> -->
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/indian.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>856 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">indian</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">              
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/french.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>27 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">french</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/steakhouse.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>174 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">steakhouse</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/seafood.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>731 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">seafood</h4>
                  </div>
              </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/sushi.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>237 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">sushi</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/mexican.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>529 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">mexican</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">              
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/chinese.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>145 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">chinese</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/pizza.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>327 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">pizza</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/template/american.png"), "html", null, true);
        echo "\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>1437 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">american</h4>
                  </div>
              </div>
            </div>       
      </div>

        <div class=\"container mt-3\">
          <div class=\"row\">
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">23,567</h5>
              <p><small class=\"text-muted\">Recipes Availables</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">431,729</h5>
              <p><small class=\"text-muted\">Active Users</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">892,173</h5>
              <p><small class=\"text-muted\">Positive Reviews</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">56,581</h5>
              <p><small class=\"text-muted\">Photos & Videos</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">3,182</h5>
              <p><small class=\"text-muted\">Spices and Herbes</small></p>
            </div>
          </div>
        </div>
      </div>
        <footer class=\"footer\">
          <div class=\"container small\">
            <span class=\"text-muted\">©2014 Fudi. All Rights Reserved.</span>
            <div class=\"float-right\"><span class=\"text-muted\">DESIGN BY:</span> WWW.BEKADES.COM</div>
          </div>
        </footer>

    </main>


    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
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

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      ";
        // line 14
        echo "      <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
      ";
        // line 16
        echo "      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles_template.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/carousel.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sticky-footer-navbar.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 18,  468 => 17,  463 => 16,  460 => 14,  458 => 13,  448 => 12,  429 => 10,  369 => 264,  357 => 255,  345 => 246,  333 => 237,  321 => 228,  306 => 216,  294 => 207,  282 => 198,  270 => 189,  263 => 185,  253 => 178,  225 => 153,  211 => 142,  197 => 131,  177 => 114,  173 => 113,  161 => 104,  145 => 91,  135 => 84,  125 => 77,  74 => 29,  63 => 20,  61 => 12,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
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
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/styles_template.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/carousel.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/sticky-footer-navbar.css') }}\">
    {% endblock %}
  </head>

  <body>

    <main role=\"main\">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <section id=\"section1\" class=\"text-center\">
        <div class=\"container navbar-dark d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3\">
          <!-- <h5 class=\"my-0 mr-md-auto font-weight-normal\">Company name</h5> -->
          <img src=\"{{ asset('img/template/logo.png') }}\" class=\"my-0 mr-md-auto\">
          <nav class=\"my-2 my-md-0 mr-md-3\">
            <a class=\"p-2 text-white uppercase\" href=\"#\">login</a>
            <a class=\"p-2 text-white uppercase\" href=\"#\">sign up</a>
          </nav>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
        </div>

        <!-- <div class=\"navbar navbar-dark shadow-sm\">
          <div class=\"container d-flex flex-column flex-md-row justify-content-between\">
            <a href=\"#\" class=\"navbar-brand d-flex align-items-center\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"mr-2\"><path d=\"M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z\"></path><circle cx=\"12\" cy=\"13\" r=\"4\"></circle></svg>
              <strong>Album</strong>
            </a>

            <nav class=\"my-2 my-md-0 mr-md-3\">
              <a class=\"p-2 text-dark\" href=\"#\">Features</a>
              <a class=\"p-2 text-dark\" href=\"#\">Enterprise</a>
              <a class=\"p-2 text-dark\" href=\"#\">Support</a>
              <a class=\"p-2 text-dark\" href=\"#\">Pricing</a>
            </nav>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarHeader\" aria-controls=\"navbarHeader\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
          </div>
        </div> -->

        <div class=\"row h-100\">
           <div class=\"col-sm-12 my-auto\">
             <div class=\"container\">
                <h2 class=\"display-5\">Find your Favorite</h2>
                <h1 class=\"display-3 uppercase\">recipes</h1>
                <p><a class=\"btn btn-lg btn-outline-light uppercase\" href=\"#\" role=\"button\">get started</a></p>
                <p class=\"uppercase\">or send us your own recipes and get rewarded !</p>
              </div>
           </div>
        </div>

      </section>

      <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
          <div class=\"col-md-4\">
            <div class=\"text-center mb-2\">
              <span class=\"cat_circle\"><img src=\"{{ asset('img/template/inspired.png') }}\"></span>
            </div>
            <h4 class=\"uppercase text-center display-5\">get inspired</h4>
            <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
          <div class=\"col-md-4\">
            <div class=\"text-center mb-2\">
              <span class=\"cat_circle\"><img src=\"{{ asset('img/template/rewarded.png') }}\"></span>
            </div>
            <h4 class=\"uppercase text-center display-5\">get rewarded</h4>
            <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class=\"col-md-4\">
            <div class=\"text-center mb-2\">
              <span class=\"cat_circle\"><img src=\"{{ asset('img/template/social.png') }}\"></span>
            </div>
            <h4 class=\"uppercase text-center display-5\">get social</h4>
            <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div> <!-- /container -->


      <div class=\"album pt-5 bg-light\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <img src=\"{{ asset('img/template/iPhone-5s.png') }}\" width=\"60%\">
            </div>
            <div class=\"col-md-6\">
              <h4 class=\"uppercase display-5\">introducing the fudi app</h4>
              <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class=\"small text-secondary\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              <div>
                <img src=\"{{ asset('img/template/app_store.png') }}\">
                <img src=\"{{ asset('img/template/gg_play.png') }}\">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"1\" class=\"\"></li>
          <li data-target=\"#myCarousel\" data-slide-to=\"2\" class=\"\"></li>
        </ol>
        <div class=\"carousel-inner\">
          <div class=\"carousel-item active\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <img class=\"rounded-circle border mb-4\" src=\"{{ asset('img/template/carousel.png') }}\" alt=\"Generic placeholder image\" width=\"120\">

                <p>“I am so happy because I found this recipe, and it just made my life easier.
Thanks  so much for sharing!”</p>
                <p><small>- Michael Dawson, San Francisco, CA -</small></p>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <img class=\"rounded-circle border mb-4\" src=\"{{ asset('img/template/carousel.png') }}\" alt=\"Generic placeholder image\" width=\"120\">

                <p>“I am so happy because I found this recipe, and it just made my life easier.
Thanks  so much for sharing!”</p>
                <p><small>- Michael Dawson, San Francisco, CA -</small></p>
              </div>
            </div>
          </div>
          <div class=\"carousel-item\">
            <div class=\"container\">
              <div class=\"carousel-caption\">
                <img class=\"rounded-circle border mb-4\" src=\"{{ asset('img/template/carousel.png') }}\" alt=\"Generic placeholder image\" width=\"120\">

                <p>“I am so happy because I found this recipe, and it just made my life easier.
Thanks  so much for sharing!”</p>
                <p><small>- Michael Dawson, San Francisco, CA -</small></p>
              </div>
            </div>
          </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>

      <h4 class=\"uppercase text-center display-5\">BROWSE BY CUISINES</h4>

      <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/italian.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>327 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">italian</h4>
                  </div>
              </div>

              <!-- <img src=\"{{ asset('img/template/italian.png') }}\" class=\"img-fluid\" width=\"640\"> -->
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/indian.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>856 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">indian</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">              
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/french.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>27 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">french</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/steakhouse.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>174 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">steakhouse</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/seafood.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>731 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">seafood</h4>
                  </div>
              </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/sushi.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>237 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">sushi</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/mexican.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>529 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">mexican</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">              
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/chinese.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>145 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">chinese</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/pizza.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>327 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">pizza</h4>
                  </div>
              </div>
            </div>
            <div class=\"col p-0\">
              <div class=\"card text-white text-center\">
                  <img class=\"card-img\" src=\"{{ asset('img/template/american.png') }}\" alt=\"Card image\">
                  <div class=\"card-img-overlay\">
                      <p class=\"card-text\"><small>1437 Recipes</small></p>
                      <h4 class=\"card-title uppercase\">american</h4>
                  </div>
              </div>
            </div>       
      </div>

        <div class=\"container mt-3\">
          <div class=\"row\">
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">23,567</h5>
              <p><small class=\"text-muted\">Recipes Availables</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">431,729</h5>
              <p><small class=\"text-muted\">Active Users</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">892,173</h5>
              <p><small class=\"text-muted\">Positive Reviews</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">56,581</h5>
              <p><small class=\"text-muted\">Photos & Videos</small></p>
            </div>
            <div class=\"col text-center\">
              <h5 class=\"font-weight-bold\">3,182</h5>
              <p><small class=\"text-muted\">Spices and Herbes</small></p>
            </div>
          </div>
        </div>
      </div>
        <footer class=\"footer\">
          <div class=\"container small\">
            <span class=\"text-muted\">©2014 Fudi. All Rights Reserved.</span>
            <div class=\"float-right\"><span class=\"text-muted\">DESIGN BY:</span> WWW.BEKADES.COM</div>
          </div>
        </footer>

    </main>


    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
  </body>
</html>
", "default/template.html.twig", "C:\\laragon\\www\\projet-symf\\templates\\default\\template.html.twig");
    }
}
