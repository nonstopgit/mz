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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/header.htm */
class __TwigTemplate_87e915cb2706f90eadf8331ec5c43328e6d974af912ae885d51557386cb15cd5 extends \Twig\Template
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
        if (($context["header"] ?? null)) {
            // line 2
            echo "    ";
            $context["headerImage"] = $this->extensions['System\Twig\Extension']->mediaFilter(($context["header"] ?? null));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["pageheader"] ?? null), "image", [], "any", false, false, false, 3), "path", [], "any", false, false, false, 3)) {
            // line 4
            echo "    ";
            $context["headerImage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageheader"] ?? null), "image", [], "any", false, false, false, 4), "path", [], "any", false, false, false, 4);
        } else {
            // line 6
            echo "    ";
            $context["headerImage"] = "/storage/app/media/content/header/about-us.jpg";
        }
        // line 8
        echo "<div class=\"title headerimage";
        echo twig_escape_filter($this->env, ($context["headersize"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["headerposition"] ?? null), "html", null, true);
        echo "\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, ($context["headerImage"] ?? null), "html", null, true);
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col caption\">                
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 12), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  52 => 8,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if header %}
    {% set headerImage = header|media %}
{% elseif pageheader.image.path %}
    {% set headerImage = pageheader.image.path %}
{% else %}
    {% set headerImage = \"/storage/app/media/content/header/about-us.jpg\" %}
{% endif %}
<div class=\"title headerimage{{ headersize }} {{ headerposition }}\" style=\"background-image: url('{{ headerImage }}')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col caption\">                
                <h1>{{ this.page.title }}</h1>
            </div>
        </div>
    </div>
</div>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/header.htm", "");
    }
}
