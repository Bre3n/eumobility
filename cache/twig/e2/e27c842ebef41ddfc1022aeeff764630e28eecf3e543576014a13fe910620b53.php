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

/* partials/langswitcher.hreflang.html.twig */
class __TwigTemplate_97ca788e8f572f2d1d8e6794ef0e8276947d1625313ee08e87ad578a7d7d396c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["language_obj"] = $this->getAttribute(($context["grav"] ?? null), "language", []);
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["langswitcher"] ?? null), "languages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 3
            echo "\t";
            if ($this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_routes", []), $context["language"], [], "array")) {
                // line 4
                echo "\t\t";
                $context["lang_url"] = ($this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_routes", []), $context["language"], [], "array") . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 5
                echo "\t";
            } else {
                // line 6
                echo "\t\t";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["language"]], "method"));
                // line 7
                echo "\t\t";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", [])) . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 8
                echo "\t";
            }
            // line 9
            echo "
\t";
            // line 10
            $context["href_url"] = ((($this->getAttribute(($context["uri"] ?? null), "base", []) . ($context["lang_url"] ?? null)) . $this->getAttribute(($context["uri"] ?? null), "params", [])) . (((twig_length_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "query", [])) > 1)) ? (("?" . $this->getAttribute(($context["uri"] ?? null), "query", []))) : ("")));
            // line 11
            echo "
\t";
            // line 12
            if ((($this->getAttribute(($context["language_obj"] ?? null), "default", []) == $context["language"]) && ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "languages", []), "include_default_lang", []) == false))) {
                // line 13
                echo "\t<link rel=\"alternate\" hreflang=\"x-default\" href=\"";
                echo twig_escape_filter($this->env, ($context["href_url"] ?? null), "html", null, true);
                echo "\" />
\t";
            }
            // line 15
            echo "\t<link rel=\"alternate\" hreflang=\"";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["href_url"] ?? null), "html", null, true);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/langswitcher.hreflang.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  64 => 13,  62 => 12,  59 => 11,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set language_obj = grav.language %}
{% for language in langswitcher.languages %}
\t{% if langswitcher.translated_routes[language] %}
\t\t{% set lang_url = langswitcher.translated_routes[language] ~ page.urlExtension %}
\t{% else %}
\t\t{% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
\t\t{% set lang_url = base_lang_url ~ langswitcher.page_route ~ page.urlExtension %}
\t{% endif %}

\t{% set href_url = uri.base ~ lang_url ~ uri.params ~ (uri.query|length > 1 ? '?' ~ uri.query) %}

\t{% if (language_obj.default == language and config.languages.include_default_lang == false) %}
\t<link rel=\"alternate\" hreflang=\"x-default\" href=\"{{ href_url }}\" />
\t{% endif %}
\t<link rel=\"alternate\" hreflang=\"{{ language }}\" href=\"{{ href_url }}\" />
{% endfor %}
", "partials/langswitcher.hreflang.html.twig", "C:\\xampp\\htdocs\\eu\\user\\plugins\\langswitcher\\templates\\partials\\langswitcher.hreflang.html.twig");
    }
}
