<?php

/* TopxiaWebBundle:My:layout.html.twig */
class __TwigTemplate_504179eada21f3c0761c7181c387d9842908157fd0c9f19f2b01fbf90cf3a5e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:My:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
        // line 4
        echo "  ";
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (twig_in_filter($_side_nav_, array(0 => "my-teaching-courses", 1 => "my-teaching-classroom", 2 => "my-teaching-questions", 3 => "my-teaching-discussions", 4 => "my-teaching-check", 5 => "my-teaching-homework-check", 6 => "material-lib"))) {
            // line 5
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        } else {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
            echo " - ";
            $this->displayParentBlock("title", $context, $blocks);
            echo "
  ";
        }
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:My:avatarAlert"));
        echo "

<div class=\"row row-3-9\">
  <div class=\"col-md-3\">
    <div class=\"sidenav\">
      ";
        // line 18
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Point")) {
            // line 19
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的网校"), "html", null, true);
            echo "</li>
          <li class=\"list-group-item
           ";
            // line 22
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "growth")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的成长"), "html", null, true);
            echo "</a>
          </li>
        </ul>
      ";
        }
        // line 27
        echo "      ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "user", array()), "isTeacher", array(), "method")) {
            // line 28
            echo "        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的教学"), "html", null, true);
            echo "</li>
          <li class=\"list-group-item
           ";
            // line 31
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-courses")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("my_teaching_courses");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
            echo "</a>
          </li>

          <li class=\"list-group-item ";
            // line 35
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-classroom")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("my_teaching_classrooms");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所教"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo "
              </a>
          </li>


          <li class=\"list-group-item ";
            // line 41
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-questions")) {
                echo "active ";
            }
            echo "\">
            <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "question"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问答"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"list-group-item ";
            // line 45
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-discussions")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("话题"), "html", null, true);
            echo "</a>
          </li>

          <li class=\"list-group-item ";
            // line 49
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-teaching-check")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("course_manage_list_teacher_test_reviewing");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷批阅"), "html", null, true);
            echo "
            </a>
          </li>

          ";
            // line 54
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                // line 55
                echo "            <li class=\"list-group-item ";
                if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
                if (($_side_nav_ == "my-teaching-homework-check")) {
                    echo " active ";
                }
                echo "\">
              <a href=\"";
                // line 56
                echo $this->env->getExtension('routing')->getPath("my_teaching_homework_list");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业批改"), "html", null, true);
                echo "</a>
            </li>
          ";
            }
            // line 59
            echo "
          <li class=\"list-group-item ";
            // line 60
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "material-lib")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("material_lib_browsing");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教学资料库"), "html", null, true);
            echo "</a>
          </li>
        </ul>
      ";
        }
        // line 65
        echo "
      <ul class=\"list-group\">
        <li class=\"list-group-heading\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的学习"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item ";
        // line 68
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-learning")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的课程"), "html", null, true);
        echo "</a>
        </li>


          <li class=\"list-group-item ";
        // line 73
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-classroom")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("my_classrooms");
        echo "\">我的";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "</a>
          </li>


        ";
        // line 78
        if ($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled")) {
            // line 79
            echo "        <li class=\"list-group-item
          ";
            // line 80
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-learning-live")) {
                echo " active ";
            }
            echo "\">
          <a href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("my_live_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的直播课表"), "html", null, true);
            echo "</a>
        </li>
        ";
        }
        // line 84
        echo "
        <li class=\"list-group-item
        ";
        // line 86
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-questions")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("my_questions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的问答"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 90
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-discussions")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的话题"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 94
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-notes")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("my_notebooks");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的笔记"), "html", null, true);
        echo "</a>
        </li>

        ";
        // line 98
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
            // line 99
            echo "          <li class=\"list-group-item ";
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-homeworks")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 100
            echo $this->env->getExtension('routing')->getPath("my_homework_list");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的作业"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 103
        echo "
        <li class=\"list-group-item
        ";
        // line 105
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-quiz")) {
            echo " active ";
        }
        echo "\" >
          <a href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("my_quiz");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的考试"), "html", null, true);
        echo "</a>
        </li>
        <li class=\"list-group-item
        ";
        // line 109
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        if (($_side_nav_ == "my-group")) {
            echo " active ";
        }
        echo "\">
          <a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的小组"), "html", null, true);
        echo "</a>
        </li>
        ";
        // line 112
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 113
            echo "          <li class=\"list-group-item
          ";
            // line 114
            if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
            if (($_side_nav_ == "my-task")) {
                echo " active ";
            }
            echo "\" >
            <a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("my_task_calendar");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的任务"), "html", null, true);
            echo "</a>
          </li>
        ";
        }
        // line 118
        echo "      </ul>
    </div>
  </div>
  <div class=\"col-md-9\">";
        // line 121
        $this->displayBlock('main', $context, $blocks);
        echo "</div>
</div>

";
    }

    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 121,  413 => 118,  405 => 115,  398 => 114,  395 => 113,  393 => 112,  386 => 110,  379 => 109,  371 => 106,  364 => 105,  360 => 103,  352 => 100,  344 => 99,  342 => 98,  334 => 95,  327 => 94,  319 => 91,  312 => 90,  304 => 87,  297 => 86,  293 => 84,  285 => 81,  278 => 80,  275 => 79,  273 => 78,  264 => 74,  257 => 73,  248 => 69,  241 => 68,  237 => 67,  233 => 65,  224 => 61,  217 => 60,  214 => 59,  206 => 56,  198 => 55,  196 => 54,  187 => 50,  180 => 49,  167 => 46,  160 => 45,  147 => 42,  140 => 41,  129 => 36,  122 => 35,  114 => 32,  107 => 31,  102 => 29,  99 => 28,  95 => 27,  86 => 23,  79 => 22,  74 => 20,  71 => 19,  69 => 18,  61 => 13,  58 => 12,  55 => 11,  45 => 7,  37 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
