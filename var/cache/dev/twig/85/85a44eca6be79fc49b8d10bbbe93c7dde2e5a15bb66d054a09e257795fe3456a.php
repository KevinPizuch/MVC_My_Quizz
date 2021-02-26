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

/* number.html.twig */
class __TwigTemplate_d724e92fec8aa7728900cb0270821f42a10b696fc88e8a4332d89d6acee669a1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "number.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "number.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "number.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<h1 style=\"text-align:center\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 4, $this->source); })()), "question", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>
<p>Question : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["nextQuestion"]) || array_key_exists("nextQuestion", $context) ? $context["nextQuestion"] : (function () { throw new RuntimeError('Variable "nextQuestion" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " / 10</p>
";
        // line 6
        if ((isset($context["check"]) || array_key_exists("check", $context))) {
            // line 7
            echo "    ";
            if (((isset($context["responseGiven"]) || array_key_exists("responseGiven", $context) ? $context["responseGiven"] : (function () { throw new RuntimeError('Variable "responseGiven" does not exist.', 7, $this->source); })()) == true)) {
                // line 8
                echo "       
        <p style=\"color:green; font-size:2em;text-align:center\">Correct !</p>
         <a href=\"/";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "/2/";
                echo twig_escape_filter($this->env, (isset($context["nextQuestion"]) || array_key_exists("nextQuestion", $context) ? $context["nextQuestion"] : (function () { throw new RuntimeError('Variable "nextQuestion" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-success\">Suivant !</a>
    ";
            } elseif ((            // line 11
(isset($context["responseGiven"]) || array_key_exists("responseGiven", $context) ? $context["responseGiven"] : (function () { throw new RuntimeError('Variable "responseGiven" does not exist.', 11, $this->source); })()) == false)) {
                // line 12
                echo "        <p style=\"color:red; font-size:2em;text-align:center\">Incorrect la bonne réponse était : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["responseExpected"]) || array_key_exists("responseExpected", $context) ? $context["responseExpected"] : (function () { throw new RuntimeError('Variable "responseExpected" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12), "reponse", [], "any", false, false, false, 12), "html", null, true);
                echo "</p>
         <a href=\"/";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "/2/";
                echo twig_escape_filter($this->env, (isset($context["nextQuestion"]) || array_key_exists("nextQuestion", $context) ? $context["nextQuestion"] : (function () { throw new RuntimeError('Variable "nextQuestion" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
                echo "\" class=\"btn btn-danger\">Suivant !</a>
    ";
            }
        } else {
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["responses"]) || array_key_exists("responses", $context) ? $context["responses"] : (function () { throw new RuntimeError('Variable "responses" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 17
                echo "        <a href=\"/";
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "/2/";
                echo twig_escape_filter($this->env, (isset($context["nextQuestion"]) || array_key_exists("nextQuestion", $context) ? $context["nextQuestion"] : (function () { throw new RuntimeError('Variable "nextQuestion" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "/check/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\" class=\"btn btn-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["response"], "reponse", [], "any", false, false, false, 17), "html", null, true);
                echo "</a>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["ip"]) || array_key_exists("ip", $context) ? $context["ip"] : (function () { throw new RuntimeError('Variable "ip" does not exist.', 20, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 20,  117 => 17,  113 => 16,  103 => 13,  98 => 12,  96 => 11,  88 => 10,  84 => 8,  81 => 7,  79 => 6,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

<h1 style=\"text-align:center\">{{ questions.question }}</h1>
<p>Question : {{nextQuestion}} / 10</p>
{%if check is defined%}
    {%if responseGiven == true%}
       
        <p style=\"color:green; font-size:2em;text-align:center\">Correct !</p>
         <a href=\"/{{ name }}/2/{{nextQuestion}}/{{id}}\" class=\"btn btn-success\">Suivant !</a>
    {% elseif responseGiven == false %}
        <p style=\"color:red; font-size:2em;text-align:center\">Incorrect la bonne réponse était : {{responseExpected[0].reponse}}</p>
         <a href=\"/{{ name }}/2/{{nextQuestion}}/{{id}}\" class=\"btn btn-danger\">Suivant !</a>
    {% endif %}
{% else %}
{% for response in responses %}
        <a href=\"/{{ name }}/2/{{nextQuestion}}/{{id}}/check/{{response.id}}\" class=\"btn btn-info\">{{response.reponse}}</a>
{% endfor %}
{% endif %}
{{dump(ip)}}
{% endblock %}", "number.html.twig", "/home/ryzz/MVC_My_Quiz/MVC_My_Quiz/templates/number.html.twig");
    }
}
