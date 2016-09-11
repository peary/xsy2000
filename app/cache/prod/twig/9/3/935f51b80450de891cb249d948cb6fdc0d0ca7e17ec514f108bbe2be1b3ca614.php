<?php

/* ClassroomBundle:Classroom/Course:list.html.twig */
class __TwigTemplate_935f51b80450de891cb249d948cb6fdc0d0ca7e17ec514f108bbe2be1b3ca614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom/Course:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["nav"] = "course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["classroomDescription"])) { $_classroomDescription_ = $context["classroomDescription"]; } else { $_classroomDescription_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter($_classroomDescription_, "")) : ("")), 100);
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/course/list");
        // line 7
        echo "  <div class=\"class-course-list\">
    ";
        // line 8
        if (isset($context["courses"])) { $_courses_ = $context["courses"]; } else { $_courses_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_courses_);
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 9
            echo "      <div class=\"course-item\">
        <div class=\"media\">
          <a class=\"media-left\" href=\"";
            // line 11
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 12
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "middlePicture", array()), "course.png"), "", "");
            echo "
          </a>
          <div class=\"media-body\">
            <div class=\"title\">
              <a href=\"";
            // line 16
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
            echo "</a>
            </div>
            <div class=\"score\">
              ";
            // line 19
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_web_macro_, "star", array(0 => $this->getAttribute($_course_, "rating", array())), "method"), "html", null, true);
            echo "
            </div>
            <div class=\"price hidden-xs\">
              原价：";
            // line 22
            $this->loadTemplate("TopxiaWebBundle:Course/Widget:course-price.html.twig", "ClassroomBundle:Classroom/Course:list.html.twig", 22)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
            // line 23
            echo "            </div>
            <span class=\"course-show\">
              <i class=\"es-icon es-icon-keyboardarrowdown\" data-lesson-url=\"";
            // line 25
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classrom_course_lessons_list", array("courseId" => $this->getAttribute($_course_, "id", array()), "classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\"></i>
            </span>
          </div>
        </div>

      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    
  </div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Course:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  113 => 25,  109 => 23,  107 => 22,  99 => 19,  89 => 16,  81 => 12,  76 => 11,  72 => 9,  54 => 8,  51 => 7,  49 => 6,  46 => 5,  39 => 3,  33 => 2,  29 => 1,  27 => 4,  11 => 1,);
    }
}
