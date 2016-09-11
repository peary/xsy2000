<?php

/* TopxiaAdminBundle:Course:tr.html.twig */
class __TwigTemplate_319e54a014f6f74492917cdf25de92996b67b8682935b7420a88e54fa16f5b96 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 1);
        // line 2
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        $context["target"] = (("" . $_filter_) . "_index");
        // line 3
        echo "<tr id=\"course-tr-";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
        echo "\">
  ";
        // line 4
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 4)->display($context);
        // line 5
        echo "  <td>";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 7
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
        echo "</strong></a>
    
    ";
        // line 9
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "live") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
            // line 10
            echo "      <span class=\"label label-success live-label mls\">直播</span>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($_filter_ == "classroom")) {
            // line 14
            echo "      ";
            if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            $context["classroom"] = (($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array"), null)) : (null));
            // line 15
            echo "      ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if ( !$_classroom_) {
                // line 16
                echo "        <span class=\"label label-danger live-label mls\">已移除</span>
      ";
            }
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 20
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_category_, "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_category_, "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 21
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ($this->getAttribute($_course_, "recommended", array())) {
            // line 22
            echo "      <span class=\"label label-default\">荐:";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 24
        echo "
  </td>
  <td>";
        // line 26
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "originPrice", array()), "html", null, true);
        echo "</td>
  ";
        // line 27
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 27)->display(array_merge($context, array("orgCode" => $this->getAttribute($_course_, "orgCode", array()))));
        // line 28
        echo "  ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if ((($_filter_ != "open") && ($_filter_ != "liveOpen"))) {
            // line 29
            echo "    <td>
      ";
            // line 30
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "serializeMode", array()) == "none")) {
                // line 31
                echo "      <span class=\"text-info\">非连载课程</span>
      ";
            } elseif (($this->getAttribute($_course_, "serializeMode", array()) == "serialize")) {
                // line 33
                echo "      <span class=\"text-info\">连载中</span>
      ";
            } elseif (($this->getAttribute($_course_, "serializeMode", array()) == "finished")) {
                // line 35
                echo "      <span class=\"text-info\">已完结</span>
      ";
            }
            // line 37
            echo "    </td>
    ";
            // line 38
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($_filter_ == "classroom")) {
                // line 39
                echo "    <td>
      ";
                // line 40
                if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["classroom"] = (($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array"), null)) : (null));
                // line 41
                echo "      ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if ($_classroom_) {
                    // line 42
                    echo "        <a href=\"";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "classroomId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "classroomTitle", array()), "html", null, true);
                    echo "</a>
      ";
                }
                // line 44
                echo "    </td>
    ";
            } else {
                // line 46
                echo "      <td>";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum", array()), "html", null, true);
                echo "</td>
    ";
            }
            // line 48
            echo "    ";
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($_filter_ == "vip")) {
                // line 49
                echo "        ";
                if (isset($context["vips"])) { $_vips_ = $context["vips"]; } else { $_vips_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["vip"] = (($this->getAttribute($_vips_, $this->getAttribute($_course_, "vipLevelId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_vips_, $this->getAttribute($_course_, "vipLevelId", array()), array(), "array"), null)) : (null));
                // line 50
                echo "        <td>";
                if (isset($context["vip"])) { $_vip_ = $context["vip"]; } else { $_vip_ = null; }
                if ($_vip_) {
                    if (isset($context["vip"])) { $_vip_ = $context["vip"]; } else { $_vip_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_vip_, "name", array()), "html", null, true);
                } else {
                    echo "该会员等级已删除";
                }
                echo "</td>
   
    ";
            }
            // line 53
            echo "  ";
        }
        // line 54
        echo "
  <td>";
        // line 55
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute($_course_, "status", array()));
        echo "</td>
  <td>
    ";
        // line 57
        if (isset($context["admin_macro"])) { $_admin_macro_ = $context["admin_macro"]; } else { $_admin_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_admin_macro_->getuser_link($_user_);
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 59
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_course_, "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 63
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">管理</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        ";
        // line 69
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if ((($_filter_ == "normal") || ($_filter_ == "open"))) {
            // line 70
            echo "          ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ( !$this->getAttribute($_course_, "recommended", array())) {
                // line 71
                echo "          <li><a class=\"recommend-course\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_recommend", array("id" => $this->getAttribute($_course_, "id", array()), "ref" => "courseList", "filter" => $_filter_)), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐课程</a></li>
          ";
            }
            // line 73
            echo "
          ";
            // line 74
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "recommended", array())) {
                // line 75
                echo "            <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
                if (isset($context["target"])) { $_target_ = $context["target"]; } else { $_target_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_cancel_recommend", array("id" => $this->getAttribute($_course_, "id", array()), "filter" => $_filter_, "target" => $_target_)), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
          ";
            }
            // line 77
            echo "
          <li ><a class=\"copy-course\" id=\"copy-course\" href=\"javascript:\"
          ";
            // line 79
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ((($this->getAttribute($_course_, "type", array()) == "live") || ($this->getAttribute($_course_, "type", array()) == "liveOpen"))) {
                // line 80
                echo "          title=\"直播课程不支持复制\"
          style=\"color:#909090\"
          ";
            }
            // line 83
            echo "          data-toggle=\"modal\"
          data-target=\"#modal\"
          data-url=\"";
            // line 85
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_copy", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"
          data-type=\"";
            // line 86
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "type", array()), "html", null, true);
            echo "\"
          ><span class=\"glyphicon glyphicon-plus-sign\"></span> 复制课程</a></li>
        ";
        }
        // line 89
        echo "
        <li><a href=\"";
        // line 90
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为未购买用户</a></li>
        <li><a href=\"";
        // line 91
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为已购买用户</a></li>

        

        ";
        // line 95
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status", array()) == "published")) {
            // line 96
            echo "          <li class=\"divider\"></li>
          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"";
            // line 97
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_close", array("id" => $this->getAttribute($_course_, "id", array()), "filter" => $_filter_)), "html", null, true);
            echo "\" data-user=\"";
            if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> 关闭课程</a></li>
          ";
            // line 98
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ((($this->getAttribute($_course_, "type", array()) != "open") && ($this->getAttribute($_course_, "type", array()) != "liveOpen"))) {
                // line 99
                echo "            <li><a href=\"javascript:\" title=\"发送发布课程(";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
                echo ")通知短信\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sms_prepare", array("targetType" => "course", "id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\"><span class=\"glyphicon glyphicon-envelope\"></span> 发送发布通知短信</a></li>
          ";
            }
            // line 101
            echo "        ";
        }
        // line 102
        echo "
        ";
        // line 103
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "status", array()) != "published")) {
            // line 104
            echo "          <li class=\"divider\"></li>
          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"";
            // line 105
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_publish", array("id" => $this->getAttribute($_course_, "id", array()), "filter" => $_filter_)), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 发布课程</a></li>
        ";
        }
        // line 107
        echo "
        ";
        // line 108
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((($this->getAttribute($_course_, "status", array()) != "published") && $this->getAttribute($this->getAttribute($_app_, "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 109
            echo "          <li class=\"divider\"></li>
          <li><a class=\"delete-course\" href=\"javascript:;\" data-url=\"";
            // line 110
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "", "filter" => $_filter_)), "html", null, true);
            echo "\"  data-chapter=\"";
            if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "chapter_name", array()), "章")) : ("章")), "html", null, true);
            echo "\" data-part=\"";
            if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "part_name", array()), "节")) : ("节")), "html", null, true);
            echo "\" data-user=\"";
            if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除课程</a></li>
        ";
        }
        // line 112
        echo "      </ul>
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 112,  360 => 110,  357 => 109,  353 => 108,  350 => 107,  343 => 105,  340 => 104,  337 => 103,  334 => 102,  331 => 101,  321 => 99,  318 => 98,  309 => 97,  306 => 96,  303 => 95,  295 => 91,  290 => 90,  287 => 89,  280 => 86,  275 => 85,  271 => 83,  266 => 80,  263 => 79,  259 => 77,  250 => 75,  247 => 74,  244 => 73,  236 => 71,  232 => 70,  229 => 69,  219 => 63,  211 => 59,  204 => 57,  198 => 55,  195 => 54,  192 => 53,  179 => 50,  174 => 49,  170 => 48,  163 => 46,  159 => 44,  149 => 42,  145 => 41,  141 => 40,  138 => 39,  135 => 38,  132 => 37,  128 => 35,  124 => 33,  120 => 31,  117 => 30,  114 => 29,  110 => 28,  107 => 27,  102 => 26,  98 => 24,  88 => 22,  85 => 21,  80 => 20,  77 => 19,  74 => 18,  70 => 16,  66 => 15,  61 => 14,  58 => 13,  55 => 12,  51 => 10,  48 => 9,  39 => 7,  32 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
