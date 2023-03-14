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

/* partials/footer.html.twig */
class __TwigTemplate_24838255b935c39f550899d9037f5f3f197ac8d913d4f80cbc7009f59910ac88 extends \Twig\Template
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
        echo "    <section id=\"footer\" class=\"footer\" style=\"z-index: 1;\">
        <section class=\"container ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">\t\t
\t\t\t\t
            <div class=\"columns\">
                    <div class=\"column col-4 col-md-6 col-sm-12\" >
                        <h6>ERASMUS+:</h6>
\t\t\t\t\t\t";
        // line 14
        echo "\t\t\t\t\t\t";
        echo "\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => "to_menu_footer_erasmus"]], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p1"]) {
            // line 16
            echo "\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "url", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "menu", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p1"], "menu", []), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            // line 20
            echo "\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    </div>
                    <div class=\"column col-4 col-md-6 col-sm-12\">                       
                        <h6>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "INFORMATIONS"));
        echo ":</h6>
\t\t\t\t\t\t";
        // line 34
        echo "
\t\t\t\t\t\t";
        // line 35
        echo "\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["taxonomy"] ?? null), "findTaxonomy", [0 => ["tag" => [0 => "to_menu_footer_informacje"]]], "method"), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "url", []), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "menu", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", []), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            // line 41
            echo "\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t\t 

                    </div>
                    <div class=\"column col-4 col-md-6 col-sm-12\">
                        <div class=\"footer-contact\">
\t\t\t\t\t\t \t<h6>EU Mobility</h6>
\t\t\t\t\t\t\t<ul class=\"footer-cont-adr\">
\t\t\t\t\t\t\t<li><i class=\"fa fa-phone-square\" style=\"margin-right: 10px;\"></i><a href=\"tel:+48 501 772 019\" style=\"font-size: larger;\" title=\"+47 92 55 0350\">+48 501 772 019</a></li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-envelope\" style=\"margin-right: 10px;\"></i>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<script language=\"JavaScript\" type=\"text/javascript\">
\t\t\t\t\t\t\tvar part1 = \"info\";
\t\t\t\t\t\t\tvar part2 = Math.pow(2,6);
\t\t\t\t\t\t\tvar part3 = String.fromCharCode(part2);
\t\t\t\t\t\t\tvar part4 = \"eumobility.pl\";
\t\t\t\t\t\t\tvar part5 = part1 + String.fromCharCode(part2) + part4;
\t\t\t\t\t\t\tdocument.write(\"<a href=\" + \"mai\" + \"lto\" + \":\" 
\t\t\t\t\t\t\t+ part5 + \">\" + part1 + part3 + part4 + \"</a>\");
\t\t\t\t\t\t\t</script>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><i class=\"fa-brands fa-facebook\" style=\"margin-right: 10px;\"></i><a href=\"https://www.facebook.com/profile.php?id=100063488585533\" title=\"EU Mobility Facebook Poland Polska\">Facebook (PL)</a></li>
\t\t\t\t\t\t\t<li><i class=\"fa-brands fa-facebook\" style=\"margin-right: 10px;\"></i><a href=\"https://www.facebook.com/eumobilitysverige\" title=\"EU Mobility Facebook Sweden Szwecja\">Facebook (SE)</a></li>
\t\t\t\t\t\t\t<li><i class=\"fa-brands fa-facebook\" style=\"margin-right: 10px;\"></i><a href=\"https://www.facebook.com/profile.php?id=100086284754057\" title=\"EU Mobility Facebook Croatia Chorwacja\">Facebook (HR)</a></li>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                   </div>
\t\t\t</div>\t\t\t
\t\t\t
\t\t\t<div style=\"font-size: 0.7em; padding-top: 10px; text-align: center; color: #FFF;\">&copy; ";
        // line 77
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " EU Mobility</div>
\t\t\t<div style=\"font-size: 0.6em; padding-top: 10px; text-align: center; color: #C5C2C2;\"><a href=\"https://projektowanie-stron-internetowych.pl/\" title=\"Projektowanie stron internetowych Dąbrowa Górnicza\" style=\"color: #C5C2C2;\">projektowanie-stron-internetowych.pl</a></div>\t\t\t
\t\t\t
        </section>
    </section>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 77,  107 => 44,  99 => 41,  91 => 39,  87 => 37,  83 => 36,  80 => 35,  77 => 34,  73 => 25,  69 => 23,  61 => 20,  53 => 18,  49 => 16,  45 => 15,  41 => 14,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("    <section id=\"footer\" class=\"footer\" style=\"z-index: 1;\">
        <section class=\"container {{ grid_size }}\">\t\t
\t\t\t\t
            <div class=\"columns\">
                    <div class=\"column col-4 col-md-6 col-sm-12\" >
                        <h6>ERASMUS+:</h6>
\t\t\t\t\t\t{#
\t\t\t\t\t\t<ul>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"{{ base_url }}/erasmus-plus/{{ \"POLAND\"|t|e|underscorize }}\" title=\"Erasmus+ {{ \"POLAND\"|t|e }}\">{{ \"POLAND\"|t|e }}</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ base_url }}/erasmus-plus/{{ \"CROATIA\"|t|e|underscorize }}\" title=\"Erasmus+ {{ \"CROATIA\"|t|e }}\">{{ \"CROATIA\"|t|e }}</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ base_url }}/erasmus-plus/{{ \"SWEDEN\"|t|e|underscorize }}\" title=\"Erasmus+ {{ \"SWEDEN\"|t|e }}\">{{ \"SWEDEN\"|t|e }}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t#}
\t\t\t\t\t\t{# Tomek - generujące się menu z page z tag to_menu_footer_erasmus #}\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t{% for p1 in taxonomy.findTaxonomy({'tag':'to_menu_footer_erasmus'}) %}
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ p1.url }}\" title=\"{{ p1.menu }}\">{{ p1.menu }}</a></li>
\t\t\t\t\t\t\t\t\t{# p.title - pobiera wartość z tytułu strony , p.menu - z pola ustawianego w edyccji strony Advance: Menu (stosuje gdy chcę capitalize litery w różnych meny) #}
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endfor %}
                    </div>
                    <div class=\"column col-4 col-md-6 col-sm-12\">                       
                        <h6>{{ \"INFORMATIONS\"|t|e }}:</h6>
\t\t\t\t\t\t{# Stara wersja
\t\t\t\t\t\t<ul>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"{{ base_url }}/{{ \"ABOUT_US\"|t|e|underscorize|hyphenize }}\" title=\"{{ \"ABOUT_US\"|t|e }}\">{{ \"ABOUT_US\"|t|e }}</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ base_url }}/{{ \"PROJECTS_ERASMUS\"|t|e|underscorize|hyphenize }}\" title=\"{{ \"PROJECTS_ERASMUS\"|t|e }}\">{{ \"PROJECTS_ERASMUS\"|t|e }}</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ base_url }}/{{ \"CONTACT\"|t|e|underscorize|hyphenize }}\" title=\"{{ \"CONTACT\"|t|e }}\">{{ \"CONTACT\"|t|e }}</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ base_url }}/{{ \"PRIVACY\"|t|e|underscorize|hyphenize }}\" rel=\"nofollow\" title=\"{{ \"PRIVACY\"|t|e }}\">{{ \"PRIVACY\"|t|e }}</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t#}

\t\t\t\t\t\t{# Tomek - generujące się menu z page z tag to_menu_footer_informacje #}\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t{% for p in taxonomy.findTaxonomy({'tag':['to_menu_footer_informacje']}).order('date', 'desc') %}
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<li><a href=\"{{ p.url }}\" title=\"{{ p.menu }}\">{{ p.title }}</a></li>
\t\t\t\t\t\t\t\t\t{# p.title - pobiera wartość z tytułu strony , p.menu - z pola ustawianego w edyccji strony Advance: Menu (stosuje gdy chcę capitalize litery w różnych meny) #}
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t 

                    </div>
                    <div class=\"column col-4 col-md-6 col-sm-12\">
                        <div class=\"footer-contact\">
\t\t\t\t\t\t \t<h6>EU Mobility</h6>
\t\t\t\t\t\t\t<ul class=\"footer-cont-adr\">
\t\t\t\t\t\t\t<li><i class=\"fa fa-phone-square\" style=\"margin-right: 10px;\"></i><a href=\"tel:+48 501 772 019\" style=\"font-size: larger;\" title=\"+47 92 55 0350\">+48 501 772 019</a></li>
\t\t\t\t\t\t\t<li><i class=\"fa fa-envelope\" style=\"margin-right: 10px;\"></i>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<script language=\"JavaScript\" type=\"text/javascript\">
\t\t\t\t\t\t\tvar part1 = \"info\";
\t\t\t\t\t\t\tvar part2 = Math.pow(2,6);
\t\t\t\t\t\t\tvar part3 = String.fromCharCode(part2);
\t\t\t\t\t\t\tvar part4 = \"eumobility.pl\";
\t\t\t\t\t\t\tvar part5 = part1 + String.fromCharCode(part2) + part4;
\t\t\t\t\t\t\tdocument.write(\"<a href=\" + \"mai\" + \"lto\" + \":\" 
\t\t\t\t\t\t\t+ part5 + \">\" + part1 + part3 + part4 + \"</a>\");
\t\t\t\t\t\t\t</script>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><i class=\"fa-brands fa-facebook\" style=\"margin-right: 10px;\"></i><a href=\"https://www.facebook.com/profile.php?id=100063488585533\" title=\"EU Mobility Facebook Poland Polska\">Facebook (PL)</a></li>
\t\t\t\t\t\t\t<li><i class=\"fa-brands fa-facebook\" style=\"margin-right: 10px;\"></i><a href=\"https://www.facebook.com/eumobilitysverige\" title=\"EU Mobility Facebook Sweden Szwecja\">Facebook (SE)</a></li>
\t\t\t\t\t\t\t<li><i class=\"fa-brands fa-facebook\" style=\"margin-right: 10px;\"></i><a href=\"https://www.facebook.com/profile.php?id=100086284754057\" title=\"EU Mobility Facebook Croatia Chorwacja\">Facebook (HR)</a></li>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
                   </div>
\t\t\t</div>\t\t\t
\t\t\t
\t\t\t<div style=\"font-size: 0.7em; padding-top: 10px; text-align: center; color: #FFF;\">&copy; {{ \"now\"|date('Y') }} EU Mobility</div>
\t\t\t<div style=\"font-size: 0.6em; padding-top: 10px; text-align: center; color: #C5C2C2;\"><a href=\"https://projektowanie-stron-internetowych.pl/\" title=\"Projektowanie stron internetowych Dąbrowa Górnicza\" style=\"color: #C5C2C2;\">projektowanie-stron-internetowych.pl</a></div>\t\t\t
\t\t\t
        </section>
    </section>", "partials/footer.html.twig", "C:\\xampp\\htdocs\\eu\\user\\themes\\quarkextended\\templates\\partials\\footer.html.twig");
    }
}
