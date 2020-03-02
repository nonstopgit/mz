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
class __TwigTemplate_c5967242eb61bba75044da50a7661f6d51ae2188ed52daaaec642a8a789514f5 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
            <div class=\"row corpo\">
                <div class=\"col-4\"><img src=\"/storage/app/media/footer-tree-mz.svg\" class=\"logo\" alt=\"Mizarstvo Zupančič\"></div>
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
        <div class=\"col menu\" style=\"padding-top:2em;\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 19), "isHidden", [], "any", false, false, false, 19)) {
                // line 20
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20), "html", null, true);
                echo "</a><br>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "         </div>
        <div class=\"col text-right\" style=\"padding-top:2em;\">
            <p class=\"social\">
                <!--a href=\"https://twitter.com/AMcyclingteam\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a-->
                <a href=\"https://www.facebook.com/MizarstvoZupancicJoze/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
                <!--a href=\"https://www.youtube.com/channel/UChRePskjcnLBn9dmgPmdkSg\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"https://www.instagram.com/adriamobilcycling/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a><br-->
            </p>
            &copy; 2019";
        // line 30
        if ((($context["today"] ?? null) > 2019)) {
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
        return array (  84 => 30,  74 => 22,  62 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-6\">
            <div class=\"row corpo\">
                <div class=\"col-4\"><img src=\"/storage/app/media/footer-tree-mz.svg\" class=\"logo\" alt=\"Mizarstvo Zupančič\"></div>
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
        <div class=\"col menu\" style=\"padding-top:2em;\">
            {% for item in menuItems if not item.viewBag.isHidden%}
                <a href=\"{{ item.url }}\">{{ item.title }}</a><br>
            {% endfor %}
         </div>
        <div class=\"col text-right\" style=\"padding-top:2em;\">
            <p class=\"social\">
                <!--a href=\"https://twitter.com/AMcyclingteam\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a-->
                <a href=\"https://www.facebook.com/MizarstvoZupancicJoze/\" target=\"_blank\"><i class=\"fab fa-facebook\"></i></a>
                <!--a href=\"https://www.youtube.com/channel/UChRePskjcnLBn9dmgPmdkSg\" target=\"_blank\"><i class=\"fab fa-youtube\"></i></a>
                <a href=\"https://www.instagram.com/adriamobilcycling/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a><br-->
            </p>
            &copy; 2019{% if today > 2019 %} - {{ \"now\"|date(\"Y\") }}{% endif %} {{ 'page.title'|_ }}
        </div>
    </div>
</div>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/footer.htm", "");
    }
}
