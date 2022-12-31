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

/* job/liste.html.twig */
class __TwigTemplate_a6fa53ffb44cdc06e2e86309c1d11c246dc062ce8d8c9bf2c5c23b6534a1e1dc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/liste.html.twig", 1);
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
        echo "<h2>List des Job| <small> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterJob");
        echo "\">Ajouter</a></small></h2>

<table class=\"table table-hover table-striped \" border=\"1\" >
<thead>
<tr>

<th>Id </th>
<th>Type </th>
<th>ExpiresAt</th>
<th>Description</th>
<th></th>
</tr>
</thead>
<tbody>
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesjob"]) || array_key_exists("lesjob", $context) ? $context["lesjob"] : (function () { throw new RuntimeError('Variable "lesjob" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Job"]) {
            // line 18
            echo "<tr>
<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Job"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Job"], "type", [], "any", false, false, false, 20)), "html", null, true);
            echo "</td>
<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Job"], "getExpiresAt", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            echo "</td>
<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Job"], "getDescription", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Job"], "getEmail", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>


<td>
<a class=\"btn btn-primary\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Job"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">Voir</a>
<a class=\"btn btn-info\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Job"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">
 <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">Modifier</span></a>
<a class=\"btn btn-danger\" href=";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Job"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\"
 onclick=\"return confirm('Are you sure to delete ! ')\">Supprimer</a>
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 35,  125 => 30,  120 => 28,  116 => 27,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  90 => 18,  86 => 17,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<h2>List des Job| <small> <a href=\"{{ path('AjouterJob')}}\">Ajouter</a></small></h2>

<table class=\"table table-hover table-striped \" border=\"1\" >
<thead>
<tr>

<th>Id </th>
<th>Type </th>
<th>ExpiresAt</th>
<th>Description</th>
<th></th>
</tr>
</thead>
<tbody>
{% for Job in lesjob %}
<tr>
<td>{{Job.id}}</td>
<td>{{Job.type | upper }}</td>
<td>{{Job.getExpiresAt| date ('d/m/Y')}}</td>
<td>{{Job.getDescription}}</td>
<td>{{Job.getEmail}}</td>


<td>
<a class=\"btn btn-primary\" href=\"{{path('job_show',{'id': Job.id})}}\">Voir</a>
<a class=\"btn btn-info\" href=\"{{path('job_edit',{'id': Job.id})}}\">
 <span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\">Modifier</span></a>
<a class=\"btn btn-danger\" href={{path('job_delete',{'id': Job.id})}}\"
 onclick=\"return confirm('Are you sure to delete ! ')\">Supprimer</a>
</td>
</tr>
{% endfor %}
</tbody>
</table>
{% endblock %}", "job/liste.html.twig", "C:\\xampp\\htdocs\\my-projectP\\templates\\job\\liste.html.twig");
    }
}
