<?php

/* base.html.twig */
class __TwigTemplate_04173cc5b1147f98e116855a554a003a5218a202ba979d4c29bd716e84a7e097 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bodyType' => [$this, 'block_bodyType'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</head>
<body ";
        // line 19
        $this->displayBlock('bodyType', $context, $blocks);
        echo ">
    <header>
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-6 logo\">
                    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                </div>
                <div class=\"col-xs-6 align-right\">
                    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"button red-bcg\"> 
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/envelope.png"), "html", null, true);
        echo "\" alt=\"koperta\"> <span> Zostaw wiadomość</span>
                    </a>
                </div>
            </div>
            <div class=\"row claim\">
                <div class=\"col-sm-8 col-md-7 col-lg-6\">
                    <div class=\"description\">
                        <h1> Lorem ipsum dolor sit amet enim. </h2>
                        <p> Consectetur adipisicing elit. Eaque corporis laboriosam excepturi facere perspiciatis. Repellat adipisci nobis suscipit inventore nesciunt quibusdam.</p>
                        <a href=\"\" class=\"button yellow-bcg\"> Porównaj </a>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "bydgoszcz"]);
        echo "\"> Bydgoszcz </a></li>
                    <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "gdansk"]);
        echo "\"> Gdańsk </a></li>
                    <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "katowice"]);
        echo "\"> Katowice </a></li>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "krakow"]);
        echo "\"> Kraków </a></li>
                    <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "lodz"]);
        echo "\"> Łódź </a></li>
                    <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "poznan"]);
        echo "\"> Poznań </a></li>
                    <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "szczecin"]);
        echo "\"> Szczecin </a></li>
                    <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "warszawa"]);
        echo "\"> Warszawa </a></li>
                    <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "wroclaw"]);
        echo "\"> Wrocław </a></li>
                    <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => "other"]);
        echo "\"> Inne miasta </a></li>
                </ul>
            </nav>
            <a href=\"#form\" class=\"button red-bcg scroll-down\"> <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down.png"), "html", null, true);
        echo "\" alt=\"strzłka w dół\"> </a>
        </div>
        <div class=\"overlay\"></div>
    </header>
    ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "    <footer>
        <div class=\"wrapper\">
            <div class=\"row center-xs\">
                <div class=\"col-xs-8 col-md-2\">
                    <div class=\"logo\"> <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"> </div>
                    <p> www.porownaj-czynsz.pl</p>
                </div>
            </div>
        </div>
        <div class=\"overlay\"></div>
    </footer>
    ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Porównaj czynsz!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,500,600,700&amp;subset=latin-ext\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css\" type=\"text/css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_bodyType($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyType"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyType"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
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
        return array (  253 => 71,  236 => 59,  219 => 19,  207 => 13,  203 => 11,  194 => 10,  176 => 8,  164 => 72,  162 => 71,  152 => 64,  146 => 60,  144 => 59,  137 => 55,  131 => 52,  127 => 51,  123 => 50,  119 => 49,  115 => 48,  111 => 47,  107 => 46,  103 => 45,  99 => 44,  95 => 43,  77 => 28,  73 => 27,  67 => 24,  59 => 19,  54 => 17,  50 => 15,  48 => 10,  43 => 8,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>{% block title %}Porównaj czynsz!{% endblock %}</title>

    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,500,600,700&amp;subset=latin-ext\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css\" type=\"text/css\" >
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    {% endblock %}

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"{{ asset('js/script.js') }}\"></script>
</head>
<body {% block bodyType %}{% endblock %}>
    <header>
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-6 logo\">
                    <img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\">
                </div>
                <div class=\"col-xs-6 align-right\">
                    <a href=\"{{ path('contact') }}\" class=\"button red-bcg\"> 
                        <img src=\"{{ asset('images/envelope.png') }}\" alt=\"koperta\"> <span> Zostaw wiadomość</span>
                    </a>
                </div>
            </div>
            <div class=\"row claim\">
                <div class=\"col-sm-8 col-md-7 col-lg-6\">
                    <div class=\"description\">
                        <h1> Lorem ipsum dolor sit amet enim. </h2>
                        <p> Consectetur adipisicing elit. Eaque corporis laboriosam excepturi facere perspiciatis. Repellat adipisci nobis suscipit inventore nesciunt quibusdam.</p>
                        <a href=\"\" class=\"button yellow-bcg\"> Porównaj </a>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href=\"{{ path('city', {'city': 'bydgoszcz'}) }}\"> Bydgoszcz </a></li>
                    <li><a href=\"{{ path('city', {'city': 'gdansk'}) }}\"> Gdańsk </a></li>
                    <li><a href=\"{{ path('city', {'city': 'katowice'}) }}\"> Katowice </a></li>
                    <li><a href=\"{{ path('city', {'city': 'krakow'}) }}\"> Kraków </a></li>
                    <li><a href=\"{{ path('city', {'city': 'lodz'}) }}\"> Łódź </a></li>
                    <li><a href=\"{{ path('city', {'city': 'poznan'}) }}\"> Poznań </a></li>
                    <li><a href=\"{{ path('city', {'city': 'szczecin'}) }}\"> Szczecin </a></li>
                    <li><a href=\"{{ path('city', {'city': 'warszawa'}) }}\"> Warszawa </a></li>
                    <li><a href=\"{{ path('city', {'city': 'wroclaw'}) }}\"> Wrocław </a></li>
                    <li><a href=\"{{ path('city', {'city': 'other'}) }}\"> Inne miasta </a></li>
                </ul>
            </nav>
            <a href=\"#form\" class=\"button red-bcg scroll-down\"> <img src=\"{{ asset('images/arrow-down.png') }}\" alt=\"strzłka w dół\"> </a>
        </div>
        <div class=\"overlay\"></div>
    </header>
    {% block body %}{% endblock %}
    <footer>
        <div class=\"wrapper\">
            <div class=\"row center-xs\">
                <div class=\"col-xs-8 col-md-2\">
                    <div class=\"logo\"> <img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\"> </div>
                    <p> www.porownaj-czynsz.pl</p>
                </div>
            </div>
        </div>
        <div class=\"overlay\"></div>
    </footer>
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/application/templates/base.html.twig");
    }
}
