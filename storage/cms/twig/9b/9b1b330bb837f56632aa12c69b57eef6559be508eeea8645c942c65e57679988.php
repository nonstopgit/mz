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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/layouts/default.htm */
class __TwigTemplate_c5513a64a7b4d54cf12e93c948d206b23b781b92c1eb366ba3e5657b495b8224 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/head-default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</head>
<body>
    <header id=\"layout-header\">
        ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    </header>
    <section id=\"layout-content\">        
            
        ";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 14
        echo "
        
        
        

    </section>
    <footer id=\"layout-footer\">
        ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "    </footer>
";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 25
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  87 => 24,  83 => 23,  80 => 22,  76 => 21,  67 => 14,  65 => 13,  60 => 10,  55 => 9,  51 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
{% partial 'site/head-default' %}
</head>
<body>
    <header id=\"layout-header\">
        {% partial 'content/nav' %}
        {% partial 'content/header' %}
    </header>
    <section id=\"layout-content\">        
            
        {% page %}

        
        
        

    </section>
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>
{% partial 'site/scripts' %}
{% scripts %}
</body>
</html>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/layouts/default.htm", "");
    }
}
