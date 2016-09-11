<?php

/* ClassroomBundle:Classroom/Course:lessons-list.html.twig */
class __TwigTemplate_bcb008fd689afd1827e2a9cc9dd8a2e2a1e8f2831a2012cb0ec2c5eec0934bda extends Twig_Template
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
        if (isset($context["courseId"])) { $_courseId_ = $context["courseId"]; } else { $_courseId_ = null; }
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if (isset($context["classroomId"])) { $_classroomId_ = $context["classroomId"]; } else { $_classroomId_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => $_courseId_, "member" => $_member_, "previewUrl" => $this->env->getExtension('routing')->getPath("classroom_course_lessons_preview", array("courseId" => $_courseId_, "classroomId" => $_classroomId_)))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Course:lessons-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
