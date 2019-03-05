<?php

/* @EightPointsGuzzle/debug.html.twig */
class __TwigTemplate_c15064946aefcd607e6ad2ebf3d02e2326f5f7bd0c461224f4a0f47bc758a7af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EightPointsGuzzle/debug.html.twig", 1);
        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'head' => [$this, 'block_head'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EightPointsGuzzle/debug.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EightPointsGuzzle/debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 4, $this->source); })()), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->source); })()), "callCount", [])) {
            // line 7
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->source); })()), "errorCount", [])) {
                // line 8
                echo "            ";
                $context["color"] = "red";
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "            ";
                $context["color"] = "green";
                // line 11
                echo "        ";
            }
            // line 12
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "errorCount", [])) ? ("red") : (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "hasSlowResponses", [], "method")) ? ("yellow") : ("normal"))));
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            ";
            // line 16
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 16, $this->source); })()) == 1)) {
                // line 17
                echo "                ";
                echo twig_include($this->env, $context, "@EightPointsGuzzle/Icons/logo.svg.twig");
                echo "
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 18
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new Twig_Error_Runtime('Variable "color" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "\">
                    ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->source); })()), "callCount", []), "html", null, true);
                echo "
                </span>
            ";
            } else {
                // line 22
                echo "                ";
                echo twig_include($this->env, $context, "@EightPointsGuzzle/Icons/logo.svg.twig");
                echo "
                <span class=\"sf-toolbar-value\">
                   ";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->source); })()), "callCount", []), "html", null, true);
                echo "
                </span>
            ";
            }
            // line 27
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 28
            echo "
        ";
            // line 29
            ob_start();
            // line 30
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->source); })()), "callCount", []), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 37, $this->source); })()), "totalTime", []) > 1.0)) {
                // line 38
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 38, $this->source); })()), "totalTime", [])), "html", null, true);
                echo " s</span>
                ";
            } else {
                // line 40
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 40, $this->source); })()), "totalTime", []) * 1000)), "html", null, true);
                echo " ms</span>
                ";
            }
            // line 42
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 44
            echo "
        ";
            // line 45
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@EightPointsGuzzle/debug.html.twig", 45)->display(array_merge($context, ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 45, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new Twig_Error_Runtime('Variable "status_color" does not exist.', 45, $this->source); })())]));
            // line 46
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 51
        echo "    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 53
        echo twig_include($this->env, $context, "@EightPointsGuzzle/Icons/logo.svg.twig");
        echo "
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 57, $this->source); })()), "callCount", []), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 64
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/eightpointsguzzle/css/main.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 70
        echo "    <h2>Logs</h2>

    ";
        // line 72
        $this->loadTemplate("@EightPointsGuzzle/profiler.html.twig", "@EightPointsGuzzle/debug.html.twig", 72)->display(array_merge($context, ["collector" => (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 72, $this->source); })())]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EightPointsGuzzle/debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 72,  243 => 70,  234 => 69,  222 => 66,  216 => 64,  207 => 63,  193 => 57,  186 => 53,  182 => 51,  173 => 50,  162 => 46,  160 => 45,  157 => 44,  153 => 42,  147 => 40,  141 => 38,  139 => 37,  131 => 32,  127 => 30,  125 => 29,  122 => 28,  119 => 27,  113 => 24,  107 => 22,  101 => 19,  97 => 18,  92 => 17,  89 => 16,  87 => 15,  85 => 14,  82 => 13,  79 => 12,  76 => 11,  73 => 10,  70 => 9,  67 => 8,  64 => 7,  62 => 6,  59 => 5,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if collector.callCount %}
        {% if collector.errorCount %}
            {% set color = 'red' %}
        {% else %}
            {% set color = 'green' %}
        {% endif %}
        {% set status_color = collector.errorCount ? 'red' : (collector.hasSlowResponses() ? 'yellow' : 'normal') %}

        {% set icon %}
            {# Symfony <2.8 toolbar #}
            {% if profiler_markup_version == 1 %}
                {{ include(\"@EightPointsGuzzle/Icons/logo.svg.twig\") }}
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ color }}\">
                    {{ collector.callCount }}
                </span>
            {% else %}
                {{ include(\"@EightPointsGuzzle/Icons/logo.svg.twig\") }}
                <span class=\"sf-toolbar-value\">
                   {{ collector.callCount }}
                </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.callCount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                {% if collector.totalTime > 1.0 %}
                    <span>{{ '%0.2f'|format(collector.totalTime) }} s</span>
                {% else %}
                    <span>{{ '%0.0f'|format(collector.totalTime * 1000) }} ms</span>
                {% endif %}
            </div>
        {% endset %}

        {% include \"@WebProfiler/Profiler/toolbar_item.html.twig\" with { \"link\": profiler_url, status: status_color } %}
    {% endif %}
{% endblock %}


{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            {{ include(\"@EightPointsGuzzle/Icons/logo.svg.twig\") }}
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>{{ collector.callCount }}</span>
        </span>
    </span>
{% endblock %}


{% block head %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/eightpointsguzzle/css/main.css') }}\" />
{% endblock %}

{% block panel %}
    <h2>Logs</h2>

    {% include '@EightPointsGuzzle/profiler.html.twig' with { 'collector': collector } %}
{% endblock %}
", "@EightPointsGuzzle/debug.html.twig", "/application/vendor/eightpoints/guzzle-bundle/src/Resources/views/debug.html.twig");
    }
}
