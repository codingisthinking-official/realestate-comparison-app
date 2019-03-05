<?php

/* landing/index.html.twig */
class __TwigTemplate_bf01b62b3b3b8e6ad8b9ea194851164dd2cb10a37f84e92fba1f468a75ec2945 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("title.default"), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["type_list"] ?? null));
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
        <div class=\"wrapper\" style=\"margin-bottom: 100px;\">
            <div class=\"result\">
                <span> <b> ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result"), "html", null, true);
        echo " <span
                                class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> ";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_avg"), "html", null, true);
        echo "
                    <span class=\"turnOff\"> <span class=\"avg-info\">10</span> zł/m<sup>2</sup></span> </span>
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

            <div class=\"expensive\" style=\"display:none;\">
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
                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bills"] ?? null));
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
            // line 155
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2 == 1)) {
                // line 156
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["bill"], "chart", [])) {
                    // line 157
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"number\" name=\"in1\" placeholder=\"0\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 163
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
                    // line 184
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 185
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 190
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "tooltip", []), "html", null, true);
                    echo "</div>
                                        </div>
                                    </div>
                                ";
                }
                // line 194
                echo "                            ";
            }
            // line 195
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
        // line 196
        echo "                    </div>
                    <div class=\"col-md-6 col-xs-12\">
                        ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bills"] ?? null));
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
            // line 199
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", []) % 2 == 0)) {
                // line 200
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, $context["bill"], "chart", [])) {
                    // line 201
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 202
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"number\" name=\"in1\" placeholder=\"0\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 207
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
                    // line 228
                    echo "                                    <label for=\"in1\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "title", []), "html", null, true);
                    echo "</label>
                                    <div class=\"input-wrapper\" data-billId=\"";
                    // line 229
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "id", []), "html", null, true);
                    echo "\">
                                        <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                                        <span class=\"info\">?</span>

                                        <div class=\"tooltip\">
                                            <div class=\"content\">";
                    // line 234
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bill"], "tooltip", []), "html", null, true);
                    echo "</div>
                                        </div>
                                    </div>
                                ";
                }
                // line 238
                echo "                            ";
            }
            // line 239
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
        // line 240
        echo "                    </div>
                </div>
                <div class=\"row end-xs savings\">
                    <div class=\"col-xs-12\">
                        <div class=\"red\"> ";
        // line 244
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
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("btn.export_to_pdf"), "html", null, true);
        echo " </a>
                </div>
            </div>
        </div>
    </section>
";
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
        return array (  474 => 253,  462 => 244,  456 => 240,  442 => 239,  439 => 238,  432 => 234,  424 => 229,  419 => 228,  395 => 207,  387 => 202,  382 => 201,  379 => 200,  376 => 199,  359 => 198,  355 => 196,  341 => 195,  338 => 194,  331 => 190,  323 => 185,  318 => 184,  294 => 163,  286 => 158,  281 => 157,  278 => 156,  275 => 155,  258 => 154,  243 => 142,  229 => 131,  222 => 127,  216 => 124,  209 => 120,  195 => 109,  187 => 104,  183 => 103,  171 => 94,  152 => 78,  133 => 62,  121 => 53,  110 => 45,  98 => 36,  87 => 28,  82 => 25,  71 => 23,  67 => 22,  58 => 16,  48 => 9,  42 => 5,  39 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "landing/index.html.twig", "/application/templates/landing/index.html.twig");
    }
}
