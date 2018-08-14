<?php

/* acteur/show.html.twig */
class __TwigTemplate_2b4fd86917c6e4ec05797b1099721f8613003e5ab8b5690dd94d8f70a43f166d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "acteur/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acteur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "acteur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Acteur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdActeur</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acteur"]) || array_key_exists("acteur", $context) ? $context["acteur"] : (function () { throw new Twig_Error_Runtime('Variable "acteur" does not exist.', 12, $this->source); })()), "idActeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NomActeur</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acteur"]) || array_key_exists("acteur", $context) ? $context["acteur"] : (function () { throw new Twig_Error_Runtime('Variable "acteur" does not exist.', 16, $this->source); })()), "nomActeur", array())), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PrenomActeur</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acteur"]) || array_key_exists("acteur", $context) ? $context["acteur"] : (function () { throw new Twig_Error_Runtime('Variable "acteur" does not exist.', 20, $this->source); })()), "prenomActeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>SexeActeur</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acteur"]) || array_key_exists("acteur", $context) ? $context["acteur"] : (function () { throw new Twig_Error_Runtime('Variable "acteur" does not exist.', 24, $this->source); })()), "sexeActeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DateNaissanceActeur</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["acteur"]) || array_key_exists("acteur", $context) ? $context["acteur"] : (function () { throw new Twig_Error_Runtime('Variable "acteur" does not exist.', 28, $this->source); })()), "dateNaissanceActeur", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["acteur"]) || array_key_exists("acteur", $context) ? $context["acteur"] : (function () { throw new Twig_Error_Runtime('Variable "acteur" does not exist.', 28, $this->source); })()), "dateNaissanceActeur", array()), "d-m-Y")) : ("")), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acteur_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acteur_edit", array("idActeur" => twig_get_attribute($this->env, $this->source, (isset($context["acteur"]) || array_key_exists("acteur", $context) ? $context["acteur"] : (function () { throw new Twig_Error_Runtime('Variable "acteur" does not exist.', 35, $this->source); })()), "idActeur", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "acteur/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "acteur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  121 => 35,  116 => 33,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Acteur{% endblock %}

{% block body %}
    <h1>Acteur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdActeur</th>
                <td>{{ acteur.idActeur }}</td>
            </tr>
            <tr>
                <th>NomActeur</th>
                <td>{{ acteur.nomActeur|upper }}</td>
            </tr>
            <tr>
                <th>PrenomActeur</th>
                <td>{{ acteur.prenomActeur }}</td>
            </tr>
            <tr>
                <th>SexeActeur</th>
                <td>{{ acteur.sexeActeur }}</td>
            </tr>
            <tr>
                <th>DateNaissanceActeur</th>
                <td>{{ acteur.dateNaissanceActeur ? acteur.dateNaissanceActeur|date('d-m-Y') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('acteur_index') }}\">back to list</a>

    <a href=\"{{ path('acteur_edit', {'idActeur': acteur.idActeur}) }}\">edit</a>

    {{ include('acteur/_delete_form.html.twig') }}
{% endblock %}
", "acteur/show.html.twig", "C:\\wamp\\www\\cinema\\templates\\acteur\\show.html.twig");
    }
}
