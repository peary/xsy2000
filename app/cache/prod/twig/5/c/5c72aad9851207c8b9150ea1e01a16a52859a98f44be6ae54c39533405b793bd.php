<?php

/* TopxiaWebBundle:Course:normal-show.html.twig */
class __TwigTemplate_5c72aad9851207c8b9150ea1e01a16a52859a98f44be6ae54c39533405b793bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:normal-show.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "overview";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("course/show");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_course_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"course-detail-content\">

\t\t";
        // line 11
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if ( !$_member_) {
            // line 12
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          课程介绍
        </div>
        <div class=\"piece-body p-lg clearfix\">
          ";
            // line 17
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "about", array())) {
                // line 18
                echo "            ";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                echo $this->getAttribute($_course_, "about", array());
                echo "
          ";
            } else {
                // line 20
                echo "            <div class=\"text-muted\">暂无课程简介</div>
          ";
            }
            // line 22
            echo "        </div>
      </div>

      ";
            // line 25
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "goals", array())) {
                // line 26
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            课程目标
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 32
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "goals", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                    // line 33
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 34
                    if (isset($context["goal"])) { $_goal_ = $context["goal"]; } else { $_goal_ = null; }
                    echo twig_escape_filter($this->env, $_goal_, "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 41
            echo "
      ";
            // line 42
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if ($this->getAttribute($_course_, "audiences", array())) {
                // line 43
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            适合人群
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 49
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_course_, "audiences", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                    // line 50
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 51
                    if (isset($context["audience"])) { $_audience_ = $context["audience"]; } else { $_audience_ = null; }
                    echo twig_escape_filter($this->env, $_audience_, "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 58
            echo "
    ";
        } else {
            // line 60
            echo "\t\t\t<div class=\"es-piece\">
\t      <div class=\"piece-body\">
\t        ";
            // line 62
            if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
            if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => $this->getAttribute($_course_, "id", array()), "member" => $_member_, "previewUrl" => $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute($_course_, "id", array()))))));
            echo "
\t        
\t      </div>
\t    </div>
    ";
        }
        // line 67
        echo "    
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  151 => 62,  147 => 60,  143 => 58,  137 => 54,  127 => 51,  124 => 50,  119 => 49,  111 => 43,  108 => 42,  105 => 41,  99 => 37,  89 => 34,  86 => 33,  81 => 32,  73 => 26,  70 => 25,  65 => 22,  61 => 20,  54 => 18,  51 => 17,  44 => 12,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
