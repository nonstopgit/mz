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

/* /home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/gmaps.htm */
class __TwigTemplate_ee7d12657c13bf444bfcfc23480c2943fc96ab2ef1fdfebade6b79ed96963a56 extends \Twig\Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div id=\"map\">
</div>
<style>
#map {
    width: 100%;
    height: 600px;
    background-color: #3b3b41;
}
</style>
<script>
  function initMap() {
    var myLatlng = {lat: 45.834943, lng: 15.187385};
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatlng,
      zoom: 14,
      styles:
        [
          {
              \"featureType\": \"all\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"saturation\": \"-100\"
                  }
              ]
          },
          {
              \"featureType\": \"administrative\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"landscape\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.attraction\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.business\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.government\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.medical\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.school\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          }
      ]
    });
    var marker = new google.maps.Marker({position: myLatlng, map: map});
    /*map.setTilt(45);*/
  }
</script>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB1wzY_rxH9TosJTCLwFFY254DizA40qew&callback=initMap\"></script>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/gmaps.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"map\">
</div>
<style>
#map {
    width: 100%;
    height: 600px;
    background-color: #3b3b41;
}
</style>
<script>
  function initMap() {
    var myLatlng = {lat: 45.834943, lng: 15.187385};
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatlng,
      zoom: 14,
      styles:
        [
          {
              \"featureType\": \"all\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"saturation\": \"-100\"
                  }
              ]
          },
          {
              \"featureType\": \"administrative\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"landscape\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"on\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.attraction\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.business\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.government\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.medical\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          },
          {
              \"featureType\": \"poi.school\",
              \"elementType\": \"all\",
              \"stylers\": [
                  {
                      \"visibility\": \"off\"
                  }
              ]
          }
      ]
    });
    var marker = new google.maps.Marker({position: myLatlng, map: map});
    /*map.setTilt(45);*/
  }
</script>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB1wzY_rxH9TosJTCLwFFY254DizA40qew&callback=initMap\"></script>", "/home/vagrant/code/mizarstvo-zupancic/themes/mz/partials/site/gmaps.htm", "");
    }
}
