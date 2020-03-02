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
class __TwigTemplate_3f210670d3d280f2b75538e76b8e6d2991c2968d9aab6df101425dd149c1bc00 extends \Twig\Template
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
        echo "<div class=\"slider\">

    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        ";
        // line 9
        echo "        <div class=\"carousel-inner\" role=\"listbox\">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class=\"carousel-item active\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-01.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                    ";
        // line 15
        echo "                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class=\"carousel-item\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-02.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                    ";
        // line 22
        echo "                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class=\"carousel-item\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-03.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                    ";
        // line 29
        echo "                </div>
            </div>
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

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/slider.htm";
    }

    public function getDebugInfo()
    {
        return array (  65 => 29,  57 => 22,  49 => 15,  42 => 9,  37 => 1,);
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
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class=\"carousel-item active\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-01.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                    {#<p class=\"lead\"></p>#}
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class=\"carousel-item\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-02.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                    {#<p class=\"lead\"></p>#}
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class=\"carousel-item\" style=\"background-image: url('/storage/app/media/slider/mizarstvo-joze-zupancic-03.jpg')\">
                <div class=\"container carousel-caption d-none d-md-block text-left\">
                    <h2 class=\"display-4\">Ohranjamo<br>slovensko kulturno dediščino<br>nedotaknjeno</h2>
                    {#<p class=\"lead\"></p>#}
                </div>
            </div>
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
