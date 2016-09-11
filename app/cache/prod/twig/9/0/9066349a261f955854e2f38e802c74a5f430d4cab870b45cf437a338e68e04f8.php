<?php

/* ClassroomBundle:Classroom/Part/Service:teacherAnswer.html.twig */
class __TwigTemplate_9066349a261f955854e2f38e802c74a5f430d4cab870b45cf437a338e68e04f8 extends Twig_Template
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
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"提问必答 ";
        // line 2
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if ( !$_active_) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"对于提问做到有问必答，帮您扫清学习过程中的种种障碍\">问</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:teacherAnswer.html.twig";
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
