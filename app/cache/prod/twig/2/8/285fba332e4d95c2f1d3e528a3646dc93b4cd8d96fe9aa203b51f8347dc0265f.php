<?php

/* ClassroomBundle:Classroom:dashboard-nav.html.twig */
class __TwigTemplate_285fba332e4d95c2f1d3e528a3646dc93b4cd8d96fe9aa203b51f8347dc0265f extends Twig_Template
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
        echo "<div class=\"nav-btn-tab\">
  <ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"";
        // line 3
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (($_nav_ == "introduction")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_introductions", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">介绍</a></li>

    ";
        // line 5
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 6
            echo "      ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            $context["classroomPlan"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("GetClassroomPlanByClassroomId", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), null);
            // line 7
            echo "      ";
            if (isset($context["classroomPlan"])) { $_classroomPlan_ = $context["classroomPlan"]; } else { $_classroomPlan_ = null; }
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter($_classroomPlan_, null)) : (null)) && ($this->getAttribute($_classroomPlan_, "status", array()) == "published")) && $this->getAttribute($_app_, "user", array()))) {
                // line 8
                echo "        ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
                $context["planMember"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("UserClassroomPlanTaskNumInfo", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "userId" => $this->getAttribute($this->getAttribute($_app_, "user", array()), "id", array()))), null);
                // line 9
                echo "      ";
            }
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if (isset($context["planMember"])) { $_planMember_ = $context["planMember"]; } else { $_planMember_ = null; }
        if ( !((array_key_exists("planMember", $context)) ? (_twig_default_filter($_planMember_, null)) : (null))) {
            // line 12
            echo "      <li role=\"presentation\" class=\"";
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if (($_nav_ == "course")) {
                echo "active";
            }
            echo "\"><a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">课程 <small class=\"text-muted\">";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "courseNum", array()) != 0)) {
                echo "( ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "courseNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 16
            echo "      ";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:planNav", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "nav" => $_nav_)));
            echo "
    ";
        }
        // line 18
        echo "  ";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (($this->getAttribute($_classroom_, "showable", array()) || ( !$this->getAttribute($_classroom_, "showable", array()) && $_member_))) {
            // line 19
            echo "    <li role=\"presentation\" class=\"";
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if (($_nav_ == "review")) {
                echo "active";
            }
            echo "\"><a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_reviews", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">评价 <small class=\"text-muted\">";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "ratingNum", array()) != 0)) {
                echo "( ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "ratingNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>

    <li role=\"presentation\" class=\"";
            // line 21
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if (($_nav_ == "thread")) {
                echo "active";
            }
            echo "\"><a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">话题 <small class=\"text-muted\">";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "threadNum", array()) != 0)) {
                echo "( ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "threadNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>

    <li role=\"presentation\" class=\"";
            // line 23
            if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
            if (($_nav_ == "note")) {
                echo "active";
            }
            echo "\"><a  href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_course_notes_list", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">笔记 <small class=\"text-muted\">";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            if (($this->getAttribute($_classroom_, "noteNum", array()) != 0)) {
                echo "( ";
                if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "noteNum", array()), "html", null, true);
                echo " )";
            }
            echo "</small></a></li>
  ";
        }
        // line 25
        echo "
    <li role=\"presentation\" class=\"";
        // line 26
        if (isset($context["nav"])) { $_nav_ = $context["nav"]; } else { $_nav_ = null; }
        if (($_nav_ == "teachers")) {
            echo "active";
        }
        echo "\"><a href=\"";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_teachers", array("classroomId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">师资</a></li>

  </ul>
  
  ";
        // line 30
        if (isset($context["canManageClassroom"])) { $_canManageClassroom_ = $context["canManageClassroom"]; } else { $_canManageClassroom_ = null; }
        if ($_canManageClassroom_) {
            // line 31
            echo "  <div class=\"btnbar hidden-xs\">
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 32
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => "classroom", "targetId" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link\">
      <i class=\"es-icon es-icon-anonymous-iconfont\"></i>公告
    </a>
  </div>
  ";
        }
        // line 37
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:dashboard-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 37,  178 => 32,  175 => 31,  172 => 30,  159 => 26,  156 => 25,  137 => 23,  118 => 21,  98 => 19,  93 => 18,  85 => 16,  83 => 15,  80 => 14,  60 => 12,  56 => 11,  53 => 10,  50 => 9,  45 => 8,  40 => 7,  36 => 6,  34 => 5,  23 => 3,  19 => 1,);
    }
}
