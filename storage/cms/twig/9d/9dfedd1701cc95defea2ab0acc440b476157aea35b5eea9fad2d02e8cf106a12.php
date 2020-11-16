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

/* C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs/themes/demo/pages/pimax.htm */
class __TwigTemplate_1599734f2b1cb6e921f1357e0fd889256d126dbeadf7eda42c6f34bc92971f28 extends \Twig\Template
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
        echo "<div class=\"copyToOculus\">
    <p class=\"mainText\">정밀하고 시원한 VR <br>
        동영상 감상 유저를 위한 <br>최고의 성능</p>
</div>
<div class=\"pimaxbox\">
    <img src=\"../../../storage/app/media/pimaxfront.png\" alt=\"\">
   
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/pages/pimax.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"copyToOculus\">
    <p class=\"mainText\">정밀하고 시원한 VR <br>
        동영상 감상 유저를 위한 <br>최고의 성능</p>
</div>
<div class=\"pimaxbox\">
    <img src=\"../../../storage/app/media/pimaxfront.png\" alt=\"\">
   
</div>", "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/pages/pimax.htm", "");
    }
}
