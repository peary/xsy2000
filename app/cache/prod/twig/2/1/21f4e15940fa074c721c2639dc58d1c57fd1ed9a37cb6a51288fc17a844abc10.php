<?php

/* ClassroomBundle:Classroom:layout.html.twig */
class __TwigTemplate_21f4e15940fa074c721c2639dc58d1c57fd1ed9a37cb6a51288fc17a844abc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/unjoin");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo " ";
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
        echo " ";
    }

    // line 8
    public function block_top_content($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:header", array("classroomId" => $this->getAttribute($_classroom_, "id", array()), "previewAs" => (($this->getAttribute($this->getAttribute($_app_, "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($_app_, "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method"), "")) : ("")))));
        echo "

";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "  ";
        $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom:layout.html.twig", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  67 => 14,  58 => 10,  55 => 9,  52 => 8,  43 => 4,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }
}
