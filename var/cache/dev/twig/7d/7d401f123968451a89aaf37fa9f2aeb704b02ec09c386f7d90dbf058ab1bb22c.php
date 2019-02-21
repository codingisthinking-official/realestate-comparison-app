<?php

/* base.html.twig */
class __TwigTemplate_14a3bb41f1af45c9c608e316f394a7b4625bae9ea8c098352d9cce0b90251325 extends Twig_Template
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
        echo "\" alt=\"koperta\"> <span> ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.message"), "html", null, true);
        echo " </span>
                    </a>
                </div>
            </div>
            <div class=\"row claim\">
                <div class=\"col-sm-8 col-md-7 col-lg-6\">
                    <div class=\"description\">
                        <h1> ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.first_line"), "html", null, true);
        echo " </h2>
                        <p> ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.description"), "html", null, true);
        echo "</p>
                        <a href=\"\" class=\"button yellow-bcg\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.button"), "html", null, true);
        echo " </a>
                    </div>
                </div>
            </div>
            <nav>
                <ul>";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 43
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("city", ["city" => $this->extensions['App\Twig\AppExtension']->findCity($context["x"])]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->cityInfo($this->extensions['App\Twig\AppExtension']->findCity($context["x"]), "title"), "html", null, true);
            echo " </a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </ul>
            </nav>
            <a href=\"#form\" class=\"button red-bcg scroll-down\"> <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down.png"), "html", null, true);
        echo "\" alt=\"strzłka w dół\"> </a>
        </div>
        <div class=\"overlay\"></div>
    </header>
    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    <footer>
        <div class=\"wrapper\">
            <div class=\"row center-xs\">
                <div class=\"col-xs-8 col-md-2\">
                    <div class=\"logo\"> <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"> </div>
                    <p> ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("footer.link"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"overlay\"></div>
    </footer>
    ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
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

        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("title"), "html", null, true);
        
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

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
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
        return array (  243 => 63,  226 => 51,  209 => 19,  197 => 13,  193 => 11,  184 => 10,  166 => 8,  154 => 64,  152 => 63,  143 => 57,  139 => 56,  133 => 52,  131 => 51,  124 => 47,  120 => 45,  109 => 43,  105 => 42,  97 => 37,  93 => 36,  89 => 35,  77 => 28,  73 => 27,  67 => 24,  59 => 19,  54 => 17,  50 => 15,  48 => 10,  43 => 8,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>{% block title %}{{ 'title'|toWording }}{% endblock %}</title>

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
                        <img src=\"{{ asset('images/envelope.png') }}\" alt=\"koperta\"> <span> {{ 'header.message'|toWording }} </span>
                    </a>
                </div>
            </div>
            <div class=\"row claim\">
                <div class=\"col-sm-8 col-md-7 col-lg-6\">
                    <div class=\"description\">
                        <h1> {{ 'header.first_line'|toWording }} </h2>
                        <p> {{ 'header.description'|toWording }}</p>
                        <a href=\"\" class=\"button yellow-bcg\"> {{ \"header.button\" | toWording }} </a>
                    </div>
                </div>
            </div>
            <nav>
                <ul>{% for x in 1..10 %}
                        <li><a href=\"{{ path('city', {city: x|findCity}) }}\"> {{ x|findCity|cityInfo(\"title\") }} </a></li>
                    {% endfor %}
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
                    <p> {{ 'footer.link' | toWording }}</p>
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
