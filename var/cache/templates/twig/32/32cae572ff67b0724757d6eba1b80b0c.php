<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__6ef481d5e008745027a1be971b3fbdf4 */
class __TwigTemplate_5b6a6b9a9b3bbb8e8c7f3914413fd950 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
        ";
        // line 2
        if (((((((twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_firstname", [], "any", false, false, false, 2) || twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_lastname", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_address", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_address_2", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_city", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_state_descr", [], "any", false, false, false, 2)) || twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_zipcode", [], "any", false, false, false, 2))) {
            // line 3
            echo "        <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "bill_to");
            echo "</h2>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <strong>";
            // line 5
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_firstname", [], "any", false, false, false, 5);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_lastname", [], "any", false, false, false, 5);
            echo "</strong>
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 8
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_address", [], "any", false, false, false, 8);
            echo " <br>";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_address_2", [], "any", false, false, false, 8);
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_city", [], "any", false, false, false, 11);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_state_descr", [], "any", false, false, false, 11);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_zipcode", [], "any", false, false, false, 11);
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            ";
            // line 14
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_country_descr", [], "any", false, false, false, 14);
            echo "
        </p>
        <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
            <span dir=\"ltr\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, ($context["u"] ?? null), "b_phone", [], "any", false, false, false, 17);
            echo "</span>
        </p>
        ";
        }
    }

    public function getTemplateName()
    {
        return "__string_template__6ef481d5e008745027a1be971b3fbdf4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  74 => 14,  64 => 11,  56 => 8,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6ef481d5e008745027a1be971b3fbdf4", "");
    }
}
