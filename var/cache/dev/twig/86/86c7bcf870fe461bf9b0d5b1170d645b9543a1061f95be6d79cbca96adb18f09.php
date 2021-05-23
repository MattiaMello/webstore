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

/* products/product.html.twig */
class __TwigTemplate_3e030cad45d295b2838384993c3ebc5e40dc749e0d39d548ed9becad6397944b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/product.html.twig"));

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
        // line 164
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTip 2: you can also add an image using data-image tag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-->
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
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"javascript:;\">Products</a>
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
\t\t\t\t\t\t\t<a href=\"/product/fetch\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Fetch data</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 88
        if ((isset($context["notAssistant"]) || array_key_exists("notAssistant", $context) ? $context["notAssistant"] : (function () { throw new RuntimeError('Variable "notAssistant" does not exist.', 88, $this->source); })())) {
            // line 89
            echo "\t\t\t\t\t\t\t\t<a href=\"/product/csv\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Export CSV</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t<form action=\"/product\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search query here\" name=\"searchquery\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">search</i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Uid</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Price</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Final Price</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Code</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Status</th>
\t\t\t\t\t\t\t\t\t\t";
        // line 109
        if ((isset($context["notAssistant"]) || array_key_exists("notAssistant", $context) ? $context["notAssistant"] : (function () { throw new RuntimeError('Variable "notAssistant" does not exist.', 109, $this->source); })())) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Actions</th>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "uid", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "price", [], "any", false, false, false, 118), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "finalPrice", [], "any", false, false, false, 119), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "code", [], "any", false, false, false, 120), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "status", [], "any", false, false, false, 121), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 122
            if ((isset($context["notAssistant"]) || array_key_exists("notAssistant", $context) ? $context["notAssistant"] : (function () { throw new RuntimeError('Variable "notAssistant" does not exist.', 122, $this->source); })())) {
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product/edit/";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "uid", [], "any", false, false, false, 124), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" rel=\"tooltip\" title=\"Edit Product\" class=\"btn btn-success btn-simple btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product/delete/";
                // line 129
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "uid", [], "any", false, false, false, 129), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
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
        return "products/product.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  298 => 138,  291 => 136,  281 => 129,  273 => 124,  270 => 123,  268 => 122,  264 => 121,  260 => 120,  256 => 119,  252 => 118,  248 => 117,  245 => 116,  241 => 115,  236 => 112,  232 => 110,  230 => 109,  212 => 93,  206 => 89,  204 => 88,  148 => 34,  141 => 33,  134 => 30,  132 => 29,  125 => 28,  115 => 24,  102 => 13,  100 => 12,  93 => 11,  79 => 6,  70 => 164,  68 => 33,  64 => 31,  62 => 28,  59 => 27,  56 => 11,  53 => 8,  51 => 6,  44 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tand uncomment the following Encore helpers to start using Symfony UX #}
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTip 1: You can change the color of the sidebar using: data-color=\"purple | azure | green | orange | danger\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTip 2: you can also add an image using data-image tag
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-->
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
\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"javascript:;\">Products</a>
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
\t\t\t\t\t\t\t<a href=\"/product/fetch\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Fetch data</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% if notAssistant %}
\t\t\t\t\t\t\t\t<a href=\"/product/csv\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\">Export CSV</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<form action=\"/product\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search query here\" name=\"searchquery\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">search</i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Uid</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Price</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Final Price</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Code</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Status</th>
\t\t\t\t\t\t\t\t\t\t{% if notAssistant %}
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">Actions</th>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for article in data %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ article.uid }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ article.price }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ article.finalPrice }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ article.code }}</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ article.status }}</td>
\t\t\t\t\t\t\t\t\t\t\t{% if notAssistant %}
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"td-actions text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product/edit/{{ article.uid }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" rel=\"tooltip\" title=\"Edit Product\" class=\"btn btn-success btn-simple btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product/delete/{{ article.uid }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" rel=\"tooltip\" title=\"Remove\" class=\"btn btn-danger btn-simple btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
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
", "products/product.html.twig", "C:\\xamp-php7.3\\htdocs\\templates\\products\\product.html.twig");
    }
}
