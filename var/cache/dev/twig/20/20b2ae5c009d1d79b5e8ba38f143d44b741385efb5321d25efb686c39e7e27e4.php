<?php

/* default/index.html.twig */
class __TwigTemplate_a7c26678b879ee02c5a6a31de9edd39e2881d3997ee8023a236f0d595ab6a9ab extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <section id=\"form\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <p class=\"big-padding\"> ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.first-line"), "html", null, true);
        echo " </p>
                </div>
                <div class=\"col-xs-12\">

                    <form action=\"\">
                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"flat-type\"> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-type"), "html", null, true);
        echo "<span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <select name=\"flat-type\">
                                        <option value=\"typ1\"> Typ 1</option>
                                        <option value=\"typ2\"> Typ 2</option>
                                        <option value=\"typ3\"> Typ 3</option>
                                    </select>
                                    <span class=\"info\">?</span>
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-type-tooltip"), "html", null, true);
        echo " </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"postal-code\"> ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-postcode"), "html", null, true);
        echo " <span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"postal-code\" maxlength=\"6\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-postcode-tooltip"), "html", null, true);
        echo " </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"rent\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-cost"), "html", null, true);
        echo " <span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"rent\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.input-cost-tooltip"), "html", null, true);
        echo " </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"area\"> Powierzchnia w m<sup>2</sup><span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"area\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> ";
        // line 74
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
        // line 90
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
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result"), "html", null, true);
        echo " <span class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_avg"), "html", null, true);
        echo " 10zł/m<sup>2</sup></span>
            </div>
            <div class=\"price-bar\">
                <div class=\"min-price\">
                    ";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.cheapest"), "html", null, true);
        echo " <br/>
                    <span data-min=\"5\"> 5zł </span>
                </div>

                <div class=\"bar\">
                    <div class=\"your-bar\"></div>
                    <div class=\"your-result\"> 15zł</div>
                    <div class=\"average\" data-avg=\"10\"> 10zł </div>
                </div>

                <div class=\"max-price\">
                    ";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.the_most_expensive"), "html", null, true);
        echo " <br/>
                    <span data-max=\"50\"> 50zł </span>
                </div>
            </div>
            <p class=\"big-paragraph\"> ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_comment_bad"), "html", null, true);
        echo " </p>

            <div class=\"expensive\">
                <p> ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("index.result_summary_header"), "html", null, true);
        echo " </p>

                <div class=\"added-bills\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 end-xs\"> ";
        // line 125
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
                        <a href=\"#\" id=\"analyse\" class=\"button yellow-bcg wide\"> ";
        // line 135
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
                        <label for=\"in1\"> ";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </div>
                            </div>
                        </div>

                        <label for=\"in1\"> ";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> ";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </div>
                            </div>
                        </div>

                        <label for=\"in1\"> ";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> ";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </div>
                            </div>
                        </div>

                        <label for=\"in1\"> ";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> ";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> ";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("test"), "html", null, true);
        echo " </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-xs-12\">
                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"texte\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
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
        // line 390
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
        // line 399
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
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 399,  518 => 390,  329 => 204,  305 => 183,  296 => 177,  289 => 173,  280 => 167,  273 => 163,  264 => 157,  257 => 153,  248 => 147,  233 => 135,  220 => 125,  213 => 121,  207 => 118,  200 => 114,  186 => 103,  177 => 99,  165 => 90,  146 => 74,  127 => 58,  116 => 50,  105 => 42,  94 => 34,  83 => 26,  69 => 15,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

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
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"flat-type\"> {{ 'index.input-type'|toWording }}<span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <select name=\"flat-type\">
                                        <option value=\"typ1\"> Typ 1</option>
                                        <option value=\"typ2\"> Typ 2</option>
                                        <option value=\"typ3\"> Typ 3</option>
                                    </select>
                                    <span class=\"info\">?</span>
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> {{ 'index.input-type-tooltip'|toWording }} </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"postal-code\"> {{ 'index.input-postcode'|toWording }} <span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"postal-code\" maxlength=\"6\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\"> {{ 'index.input-postcode-tooltip'|toWording }} </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"rent\"> {{ 'index.input-cost'|toWording }} <span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
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
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"area\"> Powierzchnia w m<sup>2</sup><span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
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
                <span> <b> {{ 'index.result'|toWording }} <span class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> {{ 'index.result_avg'|toWording }} 10zł/m<sup>2</sup></span>
            </div>
            <div class=\"price-bar\">
                <div class=\"min-price\">
                    {{ 'index.cheapest'|toWording }} <br/>
                    <span data-min=\"5\"> 5zł </span>
                </div>

                <div class=\"bar\">
                    <div class=\"your-bar\"></div>
                    <div class=\"your-result\"> 15zł</div>
                    <div class=\"average\" data-avg=\"10\"> 10zł </div>
                </div>

                <div class=\"max-price\">
                    {{ 'index.the_most_expensive'|toWording }} <br/>
                    <span data-max=\"50\"> 50zł </span>
                </div>
            </div>
            <p class=\"big-paragraph\"> {{ 'index.result_comment_bad'|toWording }} </p>

            <div class=\"expensive\">
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
                        <a href=\"#\" id=\"analyse\" class=\"button yellow-bcg wide\"> {{ 'index.button_analyse'|toWording }} </a>
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
                        <label for=\"in1\"> {{ \"test\" | toWording }} </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> {{ \"test\" | toWording }} </div>
                            </div>
                        </div>

                        <label for=\"in1\"> {{ \"test\" | toWording }} </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> {{ \"test\" | toWording }} </div>
                            </div>
                        </div>

                        <label for=\"in1\"> {{ \"test\" | toWording }} </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> {{ \"test\" | toWording }} </div>
                            </div>
                        </div>

                        <label for=\"in1\"> {{ \"test\" | toWording }} </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\"> {{ \"test\" | toWording }} </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> {{ \"test\" | toWording }} </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-md-6 col-xs-12\">
                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"texte\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"text\" name=\"in1\" placeholder=\"Wpisz nazwę\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
                                </div>

                                <div class=\"max-price\">
                                    <span> 8,00 zł</span>
                                </div>
                            </div>
                        </div>

                        <label for=\"in1\"> Lorem ipsum: </label>
                        <div class=\"input-wrapper\">
                            <input type=\"number\" name=\"in1\" placeholder=\"0\">
                            <span class=\"info\">?</span>
                            
                            <div class=\"tooltip\">
                                <div class=\"content\">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                </div>
                            </div>

                            <div class=\"small-price-bar\">
                                <div class=\"min-price\">
                                    <span> 1,00 zł</span>
                                </div>

                                <div class=\"small-bar\">
                                    <div class=\"average-bar\"></div>
                                    <div class=\"your-bar\"></div>
                                    <div class=\"your-result\"> 6,20zł</div>
                                    <div class=\"average\"> 4,50zł </div>
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
{% endblock %}", "default/index.html.twig", "/application/templates/default/index.html.twig");
    }
}
