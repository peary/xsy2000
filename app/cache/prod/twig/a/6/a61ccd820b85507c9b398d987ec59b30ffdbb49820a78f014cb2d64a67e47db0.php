<?php

/* TopxiaWebBundle:CourseStudentManage:index.html.twig */
class __TwigTemplate_a61ccd820b85507c9b398d987ec59b30ffdbb49820a78f014cb2d64a67e47db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseStudentManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "students";
        // line 6
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    ";
        // line 11
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
    ";
        // line 12
        if (isset($context["role"])) { $_role_ = $context["role"]; } else { $_role_ = null; }
        if (($_role_ == "student")) {
            // line 13
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_export_student", false))) {
                // line 14
                echo "      <a class=\"btn btn-info btn-sm pull-right mhs\" href=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_export_csv", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
                } else {
                    echo "学员";
                }
                echo "</a>
    ";
            }
            // line 16
            echo "    ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (isset($context["isTeacherAuthManageStudent"])) { $_isTeacherAuthManageStudent_ = $context["isTeacherAuthManageStudent"]; } else { $_isTeacherAuthManageStudent_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "isAdmin", array(), "method") || ($_isTeacherAuthManageStudent_ == 1))) {
                // line 17
                echo "      ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (($this->getAttribute($_course_, "status", array()) == "published")) {
                    // line 18
                    echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("importer_index", array("type" => "course-member", "courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量导入"), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 20
                    echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\" title=\"课程未发布,不可导入学员\"><i class=\"glyphicon glyphicon-import\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("批量导入"), "html", null, true);
                    echo "</a>
      ";
                }
                // line 22
                echo "      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
                }
                echo "</button>
    ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "  </div>

  <div class=\"panel-body\">
    <ul class=\"nav nav-tabs mbl\">
      <li class=\"";
        // line 29
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter($_submenu_)) : ("")) == "student")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 30
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">正式学员
        </a>
      </li>

      <li class=\"";
        // line 34
        if (isset($context["submenu"])) { $_submenu_ = $context["submenu"]; } else { $_submenu_ = null; }
        if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter($_submenu_)) : ("")) == "record")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 35
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_record", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">退出记录
        </a>
      </li>
    </ul>
      
  ";
        // line 40
        $this->displayBlock('maincontent', $context, $blocks);
        // line 41
        echo "  </div>
</div>

";
    }

    // line 40
    public function block_maincontent($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 40,  164 => 41,  162 => 40,  153 => 35,  146 => 34,  138 => 30,  131 => 29,  125 => 25,  122 => 24,  108 => 22,  102 => 20,  93 => 18,  89 => 17,  84 => 16,  71 => 14,  67 => 13,  64 => 12,  55 => 11,  51 => 9,  48 => 8,  35 => 3,  31 => 1,  29 => 6,  27 => 5,  11 => 1,);
    }
}
