<?php

/* page/show.html.twig */
class __TwigTemplate_4a149119236959b09f7c3f2731b42346991e1a4277806a5f9ef1519043b5adba extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("title.city"), "html", null, true);
    }

    // line 4
    public function block_bodyType($context, array $blocks = [])
    {
        echo " class='subpage' ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "titleHeader", []), "html", null, true);
        echo "</h1>
                        <p class=\"big-paragraph\">
                            ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "subtitleHeader", []), "html", null, true);
        echo "
                        </p>
                        ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "description", []), "html", null, true);
        echo "
                    </div>
                </div>

                <div class=\"col-md-5 col-sm-12\">
                    <div class=\"image-border\">
                        <img src=\"http://realestate.wiseweb.pl/";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "photo", []), "html", null, true);
        echo "\" alt=\"zdjęcie\">
                    </div>
                </div>

                <div class=\"col-xs-12\">
                    <ul class=\"social-media\">
                        <li><a href=\"http://www.facebook.com/sharer/sharer.php?s=100&p[url]=";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "uri", []), "html", null, true);
        echo "/&p[images][1]=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "uri", []), "html", null, true);
        echo "/}&p[title]=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", []), "html", null, true);
        echo "&p[summary]=zajawka”\" target=\"_blank\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fb-icon.jpg"), "html", null, true);
        echo "\" alt=\"facebook\"> </a></li>
                        <li><a href=\"https://twitter.com/intent/tweet?url=";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", []), "uri", []), "html", null, true);
        echo "\" target=\"_blank\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tw-icon.jpg"), "html", null, true);
        echo "\" alt=\"twitter\"> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class=\"comparision smaller-padding\">
        <div class=\"wrapper\">
            <h3> ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.chart_title"), "html", null, true);
        echo " </h3>
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-12\">
                        <label for=\"flat-type\"> ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.input-type"), "html", null, true);
        echo " </label>
                    </div>
                    <div class=\"col-lg-10 col-md-9 col-sm-8 col-xs-12\">
                        <div class=\"input-wrapper\">
                            <select name=\"flat-type\" id=\"select-flat-type\">
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_list"] ?? null));
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
            // line 59
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
        // line 61
        echo "                            </select>
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\"> ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.input-type-tooltip"), "html", null, true);
        echo " </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"cities\">
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PageController::recentChart", ["active" => twig_get_attribute($this->env, $this->source,         // line 74
($context["page"] ?? null), "slug", [])]));
        // line 75
        echo "
            </div>
        </div>
    </section>
    <section>
        <div class=\"wrapper\"> ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("page.wrapper"), "html", null, true);
        echo " </div>
    </section>
";
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        // line 84
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/canvasChart.js"), "html", null, true);
        echo "\"></script>";
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
        return array (  214 => 84,  211 => 83,  204 => 80,  197 => 75,  195 => 74,  194 => 72,  184 => 65,  178 => 61,  159 => 59,  142 => 58,  134 => 53,  127 => 49,  113 => 40,  103 => 39,  94 => 33,  85 => 27,  80 => 25,  75 => 23,  60 => 11,  56 => 10,  50 => 6,  47 => 5,  41 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "page/show.html.twig", "/application/templates/page/show.html.twig");
    }
}
