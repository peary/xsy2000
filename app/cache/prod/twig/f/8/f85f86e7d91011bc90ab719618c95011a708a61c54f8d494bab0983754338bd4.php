<?php

/* TopxiaWebBundle:CourseLessonManage:index.html.twig */
class __TwigTemplate_f85f86e7d91011bc90ab719618c95011a708a61c54f8d494bab0983754338bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "lesson";
        // line 6
        $context["script_controller"] = "course-manage/lesson";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\"
\tdata-file-status-url=";
        // line 11
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_file_status", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo ">
\t<div class=\"panel-heading\">
\t\t<div class=\"pull-right\">

\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 15
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) == "normal")) {
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        } else {
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_create", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        }
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) == "normal")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播课时"), "html", null, true);
        }
        echo "</button>

\t\t\t";
        // line 17
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if ((($this->getAttribute($_course_, "type", array()) == "normal") || ($this->getAttribute($_course_, "type", array()) == "live"))) {
            // line 18
            echo "\t\t\t\t<button class=\"btn btn-info btn-sm\" id=\"lesson-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试卷"), "html", null, true);
            echo "</button>
\t\t\t";
        }
        // line 20
        echo "
\t\t\t<div class=\"btn-group\">
\t\t\t  <button type=\"button\" class=\"btn btn-sm btn-success dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t    <i class=\"glyphicon glyphicon-plus\"></i> ";
        // line 23
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), $this->env->getExtension('translator')->trans("章")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), $this->env->getExtension('translator')->trans("节")), "html", null, true);
        echo " <span class=\"caret\"></span>
\t\t\t  </button>
\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 27
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 ";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t    <li>
\t\t\t      <a href=\"#\" id=\"chapter-create-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\" data-url=\"";
        // line 30
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_chapter_create", array("id" => $this->getAttribute($_course_, "id", array()), "type" => "unit")), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加 ";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
        echo "</a>
\t\t\t    </li>
\t\t\t  </ul>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
        echo "
\t</div>

\t";
        // line 39
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        if (twig_test_empty($_items_)) {
            // line 40
            echo "
\t <div class=\"empty\">";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课时内容！"), "html", null, true);
            echo "</div>

\t ";
        }
        // line 44
        echo "
\t<div class=\"panel-body\">
\t\t<ul class=\"lesson-list sortable-list\" id=\"course-item-list\" data-sort-url=\"";
        // line 46
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_sort", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\">
\t\t\t";
        // line 47
        if (isset($context["items"])) { $_items_ = $context["items"]; } else { $_items_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_items_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["id"] => $context["item"]) {
            // line 48
            echo "\t\t\t  ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (twig_in_filter("chapter", $_id_)) {
                // line 49
                echo "\t\t\t    ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                $this->loadTemplate("TopxiaWebBundle:CourseChapterManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 49)->display(array_merge($context, array("chapter" => $_item_)));
                // line 50
                echo "\t\t\t  ";
            } elseif (twig_in_filter("lesson", $_id_)) {
                // line 51
                echo "\t\t\t  \t";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["files"])) { $_files_ = $context["files"]; } else { $_files_ = null; }
                $this->loadTemplate("TopxiaWebBundle:CourseLessonManage:list-item.html.twig", "TopxiaWebBundle:CourseLessonManage:index.html.twig", 51)->display(array_merge($context, array("lesson" => $_item_, "file" => (($this->getAttribute($_files_, $this->getAttribute($_item_, "mediaId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_files_, $this->getAttribute($_item_, "mediaId", array()), array(), "array"), null)) : (null)))));
                // line 52
                echo "\t\t\t  ";
                // line 56
                echo "\t\t\t  ";
            }
            // line 57
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
\t\t</ul>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 58,  189 => 57,  186 => 56,  184 => 52,  179 => 51,  176 => 50,  172 => 49,  168 => 48,  150 => 47,  145 => 46,  141 => 44,  135 => 41,  132 => 40,  129 => 39,  123 => 36,  111 => 30,  102 => 27,  93 => 23,  88 => 20,  79 => 18,  76 => 17,  57 => 15,  49 => 11,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
