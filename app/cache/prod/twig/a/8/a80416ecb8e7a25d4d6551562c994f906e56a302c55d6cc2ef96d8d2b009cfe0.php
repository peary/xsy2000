<?php

/* ClassroomBundle:Classroom\Course:notes-list.html.twig */
class __TwigTemplate_a80416ecb8e7a25d4d6551562c994f906e56a302c55d6cc2ef96d8d2b009cfe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom\\Course:notes-list.html.twig", 1);
        $this->blocks = array(
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
        // line 3
        $context["nav"] = "note";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["classroomDescription"])) { $_classroomDescription_ = $context["classroomDescription"]; } else { $_classroomDescription_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter($_classroomDescription_, "")) : ("")), 100);
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  
  ";
        // line 7
        $this->loadTemplate("ClassroomBundle:Classroom/Course:note-nav.html.twig", "ClassroomBundle:Classroom\\Course:notes-list.html.twig", 7)->display($context);
        // line 8
        echo "
  ";
        // line 9
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["courseIds"])) { $_courseIds_ = $context["courseIds"]; } else { $_courseIds_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course/Note:list", array("request" => $this->getAttribute($_app_, "request", array()), "courseIds" => $_courseIds_, "filters" => $_filters_)));
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom\\Course:notes-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }
}
