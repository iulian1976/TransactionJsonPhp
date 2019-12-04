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

/* base.html.twig */
class __TwigTemplate_bbbd1ad2c2458c7917ea9a5f63d5a77a97c3ea83a76ceff8c3a290427e43a093 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lib/bulma/bulma.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"shortcut icon\" href=\"../images/fav_icon.png\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
        <!-- Bulma Version 0.7.5-->
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.5/css/bulma.min.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/landing.css\">
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 98
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Customer Transaction";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "        <header class=\"hero is-primary is-medium\">
            <div class=\"hero-head\">
                <nav class=\"navbar\">
                    <div class=\"container\">
                        <div class=\"navbar-brand\">
                            <a class=\"navbar-item\" href=\"#\">
                                <img src=\"image\" alt=\"Customer Transaction\">
                            </a>
                            <span class=\"navbar-burger burger\" data-target=\"navbarMenu\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        </div>
                        <div id=\"navbarMenu\" class=\"navbar-menu\">
                            <div class=\"navbar-end\">
                              <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display");
        echo "\">
                                    <span class=\"icon\">
                                        <i class=\" \"></i>
                                    </span>
                                    <span>Display All Transaction</span>
                                </a>
                            </span>
                                <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("displayfivetransaction");
        echo "\">
                                    <span class=\"icon\">
                                        <i class=\"\"></i>
                                    </span>
                                    <span>First 5 Customers with more transactions</span>
                                </a>
                            </span>
                                <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("displayten");
        echo "\">
                                    <span class=\"icon\">
                                        <i class=\"\"></i>
                                    </span>
                                    <span>The Best 10 Customers with  the highest amounts</span>
                                </a>
                            </span>
                                <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"#\">
                                    <span class=\"icon\">
                                        <i class=\" \"></i>
                                    </span>
                                    <span>Display a Customer</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!---  End Nav    --->
        <div class=\"hero is-primary\">
            <div class=\"hero-body\">
                <div class=\"container has-text-left\">
                    <div class=\"column is-6 is-offset-6\">
                        <h2 class=\"subtitle  has-text-black\">
                            Watch
                        </h2>
                        <p class=\"subtitle\"></p>

                        <div class=\"buttons is-left transparent \">
                            <p class=\"button is-black is-rounded has-text-weight-bold\">
                                the best customer
                            </p>
                            <p class=\"button is-black is-outlined is-rounded\">
                                Rankings the First 10 customer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  213 => 97,  163 => 54,  152 => 46,  141 => 38,  122 => 21,  115 => 20,  103 => 6,  90 => 5,  81 => 98,  78 => 97,  76 => 20,  61 => 8,  56 => 7,  54 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Customer Transaction{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"{{ asset('lib/bulma/bulma.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/index.css') }}\">
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"shortcut icon\" href=\"../images/fav_icon.png\" type=\"image/x-icon\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
        <!-- Bulma Version 0.7.5-->
        <link rel=\"stylesheet\" href=\"https://unpkg.com/bulma@0.7.5/css/bulma.min.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/landing.css\">
    </head>
    <body>
        {% block body %}
        <header class=\"hero is-primary is-medium\">
            <div class=\"hero-head\">
                <nav class=\"navbar\">
                    <div class=\"container\">
                        <div class=\"navbar-brand\">
                            <a class=\"navbar-item\" href=\"#\">
                                <img src=\"image\" alt=\"Customer Transaction\">
                            </a>
                            <span class=\"navbar-burger burger\" data-target=\"navbarMenu\">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        </div>
                        <div id=\"navbarMenu\" class=\"navbar-menu\">
                            <div class=\"navbar-end\">
                              <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"{{ path('display') }}\">
                                    <span class=\"icon\">
                                        <i class=\" \"></i>
                                    </span>
                                    <span>Display All Transaction</span>
                                </a>
                            </span>
                                <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"{{ path('displayfivetransaction') }}\">
                                    <span class=\"icon\">
                                        <i class=\"\"></i>
                                    </span>
                                    <span>First 5 Customers with more transactions</span>
                                </a>
                            </span>
                                <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"{{ path('displayten') }}\">
                                    <span class=\"icon\">
                                        <i class=\"\"></i>
                                    </span>
                                    <span>The Best 10 Customers with  the highest amounts</span>
                                </a>
                            </span>
                                <span class=\"navbar-item\">
                                <a class=\"button is-white is-outlined\" href=\"#\">
                                    <span class=\"icon\">
                                        <i class=\" \"></i>
                                    </span>
                                    <span>Display a Customer</span>
                                </a>
                            </span>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!---  End Nav    --->
        <div class=\"hero is-primary\">
            <div class=\"hero-body\">
                <div class=\"container has-text-left\">
                    <div class=\"column is-6 is-offset-6\">
                        <h2 class=\"subtitle  has-text-black\">
                            Watch
                        </h2>
                        <p class=\"subtitle\"></p>

                        <div class=\"buttons is-left transparent \">
                            <p class=\"button is-black is-rounded has-text-weight-bold\">
                                the best customer
                            </p>
                            <p class=\"button is-black is-outlined is-rounded\">
                                Rankings the First 10 customer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\projectsphp\\Git\\TransactionJsonPhp\\templates\\base.html.twig");
    }
}
