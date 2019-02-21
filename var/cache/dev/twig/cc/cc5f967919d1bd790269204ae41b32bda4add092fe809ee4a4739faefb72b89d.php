<?php

/* city/index.html.twig */
class __TwigTemplate_43286743a97f624de9892d981a6212a61bbb73f9132325cd48bb61fb9dfdcca0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "city/index.html.twig", 1);
        $this->blocks = [
            'bodyType' => [$this, 'block_bodyType'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "city/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "city/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_bodyType($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyType"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyType"));

        echo " class='subpage' ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <section class=\"breadcrumbs\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\"> Strona główna </a>
                    <a href=\"#\"> ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->cityInfo((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new Twig_Error_Runtime('Variable "city" does not exist.', 10, $this->source); })())), "html", null, true);
        echo " </a>
                </div>
            </div>
            
        </div>
    </section>

    <section class='smaller-padding'>
        <div class=\"wrapper\">
            <div class=\"row middle-md between-md\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"content left\">
                        <h1 class=\"red\"> ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->cityInfo((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new Twig_Error_Runtime('Variable "city" does not exist.', 22, $this->source); })()), "header_title"), "html", null, true);
        echo "</h1>
                        <p class=\"big-paragraph\">
                            ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->cityInfo((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new Twig_Error_Runtime('Variable "city" does not exist.', 24, $this->source); })()), "header_subtitle"), "html", null, true);
        echo "
                        </p>
                        ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->cityInfo((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new Twig_Error_Runtime('Variable "city" does not exist.', 26, $this->source); })()), "description"), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"col-md-5 col-sm-12\">
                    <div class=\"image-border\">
                        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->cityInfo((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new Twig_Error_Runtime('Variable "city" does not exist.', 32, $this->source); })()), "photo"), "html", null, true);
        echo "\" alt=\"zdjęcie\">   
                    </div>
                </div>

                <div class=\"col-xs-12\">
                    <ul class=\"social-media\">
                        <li> <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.facebook"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fb-icon.jpg"), "html", null, true);
        echo "\" alt=\"facebook\"> </a> </li>
                        <li> <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.twitter"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tw-icon.jpg"), "html", null, true);
        echo "\" alt=\"twitter\"> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=\"comparision smaller-padding\">
        <div class=\"wrapper\">
            <h3> ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.chart_title"), "html", null, true);
        echo " </h3>
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12\">
                        <label for=\"flat-type\"> ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.input-type"), "html", null, true);
        echo " </label>
                    </div>
                    <div class=\"col-lg-10 col-md-9 col-sm-8 col-xs-12\">
                        <div class=\"input-wrapper\">
                            <select name=\"flat-type\">
                                <option value=\"typ1\"> Typ 1</option>
                                <option value=\"typ2\"> Typ 2</option>
                                <option value=\"typ3\"> Typ 3</option>
                            </select>
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\"> ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.input-type-tooltip"), "html", null, true);
        echo " </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"cities\">
                <table>
                    <thead>
                        <th></th>
                        <th> ";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.chart_cheapest"), "html", null, true);
        echo " </th>
                        <th class='av'> ";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.chart_avg"), "html", null, true);
        echo " </th>
                        <th class=\"red\"> ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.chart_expansive"), "html", null, true);
        echo " </th>
                    </thead>
                    <tbody>
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 80
            echo "                        <tr";
            if (($this->extensions['App\Twig\AppExtension']->findCity($context["x"]) == $this->extensions['App\Twig\AppExtension']->cityInfo((isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new Twig_Error_Runtime('Variable "city" does not exist.', 80, $this->source); })())))) {
                echo " class='active'";
            }
            echo ">
                            <td>
                                ";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->findCity($context["x"]), "html", null, true);
            echo " 
                                <span class=\"info\">?</span>
                                <div class=\"tooltip\">
                                    <div class=\"content\">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                    </div>
                                </div>
                            </td>
                            <td data-min=\"1\">
                                 1,00 zł 
                            </td>
                            <td class=\"canvas-holder chart-cell\">
                                <canvas height=\"603\" id=\"can\"> </canvas>
                                <div class=\"chart-bar\"><div class=\"chart-point\"><span>5,00zł</span></div> </div>
                            </td>
                            <td> 7,00 zł</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class=\"wrapper\"> ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("city.wrapper"), "html", null, true);
        echo " </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/canvasChart.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "city/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 109,  239 => 106,  231 => 100,  207 => 82,  199 => 80,  195 => 79,  189 => 76,  185 => 75,  181 => 74,  168 => 64,  153 => 52,  146 => 48,  132 => 39,  126 => 38,  117 => 32,  108 => 26,  103 => 24,  98 => 22,  83 => 10,  79 => 9,  73 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block bodyType %} class='subpage' {% endblock %}
{% block body %}
    <section class=\"breadcrumbs\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <a href=\"{{ path('default') }}\"> Strona główna </a>
                    <a href=\"#\"> {{ city|cityInfo }} </a>
                </div>
            </div>
            
        </div>
    </section>

    <section class='smaller-padding'>
        <div class=\"wrapper\">
            <div class=\"row middle-md between-md\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"content left\">
                        <h1 class=\"red\"> {{ city|cityInfo(\"header_title\") }}</h1>
                        <p class=\"big-paragraph\">
                            {{ city|cityInfo(\"header_subtitle\") }}
                        </p>
                        {{ city|cityInfo(\"description\") }}
                    </div>
                </div>

                <div class=\"col-md-5 col-sm-12\">
                    <div class=\"image-border\">
                        <img src=\"{{ city|cityInfo(\"photo\") }}\" alt=\"zdjęcie\">   
                    </div>
                </div>

                <div class=\"col-xs-12\">
                    <ul class=\"social-media\">
                        <li> <a href=\"{{ 'city.facebook'|toWording }}\"> <img src=\"{{ asset('images/fb-icon.jpg') }}\" alt=\"facebook\"> </a> </li>
                        <li> <a href=\"{{ 'city.twitter'|toWording }}\"> <img src=\"{{ asset('images/tw-icon.jpg') }}\" alt=\"twitter\"> </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=\"comparision smaller-padding\">
        <div class=\"wrapper\">
            <h3> {{ 'city.chart_title'|toWording }} </h3>
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12\">
                        <label for=\"flat-type\"> {{ 'city.input-type'|toWording }} </label>
                    </div>
                    <div class=\"col-lg-10 col-md-9 col-sm-8 col-xs-12\">
                        <div class=\"input-wrapper\">
                            <select name=\"flat-type\">
                                <option value=\"typ1\"> Typ 1</option>
                                <option value=\"typ2\"> Typ 2</option>
                                <option value=\"typ3\"> Typ 3</option>
                            </select>
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\"> {{ 'city.input-type-tooltip'|toWording }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"cities\">
                <table>
                    <thead>
                        <th></th>
                        <th> {{ 'city.chart_cheapest'|toWording }} </th>
                        <th class='av'> {{ 'city.chart_avg'|toWording }} </th>
                        <th class=\"red\"> {{ 'city.chart_expansive'|toWording }} </th>
                    </thead>
                    <tbody>
                    {% for x in 1..9 %}
                        <tr{% if x|findCity == city|cityInfo %} class='active'{% endif %}>
                            <td>
                                {{ x|findCity }} 
                                <span class=\"info\">?</span>
                                <div class=\"tooltip\">
                                    <div class=\"content\">
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                    </div>
                                </div>
                            </td>
                            <td data-min=\"1\">
                                 1,00 zł 
                            </td>
                            <td class=\"canvas-holder chart-cell\">
                                <canvas height=\"603\" id=\"can\"> </canvas>
                                <div class=\"chart-bar\"><div class=\"chart-point\"><span>5,00zł</span></div> </div>
                            </td>
                            <td> 7,00 zł</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class=\"wrapper\"> {{ 'city.wrapper'|toWording }} </div>
    </section>
{% endblock %}
{% block javascripts %}<script src=\"{{ asset('js/canvasChart.js') }}\"></script>{% endblock %}", "city/index.html.twig", "/application/templates/city/index.html.twig");
    }
}
