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

/* partials/langswitcher-logic.html.twig */
class __TwigTemplate_65d80218f41a84ca73d2760d62791ccb258b04531f7d8be136db3bdb4b509c50 extends \Twig\Template
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
        $this->displayBlock("language_block_start", $context, $blocks);
        echo "
    ";
        // line 2
        $context["display_format"] = (($context["display_format"]) ?? ($this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.langswitcher.language_display", 1 => "long"], "method")));
        // line 3
        echo "
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["langswitcher"] ?? null), "languages", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 5
            echo "        ";
            $context["active_class"] = "";
            // line 6
            echo "        ";
            $context["show_language"] = true;
            // line 7
            echo "        ";
            if (($context["language"] == $this->getAttribute(($context["langswitcher"] ?? null), "current", []))) {
                // line 8
                echo "            ";
                $context["active_class"] = "active";
                // line 9
                echo "        ";
            }
            // line 10
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_routes", []), $context["language"], [], "array")) {
                // line 11
                echo "            ";
                $context["lang_url"] = ($this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_routes", []), $context["language"], [], "array") . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 12
                echo "        ";
            } else {
                // line 13
                echo "            ";
                $context["base_lang_url"] = (($context["base_url_simple"] ?? null) . $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguageURLPrefix", [0 => $context["language"]], "method"));
                // line 14
                echo "            ";
                $context["lang_url"] = ((($context["base_lang_url"] ?? null) . $this->getAttribute(($context["langswitcher"] ?? null), "page_route", [])) . $this->getAttribute(($context["page"] ?? null), "urlExtension", []));
                // line 15
                echo "        ";
            }
            // line 16
            echo "        ";
            $context["untranslated_pages_behavior"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "plugins", []), "langswitcher", []), "untranslated_pages_behavior", []);
            // line 17
            echo "        ";
            if ((($context["untranslated_pages_behavior"] ?? null) != "none")) {
                // line 18
                echo "            ";
                $context["translated_page"] = $this->getAttribute($this->getAttribute(($context["langswitcher"] ?? null), "translated_pages", []), $context["language"], [], "array");
                // line 19
                echo "            ";
                if (( !($context["translated_page"] ?? null) ||  !$this->getAttribute(($context["translated_page"] ?? null), "published", []))) {
                    // line 20
                    echo "                ";
                    if ((($context["untranslated_pages_behavior"] ?? null) == "redirect")) {
                        // line 21
                        echo "                    ";
                        $context["lang_url"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("/");
                        // line 22
                        echo "                ";
                    } elseif ((($context["untranslated_pages_behavior"] ?? null) == "hide")) {
                        // line 23
                        echo "                    ";
                        $context["show_language"] = false;
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "            ";
                }
                // line 26
                echo "        ";
            }
            // line 27
            echo "        ";
            $this->displayBlock("language_item", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $this->displayBlock("language_block_end", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "partials/langswitcher-logic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 29,  122 => 27,  119 => 26,  116 => 25,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  101 => 20,  98 => 19,  95 => 18,  92 => 17,  89 => 16,  86 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  39 => 4,  36 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ block('language_block_start') }}
    {% set display_format = display_format ?? config.get('plugins.langswitcher.language_display', 'long') %}

    {% for language in langswitcher.languages %}
        {% set active_class = '' %}
        {% set show_language = true %}
        {% if language == langswitcher.current %}
            {% set active_class = 'active' %}
        {% endif %}
        {% if langswitcher.translated_routes[language] %}
            {% set lang_url = langswitcher.translated_routes[language] ~ page.urlExtension %}
        {% else %}
            {% set base_lang_url = base_url_simple ~ grav.language.getLanguageURLPrefix(language) %}
            {% set lang_url = base_lang_url ~ langswitcher.page_route ~ page.urlExtension %}
        {% endif %}
        {% set untranslated_pages_behavior = grav.config.plugins.langswitcher.untranslated_pages_behavior %}
        {% if untranslated_pages_behavior != 'none' %}
            {% set translated_page = langswitcher.translated_pages[language] %}
            {% if (not translated_page) or (not translated_page.published) %}
                {% if untranslated_pages_behavior == 'redirect' %}
                    {% set lang_url = url('/') %}
                {% elseif untranslated_pages_behavior == 'hide' %}
                    {% set show_language = false %}
                {% endif %}
            {% endif %}
        {% endif %}
        {{ block('language_item') }}
    {% endfor %}
{{ block('language_block_end') }}", "partials/langswitcher-logic.html.twig", "C:\\xampp\\htdocs\\eu\\user\\plugins\\langswitcher\\templates\\partials\\langswitcher-logic.html.twig");
    }
}
