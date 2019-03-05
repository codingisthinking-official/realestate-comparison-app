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

    <div id=\"data-loader\">
        <div class=\"loader-text\"> Proszę czekać, trwa ładowanie danych... </div>
        <div class=\"sk-circle\">
            <div class=\"sk-circle1 sk-child\"></div>
            <div class=\"sk-circle2 sk-child\"></div>
            <div class=\"sk-circle3 sk-child\"></div>
            <div class=\"sk-circle4 sk-child\"></div>
            <div class=\"sk-circle5 sk-child\"></div>
            <div class=\"sk-circle6 sk-child\"></div>
            <div class=\"sk-circle7 sk-child\"></div>
            <div class=\"sk-circle8 sk-child\"></div>
            <div class=\"sk-circle9 sk-child\"></div>
            <div class=\"sk-circle10 sk-child\"></div>
            <div class=\"sk-circle11 sk-child\"></div>
            <div class=\"sk-circle12 sk-child\"></div>
        </div>
    </div>

    <section class=\"compared bad\" id=\"compared\">
        <div class=\"wrapper\" style=\"margin-bottom: 100px;\">
            <div class=\"result\">
                <span> <b> ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result"), "html", null, true);
        echo " <span
                                class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_avg"), "html", null, true);
        echo "
                    <span class=\"turnOff\"> <span class=\"avg-info\">10</span> zł/m<sup>2</sup></span> </span>
            </div>
            <div class=\"price-bar\">
                <div class=\"min-price\">
                    ";
        // line 127
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
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.the_most_expensive"), "html", null, true);
        echo " <br/>
                    <span data-max=\"50\"> 50zł </span>
                </div>
            </div>
            <p class=\"big-paragraph\"> ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_comment_bad"), "html", null, true);
        echo " </p>

            <div class=\"expensive\" style=\"display:none;\">
                <p> ";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_summary_header"), "html", null, true);
        echo " </p>

                <div class=\"added-bills\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 end-xs\"> ";
        // line 149
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
        // line 160
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
                        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bills"]) || array_key_exists("bills", $context) ? $context["bills"] : (function () { throw new Twig_Error_Runtime('Variable "bills" does not exist.', 172, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bill"]) {
            // line 173
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2 == 1)) {
                // line 174
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["bill"], "chart", [])) {
                    // line 175
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 176
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"number\" name=\"in1\" placeholder=\"0\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 181
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "tooltip", []), "html", null, true);
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
                                ";
                } else {
                    // line 202
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 203
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 208
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "tooltip", []), "html", null, true);
                    echo "</div>
                                        </div>
                                    </div>
                                ";
                }
                // line 212
                echo "                            ";
            }
            // line 213
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "                    </div>
                    <div class=\"col-md-6 col-xs-12\">
                        ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bills"]) || array_key_exists("bills", $context) ? $context["bills"] : (function () { throw new Twig_Error_Runtime('Variable "bills" does not exist.', 216, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bill"]) {
            // line 217
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2 == 0)) {
                // line 218
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["bill"], "chart", [])) {
                    // line 219
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 220
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"number\" name=\"in1\" placeholder=\"0\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 225
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "tooltip", []), "html", null, true);
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
                                ";
                } else {
                    // line 246
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 247
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 252
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "tooltip", []), "html", null, true);
                    echo "</div>
                                        </div>
                                    </div>
                                ";
                }
                // line 256
                echo "                            ";
            }
            // line 257
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "                    </div>
                </div>
                <div class=\"row end-xs savings\">
                    <div class=\"col-xs-12\">
                        <div class=\"red\"> ";
        // line 262
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
        // line 271
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
        return array (  522 => 271,  510 => 262,  504 => 258,  490 => 257,  487 => 256,  480 => 252,  472 => 247,  467 => 246,  443 => 225,  435 => 220,  430 => 219,  427 => 218,  424 => 217,  407 => 216,  403 => 214,  389 => 213,  386 => 212,  379 => 208,  371 => 203,  366 => 202,  342 => 181,  334 => 176,  329 => 175,  326 => 174,  323 => 173,  306 => 172,  291 => 160,  277 => 149,  270 => 145,  264 => 142,  257 => 138,  243 => 127,  235 => 122,  231 => 121,  201 => 94,  182 => 78,  163 => 62,  151 => 53,  140 => 45,  128 => 36,  117 => 28,  112 => 25,  101 => 23,  97 => 22,  88 => 16,  78 => 9,  72 => 5,  63 => 4,  45 => 3,  15 => 1,);
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

    <div id=\"data-loader\">
        <div class=\"loader-text\"> Proszę czekać, trwa ładowanie danych... </div>
        <div class=\"sk-circle\">
            <div class=\"sk-circle1 sk-child\"></div>
            <div class=\"sk-circle2 sk-child\"></div>
            <div class=\"sk-circle3 sk-child\"></div>
            <div class=\"sk-circle4 sk-child\"></div>
            <div class=\"sk-circle5 sk-child\"></div>
            <div class=\"sk-circle6 sk-child\"></div>
            <div class=\"sk-circle7 sk-child\"></div>
            <div class=\"sk-circle8 sk-child\"></div>
            <div class=\"sk-circle9 sk-child\"></div>
            <div class=\"sk-circle10 sk-child\"></div>
            <div class=\"sk-circle11 sk-child\"></div>
            <div class=\"sk-circle12 sk-child\"></div>
        </div>
    </div>

    <section class=\"compared bad\" id=\"compared\">
        <div class=\"wrapper\" style=\"margin-bottom: 100px;\">
            <div class=\"result\">
                <span> <b> {{ 'index.result'|toWording }} <span
                                class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> {{ 'index.result_avg'|toWording }}
                    <span class=\"turnOff\"> <span class=\"avg-info\">10</span> zł/m<sup>2</sup></span> </span>
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

            <div class=\"expensive\" style=\"display:none;\">
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
                        {% for bill in bills %}
                            {% if loop.index is odd %}
                                {% if bill.chart %}
                                    <label for=\"in1\">{{ bill.title }}</label>
                                    <div class=\"input-wrapper\" data-billId=\"{{ bill.id }}\">
                                        <input type=\"number\" name=\"in1\" placeholder=\"0\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">{{ bill.tooltip }}</div>
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
                                {% else %}
                                    <label for=\"in1\">{{ bill.title }}</label>
                                    <div class=\"input-wrapper\" data-billId=\"{{ bill.id }}\">
                                        <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">{{ bill.tooltip }}</div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"col-md-6 col-xs-12\">
                        {% for bill in bills %}
                            {% if loop.index is even %}
                                {% if bill.chart %}
                                    <label for=\"in1\">{{ bill.title }}</label>
                                    <div class=\"input-wrapper\" data-billId=\"{{ bill.id }}\">
                                        <input type=\"number\" name=\"in1\" placeholder=\"0\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">{{ bill.tooltip }}</div>
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
                                {% else %}
                                    <label for=\"in1\">{{ bill.title }}</label>
                                    <div class=\"input-wrapper\" data-billId=\"{{ bill.id }}\">
                                        <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">{{ bill.tooltip }}</div>
                                        </div>
                                    </div>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
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
