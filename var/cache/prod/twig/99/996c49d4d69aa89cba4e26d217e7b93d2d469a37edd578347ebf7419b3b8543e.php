<?php

/* base.html.twig */
class __TwigTemplate_005ab4e4ff0d4428017a65321268041c19d6462645e8ccd0c7bbb63c31adb3cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bodyType' => [$this, 'block_bodyType'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</head>
<body ";
        // line 19
        $this->displayBlock('bodyType', $context, $blocks);
        echo ">
    <header>
        <div class=\"wrapper\">
            <div class=\"row\">
                <div class=\"col-xs-6 logo\">
                    <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>
                </div>
                <div class=\"col-xs-6 align-right\">
                    <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"button red-bcg\"> 
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/envelope.png"), "html", null, true);
        echo "\" alt=\"koperta\"> <span> ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.message"), "html", null, true);
        echo " </span>
                    </a>
                </div>
            </div>
            <div class=\"row claim\">
                <div class=\"col-sm-8 col-md-7 col-lg-6\">
                    <div class=\"description\">
                        <h1> ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.first_line"), "html", null, true);
        echo " </h2>
                        <p> ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.description"), "html", null, true);
        echo "</p>
                        <a href=\"#form\" class=\"button yellow-bcg\"> ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("header.button"), "html", null, true);
        echo " </a>
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\PageController::recentCities", ["max" => 8]));
        // line 46
        echo "
                </ul>
            </nav>
            <a href=\"#form\" class=\"button red-bcg scroll-down\"> <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/arrow-down.png"), "html", null, true);
        echo "\" alt=\"strzłka w dół\"> </a>
        </div>
        <div class=\"overlay\"></div>
    </header>
    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "    <footer>
        <div class=\"wrapper\">
            <div class=\"row center-xs\">
                <div class=\"col-xs-8 col-md-2\">
                    <div class=\"logo\"> <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"> </div>
                    <p> ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("footer.link"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"overlay\"></div>
    </footer>
    ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->toWording("title"), "html", null, true);
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Open+Sans:400,500,600,700&amp;subset=latin-ext\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css\" type=\"text/css\" >
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 19
    public function block_bodyType($context, array $blocks = [])
    {
    }

    // line 53
    public function block_body($context, array $blocks = [])
    {
    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 65,  169 => 53,  164 => 19,  158 => 13,  154 => 11,  151 => 10,  145 => 8,  139 => 66,  137 => 65,  128 => 59,  124 => 58,  118 => 54,  116 => 53,  109 => 49,  104 => 46,  102 => 43,  93 => 37,  89 => 36,  85 => 35,  73 => 28,  69 => 27,  61 => 24,  53 => 19,  48 => 17,  44 => 15,  42 => 10,  37 => 8,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/application/templates/base.html.twig");
    }
}
