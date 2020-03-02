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

/* /home/vagrant/code/mizarstvo-zupancic/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_ec7b06a91b111d32e01d73f382e9d6d1bf827ace15eae6eb2a08d3f8b7f13c33 extends \Twig\Template
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
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", [], "any", false, false, false, 1);
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/plugins/rainlab/pages/components/staticpage/default.htm";
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
        return new Source("{{ __SELF__.content|raw }}", "/home/vagrant/code/mizarstvo-zupancic/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
