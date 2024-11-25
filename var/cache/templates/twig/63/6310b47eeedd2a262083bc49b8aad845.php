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

/* __string_template__07ddb44733069af31876499456ba7242 */
class __TwigTemplate_542a9515ebe3cb6cf3adad6cbcccfed3 extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "

  ";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
        echo ",<br /><br />

";
        // line 5
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_reviews.text_new_post_notification");
        echo ":&nbsp;<a href=\"";
        echo ($context["product_url"] ?? null);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, ($context["product_data"] ?? null), "product", [], "any", false, false, false, 5);
        echo "</a>
<br /><br />
<b>";
        // line 7
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "person_name");
        echo "</b>:&nbsp;";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "user_data", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "user_data", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7);
        } else {
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "customer");
        }
        echo "<br />

<b>";
        // line 9
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_reviews.rating");
        echo "</b>:&nbsp;<span style=\"color:#feba0f\">";
        if ((twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "5")) {
            echo "&#9733;&#9733;&#9733;&#9733;&#9733;</span>";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "4")) {
            echo "&#9733;&#9733;&#9733;&#9733;&#9734;";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "3")) {
            echo "&#9733;&#9733;&#9733;&#9734;&#9734;";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "2")) {
            echo "&#9733;&#9733;&#9734;&#9734;&#9734;";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "rating_value", [], "any", false, false, false, 9) == "1")) {
            echo "&#9733;&#9734;&#9734;&#9734;&#9734;";
        }
        echo "</span>
<br />

";
        // line 12
        if ((($context["review_fields"] ?? null) == "advanced")) {
            // line 13
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "message", [], "any", false, false, false, 13), "advantages", [], "any", false, false, false, 13)) {
                // line 14
                echo "    <b>";
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_reviews.advantages");
                echo "</b>:<br />
    ";
                // line 15
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "message", [], "any", false, false, false, 15), "advantages", [], "any", false, false, false, 15), "html", null, true));
                echo "
    <br />
    ";
            }
            // line 18
            echo "
    ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "message", [], "any", false, false, false, 19), "disadvantages", [], "any", false, false, false, 19)) {
                // line 20
                echo "    <b>";
                echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_reviews.disadvantages");
                echo "</b>:<br />
    ";
                // line 21
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "message", [], "any", false, false, false, 21), "disadvantages", [], "any", false, false, false, 21), "html", null, true));
                echo "
    <br />
    ";
            }
        }
        // line 25
        echo "
";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "message", [], "any", false, false, false, 26), "comment", [], "any", false, false, false, 26)) {
            // line 27
            echo "<b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_reviews.comment");
            echo "</b>:<br />
";
            // line 28
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "message", [], "any", false, false, false, 28), "comment", [], "any", false, false, false, 28), "html", null, true));
            echo "
<br /><br />
";
        }
        // line 31
        echo "
";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, ($context["product_review_data"] ?? null), "status", [], "any", false, false, false, 32) == "D")) {
            // line 33
            echo "<b>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "product_reviews.text_approval_notice");
            echo "</b>
<br />
";
        }
        // line 36
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "view");
        echo ":<br />
<a href=\"";
        // line 37
        echo ($context["product_review_url"] ?? null);
        echo "\">";
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["product_review_url"] ?? null));
        echo "</a>
";
        // line 38
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__07ddb44733069af31876499456ba7242";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 38,  150 => 37,  146 => 36,  139 => 33,  137 => 32,  134 => 31,  128 => 28,  123 => 27,  121 => 26,  118 => 25,  111 => 21,  106 => 20,  104 => 19,  101 => 18,  95 => 15,  90 => 14,  87 => 13,  85 => 12,  67 => 9,  56 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__07ddb44733069af31876499456ba7242", "");
    }
}
