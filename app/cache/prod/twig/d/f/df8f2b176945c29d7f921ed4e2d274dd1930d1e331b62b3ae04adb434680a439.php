<?php

/* ClassroomBundle:Classroom:join-layout.html.twig */
class __TwigTemplate_df8f2b176945c29d7f921ed4e2d274dd1930d1e331b62b3ae04adb434680a439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:join-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/classroom-join");
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

    // line 7
    public function block_top_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
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
        echo "  <div class=\"class-detail row\">
    ";
        // line 16
        $this->displayBlock('main', $context, $blocks);
        // line 17
        echo "  </div>
";
    }

    // line 16
    public function block_main($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:join-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 16,  66 => 17,  64 => 16,  61 => 15,  58 => 14,  49 => 9,  46 => 8,  43 => 7,  34 => 3,  30 => 1,  28 => 5,  11 => 1,);
    }
}
