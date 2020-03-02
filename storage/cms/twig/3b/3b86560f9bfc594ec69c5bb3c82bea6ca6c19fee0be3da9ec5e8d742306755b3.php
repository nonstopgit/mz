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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/kontaktna-forma.htm */
class __TwigTemplate_d4cf99e38327d339157f1a7950a1886cbd398b7691ab4392b28a6dcf0ab091b4 extends \Twig\Template
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
        echo "<div class=\"bg-lght\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 text-left\">
                <form>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"input\">
                                <label>Ime in priimek</label>
                                <input type=\"text\" name=\"\">
                            </div>
                            <div class=\"input\">
                                <label>E-pošta</label>
                                <input type=\"email\" name=\"\">
                            </div>
                            <div class=\"input\">
                                <label>Mobilna številka</label>
                                <input type=\"text\" name=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"input\">
                                <label>Opomba</label>
                                <textarea></textarea>
                            </div>
                            <div class=\"input\">
                                <button type=\"submit\">POŠLJI</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            ";
        // line 44
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/kontaktna-forma.htm";
    }

    public function getDebugInfo()
    {
        return array (  71 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-lght\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 text-left\">
                <form>
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"input\">
                                <label>Ime in priimek</label>
                                <input type=\"text\" name=\"\">
                            </div>
                            <div class=\"input\">
                                <label>E-pošta</label>
                                <input type=\"email\" name=\"\">
                            </div>
                            <div class=\"input\">
                                <label>Mobilna številka</label>
                                <input type=\"text\" name=\"\">
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"input\">
                                <label>Opomba</label>
                                <textarea></textarea>
                            </div>
                            <div class=\"input\">
                                <button type=\"submit\">POŠLJI</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            {#<div class=\"col-md-4 text-left\">
    <strong>Lepotni studio SENSO</strong><br>
    Kettejev drevored 7<br>
    8000 Novo mesto<br>
    <br>
    Rezervacije: GSM: 040 466 626<br>
    <br>
    Email: <a href=\"mailto:senso@maja.si\">maja@senso.si</a><br>
    <br>
    Odprto: Po predhodnem dogovoru.<br>
            </div>#}
        </div>
    </div>
</div>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/kontaktna-forma.htm", "");
    }
}
