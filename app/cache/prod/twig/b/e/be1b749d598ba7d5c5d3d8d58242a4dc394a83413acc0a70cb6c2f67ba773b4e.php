<?php

/* TopxiaWebBundle:Course:Widget/course-grid.html.twig */
class __TwigTemplate_be1b749d598ba7d5c5d3d8d58242a4dc394a83413acc0a70cb6c2f67ba773b4e extends Twig_Template
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
        echo "<div class=\"course-item\">
  <div class=\"course-img\">
    <a href=\"";
        // line 3
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">
      ";
        // line 4
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "discountId", array()) > 0)) {
            // line 5
            echo "        ";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (($this->getAttribute($_course_, "discount", array()) == 0)) {
                // line 6
                echo "          <!-- 限免 -->
          <span class=\"tag-discount free\"></span>
        ";
            } else {
                // line 9
                echo "          <!-- 折扣 -->
          <span class=\"tag-discount\"></span>
        ";
            }
            // line 12
            echo "      ";
        }
        // line 13
        echo "      ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "serializeMode", array()) == "serialize")) {
            // line 14
            echo "        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
      ";
        } elseif (($this->getAttribute($_course_, "serializeMode", array()) == "finished")) {
            // line 16
            echo "        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
      ";
        }
        // line 18
        echo "      ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        if (($this->getAttribute($_course_, "type", array()) == "live")) {
            // line 19
            echo "        <span class=\"tags\">
          <span class=\"tag-live\"></span>
        </span>
      ";
        }
        // line 23
        echo "      ";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_course_, "middlePicture", array()), "course.png"), "img-responsive", $this->getAttribute($_course_, "title", array()));
        echo "
    </a>
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 28
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($_course_, "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">
        ";
        // line 29
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas clearfix\">
      ";
        // line 33
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 34
            echo "      <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_course_, "studentNum", array()), "html", null, true);
            echo "</span>
      ";
        }
        // line 36
        echo "      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
        if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_course_, "ratingNum", array()), "html", null, true);
        echo "</span>
      ";
        // line 37
        $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Widget/course-grid.html.twig", 37)->display(array_merge($context, array("shows" => "price")));
        // line 38
        echo "    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  108 => 37,  102 => 36,  95 => 34,  93 => 33,  85 => 29,  80 => 28,  70 => 23,  64 => 19,  60 => 18,  56 => 16,  52 => 14,  48 => 13,  45 => 12,  40 => 9,  35 => 6,  31 => 5,  28 => 4,  23 => 3,  19 => 1,);
    }
}
