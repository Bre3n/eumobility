<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default.html.twig */
class __TwigTemplate_55cbd09422ac2460188bcf73fb602dfb56c9e9f333618863938fa4d333da1019 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'parallaxtoinclude' => [$this, 'block_parallaxtoinclude'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["image1"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        // line 5
        echo "\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/parallax.min.js", 1 => ["group" => "bottom"]], "method");
        echo "\t
\t";
        // line 6
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "\t";
    }

    // line 9
    public function block_parallaxtoinclude($context, array $blocks = [])
    {
        // line 10
        echo "\t<div class=\"parallax-window default-pages\" class=\"container grid-xl\" data-parallax=\"scroll\" data-image-src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["image1"] ?? null), "url", []));
        echo "\">
        <div class=\"parallax-content\" style=\"background-image: linear-gradient(to right, rgba(0, 140, 211, 1), rgba(255, 255, 255, 0.1)); padding-top: 200px; padding-bottom: 90px;\">
            <section class=\"container grid-xl\">
                <h1>";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
                ";
        // line 14
        if ($this->getAttribute(($context["page"] ?? null), "summary", [])) {
            // line 15
            echo "                    <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "</p>
                ";
        }
        // line 16
        echo "\t\t
            </section>
        </div>
    </div>
";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        // line 23
        echo "
\t\t";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 25
            echo "\t\t\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "default.html.twig", 25)->display($context);
            // line 26
            echo "\t\t";
        }
        echo " 
 
        ";
        // line 28
        $context["content"] = twig_slice($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), twig_length_filter($this->env, $this->getAttribute(($context["page"] ?? null), "summary", [])));
        // line 29
        echo "        ";
        echo ($context["content"] ?? null);
        echo " 
\t
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  104 => 28,  98 => 26,  95 => 25,  93 => 24,  90 => 23,  87 => 22,  79 => 16,  73 => 15,  71 => 14,  67 => 13,  60 => 10,  57 => 9,  52 => 6,  47 => 5,  44 => 4,  39 => 1,  37 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set image1 = page.media.images|first %}

{% block javascripts %}
\t{% do assets.addJs('theme://js/parallax.min.js', {group:'bottom'}) %}\t
\t{{ parent() }}\t{# reszta js z base.html.twig tutaj #}
{% endblock %}

{% block parallaxtoinclude %}
\t<div class=\"parallax-window default-pages\" class=\"container grid-xl\" data-parallax=\"scroll\" data-image-src=\"{{ image1.url|e }}\">
        <div class=\"parallax-content\" style=\"background-image: linear-gradient(to right, rgba(0, 140, 211, 1), rgba(255, 255, 255, 0.1)); padding-top: 200px; padding-bottom: 90px;\">
            <section class=\"container grid-xl\">
                <h1>{{ page.title|raw }}</h1>
                {% if page.summary %}
                    <p>{{ page.summary|raw }}</p>
                {% endif %}\t\t
            </section>
        </div>
    </div>
{% endblock %}

{% block content %}

\t\t{% if config.plugins.breadcrumbs.enabled %}
\t\t\t{% include 'partials/breadcrumbs.html.twig' %}
\t\t{% endif %} 
 
        {% set content = page.content|slice(page.summary|length) %}
        {{ content|raw }} 
\t
{% endblock %}", "default.html.twig", "C:\\xampp\\htdocs\\eu\\user\\themes\\quarkextended\\templates\\default.html.twig");
    }
}
