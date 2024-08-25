<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_fe3f84049cbb48243f50ec89eafab0d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Header-->
    <header class=\"bg-primary bg-gradient text-white\">
        <div class=\"container px-4 text-center\">
            <h1 class=\"fw-bolder\">Biblios</h1>
            <p class=\"lead\">Catalogue en ligne de la médiathèque de Trifouillis-les-Oies</p>
            <a class=\"btn btn-lg btn-light\" href=\"#\">Parcourez tout le catalogue</a>
        </div>
    </header>
    <!-- About section-->
    <section id=\"about\">
        <div class=\"container px-4\">
            <div class=\"row gx-4 justify-content-center\">
                <div class=\"col-lg-8\">
                    <h2>Biblios: qu'est-ce que c'est?</h2>
                    <p class=\"lead\">Biblios est la plateforme officielle de consultation du catalogue de la médiathèque de Trifouillis-les-Oies. Explorez notre collection avec une recherche efficace, vérifiez la disponibilité des ouvrages en temps réel, et effectuez des réservations en toute simplicité. Biblios s'engage pour faciliter l'accès à la culture et promouvoir la richesse de notre patrimoine littéraire.</p>
                    <p>Fonctionnalités clés :</p>
                    <ul>
                        <li>Recherche avancée de livres</li>
                        <li>Consultation en temps réel du statut des ouvrages (disponible, emprunté, indisponible)</li>
                        <li>Affichage détaillé des informations sur les livres</li>
                        <li>Processus de réservation simplifié</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <!-- Header-->
    <header class=\"bg-primary bg-gradient text-white\">
        <div class=\"container px-4 text-center\">
            <h1 class=\"fw-bolder\">Biblios</h1>
            <p class=\"lead\">Catalogue en ligne de la médiathèque de Trifouillis-les-Oies</p>
            <a class=\"btn btn-lg btn-light\" href=\"#\">Parcourez tout le catalogue</a>
        </div>
    </header>
    <!-- About section-->
    <section id=\"about\">
        <div class=\"container px-4\">
            <div class=\"row gx-4 justify-content-center\">
                <div class=\"col-lg-8\">
                    <h2>Biblios: qu'est-ce que c'est?</h2>
                    <p class=\"lead\">Biblios est la plateforme officielle de consultation du catalogue de la médiathèque de Trifouillis-les-Oies. Explorez notre collection avec une recherche efficace, vérifiez la disponibilité des ouvrages en temps réel, et effectuez des réservations en toute simplicité. Biblios s'engage pour faciliter l'accès à la culture et promouvoir la richesse de notre patrimoine littéraire.</p>
                    <p>Fonctionnalités clés :</p>
                    <ul>
                        <li>Recherche avancée de livres</li>
                        <li>Consultation en temps réel du statut des ouvrages (disponible, emprunté, indisponible)</li>
                        <li>Affichage détaillé des informations sur les livres</li>
                        <li>Processus de réservation simplifié</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\bibliotheque\\templates\\home\\index.html.twig");
    }
}
