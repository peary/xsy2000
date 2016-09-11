<?php

/* ClassroomBundle:ClassroomManage:layout.html.twig */
class __TwigTemplate_8cd9f56bed18985bf7d0bd499a9a6e8628e4c54d7d12275c2d9c8fc620ae3092 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:ClassroomManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->loadTemplate("ClassroomBundle:ClassroomManage:header.html.twig", "ClassroomBundle:ClassroomManage:layout.html.twig", 6)->display($context);
        // line 7
        echo "
  <div class=\"row\">
    <div class=\"col-md-3\">
      ";
        // line 10
        $this->displayBlock('side', $context, $blocks);
        // line 16
        echo "    </div>
    <div class=\"col-md-9\">
      ";
        // line 18
        $this->displayBlock('main', $context, $blocks);
        // line 19
        echo "    </div>
  </div>
";
    }

    // line 10
    public function block_side($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter($_side_nav_, null)) : (null));
        // line 12
        echo "        <div class=\"sidenav\">
          ";
        // line 13
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if (isset($context["side_nav"])) { $_side_nav_ = $context["side_nav"]; } else { $_side_nav_ = null; }
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:ClassroomManage:menu", array("classroom" => $_classroom_, "sideNav" => $_side_nav_)));
        echo "
        </div>
      ";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  74 => 13,  71 => 12,  67 => 11,  64 => 10,  58 => 19,  56 => 18,  52 => 16,  50 => 10,  45 => 7,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
