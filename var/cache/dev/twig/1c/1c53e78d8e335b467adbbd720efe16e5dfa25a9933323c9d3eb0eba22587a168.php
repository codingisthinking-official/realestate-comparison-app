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
        $context['_seq'] = twig_ensure_traversable((isset($context["pageList"]) || array_key_exists("pageList", $context) ? $context["pageList"] : (function () { throw new Twig_Error_Runtime('Variable "pageList" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <tr";
            if (((isset($context["activePage"]) || array_key_exists("activePage", $context) ? $context["activePage"] : (function () { throw new Twig_Error_Runtime('Variable "activePage" does not exist.', 2, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["page"], "slug", []))) {
                echo " class='active'";
            }
            echo ">
        <td>
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "title", []), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
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
        return array (  41 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for page in pageList %}
    <tr{% if activePage == page.slug %} class='active'{% endif %}>
        <td>
            {{ page.title }}
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
{% endfor %}", "page/recent_chart.html.twig", "/application/templates/page/recent_chart.html.twig");
    }
}
