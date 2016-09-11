<?php

/* TopxiaWebBundle:CourseLesson/Part:chapter.html.twig */
class __TwigTemplate_1b73f0bbc36d49d252113b75011aa7eb77393afd9f8c37d3f4cc55285878bcf0 extends Twig_Template
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
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_item_, "type", array()) == "unit")) {
            // line 2
            echo "  <li class=\"section\">
    <span class=\"title\">
    ";
            // line 4
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                echo " 
      第 ";
                // line 5
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number", array()), "html", null, true);
                echo " 
      ";
                // line 6
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                    // line 7
                    echo "        ";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
                    echo "
      ";
                } else {
                    // line 9
                    echo "        节
      ";
                }
                // line 10
                echo "：
    ";
            }
            // line 11
            echo " 
    ";
            // line 12
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title", array()), "html", null, true);
            echo "
    </span>
  </li>
";
        } else {
            // line 16
            echo "  <li class=\"chapter clearfix\">
    <i class=\"es-icon es-icon-toc\"></i>
    <span class=\"title\">
      ";
            // line 19
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                echo " 
        第 ";
                // line 20
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "number", array()), "html", null, true);
                echo " 
        ";
                // line 21
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                    // line 22
                    echo "          ";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 24
                    echo "          章
        ";
                }
                // line 25
                echo "：
      ";
            }
            // line 27
            echo "        ";
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title", array()), "html", null, true);
            echo "
      </span>
    </span>
    <span class=\"period-show\"><i class=\"es-icon es-icon-remove\"></i></span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  88 => 25,  84 => 24,  78 => 22,  76 => 21,  71 => 20,  67 => 19,  62 => 16,  54 => 12,  51 => 11,  47 => 10,  43 => 9,  37 => 7,  35 => 6,  30 => 5,  26 => 4,  22 => 2,  19 => 1,);
    }
}
