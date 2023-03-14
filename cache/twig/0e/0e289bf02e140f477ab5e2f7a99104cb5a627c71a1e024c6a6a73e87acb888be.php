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
<head>

";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('assets', $context, $blocks);
        // line 40
        echo "
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap\" rel=\"stylesheet\"> 

<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/favicon.png"), "html", null, true);
        echo "\" />
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/favicon-32x32.png"), "html", null, true);
        echo "\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/favicon-16x16.png"), "html", null, true);
        echo "\">
<link rel=\"manifest\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/site.webmanifest"), "html", null, true);
        echo "\">
<link rel=\"mask-icon\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://favicon/safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#5bbad5\">
<meta name=\"msapplication-TileColor\" content=\"#da532c\">
<meta name=\"theme-color\" content=\"#ffffff\">
</head>
<body id=\"top\" class=\"";
        // line 54
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">

    <div id=\"page-wrapper\">
    ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('parallaxtoinclude', $context, $blocks);
        echo "  
    ";
        // line 104
        $this->displayBlock('hero', $context, $blocks);
        // line 105
        echo "
        <section id=\"start\">
        ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "        </section>

    </div>

    ";
        // line 121
        $this->displayBlock('footer', $context, $blocks);
        // line 124
        echo "
    ";
        // line 125
        $this->displayBlock('mobile', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('bottom', $context, $blocks);
        // line 141
        echo "
</body>
</html>";
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
        echo "    <meta charset=\"utf-8\" />
    ";
        // line 11
        $this->loadTemplate("partials/langswitcher.hreflang.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "    <title>";
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 16
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 16)->display($context);
        // line 17
        echo "    
    <link rel=\"canonical\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 23
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 24
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        echo " 
    ";
        // line 27
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/all.min.css"], "method");
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.treemenu.js", 1 => ["group" => "bottom"]], "method");
        // line 33
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 36
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 37
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 38
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 54
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 57
    public function block_header($context, array $blocks = [])
    {
        echo "                    

        <section class=\"section\" style=\"position: fixed; right: 0; z-index: 3; top: 0px; font-size: 0.6rem; line-height: 2rem; border-bottom: 1px solid rgba(0, 0, 0, 0.2); width: 100%; letter-spacing: 1px;\">

            <section class=\"container ";
        // line 61
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo " text-right\">            
                <div class=\"text-right d-inline\" style=\"padding-right: 30px; border-right: 1px solid rgba(0, 0, 0, 0.5); color: #000;\"><i class=\"fab fa-whatsapp\" style=\"margin-right: 10px;\"></i><i class=\"fas fa-phone-alt\" style=\"margin-right: 10px;\"></i> ";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "HEADER_CALL"));
        echo "</div>
                <div class=\"text-right d-inline\" style=\"padding-right: 20px; color: #fff;\">";
        // line 63
        $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 63)->display($context);
        echo "</div>
                <div class=\"text-right d-inline\" style=\"padding-right:20px; color:green\">fff</div>
            </section>                        

        </section>


        <section id=\"header\" class=\"section\" style=\"letter-spacing: 2px;\">
            <section class=\"container ";
        // line 71
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">

                    <section class=\"navbar-section logo\">
                        ";
        // line 75
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 75)->display($context);
        // line 76
        echo "                    </section>

                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        ";
        // line 81
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 84
        echo "                        </nav>

                        ";
        // line 86
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 87
            echo "                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 87)->display($context);
            echo "</span>
                        ";
        }
        // line 89
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    ";
    }

    // line 81
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 82
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 82)->display($context);
        // line 83
        echo "                        ";
    }

    // line 103
    public function block_parallaxtoinclude($context, array $blocks = [])
    {
    }

    // line 104
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        // line 108
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container ";
        // line 109
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 110
        $this->displayBlock('messages', $context, $blocks);
        // line 113
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
        ";
    }

    // line 110
    public function block_messages($context, array $blocks = [])
    {
        // line 111
        echo "                        ";
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 111);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 112
        echo "                    ";
    }

    // line 121
    public function block_footer($context, array $blocks = [])
    {
        // line 122
        echo "        ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 122)->display($context);
        // line 123
        echo "    ";
    }

    // line 125
    public function block_mobile($context, array $blocks = [])
    {
        // line 126
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 129
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 129)->display(twig_array_merge($context, ["mobile" => true]));
        // line 130
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 132
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 132)->display(twig_array_merge($context, ["tree" => true]));
        // line 133
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 138
    public function block_bottom($context, array $blocks = [])
    {
        // line 139
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
";
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
        return array (  444 => 139,  441 => 138,  434 => 133,  432 => 132,  428 => 130,  426 => 129,  421 => 126,  418 => 125,  414 => 123,  411 => 122,  408 => 121,  404 => 112,  393 => 111,  390 => 110,  381 => 113,  379 => 110,  375 => 109,  372 => 108,  369 => 107,  364 => 104,  359 => 103,  355 => 83,  352 => 82,  349 => 81,  333 => 89,  327 => 87,  325 => 86,  321 => 84,  319 => 81,  312 => 76,  310 => 75,  303 => 71,  292 => 63,  288 => 62,  284 => 61,  276 => 57,  270 => 54,  263 => 38,  258 => 37,  255 => 36,  245 => 33,  242 => 32,  239 => 31,  236 => 30,  232 => 27,  227 => 26,  224 => 25,  219 => 24,  214 => 23,  211 => 22,  208 => 21,  201 => 18,  198 => 17,  196 => 16,  184 => 12,  182 => 11,  179 => 10,  176 => 9,  164 => 141,  162 => 138,  159 => 137,  157 => 125,  154 => 124,  152 => 121,  146 => 117,  144 => 107,  140 => 105,  138 => 104,  134 => 103,  131 => 102,  129 => 57,  123 => 54,  116 => 50,  112 => 49,  108 => 48,  104 => 47,  100 => 46,  96 => 45,  89 => 40,  87 => 36,  84 => 35,  82 => 30,  79 => 29,  77 => 21,  74 => 20,  72 => 9,  66 => 6,  63 => 5,  61 => 3,  59 => 2,  57 => 1,  25 => 4,);
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
<head>

{% block head deferred %}
    <meta charset=\"utf-8\" />
    {% include 'partials/langswitcher.hreflang.html.twig' %}
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}
    
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress)  %}{% endif %}
    {% if theme_var('spectre.icons') %}{%  do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %} 
    {% do assets.addCss('theme://css/all.min.css') %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 101) %}
    {% do assets.addJs('theme://js/jquery.treemenu.js', {group:'bottom'}) %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}

<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap\" rel=\"stylesheet\"> 

<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://favicon/favicon.png') }}\" />
<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ url('theme://favicon/apple-touch-icon.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ url('theme://favicon/favicon-32x32.png') }}\">
<link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ url('theme://favicon/favicon-16x16.png') }}\">
<link rel=\"manifest\" href=\"{{ url('theme://favicon/site.webmanifest') }}\">
<link rel=\"mask-icon\" href=\"{{ url('theme://favicon/safari-pinned-tab.svg') }}\" color=\"#5bbad5\">
<meta name=\"msapplication-TileColor\" content=\"#da532c\">
<meta name=\"theme-color\" content=\"#ffffff\">
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">

    <div id=\"page-wrapper\">
    {% block header %}                    

        <section class=\"section\" style=\"position: fixed; right: 0; z-index: 3; top: 0px; font-size: 0.6rem; line-height: 2rem; border-bottom: 1px solid rgba(0, 0, 0, 0.2); width: 100%; letter-spacing: 1px;\">

            <section class=\"container {{ grid_size }} text-right\">            
                <div class=\"text-right d-inline\" style=\"padding-right: 30px; border-right: 1px solid rgba(0, 0, 0, 0.5); color: #000;\"><i class=\"fab fa-whatsapp\" style=\"margin-right: 10px;\"></i><i class=\"fas fa-phone-alt\" style=\"margin-right: 10px;\"></i> {{ \"HEADER_CALL\"|t|e }}</div>
                <div class=\"text-right d-inline\" style=\"padding-right: 20px; color: #fff;\">{% include 'partials/langswitcher.html.twig' %}</div>
                <div class=\"text-right d-inline\" style=\"padding-right:20px; color:green\">fff</div>
            </section>                        

        </section>


        <section id=\"header\" class=\"section\" style=\"letter-spacing: 2px;\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">

                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>

                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                        {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                        {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include 'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
    {% endblock %}

    {% block parallaxtoinclude %}{% endblock %}  
    {% block hero %}{% endblock %}

        <section id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container {{ grid_size }}\">
                    {% block messages %}
                        {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
        {% endblock %}
        </section>

    </div>

    {% block footer %}
        {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>", "partials/base.html.twig", "C:\\xampp\\htdocs\\eu\\user\\themes\\quarkextended\\templates\\partials\\base.html.twig");
    }
}
