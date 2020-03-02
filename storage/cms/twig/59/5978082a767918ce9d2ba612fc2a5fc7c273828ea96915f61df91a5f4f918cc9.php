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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/layouts/home.htm */
class __TwigTemplate_39123669b482abca14cddb4d6d56cedd3fdd79e81a2df19e006570419d1203b4 extends \Twig\Template
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
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["extraData"] ?? null), "slider", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 8
            echo "
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    <header id=\"layout-header\">
        ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content/slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "    </header>
    <section id=\"layout-content\">
        ";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "    </section>
    <footer id=\"layout-footer\">
        ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
        echo "    </footer>
";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 23
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  97 => 22,  93 => 21,  90 => 20,  86 => 19,  82 => 17,  78 => 16,  74 => 14,  69 => 13,  65 => 12,  62 => 11,  54 => 8,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
{% partial 'site/head-default' %}
</head>
<body>
    {% for fields in extraData.slider %}

        
{% endfor %}
    <header id=\"layout-header\">
        {% partial 'content/nav' %}
        {% partial 'content/slider' %}
    </header>
    <section id=\"layout-content\">
        {% component 'staticPage' %}
    </section>
    <footer id=\"layout-footer\">
        {% partial 'site/footer' %}
    </footer>
{% partial 'site/scripts' %}
{% scripts %}
</body>
</html>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/layouts/home.htm", "");
    }
}
