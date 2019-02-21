<?php

/* default/index.html.twig */
class __TwigTemplate_7ad08ee3bdf75b3933812c1261e43a152ebe70a86c815f1257f1cf6b71fa116e extends Twig_Template
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
                    <p class=\"big-padding\"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aut consequuntur iure ad pariatur ipsum. Rerum consectetur similique totam deserunt saepe, eum, obcaecati illum voluptates culpa voluptas voluptate? Consequuntur, maiores. </p>
                </div>
                <div class=\"col-xs-12\">

                    <form action=\"\">
                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"flat-type\"> Wybierz typ mieszkania<span class=\"red\">*</span>: </label>
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
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"postal-code\"> Kod pocztowy<span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"postal-code\" maxlength=\"6\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"rent\"> Koszt czynszu (pln)<span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"rent\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
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
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
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
                    <a href=\"#\" id=\"compare\" class=\"button yellow-bcg wide\"> Porównaj </a>
                </div>
            </div>
        </div>
    </section>
        
    <section class=\"compared bad\" id=\"compared\">
        <div class=\"wrapper\">
            <div class=\"result\">
                <span> <b> Twój wynik - <span class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> średnia - 10zł/m<sup>2</sup></span>
            </div>
            <div class=\"price-bar\">
                <div class=\"min-price\">
                    Najtańszy <br/>
                    <span data-min=\"5\"> 5zł </span>
                </div>

                <div class=\"bar\">
                    <div class=\"your-bar\"></div>
                    <div class=\"your-result\"> 15zł</div>
                    <div class=\"average\" data-avg=\"10\"> 10zł </div>
                </div>

                <div class=\"max-price\">
                    Najdroższy <br/>
                    <span data-max=\"50\"> 50zł </span>
                </div>
            </div>
            <p class=\"big-paragraph\"> Twój czynsz wypada drogo na tle innych. Dowiedz się dlaczego </p>

            <div class=\"expensive\">
                <p> Aby skorzystać ze szczegółowego porównania załącz rachunek. </p>

                <div class=\"added-bills\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 end-xs\"> Dodany rachunek: </div>
                        <div class=\"col-sm-6 start-xs\"> 
                            <div class=\"bill-name\"> nazwa_rachunku_1 
                                <span class=\"delete\"> usuń X</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\" center-xs\">
                    <div class=\"col-xs-12\">
                        <a href=\"#\" id=\"analyze\" class=\"button yellow-bcg wide\"> Porównaj </a>
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
                        <div class=\"red\"> Przesunięcie kosztów do średniej powoduje oszczędność roczną około 28,000zł </div>
                    </div>
                </div>
            </form>
            
            <br/>
            <br/>
            <div class=\" center-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" id=\"export\" class=\"button yellow-bcg wide\"> Eksportuj do PDF </a>
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
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
        <section id=\"form\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <p class=\"big-padding\"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae aut consequuntur iure ad pariatur ipsum. Rerum consectetur similique totam deserunt saepe, eum, obcaecati illum voluptates culpa voluptas voluptate? Consequuntur, maiores. </p>
                </div>
                <div class=\"col-xs-12\">

                    <form action=\"\">
                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"flat-type\"> Wybierz typ mieszkania<span class=\"red\">*</span>: </label>
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
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"postal-code\"> Kod pocztowy<span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"postal-code\" maxlength=\"6\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4 align-right\">
                                <label for=\"rent\"> Koszt czynszu (pln)<span class=\"red\">*</span>: </label>
                            </div>
                            <div class=\"col-sm-8\">
                                <div class=\"input-wrapper\">
                                    <input type=\"number\" name=\"rent\">
                                    <span class=\"info\">?</span>
                                    
                                    <div class=\"tooltip\">
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
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
                                        <div class=\"content\">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore unde, aspernatur quos nam optio nemo aliquam distinctio quis esse mollitia ab aut laudantium minus quam. Magnam sequi perspiciatis veritatis repellendus!
                                        </div>
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
                    <a href=\"#\" id=\"compare\" class=\"button yellow-bcg wide\"> Porównaj </a>
                </div>
            </div>
        </div>
    </section>
        
    <section class=\"compared bad\" id=\"compared\">
        <div class=\"wrapper\">
            <div class=\"result\">
                <span> <b> Twój wynik - <span class=\"user-rent\">15</span> zł/m<sup>2</sup>   </b> średnia - 10zł/m<sup>2</sup></span>
            </div>
            <div class=\"price-bar\">
                <div class=\"min-price\">
                    Najtańszy <br/>
                    <span data-min=\"5\"> 5zł </span>
                </div>

                <div class=\"bar\">
                    <div class=\"your-bar\"></div>
                    <div class=\"your-result\"> 15zł</div>
                    <div class=\"average\" data-avg=\"10\"> 10zł </div>
                </div>

                <div class=\"max-price\">
                    Najdroższy <br/>
                    <span data-max=\"50\"> 50zł </span>
                </div>
            </div>
            <p class=\"big-paragraph\"> Twój czynsz wypada drogo na tle innych. Dowiedz się dlaczego </p>

            <div class=\"expensive\">
                <p> Aby skorzystać ze szczegółowego porównania załącz rachunek. </p>

                <div class=\"added-bills\">
                    <div class=\"row\">
                        <div class=\"col-sm-6 end-xs\"> Dodany rachunek: </div>
                        <div class=\"col-sm-6 start-xs\"> 
                            <div class=\"bill-name\"> nazwa_rachunku_1 
                                <span class=\"delete\"> usuń X</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\" center-xs\">
                    <div class=\"col-xs-12\">
                        <a href=\"#\" id=\"analyze\" class=\"button yellow-bcg wide\"> Porównaj </a>
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
                        <div class=\"red\"> Przesunięcie kosztów do średniej powoduje oszczędność roczną około 28,000zł </div>
                    </div>
                </div>
            </form>
            
            <br/>
            <br/>
            <div class=\" center-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" id=\"export\" class=\"button yellow-bcg wide\"> Eksportuj do PDF </a>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "default/index.html.twig", "/application/templates/default/index.html.twig");
    }
}
