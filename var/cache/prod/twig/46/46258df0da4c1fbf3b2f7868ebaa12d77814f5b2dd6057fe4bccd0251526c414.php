<?php

/* page/recent_chart.html.twig */
class __TwigTemplate_fc1a27e7da34ac0d796fa9244385624869e49c52a4b08bf4f239aea687117b97 extends Twig_Template
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
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
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
                if ((($context["activePage"] ?? null) == twig_get_attribute($this->env, $this->source, $context["page"], "slug", []))) {
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
                            Miasto tętniące życiem.
                        </div>
                    </div>
                </td>
                <td>
                    ";
                // line 24
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "minPrice", []), 2, ".", ","), "html", null, true);
                echo "zł
                </td>
                <td class=\"";
                // line 26
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) {
                    echo "canvas-holder ";
                }
                echo "chart-cell\">
                    ";
                // line 27
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) == 1)) {
                    echo "<canvas height=\"603\" class=\"can\"></canvas>";
                }
                // line 28
                echo "                    <div class=\"chart-bar\">
                        <div class=\"chart-point\"><span>";
                // line 29
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "avgPrice", []), 2, ".", ","), "html", null, true);
                echo "zł</span></div>
                    </div>
                </td>
                <td> ";
                // line 32
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
            // line 35
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
        return array (  153 => 35,  136 => 32,  130 => 29,  127 => 28,  123 => 27,  117 => 26,  112 => 24,  100 => 15,  95 => 13,  91 => 12,  82 => 11,  65 => 10,  59 => 7,  55 => 6,  51 => 5,  40 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/recent_chart.html.twig", "/application/templates/page/recent_chart.html.twig");
    }
}
