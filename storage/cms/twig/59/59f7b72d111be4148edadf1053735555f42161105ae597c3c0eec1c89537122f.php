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
class __TwigTemplate_f16a10788a18ac7639fdcd3debc628dd1d5bbc6573f98d521310d98f1aa73b92 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 1, "set" => 2);
        $filters = array("media" => 2, "escape" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['media', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["header"] ?? null)) {
            // line 2
            echo "    ";
            $context["headerImage"] = $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 2, $this->source));
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["pageheader"] ?? null), "image", [], "any", false, false, true, 3), "path", [], "any", false, false, true, 3)) {
            // line 4
            echo "    ";
            $context["headerImage"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pageheader"] ?? null), "image", [], "any", false, false, true, 4), "path", [], "any", false, false, true, 4);
        } else {
            // line 6
            echo "    ";
            $context["headerImage"] = "/storage/app/media/content/header/about-us.jpg";
        }
        // line 8
        echo "<div class=\"title headerimage";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["headersize"] ?? null), 8, $this->source), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["headerposition"] ?? null), 8, $this->source), "html", null, true);
        echo "\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["headerImage"] ?? null), 8, $this->source), "html", null, true);
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col caption\">                
                <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
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
        return array (  89 => 12,  77 => 8,  73 => 6,  69 => 4,  67 => 3,  64 => 2,  62 => 1,);
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
