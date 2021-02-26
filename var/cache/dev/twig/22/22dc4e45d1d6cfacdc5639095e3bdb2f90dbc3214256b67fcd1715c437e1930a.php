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

/* categorie/index.html.twig */
class __TwigTemplate_b954a94c99b4418241e6e0788bbad55bf5d938e9efb90abe65c3c1e2ed15d692 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CategorieController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div id=\"card-wrapper\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["categorie"]);
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 10
            echo "        <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"data:image/jpeg;base64,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\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">yeeeeeeee.</p>
                <a href=\"/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "/1/0/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"btn btn-warning\">En 10 questions</a>
                <a href=\"/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "/2/0/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" class=\"btn btn-danger\">En 20 questions</a>
            </div>
        </div>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "       <h1>WELCOME ADMIN</h1>
    ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 24
            echo "        <h1>WELCOME ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
            echo " </h1>
    ";
        }
        // line 26
        echo "        
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 26,  132 => 24,  128 => 22,  125 => 21,  112 => 16,  106 => 15,  101 => 13,  96 => 10,  92 => 9,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CategorieController!{% endblock %}


{% block body %}

    <div id=\"card-wrapper\">
    {% for categorie in categorie %}
        <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"data:image/jpeg;base64,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\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ categorie.name }}</h5>
                <p class=\"card-text\">yeeeeeeee.</p>
                <a href=\"/{{ categorie.name }}/1/0/{{categorie.id}}\" class=\"btn btn-warning\">En 10 questions</a>
                <a href=\"/{{ categorie.name }}/2/0/{{categorie.id}}\" class=\"btn btn-danger\">En 20 questions</a>
            </div>
        </div>
   
    {% endfor %}
    {% if is_granted('ROLE_ADMIN') %}
       <h1>WELCOME ADMIN</h1>
    {% elseif is_granted('ROLE_USER')%}
        <h1>WELCOME {{user.email}} </h1>
    {% endif %}
        
    </div>
{% endblock %}
", "categorie/index.html.twig", "/home/ryzz/MVC_My_Quiz/MVC_My_Quiz/templates/categorie/index.html.twig");
    }
}
