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
class __TwigTemplate_89f7ad80d9d1a5fbdad274abda20c88869647949e18d0a089400be2c3f932962 extends \Twig\Template
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
        $tags = array("for" => 13, "if" => 14);
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top navbar-toggleable-sm\" data-toggle=\"affix\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["activeLocale"] ?? null), 3, $this->source), "html", null, true);
        echo "\"><img src=\"/storage/app/media/logo-mizarstvo-zupancic.png\" class=\"logo m-2 m-lg-0\" id=\"brandlogo\" alt=\"Mizarstvo Jože Zupančič s.p.\"></a>
        ";
        // line 7
        echo "        <button class=\"navbar-toggler m-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <!--span class=\"navbar-toggler-icon\"></span-->
            <div class=\"animated-icon\"><span></span><span></span><span></span></div>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 13), "isHidden", [], "any", false, false, true, 13)) {
                // line 14
                echo "                    <li class=\"nav-item";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 14)) {
                    echo " dropdown";
                }
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, true, 14) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, true, 14))) {
                    echo " active";
                }
                echo "\">
                        ";
                // line 15
                if ( !twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 15)) {
                    // line 16
                    echo "                            <a class=\"nav-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "\"";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, true, 16), "isExternal", [], "any", false, false, true, 16)) ? (" target=\"_blank\"") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 18
                    echo "                            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    echo "\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                    echo "</a>
                            <div class=\"dropdown-menu\">
                            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["sitem"]) {
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, true, 20), "viewBag", [], "any", false, false, true, 20), "isHidden", [], "any", false, false, true, 20)) {
                            // line 21
                            echo "                                <a class=\"dropdown-item";
                            if (twig_get_attribute($this->env, $this->source, $context["sitem"], "isActive", [], "any", false, false, true, 21)) {
                                echo " active";
                            }
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sitem"], "url", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                            echo "\"";
                            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sitem"], "viewBag", [], "any", false, false, true, 21), "isExternal", [], "any", false, false, true, 21)) ? (" target=\"_blank\"") : (""));
                            echo ">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sitem"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                            echo "</a>
                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "                            </div>
                        ";
                }
                // line 25
                echo "                    </li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                ";
        // line 37
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
        return array (  150 => 37,  148 => 27,  140 => 25,  136 => 23,  118 => 21,  113 => 20,  105 => 18,  95 => 16,  93 => 15,  83 => 14,  78 => 13,  70 => 7,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light fixed-top navbar-toggleable-sm\" data-toggle=\"affix\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/{{ activeLocale }}\"><img src=\"/storage/app/media/logo-mizarstvo-zupancic.png\" class=\"logo m-2 m-lg-0\" id=\"brandlogo\" alt=\"Mizarstvo Jože Zupančič s.p.\"></a>
        {#<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>#}
        <button class=\"navbar-toggler m-2\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <!--span class=\"navbar-toggler-icon\"></span-->
            <div class=\"animated-icon\"><span></span><span></span><span></span></div>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
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
