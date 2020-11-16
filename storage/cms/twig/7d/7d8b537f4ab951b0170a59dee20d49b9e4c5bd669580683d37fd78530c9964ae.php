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

/* C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs/themes/demo/partials/site/footer.htm */
class __TwigTemplate_dcb1ff198b917d6e4f8a92ada6fce10b186702d3e893630f197ddcd2b07bb5e7 extends \Twig\Template
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
        $filters = array("escape" => 10, "date" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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
        echo "<div id=\"footer\">
    <div class=\"container\">
      
 
        <p class=\"muted credit\">
        올아이피정보통신 주식회사　사업자등록번호: 214-88-25739　통신판매업신고: 2016-서울서초-1108호
주소: 서울 서초구 효령로 304 국제전자센터 6층 100호　대표이사: 류덕하
대표전화: 070-8633-6345　FAX번호: 02-3465-1652　이메일: allipcloud@gmail.com
        
        &copy;";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " 올아이피정보통신(주) All rights reserved.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
    <div class=\"container\">
      
 
        <p class=\"muted credit\">
        올아이피정보통신 주식회사　사업자등록번호: 214-88-25739　통신판매업신고: 2016-서울서초-1108호
주소: 서울 서초구 효령로 304 국제전자센터 6층 100호　대표이사: 류덕하
대표전화: 070-8633-6345　FAX번호: 02-3465-1652　이메일: allipcloud@gmail.com
        
        &copy;{{ \"now\"|date(\"Y\") }} 올아이피정보통신(주) All rights reserved.</p>
    </div>
</div>", "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/footer.htm", "");
    }
}
