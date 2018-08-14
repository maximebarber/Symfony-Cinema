<?php

/* film/show.html.twig */
class __TwigTemplate_61fad277904f46213644a408a5f703fd97e8d97e800f22265836c3ca1540eba6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "film/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "film/show.html.twig"));

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

        echo "Film";
        
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
        echo "    <h1>Film</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdFilm</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 12, $this->source); })()), "idFilm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TitreFilm</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 16, $this->source); })()), "titreFilm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AnneeFilm</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 20, $this->source); })()), "anneeFilm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>DureeFilm</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 24, $this->source); })()), "dureeFilm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 28, $this->source); })()), "resume", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UrlImage</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 32, $this->source); })()), "urlImage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 36, $this->source); })()), "note", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("film_edit", array("idFilm" => twig_get_attribute($this->env, $this->source, (isset($context["film"]) || array_key_exists("film", $context) ? $context["film"] : (function () { throw new Twig_Error_Runtime('Variable "film" does not exist.', 43, $this->source); })()), "idFilm", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "film/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 45,  135 => 43,  130 => 41,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Film{% endblock %}

{% block body %}
    <h1>Film</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdFilm</th>
                <td>{{ film.idFilm }}</td>
            </tr>
            <tr>
                <th>TitreFilm</th>
                <td>{{ film.titreFilm }}</td>
            </tr>
            <tr>
                <th>AnneeFilm</th>
                <td>{{ film.anneeFilm }}</td>
            </tr>
            <tr>
                <th>DureeFilm</th>
                <td>{{ film.dureeFilm }}</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>{{ film.resume }}</td>
            </tr>
            <tr>
                <th>UrlImage</th>
                <td>{{ film.urlImage }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ film.note }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('film_index') }}\">back to list</a>

    <a href=\"{{ path('film_edit', {'idFilm': film.idFilm}) }}\">edit</a>

    {{ include('film/_delete_form.html.twig') }}
{% endblock %}
", "film/show.html.twig", "C:\\wamp\\www\\cinema\\templates\\film\\show.html.twig");
    }
}
