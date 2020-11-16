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

/* C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs/themes/demo/partials/site/pimaxback.htm */
class __TwigTemplate_0cfc3f9b8d7b61abe08465a5b0040067cae892f257c8a844d138d8460d2ebd9a extends \Twig\Template
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
        echo "<div class=\"wrap\">
    <div class=\"pimaxback1\">

        눈부시게 선명한 8K 화질<br>
        기대를 뛰어넘는 200인치 <br> 와이드 화면 구성
        <div class=\"moreview\"><a href=\"\">더 알아보기</a></div>
    </div>


    <div class=\"pimaxback2\">

        <ul>
            <li><img src=\"../../../../storage/app/media/playpimax.png\" alt=\"\"></li>
            <li>
                <h1>혁신을 뛰어넘는 모바일 프로세서<br>
                </h1>
            </li>
            <li>
                <h3>차세대 개인 극장 편하게 경험하세요</h3>
            </li>
            <div class=\"align-right moreview\"><a href=\"#\">구매하기</a></div>
        </ul>
    </div>



    <div class=\"pimaxback3\">
        <div class=\"back3text\">드래곤아이 8K로 360도 익스트림 스포츠<br>
            공상 과학, 애니메이션, 엔터테인먼트 <br>영상을
            즐겨보세요.</div>
        <ul class=\"picture\">
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/youtube.png\" alt=\"8kx\"></a></li>
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/veer.png\" alt=\"8k\"></a></li>
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/alyx.png\" alt=\"5k+\"></a></li>
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/beatsaber.png\" alt=\"\"></a></li>


        </ul>



    </div>
    <div class=\"pimaxback4\"><img src=\"../../../../storage/app/media/8kxpng.png\" alt=\"\">Pimax8KX 세부사항<br><a class=\"backfont1\" href=\"#\">
            <span>자세히 살펴보기</span></a></div>
</div>




<div class=\"pimaxback5\">
    <h1>스펙사항</h1>
    <ul>
        <li>모델명</li>
        <li>프로세서</li>
        <li>센서</li>
    </ul>
    <ul>
        <li>컨트롤러</li>
        <li>스크린</li>
        <li>제품 무게 및 크기</li>
    </ul>
    <ul>
        <li>화면 해상도</li>
        <li>재생율</li>
        <li>인터페이스</li>
    </ul>
    <ul>
        <li>네트워크</li>
        <li>저장공간</li>
        <li>배터리</li>
    </ul>
    <ul>
        <li>권장 해상도</li>
        <li>권장 비트레이트</li>
        <li>프레임 레이트</li>
    </ul>
    
    
    
    
    
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/pimaxback.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wrap\">
    <div class=\"pimaxback1\">

        눈부시게 선명한 8K 화질<br>
        기대를 뛰어넘는 200인치 <br> 와이드 화면 구성
        <div class=\"moreview\"><a href=\"\">더 알아보기</a></div>
    </div>


    <div class=\"pimaxback2\">

        <ul>
            <li><img src=\"../../../../storage/app/media/playpimax.png\" alt=\"\"></li>
            <li>
                <h1>혁신을 뛰어넘는 모바일 프로세서<br>
                </h1>
            </li>
            <li>
                <h3>차세대 개인 극장 편하게 경험하세요</h3>
            </li>
            <div class=\"align-right moreview\"><a href=\"#\">구매하기</a></div>
        </ul>
    </div>



    <div class=\"pimaxback3\">
        <div class=\"back3text\">드래곤아이 8K로 360도 익스트림 스포츠<br>
            공상 과학, 애니메이션, 엔터테인먼트 <br>영상을
            즐겨보세요.</div>
        <ul class=\"picture\">
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/youtube.png\" alt=\"8kx\"></a></li>
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/veer.png\" alt=\"8k\"></a></li>
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/alyx.png\" alt=\"5k+\"></a></li>
            <li><a href=\"#\"><img src=\"../../../../storage/app/media/beatsaber.png\" alt=\"\"></a></li>


        </ul>



    </div>
    <div class=\"pimaxback4\"><img src=\"../../../../storage/app/media/8kxpng.png\" alt=\"\">Pimax8KX 세부사항<br><a class=\"backfont1\" href=\"#\">
            <span>자세히 살펴보기</span></a></div>
</div>




<div class=\"pimaxback5\">
    <h1>스펙사항</h1>
    <ul>
        <li>모델명</li>
        <li>프로세서</li>
        <li>센서</li>
    </ul>
    <ul>
        <li>컨트롤러</li>
        <li>스크린</li>
        <li>제품 무게 및 크기</li>
    </ul>
    <ul>
        <li>화면 해상도</li>
        <li>재생율</li>
        <li>인터페이스</li>
    </ul>
    <ul>
        <li>네트워크</li>
        <li>저장공간</li>
        <li>배터리</li>
    </ul>
    <ul>
        <li>권장 해상도</li>
        <li>권장 비트레이트</li>
        <li>프레임 레이트</li>
    </ul>
    
    
    
    
    
</div>", "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/partials/site/pimaxback.htm", "");
    }
}
