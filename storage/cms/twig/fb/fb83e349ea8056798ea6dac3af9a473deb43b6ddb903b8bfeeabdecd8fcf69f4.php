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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/footer.htm */
class __TwigTemplate_9463a35a78665224d7ee9d7907a896ee201caf2e23cf142659f92877ef4485ee extends \Twig\Template
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
        $tags = array("for" => 19, "if" => 30);
        $filters = array("escape" => 20, "date" => 30, "_" => 30);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'date', '_'],
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-lg-6\">
            <div class=\"row corpo\">
                <div class=\"col-4\"><img src=\"/storage/app/media/footer-tree-mz.svg\" class=\"logo img-fluid\" alt=\"Mizarstvo Zupančič\"></div>
                <div class=\"col-8\" style=\"padding-top:2em;\">
                    <span class=\"mz\">Mizarstvo</span><br>
                    <strong>Jože Zupančič s.p.</strong><br>
                    <br>
                    Sevno 12A<br>
                    8000 Novo mesto<br>
                    <br>
                    <strong>GSM: +386 (0)41 682 512</strong><br>
                    <strong><a href=\"mailto:info@mizarstvo-zupancic.si\" title=\"Kontaktirajte nas\">info@mizarstvo-zupancic.si</a></strong><br>
                </div>                
            </div>
        </div>
        <div class=\"col-12 col-lg-3 text-center text-lg-left menu\" style=\"padding-top:2em;\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 19), "isHidden", [], "any", false, false, true, 19)) {
                // line 20
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</a><br>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "         </div>
        <div class=\"col-12 col-lg-3 text-center text-lg-right\" style=\"padding-top:2em;\">
            <p class=\"social\">
                <a href=\"https://www.facebook.com/MizarstvoZupancicJoze/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
                <!--a href=\"https://twitter.com/AMcyclingteam\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a-->
                <!--a href=\"https://www.youtube.com/channel/UChRePskjcnLBn9dmgPmdkSg\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"https://www.instagram.com/adriamobilcycling/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a><br-->
            </p>
            &copy; 2020";
        // line 30
        if ((($context["today"] ?? null) > 2020)) {
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        }
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["page.title"]);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  99 => 22,  87 => 20,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12 col-lg-6\">
            <div class=\"row corpo\">
                <div class=\"col-4\"><img src=\"/storage/app/media/footer-tree-mz.svg\" class=\"logo img-fluid\" alt=\"Mizarstvo Zupančič\"></div>
                <div class=\"col-8\" style=\"padding-top:2em;\">
                    <span class=\"mz\">Mizarstvo</span><br>
                    <strong>Jože Zupančič s.p.</strong><br>
                    <br>
                    Sevno 12A<br>
                    8000 Novo mesto<br>
                    <br>
                    <strong>GSM: +386 (0)41 682 512</strong><br>
                    <strong><a href=\"mailto:info@mizarstvo-zupancic.si\" title=\"Kontaktirajte nas\">info@mizarstvo-zupancic.si</a></strong><br>
                </div>                
            </div>
        </div>
        <div class=\"col-12 col-lg-3 text-center text-lg-left menu\" style=\"padding-top:2em;\">
            {% for item in menuItems if not item.viewBag.isHidden%}
                <a href=\"{{ item.url }}\">{{ item.title }}</a><br>
            {% endfor %}
         </div>
        <div class=\"col-12 col-lg-3 text-center text-lg-right\" style=\"padding-top:2em;\">
            <p class=\"social\">
                <a href=\"https://www.facebook.com/MizarstvoZupancicJoze/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
                <!--a href=\"https://twitter.com/AMcyclingteam\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a-->
                <!--a href=\"https://www.youtube.com/channel/UChRePskjcnLBn9dmgPmdkSg\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"https://www.instagram.com/adriamobilcycling/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a><br-->
            </p>
            &copy; 2020{% if today > 2020 %} - {{ \"now\"|date(\"Y\") }}{% endif %} {{ 'page.title'|_ }}
        </div>
    </div>
</div>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/footer.htm", "");
    }
}
