<?php

/* ClassroomBundle:Classroom\Review:list.html.twig */
class __TwigTemplate_14d42aef0cb32909f6826674984155897a20b409744af898017a5cbaa59e399e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom\\Review:list.html.twig", 1);
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
        $context["nav"] = "review";
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
        $this->loadTemplate("TopxiaWebBundle:Review:Widget/list.html.twig", "ClassroomBundle:Classroom\\Review:list.html.twig", 7)->display($context);
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom\\Review:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }
}
