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

/* C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs/themes/demo/partials/site/contactus.htm */
class __TwigTemplate_1935aac45eaa312518d6562195381006428d9d207c24ce638bf986379d28a4f4 extends \Twig\Template
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
        echo "<h3>무엇이든 물어보세요</h3>

<h4>오후 5시 이전 문의사항은 당일 답변 드리겠습니다</h4>

<div class=\"description\">
<form action=\"https://cloudcs.kr/index.php?option=com_registrationform&amp;task=registration.submit&amp;setup_id=20\" class=\"contact-form\" id=\"main-contact-form\" method=\"post\" name=\"contact-form\">
<div class=\"status alert alert-success\" style=\"display: none;\">&nbsp;</div>

<div class=\"allbox\">
<div class=\"leftbox\">
<dl>
<!--\t<dt>이름</dt>-->
\t<dd><input  name=\"name\" onblur=\"if(this.placeholder==''){this.placeholder='이름'}\" onfocus=\"if(this.placeholder=='이름'){this.placeholder=''}\" placeholder=\"이름\" required=\"required\" type=\"text\" /></dd>
<!--\t<dt>이메일</dt>-->
\t<dd><input  name=\"email\" onblur=\"if(this.placeholder==''){this.placeholder='e-mail@address.kr'}\" onfocus=\"if(this.placeholder=='example@allip.kr'){this.placeholder=''}\" placeholder=\"example@allip.kr\" required=\"required\" type=\"email\" /></dd>
<!--\t<dt>휴대폰</dt>-->
\t<dd><input  name=\"phone\" onblur=\"if(this.placeholder==''){this.placeholder='010-XXXX-XXXX'}\" onfocus=\"if(this.placeholder=='010-XXXX-XXXX'){this.placeholder=''}\" placeholder=\"010-XXXX-XXXX\" required=\"required\" type=\"text\" /></dd>
</dl>
</div>

<div class=\"rightbox\">
<dl>
\t<dt>문의내용</dt>
\t<dd><textarea class=\"form-control\" id=\"message\" name=\"message\" onblur=\"if(this.placeholder==''){this.placeholder='요구사항이나 질문을 입력해 주세요'}\" onfocus=\"if(this.placeholder=='요구사항이나 질문을 입력해 주세요'){this.placeholder=''}\" placeholder=\"요구사항이나 질문을 입력해 주세요\" required=\"required\" rows=\"5\" style=\"resize:none;\"></textarea></dd>
</dl>
</div>
</div>
<button class=\"custombutton\">전송하기</button></form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/contactus.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h3>무엇이든 물어보세요</h3>

<h4>오후 5시 이전 문의사항은 당일 답변 드리겠습니다</h4>

<div class=\"description\">
<form action=\"https://cloudcs.kr/index.php?option=com_registrationform&amp;task=registration.submit&amp;setup_id=20\" class=\"contact-form\" id=\"main-contact-form\" method=\"post\" name=\"contact-form\">
<div class=\"status alert alert-success\" style=\"display: none;\">&nbsp;</div>

<div class=\"allbox\">
<div class=\"leftbox\">
<dl>
<!--\t<dt>이름</dt>-->
\t<dd><input  name=\"name\" onblur=\"if(this.placeholder==''){this.placeholder='이름'}\" onfocus=\"if(this.placeholder=='이름'){this.placeholder=''}\" placeholder=\"이름\" required=\"required\" type=\"text\" /></dd>
<!--\t<dt>이메일</dt>-->
\t<dd><input  name=\"email\" onblur=\"if(this.placeholder==''){this.placeholder='e-mail@address.kr'}\" onfocus=\"if(this.placeholder=='example@allip.kr'){this.placeholder=''}\" placeholder=\"example@allip.kr\" required=\"required\" type=\"email\" /></dd>
<!--\t<dt>휴대폰</dt>-->
\t<dd><input  name=\"phone\" onblur=\"if(this.placeholder==''){this.placeholder='010-XXXX-XXXX'}\" onfocus=\"if(this.placeholder=='010-XXXX-XXXX'){this.placeholder=''}\" placeholder=\"010-XXXX-XXXX\" required=\"required\" type=\"text\" /></dd>
</dl>
</div>

<div class=\"rightbox\">
<dl>
\t<dt>문의내용</dt>
\t<dd><textarea class=\"form-control\" id=\"message\" name=\"message\" onblur=\"if(this.placeholder==''){this.placeholder='요구사항이나 질문을 입력해 주세요'}\" onfocus=\"if(this.placeholder=='요구사항이나 질문을 입력해 주세요'){this.placeholder=''}\" placeholder=\"요구사항이나 질문을 입력해 주세요\" required=\"required\" rows=\"5\" style=\"resize:none;\"></textarea></dd>
</dl>
</div>
</div>
<button class=\"custombutton\">전송하기</button></form>
</div>", "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/contactus.htm", "");
    }
}
