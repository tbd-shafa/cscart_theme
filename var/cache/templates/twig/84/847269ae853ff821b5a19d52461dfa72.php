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

/* __string_template__bf2b3eed1856b0f7b9c86ee0bf253ac5 */
class __TwigTemplate_3c3e8bd8f85cc699e8166119144c0dea extends \Twig\Template
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
        echo "<p style=\"text-align: center; font-family: Helvetica, Arial, sans-serif;\"><strong style=\"font-weight: bold;\">";
        echo twig_get_attribute($this->env, $this->source, ($context["p"] ?? null), "display_subtotal", [], "any", false, false, false, 1);
        echo "</strong></p>";
    }

    public function getTemplateName()
    {
        return "__string_template__bf2b3eed1856b0f7b9c86ee0bf253ac5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bf2b3eed1856b0f7b9c86ee0bf253ac5", "");
    }
}
