<?php

/* ClassroomBundle:Classroom:teachers-block.html.twig */
class __TwigTemplate_00ddb0c9a755d66ea9b1c3bcc3b69e96d5fb03f5aab786945dbd1aa1566ae074 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:teachers-block.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/teachers");
        // line 4
        echo "
<div class=\"panel panel-default\" id=\"class-teacher-column\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> 
      <i class=\"es-icon es-icon-assignmentind\"></i>班主任
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 12
        if (isset($context["headTeacher"])) { $_headTeacher_ = $context["headTeacher"]; } else { $_headTeacher_ = null; }
        if ($_headTeacher_) {
            // line 13
            echo "    <div class=\"media media-default\">
      <div class=\"media-left\">
        ";
            // line 15
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["headTeacher"])) { $_headTeacher_ = $context["headTeacher"]; } else { $_headTeacher_ = null; }
            echo $_web_macro_->getuser_avatar($_headTeacher_, "", "avatar-md");
            echo "
      </div>
      
      <div class=\"media-body\">
        <div class=\"title\">
          ";
            // line 20
            if (isset($context["web_macro"])) { $_web_macro_ = $context["web_macro"]; } else { $_web_macro_ = null; }
            if (isset($context["headTeacher"])) { $_headTeacher_ = $context["headTeacher"]; } else { $_headTeacher_ = null; }
            echo $_web_macro_->getuser_link($_headTeacher_, "link-light");
            echo "
        </div>
        ";
            // line 22
            if (isset($context["headTeacher"])) { $_headTeacher_ = $context["headTeacher"]; } else { $_headTeacher_ = null; }
            if ((($this->getAttribute($_headTeacher_, "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_headTeacher_, "title", array()), "")) : (""))) {
                // line 23
                echo "          <div class=\"content\">";
                if (isset($context["headTeacher"])) { $_headTeacher_ = $context["headTeacher"]; } else { $_headTeacher_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_headTeacher_, "title", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 25
                echo "          <div class=\"content\">还没有头衔</div>
        ";
            }
            // line 27
            echo "      </div>
    </div>
    ";
        } else {
            // line 30
            echo "      <div class=\"empty\">该";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "尚未设置班主任</div>
    ";
        }
        // line 32
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:teachers-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  79 => 30,  74 => 27,  70 => 25,  63 => 23,  60 => 22,  53 => 20,  43 => 15,  39 => 13,  36 => 12,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
