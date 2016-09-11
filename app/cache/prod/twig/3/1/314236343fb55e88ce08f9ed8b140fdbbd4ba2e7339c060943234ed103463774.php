<?php

/* ClassroomBundle:ClassroomManage:tr.html.twig */
class __TwigTemplate_314236343fb55e88ce08f9ed8b140fdbbd4ba2e7339c060943234ed103463774 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:ClassroomManage:tr.html.twig", 1);
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
        echo "    <div class=\"text-muted text-sm\">加入时间：";
        if (isset($context["student"])) { $_student_ = $context["student"]; } else { $_student_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_student_, "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</div>
  </td>
  <td style=\"vertical-align: middle;\">
    ";
        // line 12
        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
        if (($_role_ == "student")) {
            // line 13
            echo "      <div class=\"progress mvm\" title=\"已学";
            if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "number", array()), "html", null, true);
            echo "课程\">
        <div class=\"progress-bar\" style=\"width: ";
            // line 14
            if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent", array()), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
            if (isset($context["progress"])) { $_progress_ = $context["progress"]; } else { $_progress_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_progress_, "percent", array()), "html", null, true);
            echo "\">
        </div>
      </div>
    ";
        }
        // line 18
        echo "  </td>
  <td style=\"vertical-align: middle;\">
    <div class=\"btn-group\">
      ";
        // line 21
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()) != $this->getAttribute($_user_, "id", array()))) {
            // line 22
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">发私信</button>
      ";
        }
        // line 24
        echo "      ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user", array()), "isAdmin", array(), "method")) {
            // line 25
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_show", array("courseId" => $this->getAttribute($_classroom_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">查看资料</button>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo")) {
            // line 27
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_defined_show", array("courseId" => $this->getAttribute($_classroom_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
            echo "\">查看资料</button>
      ";
        }
        // line 29
        echo "      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">管理
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 33
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_remark", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\">备注</a></li>
        <li><a class=\"student-remove\" href=\"javascript:;\" data-url=\"";
        // line 34
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_remove", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "userId" => $this->getAttribute($_user_, "id", array()))), "html", null, true);
        echo "\" data-user=\"";
        if (isset($context["default"])) { $_default_ = $context["default"]; } else { $_default_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_default_, "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_default_, "user_name", array()), "学员")) : ("学员")), "html", null, true);
        echo "\">移除</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  125 => 33,  119 => 29,  111 => 27,  103 => 25,  99 => 24,  92 => 22,  88 => 21,  83 => 18,  72 => 14,  66 => 13,  63 => 12,  55 => 9,  45 => 7,  42 => 6,  34 => 5,  28 => 4,  21 => 2,  19 => 1,);
    }
}
