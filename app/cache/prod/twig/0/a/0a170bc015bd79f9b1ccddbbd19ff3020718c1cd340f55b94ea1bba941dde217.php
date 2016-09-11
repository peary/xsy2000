<?php

/* ClassroomBundle:Classroom:class-grid.html.twig */
class __TwigTemplate_0a170bc015bd79f9b1ccddbbd19ff3020718c1cd340f55b94ea1bba941dde217 extends Twig_Template
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
        echo "<div class=\"class-item\">
  <div class=\"class-img-wrap\">
    <a class=\"class-img\" href=\"";
        // line 3
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 4
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($_classroom_, "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($_classroom_, "title", array()), "lazyload_class.png");
        echo "
    </a>
    <div class=\"mask\">
      ";
        // line 7
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context["classroomMember"] = $this->env->getExtension('topxia_data_twig')->getData("ClassroomMember", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "userId" => (($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_app_, "user", array(), "any", false, true), "id", array()), 0)) : (0))));
        // line 8
        echo "
      ";
        // line 9
        if (isset($context["classroomMember"])) { $_classroomMember_ = $context["classroomMember"]; } else { $_classroomMember_ = null; }
        if (((array_key_exists("classroomMember", $context)) ? (_twig_default_filter($_classroomMember_, false)) : (false))) {
            // line 10
            echo "        <a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">继续学习</a>
      ";
        } else {
            // line 12
            echo "        <a href=\"";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">立即加入</a>
      ";
        }
        // line 14
        echo "    </div>
  </div>
  <h3><a class=\"link-dark\" href=\"";
        // line 16
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
        echo "\">";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo "</a></h3>
  <div class=\"metas\">共有<span>";
        // line 17
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "courseNum", array()), "html", null, true);
        echo "</span>门课程</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:class-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  63 => 16,  59 => 14,  52 => 12,  45 => 10,  42 => 9,  39 => 8,  35 => 7,  28 => 4,  23 => 3,  19 => 1,);
    }
}
