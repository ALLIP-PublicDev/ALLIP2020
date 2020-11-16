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

/* C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs/themes/demo/partials/site/partner.htm */
class __TwigTemplate_ef9abfb98692311a47d4777eed6661c53789e16be8984f3f5acfa1fa8cbce787 extends \Twig\Template
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
        echo "<div class=\"partnership\">

    <h3>partner</h3>
    
    <ul class=\"partnerList\">
        <li>파이맥스</li>
        <li>드래곤아이</li>
        <li>놀로</li>
        <li>울트라립</li>
        <li>vrg</li>
        <li>mediaFront</li>
        <li>skonec</li>
        <li>pnicompany</li>
        <li>antilatency</li>
        <li>motiondevice</li>
    </ul>

    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/partner.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"partnership\">

    <h3>partner</h3>
    
    <ul class=\"partnerList\">
        <li>파이맥스</li>
        <li>드래곤아이</li>
        <li>놀로</li>
        <li>울트라립</li>
        <li>vrg</li>
        <li>mediaFront</li>
        <li>skonec</li>
        <li>pnicompany</li>
        <li>antilatency</li>
        <li>motiondevice</li>
    </ul>

    
</div>", "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/partner.htm", "");
    }
}
