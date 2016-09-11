<?php

/* TopxiaWebBundle:Course/Part:normal-header-classroom-info.html.twig */
class __TwigTemplate_7a7ed039c3e0d743c47efa63ff32a6243f9c6411a1575a8d748acbd0f088b621 extends Twig_Template
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
        if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
        if ($_classroom_) {
            // line 2
            echo "\t该课程属于
\t\t<a href=\"";
            // line 3
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($_classroom_, "id", array()))), "html", null, true);
            echo "\">";
            if (isset($context["classroom"])) { $_classroom_ = $context["classroom"]; } else { $_classroom_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_classroom_, "title", array()), "html", null, true);
            echo "</a>
\t\t</br>
\t\t请加入后再学习
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-classroom-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  22 => 2,  19 => 1,);
    }
}
