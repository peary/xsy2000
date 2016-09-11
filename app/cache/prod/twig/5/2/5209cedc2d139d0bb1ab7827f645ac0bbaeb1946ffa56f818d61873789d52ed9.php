<?php

/* ClassroomBundle:Classroom/Part/Service:liveAnswer.html.twig */
class __TwigTemplate_5209cedc2d139d0bb1ab7827f645ac0bbaeb1946ffa56f818d61873789d52ed9 extends Twig_Template
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
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"一对一在线答疑 ";
        // line 2
        if (isset($context["active"])) { $_active_ = $context["active"]; } else { $_active_ = null; }
        if ( !$_active_) {
            echo "<small class='text-muted'>(暂未提供)</span>";
        }
        echo "\" data-content=\"提供专属的一对一在线答疑，快速答疑解惑\">疑</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:liveAnswer.html.twig";
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
