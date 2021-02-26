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

/* css/app.css */
class __TwigTemplate_ececaf9657df5ecde32537c12339ed18dbd9544774e0a04a09245129a46d907c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/app.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/app.css"));

        // line 1
        echo "body {
    margin: 0;
    background-color: lightsteelblue;
}
#nav{
    height: 100px;
    width: auto;
    background-color: blueviolet;
    position: relative;
    display: flex;
    flex-direction: row;
}
#card-wrapper{
    margin: auto;
    width: 80%;
    margin-top: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.card{
    margin-bottom: 30px;
}

.btn{
    display: block;
    margin: auto;
   text-align: center;
   margin: 20px;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "css/app.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("body {
    margin: 0;
    background-color: lightsteelblue;
}
#nav{
    height: 100px;
    width: auto;
    background-color: blueviolet;
    position: relative;
    display: flex;
    flex-direction: row;
}
#card-wrapper{
    margin: auto;
    width: 80%;
    margin-top: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.card{
    margin-bottom: 30px;
}

.btn{
    display: block;
    margin: auto;
   text-align: center;
   margin: 20px;
}", "css/app.css", "/home/ryzz/MVC_My_Quiz/MVC_My_Quiz/templates/css/app.css");
    }
}
