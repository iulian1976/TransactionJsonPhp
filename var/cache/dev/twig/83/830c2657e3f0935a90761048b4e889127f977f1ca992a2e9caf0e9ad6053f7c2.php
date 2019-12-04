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

/* display/firstfiveevents.html.twig */
class __TwigTemplate_463e05462c349630ee80108a65dff8d26eb01b4a7e7f56c848c73b05462ff9a9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display/firstfiveevents.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "display/firstfiveevents.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello DisplayTen!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        #customers {
            font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
    ";
        // line 31
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 33
        echo "    <div class=\"example-wrapper\">
        <h1>Top 10! ✅</h1>

        <table id=\"customers\">
            <tr>
                <th>nr</th>
                <th>event_name</th>
                <th>how many transactions</th>
            </tr>
            ";
        // line 42
        $context["nr"] = 1;
        // line 43
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayFirstTenCustomers"]) || array_key_exists("arrayFirstTenCustomers", $context) ? $context["arrayFirstTenCustomers"] : (function () { throw new RuntimeError('Variable "arrayFirstTenCustomers" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["customer"], "amount", [], "any", false, false, false, 43) && ((isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 43, $this->source); })()) < 6))) {
                // line 44
                echo "                <tr>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "getEventName", [], "method", false, false, false, 46), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "count", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                </tr>
                ";
                // line 49
                $context["nr"] = ((isset($context["nr"]) || array_key_exists("nr", $context) ? $context["nr"] : (function () { throw new RuntimeError('Variable "nr" does not exist.', 49, $this->source); })()) + 1);
                // line 50
                echo "            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </table>
    </div>




    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "display/firstfiveevents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 51,  141 => 50,  139 => 49,  134 => 47,  130 => 46,  126 => 45,  123 => 44,  117 => 43,  115 => 42,  104 => 33,  100 => 31,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DisplayTen!{% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        #customers {
            font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
    {{ parent() }}
    {# {{dump(arrayFirstTenCustomers)}} #}
    <div class=\"example-wrapper\">
        <h1>Top 10! ✅</h1>

        <table id=\"customers\">
            <tr>
                <th>nr</th>
                <th>event_name</th>
                <th>how many transactions</th>
            </tr>
            {% set nr = 1 %}
            {% for customer in arrayFirstTenCustomers if customer.amount and nr<6 %}
                <tr>
                    <td>{{ nr }}</td>
                    <td>{{ customer.getEventName() }}</td>
                    <td>{{ customer.count }}</td>
                </tr>
                {% set nr = nr + 1 %}
            {% endfor %}
        </table>
    </div>




    </div>
{% endblock %}", "display/firstfiveevents.html.twig", "C:\\projectsphp\\Git\\TransactionJsonPhp\\templates\\display\\firstfiveevents.html.twig");
    }
}
