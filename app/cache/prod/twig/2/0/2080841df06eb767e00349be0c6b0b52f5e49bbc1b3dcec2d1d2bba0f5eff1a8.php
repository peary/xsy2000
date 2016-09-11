<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_2080841df06eb767e00349be0c6b0b52f5e49bbc1b3dcec2d1d2bba0f5eff1a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:CourseManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<style>
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  ";
        // line 16
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:header", array("course" => $_course_, "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 20
        $this->displayBlock('side', $context, $blocks);
        // line 159
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 161
        $this->displayBlock('main', $context, $blocks);
        // line 162
        echo "  </div>
</div>
";
    }

    // line 20
    public function block_side($context, array $blocks = array())
    {
        // line 21
        echo "      ";
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter($_side_nav_, null)) : (null));
        // line 22
        echo "      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程信息"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 25
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "base")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 26
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 27
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "base")), "html", null, true);
        } else {
            // line 28
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_base", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "\">
              <span ";
        // line 30
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 33
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "detail")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 34
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 35
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "detail")), "html", null, true);
        } else {
            // line 36
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_detail", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 37
        echo "\">
              <span ";
        // line 38
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详细信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 41
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "picture")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 42
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 43
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "picture")), "html", null, true);
        } else {
            // line 44
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_picture", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 45
        echo "\">
              <span ";
        // line 46
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程图片"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 49
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "lesson")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 50
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 51
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "lesson")), "html", null, true);
        } else {
            // line 52
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "\">
              <span ";
        // line 54
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 57
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) == "live")) {
            // line 58
            echo "          <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "replay")) {
                echo "active";
            }
            echo "\" >
            <a href=\"";
            // line 59
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
                // line 60
                echo "            ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "replay")), "html", null, true);
            } else {
                // line 61
                echo "            ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_replay", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
                echo "
            ";
            }
            // line 62
            echo "\"><span ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("录播管理"), "html", null, true);
            echo "</a>
          </li>
          ";
        }
        // line 65
        echo "          <li class=\"list-group-item ";
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "files")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 66
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 67
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "files")), "html", null, true);
        } else {
            // line 68
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 69
        echo "\">
              <span ";
        // line 70
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程文件"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程设置"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 77
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "price")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 78
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 79
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "price")), "html", null, true);
        } else {
            // line 80
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 81
        echo "\">
              <span ";
        // line 82
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 85
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "teachers")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 86
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 87
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "teachers")), "html", null, true);
        } else {
            // line 88
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_teachers", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 89
        echo "\">
              <span ";
        // line 90
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 93
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "students")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 94
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 95
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题库"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 102
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "question")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 103
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 104
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "question")), "html", null, true);
        } else {
            // line 105
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 106
        echo "\">
              <span ";
        // line 107
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目管理"), "html", null, true);
        echo "
            </a>
          </li>

          ";
        // line 111
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("QuestionPlus") && $this->env->getExtension('topxia_web_twig')->getSetting("question_plus.enabled"))) {
            // line 112
            echo "            <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "question_plumber")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 113
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
                // line 114
                echo "              ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "question_plumber")), "html", null, true);
            } else {
                // line 115
                echo "              ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_question_plumber", array("courseId" => $this->getAttribute($_course_, "id", array()), "type" => "import")), "html", null, true);
                echo "
              ";
            }
            // line 116
            echo "\">
              <span ";
            // line 117
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("题目导入/导出"), "html", null, true);
            echo "
            </a>
            </li>
          ";
        }
        // line 121
        echo "
          <!-- <li class=\"list-group-item ";
        // line 122
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "question_category")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 123
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">题目类别管理</a>
          </li> -->

          <li class=\"list-group-item ";
        // line 126
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "testpaper")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 127
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            // line 128
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_course_sync", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "testpaper")), "html", null, true);
        } else {
            // line 129
            echo "            ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 130
        echo "\">
              <span ";
        // line 131
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (((($this->getAttribute($_course_, "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷管理"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 134
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "testCheck")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 135
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_check", array("id" => $this->getAttribute($_course_, "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\"><span></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷批阅"), "html", null, true);
        echo "</a>
          </li>
          ";
        // line 137
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 138
            echo "            <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "homeworkCheck")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 139
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_check_list", array("courseId" => $this->getAttribute($_course_, "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\"><span></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业批改"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 142
        echo "        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程运营"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 146
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "course_manage_data")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 147
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_data", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程学习数据"), "html", null, true);
        echo "</a>
          </li>

          ";
        // line 151
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_search_order") == 1))) {
            // line 152
            echo "          <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "course_manage_order")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 153
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_order", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"><span></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程订单查询"), "html", null, true);
            echo "</a>
          </li>
          ";
        }
        // line 156
        echo "        </ul>
      </div>
    ";
    }

    // line 161
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 161,  628 => 156,  619 => 153,  611 => 152,  608 => 151,  602 => 148,  597 => 147,  590 => 146,  586 => 145,  581 => 142,  572 => 139,  564 => 138,  562 => 137,  554 => 135,  547 => 134,  536 => 131,  533 => 130,  526 => 129,  521 => 128,  518 => 127,  511 => 126,  504 => 123,  497 => 122,  494 => 121,  482 => 117,  479 => 116,  472 => 115,  467 => 114,  464 => 113,  456 => 112,  454 => 111,  442 => 107,  439 => 106,  432 => 105,  427 => 104,  424 => 103,  417 => 102,  413 => 101,  401 => 95,  396 => 94,  389 => 93,  378 => 90,  375 => 89,  368 => 88,  363 => 87,  360 => 86,  353 => 85,  342 => 82,  339 => 81,  332 => 80,  327 => 79,  324 => 78,  317 => 77,  313 => 76,  299 => 70,  296 => 69,  289 => 68,  284 => 67,  281 => 66,  273 => 65,  261 => 62,  254 => 61,  249 => 60,  246 => 59,  238 => 58,  235 => 57,  224 => 54,  221 => 53,  214 => 52,  209 => 51,  206 => 50,  199 => 49,  188 => 46,  185 => 45,  178 => 44,  173 => 43,  170 => 42,  163 => 41,  152 => 38,  149 => 37,  142 => 36,  137 => 35,  134 => 34,  127 => 33,  116 => 30,  113 => 29,  106 => 28,  101 => 27,  98 => 26,  91 => 25,  87 => 24,  83 => 22,  79 => 21,  76 => 20,  70 => 162,  68 => 161,  64 => 159,  62 => 20,  54 => 16,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
