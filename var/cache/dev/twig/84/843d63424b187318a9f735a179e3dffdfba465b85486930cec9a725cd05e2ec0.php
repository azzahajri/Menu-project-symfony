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

/* departement/liste.html.twig */
class __TwigTemplate_5ac7090fdc68b2603ed96476f9c17570685de7c6670356cf61d948eb8705b4a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "departement/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "departement/liste.html.twig", 1);
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
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "      <div class=\"alert alert-success\">
         ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "<style>
.container{
    border-radius:10px;
    box-shadow: 0 4px 16px rgba(0,0,0,.25);
     margin: 60px;
    padding: 60px;
}
</style>

<h2>List des Departement| <small> <a class=\"btn btn-primary\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterDepart");
        echo "\">Ajouter</a></small></h2>



<table class=\"table table-hover table-striped \" border=\"1\" >
<thead>
<tr>

<th>Id </th>
<th>Image </th>
<th>Nom Departement </th>
<th>Responsable</th>
<th>Nombre Salarie</th>


<th></th>
</tr>
</thead>
<tbody>
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesdepartement"]) || array_key_exists("lesdepartement", $context) ? $context["lesdepartement"] : (function () { throw new RuntimeError('Variable "lesdepartement" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["departement"]) {
            // line 38
            echo "<tr>
<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
<td></td>
<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "getNomDept", [], "any", false, false, false, 41)), "html", null, true);
            echo "</td>
<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "getResponsable", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "getNbrSalarie", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>


<td>
<a class=\"btn btn-primary\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">Voir</a>
<a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"
onclick=\"return confirm('Are you sure to update !  ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "')\">Modifier</a>
<a class=\"btn btn-danger\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("depart_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"
 onclick=\"return confirm('Are you sure to delete !  ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["departement"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "')\">Supprimer</a>
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['departement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "departement/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  163 => 51,  159 => 50,  155 => 49,  151 => 48,  147 => 47,  140 => 43,  136 => 42,  132 => 41,  127 => 39,  124 => 38,  120 => 37,  98 => 18,  87 => 9,  78 => 6,  75 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

{% for message in app.flashes('success') %}
      <div class=\"alert alert-success\">
         {{ message }}
      </div>
  {% endfor %}
<style>
.container{
    border-radius:10px;
    box-shadow: 0 4px 16px rgba(0,0,0,.25);
     margin: 60px;
    padding: 60px;
}
</style>

<h2>List des Departement| <small> <a class=\"btn btn-primary\" href=\"{{ path('AjouterDepart')}}\">Ajouter</a></small></h2>



<table class=\"table table-hover table-striped \" border=\"1\" >
<thead>
<tr>

<th>Id </th>
<th>Image </th>
<th>Nom Departement </th>
<th>Responsable</th>
<th>Nombre Salarie</th>


<th></th>
</tr>
</thead>
<tbody>
{% for departement in lesdepartement %}
<tr>
<td>{{departement.id}}</td>
<td></td>
<td>{{departement.getNomDept | upper }}</td>
<td>{{departement.getResponsable}}</td>
<td>{{departement.getNbrSalarie }}</td>


<td>
<a class=\"btn btn-primary\" href=\"{{path('departement_show',{'id': departement.id})}}\">Voir</a>
<a class=\"btn btn-success\" href=\"{{path('departement_edit',{'id': departement.id})}}\"
onclick=\"return confirm('Are you sure to update !  {{ departement.id}}')\">Modifier</a>
<a class=\"btn btn-danger\" href=\"{{path('depart_delete',{'id': departement.id})}}\"
 onclick=\"return confirm('Are you sure to delete !  {{ departement.id}}')\">Supprimer</a>
</td>
</tr>
{% endfor %}
</tbody>
</table>
{% endblock %}", "departement/liste.html.twig", "C:\\xampp\\htdocs\\my-project-symfony\\templates\\departement\\liste.html.twig");
    }
}
