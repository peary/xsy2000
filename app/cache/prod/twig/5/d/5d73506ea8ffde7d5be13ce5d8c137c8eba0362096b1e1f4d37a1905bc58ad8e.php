<?php

/* ClassroomBundle:ClassroomManage:menu.html.twig */
class __TwigTemplate_5d73506ea8ffde7d5be13ce5d8c137c8eba0362096b1e1f4d37a1905bc58ad8e extends Twig_Template
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
        if (isset($context["canManage"])) { $_canManage_ = $context["canManage"]; } else { $_canManage_ = null; }
        if ($_canManage_) {
            // line 2
            echo "  <ul class=\"list-group\">
    <li class=\"list-group-item ";
            // line 3
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "main")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 4
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">管理首页</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">";
            // line 9
            echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级") . "设置"), "html", null, true);
            echo "</li>
    <li class=\"list-group-item ";
            // line 10
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "base")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 11
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">基本信息 ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (twig_test_empty($this->getAttribute($_classroom_, "about", array()))) {
                echo "<span class=\"label label-info\">未完善</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 13
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "price")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 14
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">价格设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 16
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "picture")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">封面图片 ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (twig_test_empty($this->getAttribute($_classroom_, "smallPicture", array()))) {
                echo "<span class=\"label label-info\">未设置</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 19
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "service")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 20
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_service", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">服务设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 22
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "headTeacher")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 23
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_headteacher", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">班主任设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 25
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "teachers")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 26
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_teachers", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">教师设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 28
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "assistant")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 29
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_assistants", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">助教设置</a>
    </li>
    ";
            // line 31
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
                // line 32
                echo "      <li class=\"list-group-item ";
                if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
                if (($_side_nav_ == "plan")) {
                    echo "active";
                }
                echo "\">
        <a href=\"";
                // line 33
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_plan", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
                echo "\">学习计划</a>
      </li>
    ";
            }
            // line 36
            echo "  </ul>
";
        }
        // line 38
        echo "
<ul class=\"list-group\">
  <li class=\"list-group-heading\">";
        // line 40
        echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级") . "管理"), "html", null, true);
        echo "</li>
  ";
        // line 41
        if (isset($context["canManage"])) { $_canManage_ = $context["canManage"]; } else { $_canManage_ = null; }
        if ($_canManage_) {
            // line 42
            echo "    <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "courses")) {
                echo "active";
            }
            echo "\"><a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">课程管理</a></li>
    <li class=\"list-group-item ";
            // line 43
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "students")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 44
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">学员管理</a>
    </li>
  ";
        }
        // line 47
        echo "
  ";
        // line 48
        if (isset($context["canHandle"])) { $_canHandle_ = $context["canHandle"]; } else { $_canHandle_ = null; }
        if ($_canHandle_) {
            // line 49
            echo "    <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "testpaper-check")) {
                echo " active ";
            }
            echo "\">
      <a href=\"";
            // line 50
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute($_classroom_, "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\">试卷批阅</a>
    </li>
   
    ";
            // line 53
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                // line 54
                echo "      <li class=\"list-group-item ";
                if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
                if (($_side_nav_ == "homework-check")) {
                    echo " active ";
                }
                echo "\">
        <a href=\"";
                // line 55
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_homework", array("id" => $this->getAttribute($_classroom_, "id", array()), "status" => "reviewing")), "html", null, true);
                echo "\">作业批改</a>
      </li>
    ";
            }
            // line 58
            echo "  ";
        }
        // line 59
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 59,  241 => 58,  234 => 55,  226 => 54,  224 => 53,  217 => 50,  209 => 49,  206 => 48,  203 => 47,  196 => 44,  189 => 43,  178 => 42,  175 => 41,  171 => 40,  167 => 38,  163 => 36,  156 => 33,  148 => 32,  146 => 31,  140 => 29,  133 => 28,  127 => 26,  120 => 25,  114 => 23,  107 => 22,  101 => 20,  94 => 19,  83 => 17,  76 => 16,  70 => 14,  63 => 13,  52 => 11,  45 => 10,  41 => 9,  32 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
