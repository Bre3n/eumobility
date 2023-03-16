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

/* partials/init-simple-cookie.html.twig */
class __TwigTemplate_31935067f7b39c668668e8f5cd8ad1001ce1a669f2e9db908dbafccb7f814291 extends \Twig\Template
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
        // line 2
        echo "window.addEventListener(\"load\", function() {

\tvar pluginConfig = ";
        // line 4
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simple-cookie", [], "array"));
        echo ";
\tvar cookieconsentInitialse = {
\t\t\"position\": pluginConfig.position,
\t\t\"theme\": pluginConfig.layout,
\t\t\"type\": pluginConfig.compliance,

\t\t\"content\": createCookieContent(pluginConfig),
\t\t\"palette\": createCookiePalette(pluginConfig.palette)
\t}

\t";
        // line 15
        echo "\tif (pluginConfig.custom)
\t{
\t\tvar customInitialise = JSON.parse(
\t\t\tpluginConfig.custom_config.replace(/\\r?\\n|\\r/g,'')
\t\t);
\t\tcookieconsentInitialse = Object.assign({}, cookieconsentInitialse, customInitialise);
\t}

\t";
        // line 24
        echo "\twindow.cookieconsent.initialise(cookieconsentInitialse);
});

";
        // line 28
        echo "function createCookiePalette(configPalette)
{
\tvar palette = {
\t\t\"popup\": {},
\t\t\"button\": {}
\t};

\tif (configPalette === \"black\")
\t{
\t\tpalette.popup.background = \"#000\";
\t\tpalette.button.background = \"#f1d600\";
\t}

\tif (configPalette === \"white\")
\t{
\t\tpalette.popup.background = \"#eaf7f7\";
\t\tpalette.popup.text = \"#5c7291\";

\t\tpalette.button.background = \"#56cbdb\";
\t\tpalette.button.text = \"#ffffff\";
\t}

\tif (configPalette === \"gray\")
\t{
\t\tpalette.popup.background = \"#252e39\";
\t\tpalette.button.background = \"#14a7d0\";
\t}

\treturn palette;
}

";
        // line 60
        echo "function createCookieContent(config)
{
\tvar cookieContent = {};

\tcookieContent.message = \"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.SIMPLE_COOKIE.BANNER_MESSAGE"), "html", null, true);
        echo "\";
\tif (config.banner_message)
\t{
\t\tcookieContent.message = config.banner_message;
\t}

\tcookieContent.dismiss = \"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.SIMPLE_COOKIE.BANNER_DISMISS"), "html", null, true);
        echo "\";
\tif (config.banner_dismiss)
\t{
\t\tcookieContent.dismiss = config.banner_dismiss;
\t}

\tcookieContent.deny = \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.SIMPLE_COOKIE.BANNER_DENY"), "html", null, true);
        echo "\";
\tif (config.banner_deny)
\t{
\t\tcookieContent.deny = config.banner_deny;
\t}


\tcookieContent.allow = \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.SIMPLE_COOKIE.BANNER_ACCEPT"), "html", null, true);
        echo "\";
\tif (config.banner_accept)
\t{
\t\tcookieContent.allow = config.banner_accept;
\t}

\tcookieContent.link = \"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.SIMPLE_COOKIE.BANNER_ACCEPT"), "html", null, true);
        echo "\";
\tif (config.banner_policy)
\t{
\t\tcookieContent.link = config.banner_policy;
\t}

\tcookieContent.href = \"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGINS.SIMPLE_COOKIE.BANNER_POLICY"), "html", null, true);
        echo "\";
\tif (config.informations)
\t{
\t\tcookieContent.href = config.informations;
\t}

\treturn cookieContent;
}
";
    }

    public function getTemplateName()
    {
        return "partials/init-simple-cookie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 95,  138 => 89,  129 => 83,  119 => 76,  110 => 70,  101 => 64,  95 => 60,  62 => 28,  57 => 24,  47 => 15,  34 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Add listener to window load to initialize the cookie banner correct. #}
window.addEventListener(\"load\", function() {

\tvar pluginConfig = {{ config.plugins[\"simple-cookie\"]|json_encode|raw }};
\tvar cookieconsentInitialse = {
\t\t\"position\": pluginConfig.position,
\t\t\"theme\": pluginConfig.layout,
\t\t\"type\": pluginConfig.compliance,

\t\t\"content\": createCookieContent(pluginConfig),
\t\t\"palette\": createCookiePalette(pluginConfig.palette)
\t}

\t{# Check if we need the custom configuration. #}
\tif (pluginConfig.custom)
\t{
\t\tvar customInitialise = JSON.parse(
\t\t\tpluginConfig.custom_config.replace(/\\r?\\n|\\r/g,'')
\t\t);
\t\tcookieconsentInitialse = Object.assign({}, cookieconsentInitialse, customInitialise);
\t}

\t{# Initialize cookie consent banner #}
\twindow.cookieconsent.initialise(cookieconsentInitialse);
});

{# Creates the cookie consent palette/color config. #}
function createCookiePalette(configPalette)
{
\tvar palette = {
\t\t\"popup\": {},
\t\t\"button\": {}
\t};

\tif (configPalette === \"black\")
\t{
\t\tpalette.popup.background = \"#000\";
\t\tpalette.button.background = \"#f1d600\";
\t}

\tif (configPalette === \"white\")
\t{
\t\tpalette.popup.background = \"#eaf7f7\";
\t\tpalette.popup.text = \"#5c7291\";

\t\tpalette.button.background = \"#56cbdb\";
\t\tpalette.button.text = \"#ffffff\";
\t}

\tif (configPalette === \"gray\")
\t{
\t\tpalette.popup.background = \"#252e39\";
\t\tpalette.button.background = \"#14a7d0\";
\t}

\treturn palette;
}

{# Creates the cookie consent content config. #}
function createCookieContent(config)
{
\tvar cookieContent = {};

\tcookieContent.message = \"{{ 'PLUGINS.SIMPLE_COOKIE.BANNER_MESSAGE'|t }}\";
\tif (config.banner_message)
\t{
\t\tcookieContent.message = config.banner_message;
\t}

\tcookieContent.dismiss = \"{{ 'PLUGINS.SIMPLE_COOKIE.BANNER_DISMISS'|t }}\";
\tif (config.banner_dismiss)
\t{
\t\tcookieContent.dismiss = config.banner_dismiss;
\t}

\tcookieContent.deny = \"{{ 'PLUGINS.SIMPLE_COOKIE.BANNER_DENY'|t }}\";
\tif (config.banner_deny)
\t{
\t\tcookieContent.deny = config.banner_deny;
\t}


\tcookieContent.allow = \"{{ 'PLUGINS.SIMPLE_COOKIE.BANNER_ACCEPT'|t }}\";
\tif (config.banner_accept)
\t{
\t\tcookieContent.allow = config.banner_accept;
\t}

\tcookieContent.link = \"{{ 'PLUGINS.SIMPLE_COOKIE.BANNER_ACCEPT'|t }}\";
\tif (config.banner_policy)
\t{
\t\tcookieContent.link = config.banner_policy;
\t}

\tcookieContent.href = \"{{ 'PLUGINS.SIMPLE_COOKIE.BANNER_POLICY'|t }}\";
\tif (config.informations)
\t{
\t\tcookieContent.href = config.informations;
\t}

\treturn cookieContent;
}
", "partials/init-simple-cookie.html.twig", "C:\\xampp\\htdocs\\eu\\user\\plugins\\simple-cookie\\templates\\partials\\init-simple-cookie.html.twig");
    }
}
