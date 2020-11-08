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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/slider.htm */
class __TwigTemplate_13c5a5edc84694279a53fdb3ea48aa0ef6da2908317ab24f0af865d056ec37bf extends \Twig\Template
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
        $tags = array("for" => 10, "if" => 11);
        $filters = array("media" => 11, "raw" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['media', 'raw'],
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
        echo "<div class=\"slider\">

    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        ";
        // line 9
        echo "        <div class=\"carousel-inner\" role=\"listbox\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slides"]) {
            // line 11
            echo "            <div class=\"carousel-item";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 11)) {
                echo " active";
            }
            echo "\" style=\"background-image: url('";
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slides"], "slide_image", [], "any", false, false, true, 11), 11, $this->source));
            echo "')\">
                <div class=\"container carousel-caption d-none d-md-block\">
                    ";
            // line 14
            echo "                        <h2 class=\"display-4 text-left\">";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slides"], "slide_title", [], "any", false, false, true, 14), 14, $this->source);
            echo "</h2>
                        ";
            // line 16
            echo "                    ";
            // line 17
            echo "                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slides'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            ";
        // line 38
        echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  120 => 20,  104 => 17,  102 => 16,  97 => 14,  87 => 11,  70 => 10,  67 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"slider\">

    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        {#<ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>#}
        <div class=\"carousel-inner\" role=\"listbox\">
            {% for slides in slider %}
            <div class=\"carousel-item{% if loop.first %} active{% endif %}\" style=\"background-image: url('{{ slides.slide_image|media }}')\">
                <div class=\"container carousel-caption d-none d-md-block\">
                    {#<a href=\"{{ slides.slide_url }}\"{% if slides.slide_urlext %} target=\"_blank\"{% endif %}>#}
                        <h2 class=\"display-4 text-left\">{{ slides.slide_title|raw }}</h2>
                        {#<p class=\"lead\">{{ slides.slide_text }}</p>#}
                    {#</a>#}
                </div>
            </div>
        {% endfor %}
            {#<!-- Slide One - Set the background image for this slide in the line below -->
            <div class=\"carousel-item active\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-01.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Slovensko kulturno dediščino<br>ohranjamo nedotaknjeno</h2>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class=\"carousel-item\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-02.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class=\"carousel-item\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-03.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                </div>
            </div>#}
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

</div>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/slider.htm", "");
    }
}
