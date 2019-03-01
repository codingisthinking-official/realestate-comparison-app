<?php

/* page/show.html.twig */
class __TwigTemplate_d86c5092730b1b420e634df8ff4ace1c648f2470c48edcdd583ddc7037602a53 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "page/show.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("title.city"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"breadcrumbs\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"> Strona główna </a>
                    <a href=\"#\"> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 11, $this->source); })()), "title", []), "html", null, true);
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
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 23, $this->source); })()), "titleHeader", []), "html", null, true);
        echo "</h1>
                        <p class=\"big-paragraph\">
                            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 25, $this->source); })()), "subtitleHeader", []), "html", null, true);
        echo "
                        </p>
                        ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 27, $this->source); })()), "description", []), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"col-md-5 col-sm-12\">
                    <div class=\"image-border\">
                        <img src=\"http://realestate.wiseweb.pl/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 33, $this->source); })()), "photo", []), "html", null, true);
        echo "\" alt=\"zdjęcie\">
                    </div>
                </div>

                <div class=\"col-xs-12\">
                    <ul class=\"social-media\">
                        <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.facebook"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fb-icon.jpg"), "html", null, true);
        echo "\"
                                                                            alt=\"facebook\"> </a></li>
                        <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.twitter"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tw-icon.jpg"), "html", null, true);
        echo "\"
                                                                           alt=\"twitter\"> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=\"comparision smaller-padding\">
        <div class=\"wrapper\">
            <h3> ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.chart_title"), "html", null, true);
        echo " </h3>
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12\">
                        <label for=\"flat-type\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.input-type"), "html", null, true);
        echo " </label>
                    </div>
                    <div class=\"col-lg-10 col-md-9 col-sm-8 col-xs-12\">
                        <div class=\"input-wrapper\">
                            <select name=\"flat-type\" id=\"select-flat-type\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_list"]) || array_key_exists("type_list", $context) ? $context["type_list"] : (function () { throw new Twig_Error_Runtime('Variable "type_list" does not exist.', 60, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 61
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</option>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                            </select>
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.input-type-tooltip"), "html", null, true);
        echo " </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"cities\">
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PageController::recentChart", ["active" => twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 76, $this->source); })()), "slug", [])]));
        // line 77
        echo "
            </div>
        </div>
    </section>
    <section>
        <div class=\"wrapper\"> ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.wrapper"), "html", null, true);
        echo " </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/canvasChart.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 86,  257 => 85,  244 => 82,  237 => 77,  235 => 76,  234 => 74,  224 => 67,  218 => 63,  199 => 61,  182 => 60,  174 => 55,  167 => 51,  152 => 41,  145 => 39,  136 => 33,  127 => 27,  122 => 25,  117 => 23,  102 => 11,  98 => 10,  92 => 6,  83 => 5,  65 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.city'|toWording }}{% endblock %}
{% block bodyType %} class='subpage' {% endblock %}
{% block body %}
    <section class=\"breadcrumbs\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <a href=\"{{ path('homepage') }}\"> Strona główna </a>
                    <a href=\"#\"> {{ page.title }} </a>
                </div>
            </div>

        </div>
    </section>

    <section class='smaller-padding'>
        <div class=\"wrapper\">
            <div class=\"row middle-md between-md\">
                <div class=\"col-md-6 col-sm-12\">
                    <div class=\"content left\">
                        <h1 class=\"red\"> {{ page.titleHeader }}</h1>
                        <p class=\"big-paragraph\">
                            {{ page.subtitleHeader }}
                        </p>
                        {{ page.description }}
                    </div>
                </div>

                <div class=\"col-md-5 col-sm-12\">
                    <div class=\"image-border\">
                        <img src=\"http://realestate.wiseweb.pl/{{ page.photo }}\" alt=\"zdjęcie\">
                    </div>
                </div>

                <div class=\"col-xs-12\">
                    <ul class=\"social-media\">
                        <li><a href=\"{{ 'page.facebook'|toWording }}\"> <img src=\"{{ asset('images/fb-icon.jpg') }}\"
                                                                            alt=\"facebook\"> </a></li>
                        <li><a href=\"{{ 'page.twitter'|toWording }}\"> <img src=\"{{ asset('images/tw-icon.jpg') }}\"
                                                                           alt=\"twitter\"> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=\"comparision smaller-padding\">
        <div class=\"wrapper\">
            <h3> {{ 'page.chart_title'|toWording }} </h3>
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12\">
                        <label for=\"flat-type\"> {{ 'page.input-type'|toWording }} </label>
                    </div>
                    <div class=\"col-lg-10 col-md-9 col-sm-8 col-xs-12\">
                        <div class=\"input-wrapper\">
                            <select name=\"flat-type\" id=\"select-flat-type\">
                                {% for type in type_list %}
                                    <option value=\"{{ loop.index }}\">{{ type }}</option>
                                {% endfor %}
                            </select>
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\"> {{ 'page.input-type-tooltip'|toWording }} </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"cities\">
                {{ render(controller(
                    'App\\\\Controller\\\\PageController::recentChart',
                    { 'active': page.slug  }
                )) }}
            </div>
        </div>
    </section>
    <section>
        <div class=\"wrapper\"> {{ 'page.wrapper'|toWording }} </div>
    </section>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/canvasChart.js') }}\"></script>{% endblock %}", "page/show.html.twig", "/application/templates/page/show.html.twig");
    }
}
