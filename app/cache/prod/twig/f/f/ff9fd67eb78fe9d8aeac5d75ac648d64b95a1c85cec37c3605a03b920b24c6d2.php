<?php

/* ClassroomBundle:Classroom:classroom-join-header.html.twig */
class __TwigTemplate_ff9fd67eb78fe9d8aeac5d75ac648d64b95a1c85cec37c3605a03b920b24c6d2 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 1);
        // line 2
        echo "<section class=\"class-header after ";
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (twig_in_filter("auditor", $this->getAttribute($_member_, "role", array()))) {
            echo " auditor";
        }
        echo "\">
  <div class=\"container\">
    ";
        // line 4
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (((($this->getAttribute($_member_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_member_, "locked", array()), "0")) : ("0")) == "1")) {
            // line 5
            echo "      <div class=\"alert alert-warning\">
        您的退款申请已提交，请等待管理员的处理。
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 7
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute($_classroom_, "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">取消退款，继续学习！</button>
      </div>
    ";
        }
        // line 10
        echo "    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
      ";
        // line 12
        if (isset($context["breadcrumbs"])) { $_breadcrumbs_ = $context["breadcrumbs"]; } else { $_breadcrumbs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_breadcrumbs_);
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
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
        // line 22
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 23
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
        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 28
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 29
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_qrcode", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 40
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $_web_macro_->getstar($this->getAttribute($_classroom_, "rating", array()));
        echo "
              <span>(";
        // line 41
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "ratingNum", array()), "html", null, true);
        echo "评价)</span>
            </div>
            ";
        // line 43
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($this->getAttribute($_member_, "role", array()) == "auditor")) {
            // line 44
            echo "              <div class=\"price\">
                价格： <span>";
            // line 45
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 46
                echo "                      ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if (($this->getAttribute($_classroom_, "price", array()) > 0)) {
                    // line 47
                    echo "                     ";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                      ";
                } else {
                    // line 49
                    echo "                      免费
                      ";
                }
                // line 51
                echo "                  ";
            } else {
                // line 52
                echo "                    ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if (($this->getAttribute($_classroom_, "price", array()) > 0)) {
                    // line 53
                    echo "                      ";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "price", array()), "html", null, true);
                    echo "元
                    ";
                } else {
                    // line 55
                    echo "                      免费
                    ";
                }
                // line 57
                echo "                  ";
            }
            echo "</span>
              </div>
            ";
        }
        // line 60
        echo "          </div>
          <div class=\"class-serve hidden-sm hidden-xs\">
            <div class=\"serve-frame\">
              承诺服务
            </div>
            ";
        // line 65
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 65)->display(array_merge($context, array("services" => $this->getAttribute($_classroom_, "service", array()))));
        // line 66
        echo "          </div>
        </div>
        <div class=\"class-operation\">
          <ul class='class-data clearfix ";
        // line 69
        if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($_classroomMemberLevel_ && twig_in_filter("auditor", $this->getAttribute($_member_, "role", array())))) {
            echo "hidden-sm";
        } else {
            echo "two-col";
        }
        echo "'>
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>学员(";
        // line 72
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, ($this->getAttribute($_classroom_, "studentNum", array()) + $this->getAttribute($_classroom_, "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>分享</p>
                </a>
                ";
        // line 80
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 80)->display(array_merge($context, array("type" => "classroom")));
        echo " 
              </span>
            </li>
            ";
        // line 83
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (((twig_in_filter("auditor", $this->getAttribute($_member_, "role", array())) && $_classroomMemberLevel_) && $this->getAttribute($_classroom_, "showable", array()))) {
            // line 84
            echo "              <li class=\"hidden-xs color-warning icon-vip\" title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\" data-content=\"";
            if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
            if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 84)->display(array_merge($context, array("courseVip" => $_classroomMemberLevel_, "userVipStatus" => $_checkMemberLevelResult_)));
            echo "\" data-original-title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 86
            if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
            if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 86)->display(array_merge($context, array("userVipStatus" => $_checkMemberLevelResult_, "level" => $_classroomMemberLevel_)));
            // line 87
            echo "              </li>
            ";
        }
        // line 89
        echo "          </ul>
          ";
        // line 90
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (twig_in_filter("auditor", $this->getAttribute($_member_, "role", array()))) {
            // line 91
            echo "            <div class=\"class-auditor hidden-sm\">
              您现在是<span class=\"color-warning\">旁听生</span>，不能完整学习<i class=\"es-icon es-icon-help color-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"旁听生只能参与话题讨论，正式学员可以完整地学习所有内容，享受所有教学服务\"></i><br>
              
              ";
            // line 94
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "showable", array()) && ($this->getAttribute($_classroom_, "status", array()) != "closed"))) {
                // line 95
                echo "                <div class=\"btn-buy\">
                  ";
                // line 96
                $this->loadTemplate("ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 96)->display(array_merge($context, array("isAuditor" => true)));
                // line 97
                echo "                </div>
              ";
            }
            // line 99
            echo "              
            </div>
          ";
        }
        // line 102
        echo "        </div>
      ";
        // line 103
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute($_classroom_, "id", array()), "Manage")) {
            // line 104
            echo "        <a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute($_classroom_, "id", array()), "Handle")) {
            // line 108
            echo "        <a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute($_classroom_, "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 112
        echo "      ";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["isclassroomteacher"])) { $_isclassroomteacher_ = $context["isclassroomteacher"]; } else { $_isclassroomteacher_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if ((($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute($_classroom_, "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter($_isclassroomteacher_, false)) : (false))) &&  !$this->getAttribute($_member_, "locked", array()))) {
            // line 113
            echo "        ";
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (!twig_in_filter("headTeacher", $this->getAttribute($_member_, "role", array()))) {
                echo "  
          <a type=\"button\" 
            ";
                // line 115
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ((twig_in_filter("student", $this->getAttribute($_member_, "role", array())) && ($this->getAttribute($_member_, "orderId", array()) > 0))) {
                    // line 116
                    echo "            class=\"btn btn-default setting hidden-xs hidden-sm\"
            href=\"#modal\" 
            data-toggle=\"modal\" 
            data-url=\"";
                    // line 119
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute($_classroom_, "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
            ";
                } else {
                    // line 121
                    echo "            class=\"btn btn-default setting hidden-xs hidden-sm\"
            href=\"";
                    // line 122
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_exit", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                    echo "\" id =\"quit\" 
            ";
                }
                // line 124
                echo "            >
            <i class=\"es-icon es-icon-exit\"></i>
          </a>
        ";
            }
            // line 128
            echo "      ";
        }
        // line 129
        echo "      </div>
    </div>
  </div>
</section>

";
        // line 134
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 135
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-join-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 135,  367 => 134,  360 => 129,  357 => 128,  351 => 124,  345 => 122,  342 => 121,  336 => 119,  331 => 116,  328 => 115,  321 => 113,  315 => 112,  304 => 108,  293 => 104,  290 => 103,  287 => 102,  282 => 99,  278 => 97,  276 => 96,  273 => 95,  270 => 94,  265 => 91,  262 => 90,  259 => 89,  255 => 87,  251 => 86,  239 => 84,  234 => 83,  228 => 80,  216 => 72,  204 => 69,  199 => 66,  196 => 65,  189 => 60,  182 => 57,  178 => 55,  171 => 53,  167 => 52,  164 => 51,  160 => 49,  151 => 47,  147 => 46,  145 => 45,  142 => 44,  139 => 43,  133 => 41,  127 => 40,  118 => 34,  114 => 33,  106 => 29,  101 => 28,  86 => 23,  81 => 22,  69 => 15,  56 => 13,  51 => 12,  47 => 11,  44 => 10,  37 => 7,  33 => 5,  30 => 4,  21 => 2,  19 => 1,);
    }
}
