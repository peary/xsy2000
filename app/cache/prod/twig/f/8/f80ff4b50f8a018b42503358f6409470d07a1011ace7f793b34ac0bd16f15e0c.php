<?php

/* TopxiaWebBundle:MyTeaching:teaching.html.twig */
class __TwigTemplate_f80ff4b50f8a018b42503358f6409470d07a1011ace7f793b34ac0bd16f15e0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:teaching.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-teaching-courses";
        // line 7
        $context["type"] = "question";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    <span class=\"pull-right\">
      <a id=\"create-course\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_create");
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        echo "</a>
    </span>
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">

    ";
        // line 21
        $this->loadTemplate("TopxiaWebBundle:MyTeaching:course-tab.html.twig", "TopxiaWebBundle:MyTeaching:teaching.html.twig", 21)->display($context);
        // line 22
        echo "
    <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
      <thead>
      <tr>
        <th width=\"50%\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
        ";
        // line 27
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($_filter_ == "classroom")) {
            // line 28
            echo "        <th >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
            echo "</th>
        ";
        } else {
            // line 30
            echo "        <th>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("数"), "html", null, true);
            echo "</th>
        <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo ")</th>
        ";
        }
        // line 33
        echo "        <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 38
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courses_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 39
            echo "          <tr>
            <td>

              <a class=\"pull-left mrm\" href=\"";
            // line 42
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">
                <img class=\"course-picture\" src=\"";
            // line 43
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "\" width=\"100\">
              </a>

              <div class=\"mlm\">
                <a href=\"";
            // line 47
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "</a>

                ";
            // line 49
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "type", array()) == "live")) {
                // line 50
                echo "                  <span class=\"label label-success live-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
                echo "</span>
                ";
            }
            // line 52
            echo "
                ";
            // line 53
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($_filter_ == "classroom")) {
                // line 54
                echo "                  ";
                if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["classroom"] = (($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array"), null)) : (null));
                // line 55
                echo "                  ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if ( !$_classroom_) {
                    // line 56
                    echo "                    <span class=\"label label-danger live-label mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已移除"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 58
                echo "                ";
            }
            // line 59
            echo "              </div>

            </td>
            ";
            // line 62
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($_filter_ == "classroom")) {
                // line 63
                echo "            <td>
              ";
                // line 64
                if (isset($context["classrooms"])) { $_classrooms_ = $context["classrooms"]; } else { $_classrooms_ = null; }
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["classroom"] = (($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_classrooms_, $this->getAttribute($_course_, "id", array()), array(), "array"), null)) : (null));
                // line 65
                echo "              ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if ($_classroom_) {
                    // line 66
                    echo "                <a href=\"";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "classroomId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "classroomTitle", array()), "html", null, true);
                    echo "</a>
              ";
                }
                // line 68
                echo "            </td>
            ";
            } else {
                // line 70
                echo "            <td>";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 71
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_course_, "price", array()), "html", null, true);
                echo "</td>
            ";
            }
            // line 73
            echo "            <td>";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute($_course_, "status", array()));
            echo "</td>
            <td>
              <div class=\"btn-group\">
                <a class=\"btn btn-default btn-sm\" href=\"";
            // line 76
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
            echo "</a>

                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu pull-right\">
                  <li><a href=\"";
            // line 82
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 83
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件管理"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 84
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
            echo "</a></li>
                </ul>
              </div>

            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            echo "          <tr><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无在教的课程"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "      </tbody>
    </table>
    <nav class=\"text-center\">
      ";
        // line 96
        if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
        if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "paginator", array(0 => $_paginator_), "method"), "html", null, true);
        echo "
    </nav>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:teaching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 96,  293 => 93,  284 => 91,  264 => 84,  257 => 83,  250 => 82,  238 => 76,  230 => 73,  224 => 71,  218 => 70,  214 => 68,  204 => 66,  200 => 65,  196 => 64,  193 => 63,  190 => 62,  185 => 59,  182 => 58,  176 => 56,  172 => 55,  167 => 54,  164 => 53,  161 => 52,  155 => 50,  152 => 49,  143 => 47,  132 => 43,  127 => 42,  122 => 39,  116 => 38,  109 => 34,  104 => 33,  97 => 31,  87 => 30,  80 => 28,  77 => 27,  73 => 26,  67 => 22,  65 => 21,  57 => 16,  50 => 14,  45 => 11,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
