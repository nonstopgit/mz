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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/nav.htm */
class __TwigTemplate_904c6c7fd1df986cf9c4f445fd1dfcc18b03eede47986cde8a01a85528a97bde extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top navbar-toggleable-sm\" data-toggle=\"affix\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/";
        // line 3
        echo twig_escape_filter($this->env, ($context["activeLocale"] ?? null), "html", null, true);
        echo "\"><img src=\"/storage/app/media/logo-mizarstvo-zupancic.png\" class=\"logo\" id=\"brandlogo\" alt=\"Mizarstvo Jože Zupančič s.p.\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 9), "isHidden", [], "any", false, false, false, 9)) {
                // line 10
                echo "                    <li class=\"nav-item";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 10)) {
                    echo " dropdown";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 10) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 10))) {
                    echo " active";
                }
                echo "\">
                        ";
                // line 11
                if ( !twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                            <a class=\"nav-link\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 12), "html", null, true);
                    echo "\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 12), "isExternal", [], "any", false, false, false, 12)) ? (" target=\"_blank\"") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 14
                    echo "                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 14), "html", null, true);
                    echo "\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 14), "html", null, true);
                    echo "</a>
                            <div class=\"dropdown-menu\">
                            ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 16));
                    foreach ($context['_seq'] as $context["_key"] => $context["sitem"]) {
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 16), "viewBag", [], "any", false, false, false, 16), "isHidden", [], "any", false, false, false, 16)) {
                            // line 17
                            echo "                                <a class=\"dropdown-item";
                            if (twig_get_attribute($this->env, $this->source, $context["sitem"], "isActive", [], "any", false, false, false, 17)) {
                                echo " active";
                            }
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sitem"], "url", [], "any", false, false, false, 17), "html", null, true);
                            echo "\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sitem"], "viewBag", [], "any", false, false, false, 17), "isExternal", [], "any", false, false, false, 17)) ? (" target=\"_blank\"") : (""));
                            echo ">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sitem"], "title", [], "any", false, false, false, 17), "html", null, true);
                            echo "</a>
                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                            </div>
                        ";
                }
                // line 21
                echo "                    </li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                ";
        // line 33
        echo "            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  120 => 23,  112 => 21,  108 => 19,  90 => 17,  85 => 16,  77 => 14,  67 => 12,  65 => 11,  55 => 10,  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light fixed-top navbar-toggleable-sm\" data-toggle=\"affix\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/{{ activeLocale }}\"><img src=\"/storage/app/media/logo-mizarstvo-zupancic.png\" class=\"logo\" id=\"brandlogo\" alt=\"Mizarstvo Jože Zupančič s.p.\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                {% for item in menuItems if not item.viewBag.isHidden%}
                    <li class=\"nav-item{% if item.items %} dropdown{% endif %}{% if item.isActive or item.isChildActive %} active{% endif %}\">
                        {% if not item.items %}
                            <a class=\"nav-link\" href=\"{{ item.url }}\"{{ item.viewBag.isExternal ? ' target=\"_blank\"' }}>{{ item.title }}</a>
                        {% else %}
                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"{{ item.url }}\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ item.title }}</a>
                            <div class=\"dropdown-menu\">
                            {% for sitem in item.items if not item.items.viewBag.isHidden%}
                                <a class=\"dropdown-item{% if sitem.isActive %} active{% endif %}\" href=\"{{ sitem.url }}\"{{ sitem.viewBag.isExternal ? ' target=\"_blank\"' }}>{{ sitem.title }}</a>
                            {% endfor %}
                            </div>
                        {% endif %}
                    </li>
                {% endfor %}
                {#<li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"/{{ activeLocale }}\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ activeLocale | capitalize }}</a>
                    <div class=\"dropdown-menu\">
                    {% for code, name in locales %}
                        {% if activeLocale != code %}
                            <a class=\"dropdown-item\" href=\"/{{ code }}\">{{ name }}</a>
                        {% endif %}
                    {% endfor %}
                    </div>
                </li>#}
            </ul>
        </div>
    </div>
</nav>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/content/nav.htm", "");
    }
}
