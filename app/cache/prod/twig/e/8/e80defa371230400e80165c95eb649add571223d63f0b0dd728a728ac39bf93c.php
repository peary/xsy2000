<?php

/* ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig */
class __TwigTemplate_e80defa371230400e80165c95eb649add571223d63f0b0dd728a728ac39bf93c extends Twig_Template
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
        if (isset($context["isAuditor"])) { $_isAuditor_ = $context["isAuditor"]; } else { $_isAuditor_ = null; }
        $context["isAuditor"] = ((array_key_exists("isAuditor", $context)) ? (_twig_default_filter($_isAuditor_, false)) : (false));
        // line 2
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false)) {
            // line 3
            echo "  ";
            if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
            if (($_checkMemberLevelResult_ == "ok")) {
                // line 4
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\" >";
                if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroomMemberLevel_, "name", array()), "html", null, true);
                echo "，免费学</a>
  ";
            } else {
                // line 6
                echo "    ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if (($this->getAttribute($_classroom_, "buyable", array()) == 1)) {
                    // line 7
                    echo "      ";
                    if (isset($context["isAuditor"])) { $_isAuditor_ = $context["isAuditor"]; } else { $_isAuditor_ = null; }
                    if ( !$_isAuditor_) {
                        // line 8
                        echo "        <a class=\"btn btn-link\" href=\"";
                        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                        echo "\">进去逛逛</a>
      ";
                    }
                    // line 10
                    echo "      <a class=\"btn btn-primary btn-lg\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                    echo "\">加入购买</a>
    ";
                } else {
                    // line 12
                    echo "      <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"该";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "无法在线购买，若需帮助请联系客服\">无法购买</button>
    ";
                }
                // line 14
                echo "  ";
            }
        } else {
            // line 16
            echo "  ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["canFreeJoin"])) { $_canFreeJoin_ = $context["canFreeJoin"]; } else { $_canFreeJoin_ = null; }
            if (isset($context["checkMemberLevelResult"])) { $_checkMemberLevelResult_ = $context["checkMemberLevelResult"]; } else { $_checkMemberLevelResult_ = null; }
            if ((($this->getAttribute($_classroom_, "price", array()) > 0) && (( !$_canFreeJoin_ && ($this->getAttribute($_classroom_, "vipLevelId", array()) == 0)) || twig_in_filter($_checkMemberLevelResult_, array(0 => "not_member", 1 => "not_login", 2 => "member_expired", 3 => "level_low"))))) {
                // line 17
                echo "    ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if (($this->getAttribute($_classroom_, "buyable", array()) == 1)) {
                    // line 18
                    echo "      ";
                    if (isset($context["isAuditor"])) { $_isAuditor_ = $context["isAuditor"]; } else { $_isAuditor_ = null; }
                    if ( !$_isAuditor_) {
                        // line 19
                        echo "        <a class=\"btn btn-link\" href=\"";
                        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                        echo "\">进去逛逛</a>
      ";
                    }
                    // line 21
                    echo "      <a class=\"btn btn-primary btn-lg\" href=\"";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute($_classroom_, "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\">加入购买</a>
    ";
                } else {
                    // line 23
                    echo "      <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"该";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "无法在线购买，若需帮助请联系客服\">无法购买</button>
    ";
                }
                // line 25
                echo "  ";
            } elseif (twig_in_filter($_checkMemberLevelResult_, array(0 => "not_member", 1 => "member_expired"))) {
                // line 26
                echo "    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_buy");
                echo "\"  class=\"btn btn-primary btn-lg\" >";
                if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroomMemberLevel_, "name", array()), "html", null, true);
                echo "，免费学</a>  

  ";
            } elseif (($_checkMemberLevelResult_ == "level_low")) {
                // line 29
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"";
                if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_upgrade", array("level" => $this->getAttribute($_classroomMemberLevel_, "id", array()))), "html", null, true);
                echo "\" >";
                if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroomMemberLevel_, "name", array()), "html", null, true);
                echo "，免费学</a>

  ";
            } elseif (($_checkMemberLevelResult_ == "ok")) {
                // line 32
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_vip_buy", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\" >";
                if (isset($context["classroomMemberLevel"])) { $_classroomMemberLevel_ = $context["classroomMemberLevel"]; } else { $_classroomMemberLevel_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroomMemberLevel_, "name", array()), "html", null, true);
                echo "，免费学</a>

  ";
            } else {
                // line 35
                echo "    ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if (($this->getAttribute($_classroom_, "buyable", array()) == 1)) {
                    // line 36
                    echo "      <a  class=\"btn btn-primary btn-lg\"  href=\"";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute($_classroom_, "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
        ";
                    // line 37
                    if (isset($context["canFreeJoin"])) { $_canFreeJoin_ = $context["canFreeJoin"]; } else { $_canFreeJoin_ = null; }
                    if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    if ((($_canFreeJoin_ && $this->getAttribute($_app_, "user", array())) && ($this->getAttribute($_classroom_, "price", array()) > 0))) {
                        // line 38
                        echo "        data-toggle=\"tooltip\"
        data-placement=\"top\"
        title=\"您之前已购买了本";
                        // line 40
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                        echo "的所有收费课程，可免费学习！\"
        ";
                    }
                    // line 42
                    echo "      >免费加入</a>
    ";
                } else {
                    // line 44
                    echo "    <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-default disabled btn-lg\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"该";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "无法在线购买，若需帮助请联系客服\">无法购买</button>
    ";
                }
                // line 46
                echo "  ";
            }
        }
        // line 48
        echo "



";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 48,  173 => 46,  167 => 44,  163 => 42,  158 => 40,  154 => 38,  149 => 37,  143 => 36,  139 => 35,  128 => 32,  117 => 29,  107 => 26,  104 => 25,  98 => 23,  91 => 21,  84 => 19,  80 => 18,  76 => 17,  70 => 16,  66 => 14,  60 => 12,  53 => 10,  46 => 8,  42 => 7,  38 => 6,  28 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
