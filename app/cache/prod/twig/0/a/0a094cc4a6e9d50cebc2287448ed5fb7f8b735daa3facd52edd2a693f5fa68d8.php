<?php

/* ClassroomBundle:ClassroomThread:list.html.twig */
class __TwigTemplate_0a094cc4a6e9d50cebc2287448ed5fb7f8b735daa3facd52edd2a693f5fa68d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:ClassroomThread:list.html.twig", 1);
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
        $context["script_controller"] = "classroombundle/controller/classroom/thread-list";
        // line 4
        $context["nav"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["classroomDescription"])) { $_classroomDescription_ = $context["classroomDescription"]; } else { $_classroomDescription_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter($_classroomDescription_, "")) : ("")), 100);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 8
        $this->loadTemplate("ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig", "ClassroomBundle:ClassroomThread:list.html.twig", 8)->display($context);
        // line 9
        echo "
  ";
        // line 10
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["filters"])) { $_filters_ = $context["filters"]; } else { $_filters_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:list", array("request" => $this->getAttribute($_app_, "request", array()), "target" => array("type" => "classroom", "id" => $this->getAttribute($_classroom_, "id", array())), "filters" => $_filters_)));
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  49 => 9,  47 => 8,  44 => 7,  41 => 6,  34 => 5,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
