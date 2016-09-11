<?php

/* TopxiaWebBundle:Default:live-course.html.twig */
class __TwigTemplate_b58d35f394470f726f35077839b6842895e53532aca0c028b71418922d8dba86 extends Twig_Template
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
        $context["RecentLiveCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveCourses", array("count" => 4));
        // line 2
        if (isset($context["RecentLiveCourses"])) { $_RecentLiveCourses_ = $context["RecentLiveCourses"]; } else { $_RecentLiveCourses_ = null; }
        if ($_RecentLiveCourses_) {
            // line 3
            echo "  <section class=\"live-course-section ";
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>";
            // line 6
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "title", array()), $this->getAttribute($_config_, "defaultTitle", array()))) : ($this->getAttribute($_config_, "defaultTitle", array()))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">";
            // line 7
            if (isset($context["config"])) { $_config_ = $context["config"]; } else { $_config_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_config_, "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_config_, "subTitle", array()), $this->getAttribute($_config_, "defaultSubTitle", array()))) : ($this->getAttribute($_config_, "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"course-list\"> 
        <div class=\"row\"> 
          ";
            // line 11
            if (isset($context["RecentLiveCourses"])) { $_RecentLiveCourses_ = $context["RecentLiveCourses"]; } else { $_RecentLiveCourses_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_RecentLiveCourses_);
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
                echo " 
            <div class=\"col-lg-3 col-md-4 col-xs-6\">
              ";
                // line 13
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:live-course.html.twig", 13)->display(array_merge($context, array("course" => $_course_)));
                echo " 

              ";
                // line 15
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context["lesson"] = (($this->getAttribute($_course_, "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_course_, "lesson", array(), "array"), null)) : (null));
                // line 16
                echo "              ";
                if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                if ((($_lesson_ && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($_lesson_, "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($_lesson_, "endTime", array())))) {
                    // line 17
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                } else {
                    // line 26
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 31
                    if (isset($context["lesson"])) { $_lesson_ = $context["lesson"]; } else { $_lesson_ = null; }
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_lesson_, "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                }
                // line 35
                echo "
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
            // line 38
            echo "
          ";
            // line 39
            if (isset($context["RecentLiveCourses"])) { $_RecentLiveCourses_ = $context["RecentLiveCourses"]; } else { $_RecentLiveCourses_ = null; }
            $context["emptyCourseNum"] = (4 - twig_length_filter($this->env, $_RecentLiveCourses_));
            // line 40
            echo "          ";
            if (isset($context["emptyCourseNum"])) { $_emptyCourseNum_ = $context["emptyCourseNum"]; } else { $_emptyCourseNum_ = null; }
            if (($_emptyCourseNum_ > 0)) {
                // line 41
                echo "            ";
                if (isset($context["emptyCourseNum"])) { $_emptyCourseNum_ = $context["emptyCourseNum"]; } else { $_emptyCourseNum_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $_emptyCourseNum_));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 42
                    echo "              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("敬请期待"), "html", null, true);
                    echo "
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "          ";
            }
            // line 56
            echo "        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("live_course_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多直播"), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:live-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 60,  169 => 59,  164 => 56,  161 => 55,  146 => 46,  140 => 42,  134 => 41,  130 => 40,  127 => 39,  124 => 38,  108 => 35,  100 => 31,  93 => 26,  86 => 22,  79 => 17,  75 => 16,  72 => 15,  66 => 13,  45 => 11,  37 => 7,  32 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
