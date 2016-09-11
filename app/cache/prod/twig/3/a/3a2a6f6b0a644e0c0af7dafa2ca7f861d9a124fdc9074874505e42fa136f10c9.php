<?php

/* @root/src/Topxia/WebBundle/Extensions/StatusTemplate/become_student.tpl.html.twig */
class __TwigTemplate_3a2a6f6b0a644e0c0af7dafa2ca7f861d9a124fdc9074874505e42fa136f10c9 extends Twig_Template
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
        if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
        $context["props"] = $this->getAttribute($_status_, "properties", array());
        // line 2
        echo "
";
        // line 3
        if (isset($context["mode"])) { $_mode_ = $context["mode"]; } else { $_mode_ = null; }
        if (($_mode_ == "simple")) {
            // line 4
            echo "\t";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            if (($this->getAttribute($_status_, "objectType", array()) == "course")) {
                // line 5
                echo "\t\t加入课程 <a  class=\"link-dark\" href=\"";
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute($_props_, "course", array()), "id", array()))), "html", null, true);
                echo "\" title=\"来自《";
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_props_, "course", array()), "title", array()), "html", null, true);
                echo "》\">";
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute($_props_, "course", array()), "title", array()), 15);
                echo "</a>
\t";
            } else {
                // line 7
                echo "\t\t加入";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo " <a  class=\"link-dark\" href=\"";
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($this->getAttribute($_props_, "classroom", array()), "id", array()))), "html", null, true);
                echo "\" title=\"来自《";
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_props_, "classroom", array()), "title", array()), "html", null, true);
                echo "》\">";
                if (isset($context["props"])) { $_props_ = $context["props"]; } else { $_props_ = null; }
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute($_props_, "classroom", array()), "title", array()), 15);
                echo "</a>
\t";
            }
            // line 9
            echo "  
";
        } elseif (($_mode_ == "full")) {
            // line 11
            echo "\t";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            if (($this->getAttribute($_status_, "objectType", array()) == "course")) {
                // line 12
                echo "\t\t
\t";
            } else {
                // line 14
                echo "\t\t
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@root/src/Topxia/WebBundle/Extensions/StatusTemplate/become_student.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  68 => 12,  64 => 11,  60 => 9,  45 => 7,  32 => 5,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
