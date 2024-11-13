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

/* __string_template__95a4caaaacd4a1718b2835ab543b75fa */
class __TwigTemplate_0ee5ea81066678d381edb2d5b6cfb3c8 extends \Twig\Template
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
        echo "<table width=\"100%;\" style=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"padding-bottom: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\"><img src=\"";
        // line 8
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "logos", [], "any", false, false, false, 8), "mail", [], "any", false, false, false, 8), "image", [], "any", false, false, false, 8), "image_path", [], "any", false, false, false, 8);
        echo "\" width=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "logos", [], "any", false, false, false, 8), "mail", [], "any", false, false, false, 8), "image", [], "any", false, false, false, 8), "image_x", [], "any", false, false, false, 8);
        echo "\" height=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "logos", [], "any", false, false, false, 8), "mail", [], "any", false, false, false, 8), "image", [], "any", false, false, false, 8), "image_y", [], "any", false, false, false, 8);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, false, 8);
        echo "\" style=\"width: auto; max-width: 300px; max-height: 150px;\">
            </td>
            <td width=\"34%\" style=\"padding-bottom: 40px; -webkit-print-color-adjust: exact; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 3px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; line-height: 20px;\">";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "invoice_id_text", [], "any", false, false, false, 12);
        echo "</span>
                </p>

                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 16
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order_date");
        echo "</span>  ";
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "timestamp", [], "any", false, false, false, 16);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 19
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "payment");
        echo "</span>  ";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "payment", [], "any", false, false, false, 19);
        echo "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 22
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        echo "</span>  ";
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "shippings_method", [], "any", false, false, false, 22);
        echo "
                </p>
                ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tracking_number", [], "any", false, false, false, 24)) {
            // line 25
            echo "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #000000; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 26
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "tracking_number");
            echo "</span>  ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tracking_number", [], "any", false, false, false, 26);
            echo "
                </p>
                ";
        }
        // line 29
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td colspan=\"2\">
        <table width=\"100%;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\" border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td style=\"vertical-align: top; background-color: #f7f7f7; color: #444444; padding: 20px 10px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif; -webkit-print-color-adjust: exact;\" width=\"30%\">
                <h1 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #444444; margin-bottom: 20px;\">";
        // line 41
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "store");
        echo "</h1>
                <p style=\"margin: 0px; padding-bottom: 10px;\"><strong>";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, false, 42);
        echo "</strong>
                </p>
                ";
        // line 44
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "company_address");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 30px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"36%\">
                ";
        // line 47
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "bill_to");
        echo "
            </td>
            <td style=\"vertical-align: top; padding: 20px 0px; color: #444444; font-size: 14px; font-family: Helvetica, Arial, sans-serif;\" width=\"34%\">
                ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["pickup_point"] ?? null), "is_selected", [], "any", false, false, false, 50)) {
            // line 51
            echo "                ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "pickup_point");
            echo "
                ";
        } else {
            // line 53
            echo "                ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "ship_to");
            echo "
                ";
        }
        // line 55
        echo "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 63
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "products_table");
        echo "
    </td>
</tr>
<tr>
    <td style=\"border-top: 3px solid #444444; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "notes", [], "any", false, false, false, 72)) {
            // line 73
            echo "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "customer_notes");
            echo "</h2>
                ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "notes", [], "any", false, false, false, 74);
            echo "
                                ";
        }
        // line 76
        echo "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; color: #444; font-family: Helvetica, Arial, sans-serif;\">
                <tbody>
                <tr style=\" vertical-align: top;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 81
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "subtotal");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 83
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "display_subtotal", [], "any", false, false, false, 83);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 87
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tax_name", [], "any", false, false, false, 87);
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 89
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "tax_total", [], "any", false, false, false, 89);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 93
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        echo "
                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 95
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "display_shipping_cost", [], "any", false, false, false, 95);
        echo "
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "payment_surcharge", [], "any", false, false, false, 99)) {
            // line 100
            echo "                        <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "payment_surcharge");
            echo " </div> ";
        }
        // line 101
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 102
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "payment_surcharge", [], "any", false, false, false, 102)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "payment_surcharge", [], "any", false, false, false, 102);
            echo " ";
        }
        echo "<br>
                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\">";
        // line 106
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 106)) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "coupon");
            echo " </div> ";
        }
        // line 107
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 108)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 108);
            echo " ";
        }
        // line 109
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 112
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 112), "discount", [], "any", false, false, false, 112)) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "including_discount");
            echo " </div> ";
        }
        // line 113
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 114
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 114), "discount", [], "any", false, false, false, 114)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "discount", [], "any", false, false, false, 114);
            echo " ";
        }
        // line 115
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                    <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 118
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 118), "subtotal_discount", [], "any", false, false, false, 118)) {
            echo " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order_discount");
            echo " </div> ";
        }
        // line 119
        echo "                    </td>
                    <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 120
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 120), "subtotal_discount", [], "any", false, false, false, 120)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "subtotal_discount", [], "any", false, false, false, 120);
            echo " ";
        }
        // line 121
        echo "                    </td>
                </tr>
                <tr style=\" vertical-align: top; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: bold;\">
                    <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 124
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "total");
        echo "
                    </td>
                    <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif; \">";
        // line 126
        echo twig_get_attribute($this->env, $this->source, ($context["o"] ?? null), "total", [], "any", false, false, false, 126);
        echo "
                    </td>
                </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "__string_template__95a4caaaacd4a1718b2835ab543b75fa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 126,  309 => 124,  304 => 121,  298 => 120,  295 => 119,  289 => 118,  284 => 115,  278 => 114,  275 => 113,  269 => 112,  264 => 109,  258 => 108,  255 => 107,  249 => 106,  238 => 102,  235 => 101,  230 => 100,  228 => 99,  221 => 95,  216 => 93,  209 => 89,  204 => 87,  197 => 83,  192 => 81,  185 => 76,  180 => 74,  175 => 73,  173 => 72,  161 => 63,  151 => 55,  145 => 53,  139 => 51,  137 => 50,  131 => 47,  125 => 44,  120 => 42,  116 => 41,  102 => 29,  94 => 26,  91 => 25,  89 => 24,  82 => 22,  74 => 19,  66 => 16,  59 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__95a4caaaacd4a1718b2835ab543b75fa", "");
    }
}
