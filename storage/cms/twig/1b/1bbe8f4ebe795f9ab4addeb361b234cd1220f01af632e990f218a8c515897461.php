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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/head-default.htm */
class __TwigTemplate_7472153cf03b29e6529e69533474164d71c3cba5491321e60538bd90610e663f extends \Twig\Template
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
        echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta charset=\"utf-8\">
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
<title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " - ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["page.title"]);
        echo "</title>
<meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_description", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_title", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "config", [], "any", false, false, false, 7), "author", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\">
<!--link href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">-->
<link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">
<script src=\"https://kit.fontawesome.com/b6b88bedb5.js\" crossorigin=\"anonymous\"></script>
<link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css?v=0.0.11");
        echo "\" rel=\"stylesheet\">
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "<!--[if lt IE 9]>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/head-default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  76 => 15,  72 => 14,  66 => 11,  62 => 10,  56 => 7,  52 => 6,  48 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta charset=\"utf-8\">
<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
<title>{{ this.page.title }} - {{ 'page.title'|_ }}</title>
<meta name=\"description\" content=\"{{ this.page.meta_description }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title }}\">
<meta name=\"author\" content=\"{{ this.theme.config.author }}\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon.png'|theme }}\">
<!--link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">-->
<link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=latin-ext\" rel=\"stylesheet\">
<script src=\"https://kit.fontawesome.com/b6b88bedb5.js\" crossorigin=\"anonymous\"></script>
<link href=\"{{ 'assets/css/theme.css?v=0.0.11'|theme }}\" rel=\"stylesheet\">
{% styles %}
<!--[if lt IE 9]>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js\"></script>
<![endif]-->", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/head-default.htm", "");
    }
}
