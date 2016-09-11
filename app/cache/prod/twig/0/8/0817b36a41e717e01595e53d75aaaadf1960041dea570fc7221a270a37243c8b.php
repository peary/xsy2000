<?php

/* TopxiaAdminBundle:EduCloud:cloud.html.twig */
class __TwigTemplate_0817b36a41e717e01595e53d75aaaadf1960041dea570fc7221a270a37243c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:cloud.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_my_cloud";
        // line 4
        $context["submenu"] = "cloud-introduction";
        // line 5
        $context["script_controller"] = "cloud/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
\t";
        // line 8
        if (isset($context["content"])) { $_content_ = $context["content"]; } else { $_content_ = null; }
        echo $_content_;
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:cloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }
}
