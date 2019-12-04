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

/* display/index.html.twig */
class __TwigTemplate_5725bb288bdd075b3c656fd0289b441de23b7494cd494ff056deb0737efe2d85 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "display/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "display/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "All Customer!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif;}
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        #customers {
            font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-left:auto; margin-right:auto;
            margin-right:25%;
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
        // line 36
        echo "
    ";
        // line 37
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"example-wrapper\">
        <h1>✅</h1>
        <caption>All Customers!</caption>
        <table id=\"customers\">
            <tr>
                <th>id</th>
                <th>event_name</th>
                <th>merchant</th>
                <th>terminal</th>
                <th>status</th>
                <th>card_id</th>
                <th>card_type</th>
                <th>amount (ref:euro)</th>
                <th>currency</th>
                <th>country</th>
            </tr>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrayAllCustomer"]) || array_key_exists("arrayAllCustomer", $context) ? $context["arrayAllCustomer"] : (function () { throw new RuntimeError('Variable "arrayAllCustomer" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contentuser"]) {
            // line 56
            echo "
                <tr>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getId", [], "method", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getEventName", [], "method", false, false, false, 59), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getMerchant", [], "method", false, false, false, 60), "html", null, true);
            echo "</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getTerminal", [], "method", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getStatus", [], "method", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getCardId", [], "method", false, false, false, 63), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getCardType", [], "method", false, false, false, 64), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getAmount", [], "method", false, false, false, 65), "html", null, true);
            echo "</td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getCurrency", [], "method", false, false, false, 66), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contentuser"], "getCountry", [], "method", false, false, false, 67), "html", null, true);
            echo "</td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            ";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["arrayAllCustomer"]) || array_key_exists("arrayAllCustomer", $context) ? $context["arrayAllCustomer"] : (function () { throw new RuntimeError('Variable "arrayAllCustomer" does not exist.', 71, $this->source); })()));
        echo "
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "

    <script

            src=\"https://code.jquery.com/jquery-3.4.1.min.js\"

            integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"

            crossorigin=\"anonymous\"></script>

    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    <script>

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "display/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 87,  200 => 77,  193 => 76,  181 => 71,  171 => 67,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  151 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  131 => 56,  127 => 55,  106 => 37,  103 => 36,  74 => 8,  67 => 7,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}All Customer!{% endblock %}



{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif;}
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
        #customers {
            font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-left:auto; margin-right:auto;
            margin-right:25%;
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
{# {{dump(arrayAllCustomer)}} #}

    {{ parent() }}

    <div class=\"example-wrapper\">
        <h1>✅</h1>
        <caption>All Customers!</caption>
        <table id=\"customers\">
            <tr>
                <th>id</th>
                <th>event_name</th>
                <th>merchant</th>
                <th>terminal</th>
                <th>status</th>
                <th>card_id</th>
                <th>card_type</th>
                <th>amount (ref:euro)</th>
                <th>currency</th>
                <th>country</th>
            </tr>
            {% for contentuser in arrayAllCustomer %}

                <tr>
                    <td>{{ contentuser.getId() }}</td>
                    <td>{{ contentuser.getEventName()}}</td>
                    <td>{{ contentuser.getMerchant()}}</td>
                    <td>{{ contentuser.getTerminal()}}</td>
                    <td>{{ contentuser.getStatus()}}</td>
                    <td>{{ contentuser.getCardId()}}</td>
                    <td>{{ contentuser.getCardType() }}</td>
                    <td>{{ contentuser.getAmount()}}</td>
                    <td>{{ contentuser.getCurrency() }}</td>
                    <td>{{ contentuser.getCountry() }}</td>
                </tr>

            {% endfor %}
            {{ knp_pagination_render(arrayAllCustomer) }}
        </table>
    </div>
{% endblock %}

{% block javascripts %}


    <script

            src=\"https://code.jquery.com/jquery-3.4.1.min.js\"

            integrity=\"sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=\"

            crossorigin=\"anonymous\"></script>

    <script src=\"{{ asset('lib/bootstrap/bootstrap.min.js') }}\"></script>

    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    <script>

    </script>

{% endblock %}
", "display/index.html.twig", "C:\\projectsphp\\Git\\TransactionJsonPhp\\templates\\display\\index.html.twig");
    }
}
