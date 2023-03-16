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

/* forms/fields/basic-captcha/basic-captcha.html.twig */
class __TwigTemplate_b4b5f13c6d03477e164823e5b50e83c33d41960835c2bdfa3bfd149f3bdc28be extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["form_field_outer_data_classes"] = "form-data basic-captcha";
        // line 3
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/basic-captcha/basic-captcha.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_prepend($context, array $blocks = [])
    {
        // line 6
        echo "    <div class=\"form-input-addon form-input-prepend\">
        <img id=\"basic-captcha-reload\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("/forms-basic-captcha-image.jpg"), "html", null, true);
        echo "\" alt=\"human test\" />
        <button id=\"reload-captcha\"><svg viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"currentColor\"><path d=\"M14.74 22.39c4.68-1.24 8-5.49 8-10.4 0-5.95-4.79-10.75-10.75-10.75 -3.11 0-5.78 1.11-7.99 2.95 -.77.64-1.43 1.32-1.98 2.01 -.34.41-.57.75-.69.95 -.22.35-.1.81.25 1.02 .35.21.81.09 1.02-.26 .08-.15.27-.43.56-.79 .49-.62 1.08-1.23 1.76-1.81C6.87 3.67 9.21 2.7 11.94 2.7c5.13 0 9.25 4.12 9.25 9.25 0 4.22-2.86 7.88-6.9 8.94 -.41.1-.64.51-.54.91 .1.4.51.63.91.53Zm-12-14.84V2.99c-.001-.42-.34-.75-.75-.75 -.42 0-.75.33-.75.75v4.56c0 .41.33.75.75.75 .41 0 .75-.34.75-.75Zm-.75.75H4h2.43c.41 0 .75-.34.75-.75 0-.42-.34-.75-.75-.75H4 1.99c-.42 0-.75.33-.75.75 0 .41.33.75.75.75Z\"/><path d=\"M1.25 12c0 1.09.16 2.16.48 3.18 .12.39.54.61.93.49 .39-.13.61-.55.49-.94 -.28-.89-.42-1.81-.42-2.75 0-.42-.34-.75-.75-.75 -.42 0-.75.33-.75.75Zm1.93 6.15c.61.88 1.36 1.67 2.22 2.33 .32.25.79.19 1.05-.14 .25-.33.19-.8-.14-1.06 -.74-.58-1.38-1.25-1.92-2.02 -.24-.34-.71-.43-1.05-.19 -.34.23-.43.7-.19 1.04Zm5.02 3.91c1 .37 2.06.6 3.15.66 .41.02.76-.3.79-.71 .02-.42-.3-.77-.71-.8 -.94-.06-1.85-.25-2.72-.58 -.39-.15-.83.04-.97.43 -.15.38.04.82.43.96Z\"/></g></svg></button>
        <script>
            function stripQueryString(url) {
              return url.split(\"?\")[0].split(\"#\")[0];
            }
            document.getElementById(\"reload-captcha\").onclick = function(event) {
                event.preventDefault();
                const src = stripQueryString(document.getElementById(\"basic-captcha-reload\").src);
                document.getElementById(\"basic-captcha-reload\").src = src + `?v=\${new Date().getTime()}`;
            }
        </script>
    </div>
";
    }

    // line 22
    public function block_input_attributes($context, array $blocks = [])
    {
        // line 23
        echo "    type=\"text\"
    ";
        // line 24
        if ($this->getAttribute(($context["field"] ?? null), "size", [])) {
            echo "size=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
            echo "\"";
        }
        // line 25
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", [], "any", false, true), "min", [], "any", true, true))) {
            echo "minlength=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "minlength", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "minlength", []), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []))), "html", null, true);
            echo "\"";
        }
        // line 26
        echo "    ";
        if (($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true) || $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", [], "any", false, true), "max", [], "any", true, true))) {
            echo "maxlength=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "maxlength", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "maxlength", []), $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []))) : ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []))), "html", null, true);
            echo "\"";
        }
        // line 27
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/basic-captcha/basic-captcha.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 26,  79 => 25,  73 => 24,  70 => 23,  67 => 22,  49 => 7,  46 => 6,  43 => 5,  38 => 3,  36 => 1,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set form_field_outer_data_classes = 'form-data basic-captcha' %}

{% extends \"forms/field.html.twig\" %}

{% block prepend %}
    <div class=\"form-input-addon form-input-prepend\">
        <img id=\"basic-captcha-reload\" src=\"{{ url('/forms-basic-captcha-image.jpg') }}\" alt=\"human test\" />
        <button id=\"reload-captcha\"><svg viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"currentColor\"><path d=\"M14.74 22.39c4.68-1.24 8-5.49 8-10.4 0-5.95-4.79-10.75-10.75-10.75 -3.11 0-5.78 1.11-7.99 2.95 -.77.64-1.43 1.32-1.98 2.01 -.34.41-.57.75-.69.95 -.22.35-.1.81.25 1.02 .35.21.81.09 1.02-.26 .08-.15.27-.43.56-.79 .49-.62 1.08-1.23 1.76-1.81C6.87 3.67 9.21 2.7 11.94 2.7c5.13 0 9.25 4.12 9.25 9.25 0 4.22-2.86 7.88-6.9 8.94 -.41.1-.64.51-.54.91 .1.4.51.63.91.53Zm-12-14.84V2.99c-.001-.42-.34-.75-.75-.75 -.42 0-.75.33-.75.75v4.56c0 .41.33.75.75.75 .41 0 .75-.34.75-.75Zm-.75.75H4h2.43c.41 0 .75-.34.75-.75 0-.42-.34-.75-.75-.75H4 1.99c-.42 0-.75.33-.75.75 0 .41.33.75.75.75Z\"/><path d=\"M1.25 12c0 1.09.16 2.16.48 3.18 .12.39.54.61.93.49 .39-.13.61-.55.49-.94 -.28-.89-.42-1.81-.42-2.75 0-.42-.34-.75-.75-.75 -.42 0-.75.33-.75.75Zm1.93 6.15c.61.88 1.36 1.67 2.22 2.33 .32.25.79.19 1.05-.14 .25-.33.19-.8-.14-1.06 -.74-.58-1.38-1.25-1.92-2.02 -.24-.34-.71-.43-1.05-.19 -.34.23-.43.7-.19 1.04Zm5.02 3.91c1 .37 2.06.6 3.15.66 .41.02.76-.3.79-.71 .02-.42-.3-.77-.71-.8 -.94-.06-1.85-.25-2.72-.58 -.39-.15-.83.04-.97.43 -.15.38.04.82.43.96Z\"/></g></svg></button>
        <script>
            function stripQueryString(url) {
              return url.split(\"?\")[0].split(\"#\")[0];
            }
            document.getElementById(\"reload-captcha\").onclick = function(event) {
                event.preventDefault();
                const src = stripQueryString(document.getElementById(\"basic-captcha-reload\").src);
                document.getElementById(\"basic-captcha-reload\").src = src + `?v=\${new Date().getTime()}`;
            }
        </script>
    </div>
{% endblock %}

{% block input_attributes %}
    type=\"text\"
    {% if field.size %}size=\"{{ field.size }}\"{% endif %}
    {% if field.minlength is defined or field.validate.min is defined %}minlength=\"{{ field.minlength | default(field.validate.min) }}\"{% endif %}
    {% if field.maxlength is defined or field.validate.max is defined %}maxlength=\"{{ field.maxlength | default(field.validate.max) }}\"{% endif %}
    {{ parent() }}
{% endblock %}
", "forms/fields/basic-captcha/basic-captcha.html.twig", "C:\\xampp\\htdocs\\eu\\user\\plugins\\form\\templates\\forms\\fields\\basic-captcha\\basic-captcha.html.twig");
    }
}
