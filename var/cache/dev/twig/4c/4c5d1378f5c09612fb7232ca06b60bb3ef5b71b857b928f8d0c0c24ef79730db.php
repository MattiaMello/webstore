<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* products/product.view.html.twig */
class __TwigTemplate_d8747e148a5728756f4d1b386663e09772ef651a351435c0fc70861e6e380679 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/product.view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 11
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
\t\t";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "\t</head>
\t<body>
\t\t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 139
        echo "\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Webstore - products
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t";
        // line 13
        echo "
\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
\t\t\t<meta
\t\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
\t\t\t<!--     Fonts and icons     -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
\t\t\t<!-- Material Kit CSS -->

\t\t\t";
        // line 24
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("site");
        echo "

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "\t\t\t";
        // line 30
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
\t\t\t<div class=\"wrapper \">
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\" data-color=\"purple\" data-background-color=\"white\">
\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        Tip 2: you can also add an image using data-image tag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"logo\"><!-- the logo goes here -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item active \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/product\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">products</i>
\t\t\t\t\t\t\t\t\t<p>products</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item  \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/order\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">orders</i>
\t\t\t\t\t\t\t\t\t<p>Orders</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- your sidebar here -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"main-panel\">
\t\t\t\t\t<!-- Navbar -->
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"javascript:;\">Product detail edit</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End Navbar -->
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t\t\t<!-- your content here -->
\t\t\t\t\t\t\t<form action=\"/product/edited/";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 85, $this->source); })()), "uid", [], "any", false, false, false, 85), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 88, $this->source); })()), "price", [], "any", false, false, false, 88), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"finalPrice\" name=\"finalPrice\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), "finalPrice", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 94, $this->source); })()), "code", [], "any", false, false, false, 94), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"status\" name=\"status\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 97, $this->source); })()), "status", [], "any", false, false, false, 97), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 101
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 101, $this->source); })()), "getImagePath", [], "any", false, false, false, 101))) {
            // line 102
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()), "getImagePath", [], "any", false, false, false, 102), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"product image\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t\t\tSelect an image to upload:
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<button class=\"btn\">
\t\t\t\t\t\t\t\t\t<a href=\"/product\">Cancel</a>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Save\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<nav class=\"float-left\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.mattiamello.net\">Tia</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"copyright float-right\">
\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>, made by
\t\t\t\t\t\t\t\t<a href=\"https://www.mattiamello.net\" target=\"_blank\">Tia</a>
\t\t\t\t\t\t\t\tfor testing purpose.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- your footer here -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "products/product.view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  242 => 106,  234 => 102,  232 => 101,  225 => 97,  219 => 94,  213 => 91,  207 => 88,  201 => 85,  148 => 34,  141 => 33,  134 => 30,  132 => 29,  125 => 28,  115 => 24,  102 => 13,  100 => 12,  93 => 11,  79 => 6,  70 => 139,  68 => 33,  64 => 31,  62 => 28,  59 => 27,  56 => 11,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Webstore - products
\t\t\t{% endblock %}
\t\t</title>
\t\t{# Run `composer require symfony/webpack-encore-bundle`
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t           and uncomment the following Encore helpers to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{#{{ encore_entry_link_tags('app') }}#}

\t\t\t<meta charset=\"utf-8\">
\t\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\"/>
\t\t\t<meta
\t\t\thttp-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
\t\t\t<!--     Fonts and icons     -->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\">
\t\t\t<!-- Material Kit CSS -->

\t\t\t{{ encore_entry_link_tags('site') }}

\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{#{{ encore_entry_script_tags('app') }}#}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t{% block body %}

\t\t\t<div class=\"wrapper \">
\t\t\t\t<div
\t\t\t\t\tclass=\"sidebar\" data-color=\"purple\" data-background-color=\"white\">
\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        Tip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                        Tip 2: you can also add an image using data-image tag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"logo\"><!-- the logo goes here -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item active \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/product\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">products</i>
\t\t\t\t\t\t\t\t\t<p>products</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item  \">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/order\">
\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">orders</i>
\t\t\t\t\t\t\t\t\t<p>Orders</p>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<!-- your sidebar here -->
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"main-panel\">
\t\t\t\t\t<!-- Navbar -->
\t\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top \">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"javascript:;\">Product detail edit</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" aria-controls=\"navigation-index\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-icon icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End Navbar -->
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"container-fluid\">
\t\t\t\t\t\t\t<!-- your content here -->
\t\t\t\t\t\t\t<form action=\"/product/edited/{{ data.uid }}\" method=\"post\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" value=\"{{ data.price }}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"finalPrice\" name=\"finalPrice\" value=\"{{ data.finalPrice }}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"code\" name=\"code\" value=\"{{ data.code }}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"status\" name=\"status\" value=\"{{ data.status }}\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t{% if data.getImagePath is not empty %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ data.getImagePath }}\" class=\"img-fluid\" alt=\"product image\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\tSelect an image to upload:
\t\t\t\t\t\t\t\t<input type=\"file\" name=\"fileToUpload\" id=\"fileToUpload\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<button class=\"btn\">
\t\t\t\t\t\t\t\t\t<a href=\"/product\">Cancel</a>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Save\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<nav class=\"float-left\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"https://www.mattiamello.net\">Tia</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"copyright float-right\">
\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>, made by
\t\t\t\t\t\t\t\t<a href=\"https://www.mattiamello.net\" target=\"_blank\">Tia</a>
\t\t\t\t\t\t\t\tfor testing purpose.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- your footer here -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>

\t\t{% endblock %}
\t</body>
</html>
", "products/product.view.html.twig", "C:\\xamp-php7.3\\htdocs\\templates\\products\\product.view.html.twig");
    }
}
