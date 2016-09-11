<?php

/* TopxiaWebBundle:Group:layout.html.twig */
class __TwigTemplate_aaa4a5f96abbdf410362e54bf00ece2cbd4d88366bbb292b818cd1011902e9ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Group:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'group_body' => array($this, 'block_group_body'),
            'group_main' => array($this, 'block_group_main'),
            'group_side' => array($this, 'block_group_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "group-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "- ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "   ";
        if (isset($context["groupinfo"])) { $_groupinfo_ = $context["groupinfo"]; } else { $_groupinfo_ = null; }
        if (isset($context["is_groupmember"])) { $_is_groupmember_ = $context["is_groupmember"]; } else { $_is_groupmember_ = null; }
        $this->loadTemplate("TopxiaWebBundle:Group:group-header.html.twig", "TopxiaWebBundle:Group:layout.html.twig", 5)->display(array_merge($context, array("groupinfo" => $_groupinfo_, "is_groupmember" => ((array_key_exists("is_groupmember", $context)) ? (_twig_default_filter($_is_groupmember_, "")) : ("")))));
        // line 6
        echo "  
  ";
        // line 7
        $this->displayBlock('group_body', $context, $blocks);
    }

    public function block_group_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
      <div class=\"col-md-9 group-main\">
        ";
        // line 10
        $this->displayBlock('group_main', $context, $blocks);
        // line 11
        echo "      </div>

      <div class=\"col-md-3 group-side\">
        ";
        // line 14
        $this->displayBlock('group_side', $context, $blocks);
        // line 15
        echo "      </div>
    </div>
  ";
    }

    // line 10
    public function block_group_main($context, array $blocks = array())
    {
    }

    // line 14
    public function block_group_side($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 14,  78 => 10,  72 => 15,  70 => 14,  65 => 11,  63 => 10,  59 => 8,  53 => 7,  50 => 6,  45 => 5,  42 => 4,  35 => 2,  31 => 1,  29 => 3,  11 => 1,);
    }
}
