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

/* partials/base.html.twig */
class __TwigTemplate_a0010129b9d3c748b5c5f65b530a2156b84dca558ee1a2062a1e0d70bcd77daa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 4);
        // line 4
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 4, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'parallaxtoinclude' => [$this, 'block_parallaxtoinclude'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 2
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 3
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 5
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">
\t<head>

\t\t";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "
\t\t";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
\t\t";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "
\t\t";
        // line 46
        $this->displayBlock('assets', $context, $blocks);
        // line 50
        echo "

\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap\" rel=\"stylesheet\">

\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/favicon.png"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"manifest\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/site.webmanifest"), "html", null, true);
        echo "\">
\t\t<link rel=\"mask-icon\" href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#5bbad5\">
\t\t<meta name=\"msapplication-TileColor\" content=\"#da532c\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">
\t</head>
\t<body id=\"top\" class=\"";
        // line 65
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">

\t\t<div id=\"page-wrapper\">
\t\t\t";
        // line 68
        $this->displayBlock('header', $context, $blocks);
        // line 132
        echo "
\t\t\t";
        // line 133
        $this->displayBlock('parallaxtoinclude', $context, $blocks);
        // line 134
        echo "\t\t\t";
        $this->displayBlock('hero', $context, $blocks);
        // line 135
        echo "
\t\t\t<section id=\"start\">
\t\t\t\t";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 147
        echo "\t\t\t</section>

\t\t</div>

\t\t";
        // line 151
        $this->displayBlock('footer', $context, $blocks);
        // line 154
        echo "
\t\t";
        // line 155
        $this->displayBlock('mobile', $context, $blocks);
        // line 167
        echo "
\t\t";
        // line 168
        $this->displayBlock('bottom', $context, $blocks);
        // line 171
        echo "
\t</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 9
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 10
        echo "\t\t\t<meta charset=\"utf-8\"/>
\t\t\t";
        // line 11
        $this->loadTemplate("partials/langswitcher.hreflang.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "\t\t\t<title>
\t\t\t\t";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 14
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo "
\t\t\t\t\t|
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t";
        // line 21
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 21)->display($context);
        // line 22
        echo "
\t\t\t<link rel=\"canonical\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\"/>
\t\t";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 27
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 28
        echo "\t\t\t";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            // line 29
            echo "\t\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
            // line 30
            echo "\t\t\t";
        }
        // line 31
        echo "\t\t\t";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            // line 32
            echo "\t\t\t\t";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
            // line 33
            echo "\t\t\t";
        }
        // line 34
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 35
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 36
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/all.min.css"], "method");
        // line 37
        echo "\t\t";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 41
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 42
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 43
        echo "\t\t\t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/darkmode.js", 1 => ["group" => "bottom"]], "method");
        // line 44
        echo "\t\t";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 46
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 47
        echo "\t\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
\t\t\t";
        // line 48
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
\t\t";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 65
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 68
    public function block_header($context, array $blocks = [])
    {
        // line 69
        echo "
\t\t\t\t<section class=\"section\" style=\"position: fixed; right: 0; z-index: 3; top: 0px; font-size: 0.6rem; line-height: 2rem; border-bottom: 1px solid rgba(0, 0, 0, 0.2); width: 100%; letter-spacing: 1px;\">

\t\t\t\t\t<section
\t\t\t\t\t\tclass=\"container ";
        // line 73
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo " text-right\">

\t\t\t\t\t\t";
        // line 76
        echo "
\t\t\t\t\t\t<div class=\"text-right d-inline\" style=\"position:fixed;padding-right:20px;padding-left:20px;padding-top:10px;\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox_mg\" id=\"chk\"/>
\t\t\t\t\t\t\t<label class=\"label_mg\" for=\"chk\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-moon\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-sun\"></i>
\t\t\t\t\t\t\t\t<div class=\"ball_mg\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 87
        echo "
\t\t\t\t\t\t<div class=\"text-right d-inline\" style=\"padding-right: 30px;padding-left:80px;border-right: 1px solid rgba(0, 0, 0, 0.5); color: #000;\">
\t\t\t\t\t\t\t<i class=\"fab fa-whatsapp\" style=\"margin-right: 10px;\"></i>
\t\t\t\t\t\t\t<i class=\"fas fa-phone-alt\" style=\"margin-right: 10px;\"></i>
\t\t\t\t\t\t\t";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "HEADER_CALL"));
        echo "</div>
\t\t\t\t\t\t<div class=\"text-right d-inline\" style=\"padding-right: 20px; color: #fff;\">";
        // line 92
        $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 92)->display($context);
        echo "</div>

\t\t\t\t\t</section>
\t\t\t\t</section>


\t\t\t\t<section id=\"header\" class=\"section\" style=\"letter-spacing: 2px;\">
\t\t\t\t\t<section class=\"container ";
        // line 99
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t<nav class=\"navbar\">

\t\t\t\t\t\t\t<section class=\"navbar-section logo\">
\t\t\t\t\t\t\t\t";
        // line 103
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 103)->display($context);
        // line 104
        echo "\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<section class=\"navbar-section desktop-menu\">

\t\t\t\t\t\t\t\t<nav class=\"dropmenu animated\">
\t\t\t\t\t\t\t\t\t";
        // line 109
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 112
        echo "\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t";
        // line 114
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t<span class=\"login-status-wrapper\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t";
            // line 117
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 117)->display($context);
            echo "</span>
\t\t\t\t\t\t\t\t";
        }
        // line 119
        echo "
\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<div class=\"mobile-menu\">
\t\t\t\t\t<div class=\"button_container\" id=\"toggle\">
\t\t\t\t\t\t<span class=\"top\"></span>
\t\t\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t\t\t<span class=\"bottom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
    }

    // line 109
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 110
        echo "\t\t\t\t\t\t\t\t\t\t";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 110)->display($context);
        // line 111
        echo "\t\t\t\t\t\t\t\t\t";
    }

    // line 133
    public function block_parallaxtoinclude($context, array $blocks = [])
    {
    }

    // line 134
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 137
    public function block_body($context, array $blocks = [])
    {
        // line 138
        echo "\t\t\t\t\t<section id=\"body-wrapper\" class=\"section\">
\t\t\t\t\t\t<section class=\"container ";
        // line 139
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t";
        // line 140
        $this->displayBlock('messages', $context, $blocks);
        // line 143
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t";
    }

    // line 140
    public function block_messages($context, array $blocks = [])
    {
        // line 141
        echo "\t\t\t\t\t\t\t\t";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 141);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 142
        echo "\t\t\t\t\t\t\t";
    }

    // line 151
    public function block_footer($context, array $blocks = [])
    {
        // line 152
        echo "\t\t\t";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 152)->display($context);
        // line 153
        echo "\t\t";
    }

    // line 155
    public function block_mobile($context, array $blocks = [])
    {
        // line 156
        echo "\t\t\t<div class=\"mobile-container\">
\t\t\t\t<div class=\"overlay\" id=\"overlay\">
\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t";
        // line 159
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 159)->display(twig_array_merge($context, ["mobile" => true]));
        // line 160
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"overlay-menu\">
\t\t\t\t\t\t";
        // line 162
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 162)->display(twig_array_merge($context, ["tree" => true]));
        // line 163
        echo "\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
    }

    // line 168
    public function block_bottom($context, array $blocks = [])
    {
        // line 169
        echo "\t\t\t";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 169,  486 => 168,  479 => 163,  477 => 162,  473 => 160,  471 => 159,  466 => 156,  463 => 155,  459 => 153,  456 => 152,  453 => 151,  449 => 142,  438 => 141,  435 => 140,  426 => 143,  424 => 140,  420 => 139,  417 => 138,  414 => 137,  409 => 134,  404 => 133,  400 => 111,  397 => 110,  394 => 109,  378 => 119,  373 => 117,  369 => 115,  367 => 114,  363 => 112,  361 => 109,  354 => 104,  352 => 103,  345 => 99,  335 => 92,  331 => 91,  325 => 87,  313 => 76,  308 => 73,  302 => 69,  299 => 68,  293 => 65,  286 => 48,  281 => 47,  278 => 46,  269 => 44,  266 => 43,  263 => 42,  260 => 41,  257 => 40,  254 => 39,  250 => 37,  247 => 36,  244 => 35,  241 => 34,  238 => 33,  235 => 32,  232 => 31,  229 => 30,  226 => 29,  223 => 28,  220 => 27,  217 => 26,  210 => 23,  207 => 22,  205 => 21,  197 => 17,  190 => 14,  188 => 13,  185 => 12,  183 => 11,  180 => 10,  177 => 9,  164 => 171,  162 => 168,  159 => 167,  157 => 155,  154 => 154,  152 => 151,  146 => 147,  144 => 137,  140 => 135,  137 => 134,  135 => 133,  132 => 132,  130 => 68,  124 => 65,  117 => 61,  113 => 60,  109 => 59,  105 => 58,  101 => 57,  97 => 56,  89 => 50,  87 => 46,  84 => 45,  82 => 39,  79 => 38,  77 => 26,  74 => 25,  72 => 9,  66 => 6,  63 => 5,  61 => 3,  59 => 2,  57 => 1,  25 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent', 'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
\t<head>

\t\t{% block head deferred %}
\t\t\t<meta charset=\"utf-8\"/>
\t\t\t{% include 'partials/langswitcher.hreflang.html.twig' %}
\t\t\t<title>
\t\t\t\t{% if page.title %}
\t\t\t\t\t{{ page.title|e('html') }}
\t\t\t\t\t|
\t\t\t\t{% endif %}
\t\t\t\t{{ site.title|e('html') }}</title>

\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t\t{% include 'partials/metadata.html.twig' %}

\t\t\t<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
\t\t{% endblock head %}

\t\t{% block stylesheets %}
\t\t\t{% do assets.addCss('theme://css-compiled/spectre'~compress) %}
\t\t\t{% if theme_var('spectre.exp') %}
\t\t\t\t{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}
\t\t\t{% endif %}
\t\t\t{% if theme_var('spectre.icons') %}
\t\t\t\t{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}
\t\t\t{% endif %}
\t\t\t{% do assets.addCss('theme://css-compiled/theme'~compress) %}
\t\t\t{% do assets.addCss('theme://css/custom.css') %}
\t\t\t{% do assets.addCss('theme://css/all.min.css') %}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{% do assets.addJs('jquery', 101) %}
\t\t\t{% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
\t\t\t{% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
\t\t\t{% do assets.addJs('theme://js/darkmode.js', {group:'bottom'}) %}
\t\t{% endblock %}

\t\t{% block assets deferred %}
\t\t\t{{ assets.css()|raw }}
\t\t\t{{ assets.js()|raw }}
\t\t{% endblock %}


\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap\" rel=\"stylesheet\">

\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://favicon/favicon.png') }}\"/>
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ url('theme://favicon/apple-touch-icon.png') }}\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://favicon/favicon-32x32.png') }}\">
\t\t<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://favicon/favicon-16x16.png') }}\">
\t\t<link rel=\"manifest\" href=\"{{ url('theme://favicon/site.webmanifest') }}\">
\t\t<link rel=\"mask-icon\" href=\"{{ url('theme://favicon/safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
\t\t<meta name=\"msapplication-TileColor\" content=\"#da532c\">
\t\t<meta name=\"theme-color\" content=\"#ffffff\">
\t</head>
\t<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">

\t\t<div id=\"page-wrapper\">
\t\t\t{% block header %}

\t\t\t\t<section class=\"section\" style=\"position: fixed; right: 0; z-index: 3; top: 0px; font-size: 0.6rem; line-height: 2rem; border-bottom: 1px solid rgba(0, 0, 0, 0.2); width: 100%; letter-spacing: 1px;\">

\t\t\t\t\t<section
\t\t\t\t\t\tclass=\"container {{ grid_size }} text-right\">

\t\t\t\t\t\t{#! Dark theme switcher #}

\t\t\t\t\t\t<div class=\"text-right d-inline\" style=\"position:fixed;padding-right:20px;padding-left:20px;padding-top:10px;\">
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"checkbox_mg\" id=\"chk\"/>
\t\t\t\t\t\t\t<label class=\"label_mg\" for=\"chk\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-moon\"></i>
\t\t\t\t\t\t\t\t<i class=\"fas fa-sun\"></i>
\t\t\t\t\t\t\t\t<div class=\"ball_mg\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{#!#}

\t\t\t\t\t\t<div class=\"text-right d-inline\" style=\"padding-right: 30px;padding-left:80px;border-right: 1px solid rgba(0, 0, 0, 0.5); color: #000;\">
\t\t\t\t\t\t\t<i class=\"fab fa-whatsapp\" style=\"margin-right: 10px;\"></i>
\t\t\t\t\t\t\t<i class=\"fas fa-phone-alt\" style=\"margin-right: 10px;\"></i>
\t\t\t\t\t\t\t{{ \"HEADER_CALL\"|t|e }}</div>
\t\t\t\t\t\t<div class=\"text-right d-inline\" style=\"padding-right: 20px; color: #fff;\">{% include 'partials/langswitcher.html.twig' %}</div>

\t\t\t\t\t</section>
\t\t\t\t</section>


\t\t\t\t<section id=\"header\" class=\"section\" style=\"letter-spacing: 2px;\">
\t\t\t\t\t<section class=\"container {{ grid_size }}\">
\t\t\t\t\t\t<nav class=\"navbar\">

\t\t\t\t\t\t\t<section class=\"navbar-section logo\">
\t\t\t\t\t\t\t\t{% include 'partials/logo.html.twig' %}
\t\t\t\t\t\t\t</section>

\t\t\t\t\t\t\t<section class=\"navbar-section desktop-menu\">

\t\t\t\t\t\t\t\t<nav class=\"dropmenu animated\">
\t\t\t\t\t\t\t\t\t{% block header_navigation %}
\t\t\t\t\t\t\t\t\t\t{% include 'partials/navigation.html.twig' %}
\t\t\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t{% if config.plugins.login.enabled and grav.user.username %}
\t\t\t\t\t\t\t\t\t<span class=\"login-status-wrapper\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t{% include 'partials/login-status.html.twig' %}</span>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</section>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<div class=\"mobile-menu\">
\t\t\t\t\t<div class=\"button_container\" id=\"toggle\">
\t\t\t\t\t\t<span class=\"top\"></span>
\t\t\t\t\t\t<span class=\"middle\"></span>
\t\t\t\t\t\t<span class=\"bottom\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endblock %}

\t\t\t{% block parallaxtoinclude %}{% endblock %}
\t\t\t{% block hero %}{% endblock %}

\t\t\t<section id=\"start\">
\t\t\t\t{% block body %}
\t\t\t\t\t<section id=\"body-wrapper\" class=\"section\">
\t\t\t\t\t\t<section class=\"container {{ grid_size }}\">
\t\t\t\t\t\t\t{% block messages %}
\t\t\t\t\t\t\t\t{% include 'partials/messages.html.twig' ignore missing %}
\t\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t\t\t{{ block('content_surround') }}
\t\t\t\t\t\t</section>
\t\t\t\t\t</section>
\t\t\t\t{% endblock %}
\t\t\t</section>

\t\t</div>

\t\t{% block footer %}
\t\t\t{% include 'partials/footer.html.twig' %}
\t\t{% endblock %}

\t\t{% block mobile %}
\t\t\t<div class=\"mobile-container\">
\t\t\t\t<div class=\"overlay\" id=\"overlay\">
\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t{% include 'partials/logo.html.twig' with {mobile: true} %}
\t\t\t\t\t</div>
\t\t\t\t\t<nav class=\"overlay-menu\">
\t\t\t\t\t\t{% include 'partials/navigation.html.twig' with {tree: true} %}
\t\t\t\t\t</nav>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endblock %}

\t\t{% block bottom %}
\t\t\t{{ assets.js('bottom')|raw }}
\t\t{% endblock %}

\t</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eu\\user\\themes\\quarkextended\\templates\\partials\\base.html.twig");
    }
}
