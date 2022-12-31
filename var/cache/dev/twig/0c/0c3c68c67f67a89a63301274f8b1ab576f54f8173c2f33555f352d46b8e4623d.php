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

/* employe/liste.html.twig */
class __TwigTemplate_bcde054f6f3896a796462ca7b2f3aab0a2f5035d77c368eed8370f2801b2e917 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "employe/liste.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 4
            echo "      <div class=\"alert alert-success\">
         ";
            // line 5
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "<style>
.container{
    border-radius:10px;
    box-shadow: 0 4px 16px rgba(0,0,0,.25);
     margin: 60px;
    padding: 60px;
}
</style>

<h2>List des Employes| <small> <a class=\"btn btn-primary\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjouterEmp");
        echo "\">Ajouter</a></small></h2>



<table class=\"table table-hover table-striped \" >
<thead>
<tr>

<th>Id </th>
<th>Image </th>
<th>Nom </th>
<th>Salaire</th>
<th>BornAt</th>
<th>Email</th>

<th></th>
</tr>
</thead>

  
<tbody>

<div class=\"employe\">
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesemploye"]) || array_key_exists("lesemploye", $context) ? $context["lesemploye"] : (function () { throw new RuntimeError('Variable "lesemploye" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Employe"]) {
            // line 41
            echo "<tr>
<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>

<td>";
            // line 44
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "getNom", [], "any", false, false, false, 44)), "html", null, true);
            echo "</td>
<td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "getSalaire", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "getBornAt", [], "method", false, false, false, 46), "d-m-Y"), "html", null, true);
            echo "</td>
<td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "getEmail", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>

  </div>
<td>
<a class=\"btn btn-primary\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Employe"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">Voir</a>
<a class=\"btn btn-success\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Employe"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\"
onclick=\"return confirm('Are you sure to update  ! ')\">Modifier</a>
<a class=\"btn btn-danger\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emp_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Employe"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"
 onclick=\"return confirm('Are you sure to delete ! ')\">Supprimer</a>
</td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employe/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 59,  161 => 54,  156 => 52,  152 => 51,  145 => 47,  141 => 46,  137 => 45,  133 => 44,  128 => 42,  125 => 41,  121 => 40,  95 => 17,  84 => 8,  75 => 5,  72 => 4,  68 => 3,  58 => 2,  35 => 1,);
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

<h2>List des Employes| <small> <a class=\"btn btn-primary\" href=\"{{ path('AjouterEmp')}}\">Ajouter</a></small></h2>



<table class=\"table table-hover table-striped \" >
<thead>
<tr>

<th>Id </th>
<th>Image </th>
<th>Nom </th>
<th>Salaire</th>
<th>BornAt</th>
<th>Email</th>

<th></th>
</tr>
</thead>

  
<tbody>

<div class=\"employe\">
{% for Employe in lesemploye %}
<tr>
<td>{{ Employe.id }}</td>

<td>{{ Employe.getNom | upper }}</td>
<td>{{ Employe.getSalaire }}</td>
<td>{{ Employe.getBornAt() | date ('d-m-Y') }}</td>
<td>{{ Employe.getEmail }}</td>

  </div>
<td>
<a class=\"btn btn-primary\" href=\"{{path('employe_show',{'id': Employe.id})}}\">Voir</a>
<a class=\"btn btn-success\" href=\"{{path('employe_edit',{'id': Employe.id})}}\"
onclick=\"return confirm('Are you sure to update  ! ')\">Modifier</a>
<a class=\"btn btn-danger\" href=\"{{path('emp_delete',{'id': Employe.id})}}\"
 onclick=\"return confirm('Are you sure to delete ! ')\">Supprimer</a>
</td>
</tr>
{% endfor %}
</tbody>
</table>
{% endblock %}", "employe/liste.html.twig", "C:\\xampp\\htdocs\\my-project-symfony\\templates\\employe\\liste.html.twig");
    }
}
