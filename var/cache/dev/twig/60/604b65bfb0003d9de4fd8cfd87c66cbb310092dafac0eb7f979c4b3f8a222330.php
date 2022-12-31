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

/* job/Accueil.html.twig */
class __TwigTemplate_aa162043af68e38f35268a03c3617a0e4551d2ddc86a7209e1173942ae583038 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/Accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "job/Accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "job/Accueil.html.twig", 1);
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
        echo "<h2>List des Candidats | <small> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Ajouter");
        echo "\">Ajout</a></small></h2>
<table class=\"table table-hover table-striped \" border=\"1\" >
<thead>
<tr>
<th>#</th>
<th>Nom&Prenom </th>
<th>Contenu </th>
<th>Date</th>
<th></th>
</tr>
</thead>
<tbody>
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesCandidats"]) || array_key_exists("lesCandidats", $context) ? $context["lesCandidats"] : (function () { throw new RuntimeError('Variable "lesCandidats" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Candidat"]) {
            // line 16
            echo "<tr>
<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Candidat"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Candidat"], "candidat", [], "any", false, false, false, 18)), "html", null, true);
            echo "</td>
<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Candidat"], "datec", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true);
            echo "</td>
<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Candidat"], "Contenu", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
<td>
<a class=\"btn btn-primary\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("job_show", ["id" => twig_get_attribute($this->env, $this->source, $context["Candidat"], "id", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\">Voir</a>
<a class=\"btn btn-info\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidature_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Candidat"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\">Modifier</a>
<a class=\"btn btn-danger\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cand_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Candidat"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\"
 onclick=\"return confirm('Are you sure to delete ! ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Candidat"], "candidat", [], "any", false, false, false, 25), "html", null, true);
            echo "')\">Supprimer</a>
</td>
</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "<tr>
<td colspan=\"5\">Aucun Abonné </td>
</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</tbody>
</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "job/Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 33,  130 => 29,  121 => 25,  117 => 24,  113 => 23,  109 => 22,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  89 => 16,  84 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<h2>List des Candidats | <small> <a href=\"{{ path('Ajouter')}}\">Ajout</a></small></h2>
<table class=\"table table-hover table-striped \" border=\"1\" >
<thead>
<tr>
<th>#</th>
<th>Nom&Prenom </th>
<th>Contenu </th>
<th>Date</th>
<th></th>
</tr>
</thead>
<tbody>
{% for Candidat in lesCandidats %}
<tr>
<td>{{Candidat.id}}</td>
<td>{{Candidat.candidat | upper }}</td>
<td>{{Candidat.datec| date ('d/m/Y')}}</td>
<td>{{Candidat.Contenu}}</td>
<td>
<a class=\"btn btn-primary\" href=\"{{path('job_show',{'id': Candidat.id})}}\">Voir</a>
<a class=\"btn btn-info\" href=\"{{path('candidature_edit',{'id': Candidat.id})}}\">Modifier</a>
<a class=\"btn btn-danger\" href=\"{{path('cand_delete',{'id': Candidat.id})}}\"
 onclick=\"return confirm('Are you sure to delete ! {{ Candidat.candidat}}')\">Supprimer</a>
</td>
</tr>
{% else %}
<tr>
<td colspan=\"5\">Aucun Abonné </td>
</tr>
{% endfor %}
</tbody>
</table>
{% endblock %}

", "job/Accueil.html.twig", "C:\\xampp\\htdocs\\my-projectP\\templates\\job\\Accueil.html.twig");
    }
}
