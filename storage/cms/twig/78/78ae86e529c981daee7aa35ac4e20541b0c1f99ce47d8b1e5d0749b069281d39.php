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

/* C:\Bitnami\wampstack-7.4.12-0\apache2\htdocs/themes/demo/pages/home.htm */
class __TwigTemplate_c7221a5046d6da4fbabce2d01344189a838976752e0e0753922eaa909f8f43bc extends \Twig\Template
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
        $tags = array("content" => 6);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
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
        echo "<div class=\"video\">
 <video class=\"mainVedio\" src=\"../../../storage/app/media/green.mp4\" width=\"100%\" autoplay muted loop></video>
 </div>
<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 6
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 7
        echo "
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Product <small>VR체험에 최적화된 H/W 와 S/W 를 소개합니다</small></h2>
    </div>
    <ul>
        <li><a href=\"https://www.allip.kr/index.php/2020-sub-page-dragon\">DRAGON EYE<span>PC, 스마트폰 없이 8K 동영상을<br>
                    200인치 TV급으로 재생</span></a></li>
        <li><a href=\"https://www.allip.kr/index.php/pimaxvr\">PIMAX<span>초 고해상도, 넓은 시야각의<br>
                    엔터프라이즈급 PCVR 헤드셋</span></a></li>
        <li><a href=\"https://www.allip.kr/index.php/leapmotion2\">LEAP-MOTION<span>비대면 언택트 시대에<br>가장
                    적합한 에어 터치 솔루션</span></a></li>
        <li><a href=\"http://www.ipmall.co.kr/goods/goods_list.php?cateCd=001013005002\">ALLIP VR<span>무선 블루투스 헤드셋 탑재한<br>
                    프리미엄 모바일 VR 헤드셋</span></a></li>
        <li><a href=\"https://www.allip.kr/index.php/nolovr\">NOLO<span>움직이지 못하는 VR 헤드셋에<br>
                    6DOF, 스팀VR 기능을 제공</span></a></li>
        <li><a href=\"http://www.ipmall.co.kr/\">VR 안전교육<span>교통, 소방, 건설 기초 안전교육을<br>
                    웹과 영상으로 경험</span></a></li>
        <li><a href=\"https://booking.naver.com/booking/6/bizes/159038\">ALLIP 에버샵<span>다양한 VR 기기 게임 및 콘텐츠를<br>
                    오프라인 매장에서 무료체험
                </span></a></li>

        <li><a href=\"http://ipmall.co.kr/goods/goods_list.php?cateCd=015\">엔터프라이즈 서비스<span>홀로렌즈2, 구글 글래스, 삼성PC,<br>
                    SK텔레콤 등 산업 전반에 따른<br>
                    서비스와 VR/AR 장비 렌탈 제공</span></a></li>


    </ul>
    <!-- Layouts -->
    <h3>목표</h3>
    <hr>
    <p class=\"lead\">
        <i class=\"goal\">&nbsp; Mission</i>
    </p>
    <p>
        우리는 사람과 자연을 위하고,
        4차산업 전문유통을 통하여
        글로벌 공동체에 공헌하는 것을
        목표로 삼고 있습니다.
    </p>
    <p>Store</p>

    <hr />

    <!-- Pages -->
    <h3>가치</h3>
    <p class=\"lead\">
        <i class=\"vision\">&nbsp; Vision</i>
        <hr />
    </p>
    <p>

        공동체에 기여함을 가치로 삼고 있습니다.<br>

        STEMP(Science Technology Engeneering
        Mathmathics Philosophy) 중심으로 <br>
        최고의 제품과 서비스를 창출
        하여 인류의 무한가치를 발굴해 나갑니다.


    </p>

    <p>비전과 목표를 달성하기 위해 진정한 자유와 기회의 평등을 모든
        사람에게 동등하게 접할 수 있는 기회를 제공합니다.</p>

    <hr />

    <!-- Partials -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"video\">
 <video class=\"mainVedio\" src=\"../../../storage/app/media/green.mp4\" width=\"100%\" autoplay muted loop></video>
 </div>
<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}

    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Product <small>VR체험에 최적화된 H/W 와 S/W 를 소개합니다</small></h2>
    </div>
    <ul>
        <li><a href=\"https://www.allip.kr/index.php/2020-sub-page-dragon\">DRAGON EYE<span>PC, 스마트폰 없이 8K 동영상을<br>
                    200인치 TV급으로 재생</span></a></li>
        <li><a href=\"https://www.allip.kr/index.php/pimaxvr\">PIMAX<span>초 고해상도, 넓은 시야각의<br>
                    엔터프라이즈급 PCVR 헤드셋</span></a></li>
        <li><a href=\"https://www.allip.kr/index.php/leapmotion2\">LEAP-MOTION<span>비대면 언택트 시대에<br>가장
                    적합한 에어 터치 솔루션</span></a></li>
        <li><a href=\"http://www.ipmall.co.kr/goods/goods_list.php?cateCd=001013005002\">ALLIP VR<span>무선 블루투스 헤드셋 탑재한<br>
                    프리미엄 모바일 VR 헤드셋</span></a></li>
        <li><a href=\"https://www.allip.kr/index.php/nolovr\">NOLO<span>움직이지 못하는 VR 헤드셋에<br>
                    6DOF, 스팀VR 기능을 제공</span></a></li>
        <li><a href=\"http://www.ipmall.co.kr/\">VR 안전교육<span>교통, 소방, 건설 기초 안전교육을<br>
                    웹과 영상으로 경험</span></a></li>
        <li><a href=\"https://booking.naver.com/booking/6/bizes/159038\">ALLIP 에버샵<span>다양한 VR 기기 게임 및 콘텐츠를<br>
                    오프라인 매장에서 무료체험
                </span></a></li>

        <li><a href=\"http://ipmall.co.kr/goods/goods_list.php?cateCd=015\">엔터프라이즈 서비스<span>홀로렌즈2, 구글 글래스, 삼성PC,<br>
                    SK텔레콤 등 산업 전반에 따른<br>
                    서비스와 VR/AR 장비 렌탈 제공</span></a></li>


    </ul>
    <!-- Layouts -->
    <h3>목표</h3>
    <hr>
    <p class=\"lead\">
        <i class=\"goal\">&nbsp; Mission</i>
    </p>
    <p>
        우리는 사람과 자연을 위하고,
        4차산업 전문유통을 통하여
        글로벌 공동체에 공헌하는 것을
        목표로 삼고 있습니다.
    </p>
    <p>Store</p>

    <hr />

    <!-- Pages -->
    <h3>가치</h3>
    <p class=\"lead\">
        <i class=\"vision\">&nbsp; Vision</i>
        <hr />
    </p>
    <p>

        공동체에 기여함을 가치로 삼고 있습니다.<br>

        STEMP(Science Technology Engeneering
        Mathmathics Philosophy) 중심으로 <br>
        최고의 제품과 서비스를 창출
        하여 인류의 무한가치를 발굴해 나갑니다.


    </p>

    <p>비전과 목표를 달성하기 위해 진정한 자유와 기회의 평등을 모든
        사람에게 동등하게 접할 수 있는 기회를 제공합니다.</p>

    <hr />

    <!-- Partials -->
</div>", "C:\\Bitnami\\wampstack-7.4.12-0\\apache2\\htdocs/themes/demo/pages/home.htm", "");
    }
}
