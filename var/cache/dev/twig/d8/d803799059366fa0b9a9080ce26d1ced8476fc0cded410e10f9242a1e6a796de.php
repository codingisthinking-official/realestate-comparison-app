<?php

/* contact/renderForm.html.twig */
class __TwigTemplate_a298cdab0e1be25f64a9b90e9cb28935124571abe40c19385581f9a804c94455 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/renderForm.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyType' => [$this, 'block_bodyType'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/renderForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/renderForm.html.twig"));

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

        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("title.contact"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_bodyType($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyType"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyType"));

        echo " class='subpage' ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"breadcrumbs\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"> Strona główna </a>
                    <a href=\"#\"> Kontakt </a>
                </div>
            </div>
            
        </div>
    </section>

    <section>
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12 cl-md-7 col-lg-6\">
                    <h1 class=\"red\"> ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("contact.header"), "html", null, true);
        echo "</h1>
                    <p class='no-padding'> ";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("contact.content"), "html", null, true);
        echo " </p>
                </div>
                <div class=\"col-xs-12\">

                    <form action=\"\" class='contact'>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-12\">
                                <input type=\"text\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("contact.input-content-name"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-4 col-sm-12\">
                                <input type=\"tel\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("contact.input-content-phone"), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"col-md-4 col-sm-12\">
                                <input type=\"email\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("contact.input-content-mail"), "html", null, true);
        echo "\">
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <textarea name=\"message\" id=\"\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("contact.input-content-message"), "html", null, true);
        echo "\" rows=\"1\"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"end-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" class=\"button yellow-bcg \"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("contact.button-send"), "html", null, true);
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
        return "contact/renderForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 50,  147 => 42,  138 => 36,  132 => 33,  126 => 30,  116 => 23,  112 => 22,  97 => 10,  91 => 6,  82 => 5,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'title.contact'|toWording }}{% endblock %}
{% block bodyType %} class='subpage' {% endblock %}
{% block body %}
    <section class=\"breadcrumbs\">
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <a href=\"{{ path('homepage') }}\"> Strona główna </a>
                    <a href=\"#\"> Kontakt </a>
                </div>
            </div>
            
        </div>
    </section>

    <section>
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-12 cl-md-7 col-lg-6\">
                    <h1 class=\"red\"> {{ 'contact.header'|toWording }}</h1>
                    <p class='no-padding'> {{ 'contact.content'|toWording }} </p>
                </div>
                <div class=\"col-xs-12\">

                    <form action=\"\" class='contact'>
                        <div class=\"row\">
                            <div class=\"col-md-4 col-sm-12\">
                                <input type=\"text\" placeholder=\"{{ 'contact.input-content-name'|toWording }}\">
                            </div>
                            <div class=\"col-md-4 col-sm-12\">
                                <input type=\"tel\" placeholder=\"{{ 'contact.input-content-phone'|toWording }}\">
                            </div>
                            <div class=\"col-md-4 col-sm-12\">
                                <input type=\"email\" placeholder=\"{{ 'contact.input-content-mail'|toWording }}\">
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <textarea name=\"message\" id=\"\" placeholder=\"{{ 'contact.input-content-message'|toWording }}\" rows=\"1\"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"end-xs\">
                <div class=\"col-xs-12\">
                    <a href=\"#\" class=\"button yellow-bcg \"> {{ 'contact.button-send'|toWording }} </a>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "contact/renderForm.html.twig", "/application/templates/contact/renderForm.html.twig");
    }
}
