<?php

/* page/recent_chart.html.twig */
class __TwigTemplate_eca022a372456ae9d42fcb965293d9a0dd41180bd774d6d147033a707b5a1c9f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/recent_chart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "page/recent_chart.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 1, $this->source); })()));
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
            // line 2
            echo "    <table class=\"chart table-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) != 1)) {
                echo "style=\"display:none;\"";
            }
            echo ">
        <thead>
        <th></th>
        <th> ";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.chart_cheapest"), "html", null, true);
            echo " </th>
        <th class='av'> ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.chart_avg"), "html", null, true);
            echo " </th>
        <th class=\"red\"> ";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.chart_expansive"), "html", null, true);
            echo " </th>
        </thead>
        <tbody>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["type"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 11
                echo "            <tr";
                if (((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new Twig_Error_Runtime('Variable "activePage" does not exist.', 11, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["page"], "slug", []))) {
                    echo " class='active'";
                }
                echo " data-min=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "minPrice", []), "html", null, true);
                echo "\"
                                                                          data-avg=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "avgPrice", []), "html", null, true);
                echo "\"
                                                                          data-max=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "maxPrice", []), "html", null, true);
                echo "\">
                <td>
                    ";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", []), "html", null, true);
                echo "
                    <span class=\"info\">?</span>
                    <div class=\"tooltip\">
                        <div class=\"content\">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam
                            optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi
                            perspiciatis veritatis repellendus!
                        </div>
                    </div>
                </td>
                <td>
                    ";
                // line 26
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "minPrice", []), 2, ".", ","), "html", null, true);
                echo "zł
                </td>
                <td class=\"";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) {
                    echo "canvas-holder ";
                }
                echo "chart-cell\">
                    ";
                // line 29
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) {
                    echo "<canvas height=\"603\" class=\"can\"></canvas>";
                }
                // line 30
                echo "                    <div class=\"chart-bar\">
                        <div class=\"chart-point\"><span>";
                // line 31
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "avgPrice", []), 2, ".", ","), "html", null, true);
                echo "zł</span></div>
                    </div>
                </td>
                <td> ";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "maxPrice", []), 2, ".", ","), "html", null, true);
                echo "zł</td>
            </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </tbody>
    </table>
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "page/recent_chart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 37,  144 => 34,  138 => 31,  135 => 30,  131 => 29,  125 => 28,  120 => 26,  106 => 15,  101 => 13,  97 => 12,  88 => 11,  71 => 10,  65 => 7,  61 => 6,  57 => 5,  46 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for type in types %}
    <table class=\"chart table-{{ loop.index }}\" {% if loop.index != 1 %}style=\"display:none;\"{% endif %}>
        <thead>
        <th></th>
        <th> {{ 'page.chart_cheapest'|toWording }} </th>
        <th class='av'> {{ 'page.chart_avg'|toWording }} </th>
        <th class=\"red\"> {{ 'page.chart_expansive'|toWording }} </th>
        </thead>
        <tbody>
        {% for page in type %}
            <tr{% if activePage == page.slug %} class='active'{% endif %} data-min=\"{{ page.minPrice }}\"
                                                                          data-avg=\"{{ page.avgPrice }}\"
                                                                          data-max=\"{{ page.maxPrice }}\">
                <td>
                    {{ page.title }}
                    <span class=\"info\">?</span>
                    <div class=\"tooltip\">
                        <div class=\"content\">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam
                            optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi
                            perspiciatis veritatis repellendus!
                        </div>
                    </div>
                </td>
                <td>
                    {{ page.minPrice|number_format(2, '.', ',') }}zł
                </td>
                <td class=\"{% if loop.index == 1 %}canvas-holder {% endif %}chart-cell\">
                    {% if loop.index == 1 %}<canvas height=\"603\" class=\"can\"></canvas>{% endif %}
                    <div class=\"chart-bar\">
                        <div class=\"chart-point\"><span>{{ page.avgPrice|number_format(2, '.', ',') }}zł</span></div>
                    </div>
                </td>
                <td> {{ page.maxPrice|number_format(2, '.', ',') }}zł</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endfor %}", "page/recent_chart.html.twig", "/application/templates/page/recent_chart.html.twig");
    }
}
