<?php

/* ClassroomBundle:Classroom/Part/Service:workAdvise.html.twig */
class __TwigTemplate_0da2d5659259448b72268ce1a929eafedad5ee0d9ec53c5f35d376e200944545 extends Twig_Template
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
        echo "<li class=\"";
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if ($_active_) {
            echo "active";
        }
        echo "\">
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"就业指导 ";
        // line 2
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if ( !$_active_) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"完成全部学习后，老师对您的学习成果和能力水平给出评估，并提供专业化的就业指导\">业</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:workAdvise.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  19 => 1,);
    }
}
