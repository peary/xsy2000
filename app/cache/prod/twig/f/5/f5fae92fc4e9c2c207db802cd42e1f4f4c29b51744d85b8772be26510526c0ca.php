<?php

/* ClassroomBundle:Classroom:classroom-header.html.twig */
class __TwigTemplate_f5fae92fc4e9c2c207db802cd42e1f4f4c29b51744d85b8772be26510526c0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 1);
        // line 2
        echo "
<section class=\"class-header before\">
  <div class=\"container\">
    ";
        // line 5
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (((($this->getAttribute($_member_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "locked", array()), "0")) : ("0")) == "1")) {
            // line 6
            echo "      <div class=\"alert alert-warning\">
        您的退款申请已提交，请等待管理员的处理。
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 8
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute($_classroom_, "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">取消退款，继续学习！</button>
      </div>
    ";
        }
        // line 11
        echo "
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
      ";
        // line 14
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $this->getAttribute($_breadcrumb_, "code", array()))), "html", null, true);
            echo "\">";
            if (isset($context["breadcrumb"])) { $_breadcrumb_ = $context["breadcrumb"]; } else { $_breadcrumb_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_breadcrumb_, "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      <li class=\"active\">";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "</li>
    </ol>
    
    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 24
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 25
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "\" href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
          </a>
          ";
        // line 27
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "status", array()) == "closed")) {
            // line 28
            echo "            <span class=\"label label-danger\">已关闭</span>
          ";
        }
        // line 30
        echo "        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 33
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 34
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_qrcode", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 45
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $_web_macro_->getstar($this->getAttribute($_classroom_, "rating", array()));
        echo "
              <span>(";
        // line 46
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "ratingNum", array()), "html", null, true);
        echo "评价)</span>
            </div>
            <div class=\"price\">
              价格： 
              <span>
                ";
        // line 51
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 52
            echo "                    ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "price", array()) > 0)) {
                // line 53
                echo "                   ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "
                    ";
            } else {
                // line 55
                echo "                    免费
                    ";
            }
            // line 57
            echo "                ";
        } else {
            // line 58
            echo "                  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "price", array()) > 0)) {
                // line 59
                echo "                    ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "price", array()), "html", null, true);
                echo "元
                  ";
            } else {
                // line 61
                echo "                    免费
                  ";
            }
            // line 63
            echo "                ";
        }
        // line 64
        echo "              </span>
            </div>
          </div>
          <ul class=\"class-data hidden-sm clearfix ";
        // line 67
        if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
        if ($_classroomMemberLevel_) {
            echo "active";
        }
        echo "\">
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>学员(";
        // line 70
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "studentNum", array()) + $this->getAttribute($_classroom_, "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <p><i class=\"es-icon es-icon-book\"></i></p>
              <p>课程(";
        // line 74
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "courseNum", array()), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>分享</p>
                </a>
                ";
        // line 82
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 82)->display(array_merge($context, array("type" => "classroom")));
        // line 83
        echo "              </span>
            </li>
          ";
        // line 85
        if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($_classroomMemberLevel_ && $this->getAttribute($_classroom_, "showable", array()))) {
            // line 86
            echo "            <li class=\"hidden-xs color-warning icon-vip\" title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\" data-content=\"";
            if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
            if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 86)->display(array_merge($context, array("courseVip" => $_classroomMemberLevel_, "userVipStatus" => $_checkMemberLevelResult_)));
            echo "\" data-original-title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\" title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\">
              <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 88
            if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
            if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 88)->display(array_merge($context, array("userVipStatus" => $_checkMemberLevelResult_, "level" => $_classroomMemberLevel_)));
            // line 89
            echo "            </li>
          ";
        }
        // line 91
        echo "          </ul>

          <div class=\"bottom-metas clearfix\">
            <div class=\"class-serve hidden-sm hidden-xs\">
              <div class=\"serve-frame\">
                承诺服务
              </div>
              ";
        // line 98
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 98)->display(array_merge($context, array("services" => $this->getAttribute($_classroom_, "service", array()))));
        // line 99
        echo "            </div>

            ";
        // line 101
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (($this->getAttribute($_classroom_, "showable", array()) && ($this->getAttribute($_classroom_, "status", array()) != "closed"))) {
            // line 102
            echo "              <div class=\"btn-buy\">
                ";
            // line 103
            $this->loadTemplate("ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 103)->display($context);
            // line 104
            echo "                
              </div>
            ";
        }
        // line 107
        echo "            
          </div>
        </div>
      ";
        // line 110
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute($_classroom_, "id", array()), "Manage")) {
            // line 111
            echo "        <a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 115
        echo "
      </div>
    </div>
  </div>
</section>            

";
        // line 121
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 122
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))));
            echo "
";
        }
        // line 123
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 123,  312 => 122,  310 => 121,  302 => 115,  291 => 111,  288 => 110,  283 => 107,  278 => 104,  276 => 103,  273 => 102,  270 => 101,  266 => 99,  263 => 98,  254 => 91,  250 => 89,  246 => 88,  232 => 86,  228 => 85,  224 => 83,  222 => 82,  210 => 74,  202 => 70,  193 => 67,  188 => 64,  185 => 63,  181 => 61,  174 => 59,  170 => 58,  167 => 57,  163 => 55,  154 => 53,  150 => 52,  148 => 51,  139 => 46,  133 => 45,  124 => 39,  120 => 38,  112 => 34,  107 => 33,  102 => 30,  98 => 28,  95 => 27,  83 => 25,  78 => 24,  66 => 17,  53 => 15,  48 => 14,  44 => 13,  40 => 11,  33 => 8,  29 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
