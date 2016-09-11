<?php

/* TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig */
class __TwigTemplate_dac54fed88c497ca92ccf070db79a621bab29556323a518d625de4c0bdaf9557 extends Twig_Template
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
        if (isset($context["learnStatuses"])) { $_learnStatuses_ = $context["learnStatuses"]; } else { $_learnStatuses_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if ((($this->getAttribute($_learnStatuses_, $this->getAttribute($_item_, "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($_learnStatuses_, $this->getAttribute($_item_, "id", array()), array(), "array"), null)) : (null))) {
            // line 2
            echo "  ";
            if (isset($context["learnStatuses"])) { $_learnStatuses_ = $context["learnStatuses"]; } else { $_learnStatuses_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_learnStatuses_, $this->getAttribute($_item_, "id", array()), array(), "array") == "finished")) {
                // line 3
                echo "    <i class=\"es-icon es-icon-done1 color-primary status-icon\"></i>
  ";
            } else {
                // line 5
                echo "    <i class=\"es-icon es-icon-doing color-primary status-icon\"></i>
  ";
            }
        } else {
            // line 8
            echo "  <i class=\"es-icon es-icon-undone status-icon\"></i>
";
        }
        // line 10
        if (isset($context["member"])) { $_member_ = $context["member"]; } else { $_member_ = null; }
        if ( !$_member_) {
            // line 11
            if (isset($context["fromPlugin"])) { $_fromPlugin_ = $context["fromPlugin"]; } else { $_fromPlugin_ = null; }
            if ((((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter($_fromPlugin_, false)) : (false)) == false)) {
                // line 12
                echo "\t";
                if (isset($context["course"])) { $_course_ = $context["course"]; } else { $_course_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:statusLabel", array("courseId" => $this->getAttribute($_course_, "id", array()), "lessonId" => $this->getAttribute($_item_, "id", array()))));
                echo "
";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  44 => 11,  41 => 10,  37 => 8,  32 => 5,  28 => 3,  23 => 2,  19 => 1,);
    }
}
