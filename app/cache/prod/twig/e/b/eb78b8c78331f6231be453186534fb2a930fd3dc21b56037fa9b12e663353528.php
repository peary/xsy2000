<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig */
class __TwigTemplate_eb78b8c78331f6231be453186534fb2a930fd3dc21b56037fa9b12e663353528 extends Twig_Template
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
        echo "<li data-id=\"#bar-course-list\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的课程"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
        echo "\"><a href=\"javascript:;\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("esbar_my_course");
        echo "\"><i class=\"es-icon es-icon-book\"></i></a></li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
