<?php

/* TopxiaWebBundle:CourseLesson/Part:lesson.html.twig */
class __TwigTemplate_88bd7f2b344ae82aa97532073f074855c2d30f51d155078750c3620ae28415f5 extends Twig_Template
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
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if ($_member_) {
            // line 2
            echo "  ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($_course_, "id", array()))) . "#lesson/") . $this->getAttribute($_item_, "id", array()));
        } else {
            // line 4
            echo "  ";
            if (isset($context["previewUrl"])) { $_previewUrl_ = $context["previewUrl"]; } else { $_previewUrl_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["lessonUrl"] = (($_previewUrl_ . "?lessonId=") . $this->getAttribute($_item_, "id", array()));
        }
        // line 6
        echo "<li class=\"period lesson-item lesson-item-";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id", array()), "html", null, true);
        echo "\" data-id=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id", array()), "html", null, true);
        echo "\" data-num=\"";
        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index", array()), "html", null, true);
        echo "\">
  ";
        // line 7
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_item_, "status", array()) == "published")) {
            // line 8
            echo "    ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (((($this->getAttribute($_item_, "free", array()) || $_member_) || $this->getAttribute($_course_, "buyable", array())) || $this->getAttribute($_course_, "tryLookable", array()))) {
                // line 9
                echo "      <a ";
                if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
                if ($_member_) {
                    echo "href=\"";
                    if (isset($context["lessonUrl"])) { $_lessonUrl_ = $context["lessonUrl"]; } else { $_lessonUrl_ = null; }
                    echo twig_escape_filter($this->env, $_lessonUrl_, "html", null, true);
                    echo "\" ";
                } else {
                    echo "href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    if (isset($context["lessonUrl"])) { $_lessonUrl_ = $context["lessonUrl"]; } else { $_lessonUrl_ = null; }
                    echo twig_escape_filter($this->env, $_lessonUrl_, "html", null, true);
                    echo "\"";
                }
                // line 10
                echo "      title=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title", array()), "html", null, true);
                echo "\">
      ";
                // line 11
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 11)->display($context);
                // line 12
                echo "      <span class=\"title\">  ";
                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                    echo " 课时";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number", array()), "html", null, true);
                    echo "：";
                }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "title", array());
                echo "</span>
      ";
                // line 13
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 13)->display($context);
                // line 14
                echo "      </a>
    ";
            } else {
                // line 16
                echo "      ";
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 16)->display($context);
                // line 17
                echo "      <span class=\"title\">  ";
                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                    echo " 课时";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number", array()), "html", null, true);
                    echo "：";
                }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->getAttribute($_item_, "title", array());
                echo "</span>
      ";
                // line 18
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 18)->display($context);
                // line 19
                echo "    ";
            }
            // line 20
            echo "  ";
        } else {
            // line 21
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 21)->display($context);
            // line 22
            echo "    <span class=\"title\">";
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                echo " 课时";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number", array()), "html", null, true);
                echo "：";
            }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "title", array());
            echo "</span>
    ";
            // line 23
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 23)->display($context);
            // line 24
            echo "  ";
        }
        // line 25
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 25,  135 => 24,  133 => 23,  121 => 22,  118 => 21,  115 => 20,  112 => 19,  110 => 18,  98 => 17,  95 => 16,  91 => 14,  89 => 13,  77 => 12,  75 => 11,  69 => 10,  55 => 9,  49 => 8,  46 => 7,  34 => 6,  28 => 4,  22 => 2,  19 => 1,);
    }
}
