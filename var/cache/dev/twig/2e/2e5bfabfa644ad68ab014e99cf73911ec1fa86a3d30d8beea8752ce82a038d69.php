<?php

/* landing/index.html.twig */
class __TwigTemplate_29396fe9a61599b2d0ff746412ce9a5c46dd175bf57830b809abd09ec4afc3db extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "landing/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "landing/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "landing/index.html.twig"));

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

        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("title.default"), "html", null, true);
        
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
        echo "    <section id=\"form\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <p class=\"big-padding\"> ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.first-line"), "html", null, true);
        echo " </p>
                </div>
                <div class=\"col-xs-12\">

                    <form action=\"\">
                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"flat-type\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-type"), "html", null, true);
        echo "<span class=\"red\">*</span>:
                                </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <select name=\"flat-type\">
                                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_list"]) || array_key_exists("type_list", $context) ? $context["type_list"] : (function () { throw new Twig_Error_Runtime('Variable "type_list" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 23
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                                    </select>
                                    <span class=\"info\">?</span>
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-type-tooltip"), "html", null, true);
        echo " </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"postal-code\"> ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-postcode"), "html", null, true);
        echo " <span
                                            class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"text\" name=\"postal-code\" maxlength=\"6\">
                                    <span class=\"info\">?</span>

                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-postcode-tooltip"), "html", null, true);
        echo " </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"rent\"> ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-cost"), "html", null, true);
        echo " <span class=\"red\">*</span>:
                                </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"rent\">
                                    <span class=\"info\">?</span>

                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-cost-tooltip"), "html", null, true);
        echo " </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"area\"> Powierzchnia w m<sup>2</sup><span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"area\">
                                    <span class=\"info\">?</span>

                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-msquare-tooltip"), "html", null, true);
        echo " </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class=\"row end-xs\">
                        <div class=\"col-xs-12\">
                            <span class=\"red\"> * - dane wymagane </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\" center-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" id=\"compare\" class=\"button yellow-bcg wide\"> ";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.button_compare"), "html", null, true);
        echo " </a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"compared bad\" id=\"compared\">
        <div class=\"wrapper\">
            <div class=\"result\">
                <span> <b> ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result"), "html", null, true);
        echo " <span
                                class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> ";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_avg"), "html", null, true);
        echo "
                    <span class=\"avg-info\">10</span> zł/m<sup>2</sup></span>
            </div>
            <div class=\"price-bar\">
                <div class=\"min-price\">
                    ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.cheapest"), "html", null, true);
        echo " <br/>
                    <span data-min=\"5\"> 5zł </span>
                </div>

                <div class=\"bar\">
                    <div class=\"your-bar\"></div>
                    <div class=\"your-result\"> 15zł</div>
                    <div class=\"average\" data-avg=\"10\"> 10zł</div>
                </div>

                <div class=\"max-price\">
                    ";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.the_most_expensive"), "html", null, true);
        echo " <br/>
                    <span data-max=\"50\"> 50zł </span>
                </div>
            </div>
            <p class=\"big-paragraph\"> ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_comment_bad"), "html", null, true);
        echo " </p>

            <div class=\"expensive\" style=\"display: none;\">
                <p> ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_summary_header"), "html", null, true);
        echo " </p>

                <div class=\"added-bills\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 end-xs\"> ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_summary_text"), "html", null, true);
        echo " </div>
                        <div class=\"col-sm-6 start-xs\">
                            <div class=\"bill-name\"> nazwa_rachunku_1
                                <span class=\"delete\"> usuń X</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\" center-xs\">
                    <div class=\"col-xs-12\">
                        <a href=\"#\" id=\"analyse\"
                           class=\"button yellow-bcg wide\"> ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.button_analyse"), "html", null, true);
        echo " </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"price-analysis\" id=\"price-analysis\">
        <div class=\"wrapper\">
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12\">
                        <label for=\"in1\">";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat1"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat1_tooltip"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 164
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat2"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat2_tooltip"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat3"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat3_tooltip"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat4"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat4_tooltip"), "html", null, true);
        echo "</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat5"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat5_tooltip"), "html", null, true);
        echo "</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat6"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat6_tooltip"), "html", null, true);
        echo "</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-xs-12\">
                        <label for=\"in1\">";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat7"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"texte\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat7_tooltip"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat8"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat8_tooltip"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat9"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat9_tooltip"), "html", null, true);
        echo "</div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat10"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat10_tooltip"), "html", null, true);
        echo "</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat11"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat11_tooltip"), "html", null, true);
        echo "</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat12"), "html", null, true);
        echo "</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("stat12_tooltip"), "html", null, true);
        echo "</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row end-xs savings\">
                    <div class=\"col-xs-12\">
                        <div class=\"red\"> ";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.avg_info"), "html", null, true);
        echo " </div>
                    </div>
                </div>
            </form>

            <br/>
            <br/>
            <div class=\" center-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" id=\"export\" class=\"button yellow-bcg wide\"> ";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("btn.export_to_pdf"), "html", null, true);
        echo " </a>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "landing/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 390,  587 => 381,  560 => 357,  551 => 351,  527 => 330,  518 => 324,  494 => 303,  485 => 297,  478 => 293,  469 => 287,  462 => 283,  453 => 277,  446 => 273,  437 => 267,  411 => 244,  402 => 238,  378 => 217,  369 => 211,  345 => 190,  336 => 184,  329 => 180,  320 => 174,  313 => 170,  304 => 164,  297 => 160,  288 => 154,  273 => 142,  259 => 131,  252 => 127,  246 => 124,  239 => 120,  225 => 109,  217 => 104,  213 => 103,  201 => 94,  182 => 78,  163 => 62,  151 => 53,  140 => 45,  128 => 36,  117 => 28,  112 => 25,  101 => 23,  97 => 22,  88 => 16,  78 => 9,  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.default'|toWording }}{% endblock %}
{% block body %}
    <section id=\"form\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <p class=\"big-padding\"> {{ 'index.first-line'|toWording }} </p>
                </div>
                <div class=\"col-xs-12\">

                    <form action=\"\">
                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"flat-type\"> {{ 'index.input-type'|toWording }}<span class=\"red\">*</span>:
                                </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <select name=\"flat-type\">
                                        {% for type in type_list %}
                                            <option value=\"{{ type }}\">{{ type }}</option>
                                        {% endfor %}
                                    </select>
                                    <span class=\"info\">?</span>
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> {{ 'index.input-type-tooltip'|toWording }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"postal-code\"> {{ 'index.input-postcode'|toWording }} <span
                                            class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"text\" name=\"postal-code\" maxlength=\"6\">
                                    <span class=\"info\">?</span>

                                    <div class=\"tooltip\">
                                        <div class=\"content\"> {{ 'index.input-postcode-tooltip'|toWording }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"rent\"> {{ 'index.input-cost'|toWording }} <span class=\"red\">*</span>:
                                </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"rent\">
                                    <span class=\"info\">?</span>

                                    <div class=\"tooltip\">
                                        <div class=\"content\"> {{ 'index.input-cost-tooltip'|toWording }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-4 align-right\">
                                <label for=\"area\"> Powierzchnia w m<sup>2</sup><span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"area\">
                                    <span class=\"info\">?</span>

                                    <div class=\"tooltip\">
                                        <div class=\"content\"> {{ 'index.input-msquare-tooltip'|toWording }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class=\"row end-xs\">
                        <div class=\"col-xs-12\">
                            <span class=\"red\"> * - dane wymagane </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\" center-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" id=\"compare\" class=\"button yellow-bcg wide\"> {{ 'index.button_compare'|toWording }} </a>
                </div>
            </div>
        </div>
    </section>

    <section class=\"compared bad\" id=\"compared\">
        <div class=\"wrapper\">
            <div class=\"result\">
                <span> <b> {{ 'index.result'|toWording }} <span
                                class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> {{ 'index.result_avg'|toWording }}
                    <span class=\"avg-info\">10</span> zł/m<sup>2</sup></span>
            </div>
            <div class=\"price-bar\">
                <div class=\"min-price\">
                    {{ 'index.cheapest'|toWording }} <br/>
                    <span data-min=\"5\"> 5zł </span>
                </div>

                <div class=\"bar\">
                    <div class=\"your-bar\"></div>
                    <div class=\"your-result\"> 15zł</div>
                    <div class=\"average\" data-avg=\"10\"> 10zł</div>
                </div>

                <div class=\"max-price\">
                    {{ 'index.the_most_expensive'|toWording }} <br/>
                    <span data-max=\"50\"> 50zł </span>
                </div>
            </div>
            <p class=\"big-paragraph\"> {{ 'index.result_comment_bad'|toWording }} </p>

            <div class=\"expensive\" style=\"display: none;\">
                <p> {{ 'index.result_summary_header'|toWording }} </p>

                <div class=\"added-bills\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 end-xs\"> {{ 'index.result_summary_text'|toWording }} </div>
                        <div class=\"col-sm-6 start-xs\">
                            <div class=\"bill-name\"> nazwa_rachunku_1
                                <span class=\"delete\"> usuń X</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\" center-xs\">
                    <div class=\"col-xs-12\">
                        <a href=\"#\" id=\"analyse\"
                           class=\"button yellow-bcg wide\"> {{ 'index.button_analyse'|toWording }} </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"price-analysis\" id=\"price-analysis\">
        <div class=\"wrapper\">
            <form action=\"\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-12\">
                        <label for=\"in1\">{{ \"stat1\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat1_tooltip\"|toWording }}</div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat2\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat2_tooltip\"|toWording }}</div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat3\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat3_tooltip\"|toWording }}</div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat4\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat4_tooltip\"|toWording }}</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat5\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat5_tooltip\"|toWording }}</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat6\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat6_tooltip\"|toWording }}</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-xs-12\">
                        <label for=\"in1\">{{ \"stat7\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"texte\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat7_tooltip\"|toWording }}</div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat8\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat8_tooltip\"|toWording }}</div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat9\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat9_tooltip\"|toWording }}</div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat10\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat10_tooltip\"|toWording }}</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat11\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat11_tooltip\"|toWording }}</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\">{{ \"stat12\"|toWording }}</label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>

                            <div class=\"tooltip\">
                                <div class=\"content\">{{ \"stat12_tooltip\"|toWording }}</div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł</div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row end-xs savings\">
                    <div class=\"col-xs-12\">
                        <div class=\"red\"> {{ 'index.avg_info'|toWording }} </div>
                    </div>
                </div>
            </form>

            <br/>
            <br/>
            <div class=\" center-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" id=\"export\" class=\"button yellow-bcg wide\"> {{ 'btn.export_to_pdf'|toWording }} </a>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "landing/index.html.twig", "/application/templates/landing/index.html.twig");
    }
}
