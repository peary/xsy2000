<?php

/* ClassroomBundle:Classroom:introduction.html.twig */
class __TwigTemplate_e29465bc5d9f7b6a4aee642b276aa576f630f8469a679207d92f8379588e9af3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom:introduction.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
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
        $context["nav"] = "introduction";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        if (isset($context["classroomDescription"])) { $_classroomDescription_ = $context["classroomDescription"]; } else { $_classroomDescription_ = null; }
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter($_classroomDescription_, "")) : ("")), 100);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        $this->displayParentBlock("keywords", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"class-about\">
        ";
        // line 10
        if (isset($context["introduction"])) { $_introduction_ = $context["introduction"]; } else { $_introduction_ = null; }
        if (twig_test_empty($_introduction_)) {
            // line 11
            echo "            <p class=\"mvl tac text-muted\">暂无介绍</p>
        ";
        } else {
            // line 13
            echo "              ";
            if (isset($context["introduction"])) { $_introduction_ = $context["introduction"]; } else { $_introduction_ = null; }
            echo $_introduction_;
            echo "
        ";
        }
        // line 15
        echo "  </div>
    
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:introduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  66 => 13,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  47 => 5,  40 => 4,  34 => 2,  30 => 1,  28 => 3,  11 => 1,);
    }
}
