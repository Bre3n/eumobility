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

/* partials/langswitcher.html.twig */
class __TwigTemplate_af7be534d0599a33834b57b5cb28404b5d0160b7073eaaa218ca8d586975e9ef extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'language_block_start' => [$this, 'block_language_block_start'],
            'language_block_end' => [$this, 'block_language_block_end'],
            'language_item' => [$this, 'block_language_item'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/langswitcher-logic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/langswitcher-logic.html.twig", "partials/langswitcher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_language_block_start($context, array $blocks = [])
    {
        // line 4
        echo "<ul class=\"langswitcher\">
";
    }

    // line 7
    public function block_language_block_end($context, array $blocks = [])
    {
        // line 8
        echo "</ul>
";
    }

    // line 11
    public function block_language_item($context, array $blocks = [])
    {
        // line 12
        echo "    ";
        if (($context["show_language"] ?? null)) {
            // line 13
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, ((($context["lang_url"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "params", [])) . (((twig_length_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "query", [])) > 1)) ? (("?" . $this->getAttribute(($context["uri"] ?? null), "query", []))) : (""))), "html", null, true);
            echo "\" class=\"external ";
            echo twig_escape_filter($this->env, ($context["active_class"] ?? null), "html", null, true);
            echo "\">";
            $this->loadTemplate((("partials/langswitcher-" . ($context["display_format"] ?? null)) . ".html.twig"), "partials/langswitcher.html.twig", 13)->display($context);
            echo "</a></li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  60 => 12,  57 => 11,  52 => 8,  49 => 7,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/langswitcher-logic.html.twig' %}

{% block language_block_start %}
<ul class=\"langswitcher\">
{% endblock %}

{% block language_block_end %}
</ul>
{% endblock %}

{% block language_item %}
    {% if show_language %}
    <li><a href=\"{{ lang_url ~ uri.params ~ (uri.query|length > 1 ? '?' ~ uri.query) }}\" class=\"external {{ active_class }}\">{% include 'partials/langswitcher-' ~ display_format ~ '.html.twig' %}</a></li>
    {% endif %}
{% endblock %}
", "partials/langswitcher.html.twig", "C:\\xampp\\htdocs\\eu\\user\\plugins\\langswitcher\\templates\\partials\\langswitcher.html.twig");
    }
}
