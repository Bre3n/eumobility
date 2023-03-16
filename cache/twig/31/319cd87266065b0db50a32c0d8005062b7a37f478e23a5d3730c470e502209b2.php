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

/* @Page:C:/xampp/htdocs/eu/user/pages/04.kontakt */
class __TwigTemplate_b7379b7a88225c224354c47480ad3b6f2f9a5dd0a4fec0e5326ca9f6aa868bc4 extends \Twig\Template
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
        echo "<p>Chcesz zrealizować projekt Erasmus+ z nami?</p>
<p>Śmiało, zadzwoń lub napisz.</p>
<p>===</p>
<p><br> </p>
<div class=\"container\" style=\"padding-top: 0px; margin-top: -10px;\">
    <div class=\"columns\"> 

            <div class=\"column col-6 col-md-12\" style=\"padding: 1rem; background-color: #fcfcfc;\">

                <p id=\"formularz-kontaktowy\" style=\"padding-top: 20px; font-size: smaller;\"> Formularz kontaktowy: </p>

                ";
        // line 12
        $this->loadTemplate("forms/form.html.twig", "@Page:C:/xampp/htdocs/eu/user/pages/04.kontakt", 12)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), ["kontakt-form"])]));
        // line 13
        echo "
                <p style=\"font-size: small;\">
                ( * ) pola obowiązkowe<br><br>

                Wysyłając formularz wyrażasz zogdę na przetwarzanie podanych danych do celów kontaktu z Tobą zgodnie z: <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/polityka-prywatnosci-i-cookies\">Polityką Prywatności (RODO)</a>.
                </p>

            </div>

            <div class=\"column col-6 col-md-12\" style=\"padding: 1rem;\">             

                <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "\" class=\"navbar-brand mr-10\"><img src=\"/eu/user/themes/quarkextended/images/logo/logo3x.png\" alt=\"EU Mobility logo\"  style=\"width: 80%;\"></a><br><br>       

                <i class=\"fa fa-phone-square\" style=\"margin-right: 10px; color: #e40186; font-size: larger;\"></i> <i class=\"fab fa-whatsapp\" style=\"margin-right: 10px; color: #e40186; font-size: larger;\"></i><a href=\"tel:0048509849219\" title=\" 00 48 501 77 20 19\" style=\"font-size: larger;\"> 00 48 501 77 20 19</a> 
                <br><br>     
                <i class=\"fa fa-envelope\" style=\"margin-right: 10px; color: #e40186; font-size: larger;\"></i><span style=\"font-size: larger;\">info@eumobility.pl</span> 
                <br><br> 

            </div>

    </div>
</div>
<div class=\"columns\">
    <div class=\"column col-4 col-md-6 col-sm-12 mt-2 text-center\"><br>
        <p><strong>Adres w Polsce:</strong><br> ul. Zakładowa 21<br> 41-303 Dąbrowa Górnicza</p>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2545.3201721131586!2d19.209334815402073!3d50.36058410171767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d9b96134084f%3A0x3948510f5b1af4e1!2sZak%C5%82adowa%2021%2C%2041-303%20D%C4%85browa%20G%C3%B3rnicza!5e0!3m2!1spl!2spl!4v1666192455962!5m2!1spl!2spl\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"true\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" aria-hidden=\"false\" tabindex=\"0\"></iframe>                
    </div>
    <div class=\"column col-4 col-md-6 col-sm-12 mt-2 text-center\"><br>                       
        <p><strong>Adres w Chorwacji:</strong><br> Ivana Gundulića 26/12<br> 21000 Split</p>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.469337396492!2d16.43767931516085!3d43.51340466947763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13355dfd6603bfcf%3A0x783f4038ca7ec008!2sUl.%20Ivana%20Gunduli%C4%87a%2026%2C%2021000%2C%20Split%2C%20Chorwacja!5e0!3m2!1spl!2spl!4v1667635721989!5m2!1spl!2spl\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
    </div>
    <div class=\"column col-4 col-md-6 col-sm-12 mt-2 text-center\"><br>
        <p><strong>Adres w Szwecji:</strong><br> Stora Nygatan 18<br> 211 37 Malmö</p>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2253.880993278334!2d13.005925215606714!3d55.604084810919964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653a3e2dcc894f3%3A0x94c8bb10387c6353!2sStora%20Nygatan%2018%2C%20211%2037%20Malm%C3%B6%2C%20Szwecja!5e0!3m2!1spl!2spl!4v1667635663581!5m2!1spl!2spl\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/eu/user/pages/04.kontakt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  51 => 17,  45 => 13,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<p>Chcesz zrealizować projekt Erasmus+ z nami?</p>
<p>Śmiało, zadzwoń lub napisz.</p>
<p>===</p>
<p><br> </p>
<div class=\"container\" style=\"padding-top: 0px; margin-top: -10px;\">
    <div class=\"columns\"> 

            <div class=\"column col-6 col-md-12\" style=\"padding: 1rem; background-color: #fcfcfc;\">

                <p id=\"formularz-kontaktowy\" style=\"padding-top: 20px; font-size: smaller;\"> Formularz kontaktowy: </p>

                {% include \"forms/form.html.twig\" with {form: forms('kontakt-form')} %}

                <p style=\"font-size: small;\">
                ( * ) pola obowiązkowe<br><br>

                Wysyłając formularz wyrażasz zogdę na przetwarzanie podanych danych do celów kontaktu z Tobą zgodnie z: <a href=\"{{ base_url }}/polityka-prywatnosci-i-cookies\">Polityką Prywatności (RODO)</a>.
                </p>

            </div>

            <div class=\"column col-6 col-md-12\" style=\"padding: 1rem;\">             

                <a href=\"{{ base_url }}\" class=\"navbar-brand mr-10\"><img src=\"/eu/user/themes/quarkextended/images/logo/logo3x.png\" alt=\"EU Mobility logo\"  style=\"width: 80%;\"></a><br><br>       

                <i class=\"fa fa-phone-square\" style=\"margin-right: 10px; color: #e40186; font-size: larger;\"></i> <i class=\"fab fa-whatsapp\" style=\"margin-right: 10px; color: #e40186; font-size: larger;\"></i><a href=\"tel:0048509849219\" title=\" 00 48 501 77 20 19\" style=\"font-size: larger;\"> 00 48 501 77 20 19</a> 
                <br><br>     
                <i class=\"fa fa-envelope\" style=\"margin-right: 10px; color: #e40186; font-size: larger;\"></i><span style=\"font-size: larger;\">info@eumobility.pl</span> 
                <br><br> 

            </div>

    </div>
</div>
<div class=\"columns\">
    <div class=\"column col-4 col-md-6 col-sm-12 mt-2 text-center\"><br>
        <p><strong>Adres w Polsce:</strong><br> ul. Zakładowa 21<br> 41-303 Dąbrowa Górnicza</p>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2545.3201721131586!2d19.209334815402073!3d50.36058410171767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716d9b96134084f%3A0x3948510f5b1af4e1!2sZak%C5%82adowa%2021%2C%2041-303%20D%C4%85browa%20G%C3%B3rnicza!5e0!3m2!1spl!2spl!4v1666192455962!5m2!1spl!2spl\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"true\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" aria-hidden=\"false\" tabindex=\"0\"></iframe>                
    </div>
    <div class=\"column col-4 col-md-6 col-sm-12 mt-2 text-center\"><br>                       
        <p><strong>Adres w Chorwacji:</strong><br> Ivana Gundulića 26/12<br> 21000 Split</p>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.469337396492!2d16.43767931516085!3d43.51340466947763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13355dfd6603bfcf%3A0x783f4038ca7ec008!2sUl.%20Ivana%20Gunduli%C4%87a%2026%2C%2021000%2C%20Split%2C%20Chorwacja!5e0!3m2!1spl!2spl!4v1667635721989!5m2!1spl!2spl\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
    </div>
    <div class=\"column col-4 col-md-6 col-sm-12 mt-2 text-center\"><br>
        <p><strong>Adres w Szwecji:</strong><br> Stora Nygatan 18<br> 211 37 Malmö</p>
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2253.880993278334!2d13.005925215606714!3d55.604084810919964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4653a3e2dcc894f3%3A0x94c8bb10387c6353!2sStora%20Nygatan%2018%2C%20211%2037%20Malm%C3%B6%2C%20Szwecja!5e0!3m2!1spl!2spl!4v1667635663581!5m2!1spl!2spl\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
    </div>
</div>", "@Page:C:/xampp/htdocs/eu/user/pages/04.kontakt", "");
    }
}
