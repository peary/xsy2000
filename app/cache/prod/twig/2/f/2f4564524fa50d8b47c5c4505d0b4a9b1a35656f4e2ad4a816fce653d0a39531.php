<?php

/* TopxiaAdminBundle:LiveCourse:tab.html.twig */
class __TwigTemplate_2f4564524fa50d8b47c5c4505d0b4a9b1a35656f4e2ad4a816fce653d0a39531 extends Twig_Template
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
        echo "<div class=\"btn-group\">
<a href=\" ";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "coming"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "coming")) {
            echo "btn-primary";
        }
        echo "\">即将开始的</a>
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "underway"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "underway")) {
            echo "btn-primary";
        }
        echo "\">当前进行中</a>
<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "end"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        if (($_status_ == "end")) {
            echo "btn-primary";
        }
        echo "\">已结束的</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  31 => 3,  22 => 2,  19 => 1,);
    }
}
