<?php

/* TopxiaAdminBundle:Course:tab.html.twig */
class __TwigTemplate_99ce6483397e1bb4b720eeb40502652937cea569225c8a2abb3b9c6d5f8b2966 extends Twig_Template
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

\t<a href=\" ";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($_filter_ == "normal")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("普通课程"), "html", null, true);
        echo "</a>

\t<a href=\" ";
        // line 5
        echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
        if (($_filter_ == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "课程</a>

\t";
        // line 7
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip")) {
            // line 8
            echo "\t\t<a href=\" ";
            echo $this->env->getExtension('routing')->getUrl("admin_course", array("filter" => "vip"));
            echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
            if (isset($context["filter"])) { $_filter_ = $context["filter"]; } else { $_filter_ = null; }
            if (($_filter_ == "vip")) {
                echo "btn-primary";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程"), "html", null, true);
            echo "</a>
\t";
        }
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  49 => 8,  47 => 7,  35 => 5,  23 => 3,  19 => 1,);
    }
}
