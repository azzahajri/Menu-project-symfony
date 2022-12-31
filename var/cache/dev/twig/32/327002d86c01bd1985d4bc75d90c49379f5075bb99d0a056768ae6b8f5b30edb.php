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

/* departement/show.html.twig */
class __TwigTemplate_fad60a788a4075d349ee39a959adfb8c545d81a2290927d509b6e9a843b69aa7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departement/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Edit";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo " ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->renderParentBlock("titre", $context, $blocks)), "html", null, true);
        echo " - Consultation de  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<style>
.departement{
    border-radius:10px;
    box-shadow: 0 4px 16px rgba(0,0,0,.25);
    margin: 50px;
    padding: 16px 20px;
}
.img{
    object-position:right;
    border: 1px solid black;
  background-color: silver;
}
</style>
    <div class=\"departement\">
    <h1>Entreprise ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 19, $this->source); })()), "getNomDept", [], "any", false, false, false, 19), "html", null, true);
        echo "</h1>
    <h2>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 20, $this->source); })()), "getResponsable", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
    <h3>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 21, $this->source); })()), "getNbrSalarie", [], "any", false, false, false, 21), "html", null, true);
        echo "</h3>
        <div clas=\"img\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ((isset($context["publicPath"]) || array_key_exists("publicPath", $context) ? $context["publicPath"] : (function () { throw new RuntimeError('Variable "publicPath" does not exist.', 23, $this->source); })()) . twig_get_attribute($this->env, $this->source, (isset($context["departement"]) || array_key_exists("departement", $context) ? $context["departement"] : (function () { throw new RuntimeError('Variable "departement" does not exist.', 23, $this->source); })()), "Image", [], "any", false, false, false, 23)), "html", null, true);
        echo "\" >
        </div> 
        </div>
        <ul class =\"nav nav-pills nav-stacked\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesemploye"]) || array_key_exists("lesemploye", $context) ? $context["lesemploye"] : (function () { throw new RuntimeError('Variable "lesemploye" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employe"]) {
            // line 28
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "getNom", [], "any", false, false, false, 28)), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "getSalaire", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "getBornAt", [], "method", false, false, false, 30), "d-m-Y"), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employe"], "getEmail", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "departement/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 33,  165 => 31,  161 => 30,  157 => 29,  152 => 28,  148 => 27,  141 => 23,  136 => 21,  132 => 20,  128 => 19,  112 => 5,  102 => 4,  81 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends\"base.html.twig\" %}
{%block title %} {{ parent() }} - Edit{% endblock %}
{%block titre %} {{ parent()| upper }} - Consultation de  {% endblock %}
{%block body %}
<style>
.departement{
    border-radius:10px;
    box-shadow: 0 4px 16px rgba(0,0,0,.25);
    margin: 50px;
    padding: 16px 20px;
}
.img{
    object-position:right;
    border: 1px solid black;
  background-color: silver;
}
</style>
    <div class=\"departement\">
    <h1>Entreprise {{ departement.getNomDept }}</h1>
    <h2>{{ departement.getResponsable }}</h2>
    <h3>{{ departement.getNbrSalarie }}</h3>
        <div clas=\"img\">
            <img src=\"{{ publicPath ~ departement.Image }}\" >
        </div> 
        </div>
        <ul class =\"nav nav-pills nav-stacked\">
        {% for employe in lesemploye %}
        <td>{{ employe.getNom | upper }}</td>
        <td>{{ employe.getSalaire }}</td>
        <td>{{ employe.getBornAt() | date ('d-m-Y') }}</td>
        <td>{{ employe.getEmail }}</td>
{% endfor %}
   
{% endblock %}

", "departement/show.html.twig", "C:\\xampp\\htdocs\\my-project-symfony\\templates\\departement\\show.html.twig");
    }
}
