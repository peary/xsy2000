<?php

/* TopxiaWebBundle:CourseStudentManage:tr.html.twig */
class __TwigTemplate_675ffc1b526a8d3120cd0b9da195d38cad47463b21ba4738ccb11962894f4739 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseStudentManage:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"student-";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "id", array()), "html", null, true);
        echo "-tr\">
  <td class=\"media\" style=\"vertical-align: middle;\">
    ";
        // line 4
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo $_web_macro_->getuser_avatar($_user_, "pull-left", "avatar-sm");
        echo "
    <a target=\"_blank\" href=\"";
        // line 5
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_user_, "nickname", array()), "html", null, true);
        echo "</a>
    ";
        // line 6
        if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
        if ($this->getAttribute($_student_, "remark", array())) {
            // line 7
            echo "      <span class=\"text-muted text-sm\" title=\"";
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_student_, "remark", array()), "html", null, true);
            echo "\">(";
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($_student_, "remark", array()), 16);
            echo ")</span>
    ";
        }
        // line 9
        echo "    <div class=\"text-muted text-sm\">";
        echo "加入时间：";
        if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_student_, "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</div>
    ";
        // line 10
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
        if ((($this->getAttribute($_course_, "expiryDay", array()) > 0) && ($this->getAttribute($_student_, "deadline", array()) > 0))) {
            // line 11
            echo "      <div class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期至："), "html", null, true);
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_student_, "deadline", array()), "Y-n-d H:i"), "html", null, true);
            echo " (";
            if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute($_student_, "deadline", array())), "html", null, true);
            echo ")</div>
    ";
        }
        // line 13
        echo "  </td>

  <td style=\"vertical-align: middle;\">
    <div class=\"progress mvm\" title=\"已学";
        // line 16
        if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "number", array()), "html", null, true);
        echo "课时\">
      <div class=\"progress-bar\" style=\"width: ";
        // line 17
        if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent", array()), "html", null, true);
        echo "\">
      </div>
    </div>
  </td>

  <td style=\"vertical-align: middle;\">
    <div class=\"btn-group\">
      ";
        // line 24
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()) != $this->getAttribute($_user_, "id", array()))) {
            // line 25
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发私信"), "html", null, true);
            echo "</button>
      ";
        }
        // line 27
        echo "      ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user", array()), "isAdmin", array(), "method")) {
            // line 28
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_show", array("courseId" => $this->getAttribute($_course_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看资料"), "html", null, true);
            echo "</button>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo")) {
            // line 30
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_defined_show", array("courseId" => $this->getAttribute($_course_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看资料"), "html", null, true);
            echo "</button>
      ";
        }
        // line 32
        echo "      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 36
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_remark", array("courseId" => $this->getAttribute($_course_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("备注"), "html", null, true);
        echo "</a></li>
        ";
        // line 37
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()) != $this->getAttribute($_user_, "id", array()))) {
            // line 38
            echo "          <li>
            <a class=\"follow-student-btn\" href=\"javascript:;\" data-url=\"";
            // line 39
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowing"])) { $_isFollowing_ = $context["isFollowing"]; } else { $_isFollowing_ = null; }
            if ($_isFollowing_) {
                echo " style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关注"), "html", null, true);
            echo "</a>
              <a class=\"unfollow-student-btn\" href=\"javascript:;\" data-url=\"";
            // line 40
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\" ";
            if (isset($context["isFollowing"])) { $_isFollowing_ = $context["isFollowing"]; } else { $_isFollowing_ = null; }
            if ( !$_isFollowing_) {
                echo " style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关注"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 43
        echo "        ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["isTeacherAuthManageStudent"])) { $_isTeacherAuthManageStudent_ = $context["isTeacherAuthManageStudent"]; } else { $_isTeacherAuthManageStudent_ = null; }
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "isAdmin", array(), "method") || (($this->getAttribute($this->getAttribute($_app_, "user", array()), "isTeacher", array(), "method") && ($_isTeacherAuthManageStudent_ == 1)) && ($this->getAttribute($_course_, "expiryDay", array()) > 0)))) {
            // line 44
            echo "          <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_set_expiryday", array("courseId" => $this->getAttribute($_course_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("增加有效期"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["isTeacherAuthManageStudent"])) { $_isTeacherAuthManageStudent_ = $context["isTeacherAuthManageStudent"]; } else { $_isTeacherAuthManageStudent_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "isAdmin", array(), "method") || ($this->getAttribute($this->getAttribute($_app_, "user", array()), "isTeacher", array(), "method") && ($_isTeacherAuthManageStudent_ == 1)))) {
            // line 48
            echo "          <li><a class=\"student-remove\" href=\"javascript:;\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_remove", array("courseId" => $this->getAttribute($_course_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\" data-user=\"";
            if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "user_name", array()), $this->env->getExtension('translator')->trans("学员"))) : ($this->env->getExtension('translator')->trans("学员"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移除"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 50
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 50,  207 => 48,  203 => 47,  200 => 46,  190 => 44,  184 => 43,  170 => 40,  158 => 39,  155 => 38,  151 => 37,  143 => 36,  135 => 32,  125 => 30,  115 => 28,  111 => 27,  102 => 25,  98 => 24,  87 => 17,  82 => 16,  77 => 13,  66 => 11,  62 => 10,  55 => 9,  45 => 7,  42 => 6,  34 => 5,  28 => 4,  21 => 2,  19 => 1,);
    }
}
