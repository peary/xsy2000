<?php

/* ClassroomBundle:Classroom/Course:note-nav.html.twig */
class __TwigTemplate_01dcdb45c74428126b4a183d6fd00f34b95409577c178821f5bb2f7ff711c260 extends Twig_Template
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
        echo "<div class=\"note-filter nav-filter clearfix\">
  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
      ";
        // line 4
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (((($this->getAttribute($_filters_, "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_filters_, "courseId", array()), "")) : ("")) == "")) {
            // line 5
            echo "        全部课程
      ";
        } else {
            // line 6
            echo " 
        ";
            // line 7
            if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
            if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute($_courses_, $this->getAttribute($_filters_, "courseId", array()), array(), "array"), "title", array(), "array"), 10);
            echo "
      ";
        }
        // line 9
        echo "       
      <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li class=\"";
        // line 13
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (((($this->getAttribute($_filters_, "courseId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_filters_, "courseId", array()), "")) : ("")) == "")) {
            echo "active";
        }
        echo "\">
        <a href=\"";
        // line 14
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("courseId" => ""))), "html", null, true);
        echo "\">全部课程</a>
      </li>
      ";
        // line 16
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courses_);
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 17
            echo "        <li class=\"";
            if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_filters_, "courseId", array()) == $this->getAttribute($_course_, "id", array()))) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 18
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("courseId" => $this->getAttribute($_course_, "id", array())))), "html", null, true);
            echo "\" title=\"";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($_course_, "title", array()), 10);
            echo "</a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
  </div>

  <ul class=\"nav nav-pills nav-pills-sm\">
    <li class=\"dropdown hidden-xs\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>排序：</span>
        ";
        // line 28
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort", array()) == "latest")) {
            // line 29
            echo "          最新笔记
        ";
        } elseif (($this->getAttribute($_filters_, "sort", array()) == "likeNum")) {
            // line 30
            echo " 
          点赞最多
        ";
        }
        // line 33
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 36
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort", array()) == "latest")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("sort" => "latest"))), "html", null, true);
        echo "\">最新笔记</a></li>
        <li class=\"";
        // line 37
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        if (($this->getAttribute($_filters_, "sort", array()) == "likeNum")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute($_classroom_, "id", array())), $_filters_), array("sort" => "likeNum"))), "html", null, true);
        echo "\">点赞最多</a></li>
      </ul>
    </li>
  </ul>

</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Course:note-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  119 => 36,  114 => 33,  109 => 30,  105 => 29,  102 => 28,  93 => 21,  75 => 18,  66 => 17,  61 => 16,  54 => 14,  47 => 13,  41 => 9,  34 => 7,  31 => 6,  27 => 5,  24 => 4,  19 => 1,);
    }
}
