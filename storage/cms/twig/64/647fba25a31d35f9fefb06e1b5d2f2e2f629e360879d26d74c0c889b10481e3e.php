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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/gallery.htm */
class __TwigTemplate_90a67ce99a91b235eae14af880642df420dc3855a15ca055949d2da40fc929e6 extends \Twig\Template
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
        $tags = array("if" => 3, "for" => 4, "put" => 12);
        $filters = array("escape" => 2, "resize" => 6, "theme" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'put'],
                ['escape', 'resize', 'theme'],
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
        // line 2
        echo "<div class=\"row gallery\" id=\"lg-";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["galleryname"] ?? null), 2, $this->source), "html", null, true);
        echo "\">
\t";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", [], "any", false, false, true, 3)) {
            echo "\t\t
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "images", [], "any", false, false, true, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "\t\t\t<div class=\"col-6 col-sm-4 cell\" data-src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "\" data-sub-html=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "\">
\t\t\t\t<a href=\"\" title=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
                echo "\"><div class=\"box\" style=\"background:url(";
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 6), 6, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Gallery"] ?? null), "properties", [], "any", false, false, true, 6), "maxDimension", [], "any", false, false, true, 6), 6, $this->source)]);
                echo ") no-repeat 50% 50%; background-size: cover;\"></div></a>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t";
        }
        // line 10
        echo "</div>

";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('styles'        );
        // line 13
        echo "    <link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/lightgallery/dist/css/lightgallery.css");
        echo "\" rel=\"stylesheet\" />
";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 16
        echo "\t<script src=\"https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js\"></script>
\t<script>
\t\tlightGallery(document.getElementById('lg-";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["galleryname"] ?? null), 25, $this->source), "html", null, true);
        echo "'));
\t\t/*\$('#lightgallery').lightGallery({
\t\t\tthumbnail: true,
\t\t\tanimateThumb : true
\t\t}); */
\t</script>
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 15,  122 => 25,  111 => 16,  109 => 15,  107 => 12,  102 => 13,  100 => 12,  96 => 10,  93 => 9,  82 => 6,  75 => 5,  71 => 4,  67 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#<h2>--{{ galleryname }}--</h2>#}
<div class=\"row gallery\" id=\"lg-{{ galleryname }}\">
\t{% if gallery.images %}\t\t
\t\t{% for image in gallery.images %}
\t\t\t<div class=\"col-6 col-sm-4 cell\" data-src=\"{{image.path}}\" data-sub-html=\"{{image.title}}\">
\t\t\t\t<a href=\"\" title=\"{{image.title}}\"><div class=\"box\" style=\"background:url({{image.path|resize(Gallery.properties.maxDimension)}}) no-repeat 50% 50%; background-size: cover;\"></div></a>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}
</div>

{% put styles %}
    <link href=\"{{ 'assets/vendor/lightgallery/dist/css/lightgallery.css'|theme }}\" rel=\"stylesheet\" />
{% endput %}
{% put scripts %}
\t<script src=\"https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js\"></script>
\t<script src=\"https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js\"></script>
\t<script>
\t\tlightGallery(document.getElementById('lg-{{ galleryname }}'));
\t\t/*\$('#lightgallery').lightGallery({
\t\t\tthumbnail: true,
\t\t\tanimateThumb : true
\t\t}); */
\t</script>
{% endput %}", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/gallery.htm", "");
    }
}
